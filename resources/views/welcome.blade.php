<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
</head>
<body class="antialiased bg-slate-100">
@include('layouts.header')

<div id="app"></div>
@vite(['resources/css/app.css', 'resources/js/app.js'])
</body>
</html>
