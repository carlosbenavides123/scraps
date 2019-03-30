from flask import Flask,render_template, request,jsonify,Response
import json
import os
os.environ["GOOGLE_APPLICATION_CREDENTIALS"]="/Users/carlosbenavides/Downloads/My Project-1ce2fa388d5e.json"
import io
from google.cloud import vision
client = vision.ImageAnnotatorClient()

app = Flask(__name__)

@app.route('/api/gcm/', methods = ['POST'])
def home():
    path = request.data
    path = json.loads(path)
    path = path['photo']

    if not path:
        path = './trash_if_this_doesnt_work_we_are_screwed.jpg'

    with io.open(path, 'rb') as image_file:
        content = image_file.read()
    image = vision.types.Image(content=content)
    response = client.label_detection(image=image)
    labels = response.label_annotations
    return str(labels)
    dump()
    return labels;

if __name__ == '__main__':
    app.run(host ='0.0.0.0', port = 3333, debug = True)