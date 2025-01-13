<x-layout>
    <x-slot:title>Blogpage</x-slot:title>
    <div class="pt-24 mx-auto"> 
        <article class="p-6 text-black flex flex-col justify-center w-[40rem] mx-auto">
            <div class="flex mb-5 text-gray-500">
                <span class="text-sm">{{$blog->created_at->format('d F Y')}}</span>
            </div>
            <div class="h-full">
                <h2 class="mb-2 text-3xl font-bold tracking-tight text-gray-900 text-center">
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
        <form action="{{ route('comment.store', $blog->slug) }}" method="POST" class="p-6 bg-white text-black flex flex-col justify-center w-[40rem] mx-auto mt-10 gap-4 items-center">
            @csrf
            <input type="hidden" name="user_id" value="{{$user->id}}">
            <input type="hidden" name="blog_id" value="{{$blog->id}}">
            <label for="komentar" class="text-xl font-bold">Komentar untuk blog ini</label>
            <textarea name="komentar" id="komentar" class="border-2 outline-blue-600 px-3 py-1 h-[6rem] w-full rounded-md"></textarea>
            <button type="submit" class="bg-blue-600 rounded-lg text-white font-semibold py-2 px-12 mt-3 w-fit">Kirim</button>
        </form>
        <hr>
        <div class="p-6 text-black flex flex-col justify-center w-[40rem] mx-auto gap-3">
            @foreach ($comment as $com)
                <div class="flex items-center justify-between gap-4 mb-3">
                    <img src="{{ asset('assets/icon/user.svg') }}" alt="" class="w-14 border-2 border-black rounded-full p-2">
                    <div class="flex flex-col gap-3 w-full">
                        <h3 class="font-bold text-xl">{{$com->user->name}}</h3>
                        <p>{{$com->komentar}}</p>
                    </div>
                    @if ($com->user_id == $user->id)
                        <form action="{{route('comment.destroy', ['blog' => $blog->slug, 'id' => $com->id])}}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" class="bg-red-500 p-1 rounded-md" onclick="return confirm('Anda ingin menghapus komentar anda?')">
                                <img src="{{asset('assets/icon/trash.svg')}}" alt="" class="w-7">
                            </button>
                        </form>
                    @endif
                </div>
                <hr>
            @endforeach
        </div>
    </div>
</x-layout>

