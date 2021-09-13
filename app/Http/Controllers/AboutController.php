<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about(){
        return view('about', ['about' => 'Jurusan Teknologi Informasi merupakan salah satu jurusan di Politeknik Negeri Malang, berdasarkan keputusan Direkur Politeknik Negeri Malang nomor 53 tahun 2015 yang terdiri dari Program Studi Diploma III Manajemen Informatika dan Program Studi Diploma IV Teknik Informatika.

        Pelaksanaan pendidikannya mengacu pada UU No. 20 tahun 2003 tentang Sistem Pendidikan Nasional dan diwujudkan dengan menerapkan kurikulum berbasis kompetensi (KBK) yang sesuai dengan peraturan Kemendiknas No. 045/U/tahun 2002. Untuk mewujudkan tuntutan kebutuhan tersebut, Jurusan Teknologi Informasi telah melaksanakan kerjasama dengan berbagai pihak, baik dalam maupun luar negeri sebagai perwujudan visi, misi, dan tujuan.
        
        Visi Jurusan Teknologi Informasi Polinema : 
        Jurusan Teknologi Informasi Polinema sebagai pusat unggulan di bidang teknologi informasi dan rekayasa perangkat lunak di tingkat nasional maupun internasional.
        
        Misi Jurusan Teknologi Informasi Polinema : 
        1. Melaksanakan pendidikan vokasi yang inovatif berdasarkan pada sistem pendidikan terapan dengan memanfaatkan kemajuan teknologi informasi dan telekomunikasi, sehingga mampu menghasilkan lulusan yang siap kerja dengan daya saing global.
        2. Melaksanakan penelitian terapan berbasis produk dan jasa bidang informatika.
        3. Melaksanakan pengabdian masyarakat dengan menggunakan kemajuan teknologi informasi untuk meningkatkan kesejahteraan.
        4. Terwujudnya kerjasama yang saling menguntungkan dengan berbagai pihak baik di dalam maupun di luar negeri pada bidang teknologi informasi.
        
        Tujuan Jurusan Teknologi Informasi Polinema :
        1. Menghasilkan lulusan bidang teknologi informasi dan rekayasa perangkat lunak yang berketuhanan, beretika dan bermoral baik, berpengetahuan dan berketrampilan tinggi, siap bekerja dan/atau berwirausaha yang mampu bersaing dalam skala global,
        2. Menghasilkan penelitian terapan bidang teknologi informasi dan rekayasa perangkat lunak yang berskala internasional, meningkatkan efektifitas, efisiensi, dan produktivitas dalam dunia usaha dan industri, serta mengarah pada pencapaian Hak atas Kekayaan Intelektual (HaKI), perolehan paten, dan kesejahteraan masyarakat,
        3. Penyebarluasan ilmu pengetahuan dan teknologi serta pemberian layanan jasa secara profesional dalam bidang teknologi informasi dan rekayasa perangkat lunak sehingga bermanfaat secara langsung dalam meningkatkan kesejahteraan masyarakat,
        4. Terwujudnya kerjasama yang saling menguntungkan dengan berbagai pihak baik di dalam maupun di luar negeri pada bidang teknologi informasi untuk meningkatkan daya saing.']);
    }
}
