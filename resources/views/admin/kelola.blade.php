<x-admin-layout :back="$back">
    <x-slot:title>{{$title}}</x-slot:title>
    <x-slot:active>{{$active}}</x-slot:active>
    <div>
        <div class="flex justify-between">
            <h1 class="text-sm font-semibold">Daftar Tulisan</h1>
            <a href="/admin/manage/tambah" class="text-sm font-semibold text-blue-600">Tambah Tulisan</a>
        </div>
        <table class="border mr-4 w-full mt-4">
            <tr class="border text-left bg-blue-900 text-white">
                <th class="p-2">No</th>
                <th class="p-2">Title</th>
                <th class="p-2">Slug</th>
                <th class="p-2">Body</th>
                <th class="p-2">Action</th>
            </tr>
            <?php $no = 1 ?>
            @foreach ($data as $item) 
                <tr class="border">
                    <td class="p-2">{{$no++}}</td>
                    <td class="p-2">{{$item->title}}</td>
                    <td class="p-2">{{$item->slug}}</td>
                    <td class="p-2">{{Str::limit($item->body, 150)}}</td>
                    <td class="p-2">
                        <div class="flex gap-1">
                            <a href="/admin/manage/edit/{{$item->id}}" class="flex items-center justify-center bg-yellow-300 rounded-lg cursor-pointer p-1 w-fit">
                                <img src="../assets/icon/edit.svg" alt="logo" class="w-6">
                            </a>
                            <form action="{{route('admin.destroy', ['id' => $item->id])}}" method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit" onclick="return confirm('Anda yakin?')" class="flex items-center justify-center bg-red-600 rounded-lg cursor-pointer p-1 w-fit">
                                    <img src="../assets/icon/trash.svg" alt="logo" class="w-6">
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
 </x-admin-layout>
