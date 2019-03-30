const functions = require('firebase-functions');
const vision = require('@google-cloud/vision');
const client = new vision.ImageAnnotatorClient();

// https://firebase.google.com/docs/functions/write-firebase-functions
const admin = require('firebase-admin');
admin.initializeApp();


var fileName = './trash_if_this_doesnt_work_we_are_screwed.jpg'

exports.cv_images = functions.https.onRequest((request, response) => {
    const [result] =  client.labelDetection(fileName);
    console.log(result);
    const labels = result.labelAnnotations;
    console.log('Labels:');
    labels.forEach(label => console.log(label.description));
});
