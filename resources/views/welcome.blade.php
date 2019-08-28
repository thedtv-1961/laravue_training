<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>Laravel</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" type="text/css" href="/css/app.css">
</head>
<body>
<div id="app">
    <example-component></example-component>
    <hr>
    <my-component></my-component>
    <hr>
    <user-dashboard></user-dashboard>
    <hr>
</div>
<script src="/js/app.js"></script>
</body>
</html>
