# import google.cloud
# from google.cloud import vision
# from google.cloud.vision import types
# from PIL import Image, ImageDraw

# client = vision.ImageAnnotatorClient()

# content = face_file.read()
# image = types.Image(content=content)

# return client.face_detection(image=image, max_results=max_results).face_annotations
import os
os.environ["GOOGLE_APPLICATION_CREDENTIALS"]="/Users/carlosbenavides/Downloads/My Project-1ce2fa388d5e.json"


def detect_labels(path):
    """Detects labels in the file."""
    import io
    from google.cloud import vision
    client = vision.ImageAnnotatorClient()

    with io.open(path, 'rb') as image_file:
        content = image_file.read()

    image = vision.types.Image(content=content)

    response = client.label_detection(image=image)
    labels = response.label_annotations
    print('Labels:')
    print(labels)
    # for label in labels:
    #     print(label.)

detect_labels("./photos/trash_if_this_doesnt_work_we_are_screwed.jpg")

# /Users/carlosbenavides/Downloads/My Project-1ce2fa388d5e.json