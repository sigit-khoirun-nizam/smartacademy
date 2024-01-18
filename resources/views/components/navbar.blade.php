<div id="beranda" class="bg-cover " style="background-image:url(https://i.postimg.cc/2yfYCnhd/White.jpg);">
    <section class="shadow-sm font-poppins dark:bg-gray-800">
        <div class="max-w-6xl px-4 mx-auto " x-data="{open:false}">
            <nav class="flex items-center justify-between py-4">
                <a href="" class="text-3xl font-semibold leading-none dark:text-gray-400">
                    <img src="{{ asset('img/logonew.png') }}" class="w-28 md:w-28" alt="">
                </a>
                <div class="flex justify-between lg:space-x-9">
                    <div class="flex lg:hidden">
                        <button id="theme-toggle" type="button" class="flex items-center mx-1 px-3 py-2 text-fuchsia-600 border border-fuchsia-200 rounded dark:text-gray-400 navbar-burger hover:text-fuchsia-800 hover:border-fuchsia-300 lg:hidden">
                            <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path></svg>
                            <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" fill-rule="evenodd" clip-rule="evenodd"></path></svg>
                        </button>
                        <button
                            class="flex items-center px-3 py-2 text-fuchsia-600 border border-fuchsia-200 rounded dark:text-gray-400 navbar-burger hover:text-fuchsia-800 hover:border-fuchsia-300 lg:hidden"
                            @click="open =true">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor"
                                class="bi bi-list" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                            </svg>
                        </button>
                    </div>
                    <ul class="hidden lg:w-auto lg:space-x-9 lg:items-center lg:flex ">
                        <li><a href="#beranda"
                                class="text-sm text-gray-700 hover:text-fuchsia-700 dark:text-gray-400 dark:hover:text-fuchsia-500">Beranda</a>
                        </li>
                        <li><a href="#tentang"
                                class="text-sm text-gray-700 hover:text-fuchsia-700 dark:text-gray-400 dark:hover:text-fuchsia-500">Tentang</a>
                        </li>
                        <li><a href="#kursus"
                                class="text-sm text-gray-700 hover:text-fuchsia-700 dark:text-gray-400 dark:hover:text-fuchsia-500">Kursus</a>
                        </li>
                    </ul>
                    <div class="hidden lg:block">
                        <a href=""
                            class="inline-block px-4 py-3 mr-2 text-xs font-medium leading-none text-gray-100 bg-fuchsia-600 rounded-lg dark:hover:bg-fuchsia-500 dark:hover:text-gray-200 dark:text-gray-900 dark:bg-fuchsia-400 hover:bg-fuchsia-700">
                            Daftar Sekarang
                        </a>
                    </div>
                </div>
            </nav>
            <!-- Mobile Sidebar -->
            <div class="fixed inset-0 w-full bg-gray-900 opacity-25 dark:bg-gray-400 lg:hidden"
                :class="{'translate-x-0 ease-in-opacity-100' :open===true, '-translate-x-full ease-out opacity-0' : open===false}">
            </div>
            <div class="absolute inset-0 z-40 h-screen p-3 text-gray-400 duration-500 transform bg-fuchsia-50 dark:bg-gray-800 w-80 lg:hidden lg:transform-none lg:relative"
                :class="{'translate-x-0 ease-in-opacity-100' :open===true, '-translate-x-full ease-out opacity-0' : open===false}">
                <div class="flex justify-between lg:">
                    <a class="p-2 text-2xl font-bold text-gray-700 dark:text-gray-400" href="#">
                        <img src="{{ asset('img/logonew.png') }}" class="w-28" alt="">
                    </a>
                    <button class="p-2 text-gray-700 rounded-md dark:text-gray-400 hover:text-fuchsia-300 lg:hidden "
                        @click="open=false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                            class="bi bi-x-circle" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                            <path
                                d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                        </svg>
                    </button>
                </div>
                <ul class="px-4 text-left mt-7">
                    <li class="pb-3">
                        <a href="#beranda" class="text-sm text-gray-700 hover:text-fuchsia-400 dark:text-gray-100">Beranda</a>
                    </li>
                    <li class="pb-3">
                        <a href="#tentang" class="text-sm text-gray-700 hover:text-fuchsia-400 dark:text-gray-400">Tentang</a>
                    </li>
                    <li class="pb-3">
                        <a href="#kursus" class="text-sm text-gray-700 hover:text-fuchsia-400 dark:text-gray-400">Kursus</a>
                    </li>
                </ul>
                <div class="block mt-5 lg:hidden">
                    <a href=""
                        class="inline-block w-full px-4 py-3 mr-2 text-xs font-semibold leading-none text-center text-gray-100 bg-fuchsia-600 rounded-full dark:hover:bg-fuchsia-400 dark:bg-fuchsia-300 dark:text-gray-700 hover:bg-fuchsia-700">
                        Daftar Sekarang!
                    </a>
                </div>
            </div>
        </div>
    </section>
    <div class="py-20 dark:bg-gray-700">
        <div class="max-w-6xl px-4 mx-auto md:px-0 font-poppins">
            <div class="flex flex-wrap items-center px-4">
                <div class="w-full px-4 mb-16 md:w-1/2 md:mb-0">
                    <span
                        class="inline-block mb-4 text-sm font-semibold leading-none text-fuchsia-500 capitalize dark:text-fuchsia-200">
                        ayo belajar bersama kami
                    </span>
                    <h2
                        class="mb-6 text-2xl font-semibold leading-tight tracking-tight text-gray-900 dark:text-gray-300 md:text-4xl lg:text-5xl">
                        SMART ACADEMY
                    </h2>
                    <p class="mb-6 text-justify text-base leading-7 text-gray-600 dark:text-gray-400 md:text-lg">
                        Pilihan terbaik untuk siswa SD/MI yang ingin meraih potensi maksimal. Kurikulum terstruktur dan metode pembelajaran inovatif menciptakan suasana belajar yang kreatif dan interaktif. Bergabunglah dengan Smart Academy Course untuk pengalaman belajar yang mendalam dan mempersiapkan masa depan cerah untuk anak Anda.
                    </p>
                    <a href="#"
                        class="inline-flex items-center justify-center px-8 py-3 text-gray-100 bg-fuchsia-600 rounded-lg shadow hover:text-gray-100 hover:bg-fuchsia-500 ">
                        Join sekarang</a>
                </div>
                <div class="w-full px-4 md:w-1/2">
                    <div class="relative mx-auto md:mr-0 max-w-max">
                        <div class="relative overflow-hidden rounded-7xl">
                            <img src="{{ asset('img/bannernew1.jpg') }}" alt=""
                                class="relative z-10 object-cover w-full h-full rounded-md">
                                {{-- <div x-data="imageSlider" class="relative mx-auto max-w-2xl overflow-hidden rounded-md bg-fuchsia-600 p-2 sm:p-4">
                                    <div class="absolute right-5 top-5 z-10 rounded-lg bg-gray-600 px-2 text-center text-sm text-white">
                                        <span x-text="currentIndex"></span>/<span x-text="images.length"></span>
                                    </div>
                            
                                    <button @click="previous()" class="absolute left-5 top-1/2 z-10 flex h-11 w-11 -translate-y-1/2 items-center justify-center rounded-full bg-gray-100 shadow-md">
                                        <i class="fas fa-chevron-left text-2xl font-bold text-gray-500"></i>
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="m11.25 9-3 3m0 0 3 3m-3-3h7.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                        </svg>   
                                    </button>
                            
                                    <button @click="forward()" class="absolute right-5 top-1/2 z-10 flex h-11 w-11 -translate-y-1/2 items-center justify-center rounded-full bg-gray-100 shadow-md">                                       
                                    </button>
                            
                                    <div class="relative h-80" style="width: 30rem">
                                        <template x-for="(image, index) in images">
                                            <div x-show="currentIndex == index + 1" x-transition:enter="transition transform duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition transform duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="absolute top-0">
                                                <img :src="image" alt="image" class="rounded-sm" />
                                            </div>
                                        </template>
                                    </div>
                                </div> --}}
                                
                        <div class="max-w-max mx-auto">

                            

                        

                            
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
    </div>
</div>
<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

{{-- <script>
    document.addEventListener("alpine:init", () => {
      Alpine.data("imageSlider", () => ({
        currentIndex: 1,
        images: [
          "https://unsplash.it/640/425?image=30",
          "https://unsplash.it/640/425?image=40",
          "https://unsplash.it/640/425?image=50",
        ],
        previous() {
          if (this.currentIndex > 1) {
            this.currentIndex = this.currentIndex - 1;
          }
        },
        forward() {
          if (this.currentIndex < this.images.length) {
            this.currentIndex = this.currentIndex + 1;
          }
        },
      }));
    });
  </script> --}}
