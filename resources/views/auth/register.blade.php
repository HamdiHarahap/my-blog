<x-layout>
    <x-slot:title>Registrerpage</x-slot:title>
    <div class="mx-auto max-w-screen-xl flex flex-col items-center min-h-[85vh] justify-center">
        <h2 class="font-bold text-xl">Register your account</h2>
        <form action="{{route('register.post')}}" class="mx-auto mt-6 flex flex-col gap-3" method="POST">
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
                <label for="email" class="font-semibold">Email</label>
                <input type="email" id="email" name="email" class="border-2 rounded-md px-2 py-1 w-[25rem] outline-blue-600">
            </div>
            <div class="flex flex-col gap-1">
                <label for="password" class="font-semibold">Password</label>
                <input type="password" id="password" name="password" class="border-2 rounded-md px-2 py-1 w-[25rem] outline-blue-600">
            </div>
            <div class="flex flex-col gap-1">
                <label for="password" class="font-semibold">Confirm Password</label>
                <input type="password" id="password" name="confirm" class="border-2 rounded-md px-2 py-1 w-[25rem] outline-blue-600">
            </div>
            <button type="submit" class="bg-indigo-600 rounded-lg text-white font-semibold py-2 mt-3">Register</button>
        </form>
        <span class="mt-3">
            Already have an account? <a href="/login" class="text-blue-600 font-semibold">log in now</a>  
        </span>
    </div>    
</x-layout>