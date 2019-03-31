from flask import Flask,render_template, request,jsonify,Response
from google.oauth2 import service_account
import json
import os
os.environ["GOOGLE_APPLICATION_CREDENTIALS"]="/Users/carlosbenavides/Downloads/My Project-1ce2fa388d5e.json"
import io
from google.cloud import vision
import ast

credentials = service_account.Credentials. from_service_account_file("/Users/carlosbenavides/Downloads/My Project-1ce2fa388d5e.json")
client = vision.ImageAnnotatorClient(credentials=credentials)


app = Flask(__name__)

@app.route('/api/gcm/', methods = ['GET'])
def home():
    path = None
    if request.data:
        path = request.data
        path = json.loads(path)
        path = path['photo']

    if not path:
        path = './trash_if_this_doesnt_work_we_are_screwed.jpg'

    with io.open(path, 'rb') as image_file:
        content = image_file.read()

    image = vision.types.Image(content=content)

    response = client.label_detection(image=image)
    response =  str(response)
    response = response.replace(" ", "")
    response = response.replace("\n", "")
    response = response.replace("    ", "")
    response = response.replace("label_annotations", "")
    response = response.replace("\"d","\",d")
    response = response.replace("\"s","\",s")
    response = response.replace("topicality", ",topicality")
    response = response.replace("}{", "},{")
    res = []
    start = 0
    for i in range(2, range(response)):
        if response[i-2] + response[i-1] + response[i] == "},{":
            res.append(response[start:i])
            start = i
    if start != len(response):
        res.append(response[start:i])

    return jsonify(res)
    # python_dict = json.loads(response)

    return jsonify(response)

    # response = response.replace("score", ",score")
    return str(response)
    labels = response.label_annotations
    # return jsonify(str(labels))
    # return '123'
    # return response
    labels = response.label_annotations
    return jsonify(str(labels));

if __name__ == '__main__':
    app.run(host ='0.0.0.0', port = 3333, debug = True)