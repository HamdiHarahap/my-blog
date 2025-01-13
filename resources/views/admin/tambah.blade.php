<x-admin-layout :back="$back">
    <x-slot:title>{{$title}}</x-slot:title>
    <x-slot:active>{{$active}}</x-slot:active>
    <div>
        <h1 class="text-sm font-semibold mb-6">Tambah Tulisan</h1>
        <form action="{{route('admin.store')}}" method="POST" class="flex flex-col gap-4 items-start" enctype="multipart/form-data">
            @csrf
            <ul class="flex flex-col gap-6 w-full">
                <li class="flex flex-col">
                    <label for="title" class="mb-1">Judul Tulisan: </label>
                    <input type="text" name="title" id="title" class="px-3 py-2 border-b-2 border-black outline-none w-[30rem]" required>
                </li>
                <li class="flex flex-col">
                    <label for="body" class="mb-1">Isi Tulisan: </label>
                    <textarea name="body" id="body" class="px-3 py-2 border-b-2 border-black outline-none w-[30rem]" required></textarea>
                </li>
            </ul>
            <button type="submit" name="submit" class="bg-blue-900 rounded-lg px-4 py-2 text-white">Submit</button>
        </form>
    </div>
 </x-admin-layout>