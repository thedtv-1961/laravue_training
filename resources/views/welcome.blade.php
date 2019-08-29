<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>Laravel</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" type="text/css" href="/css/app.css">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
<div id="app">
    <br>
    <br>
    <tailwind-css></tailwind-css>
    <br>
    <br>
    <br>
    <example-component></example-component>
    <hr>
    <my-component></my-component>
    <hr>
    <user-dashboard></user-dashboard>
    <hr>
    <form-input></form-input>
    <hr>
    <event-click></event-click>
</div>
<script src="/js/app.js"></script>
</body>
</html>
