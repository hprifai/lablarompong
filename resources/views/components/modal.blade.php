<!-- Main modal -->
<div x-show="isOpen" class="fixed flex top-0 right-0 left-0 z-20 justify-center items-center w-full h-full bg-black/70 overflow-y-auto">
    <div @click.away="isOpen = !isOpen" class="relative p-4 max-w-2xl">
        <!-- Modal content -->
        <div class="relative bg-white px-[15px] mt-15 rounded-lg shadow-sm md:mt-6 dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600 border-gray-200">
                <h3 class="text-xl font-extrabold text-gray-900 dark:text-white">
                    {{ $serve->jenis_tes }}
                </h3>
                <button @click="isOpen = !isOpen" type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-4 md:p-5 space-y-4">
                <img src="/img/kolesterol.png" alt="kolesterol" class="w-42 mr-2 rounded-2xl mx-auto md:float-left">
                <h1 class="font-semibold -my-1"> Deskripsi</h1>
                <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400 text-pretty">
                    {{ $serve->deskripsi }}                
                </p>
                <h1 class="font-semibold -my-1">Manfaat</h1>
                <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400 text-justify">
                    {{ $serve->manfaat }}
                </p>
                <h1 class="font-semibold -my-1">Persiapan</h1>
                <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400 text-justify">
                    {{ $serve->persiapan }}
                </p>
            </div>
            <!-- Modal footer -->
            <div class="p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                <button @click="isOpen = !isOpen" data-modal-hide="static-modal" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-red-600 hover:text-white focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Tutup</button>
                <a href="/layanan/{{ $serve['slug'] }}"><button  data-modal-hide="static-modal" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-green-600 rounded-lg border border-gray-200 hover:bg-green-500 hover:text-white focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Detail</button>
                </a>
            </div>
        </div>
    </div>
</div>