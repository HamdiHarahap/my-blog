<?php

namespace Database\Seeders;

use App\Models\Blog;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Blog::create([
            'title' => 'Belajar dari Kesederhanaan Alam',
            'slug' => Str::slug('Belajar dari Kesederhanaan Alam'),
            'body' => 'Beberapa hari lalu, aku memutuskan untuk meluangkan waktu menikmati alam di sebuah taman kecil dekat rumah. Langit cerah dengan awan putih yang tampak seperti lukisan, dan burung-burung kecil berkicau seolah menyambut pagi. Aku duduk di bawah pohon rindang, memperhatikan dedaunan yang bergoyang perlahan tertiup angin. Dalam kesederhanaan itu, aku merasa ada ketenangan yang sulit dijelaskan. Alam seakan-akan mengajarkanku untuk berhenti sejenak dan menghargai hal-hal kecil yang sering kali terlewatkan. Waktu berjalan tanpa terasa, dan aku menyadari betapa pentingnya momen-momen sederhana ini. Hidup sering kali penuh tekanan dan rutinitas yang melelahkan, tetapi duduk di taman itu memberiku ruang untuk bernapas. Aku pulang dengan perasaan yang lebih ringan dan pikiran yang lebih jernih. Sejak saat itu, aku berjanji pada diriku sendiri untuk lebih sering menyisihkan waktu untuk meresapi keindahan yang ada di sekelilingku.'
        ]);

        Blog::create([
            'title' => 'Menghadapi Tantangan di Tahun Baru',
            'slug' => Str::slug('Menghadapi Tantangan di Tahun Baru'),
            'body' => 'Tahun baru sering kali menjadi momen penuh harapan dan optimisme, tetapi kali ini aku memulainya dengan tantangan yang tak terduga. Target pekerjaan yang semakin menumpuk dan perubahan besar dalam kehidupan pribadi membuatku merasa tertekan di minggu-minggu awal. Aku mulai menyadari bahwa fokus hanya pada hasil tanpa menikmati proses membuat semuanya terasa lebih berat. Alih-alih terburu-buru, aku mencoba mengambil langkah kecil dengan menyusun prioritas, memberi ruang untuk diri sendiri, dan mengingatkan bahwa tidak apa-apa untuk merasa lelah. Namun, di balik setiap tantangan selalu ada pelajaran berharga. Aku belajar untuk lebih mendengarkan diriku sendiri, menghargai waktu istirahat, dan meminta dukungan dari orang-orang terdekat. Perlahan tapi pasti, aku mulai melihat tantangan ini sebagai kesempatan untuk tumbuh, bukan sekadar hambatan. Tahun ini mungkin belum sempurna, tetapi aku yakin bahwa dengan kesabaran dan kerja keras, aku bisa menjadikannya tahun yang bermakna. Setiap langkah kecil adalah kemenangan, dan itu cukup untuk membuatku terus maju.'
        ]);
    }
}
