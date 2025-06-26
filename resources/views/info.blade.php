<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <section id="info">
        {{-- info Container --}}
        <div class="container  max-w-full py-7">
            <div class="flex flex-col m-5 lg:flex-row ">
                <div class="w-auto lg:w-1/2 text-center text-2xl font-extrabold dark:text-black">Ingin Tahu Tentang <span class="text-3xl text-green-700">Tuberkulosis</span>  ?
                    <img src="storage/img/tuberkulosis.png" class="h-auto w-full pt-3 " alt="Gambar">            
                </div>
                <div class="flex flex-col pt-5 lg:pt-12 gap-5 lg:ml-5" >
                    <div class="w-auto lg:w-100"  x-data="{selected:null}" >
                        <div @click="selected !== 1 ? selected =  1 : selected = null" @click.away="selected=null" class="flex h-15 w-full bg-white items-center cursor-pointer p-4 shadow-lg rounded-t-sm justify-between " :class="selected ==1  ? 'text-green-700' : 'text-black'">
                            <p class="font-semibold text-base font-stretch-normal text-center">Apa itu TBC ?</p>
                            
                                <svg class="w-6 h-5 text-gray-700 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="none" viewBox="0 0 24 24":class="{'rotate-180 transition transform 0.5s ease-in text-green-700': selected} " >
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 9-7 7-7-7"/>
                                </svg>
                        </div>
                        {{-- Memunculkan detail saat klik dropdown --}}
                        <div x-ref="container" x-bind:style="selected == 1 ? 'max-height:' + $refs.container.scrollHeight+'px' : ''  " class="w-auto lg:w-100 bg-white relative overflow-hidden max-h-0 rounded-b-sm  transition-all duration-500" >
                        <p class="font-light text-sm antialiased px-4 pb-4">Tuberkulosis (TBC) adalah penyakit menular langsung yang disebabkan oleh kuman TBC (Mycobacterium tuberculosis). TBC bukan disebabkan oleh guna-guna atau kutukan. TBC juga bukan penyakit keturunan. Sebagian besar kuman TBC menyerang paru, tetapi dapat juga mengenai organ atau bagian tubuh lainnya (misalnya: tulang, kelenjar, kulit, dll). TBC dapat menyerang siapa saja, terutama menyerang usia produktif/masih aktif bekerja (15-50 tahun) dan anak-anak. TBC dapat menyebabkan kematian. Apabila tidak diobati, 50% dari pasien akan meninggal setelah 5 tahun.</p>
                        </div>
                    </div>
                    <div class="w-auto lg:w-100" x-data="{selected:null}"  @click.away="selected=null">
                        <div @click="selected !== 2 ? selected =  2 : selected = null" class="flex h-15 w-full bg-white items-center cursor-pointer p-4 shadow-lg rounded-t-sm justify-between " :class="selected ==2  ? 'text-green-700' : 'text-black'">
                            <p class="font-semibold text-base font-stretch-normal text-center">Apa saja jenis pemeriksaan TBC ?</p>
                            
                                <svg class="w-6 h-5 text-gray-700 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="none" viewBox="0 0 24 24":class="{'rotate-180 transition transform 0.5s ease-in text-green-700': selected}" >
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 9-7 7-7-7"/>
                                </svg>
                            
                        </div>
                        {{-- Memunculkan detail saat klik dropdown --}}
                        <div x-ref="container" x-bind:style="selected == 2 ? 'max-height:' + $refs.container.scrollHeight+'px' : ''  " class="w-auto lg:w-100 bg-white relative overflow-hidden max-h-0 rounded-b-sm  transition-all duration-500" >
                            <div class="font-light text-sm antialiased px-4 pb-4">
                            <h2 class="font-semibold">Pemeriksaan TB </h2>
                            <li class="font-semibold"> Pemeriksaan Dahak (pemeriksaan BTA) </li>

                            <p>Dahak diambil 2 kali dalam 1 hari atau 2 hari, yaitu SS/SP. Disebut SS jika sewaktu datang ke fasilitas pelayanan kesehatan (hari ke-1) diambil 2 dahak dengan interval minimal 1 jam. Sementara SP jiwa sewaktu datang ke fasilitas pelayanan kesehatan (hari ke-1) dan pagi hari setelah bangun tidur (hari ke-2).</p>

                            <li class="font-semibold">Tes Tuberkulin</li>

                            <p>Uji yang digunakan untuk penunjang diagnosis TB dengan cara menyuntikkan 0,1 ml tuberkulin purified protein derivative (PPD) ke permukaan bagian dalam lengan bawah. </p>

                            <li class="font-semibold">Rontgen Dada</li>

                            <p>Pemeriksaan tambahan berupa rontgen foto dada (bila pemeriksaan dahak hasilnya negatif, sedangkan gejala TB lainnya ada).</p>

                            <li class="font-semibold">Tes Cepat Molekuler (TCM)</li>

                            <p>Adalah alat diagnosis utama yang digunakan untuk penegakan diagnosis TB.</p>

                            </div>
                        </div>
                    </div>
                    <div class="w-auto lg:w-100" x-data="{selected:null}" @click.away="selected=null">
                        <div @click="selected !== 3 ? selected = 3 : selected = null " class="flex h-15 w-full bg-white items-center cursor-pointer p-4 shadow-lg rounded-t-sm justify-between" :class="selected == 3 ? 'text-green-700' : 'text-black'">
                            <p class="font-semibold text-base font-stretch-normal text-center">Siapa saja yang beresiko tertular TBC ?</p>
                            
                                <svg class="w-6 h-5 text-gray-700 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="none" viewBox="0 0 24 24":class="{'rotate-180 transition transform 0.5s ease-in text-green-700': selected}" >
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 9-7 7-7-7"/>
                                </svg>
                            
                        </div>
                        {{-- Memunculkan detail saat klik dropdown --}}
                        <div x-ref="container" x-bind:style="selected == 3 ? 'max-height:' + $refs.container.scrollHeight+'px' : ''  " class="w-auto lg:w-100 bg-white relative overflow-hidden max-h-0 rounded-b-sm  transition-all duration-500" >
                        <div class="font-light text-sm antialiased px-4 pb-4">
                            <p>Beberapa kondisi yang meningkatkan resiko seseorang tertular TBC</p>
                            <ol class="list-decimal list-inside">
                                <li>Kontak erat dengan penderita TBC</li>
                                <li>Tinggal di daerah padat penduduk, ventilasi rumah tidak bagus sehingga tidak ada pertukaran udara dan sinar matahari tidak masuk</li>
                                <li>Berkumpul dengan banyak orang seperti di tempat kerja, asrama/pesantren, sekolah, panti dan lain-lain.</li>
                                <li>Orang yang bekerja dengan bahan kimia yang beresiko menimbulkan paparan infeksi paru.</li>
                                <li>Orang dengan penyakit HIV.</li>
                                <li>Orang dengan penyakit Diabetes Melitus / kencing manis.</li>
                                <li>Orang dengan status gizi rendah.</li>
                            </ol>                             
                            <p>Mereka yang sedang dalam kondisi seperti diatas dan bergejala TBC, harus segera dirujuk ke puskesmas untuk menjalani pemeriksaan. Semakin cepat diperiksa, semakin cepat diobati jika terdiagnosis TBC</p>
                        </div>
                        </div>
                    </div>
                    <div class="w-auto lg:w-100" x-data="{selected:null}" @click.away="selected=null">
                        <div @click="selected !== 4 ? selected = 4 : selected = null " class="flex h-15 w-full bg-white items-center cursor-pointer p-4 shadow-lg rounded-t-sm justify-between" :class="selected == 4 ? 'text-green-700' : 'text-black'">
                            <p class="font-semibold text-base font-stretch-normal text-center">Bagaimana cara penularan TBC?</p>
                            
                                <svg class="w-6 h-5 text-gray-700 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="none" viewBox="0 0 24 24":class="{'rotate-180 transition transform 0.5s ease-in text-green-700': selected}" >
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 9-7 7-7-7"/>
                                </svg>
                            
                        </div>
                        {{-- Memunculkan detail saat klik dropdown --}}
                        <div x-ref="container" x-bind:style="selected == 4 ? 'max-height:' + $refs.container.scrollHeight + 'px' : ''" class="w-auto lg:w-100 bg-white relative overflow-hidden max-h-0 rounded-b-sm  transition-all duration-500" >
                        <p class="font-light text-sm antialiased px-4 pb-4">Pasien TBC paru menyebarkan kuman TBC dalam bentuk droplet (percikan dahak). Kuman TBC keluar di udara Ketika Pasien TBC batuk, bersin atau berbicara. Kuman TBC dapat bertahan hidup beberap jam dalam ruangan yang tidak terkena sinar matahari. Mereka yang tinggal dalam satu ruangan bersama penderita TBC Paru, berpotensi menghirup kuman TBC. Kuman terhirup oleh orang lain melalui saluran pernafasan menuju paru-paru dan dapat menyebar ke bagian tubuh yang lain.</p>
                        </div>
                    </div>
                    <div class="w-auto lg:w-100" x-data="{selected:null}" @click.away="selected=null">
                        <div @click="selected !== 5 ? selected = 5 : selected = null " class="flex h-15 w-full bg-white items-center cursor-pointer p-4 shadow-lg rounded-t-sm justify-between" :class="selected == 5 ? 'text-green-700' : 'text-black'">
                            <p class="font-semibold text-base font-stretch-normal text-center">Bagaimana cara pengobatan TBC?</p>
                            
                                <svg class="w-6 h-5 text-gray-700 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="none" viewBox="0 0 24 24":class="{'rotate-180 transition transform 0.5s ease-in text-green-700': selected}" >
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 9-7 7-7-7"/>
                                </svg>
                            
                        </div>
                        {{-- Memunculkan detail saat klik dropdown --}}
                        <div x-ref="container" x-bind:style="selected == 5 ? 'max-height:'+$refs.container.scrollHeight+'px' : '' " class="w-auto lg:w-100 bg-white relative overflow-hidden max-h-0 rounded-b-sm  transition-all duration-500" >
                            <div class="font-light text-sm antialiased px-4 pb-4">
                                <p class="font-semibold">Pengobatan TBC pada Orang Dewasa Pengobatan berlangsung selama 6 bulan. </p>
                                <p>Terbagi menjadi 2 tahap :</p>
                                <li>Tahap Awal : Obat diminum setiap hari selama 2 bulan</li>
                                <li>Tahap Lanjutan : Obat diminum 3 kali seminggu selama 4 bulan. Untuk beberapa kelompok pasien seperti pasien TBC-HIV, pasien pengobatan ulang dan pasien TBC yang dirawat di rumah sakit, obat diminum setiap hari </li>
                                <p class="font-semibold">Pengobatan TBC pada Anak Pengobatan berlangsung selama 6 bulan.</p>
                                <p>Terbagi menjadi 2 tahap :</p>
                                <li>Tahap Awal Obat diminum setiap hari selama 2 bulan</li>
                                <li>Tahap Lanjutan Obat diminum setiap hari selama 4 bulan. Untuk menjamin kepatuhan minum obat, penderita TBC harus didampingi oleh PMO (Pengawas Menelan Obat) PMO dapat berasal dari keluarga penderita TBC, kerabat, tetangga atau kader kesehatan.</li>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="#tpt mx-5 mt-10">
            <h1 class="text-3xl font-extrabold">TPT (Terapi Pencegahan <span class="text-4xl text-green-700">Tuberkulosis</span>)</h1>
            <p class="font-light text-lg/8 antialiased  ">Semua orang bisa terkena Tuberkulosis (TBC), namun Apakah kamu tahu kalau Tidak semua orang yang terinfeksi Tuberkulosis (TBC) akan menunjukkan gejala penyakit TBC? Banyak dari kita tidak menyadari bahwa tubuh kita bisa menjadi medan pertempuran tersembunyi melawan bakteri berbahaya, Mycobacterium tuberculosis.
            Beberapa orang hanya terinfeksi tanpa menunjukkan tanda-tanda sakit atau gejala TBC aktif  seperti batuk, berkeringat pada malam hari, ataupun penurunan badan. Beberapa orang yang terinfeksi oleh kuman Mycobacterium tuberculosis dan “dikarantina” oleh sistem kekebalan tubuh menjadi infeksi laten tuberkulosis (ILTBC).</p>
            <p class="font-bold text-2xl mt-3">Apa itu ILTBC?</p>
            <div class="flex flex-col justify-center-safe  m-5" >
                <img src="storage/img/tbc.jpg" alt="TBC" class="w-1/2 h-auto m-auto" >
                <p class="m-auto font-light text-lg/8 antialiased">Gambar: Kondisi Tubuh Seseorang ketika Infeksi Laten TBC dan Sakit TBC</p>
                <p class="m-auto font-light text-lg/8 antialiased">Sumber Gambar: Yayasan KNCV Indonesia</p>            
            </div>
            <p class="font-light text-lg/8 antialiased ">Secara klinis, ILTBC didefinisikan oleh respons kekebalan tubuh yang terus menerus terhadap antigen M. tuberculosis tanpa adanya manifestasi klinis penyakit TBC aktif. Infeksi Laten Tuberkulosis (ILTBC) akan didiagnosis setelah seseorang terpapar Bakteri Mycobacterium Tuberculosis / Bakteri TBC dan infeksi primer muncul. Faktor-faktor dari seseorang yang mempengaruhi hasil ILTBC meliputi usia, status kekebalan, dan dinamika interaksi dengan kasus indeks, termasuk tingkat infeksi dan sifat paparan. 

            Sebagian orang mengalami apa yang disebut Infeksi Laten Tuberkulosis (TBC), dimana tubuh mereka tidak menunjukkan gejala infeksi bakteri Mycobacterium tuberculosis. Meskipun bakteri tetap ada dalam tubuh, sistem kekebalan tubuh tetap berfungsi dengan baik dan mencegah penyakit TBC berkembang.  Menurut Petunjuk Teknis Penanganan ILTBC 2020 dan pedoman WHO, ILTBC adalah kondisi di mana sistem imun merespons antigen M. tuberculosis tanpa gejala klinis TBC aktif. Sekitar seperempat populasi dunia diperkirakan terinfeksi TBC, dan mereka dengan ILTBC berisiko mengembangkan TBC aktif.</p>
            <p class="font-bold text-2xl mt-3">Mengapa penanganan ILTBC penting untuk mencapai Eliminasi TBC 2030?</p>
            <p class="font-light text-lg/8 antialiased ">Pencegahan TBC aktif melalui pengobatan ILTBC adalah bagian penting dari Strategi End TBC WHO. Karena:</p>
            <p class="font-light text-lg/8 antialiased ">
                <li class="font-light text-lg/8 antialiased">Mencegah Penyakit: TPT memberikan obat anti-TBC kepada orang yang terinfeksi bakteri TBC tetapi belum sakit. Ini mencegah bakteri berkembang dan menyebabkan penyakit. </li>
                <li class="font-light text-lg/8 antialiased">Mengurangi Penularan: Dengan mencegah TBC aktif, TPT mengurangi risiko penularan di komunitas, terutama bagi mereka yang hidup dengan HIV. </li>
                <li class="font-light text-lg/8 antialiased">Melindungi Orang Rentan: TPT bermanfaat bagi orang yang kontak dekat dengan pasien TBC, petugas kesehatan, dan mereka yang memiliki sistem kekebalan lemah. </li>
                <li class="font-light text-lg/8 antialiased">Efektif Biaya: TPT mengurangi jumlah kasus TBC aktif dan biaya pengobatannya. 
                Mendukung Kesehatan Global: Peningkatan TPT sejalan dengan tujuan global untuk mengakhiri epidemi TBC pada tahun 2030.</li>
                <p class="font-light text-lg/8 antialiased">Efektivitas pengobatan saat ini bervariasi antara 60% hingga 90%. Melakukan pengujian dan pengobatan ILTBC secara luas masih tidak praktis karena ketidakakuratan tes, risiko efek samping serius, dan biaya tinggi tanpa bukti yang jelas tentang manfaatnya bagi kesehatan masyarakat. Namun, bagi individu yang berisiko tinggi mengembangkan penyakit aktif, manfaat pengobatan sering kali lebih besar daripada risikonya. </br>
                Manajemen ILTBC mencakup langkah-langkah penting seperti: </br>
                1. Mengidentifikasi dan menguji orang yang perlu diuji </br>
                2.  pengobatan yang efektif dan aman agar mereka dapat menyelesaikan pengobatan dengan sedikit atau tanpa efek samping </br>
                3. Melakukan pemantauan dan evaluasi proses tersebut.
            </p>
            </p>

            <p class="font-bold text-2xl mt-3">Apa itu TPT?</p>
            <p class="font-light text-lg/8 antialiased"><span class="font-bold">Pengobatan pencegahan TBC (TPT)</span> sangat disarankan untuk mengurangi risiko berkembangnya TBC aktif, terutama bagi individu dalam kelompok berisiko tinggi, guna mencegah perkembangan penyakit yang lebih serius. 
            Terapi Pencegahan Tuberkulosis (TPT) adalah pengobatan yang diberikan kepada seseorang yang terinfeksi bakteri Mycobacterium tuberculosis dan berisiko mengembangkan TBC aktif. TBC aktif adalah kondisi di mana infeksi TBC yang sebelumnya tidak menunjukkan gejala penyakit yang ditimbulkan seperti batuk yang berlangsung lama, demam, dan penurunan berat badan. Pada tahap ini, TBC juga dapat menular ke orang lain. Tujuan dari TPT adalah untuk mencegah transisi dari infeksi laten menjadi TBC aktif, sehingga membantu melindungi individu dan mencegah penyebaran penyakit di komunitas. Oleh karena itu, TPT ini juga sering disebut sebagai pengobatan infeksi laten tuberkulosis (ILTBC). TPT bertujuan untuk mengobati infeksi laten tuberkulosis (ILTBC) sebelum berkembang menjadi penyakit TBC aktif.</p>

            <p class="font-bold text-2xl mt-3">Siapa saja yang harus melakukan Terapi Pencegahan Tuberkulosis (TPT)? </p>
            <p class="font-light text-lg/8 antialiased">TPT diberikan kepada mereka yang memiliki kontak erat dengan pasien TBC aktif. Orang yang tinggal serumah atau sering berinteraksi dengan pasien TBC berisiko tinggi tertular bakteri TBC. Selain itu, orang dengan kondisi medis tertentu, seperti HIV/AIDS, diabetes, atau kondisi lainnya yang menurunkan daya tahan tubuh, juga memerlukan TPT untuk mencegah perkembangan TBC aktif. 
            Selain itu, TPT juga dianjurkan bagi pendatang dari negara dengan angka TBC tinggi. Berdasarkan Global Tuberculosis Report 2023  kejadian TBC yang tinggi,  adalah negara dengan lebih dari 100 kasus per 100.000 penduduk per tahun. Orang yang berasal dari negara-negara dengan prevalensi TBC yang tinggi memiliki risiko lebih besar terinfeksi TBC. Bagaimana dengan Indonesia? Ternyata angka kejadian TBC mencapai 809.000 kasus pada tahun 2023, yang berada di kisaran 300-400 kasus per 100.000 penduduk. Saat ini, Indonesia menempati peringkat kedua di dunia untuk jumlah kasus TBC terbanyak.  
            
            Penghuni atau pekerja di tempat berisiko tinggi, seperti penjara atau tempat penampungan tunawisma, juga perlu mendapatkan TPT karena lingkungan tersebut mereka lebih rentan terhadap penyebaran TBC.  </p>

            <p class="font-bold text-2xl mt-3">Kelompok Beresiko Terkena Infeksi Laten TBC</p>
            <div class="flex flex-col justify-center-safe  m-5" >
                <img src="storage/img/tbc2.jpg" alt="TBC" class="w-1/2 h-auto m-auto" >
                <p class="m-auto font-light text-lg/8 antialiased">Gambar: Kelompok Beresiko Untuk Pemberian TPT</p>
                <p class="m-auto font-light text-lg/8 antialiased">Sumber Gambar: Yayasan KNCV Indonesia</p>            
            </div>

            <p class="font-light text-lg/8 antialiased">Dalam upaya melawan tuberkulosis (TBC), penting untuk mengidentifikasi orang-orang yang berisiko tinggi terkena penyakit infeksi laten TBC. Kelompok risiko ini termasuk orang dengan HIV (ODHIV) dan semua orang yang tinggal serumah dengan pasien TBC paru yang terkonfirmasi bakteriologis, dimulai dari balita, remaja, dan dewasa. Selain itu, ada juga kelompok lain yang rentan, seperti pasien dengan kondisi imunokompromais dan warga binaan pemasyarakatan, petugas kesehatan, serta anggota militer. Lalu bagaimana cara mengetahui terinfeksi laten TBC (ILTBC)?</p>

            <p class="font-bold text-2xl mt-3">Skrining Gelaja TBC Terlebih dahulu </p>
            <p class="font-light text-lg/8 antialiased">Dalam penanganan tuberkulosis (TBC), penting untuk menerapkan strategi skrining dan pencegahan yang tepat untuk kelompok-kelompok tertentu. 

            Untuk dewasa dan remaja dengan HIV yang tidak menunjukkan gejala seperti batuk, demam, penurunan berat badan, atau keringat malam, mereka dianggap tidak berisiko tinggi mengalami TBC aktif. Oleh karena itu, mereka sebaiknya diberikan pengobatan pencegahan, tanpa memandang status terapi antiretroviral (ART) mereka. Namun, jika mereka mengalami gejala-gejala tersebut, perlu dilakukan evaluasi lebih lanjut untuk memastikan adanya TBC dan penyakit lain. Jika TBC aktif tidak terdeteksi, Orang dengan HIV tetap harus menerima pengobatan pencegahan. 
            
            Radiografi dada dapat digunakan untuk memeriksa adanya TBC pada orang dengan HIV yang menjalani ART, dan pengobatan pencegahan bisa diberikan jika hasil radiografi menunjukkan kondisi normal. Bayi dan anak-anak dengan HIV yang menunjukkan gejala seperti penurunan berat badan, demam, atau batuk, atau yang memiliki riwayat kontak dengan pasien TBC, harus dievaluasi untuk TBC. Jika setelah evaluasi TBC tidak ditemukan, mereka juga harus menerima pengobatan pencegahan. 
            
            Untuk kontak serumah yang HIV-negatif berusia ≥ 5 tahun, ketiadaan gejala dan hasil radiografi dada yang normal dapat digunakan untuk menyingkirkan kemungkinan TBC aktif sebelum memberikan pengobatan pencegahan.</p>

            <p class="font-bold text-2xl mt-3">Cara Mengetahui Terinfeksi Laten TBC </p>
            <p class="font-bold text-lg">Tuberculin Skin Test (TST)</p>
            <p class="font-light text-lg/8 antialiased">Pertama, TST. TST adalah salah satu cara mengetahui seseorang terkena infeksi laten TBC, dimana sejumlah kecil cairan tuberkulin disuntikkan ke dalam kulit dan reaksi alergi diamati setelah beberapa hari. Reaksi positif ditandai dengan pembengkakan (indurasi) atau kemerahan di area penyuntikan. Pembengkakan diukur setelah 48-72 jam. Jika indurasi mencapai ukuran tertentu (biasanya 10 mm atau lebih, tergantung pada faktor risiko), ini dianggap sebagai reaksi positif.  Ketika tubuh mengenali zat asing Ketika penyuntikan, sistem kekebalan tubuh merespons dengan mengirimkan sel-sel imun ke area tersebut. Ini menyebabkan peradangan lokal yang ditandai dengan pembengkakan, kemerahan, dan terkadang rasa sakit.</p>
            <p class="font-bold text-lg">Interferon Gamma-Relese Assay (IGRA)</p>
            <p class="font-light text-lg/8 antialiased">Kedua, dengan melakukan pemeriksaan Interferon Gamma-Relese Assay adalah sebuah tes darah yang membantu mendeteksi infeksi oleh bakteri Mycobacterium tuberculosis. IGRA berguna untuk mengidentifikasi individu dengan bakteri TBC ada dalam tubuh tetapi belum menyebabkan penyakit aktif. Meskipun demikian, tes ini hanya satu bagian dari gambaran keseluruhan. Sebab itu, untuk memastikan diagnosis yang akurat, hasil tes perlu dipertimbangkan bersamaan dengan pemeriksaan rontgen dada dan tes cepat molekuler (TCM).</p>
            
            <div class="flex flex-col justify-center-safe  m-5" >
                <img src="storage/img/obat.jpg" alt="TBC" class="w-1/2 h-auto m-auto" >
                <p class="m-auto font-light text-lg/8 antialiased">Sumber Gambar: Sumber Gambar : World Health Organization. (2022). WHO consolidated guidelines on tuberculosis. Module 3: diagnosis–rapid diagnostics for tuberculosis detection. World Health Organization.(Presentasi WHO- Indonesia)   </p>            
            </div>

            <div class="flex flex-col justify-center-safe  m-5" >
                <img src="storage/img/obat2.jpg" alt="TBC" class="w-1/2 h-auto m-auto" >
                <p class="m-auto font-light text-lg/8 antialiased">Sumber Gambar: World Health Organization. (2022). WHO consolidated guidelines on tuberculosis. Module 3: diagnosis–rapid diagnostics for tuberculosis detection. World Health Organization. </p>            
            </div>
            
            
            <p class="font-light text-lg/8 antialiased">Berikut adalah penjelasan mengenai Terapi Pencegahan Tuberkulosis. Perlu diingat, menemukan infeksi laten TBC agar dapat diberikan TPT yang tepat merupakan salah satu upaya penanggulangan penularan TBC. Mengidentifikasi dan mengobati infeksi laten TBC sedini mungkin sangat penting untuk mencegah perkembangan penyakit menjadi TBC aktif, yang lebih menular dan berbahaya.

            Jalani pemeriksaan rutin dan ikuti saran medis untuk membantu menghentikan penyebaran TBC di komunitas kita. Dengan kesadaran dan tindakan proaktif, kita semua dapat berkontribusi dalam mengurangi beban penyakit TBC dan melindungi kesehatan diri sendiri serta orang-orang di sekitar kita.  Tetap waspada, dan tetap sehat, Sobat TB!</p>

            
                <a href="https://yki4tbc.org/https-yki4tbc-org-apa-itu-terapi-pencegahan-tuberkulosis-tpt/" ><p class="font-light text-lg/8 antialiased hover:text-blue-500 mb-15">Sumber: https://yki4tbc.org/https-yki4tbc-org-apa-itu-terapi-pencegahan-tuberkulosis-tpt/
            </p></a>






            
        </div>
    </section>
    
</x-layout>