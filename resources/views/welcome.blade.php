<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Scraps</title>
    </head>
    <body>
        <div id="app">
            <app></pp>
        </div>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
    <script src="https://www.gstatic.com/firebasejs/5.9.2/firebase.js"></script>
        <script>
        // Initialize Firebase
        var config = {
            apiKey: "AIzaSyDQhAlow7Z5MkpydWKb2mpvIy5qBq8zhp4",
            authDomain: "scraps-62751.firebaseapp.com",
            databaseURL: "https://scraps-62751.firebaseio.com",
            projectId: "scraps-62751",
            storageBucket: "scraps-62751.appspot.com",
            messagingSenderId: "226967432877"
        };
        firebase.initializeApp(config);
    </script>
</html>
