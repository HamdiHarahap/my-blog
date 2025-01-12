<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}}</title>
    @vite('resources/css/app.css')
</head>
<body class="h-full">
    <div class="min-h-full">
        <x-navbar></x-navbar>
        <main>
            <div class="px-52 py-7 min-h-screen">
                {{$slot}}
            </div>
        </main>
        <x-footer></x-footer>
    </div>
</body>
</html>