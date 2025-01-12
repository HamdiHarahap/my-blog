<x-layout>
    <x-slot:title>Loginpage</x-slot:title>
    <div class="mx-auto max-w-screen-xl flex flex-col items-center min-h-[85vh] justify-center ">
        <h2 class="font-bold text-xl">Log in to HamdiWrites</h2>
        <form action="{{route('login.post')}}" class="mx-auto mt-6 flex flex-col gap-3" method="POST">
            @if ($errors->any())
                <div class="bg-red-300 px-8 py-4 rounded-md">
                    <ul class="list-disc">
                        @foreach ($errors->all() as $err)
                        <li >{{$err}}</li>
                        @endforeach
                    </ul>
                </div> 
            @endif
            @csrf
            <div class="flex flex-col gap-1">
                <label for="username" class="font-semibold">Username</label>
                <input type="text" id="username" name="name" class="border-2 rounded-md px-2 py-1 w-[25rem] outline-blue-600">
            </div>
            <div class="flex flex-col gap-1">
                <label for="password" class="font-semibold">Password</label>
                <input type="password" id="password" name="password" class="border-2 rounded-md px-2 py-1 w-[25rem] outline-blue-600">
            </div>
            <button type="submit" class="bg-indigo-600 rounded-lg text-white font-semibold py-2 mt-3">Log in</button>
        </form>
        <span class="mt-3">
            Don't have an account? <a href="/register" class="text-blue-600 font-semibold">Register now</a>  
        </span>
    </div>    
</x-layout>