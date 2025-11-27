<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">

<head>
    <link rel="shortcut icon" href="{{asset("heart.png")}}" type="image/x-icon">
    <meta charset="UTF-8"/>
    <meta content="dark" name="color-scheme"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>{{$title}}</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>

<body class="bg-pixel-dark text-pixel-light flex xl:gap-16 gap-8 px-4 sm:h-dvh sm:overflow-clip">
{{$slot}}
</body>
</html>
