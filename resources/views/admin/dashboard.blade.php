<x-admin-layout :back="$back">
   <x-slot:title>{{$title}}</x-slot:title>
   <x-slot:active>{{$active}}</x-slot:active>
   <div>
      <div class="grid grid-cols-3 gap-4">
         <div class="bg-blue-100 p-4 rounded-lg">
             <h2 class="font-semibold">Tulisan Terbaru</h2>
             <p class="text-lg font-bold">{{$newBlog->title}}</p>
         </div>
         <div class="bg-blue-100 p-4 rounded-lg">
             <h2 class="font-semibold">Jumlah Tulisan</h2>
             <p class="text-lg font-bold">{{$countBlog}}</p>
         </div>
         <div class="bg-blue-100 p-4 rounded-lg">
             <h2 class="font-semibold">Total User</h2>
             <p class="text-lg font-bold">{{$countUser}}</p>
         </div>
         <div class="bg-blue-100 p-4 rounded-lg">
             <h2 class="font-semibold">Total Komentar</h2>
             <p class="text-lg font-bold">{{$countComment}}</p>
         </div>
         <div class="bg-blue-100 p-4 rounded-lg">
             <h2 class="font-semibold">Komentar Terbanyak</h2>
             <p class="text-lg font-bold">{{$mostCommentedBlog->title}}</p>
         </div>
         <div class="bg-blue-100 p-4 rounded-lg">
             <h2 class="font-semibold">User Paling Aktif</h2>
             <p class="text-lg font-bold">{{$mostActiveUser->name}}</p>
         </div>
     </div>
   </div>
</x-admin-layout>