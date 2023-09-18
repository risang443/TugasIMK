@extends('layouts.main')
@section('container')

<!-- Hero Section Start -->
  <section id="Home" class="relative py-4 flex flex-col w-full px-0 bg-black">
    <div class="absolute z-10 inset-x-0 top-0 w-full">
      <div class="carousel" data-flickity='{ "pauseAutoPlayOnHover":false,  "autoPlay": 4000, "wrapAround": true, "pageDots": false}'>
        <div class="carousel-hero bg-black">
          <div class="relative lg:h-[540px] h-[540px] overflow-hidden">
            <div class="duration-700 ease-in-out" data-carousel-item>
              <img src="/images/Header5.jpg" class="carouselHeroImg absolute block lg:w-full max-w-none h-max -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 z-10 brightness-[.6]" alt="..." />
              <div class="h-full absolute z-20 flex w-full bg-gradient-to-t from-black via-transparent to-transparent">
              </div>
              <div class="absolute z-40 flex justify-center -translate-x-1/2 -translate-y-1/2 md:top-[210px] top-48 left-1/2 w-full">
                <div class="carouselText flex flex-col text-center justify-center mx-8">
                  <h1 class="text-white font-black text-5xl md:text-7xl  animate__animated animate__fadeIn delay-4">Al Khoir</h1>
                  <h3 class="text-white text-xl md:text-3xl font-medium animate glow delay-2">Islamic School</h3>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-hero bg-black">
          <div class="relative lg:h-[540px] h-[540px] overflow-hidden">
            <div class="duration-700 ease-in-out" data-carousel-item>
              <img src="/images/Headersky5.jpg" class="carouselHeroImg absolute block lg:w-full max-w-none h-max -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 z-10 brightness-[.6]" alt="..." />
              <div class="h-full absolute z-20 flex w-full bg-gradient-to-t from-black via-black/10 to-transparent">
              </div>
              <div class="absolute z-40 flex justify-center -translate-x-1/2 -translate-y-1/2 md:top-[210px]  top-44  md:left-1/3 left-1/2 w-full px-8 md:px-0 md:w-2/3 break-all">
                <div class="carouselText flex flex-col text-left justify-center ">
                  <h3 class="text-white md:text-lg text-base font-bold animate__animated animate__fadeInDown delay-4 py-0.5  tracking-wider ">Al Khoir Islamic School</h3>
                  <h3 class="text-white text-2xl md:text-5xl font-bold animate__animated animate__fadeInLeft delay-3 mb-6 tracking-wide">
                    Menyiapkan anak anda untuk masa depan
                  </h3>
                  <h1 class="animate__animated animate__fadeInUp delay-3"><a target="_blank" href="https://wa.me/6283136152521?text=Assalamu%27alaikum%20warahmatullahi%20wabarakatuh,%20saya%20mau%20nanya%20tentang%20sekolah%20Al%20Khoir" class="bg-buttonh hover:bg-buttonh/50 hover:text-white transition ease-in-out duration-200 px-4 md:px-8 py-2  mb-1 rounded-full text-white font-bold  tracking-wide">Daftar Sekarang</a></h1>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="absolute inset-x-0 bottom-0 z-10 w-full bg-secondary rounded-t-[80px] h-[200px]"></div>
    <div class="z-20 w-full mt-[60vh] md:mt-[40vh] lg:mt-[40vh] mb-1">
      <div class="md:container md:mx-auto mx-2">
        <div class="">
          <div class="grid md:gap-x-4 gap-y-4 grid-cols-1 md:grid-cols-3 justify-items-center">
            <!-- List Starts -->
            <div class="bg-white ring-2 text-hitam ring-slate-200 shadow-md rounded-[50px] md:w-[400px] w-full h-[50vh] md:h-[40vh] animate fade delay-6 relative overflow-hidden z-[1]">
              <div class="absolute w-full h-full z-[2]">
                <img src="/images/Card.png" alt="" class="w-full h-full object-cover z-[2]">
              </div>
              <div class="relative z-[50] text-hitam">
                <div class=" pt-6 mx-8 text-center  break-all leading-tighter">
                  <h1 class="mx-8 mb-0 text-lg md:text-lg font-semibold leading-tighter tracking-wide  logo uppercase">Sekolah Jenjang</h1>
                  <h2 class="font-extrabold text-4xl md:text-3xl">SD - SMP - SMA</h2>
                </div>
                <div class="mx-8 my-5">
                  <img src="/images/Horizontal.png" alt="" class="w-full">
                </div>
                <div class="py-1 px-2 bg-detail ring-1 ring-detail/40  rounded-sm shadow-md my-[47px] md:my-[47px]">
                  <h1 class="text-center text-white font-bold">PENDAFTARAN MASIH DIBUKA !</h1>
                </div>
                <a target="_blank" href="https://wa.me/6283136152521?text=Assalamu%27alaikum%20warahmatullahi%20wabarakatuh,%20saya%20mau%20nanya%20tentang%20sekolah%20Al%20Khoir">
                  <button class="flex mx-auto text-center bg-buttonh hover:bg-buttonh/50 hover:text-white transition ease-in-out duration-200 px-4 md:px-8 py-2  mb-1 rounded-full text-white font-bold  tracking-wide">
                    Daftar Sekarang
                  </button>
                </a>
              </div>
            </div>
            <div class="bg-white ring-2 text-hitam ring-slate-200 shadow-md rounded-[50px] md:w-[400px] w-full h-[50vh] md:h-[40vh] animate delay-7" data-aos="fade-up" data-aos-delay="100">
              <div class="flex flex-col text-center justify-center pb-3 pt-6">
                <div class="flex justify-center">
                  <img src="/images/Camera.png" alt="" class="w-1/5 origin-bottom -rotate-12" />
                </div>
                <div class="px-3">
                  <h1 class="font-bold text-hitam text-xl my-5  tracking-wide logo">Aktivitas Terbaru</h1>
                </div>
              </div>
              <div class="mx-8 truncate font-medium">
                @if ($posts->count() == 3)
                  <div>  
                    <a href="/posts/{{ $posts[0]->slug }}" class="  text-hitam hover:text-primary/50 hover:border-b-primary/50 hover:border-b duration-200 ease-in-out  tracking-wide">
                      <h2 class="flex">
                        ✏️<span class="px-2">{{ $posts[0]->title }}</span>
                      </h2>
                    </a>
                    <hr class="h-px my-2 bg-gray-300 ring-0" />
                    <a href="/posts/{{ $posts[1]->slug }}" class="  text-hitam hover:text-primary/50 hover:border-b-primary/50 hover:border-b duration-200 ease-in-out  tracking-wide">
                      <h2 class="flex">
                        ✏️<span class="px-2">{{ $posts[1]->title }}</span>
                      </h2>
                    </a>
                    <hr class="h-px my-2 bg-gray-300 ring-0" />
                    <a href="/posts/{{ $posts[2]->slug }}" class="  text-hitam hover:text-primary/50 hover:border-b-primary/50 hover:border-b duration-200 ease-in-out  tracking-wide">
                      <h2 class="flex">
                        ✏️<span class="px-2">{{ $posts[2]->title }}</span>
                      </h2>
                    </a>
                    <hr class="h-px my-2 bg-gray-300 ring-0" />
                  </div>
                  @else
                      <p class="text-center text-xl px-4 text-hitam/80">Tidak ada artikel.</p>
                @endif
              </div>
              <a href="/aktivitas">
                <button class="flex mx-auto text-center bg-button hover:bg-button/50 hover:text-white transition ease-in-out duration-200 px-4 md:px-8 py-2 mt-7 mb-1 rounded-full text-white font-bold  tracking-wide">
                  Aktivitas Lainnya
                </button>
              </a>
            </div>
            <div class="bg-white ring-2 text-hitam ring-slate-200 shadow-md rounded-[50px] md:w-[400px] w-full h-[50vh] md:h-[40vh] animate delay-8 relative" data-aos="fade-up" data-aos-delay="100">
              <div class="absolute -top-2 -right-2">
                <p class="py-1 px-2 bg-detail rounded-full animate-pulse text-base font-semibold  text-white">Terbaru!</p>
              </div>
              <div class="flex flex-col text-center justify-center pb-3 pt-8">
                <div class="flex justify-center">
                  <img src="/images/Megaphone.png" alt="" class="w-1/5" />
                </div>
                <div class="px-3">
                  <h1 class="font-bold text-xl mt-3 mb-3 text-hitam  tracking-wide logo">Informasi Terbaru</h1>
                </div>
              </div>
              <div class="mx-8 truncate font-medium">
                @if ($informasi->count() == 3)
                  <div>
                    <a href="/posts/{{ $informasi[0]->slug }}" class="  text-hitam hover:text-primary/50 hover:border-b-primary/50 hover:border-b duration-200 ease-in-out  tracking-wide">
                      <h2 class="flex">
                        ✏️<span class="px-2">{{ $informasi[0]->title }}</span>
                      </h2>
                    </a>
                    <hr class="h-px my-2 bg-gray-300 ring-0" />
                    <a href="/posts/{{ $informasi[1]->slug }}" class="  text-hitam hover:text-primary/50 hover:border-b-primary/50 hover:border-b duration-200 ease-in-out  tracking-wide">
                      <h2 class="flex">
                        ✏️<span class="px-2">{{ $informasi[1]->title }}</span>
                      </h2>
                    </a>
                    <hr class="h-px my-2 bg-gray-300 ring-0" />
                    <a href="/posts/{{ $informasi[2]->slug }}" class="  text-hitam hover:text-primary/50 hover:border-b-primary/50 hover:border-b duration-200 ease-in-out  tracking-wide">
                      <h2 class="flex">
                        ✏️<span class="px-2">{{ $informasi[2]->title }}</span>
                      </h2>
                    </a>
                    <hr class="h-px my-2 bg-gray-300 ring-0" />
                  </div>  
                  @else
                      <p class="text-center text-xl px-4 text-hitam/80">Tidak ada artikel.</p>
                @endif
              </div>
              <a href="/informasi">
                <button class="flex mx-auto text-center bg-button hover:bg-button/50 hover:text-white transition ease-in-out duration-200 px-4 md:px-8 py-2 mt-7 mb-1 rounded-full text-white font-bold  tracking-wide">
                  Informasi Lainnya
                </button>
              </a>
            </div>

            <!-- List Ends -->
          </div>
        </div>
      </div>
    </div>
  </section>
<!-- Hero Section Ends -->


<!-- Mengapa starts -->
  <section id="Mengapa" class="w-full bg-secondary">
    <div class="md:py-4 py-2 md:mx-auto mx-2">
      <h1 class="mt-4 bg-detail rounded-3xl shadow-md    font-black text-center text-3xl md:text-5xl text-white md:px-4 px-7 logo md:container md:py-3 py-2 md:mx-auto mx-2">Mengapa Al Khoir?</h1>
      <!-- Carousel Starts -->
      <div class="carousel overflow-hidden rounded-md mt-2 mb-2" data-flickity='{ "wrapAround": true, "cellAlign": "center", "autoPlay" : 2400, "pauseAutoPlayOnHover" : false }' data-aos="fade-left">
        <div class="carousel-mengapa">
          <div class="flex flex-col items-center justify-center">
            <div class="mx-auto w-full overflow-hidden py-2 flex justify-center">
              <img src="/images/Clock.png" alt="" class="h-40 object-cover">
            </div>
            <div class="flex flex-col items-center justify-center text-center text-hitam py-4 px-4">
              <h1 class="font-extrabold text-2xl pb-2">Waktu Belajar Fleksibel</h1>
              <p class="font-medium">Proses belajar fleksibel, dapat dilakukan secara offline, online & dari mana saja.</p>
            </div>
          </div>
        </div>
        <div class="carousel-mengapa">
          <div class="flex flex-col items-center justify-center">
            <div class="mx-auto w-full overflow-hidden py-2 flex justify-center">
              <img src="/images/Books.png" alt="" class="h-40 object-cover">
            </div>
            <div class="flex flex-col items-center justify-center text-center text-hitam py-4 px-4">
              <h1 class="font-extrabold text-2xl pb-2">Kurikulum Terpersonalisasi</h1>
              <p class="font-medium">Menggunakan kurikulum yang disesuaikan dengan kebutuhan anak.</p>
            </div>
          </div>
        </div>
        <div class="carousel-mengapa">
          <div class="flex flex-col items-center justify-center">
            <div class="mx-auto w-full overflow-hidden py-2 flex justify-center">
              <img src="/images/Earth.png" alt="" class="h-40 object-cover">
            </div>
            <div class="flex flex-col items-center justify-center text-center text-hitam py-4 px-4">
              <h1 class="font-extrabold text-2xl pb-2">Diakui Dimana-mana</h1>
              <p class="font-medium">Semua ijazah dan sertifikat kompetensi lulusan Al Khoir diakui di semua sekolah dan perguruan tinggi.</p>
            </div>
          </div>
        </div>
        <div class="carousel-mengapa">
          <div class="flex flex-col items-center justify-center">
            <div class="mx-auto w-full overflow-hidden py-2 flex justify-center">
              <img src="/images/Discuss.png" alt="" class="h-40 object-cover">
            </div>
            <div class="flex flex-col items-center justify-center text-center text-hitam py-4 px-4">
              <h1 class="font-extrabold text-2xl pb-2">Memiliki Layanan Konsultasi</h1>
              <p class="font-medium">Anak ataupun orang tua dapat bercerita/konsultasi berbagai hal terkait permasalahannya.</p>
            </div>
          </div>
        </div>
        <div class="carousel-mengapa">
          <div class="flex flex-col items-center justify-center">
            <div class="mx-auto w-full overflow-hidden py-2 flex justify-center">
              <img src="/images/Cambridge.png" alt="" class="h-40 object-cover">
            </div>
            <div class="flex flex-col items-center justify-center text-center text-hitam py-4 px-4">
              <h1 class="font-extrabold text-2xl pb-2">Cambridge Exam</h1>
              <p class="font-medium">Memberikan anak-anak kesempatan emas untuk meraih prestasi internasional dan memperkuat landasan pendidikan global mereka.</p>
            </div>
          </div>
        </div>
        <div class="carousel-mengapa">
          <div class="flex flex-col items-center justify-center">
            <div class="mx-auto w-full overflow-hidden py-2 flex justify-center">
              <img src="/images/Stiffin.png" alt="" class="h-40 object-cover">
            </div>
            <div class="flex flex-col items-center justify-center text-center text-hitam py-4 px-4">
              <h1 class="font-extrabold text-2xl pb-2">STIFFIn Test</h1>
              <p class="font-medium">Temukan potensi terbaik anak anda untuk membantu mereka meraih prestasi dan kesuksesan dalam perjalanan pendidikannya.</p>
            </div>
          </div>
        </div>
      </div>
      <!-- Carousel Ends -->
    </div>
  </section>
<!-- Carousel ends -->

{{-- Program Starts --}}
<section id="Program" class="w-full bg-primary">
  <div class="md:container py-6 md:mx-auto mx-4">
    <div class="text-center mb-2">
      <h1 class="font-black text-3xl md:text-5xl text-white md:px-4 px-7 logo">Program</h1>
    </div>
    <div class="grid grid-cols-2 md:grid-cols-2 gap-4 gap-y-12 justify-items-center py-4">
      <div class="rounded-3xl bg-white flex-row md:h-[35vh] h-[45vh] md:w-1/2 w-full relative group transition duration-200 ease-in ring-2 ring-slate-200 shadow-md">
        <a href="/program#setaraSD">
          <div class="overflow-hidden p-4 md:h-3/4 h-3/5">
            <div class="bg-red-400 pt-3 rounded-xl h-full flex items-end group-hover:brightness-125 transition duration-200 ease-in-out justify-center overflow-hidden">
              <img src="/images/SD.png" alt="" class="h-40 md:h-full object-cover flex items-end">
            </div>
          </div>
          <div class="text-center flex items-center">
            <h1 class="font-medium text-lg px-3 text-hitam leading-tight">Pendidikan setara SD untuk peserta didik umur 7-13 tahun</h1>
          </div>
          <div class="absolute inset-x-0 -bottom-4 left-1/2 -translate-x-1/2 md:w-5/6 w-4/5 ">
            <div class="bg-red-400 rounded-xl px-4 group-hover:scale-105 transition duration-200 ease-in-out">
              <p class="text-white font-black text-center text-lg md:text-3xl p-1 logo tracking-wide">Setara SD</p>
            </div>
          </div>
        </a>
      </div>
      <div class="rounded-3xl bg-white flex-row md:h-[35vh] h-[45vh] md:w-1/2 w-full relative group transition duration-200 ease-in ring-2 ring-slate-200 shadow-md">
        <a href="/program#setaraSMP">
          <div class="overflow-hidden p-4 md:h-3/4 h-3/5">
            <div class="bg-sky-700 pt-3 rounded-xl h-full flex items-end group-hover:brightness-125 transition duration-200 ease-in-out justify-center overflow-hidden">
              <img src="/images/SMP.png" alt="" class="h-40 md:h-full object-cover flex items-end">
            </div>
          </div>
          <div class="text-center flex items-center">
            <h1 class="font-medium text-lg px-3 text-hitam leading-tight">Pendidikan setara SMP untuk peserta didik umur 13-16 tahun</h1>
          </div>
          <div class="absolute inset-x-0 -bottom-4 left-1/2 -translate-x-1/2 md:w-5/6 w-4/5 ">
            <div class="bg-sky-700 rounded-xl px-4 group-hover:scale-105 transition duration-200 ease-in-out">
              <p class="text-white font-black text-center text-lg md:text-3xl p-1 logo tracking-wide">Setara SMP</p>
            </div>
          </div>
        </a>
      </div>
      <div class="rounded-3xl bg-white flex-row md:h-[35vh] h-[45vh] md:w-1/2 w-full relative group transition duration-200 ease-in ring-2 ring-slate-200 shadow-md">
        <a href="/program#setaraSMA">
          <div class="overflow-hidden p-4 md:h-3/4 h-3/5">
            <div class="bg-slate-400 pt-3 rounded-xl h-full flex items-end group-hover:brightness-125 transition duration-200 ease-in-out justify-center overflow-hidden">
              <img src="/images/SMA.png" alt="" class="h-40 md:h-full object-cover flex items-end">
            </div>
          </div>
          <div class="text-center flex items-center">
            <h1 class="font-medium text-lg px-3 text-hitam leading-tight">Pendidikan setara SMA untuk peserta didik umur 15-18 tahun</h1>
          </div>
          <div class="absolute inset-x-0 -bottom-4 left-1/2 -translate-x-1/2 md:w-5/6 w-4/5 ">
            <div class="bg-slate-400 rounded-xl px-4 group-hover:scale-105 transition duration-200 ease-in-out">
              <p class="text-white font-black text-center text-lg md:text-3xl p-1 logo tracking-wide">Setara SMA</p>
            </div>
          </div>
        </a>
      </div>
      <div class="rounded-3xl bg-white flex-row md:h-[35vh] h-[45vh] md:w-1/2 w-full relative group transition duration-200 ease-in ring-2 ring-slate-200 shadow-md">
        <a href="/program#eksklusif">
          <div class="overflow-hidden p-4 md:h-3/4 h-3/5">
            <div class="bg-fuchsia-800 pt-3 rounded-xl h-full flex items-end group-hover:brightness-125 transition duration-200 ease-in-out justify-center overflow-hidden">
              <img src="/images/eksklusif.png" alt="" class="h-40 md:h-full object-cover flex items-end">
            </div>
          </div>
          <div class="text-center flex items-center">
            <h1 class="font-medium text-lg px-3 text-hitam leading-tight">Pendidikan les bimbingan belajar untuk memperdalam mata pelajaran</h1>
          </div>
          <div class="absolute inset-x-0 -bottom-4 left-1/2 -translate-x-1/2 md:w-5/6 w-4/5 ">
            <div class="bg-fuchsia-800 rounded-xl px-4 group-hover:scale-105 transition duration-200 ease-in-out">
              <p class="text-white font-black text-center text-lg md:text-3xl p-1 logo tracking-wide">Eksklusif</p>
            </div>
          </div>
        </a>
      </div>
    </div>
  </div>
</section>
{{-- Program Ends --}}

{{-- Pilihan Start --}}
<section id="Pilihan" class="w-full py-8 bg-white h-auto shadow-xl">
  <div class="text-center pb-4 md:pb-12">
    <h1 class="font-black text-3xl md:text-5xl text-primary md:px-4 px-7 logo">Sistem Kelas</h1>
  </div>
  <div class="grid grid-cols-1 md:grid-cols-3 gap-y-8 h-auto justify-items-center md:container md:px-0 px-2">
    <div data-aos="fade-up" data-aos-delay="100" class="flex flex-col justify-start items-center">
      <div class="overflow-hidden mx-auto">
        <img src="/images/Individu.png" alt="" class="object-contain h-32">
      </div>
      <div class="text-center pt-3 px-8">
        <h1 class="font-extrabold text-2xl pb-2">Kelas Individu</h1>
        <p class="font-medium">Sistem kelas untuk satu peserta didik pada setiap kegiatan belajar.</p>
      </div>
    </div>
    <div data-aos="fade-up" data-aos-delay="100" class="flex flex-col justify-start items-center">
      <div class="overflow-hidden mx-auto">
        <img src="/images/Group.png" alt="" class="object-contain h-32">
      </div>
      <div class="text-center pt-3 px-8">
        <h1 class="font-extrabold text-2xl pb-2">Kelas Komunitas Besar</h1>
        <p class="font-medium">Sistem kelas untuk 6 sampai dengan 10 peserta didik dalam satu kelompok belajar.</p>
      </div>
    </div>
    <div data-aos="fade-up" data-aos-delay="100" class="flex flex-col justify-start items-center">
      <div class="overflow-hidden mx-auto">
        <img src="/images/Distance.png" alt="" class="object-contain h-32">
      </div>
      <div class="text-center pt-3 px-8">
        <h1 class="font-extrabold text-2xl pb-2">Distance Learning Class</h1>
        <p class="font-medium">Sistem kelas jarak jauh khusus untuk peserta didik yang tidak berdomisili di daerah diselenggarakannya Al Khoir. Pembelajaran melalui media belajar berupa aplikasi Zoom/Google Meet/Skype.</p>
      </div>
    </div>

  </div>
</section>
{{-- Pilihan Ends --}}

{{-- Blog Section Start --}}
  <section id="Blog" class="pt-8 pb-4 w-full bg-secondary">
    <div class="flex justify-center md:container">
      <div class="text-center mb-7">
        <h1 class="font-black text-3xl md:text-5xl text-primary md:px-4 px-7 logo">Aktivitas</h1>
        <h3 class="text-hitam/80 tracking-wide text-md md:text-lg  md:px-14 px-2">Beragam kegiatan belajar yang seru dan berkesan untuk menginspirasi dan memperkaya pengalaman belajar murid.<h3>
      </div>
    </div>

    @if ($posts->count())
      <div class="md:container md:p-0 md:mx-auto mx-2  h-auto md:h-[40vh] relative" data-aos="fade-up" data-aos-anchor-placement="center-bottom">
        <div class="absolute -top-2 -right-2">
          <p class="py-1 px-2 bg-detail rounded-full animate-pulse text-base font-semibold  text-white">Baru!</p>
        </div>
        <a href="/posts/{{ $posts[0]->slug }}">
          <div class="grid md:grid-cols-2 grid-rows-2 md:grid-rows-none bg-white rounded-3xl ring-2 ring-slate-200 shadow-md group">
            <div class="w-full md:h-[400px] h-[300px] overflow-hidden rounded-3xl md:rounded-r-none rounded-b-none md:rounded-bl-3xl">
              @if($posts[0]->images)
                <img src="{{ asset('storage/' . $posts[0]->images[0]) }}" alt="{{ $posts[0]->category->name }}" class="h-full w-[90vh] object-cover group-hover:scale-105 transition duration-200 ease-in-out">
              @else           
                <img class="h-full w-[90vh] object-cover group-hover:scale-105 transition duration-200 ease-in-out" src="https://source.unsplash.com/800x600/?{{ $posts[0]->category->name }}" alt="{{ $posts[0]->title }}">
              @endif
            </div>
            <div class="md:py-8 py-3 px-3 md:px-8  relative">
              <div>
                <h1 class="md:text-4xl text-3xl break-all line-clamp-4 font-semibold logo text-hitam group-hover:text-primary/50 transition duration-200 ease-in-out">{{ $posts[0]->title }}</h1>
                <h3 class="font-light leading-relaxed break-all line-clamp-4 md:line-clamp-6 text-hitam">{{ Str::limit($posts[0]->excerpt, 500) }}</h3>
              </div>
              <div class="absolute bottom-3 md:bottom-8 flex flex-row">
                <div>
                  <a href="/blog?category={{ $posts[0]->category->slug }}">
                    <h3 class="text-base font-normal text-primary hover:text-primary/50 transition duration-200 ease-in-out">{{ $posts[0]->category->name }} </h3>
                  </a>
                </div>
                <div class="px-0.5">
                <h3 class="text-base font-normal text-hitam"><span class="text-hitam/40">|</span> {{ $posts[0]->created_at->diffForHumans() }}</h3>
                </div>
              </div>
            </div>
          </div>
        </a>
      </div>


      <div class="grid md:grid-cols-4 grid-cols-1 gap-3 my-3 md:container md:p-0 md:mx-auto mx-2">
        @foreach ($posts->skip(1)->slice(0,3) as $post)
          <div class="md:grid-cols-1 grid-cols-2 grid content-start h-[25vh]  md:h-auto md:pb-9 bg-white rounded-3xl ring-2 ring-slate-200 shadow-md overflow-hidden relative group"  data-aos="fade-down" data-aos-anchor-placement="center-bottom">
              <div class="md:h-[20vh] h-[25vh]">
                @if($post->images)
                <a href="/posts/{{ $post->slug }}">
                    <img src="{{ asset('storage/' . $post->images[0]) }}" alt="{{ $post->category->name }}" class="h-full w-[400px] object-cover group-hover:scale-105 transition duration-200 ease-in-out">
                </a>
                @else           
                <a href="/posts/{{ $post->slug }}">
                    <img class="h-full w-[400px] object-cover group-hover:scale-105 transition duration-200 ease-in-out" src="https://source.unsplash.com/500x400/?{{ $post->category->name }}" alt="{{ $post->title }}">
                </a>
                @endif
              </div>
              <div class="pb-2 px-4 py-2 relative">
                  <h5 class="logo pb-0.5 md:text-xl text-lg font-semibold tracking-tight text-hitam break-all line-clamp-4 group-hover:text-primary/50 transition duration-200 ease-in-out"><a href="/posts/{{ $post->slug }}">{{ $post->title }}  </a></h5>
                                
                  <p class="md:block hidden font-light text-sm leading-relaxed break-all line-clamp-4 md:line-clamp-6 text-hitam">{{ Str::limit($post->excerpt, 100) }}</p>
                  <div class="flex absolute bottom-2 left-4 md:hidden flex-row">
                    <div>
                      <a href="/blog?category={{ $posts[0]->category->slug }}">
                        <h3 class="text-sm font-normal text-primary hover:text-primary/50 transition duration-200 ease-in-out">{{ $posts[0]->category->name }} </h3>
                      </a>
                    </div>
                    <div class="px-0.5">
                    <h3 class="text-sm font-normal text-hitam"><span class="text-hitam/40">|</span> {{ $posts[0]->created_at->diffForHumans() }}</h3>
                    </div>
                  </div>
              </div>
              <div class="hidden absolute bottom-4 left-4 md:flex flex-row">
                <div>
                  <a href="/blog?category={{ $posts[0]->category->slug }}">
                    <h3 class="text-sm font-normal text-primary hover:text-primary/50 transition duration-200 ease-in-out">{{ $posts[0]->category->name }} </h3>
                  </a>
                </div>
                <div class="px-0.5">
                <h3 class="text-sm font-normal text-hitam"><span class="text-hitam/40">|</span> {{ $posts[0]->created_at->diffForHumans() }}</h3>
                </div>
              </div>
          </div>
        @endforeach
          <a href="/aktivitas" class="h-[25vh] md:h-auto rounded-3xl  shadow-md overflow-hidden relative group"  data-aos="fade-down" data-aos-anchor-placement="center-bottom">
            <div class="w-full h-full">
              <img src="/images/Header5.jpg" alt="" class="object-none h-full w-full group-hover:scale-105 transition ease-in-out duration-200">
            </div>
            <div class="absolute top-0 flex h-full w-full items-center justify-center  bg-detail/80 group-hover:bg-white/70 text-white font-bold tracking-wide text-lg  group-hover:text-primary transition ease-in-out duration-200">
              <div>
                <h1 class="text-xl text-center font-bold tracking-wider ">Lihat Aktivitas Lainnya</h1>
                <div class="absolute bottom-5 right-5">
                  <p class="font-black text-lg">. . .</p>
                </div>
              </div>
            </div>
          </a>
        </div>
    @else
      <div class="py-16">
      <p class="text-center text-xl px-4 text-hitam/80">Tidak ada artikel tersebut, coba cari di Kategori lainnya.</p>
      </div>
    @endif


  </section>
{{-- Blog Section Ends --}}

<!-- Pertanyaan Section Start -->
  <section id="Pertanyaan" class="py-4 w-full bg-secondary">
    <div class="bg-white md:container  py-8 rounded-3xl ring-2 ring-slate-200 shadow-md md:mx-auto mx-2">
      <!-- Accordion Start -->
      <div class="">
        <div>
          <h1 class="font-black  text-center text-3xl md:text-5xl text-primary md:px-4 px-7 logo">FAQ</h1>
          <h1 class="text-center text-md md:text-lg   text-hitam/80 tracking-wide md:px-4 px-7">Pertanyaan yang sering ditanyakan</h1>
        </div>
      </div>
      <!-- List Start -->
      <div class="md:px-12 px-4 pt-4">
        <div class="flex justify-center items-start my-2">
          <div class="w-full my-1">
            <ul class="flex flex-col gap-y-3">
              <li data-aos-delay="100" data-aos="zoom-out-down" class=" rounded-3xl py-1 px-4 shadow-md white bg-button hover:bg-button/50 focus:bg-button/20 text-white transition ease-in-out duration-200" x-data="accordion(1)">
                <h2 @click="handleClick()" class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer">
                  <span class="font-medium leading-relaxed tracking-wider">Apakah Al Khoir merupakan sekolah sunnah?</span>
                  <svg :class="handleRotate()" class="fill-current text-white h-6 w-6 transform transition-transform duration-500" viewBox="0 0 20 20">
                    <path
                      d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"
                    ></path>
                  </svg>
                </h2>
                <div x-ref="tab" :style="handleToggle()" class="border-l-4 border-buttonh overflow-hidden max-h-0 duration-500 transition-all rounded-2xl bg-white">
                  <p class="p-3 text-hitam font-medium leading-relaxed">
                    InsyaAllah, kami sekolah yang berlandaskan sunnah Rasulullah Sallallhu 'alaihi wasallam karena dalam beragama islam kita diwajibkan mengikuti Firman Allaah yaitu Al Quran dan mengikuti hadits Rasulullah Sallallahu
                    'alaihi wasallam dalam setiap lini kehidupan, termasuk dalam dunia pendidikan. Al Khoir Islamic School adalah sekolah yang berlandaskan Al Quran dan Sunnah.
                  </p>
                </div>
              </li>
              <li data-aos-delay="100" data-aos="zoom-out-down" class=" rounded-3xl py-1 px-4 shadow-md white bg-button hover:bg-button/50 focus:bg-button/20 text-white transition ease-in-out duration-200" x-data="accordion(2)">
                <h2 @click="handleClick()" class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer">
                  <span class="font-medium leading-relaxed tracking-wider">Apa manhaj dari Al Khoir Islamic School?</span>
                  <svg :class="handleRotate()" class="fill-current text-white h-6 w-6 transform transition-transform duration-500" viewBox="0 0 20 20">
                    <path
                      d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"
                    ></path>
                  </svg>
                </h2>
                <div x-ref="tab" :style="handleToggle()" class="border-l-4 border-buttonh overflow-hidden max-h-0 duration-500 transition-all rounded-2xl bg-white">
                  <p class="p-3 text-hitam font-medium leading-relaxed">
                    Sebelumnya, manhaj menurut bahasa Arab artinya jalan yang jelas dan terang. Sedangkan manhaj menurut istilah syar'i adalah sebuah proses ketika mencari ilmu pelajaran harus dengan kaidah-kaidah dan ketentuannya melalui
                    penulusuran ilmu Islam yang alur riwayatnya harus bersambung sampai kepada Nabi Muhammad Sallallahu 'alaihi wasallam. Kami berusaha semampu kami untuk selalu mengikuti jalan yang ditempuh oleh para salaf, yaitu orang
                    terdahulu, yakni para sahabat Rasulullah Sallallahu 'alaihi wasallam. Al Khoir Islamic School adalah sekolah yang ber-manhaj salaf.
                  </p>
                </div>
              </li>
              <li data-aos-delay="100" data-aos="zoom-out-down" class=" rounded-3xl py-1 px-4 shadow-md white bg-button hover:bg-button/50 focus:bg-button/20 text-white transition ease-in-out duration-200" x-data="accordion(3)">
                <h2 @click="handleClick()" class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer">
                  <span class="font-medium leading-relaxed tracking-wider">Siapa Ustadz pembimbing/guru di Al Khoir Islamic School?</span>
                  <svg :class="handleRotate()" class="fill-current text-white h-6 w-6 transform transition-transform duration-500" viewBox="0 0 20 20">
                    <path
                      d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"
                    ></path>
                  </svg>
                </h2>
                <div x-ref="tab" :style="handleToggle()" class="border-l-4 border-buttonh overflow-hidden max-h-0 duration-500 transition-all rounded-2xl bg-white">
                  <p class="p-3 text-hitam font-medium leading-relaxed">Ustadz Pembimbing di Al Khoir adalah Ustadz Habibullah Wafiq Lc.</p>
                </div>
              </li>
              <li data-aos-delay="200" data-aos="zoom-out-down" class=" rounded-3xl py-1 px-4 shadow-md white bg-button hover:bg-button/50 focus:bg-button/20 text-white transition ease-in-out duration-200" x-data="accordion(4)">
                <h2 @click="handleClick()" class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer">
                  <span class="font-medium leading-relaxed tracking-wider">Berapa persen Pelajaran Diniyah di Al Khoir Islamic School?</span>
                  <svg :class="handleRotate()" class="fill-current text-white h-6 w-6 transform transition-transform duration-500" viewBox="0 0 20 20">
                    <path
                      d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"
                    ></path>
                  </svg>
                </h2>
                <div x-ref="tab" :style="handleToggle()" class="border-l-4 border-buttonh overflow-hidden max-h-0 duration-500 transition-all rounded-2xl bg-white">
                  <p class="p-3 text-hitam font-medium leading-relaxed">
                    InsyaAllah pelajaran Agama Islam (Al Qur'an, Hadits, Aqidah, Akhlak, Fiqih, Sejarah Kebudayaan Islam dan Bahasa Arab) kurang lebih 75% dari seluruh pelajaran yang diberikan dan 25% sisanya adalah pelajaran umum yang
                    memang juga penting untuk diajarkan dan diberikan kepada siswa-siswi Al Khoir Islamic School sesuai peraturan dari Pemerintah Indonesia.
                  </p>
                </div>
              </li>
              <li data-aos-delay="300" data-aos="zoom-out-down" class=" rounded-3xl py-1 px-4 shadow-md white bg-button hover:bg-button/50 focus:bg-button/20 text-white transition ease-in-out duration-200" x-data="accordion(5)">
                <h2 @click="handleClick()" class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer">
                  <span class="font-medium leading-relaxed tracking-wider">Apakah kelas akhwat dan ikhwan terpisah?</span>
                  <svg :class="handleRotate()" class="fill-current text-white h-6 w-6 transform transition-transform duration-500" viewBox="0 0 20 20">
                    <path
                      d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"
                    ></path>
                  </svg>
                </h2>
                <div x-ref="tab" :style="handleToggle()" class="border-l-4 border-buttonh overflow-hidden max-h-0 duration-500 transition-all rounded-2xl bg-white">
                  <p class="p-3 text-hitam font-medium leading-relaxed">
                    Untuk siswa-siswi kelas Sekolah Dasar yang belum mencapai akil baligh kelasnya masih tergabung, sedangkan untuk kelas Menengah Pertama (SMP), Menengah Atas (SMA) atau bahkan Sekolah Dasar (SD) yang sudah mencapai akil
                    baligh sudah dipisah dan dilakukan sistem ganjil genap. Untuk keterangan lebih lengkap bisa langsungn menghubungi tim administrasi/informasi Al Khoir Islamiic School.
                  </p>
                </div>
              </li>
              <li data-aos-delay="400" data-aos="zoom-out-down" class=" rounded-3xl py-1 px-4 shadow-md white bg-button hover:bg-button/50 focus:bg-button/20 text-white transition ease-in-out duration-200" x-data="accordion(6)">
                <h2 @click="handleClick()" class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer">
                  <span class="font-medium leading-relaxed tracking-wider">Bagaimana target hafalan Al Quran dan Hadits di Al Khoir Islamic School?</span>
                  <svg :class="handleRotate()" class="fill-current text-white h-6 w-6 transform transition-transform duration-500" viewBox="0 0 20 20">
                    <path
                      d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"
                    ></path>
                  </svg>
                </h2>
                <div x-ref="tab" :style="handleToggle()" class="border-l-4 border-buttonh overflow-hidden max-h-0 duration-500 transition-all rounded-2xl bg-white">
                  <p class="p-3 text-hitam font-medium leading-relaxed">
                    Untuk target hafalan masing-masing orang/siswa/siswi berbeda-beda karena proses menghafal setiap orang berbeda-beda juga, maka dari itu target hafalan di Al Khoir mengikuti kemampuan anak didik/siswa/siswi yang
                    bersangkutan dengan pemantauan dan panduan serta motivasi dari guru-guru Al Khoir Islamic School.
                  </p>
                </div>
              </li>
              <li data-aos-delay="500" data-aos="zoom-out-down" class=" rounded-3xl py-1 px-4 shadow-md white bg-button hover:bg-button/50 focus:bg-button/20 text-white transition ease-in-out duration-200" x-data="accordion(7)">
                <h2 @click="handleClick()" class="flex flex-row justify-between items-center font-semibold p-3 cursor-pointer">
                  <span class="font-medium leading-relaxed tracking-wider">Berapa biaya pendaftaran dan biaya lainnya di Al Khoir?</span>
                  <svg :class="handleRotate()" class="fill-current text-white h-6 w-6 transform transition-transform duration-500" viewBox="0 0 20 20">
                    <path
                      d="M13.962,8.885l-3.736,3.739c-0.086,0.086-0.201,0.13-0.314,0.13S9.686,12.71,9.6,12.624l-3.562-3.56C5.863,8.892,5.863,8.611,6.036,8.438c0.175-0.173,0.454-0.173,0.626,0l3.25,3.247l3.426-3.424c0.173-0.172,0.451-0.172,0.624,0C14.137,8.434,14.137,8.712,13.962,8.885 M18.406,10c0,4.644-3.763,8.406-8.406,8.406S1.594,14.644,1.594,10S5.356,1.594,10,1.594S18.406,5.356,18.406,10 M17.521,10c0-4.148-3.373-7.521-7.521-7.521c-4.148,0-7.521,3.374-7.521,7.521c0,4.147,3.374,7.521,7.521,7.521C14.148,17.521,17.521,14.147,17.521,10"
                    ></path>
                  </svg>
                </h2>
                <div x-ref="tab" :style="handleToggle()" class="border-l-4 border-buttonh overflow-hidden max-h-0 duration-500 transition-all rounded-2xl bg-white">
                  <p class="p-3 text-hitam font-medium leading-relaxed">Silahkan klik tombol "HUBUNGI KAMI" di bawah ini untuk penjelasan lebih jelas dan lengkap. Jazakumullahu khairan.</p>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <script>
        document.addEventListener("alpine:init", () => {
          Alpine.store("accordion", {
            tab: 0,
          });

          Alpine.data("accordion", (idx) => ({
            init() {
              this.idx = idx;
            },
            idx: -1,
            handleClick() {
              this.$store.accordion.tab = this.$store.accordion.tab === this.idx ? 0 : this.idx;
            },
            handleRotate() {
              return this.$store.accordion.tab === this.idx ? "rotate-180" : "";
            },
            handleToggle() {
              return this.$store.accordion.tab === this.idx ? `max-height: ${this.$refs.tab.scrollHeight}px` : "";
            },
          }));
        });
      </script>
      <!-- List Ends -->
      <div class="flex flex-row items-center justify-center md:justify-start px-12 py-4">
        <div>
          <a target="_blank" href="https://wa.me/6283136152521?text=Assalamu%27alaikum%20warahmatullahi%20wabarakatuh,%20saya%20mau%20nanya%20tentang%20sekolah%20Al%20Khoir">
            <button class="flex mx-auto text-center bg-buttonh hover:bg-buttonh/50 hover:text-white transition ease-in-out duration-200 px-4 md:px-8 py-2  mb-1 rounded-full text-white font-bold  tracking-wide">
              Hubungi Kami
            </button>
          </a>
        </div>
      </div>
    </div>
    <!-- Accordion End  -->
    
  </section>
<!-- Pertanyaan Section Ends -->


    
@endsection