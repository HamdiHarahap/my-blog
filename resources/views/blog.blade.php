<x-layout>
    <x-slot:title>Blogpage</x-slot:title>
    <div class="pt-24 mx-auto max-w-screen-xl">
        <h1 class="text-3xl font-bold text-center mb-8">BLOG SAYA</h1>  
        <div class="grid gap-8 lg:grid-cols-3 md:grid-cols-2">
            @foreach ($data as $blog)
                <article class="p-6 bg-white rounded-lg border border-gray-200 shadow-md text-black flex flex-col justify-between">
                    <div class="flex mb-5 text-gray-500">
                        <span class="text-sm">{{$blog->created_at->diffForHumans()}}</span>
                    </div>
                    <div class="h-full">
                        <a href="/blog/{{$blog->slug}}" class="hover:underline">
                            <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">
                                {{$blog->title}}   
                            </h2>
                        </a>
                        <p class="mb-5 font-light text-gray-600">
                            {{Str::limit($blog->body, 250)}}
                        </p>
                    </div>
                    <div class="text-right">
                        <a href="/blog/{{$blog->slug}}" class="inline-flex items-center font-medium text-blue-600 hover:underline text-sm">
                            Read more
                            <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        </a>
                    </div>
                </article>    
            @endforeach
        </div>  
    </div>
</x-layout>
