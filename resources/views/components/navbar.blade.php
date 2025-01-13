<nav class="flex justify-between px-52 py-12 shadow-lg border-b items-center fixed w-full z-50 bg-white h-[5rem]">
    <a href="/home">
        <h3 class="text-xl font-bold text-blue-600">HamdiWrites</h3>
    </a>
    <ul class="flex gap-5 w-full items-center justify-center">
        <li class="font-semibold text-base hover:text-blue-600"><a href="/about">About</a></li>
        <li class="font-semibold text-base hover:text-blue-600"><a href="/blog">Blog</a></li>
        <li class="font-semibold text-base hover:text-blue-600"><a href="/contact">Contact</a></li>
    </ul>
    <div class="flex gap-4 items-center">
        <div class="bg-gray-200 px-5 py-[0.35rem] rounded-md absolute hidden right-64 infoAccount">    
            <p class="font-bold mb-1">{{$slot}}</p>
            <a href="/logout" class="hover:text-red-600 font-semibold text-base" onclick="return confirm('Anda yakin akan logout?')">logout</a>
        </div>
        <button class="btnAccount">
            <img src="{{asset('assets/icon/user.svg')}}" alt="" class="w-10 border-2 border-black rounded-full p-1">
        </button>
    </div>
</nav>