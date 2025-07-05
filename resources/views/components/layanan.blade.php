<section id="layanan">
    {{-- Header --}}
    <div class="container max-w-full" >
        {{-- Content ALur  --}}
        <div class="mt-10 text-center text-2xl font-extrabold text-black ">Layanan Kami</div>
        <p class="px-14 pt-8 pb-3 text-gray-400 text-justify">Penting untuk  membaca prosedure/alur pemeriksaan dan alur rujukan laboratorium</p>
        <!-- 
        <div id="Alur" class="flex flex-col gap-3 md:flex-row ">
            <div class="w-full md:w-1/2 flex flex-col px-10 md:flex-col md:px-14 font-bold" x-data ="{expandAlur : false}">
                <div class="w-full h-10 flex items-center text-black  mr-10 justify-between bg-emerald-200 hover:bg-emerald-400  rounded-2xl p-2 cursor-pointer active:ring-3 active:ring-green-700 active:ring-offset-2" @click="expandAlur= !expandAlur">
                    <h1>Alur Pemeriksaan Laboratorium </h1>
                    <svg class="w-6 h-6 text-gray-800 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24":class="{'rotate-180 transition 0.2s ease-out ': expandAlur} " >
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 9-7 7-7-7"/>
                    </svg>                
                </div>
                {{-- Munculkan Gambar saat Alur di klik --}}
                <div x-show="expandAlur"
                    x-transition:enter="transition ease-out duration-300"
                    x-transition:enter-start="opacity-0 scale-90"
                    x-transition:enter-end="opacity-100 scale-100"
                    x-transition:leave="transition ease-in duration-300"
                    x-transition:leave-start="opacity-100 scale-100"
                    x-transition:leave-end="opacity-0 scale-90"
                >
                    <img src="/storage/img/alur-pemeriksaan.jpg" alt="" class="w-full h-[80%]  pt-4 ">
                </div>
            </div>
            <div class="w-full md:w-1/2 flex flex-col px-10  md:flex-col md:px-14 font-bold" x-data ="{expandAlur : false}">
                <div class="w-full h-10 items-center text-black flex mr-10 justify-between bg-emerald-200 hover:bg-emerald-400 rounded-2xl p-2 cursor-pointer active:ring-3 active:ring-green-700 active:ring-offset-2" @click="expandAlur= !expandAlur">
                    <h1>Alur Rujukan Laboratorium  </h1>
                    <svg class="w-6 h-6 text-gray-800 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24 " :class="{'rotate-180 transition 0.2s ease-out ': expandAlur} " >
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 9-7 7-7-7"/>
                    </svg>                
                </div>
                {{-- Munculkan Gambar saat Alur di klik --}}
                <div x-show="expandAlur"
                    x-transition:enter="transition ease-out duration-300"
                    x-transition:enter-start="opacity-0 scale-90"
                    x-transition:enter-end="opacity-100 scale-100"
                    x-transition:leave="transition ease-in duration-300"
                    x-transition:leave-start="opacity-100 scale-100"
                    x-transition:leave-end="opacity-0 scale-90"
                >
                    <img src="/storage/img/alur-rujukan.jpg" alt="" class="w-full h-[80%]  pt-4 -pb-20">
                </div>
            </div>
        </div>
         -->

    {{-- Content tarif Retribusi --}}
    {{-- Membuat image Slider --}}
    <div x-data="{            
        slides: [                
            {
                imgSrc: 'storage/img/alur-rujukan.jpg',
                imgAlt: 'Alur Rujukan',  
                title: 'Alur Rujukan',
                description: '&quot; Alur rujukan pelayanan laboratorium puskesmas Larompong. &quot;',              
            },                
            {                    
                imgSrc: 'storage/img/alur-pemeriksaan.jpg',                    
                imgAlt: 'Alur pemeriksaan',  
                title: 'Alur Pemeriksaan',
                description: '&quot; Alur pemeriksaan laboratorium puskesmas Larompong. &quot;',              
            },                
            {                    
                imgSrc: 'storage/img/tarif1.png',                    
                imgAlt: 'Tarif retribusi',    
                title: 'Jenis Pemeriksaan & Tarif Retribusi',
                description: '&quot; Jenis Pemeriksaan dan Tarif Retribusi sesuai dengan Perda Luwu No. 1 Tahun 2024.  &quot;'             
            },            
            {                    
                imgSrc: 'storage/img/tarif2.png',                    
                imgAlt: 'Tarif Retibusi',    
                title: 'Jenis Pemeriksaan & Tarif Retribusi',
                description: '&quot; Jenis Pemeriksaan dan Tarif Retribusi sesuai dengan Perda Luwu No. 1 Tahun 2024. &quot;'             
            },            
            {                    
                imgSrc: 'storage/img/waktu-periksa1.png',                    
                imgAlt: 'Waktu periksa',    
                title: 'Waktu Tunggu Periksa',
                description: '&quot; Waktu tunggu pasien setelah dilakukan pemeriksaan Laboratorium. &quot;'             
            },            
            {                    
                imgSrc: 'storage/img/waktu-periksa2.png',                    
                imgAlt: 'Waktu periksa',    
                title: 'Waktu Tunggu Periksa',
                description: '&quot; Waktu tunggu pasien setelah dilakukan pemeriksaan Laboratorium. &quot;'             
            },            
            {                    
                imgSrc: 'storage/img/nilai-normal1.png',                    
                imgAlt: 'Nilai Normal',    
                title: 'Nilai Normal Pemeriksaan',
                description: '&quot; Jenis pemeriksaan dan Nilai Normal rujukan hasil pemeriksaan Laboratorium. &quot;'             
            },            
            {                    
                imgSrc: 'storage/img/nilai-normal2.png',                    
                imgAlt: 'nilai normal',    
                title: 'Nilai Normal Pemeriksaan',
                description: '&quot; Jenis pemeriksaan dan Nilai Normal rujukan hasil pemeriksaan Laboratorium. &quot;'             
            },            
            {                    
                imgSrc: 'storage/img/nilai-normal3.png',                    
                imgAlt: 'nilai normal',    
                title: 'Nilai Normal Pemeriksaan',
                description: '&quot; Jenis pemeriksaan dan Nilai Normal rujukan hasil pemeriksaan Laboratorium. &quot;'             
            },            
            {                    
                imgSrc: 'storage/img/nilai-normal4.png',                    
                imgAlt: 'nilai normal',    
                title: 'Nilai Normal Pemeriksaan',
                description: '&quot; Jenis pemeriksaan dan Nilai Normal rujukan hasil pemeriksaan Laboratorium. &quot;'             
            },            
            {                    
                imgSrc: 'storage/img/nilai-normal5.png',                    
                imgAlt: 'nilai normal',    
                title: 'Nilai Normal Pemeriksaan',
                description: '&quot; Jenis pemeriksaan dan Nilai Normal rujukan hasil pemeriksaan Laboratorium. &quot;'             
            },            
        ],            
        currentSlideIndex: 1,
        previous() {                
            if (this.currentSlideIndex > 1) {                    
                this.currentSlideIndex = this.currentSlideIndex - 1                
            } else {   
                // If it's the first slide, go to the last slide           
                this.currentSlideIndex = this.slides.length                
            }            
        },            
        next() {                
            if (this.currentSlideIndex < this.slides.length) {                    
                this.currentSlideIndex = this.currentSlideIndex + 1                
            } else {                 
                // If it's the last slide, go to the first slide    
                this.currentSlideIndex = 1                
            }            
        },        
    }" class="relative w-full overflow-hidden h-full p-3 lg:p-15">
    
        <!-- previous button -->
        <button type="button" class="absolute left-5 lg:left-20 top-1/2 z-20 flex rounded-full -translate-y-1/2 items-center justify-center bg-surface/40 p-2 text-on-surface transition hover:bg-surface/60 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary active:outline-offset-0 dark:bg-surface-dark/40 dark:text-on-surface-dark dark:hover:bg-surface-dark/60 dark:focus-visible:outline-primary-dark" aria-label="previous slide" x-on:click="previous()">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-width="3" class="size-5 md:size-6 pr-0.5" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
            </svg>
        </button>
    
        <!-- next button -->
        <button type="button" class="absolute right-5 lg:right-20 top-1/2 z-20 flex rounded-full -translate-y-1/2 items-center justify-center bg-surface/40 p-2 text-on-surface transition hover:bg-surface/60 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary active:outline-offset-0 dark:bg-surface-dark/40 dark:text-on-surface-dark dark:hover:bg-surface-dark/60 dark:focus-visible:outline-primary-dark" aria-label="next slide" x-on:click="next()">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-width="3" class="size-5 md:size-6 pl-0.5" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
            </svg>
        </button>
       
        <!-- slides -->
        <!-- Change min-h-[50svh] to your preferred height size -->
        <div class="relative min-h-[80svh] w-full">
            <template x-for="(slide, index) in slides">
                <div x-cloak x-show="currentSlideIndex == index + 1" class="absolute inset-0" x-transition.opacity.duration.1000ms>
                    
                    <!-- Title and description -->
                    <div class="lg:py-80 lg:pl-100 absolute inset-0 z-10 flex flex-col items-center justify-end-safe gap-2 bg-linear-to-t from-surface-dark/85 to-transparent px-6 py-12 text-center">
                        <h3 class="hidden lg:block w-full lg:w-[80%] text-balance text-2xl lg:text-3xl font-bold text-on-surface-dark-strong" x-text="slide.title" x-bind:aria-describedby="'slide' + (index + 1) + 'Description'"></h3>
                        <p class="hidden lg:block  lg:w-1/2 w-full text-pretty text-sm text-on-surface-dark" x-text="slide.description" x-bind:id="'slide' + (index + 1) + 'Description'"></p>
                    </div>
    
                    <img class="absolute w-full lg:w-1/2 h-full inset-0 object-fill md:object-contain text-on-surface dark:text-on-surface-dark" x-bind:src="slide.imgSrc" x-bind:alt="slide.imgAlt" />
                </div>
            </template>
        </div>
        
        <!-- indicators -->
        <div class="absolute rounded-radius bottom-7 md:bottom-5 left-1/2 z-20 flex -translate-x-1/2 gap-4 md:gap-3 px-1.5 py-1 md:px-2" role="group" aria-label="slides" >
            <template x-for="(slide, index) in slides">
                <button class="size-2 rounded-full transition" x-on:click="currentSlideIndex = index + 1" x-bind:class="[currentSlideIndex === index + 1 ? 'bg-on-surface-dark' : 'bg-on-surface-dark/50']" x-bind:aria-label="'slide ' + (index + 1)"></button>
            </template>
        </div>
    </div>

        <div class=" text-center text-2xl font-extrabold px-8 mt-10 text-black">Mau Ki Tes Laboratorium ?</div>
        <p class="text-gray-400 text-justify px-10 pt-5 md:px-14 md:text-center">Kami melayani pemeriksaan laboratorium sesuai dengan ketentuan yang berlaku, hanya dalam beberapa menit hasil pemeriksaan laboratorium sudah selesai dan dapat dilihat oleh yang bersangkutan</p>
        {{-- container layanan --}}
        <div  class="container min-w-full pb-20 mt-8 px-6">
            {{-- content layanan --}}
            <div class="p-4 grid justify-evently gap-4 md:px-10 md:grid-cols-2 lg:grid-cols-4">
                {{-- layanan --}}
                @foreach ($service as $serve )
                    <a href="/layanan/{{ $serve['slug'] }}">
                        <div class="grid justify-items-center cursor-pointer content-center space-evenly p-2 bg-green-200 aspect-square  rounded-2xl hover:shadow-2xl hover:shadow-gray-400 mb-4 hover:bg-green-400 group hover:scale-95 transition-all duration-500">
                            <div class="id hidden">{{ $serve->id }}</div>
                            <img src="{{ asset('storage/img/'.$serve->image) }}" alt="" class="w-32 h-32 bg-gray-100 rounded-full ring-2 ring-amber-400 group-hover:scale-110 transition-all duration-500 ">
                            <div class="text-center text-emerald-900 mt-4">
                                <h1 class="font-bold">{{ $serve->jenis_tes }}</h1>
                                <div><span class="ml-1">@currency($serve->harga)</span></div>
                                <p>{{ $serve->lama_periksa }}</p>
                            </div>
                        </div>
                    </a>
                @endforeach                                                                                                                        
                {{-- End Layanan --}}                                                             
            </div>
            {{-- <x-modal :serve="$serve"></x-modal> --}}
        </div>
    </div>
</section>