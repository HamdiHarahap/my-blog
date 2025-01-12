<x-layout>
    <x-slot:title>Blogpage</x-slot:title>
    <div class="pt-24 mx-auto"> 
        <article class="p-6 bg-white text-black flex flex-col justify-center w-[40rem] mx-auto">
            <div class="flex mb-5 text-gray-500">
                <span class="text-sm">{{$blog->created_at->format('d F Y')}}</span>
            </div>
            <div class="h-full">
                <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 text-center">
                    {{$blog->title}}   
                </h2>
                <p class="mb-5 font-light text-gray-600">
                    {{$blog->body}}
                </p>
            </div>
            <div class="text-left">
                <a href="/blog" class="inline-flex items-center font-medium text-blue-600 hover:underline text-sm">
                    &laquo; Back
                </a>
            </div>
        </article>    
    </div>
</x-layout>

