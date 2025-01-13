<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}}</title>
    @vite(['resources/css/app.css', 'resources/js/main.js'])
</head>
<body class="h-full">
    <div class="min-h-full">
        
        @unless(request()->is('login') || request()->is('register'))
            <x-navbar>
                {{$account}}
            </x-navbar>
        @endunless

        <main>
            <div class="px-52 py-7 min-h-screen w-full">
                {{$slot}}
            </div>
        </main>

        @unless(request()->is('login') || request()->is('register'))
            <x-footer></x-footer>
        @endunless
    </div>
</body>
</html>