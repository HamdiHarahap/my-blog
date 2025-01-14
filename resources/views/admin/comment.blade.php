<x-admin-layout :back="$back">
    <x-slot:title>{{$title}}</x-slot:title>
    <x-slot:active>{{$active}}</x-slot:active>
    <div>
        <h1 class="text-sm font-semibold">Daftar User</h1>
        <table class="border mr-4 w-full mt-4">
            <tr class="border text-left bg-blue-900 text-white">
                <th class="p-2">No</th>
                <th class="p-2">Nama</th>
                <th class="p-2">Komentar</th>
                <th class="p-2">Password</th>
            </tr>
            <?php $no = 1 ?>
            @foreach ($data as $item) 
                <tr class="border">
                    <td class="p-2">{{$no++}}</td>
                    <td class="p-2">{{$item->name}}</td>
                    <td class="p-2">{{$item->email}}</td>
                    <td class="p-2">{{$item->password}}</td>
                </tr>
            @endforeach
        </table>
    </div>
 </x-admin-layout>
