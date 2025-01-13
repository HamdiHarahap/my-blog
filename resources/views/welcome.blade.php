<x-layout>
    <x-slot:title>Homepage</x-slot:title>
    <x-slot:account>{{$account->name}}</x-slot:account>
    <div class="flex justify-center items-center min-h-screen gap-5">
        <div class="flex items-center justify-center relative">
            <div class="bg-blue-500 w-[17rem] h-[17rem] rounded-full absolute"></div>
            <img src="assets/images/hero.png" alt="" class="w-[25rem] z-10">
        </div>
        <div>
            <p class="text-lg font-semibold">Hello! Selamat datang di blog saya. Web ini <br> berisi tulisan-tulisan tentang apapun. Ayo <br> lihat isi blog saya &raquo;</p>
            <button class="bg-blue-600 px-3 py-2 rounded-lg text-white mt-5">
                <a href="/blog">Lihat Blog</a>
            </button>
        </div>
    </div>
</x-layout>