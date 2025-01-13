<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$title}}</title>
    @vite(['resources/css/app.css', 'resources/js/main.js'])
</head>
<body class="bg-[#F2F9FE] h-[50rem]">
    <header class="bg-blue-900 w-48 h-screen fixed text-white flex flex-col justify-between py-16 top-0 font-semibold">
        <nav>
            <h2 class="text-center text-xl mb-6">HamdiWrites <br> Admin</h2>
            <ul class="flex flex-col gap-4">
                <li class="{{ $active == 'dashboard' ? 'bg-[#F2F9FE] px-10 py-3 text-black rounded-s-lg' : '' }}">
                    <a href="/admin/dashboard" class="flex gap-2 {{ $active == 'dashboard' ? '' : 'px-10 py-3' }}">
                        <img src="{{ asset('/assets/icon/dashboard' . ($active == 'dashboard' ? '-dark' : '') . '.svg') }}" alt="logo" class="w-6">
                        Dashboard
                    </a>
                </li>                
                <li class="{{ $active == 'manage' ? 'bg-[#F2F9FE] px-10 py-3 text-black rounded-s-lg' : '' }}">
                    <a href="/admin/manage" class="flex gap-2 {{ $active == 'manage' ? '' : 'px-10 py-3' }}">
                        <img src="{{ asset('/assets/icon/manage' . ($active == 'manage' ? '-dark' : '') . '.svg') }}" alt="logo" class="w-6">
                        Kelola
                    </a>
                </li>
                <li class="{{ $active == 'user' ? 'bg-[#F2F9FE] px-10 py-3 text-black rounded-s-lg' : '' }}">
                    <a href="/admin/user" class="flex gap-2 {{ $active == 'user' ? '' : 'px-10 py-3' }}">
                        <img src="{{ asset('/assets/icon/customer' . ($active == 'user' ? '-dark' : '') . '.svg') }}" alt="logo" class="w-6">
                        User
                    </a>
                </li>
                <li class="{{ $active == 'report' ? 'bg-[#F2F9FE] px-10 py-3 text-black rounded-s-lg' : '' }}">
                    <a href="/admin/report" class="flex gap-2 {{ $active == 'report' ? '' : 'px-10 py-3' }}">
                        <img src="{{ asset('/assets/icon/report' . ($active == 'report' ? '-dark' : '') . '.svg') }}" alt="logo" class="w-6">
                        Laporan
                    </a>
                </li>
            </ul>
        </nav>
        <div>
            @php
                $back = $back ?? false;
            @endphp
            @if ($back == true)
                <div class="flex gap-2 px-12 py-3">
                    <img src="{{asset('assets/icon/back.svg')}}" alt="logo" class="w-6">
                    <a href="/admin/manage">Kembali</a>
                </div>
            @endif
            <div class="flex gap-2 px-12 py-3">
                <img src="{{asset('assets/icon/logout.svg')}}" alt="logo" class="w-6">
                <a href="/logout" onclick="return confirm('Anda ingin logout?')">Logout</a>
            </div>
        </div>
    </header>
    <main class="ps-52 flex flex-col gap-8">
        <aside class="bg-[#FFFFFF] flex justify-between p-5 items-center rounded-lg mr-4 mt-4">
            <div class="font-semibold">
                <h2 class="text-sm">Menu</h2>
                <h1 class="text-2xl">{{$title}}</h1>
            </div>
        </aside>
        <section class="mr-4 bg-[#FFFFFF] rounded-lg p-5">
            {{$slot}}
        </section>
    </main>
</body>
</html>