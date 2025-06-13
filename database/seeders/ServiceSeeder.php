<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run(): void
    {
        Service::create([
            'jenis_tes'=> 'Pemeriksaan Darah Rutin',
            'slug'=> 'pemeriksaan-darah-rutin',
            'image'=> 'tes_darah.jpg',
            'harga'=>30000,
            'lama_periksa'=>'30 menit',
            'manfaat'=>'Pemeriksaan Darah Rutin merupakan penilaian dasar komponen eritrosit, leukosit, trombosit. Manfaat pemeriksaan ini untuk evaluasi anemia, leukemia, infeksi bakteri, virus parasit dan kemungkinan alergi, polisitemia, kemungkinan kelainan perdarahan',
            'persiapan'=>'Tidak Ada Persiapan Khusus',
            'deskripsi'=>'Pemeriksaan atau tes hematologi rutin merupakan penilaian dasar untuk beberapa komponen darah. Mulai dari komponen eritrosit (sel darah merah), leukosit (sel darah putih) hingga komponen trombosit (sel terkecil dari darah). Pemeriksaan ini dapat dilakukan untuk mengevaluasi atau mendeteksi berbagai kondisi medis. Contohnya seperti infeksi, leukemia (kanker sel darah putih), anemia (kekurangan sel darah merah sehat), polisitemia, hingga kemungkinan kelainan perdarahan'
        ]);
        Service::create([
            'jenis_tes'=> 'Hemoglobin',
            'slug'=> 'hemoglobin',
            'image'=> 'hemoglobin.jpeg',
            'harga'=>20000,
            'lama_periksa'=>'5 menit',
            'manfaat'=>'Pemeriksaan kadar hemoglobin (Hb) memiliki beberapa manfaat penting, terutama dalam mendeteksi anemia dan memantau kondisi kesehatan secara umum. Pemeriksaan ini juga bisa membantu dalam mendiagnosis penyakit tertentu dan memantau efektivitas pengobatan',
            'persiapan'=>'Tidak Ada Persiapan Khusus',
            'deskripsi'=>'Hemoglobin merupakan komponen utama sel darah Hemoglobin merupakan kompenon utama sel darah merah dan berfungsi untuk transport oksigen. Kekurangan hemoglobin pada darah akan menyebabkan penyakit Anemia.</br>
            Anemia adalah suatu kondisi tubuh yang ditandai dengan hasil pemeriksaan kadar hemoglobin (Hb) dalam darah lebih rendah dari normal, yang bisa disebabkan jumlah sel darah merah yang kurang (contohnya pada perdarahan berat akibat kecelakaan, atau sebab lainnya), atau jumlah sel darah merah cukup tapi kandungan Hb didalam sel darah merah kurang.
            Batas nilai Hb adalah:
            •	Ibu hamil anemia jika kadar Hb kurang dari 11 g/dL.  <br>
            •	Anak 12 – 14 tahun dan Perempuan tidak hamil (usia lebih dari 15 tahun anemia jika kadar Hb kurang dari 12 g/dL
            '
        ]);
        Service::create([
            'jenis_tes'=> 'Glukosa Darah Sewaktu',
            'slug'=> 'glukosa-darah-sewaktu',
            'image'=> 'glukosa_darah.jpg',
            'harga'=>20000,
            'lama_periksa'=>'5 menit',
            'manfaat'=>'
            •	Deteksi Dini Diabetes, GDS dapat membantu mendeteksi diabetes jika kadar gula darah di atas 200 mg/dL <br>
            •	Pemantauan Pengobatan: </br>
            Bagi penderita diabetes, GDS membantu memantau kadar gula darah harian dan menyesuaikan pengobatan serta pola makan <br>
            •	Pengendalian Gula Darah Harian: <br>
            Pemeriksaan ini membantu individu dengan diabetes untuk mengontrol kadar gula darah mereka sehari-hari, yang penting untuk mencegah komplikas<br>
            •	Identifikasi Hipoglikemia: </br>
            GDS juga dapat digunakan untuk mengidentifikasi kadar gula darah rendah (hipoglikemia), yang berbahaya bagi penderita diabetes <br>
            •	Skrining Umum:</br>
            GDS sering digunakan sebagai skrining awal untuk memeriksa kadar gula darah seseorang <br>
            ',
            'persiapan'=>'Tidak Ada Persiapan Khusus',
            'deskripsi'=>'Pemeriksaan gula darah sewaktu adalah pemeriksaan gula darah yang dapat dilakukan kapan saja tanpa perlu berpuasa terlebih dahulu. Pemeriksaan ini biasanya dilakukan untuk menilai kadar gula pada pasien diabetes atau pasien yang mengalami penurunan kesadaran.'
        ]);
        Service::create([
            'jenis_tes'=> 'Glukosa Darah Puasa',
            'slug'=> 'glukosa-darah-puasa',
            'image'=> 'glukosa_darah_puasa.jpg',
            'harga'=>20000,
            'lama_periksa'=>'5 menit',
            'manfaat'=>'
                •	Mendeteksi kadar gula darah dalam keadaan puasa untuk mengidentifikasi potensi masalah seperti prediabetes atau diabetes <br>
                •	Mengontrol Diabetes <br>
                •	Mengidentifikasi Kadar Gula Darah yang Tinggi (Hiperglikemia) atau Rendah (Hipoglikemia) <br>
            ',
            'persiapan'=>'Pasien diwajibkan untuk berpuasa 8-14 jam. (Boleh minum air putih)',
            'deskripsi'=>'Cek glukosa puasa adalah pemeriksaan untuk mengukur gula darah seseorang setelah puasa semalaman. kurang lebih selama 8–12 jam.
            Kadar gula darah puasa 99 mg/dL atau lebih rendah adalah normal, 100-125 mg/dL menunjukkan kamu memiliki pradiabetes, dan 126 mg/dL atau lebih tinggi menunjukkan kamu mengidap diabetes. Lamanya puasa yang dilakukan sebelum pemeriksaan gula darah puasa adalah 8–12 jam. Puasa melebihi waktu yang disarankan dapat memengaruhi hasil pemeriksaan kadar gula darah. Pada waktu puasa ini, Anda tidak boleh mengonsumsi apa pun kecuali air putih.'
        ]);
        Service::create([
            'jenis_tes'=> 'Kolesterol',
            'slug'=> 'kolesterol',
            'image'=> 'kolesterol.png',
            'harga'=>30000,
            'lama_periksa'=>'5 menit',
            'manfaat'=>'Tujuan pemeriksaan kolesterol yakni untuk mengetahui  jumlah kadar komponen lemak dalam darah dan dapat mengetahui resiko terjadinya timbunan plak atau  penyumbatan di pembuluh darah yang dapat memicu berbagai penyakit kardiovaskuler, seperti serangan jantung, penyakit jantung coroner, hipertensi dan stroke',
            'persiapan'=>'Sebelum melakukan pemeriksaan kolesterol, pasien diwajibkan untuk berpuasa selama 12 jam sebelum pengambilan sampel darah. Selain itu, terdapat beberapa hal yang penting untuk diperhatikan sebelum menjalani tes kolesterol, di antaranya:
            •	Tidak mengonsumsi obat-obatan atau suplemen yang dapat memengaruhi hasil pemeriksaan <br>
            •	Menghindari konsumsi makanan yang mengandung lemak tinggi. <br>
            •	Tidak mengonsumsi alkohol. <br>
            •	Menghindari aktivitas fisik dan olahraga secara berlebihan. <br>
            
            ',
            'deskripsi'=>'Pemeriksaan kolesterol total merupakan pemeriksaan darah yang mengukur konsentrasi kolesterol total yang dibawa dalam darah oleh lipoprotein. Konsentrasi kolesterol yang tinggi dalam darah akan menyebabkan kolesterol menempel di dinding bagian dalam pembuluh darah arteri dan membentuk ateroma atau plak, sehingga pembuluh darah menyempit dan akhirnya menimbulkan serangan jantung jika menghambat pembuluh darah menuju jantung atau strokte jika menghambat pembuluh darah arteri yang menuju otak'
        ]);
        Service::create([
            'jenis_tes'=> 'Pemeriksaan Asam Urat',
            'slug'=> 'pemeriksaan_asam_urat',
            'image'=> 'asam_urat.png',
            'harga'=>25000,
            'lama_periksa'=>'5 menit',
            'manfaat'=>'Jika terlalu banyak asam urat di dalam tubuh, maka dapat membentuk kristal di persendian. Kondisi ini akan menimbulkan peradangan dan rasa nyeri di persendian jika dibiarkan begitu saja tanpa pemeriksaan dan pengobatan
            Bahkan, asam urat yang sudah parah dapat memicu penyakit lain seperti gagal ginjal dan batu ginjal. Oleh karena itu, penting menerapkan pola makan sehat untuk menghindari naiknya uric acid di dalam tubuh',
            'persiapan'=>'Tidak ada persiapan khusus',
            'deskripsi'=>'Asam urat adalah zat sisa hasil metabolisme purin yang sebagian besar disaring oleh ginjal dan dikeluarkan melalui urine. Jika tubuh memproduksi asam urat dalam jumlah yang berlebihan atau ginjal tidak mampu mengeluarkannya dengan efektif, kadar asam urat dalam darah meningkat. Kondisi ini disebut hiperurisemia yang dapat menyebabkan terbentuknya kristal asam urat tajam di sendi, jaringan, dan organ lainnya, menyebabkan peradangan dan nyeri. Kadar Asam Urat yang tinggi dapat menyebabkan penyakit asam urat dan harus menurunkannya agar tidak berbahaya bagi tubuh.
            Kadar asam urat dalam darah yang aman sebagai berikut:
            •	Pada laki-laki: 3,4 – 7,0 mg/dL <br>
            •	Pada perempuan: 2,4 – 6,0 mg/dL<br>
            •	Pada kelompok anak-anak: 2,0 – 5,5 mg/dL <br>
            
            '
        ]);
        Service::create([
            'jenis_tes'=> 'Pemeriksaan hCG',
            'slug'=> 'pemeriksaan_hcg',
            'image'=> 'kehamilan.png',
            'harga'=>20000,
            'lama_periksa'=>'10 menit',
            'manfaat'=>'
            •	Memastikan apakah seseorang sedang hamil atau tidak.<br>
            •	Menjadi bagian dari tes kelainan kehamilan, seperti kehamilan ektopik dan kehamilan molar.<br>
            •	Memeriksa dan memantau kondisi pasien yang dicurigai mengalami keguguran.<br>
            •	Memantau kondisi pasien setelah mengalami keguguran.<br>
            •	Mendiagnosis kanker rahim (choriocarcinoma).<br>
             
            ',
            'persiapan'=>'
            •	Sampel urine yang digunakan sebaiknya berasal dari air kencing pertama pada pagi hari saat jadwal pemeriksaan<br>
            •	Selain urine pagi, urine sewaktu juga dapat digunakan.<br>
            ',
            'deskripsi'=>'hCG atau kepanjangan dari human chorionic gonadotropin adalah jenis hormon yang diproduksi oleh plasenta. Adanya hCG pada urine dan darah menjadi salah satu tanda kehamilan'
        ]);
        Service::create([
            'jenis_tes'=> 'Pemeriksaan Hepatitis B/HBsAg',
            'slug'=> 'pemeriksaan_hepatitis_b',
            'image'=> 'hepatitis_b.png',
            'harga'=>30000,
            'lama_periksa'=>'30 menit',
            'manfaat'=>'Pemeriksaan HBsAg adalah untuk deteksi dini serta diagnosis hepatitis B yang menyebabkan peradangan pada organ hati. Selain itu, prosedur pemeriksaan ini juga dapat digunakan untuk memantau perkembangan infeksi dan efektivitas pengobatan yang dijalani oleh penderita hepatitis B. Pemeriksaan hepatitis B tidak hanya dilakukan pada orang yang memiliki gejala. Orang yang sehat pun juga perlu melakukan skrining pemeriksaan hepatitis B, terutama mereka yang berisiko tinggi terpapar virus hepatitis B meliputi:  
            •	Wanita yang sedang hamil.<br>
            •	Orang yang belum divaksinasi Hepatitis B. <br>
            •	Orang yang tinggal dengan penderita hepatitis B. <br>
            •	Orang yang memiliki banyak pasangan seksual. <br>
            •	Pernah melakukan hubungan seksual dengan seseorang yang memiliki hepatitis B.<br>
            •	Pria yang berhubungan seks dengan pria (LSL).<br>
            •	Memiliki riwayat penyakit menular seksual (PMS). <br>
            •	Memiliki HIV atau hepatitis C. <br>
            •	Minum obat yang menekan sistem kekebalan. <br>
            •	Penyalahgunaan NAPZA suntik (penasun). <br>
            

            ',
            'persiapan'=>'Tidak ada persiapan khusus',
            'deskripsi'=>'Hepatitis B surface antigen atau dikenal dengan tes HBsAg adalah prosedur pemeriksaan untuk mendeteksi antigen permukaan virus hepatitis B (HBV) di dalam darah. Pemeriksaan ini penting dilakukan untuk deteksi dini hepatitis B yang memengaruhi fungsi organ hati.
            Hepatitis B adalah penyakit yang dapat menyebabkan peradangan pada organ hati. Antigen permukaan virus hepatitis B biasanya akan muncul apabila seseorang terinfeksi virus hepatitis B dan berpotensi untuk menularkan virus tersebut ke orang lain. Selain itu, HBsAg juga muncul sebagai  penanda dari infeksi jangka panjang (kronis).'
        ]);
        Service::create([
            'jenis_tes'=> 'Pemeriksaan Hepatitis C',
            'slug'=> 'pemeriksaan_hepatitis_c',
            'image'=> 'hepatitis_c.png',
            'harga'=>30000,
            'lama_periksa'=>'30 menit',
            'manfaat'=>'Pemeriksaan untuk deteksi anti-HCV dapat digunakan baik untuk skrining maupun untuk diagnosis infeksi HCV. Pemeriksaan anti-HCV tidak menunjukkan infeksi akut, kronik atau sudah sembuh
            ',
            'persiapan'=>'Tidak ada persiapan khusus',
            'deskripsi'=>'Hepatitis C adalah penyakit infeksi yang disebabkan oleh virus hepatitis C (HCV) yang menyerang hati. Infeksi virus HCV dapat menyebabkan peradangan pada hati dan jika tidak diobati dengan tepat, dapat menyebabkan kerusakan hati jangka panjang, sirosis, bahkan kanker hati.
            Penyebab utama hepatitis C adalah infeksi virus hepatitis C. Virus ini ditularkan melalui kontak darah-ke-darah, seperti penggunaan jarum suntik yang terkontaminasi, transfusi darah yang tidak steril, atau tindakan medis yang melibatkan alat-alat yang tidak steril. Jarang terjadi penularan melalui hubungan seksual atau ibu ke bayi saat proses persalinan. Selain itu, penggunaan narkoba suntik, tato atau tindikan yang tidak steril, dan berbagi jarum dengan orang yang terinfeksi juga dapat meningkatkan risiko terkena hepatitis C.'
        ]);
        Service::create([
            'jenis_tes'=> 'Pemeriksaan Anti HBS',
            'slug'=> 'pemeriksaan_anti_hbs',
            'image'=> 'anti_hbs.jpg',
            'harga'=>30000,
            'lama_periksa'=>'30 menit',
            'manfaat'=>'
            •	Tes Anti-HBS (Antibodi Hepatitis B) kuantitatif bermanfaat untuk untuk menilai kekebalan tubuh (antibodi) yang dihasilkan sebagai respons terhadap paparan antigen virus Hepatitis B. Apabila pemeriksaan HBsAg dilakukan untuk mendeteksi infeksi Hepatitis B, maka kadar anti-HBs menilai kemampuan sistem imun tubuh untuk melindungi diri.<br>
            •	Kadar anti-HBs bisa digunakan sebagai parameter untuk menilai kebutuhan seseorang untuk melakukan vaksinasi. Apabila kadar antibodi hepatitis B rendah atau nihil, maka vaksinasi perlu dilakukan sesegera mungkin.<br>
            
            ',
            'persiapan'=>'Tidak ada persiapan khusus',
            'deskripsi'=>'Tes anti HBs (Antibodi Hepatitis B) adalah pemeriksaan untuk mendeteksi antibodi terhadap antigen permukaan virus hepatitis B atau HBV (Anti-Hbs). Tes ini memberikan penentuan Anti-HBs. “Antibodi permukaan” terbentuk sebagai respons terhadap virus hepatitis B.'
        ]);
        Service::create([
            'jenis_tes'=> 'Malaria',
            'slug'=> 'malaria',
            'image'=> 'malaria.png',
            'harga'=>30000,
            'lama_periksa'=>'30 menit',
            'manfaat'=>'Digunakan untuk mendiagnosis malaria, gangguan parasit pada darah, menilai penyakit demam yang belum diketahui penyebabnya
            ',
            'persiapan'=>'Tidak ada persiapan khusus',
            'deskripsi'=>'Malaria adalah penyakit infeksi menular yang disebabkan oleh parasit Plasmodium dan ditularkan melalui gigitan nyamuk betina Anopheles yang terinfeksi. Penyakit ini dapat menyebabkan demam, menggigil, sakit kepala, nyeri otot, dan gejala lainnya. Jika tidak diobati dengan tepat, malaria dapat menyebabkan komplikasi serius seperti gagal ginjal, kerusakan otak, dan kematian.
            
            Ada beberapa jenis parasit malaria yang menginfeksi manusia, yaitu:
            •	Plasmodium Falciparum atau Malaria Tropika  <br>
            •	P. Vivax atau Malaria Tertiana  <br>
            •	P. Ovale atau Malaria Ovale  <br>
            •	P. Malariae atau Malaria Quartana  <br>
            •	Selain itu, P. Knowlesi, sejenis malaria yang secara alami menginfeksi kera di Asia Tenggara, juga bisa menginfeksi manusia dan menyebabkan penyakit ini menular dari hewan ke manusia (malaria zoonosis).   <br>
            
            '
        ]);
        Service::create([
            'jenis_tes'=> 'Demam Berdarah Dangue',
            'slug'=> 'demam_berdarah_dangue',
            'image'=> 'dbd.jpg',
            'harga'=>50000,
            'lama_periksa'=>'30 menit',
            'manfaat'=>'Pemeriksaan DBD (Demam Berdarah Dengue) memiliki manfaat penting untuk mendiagnosis infeksi virus dengue, memantau perkembangan penyakit, dan mencegah komplikasi serius. Tes ini membantu memastikan diagnosis yang tepat dan memungkinkan dokter memberikan pengobatan yang tepat.
            ',
            'persiapan'=>'Tidak ada persiapan khusus',
            'deskripsi'=>'Demam berdarah dengue merupakan kondisi medis yang disebabkan oleh virus dengue yang ditularkan oleh gigitan nyamuk bernama Aedes aegypti, dapat menimbulkan rasa nyeri pada tulang dan sendi, demam tinggi, sakit kepala, mual, dan muntah. Kondisi ini perlu diwaspadai karena berisiko menimbulkan komplikasi serius, seperti perdarahan yang terjadi saat pasien sudah di tahap dengue shock syndrome hingga gagal ginjal akut. Sebagai upaya mencegah terjadinya komplikasi, penting untuk melakukan cek demam berdarah agar pasien dapat memperoleh diagnosis serta penanganan medis yang cepat dan tepat. </br>
            Pemeriksaan DBD (Demam Berdarah Dengue) melibatkan pemeriksaan fisik dan pemeriksaan laboratorium darah untuk menegakkan diagnosis. Pemeriksaan fisik meliputi pemeriksaan tanda-tanda klinis seperti demam tinggi dan tanda kebocoran plasma. Pemeriksaan laboratorium darah meliputi tes darah lengkap, tes NS1 antigen, dan tes antibodi Dengue IgG dan IgM. 
            Pemeriksaan laboratorium darah meliputi, yaitu:
            •	Darah Lengkap <br>
            •	NS1 Antigen, Pengujian NS1 mendeteksi keberadaan antigen NS1 Virus Dengue pada periode infeksi awal 1-3 hari, setelah itu virus mungkin tidak terdeteksi <br>
            •	Tes Antibodi Dengue IgG dan Ig, dengue IgM umumnya direkomendasikan 5 hari setelah gejala DBD muncul. Antibodi IgG biasanya terdeteksi lebih lambat daripada IgM, sehingga menjadi penanda penyakit DBD kronis. Tes anti-dengue IgG/IgM ini cukup efektif untuk memastikan diagnosis penyakit DBD karena antibodi tersebut hanya terbentuk 7–10 hari setelah tubuh terinfeksi oleh virus dengue. Oleh karenanya, jika tes anti-dengue IgG/IgM menunjukkan hasil positif, hal tersebut menandakan bahwa pasien mengalami infeksi virus dengue akut dan memerlukan penanganan medis dengan tepat dan segera. <br>
            
            '
        ]);
        Service::create([
            'jenis_tes'=> 'Pemeriksaan Anti HIV',
            'slug'=> 'pemeriksaan_anti _hiv',
            'image'=> 'anti_hiv.jpg',
            'harga'=>30000,
            'lama_periksa'=>'30 menit',
            'manfaat'=>'Tes HIV adalah pemeriksaan kesehatan yang penting untuk dilakukan oleh setiap orang. Pasalnya, penularan penyakit ini dapat terjadi dengan mudah melalui kontak cairan tubuh penderitanya. Karena itulah, dokter biasanya akan menganjurkan pemeriksaan HIV setiap 3 atau 6 bulan sekali untuk orang yang sudah aktif secara seksual.
            Disamping itu, ada beberapa orang yang sangat di anjurkan untuk melakukan pemeriksaan HIV karena kondisi tertentu. Kondisi yang menyebabkan seseorang sangat dianjurkan untuk rutin melakukan pemeriksaan HIV antara lain :
            <br>
            •	Ibu Hamil  <br>
            •	Bayi yang lahiur dari ibu penderita infeksi HIV/AIDS <br>
            •	Melakukan transfuse darah secara berkala <br>
            •	Pernah berbagi alat suntik dengan orang lain <br>
            •	Sering melakukan hubungan seksual dengan bergonta-ganti pasangan </br>
            •	Melakukan hubungan seksual dengan sesame jenis </br>
            •	Mengidap sexually transmitted disease atau penyakit menular lainnya seperti Hepatitis B dan C, infeksi HPV, dan lain sebagainya.
            ',
            'persiapan'=>'Tidak ada persiapan khusus',
            'deskripsi'=>'HIV merupakan suatu virus yang menyerang sistem kekebalan tubuh dan menyebabkan daya tahan tubuh menurun sehingga mudah terinfeksi. Seseorang yang terinfeksi HIV, mengalami beberapa fase yaitu fase akut, kemudian fase laten, dan akhirnya masuk ke tahap AIDS. Pada umumnya, antibodi HIV terbentuk sekitar 3-6 minggu setelah terinfeksi, atau pada individu dengan pembentukan antibodi lambat maka antibodi HIV baru terbentuk setelah 3-6 bulan terinfeksi. <br>
            <b> Pemeriksaan Anti HIV </b> <br>
            Tes yang tersedia di UPTD Puskesmas Larompong adalah Tes Antibodi dengan metode Rapid Test
            Tes antibodi merupakan pemeriksaan medis yang dilakukan dengan memeriksa kandungan antibodi HIV di dalam darah. Antibodi HIV ini akan diproduksi oleh sistem imunitas tubuh hanya ketika seseorang sudah terinfeksi oleh virus HIV. Biasanya, antibodi HIV baru dapat terdeteksi 1 sampai 3 bulan setelah pasien sudah terinfeksi oleh virus HIV.
            Rapid test: dilakukan dengan meletakkan sampel darah pasien ke dalam alat tes HIV yang terdapat antigen HIV. Tes ini dapat selesai dengan cepat, bahkan hanya memerlukan waktu 20 menit. Namun, rapid test memiliki tingkat akurasi yang lebih rendah dibandingkan dengan jenis pemeriksaan lain, kemungkinan dapat menghasilkan positif palsu atau negatif palsu.

            '
        ]);
        Service::create([
            'jenis_tes'=> 'Pemeriksaan Sifilis',
            'slug'=> 'sifilis',
            'image'=> 'sifilis.jpg',
            'harga'=>30000,
            'lama_periksa'=>'30 menit',
            'manfaat'=>'Hasil tes yang cepat memungkinkan pengobatan yang tepat waktu dan membantu mencegah penularan sifilis kepada orang lain, terutama mereka yang berisiko tinggi terpapar Sifilis meliputi. <br>
            •	Wanita yang sedang hamil.<br>
            •	Orang yang memiliki banyak pasangan seksual. <br>
            •	Pria yang berhubungan seks dengan pria (LSL). <br>
            •	Memiliki riwayat penyakit menular seksual (PMS). <br>
            •	Memiliki HIV atau hepatitis C. <br>
            •	Penyalahgunaan NAPZA suntik (penasun).
            ',
            'persiapan'=>'Tidak ada persiapan khusus',
            'deskripsi'=>'Raja singa atau sifilis adalah salah satu penyakit menular seksual yang disebabkan oleh infeksi bakteri Treponema pallidum. Penyakit ini dapat memengaruhi berbagai organ tubuh dan memiliki beberapa tahap perburukan kondisi.<br>
            Umumnya, sifilis adalah penyakit yang diawali dengan luka di sekitar alat kelamin, dubur, ataupun mulut. Awal kemunculan luka tersebut cenderung tidak disertai dengan rasa nyeri. Karena lukanya tidak terasa nyeri, sifilis kadang tidak langsung disadari oleh penderitanya. Walau begitu, penderita sifilis tersebut tetap bisa menularkan infeksinya ke orang lain.<br>
            Apabila tidak ditangani dengan segera, sifilis berisiko menyebabkan komplikasi penyakit lain, seperti kerusakan jantung, tumor, infeksi HIV, dan gangguan kehamilan serta persalinan bagi ibu hamil.<br>
            <b>Tujuan Pemeriksaan </b> <br>
            Tujuan pengujian sifilis adalah untuk mengidentifikasi infeksi sifilis. Pengujian dapat dilakukan untuk skrining, diagnosis, atau pemantauan: <br>
            •	Pengujian diagnostik dianjurkan jika Anda memiliki tanda atau gejala yang dapat disebabkan oleh sifilis. Sifilis dapat menyebabkan berbagai gejala, sehingga dokter mungkin menyarankan pengujian untuk sifilis bahkan jika gejalanya tidak parah atau khusus untuk kondisi ini. Secara umum, mendiagnosis sifilis memerlukan dua tes: tes skrining awal dan tes konfirmasi kedua.<br>
            •	Skrining untuk sifilis adalah pengujian infeksi pada orang yang tidak memiliki tanda atau gejala penyakit. Kelompok yang mendapat manfaat dari skrining termasuk mereka yang berisiko tinggi tertular sifilis serta mereka yang lebih mungkin menularkan infeksi ini kepada orang lain.<br>
            •	Pemantauan setelah pengobatan sifilis penting dilakukan untuk memastikan Anda merespons pengobatan yang diresepkan. Tes yang digunakan untuk memantau Anda meliputi pemeriksaan fisik untuk menilai perubahan gejala yang dapat diamati serta tes darah laboratorium untuk memastikan respons terhadap pengobatan.

'
        ]);
        Service::create([
            'jenis_tes'=> 'Pemeriksaan Demam Typoid',
            'slug'=> 'sifilis',
            'image'=> 'typhoid.jpg',
            'harga'=>30000,
            'lama_periksa'=>'30 menit',
            'manfaat'=>'•	Memastikan diagnosis penyakit tipes <br>
            •	Menurunkan risiko kondisi fatal yang diakibatkan bakteri Salmonella typhi',
            'persiapan'=>'Tidak ada persiapan khusus',
            'deskripsi'=>'Tipes atau demam tifoid adalah penyakit infeksi yang disebabkan oleh bakteri Salmonella typhi. Bakteri ini masuk ke dalam tubuh manusia melalui makanan atau minuman yang terkontaminasi.<br>
            Penyakit ini cukup umum terjadi di negara-negara berkembang, termasuk Indonesia, dan perlu segera ditangani dengan cepat karena bisa membahayakan nyawa, terutama pada anak-anak.<br>
            Untuk mendiagnosis penyakit tipes, pemeriksaan darah adalah salah satu metode utama yang sering digunakan. Biasanya, dokter akan merekomendasikan tes darah setelah mengetahui riwayat klinis pasien, serta adanya tanda-tanda yang dicurigai penyakit tipes.
            <b>Gejala dan Diagnosis Tipes <b> <br>
            Gejala tipes biasanya muncul 1–3 minggu setelah terpapar bakteri S. typhi. Beberapa gejala penyakit tipes yang dapat muncul, antara lain: <br>
            •	Demam dengan suhu yang meningkat secara bertahap hingga mencapai 40° Celcius. <br>
            •	Menggigil dan berkeringat. <br>
            •	Lesu dan lemas. <br>
            •	Sakit kepala. <br>
            •	Penurunan nafsu makan. <br>
            •	Diare atau sembelit. <br>

            Pemeriksaan ini pada umumnya dilakukan dengan mengambil sampel darah menggunakan jarum suntik dari pembuluh darah lengan. Pemeriksaan penunjang untuk mengetahui adanya antibodi IgM bakteri anti-09, yakni antibodi yang otomatis dihasilkan saat tubuh terserang infeksi Salmonella typhi penyebab demam tifoid/tifus <br>

            Pemeriksaan laboratorium darah meliputi, yaitu <br>
            •	Tes Widal <br>
            Tes Widal merupakan pemeriksaan dalam menentukan kadar penggumpalan antibodi tubuh terhadap antigen bakteri tipes tipe O dan H. Antigen O adalah senyawa dari permukaan atau badan bakteri, sedangkan antigen H merupakan ekor atau flagel bakteri.
            Pemeriksaan Tunggal penyakit tipes dengan tes Widal kurang akurat karena dapat memberikan hasil negatif sampai 30% dari tes yang seharusnya positif. Sehingga tes Widal negative tidak dapat dipastikan tidak terjadi infeksi.
            Selain menderita tipes, hasil positif tes Widal juga dapat terjadi akibat kondisi seperti berikut : <br>
            o	Infeksi berulang karena bakteri Salmonella selain Salmonella Typhi <br>
            o	Imunisasi penyakit tipes sebelumnya <br>
            o	Infeksi lainnya, seperti Malaria <br>
            <p>Medical laboratory Technology Journal menyebutkan bahwa tes widal umumnya dilakukan sebagai pemeriksaan awal dengan hasil yang bisa diperoleh dengan cepat.</p><br>
            •	Anti-Salmonella typhi IgM <br>
            Pemeriksaan IgM Anti-Salmonella typhi juga bagian dari cek darah tipes. Pemeriksaan dilakukan untuk mendeteksi antibodi terhadap bakteri tipes yang muncul setelah 3-4 hari terjadinya demam.<br>
            Dibandingkan dengan tes Widal, Medical Laboratory Technology Journal mengungkapkan bahwa pemeriksaan tes Tubex atau IgM Anti-Salmonella typhi dinilai lebih baik karena tes ini 99% bisa membedakan bakteri tipes dengan tipe bakteri Salmonella lainnya. Sehingga lebih akurat dalam mendiagnosis tipes.
'
        ]);
        Service::create([
            'jenis_tes'=> 'Pemeriksaan Golongan Darah',
            'slug'=> 'pemeriksaan_golongan_darah',
            'image'=> 'golongan_darah.jpg',
            'harga'=>25000,
            'lama_periksa'=>'5 menit',
            'manfaat'=>'•	Transfusi Darah <br>
            Menentukan golongan darah dan rhesus yang cocok untuk transfusi darah, mencegah reaksi yang berbahaya. <br>
            •	Donor Darah <br>
            Memastikan darah yang didonorkan sesuai dengan golongan darah dan rhesus penerima. <br>
            •	Kehamilan <br>
            Memantau risiko ketidakcocokan rhesus antara ibu dan bayi, terutama pada wanita dengan rhesus negatif yang hamil dari ayah dengan rhesus positif. <br>
            •	Organ dan Sumsum Tulang <br>
            Menentukan kesesuaian golongan darah dan rhesus untuk transplantasi organ, jaringan, atau sumsum tulang. <br>
            •	Penentuan Hubungan Darah <br>
            Membantu menentukan hubungan darah antara individu. <br>
            •	Identifikasi <br>
            Dalam kasus pidana, membantu mengidentifikasi seseorang berdasarkan golongan darahnya.
            ',
            'persiapan'=>'Tidak ada persiapan khusus',
            'deskripsi'=>'Pemeriksaan golongan darah dan rhesus (Rh) adalah prosedur medis untuk menentukan jenis golongan darah ABO (A, B, AB, atau O) dan faktor Rhesus (+ atau -) seseorang. Pemeriksaan ini penting untuk transfusi darah, donor darah, dan persiapan kehamilan, terutama untuk mencegah masalah pada ibu hamil dengan rhesus negatif yang memiliki bayi dengan rhesus positif.

'
        ]);

        Service::create([
            'jenis_tes'=> 'Pemeriksaan Urin Rutin',
            'slug'=> 'pemeriksaan_urin_rutin',
            'image'=> 'tes-urine.png',
            'harga'=>50000,
            'lama_periksa'=>'10 menit',
            'manfaat'=>'•	Mendeteksi gangguan infeksi saluran kemih (ISK) <br>
            •	Memantau perkembangan tingkat diabetes <br>
            •	Memantau efektivitas suatu pengobatan atau terapi <br>
            •	Mendeteksi kehamilan <br>
            •	Mendeteksi kemungkinan penyakit ginjal, hati, dan menegakkan diagnosis lainnya 

            ',
            'persiapan'=>'Tidak ada persiapan khusus <br>
            Khusus Wanita : Pasien tidak dalam keadaan menstruasi, atau telah selesai menstruasi minimal 5 hari.',
            'deskripsi'=>'Pemeriksaan urin rutin adalah pemeriksaan yang digunakan untuk menganalisis kondisi fisik, kimiawi, dan mikroskopik urine. Pemeriksaan ini bertujuan untuk mendeteksi berbagai kondisi medis, seperti infeksi saluran kemih, diabetes, penyakit ginjal, atau penyakit hati. Beberapa pemeriksaan yang termasuk dalam urin rutin meliputi pemeriksaan visual (warna, kejernihan, bau), uji dipstick (glukosa, protein, keton, bilirubin, pH, dll), dan pemeriksaan mikroskopis (sel darah putih, sel darah merah, bakteri, kristal, dll)
            <b>Pemeriksaan secara visual </b >  <br>
            •	Warna: <br>
            Urine normal berwarna kuning muda hingga kuning kecoklatan. Warna yang tidak normal, seperti merah atau cokelat tua, bisa menandakan adanya darah dalam urine. <br>
            •	Kejernihan:<br>
            Urine normal jernih, namun bisa keruh karena infeksi, batu ginjal, atau konsentrasi yang tinggi. <br>
            •	Bau:<br>
            Urine normal berbau sedikit khas. Bau abnormal, seperti bau buah-buahan, bau busuk, atau bau yang menusuk, bisa menandakan adanya masalah kesehatan. <br>
            <b>Pemeriksaan Menggunakan alat Urin Analyzer:</b><br>
            •	Glukosa: Adanya glukosa dalam urine bisa menandakan diabetes. <br>
            •	Protein: Adanya protein dalam urine bisa menandakan penyakit ginjal atau infeksi saluran kemih. <br>
            •	Keton: Adanya keton dalam urine bisa menandakan diabetes yang tidak terkontrol atau kelaparan. <br>
            •	Bilirubin: Adanya bilirubin dalam urine bisa menandakan penyakit hati atau infeksi saluran empedu. <br>
            •	pH: Mengevaluasi tingkat keasaman dan kebasaan urine, yang bisa dipengaruhi oleh infeksi saluran kemih. <br>
            •	Sel darah putih: Menandakan adanya infeksi atau peradangan dalam saluran kemih. <br>
            •	Sel darah merah: Menandakan adanya infeksi, batu ginjal, atau kanker ginjal. <br>
            •	Nitrit: Menandakan adanya bakteri dalam urine. <br>



            <b>Pemeriksaan Mikroskopis:<b> <br>
            •	Sel darah putih: Menandakan adanya infeksi atau peradangan dalam saluran kemih.<br>
            •	Sel darah merah: Menandakan adanya infeksi, batu ginjal, atau kanker ginjal.<br>
            •	Bakteri: Menandakan adanya infeksi saluran kemih.<br>
            •	Kristal: Menandakan adanya batu ginjal.<br>
            •	Sel epitel: Bagian normal urine. <br>


'
        ]);

    }
}
