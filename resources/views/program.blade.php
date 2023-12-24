@extends('layouts.main')
@section('container')

<section class="bg-black">
    <div class="relative h-[85vh] overflow-hidden">
        <div class="w-full h-full absolute bg-gradient-to-t from-black to-transparent z-[11]"></div>
        <div class="duration-700 ease-in-out">
          <img src="/images/Header4.jpg" class="carouselHeroImg brightness-[.45] absolute block lg:w-full max-w-none h-max -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="..." />
          <div class="absolute z-[12] flex justify-center -translate-x-1/2 -translate-y-1/2 md:top-[30vh]  top-[35vh]  md:left-1/3 left-1/2 w-full md:mx-8 md:w-2/3 ">
            <div class="carouselText flex flex-col text-center md:text-left justify-center md:items-start items-center">
              <h3 class="text-white md:text-lg text-base font-bold animate__animated animate__fadeInDown delay-4 py-0.5  tracking-wider">Islami dan Prestasi dalam satu Paket</h3>
              <h3 class="text-white text-2xl md:text-5xl font-black animate__animated animate__fadeInLeft delay-3 mb-8 tracking-wide uppercase">
                Program Unggulan Laporin
              </h3>
              <h1 class="animate__animated animate__fadeInUp delay-3"><a target="_blank" href="https://wa.me/6283136152521?text=Assalamu%27alaikum%20warahmatullahi%20wabarakatuh,%20saya%20mau%20nanya%20tentang%20sekolah%20Al%20Khoir" class="bg-buttonh hover:bg-buttonh/50 hover:text-white transition ease-in-out duration-200 px-4 md:px-8 py-2  mb-1 rounded-full text-white font-bold uppercase tracking-wide">Daftar Sekarang</a></h1>
            </div>
          </div>
        </div>
      </div>
    <div class="static">
        <section class="rounded-t-[56px] bg-white relative py-8 -mt-12 z-20 animate fade delay-6">
            <div id="setaraSD" class="pb-16 pt-4">
                <div class=" flex justify-center mx-auto rounded-2xl w-[70vw] px-4 py-2 bg-primary ring ring-offset-2 ring-primary">
                    <h1 class="text-white font-black text-2xl tracking-wider">Program Setara SD</h1>
                </div>
                <h1 class="text-center font-black text-hitam text-xl md:text-3xl uppercase pt-4 pb-2">Mata pelajaran yang diajarkan</h1>
                <div id="carousel" class="pb-6 pt-2 grid grid-cols-2 md:container p-2">
                    <div class="p-2">
                        <h1 class="text-center text-primary font-extrabold text-2xl uppercase">Wajib</h1>
                        <div class="flex flex-col items-center justify-center text-center text-hitam text-base md:text-lg font-semibold gap-y-1">
                            <p>Bahasa Indonesia</p>
                            <p>Bahasa Inggris</p>
                            <p>Bahasa Arab</p>
                            <p>Matematika</p>
                            <p>Pendidikan Pancasila dan Kewarganegaraan</p>
                            <p>Ilmu Pengetahuan Alam</p>
                            <p>Ilmu Pengetahuan Sosial</p>
                        </div>
                    </div>
                    <div class="border-l-2 border-primary p-2">
                        <h1 class="text-center text-primary font-extrabold text-2xl uppercase">Klasikal</h1>
                        <div class="flex flex-col items-center justify-center text-center text-hitam text-base md:text-lg  font-semibold gap-y-1">
                            <p>Pendidikan Agama Islam <br>(Fiqh, Bahasa Arab, Tahsin, Tahfizh, Aqidah, Hadist dll)</p>
                            <p>Seni Budaya dan Prakarya</p>
                            <p>Pendidikan Jasmani Olah Raga Kesehatan</p>
                            <p>Cooking Class</p>
                        </div>
                    </div>
                </div>
                <div id="fasilitas" class="py-6 bg-primary/10">
                    <h1 class="text-center font-black text-hitam text-3xl pb-4 uppercase">Fasilitas</h1>
                    <div class="flex flex-wrap gap-y-6 px-2 justify-around md:container md:px-0">
                        <div class="flex flex-col w-1/3 break-words items-center justify-start overflow-hidden px-1">
                            <div class="overflow-hidden">
                                <img src="/images/Guru.png" alt="" class="object-contain w-24 h-24">

                            </div>
                            <div>
                                <h1 class="text-center text-hitam font-semibold tracking-wide text-sm md:text-lg pt-2">Guru yang professional dan ramah</h1>
                            </div>

                        </div>
                        <div class="flex flex-col w-1/3 break-words items-center justify-start overflow-hidden px-1">
                            <div class="overflow-hidden">
                                <img src="/images/Books.png" alt="" class="object-contain w-24 h-24">

                            </div>
                            <div>
                                <h1 class="text-center text-hitam font-semibold tracking-wide text-sm md:text-lg pt-2">Modul</h1>
                            </div>

                        </div>
                        <div class="flex flex-col w-1/3 break-words items-center justify-start overflow-hidden px-1">
                            <div class="overflow-hidden">
                                <img src="/images/Metode.png" alt="" class="object-contain w-24 h-24">

                            </div>
                            <div>
                                <h1 class="text-center text-hitam font-semibold tracking-wide text-sm md:text-lg pt-2">Metode Belajar yang menyenangkan
                                </h1>
                            </div>

                        </div>
                        <div class="flex flex-col w-1/3 break-words items-center justify-start overflow-hidden px-1">
                            <div class="overflow-hidden">
                                <img src="/images/Laporan.png" alt="" class="object-contain w-24 h-24">

                            </div>
                            <div>
                                <h1 class="text-center text-hitam font-semibold tracking-wide text-sm md:text-lg pt-2">Laporan hasil belajar per mata pelajaran

                                </h1>
                            </div>

                        </div>
                        <div class="flex flex-col w-1/3 break-words items-center justify-start overflow-hidden px-1">
                            <div class="overflow-hidden">
                                <img src="/images/Outing.png" alt="" class="object-contain w-24 h-24">

                            </div>
                            <div>
                                <h1 class="text-center text-hitam font-semibold tracking-wide text-sm md:text-lg pt-2">Outbound/Outing Class</h1>
                            </div>

                        </div>
                        <div class="flex flex-col w-1/3 break-words items-center justify-start overflow-hidden px-1">
                            <div class="overflow-hidden">
                                <img src="/images/Latihan.png" alt="" class="object-contain w-24 h-24">

                            </div>
                            <div>
                                <h1 class="text-center text-hitam font-semibold tracking-wide text-sm md:text-lg pt-2">Latihan Soal</h1>
                            </div>

                        </div>
                        <div class="flex flex-col w-1/3 break-words items-center justify-start overflow-hidden px-1">
                            <div class="overflow-hidden">
                                <img src="/images/Pembelajaran.png" alt="" class="object-contain w-24 h-24">

                            </div>
                            <div>
                                <h1 class="text-center text-hitam font-semibold tracking-wide text-sm md:text-lg pt-2">Pembelajaran yang berorientasi penyelesaian materi
                                </h1>
                            </div>

                        </div>

                    </div>
                </div>
                <div class="md:container md:m-auto m-2 text-hitam pt-4 font-medium">

                    <p class="pb-2">Program setara SD di HS Laporin merupakan program pendidikan dasar yang berfokus pada pengembangan karakter anak, etika dan keterampilan. Nilai-nilai ke Islaman menjadi dasar pengembangan pendidikan karakter dan etika yang ingin dicapai dalam program setara SD.</p>
                    <p class="pb-2">Memiliki keterampilan hidup sehari-hari yang dikombinasikan dengan keterampilan abad-21 menjadi salah satu output yang diharapkan. Lebih lanjut, keseimbangan area kognitif khususnya literasi membaca
                        dan numerasi juga menjadi fokus di dalam pengembangan peserta didik SD. 
                        Program setara SD di HS Laporin  terbagi ke dalam dua tahapan  besar yang disebut tingkat kompetensi I dan II. Tingkat kompetensi I ditujukan untuk anak-anak kelas 1 s.d 3, sementara tingkat II diperuntukan anak-anak kelas 4 s.d 6 SD. Pemilihan kelas juga dapat disesuaikan dengan kebutuhan anak-anak, terdapat pilihan program secara online dan offline yang dapat diambil secara individu, dan komunitas. Selain itu pelayanan kelas mandiri juga disediakan melalui kesepakatan yang diambil orang tua dan lembaga. </p>
                    <p class="pb-2">Anak-anak Jenjang SD di Laporin  juga diberikan beberapa kegiatan yang meliputi Pendidikan vokasi, kegiatan komunitas klasikal, kelas inspirasi, field trip, outbond dan juga kegiatan pengembangan pemberdayaan lainnya. Kegiatan ini melatih anak-anak untuk memiliki keahlian dan keterampilan yang dibutuhkan di abad-21. </p>
                    <h2 class="py-2 font-extrabold text-xl tracking-wide">Kurikulum yang digunakan</h2>
                    <p>Kurikulum yang digunakan adalah kurikulum 2013 pendidikan kesetaraan yang disesuaikan dengan kebutuhan peserta didik dan karakteristik daerah. Adapun output yang diharapkan yaitu;
                        <ul class="list-disc font-semibold px-6">
                            <li>Memiliki sikap yang terpuji (excellent attitudes)</li>
                            <li>Memiliki kecakapan hidup yang aplikatif (proper life skills)</li>
                            <li>Memiliki ilmu pengetahuan yang baik (good knowledge).</li>
                        </ul>
                        <h2 class="py-2 font-extrabold text-xl tracking-wide">Keunggulan</h2>
                        <p>Keungulan lain program setara SD di HS Laporin yaitu adanya pendekatan homeschooling yang dilakukan melalui pendekatan psikologi dan akademik terarah. Pendekatan ini memberikan kesempatan pada anak untuk belajar melalui suasana homy dan nyaman seperti di rumah. Layanan di HS Laporin sangatlah personal disesuaikan dengan kebutuhan, bakat dan minat anak. Layanan ini juga memberikan kesempatan kepada orang tua untuk terlibat lebih banyak pada program pendidikan putra-putrinya. Selain itu, pendekatan ini juga digunakan untuk mengembangkan kreativitas, keaktifan dan kemandirian anak.</p>
                        <h2 class="py-2 font-extrabold text-xl tracking-wide">Karakteristik</h2>
                        <ul class="list-disc px-6">
                            <li>Fun learning atau belajar sambal bermain merupakan karakteristik untuk peserta didik SD tingkatan satu setara kelas 1, 2 dan 3. Di tingkatan ini, peserta didik akan diperkuat mengenai literasi membaca dan numerasi dengan target pembentukan karakter dan etika yang lebih dominan diberikan di dalam kelas.</li>
                            <li>Lebih lanjut, peserta didik di tingkat II setara kelas 4, 5, dan 6 diberikan pendekatan belajar creative, innovative and entrepreneurship (CIE) yang bertujuan membentuk keseimbangan area kognisi, pembentukan karakter dan keterampilan.</li>
                        </ul>
                    </p>

                </div>

            </div>
        </section>
        <section  class="rounded-t-[56px] bg-secondary   relative py-8 -mt-12 z-20" data-aos="fade-up">
            <div id="setaraSMP" class="pb-16 pt-4">
                <div class=" flex justify-center mx-auto rounded-2xl w-[70vw] px-4 py-2 bg-primary ring ring-offset-2 ring-primary">
                    <h1  class="text-white font-black text-2xl tracking-wider">Program Setara SMP</h1>
                </div>
                <h1 class="text-center font-black text-hitam text-xl md:text-3xl uppercase pt-4 pb-2">Mata pelajaran yang diajarkan</h1>
                <div id="carousel" class="pb-6 pt-2 grid grid-cols-2 md:container p-2">
                    <div class="p-2">
                        <h1 class="text-center text-primary font-extrabold text-2xl uppercase">Wajib</h1>
                        <div class="flex flex-col items-center justify-center text-center text-hitam text-base md:text-lg font-semibold gap-y-1">
                            <p>Bahasa Indonesia</p>
                            <p>Bahasa Inggris</p>
                            <p>Bahasa Arab</p>
                            <p>Matematika</p>
                            <p>Pendidikan Pancasila dan Kewarganegaraan</p>
                            <p>Ilmu Pengetahuan Alam</p>
                            <p>Ilmu Pengetahuan Sosial</p>
                        </div>
                    </div>
                    <div class="border-l-2 border-primary p-2">
                        <h1 class="text-center text-primary font-extrabold text-2xl uppercase">Klasikal</h1>
                        <div class="flex flex-col items-center justify-center text-center text-hitam text-base md:text-lg  font-semibold gap-y-1">
                            <p>Pendidikan Agama Islam <br>(Fiqh, Bahasa Arab, Tahsin, Tahfizh, Aqidah, Hadist dll)</p>
                            <p>Seni Budaya dan Prakarya</p>
                            <p>Pendidikan Jasmani Olah Raga Kesehatan</p>
                            <p>Cooking Class</p>
                        </div>
                    </div>
                </div>
                <div id="fasilitas" class="py-6 bg-primary/10">
                    <h1 class="text-center font-black text-hitam text-3xl pb-4 uppercase">Fasilitas</h1>
                    <div class="flex flex-wrap gap-y-6 px-2 justify-around md:container md:px-0">
                        <div class="flex flex-col w-1/3 break-words items-center justify-start overflow-hidden px-1">
                            <div class="overflow-hidden">
                                <img src="/images/Guru.png" alt="" class="object-contain w-24 h-24">

                            </div>
                            <div>
                                <h1 class="text-center text-hitam font-semibold tracking-wide text-sm md:text-lg pt-2">Guru yang professional dan ramah</h1>
                            </div>

                        </div>
                        <div class="flex flex-col w-1/3 break-words items-center justify-start overflow-hidden px-1">
                            <div class="overflow-hidden">
                                <img src="/images/Books.png" alt="" class="object-contain w-24 h-24">

                            </div>
                            <div>
                                <h1 class="text-center text-hitam font-semibold tracking-wide text-sm md:text-lg pt-2">Modul</h1>
                            </div>

                        </div>
                        <div class="flex flex-col w-1/3 break-words items-center justify-start overflow-hidden px-1">
                            <div class="overflow-hidden">
                                <img src="/images/Metode.png" alt="" class="object-contain w-24 h-24">

                            </div>
                            <div>
                                <h1 class="text-center text-hitam font-semibold tracking-wide text-sm md:text-lg pt-2">Metode Belajar yang menyenangkan
                                </h1>
                            </div>

                        </div>
                        <div class="flex flex-col w-1/3 break-words items-center justify-start overflow-hidden px-1">
                            <div class="overflow-hidden">
                                <img src="/images/Laporan.png" alt="" class="object-contain w-24 h-24">

                            </div>
                            <div>
                                <h1 class="text-center text-hitam font-semibold tracking-wide text-sm md:text-lg pt-2">Laporan hasil belajar per mata pelajaran

                                </h1>
                            </div>

                        </div>
                        <div class="flex flex-col w-1/3 break-words items-center justify-start overflow-hidden px-1">
                            <div class="overflow-hidden">
                                <img src="/images/Outing.png" alt="" class="object-contain w-24 h-24">

                            </div>
                            <div>
                                <h1 class="text-center text-hitam font-semibold tracking-wide text-sm md:text-lg pt-2">Outbound/Outing Class</h1>
                            </div>

                        </div>
                        <div class="flex flex-col w-1/3 break-words items-center justify-start overflow-hidden px-1">
                            <div class="overflow-hidden">
                                <img src="/images/Latihan.png" alt="" class="object-contain w-24 h-24">

                            </div>
                            <div>
                                <h1 class="text-center text-hitam font-semibold tracking-wide text-sm md:text-lg pt-2">Latihan Soal</h1>
                            </div>

                        </div>
                        <div class="flex flex-col w-1/3 break-words items-center justify-start overflow-hidden px-1">
                            <div class="overflow-hidden">
                                <img src="/images/Pembelajaran.png" alt="" class="object-contain w-24 h-24">

                            </div>
                            <div>
                                <h1 class="text-center text-hitam font-semibold tracking-wide text-sm md:text-lg pt-2">Pembelajaran yang berorientasi penyelesaian materi
                                </h1>
                            </div>

                        </div>

                    </div>
                </div>
                <div class="md:container md:m-auto m-2 text-hitam pt-4 font-medium">

                    <p class="pb-2">Program ini mengedepankan pendidikan karakter dan pemberdayaan sesuai masa tumbuh anak dengan menerapkan Kurikulum 2013 Pendidikan Kesetaraan. Kurikulum 2013 dipilih dalam proses pembelajaran sehingga mampu menjadikan pembelajaran menarik yang bertujuan untuk mengembangkan kreativitas, keaktifan, dan kemandirian anak.</p>
                    <p class="pb-2">Program Setara SMP memberikan kesempatan pada anak untuk belajar melalui bermain suasana “homy” dan nyaman seperti di rumah dan diharapkan anak dapat mengembangkan kreativitas, keaktifan, dan kemandirian. Kenyamanan anak dengan guru menjadi kunci dalam setiap pembelajaran yang dilakukan di Homeschooling HS Laporin supaya anak merasa aman dan senang pada saat proses pembelajaran. Guru Homeschooling HS Laporin berisikan pengajar yang selalu mengupayakan masuk ke dalam dunia anak sehingga dapat menjadi teman bermain dan belajar bagi anak-anak setara SMP.
                    </p>
                    <p class="pb-2">Program Setara SMP terbagi menjadi 3 jenjang, yaitu: tingkatan 3 setara kelas 7 SMP dan kelas 8 SMP serta tingkatan 4 setara 9 SMP.
                    </p>
                </div>

            </div>
        </section>
        <section  class="rounded-t-[56px] bg-white  relative py-8 -mt-12 z-20" data-aos="fade-up">
            <div id="setaraSMA" class="pb-16 pt-4">
                <div class=" flex justify-center mx-auto rounded-2xl w-[70vw] px-4 py-2 bg-primary ring ring-offset-2 ring-primary">
                    <h1  class="text-white font-black text-2xl tracking-wider">Program Setara SMA</h1>
                </div>
                <h1 class="text-center font-black text-hitam text-xl md:text-3xl uppercase pt-4 pb-2">Mata pelajaran yang diajarkan</h1>
                <div id="carousel" class="pb-6 pt-2 grid grid-cols-2 md:container p-2">
                    <div class="p-2">
                        <h1 class="text-center text-primary font-extrabold text-2xl uppercase">Wajib</h1>
                        <div class="flex flex-col items-center justify-center text-center text-hitam text-base md:text-lg font-semibold gap-y-1">
                            <p>Bahasa Indonesia</p>
                            <p>Bahasa Inggris</p>
                            <p>Bahasa Arab</p>
                            <p>Matematika</p>
                            <p>Pendidikan Pancasila dan Kewarganegaraan</p>
                            <p>Ilmu Pengetahuan Alam <br>(Biologi, Fisika, Kimia)</p>
                            <p>Ilmu Pengetahuan Sosial <br>(Geografi, Sosiologi, Ekonomi)</p>
                        </div>
                    </div>
                    <div class="border-l-2 border-primary p-2">
                        <h1 class="text-center text-primary font-extrabold text-2xl uppercase">Klasikal</h1>
                        <div class="flex flex-col items-center justify-center text-center text-hitam text-base md:text-lg  font-semibold gap-y-1">
                            <p>Pendidikan Agama Islam <br>(Fiqh, Bahasa Arab, Tahsin, Tahfizh, Aqidah, Hadist dll)</p>
                            <p>Seni Budaya dan Prakarya</p>
                            <p>Pendidikan Jasmani Olah Raga Kesehatan</p>
                            <p>Cooking Class</p>
                        </div>
                    </div>
                </div>
                <div id="fasilitas" class="py-6 bg-primary/10">
                    <h1 class="text-center font-black text-hitam text-3xl pb-4 uppercase">Fasilitas</h1>
                    <div class="flex flex-wrap gap-y-6 px-2 justify-around md:container md:px-0">
                        <div class="flex flex-col w-1/3 break-words items-center justify-start overflow-hidden px-1">
                            <div class="overflow-hidden">
                                <img src="/images/Guru.png" alt="" class="object-contain w-24 h-24">

                            </div>
                            <div>
                                <h1 class="text-center text-hitam font-semibold tracking-wide text-sm md:text-lg pt-2">Guru yang professional dan ramah</h1>
                            </div>

                        </div>
                        <div class="flex flex-col w-1/3 break-words items-center justify-start overflow-hidden px-1">
                            <div class="overflow-hidden">
                                <img src="/images/Books.png" alt="" class="object-contain w-24 h-24">

                            </div>
                            <div>
                                <h1 class="text-center text-hitam font-semibold tracking-wide text-sm md:text-lg pt-2">Modul</h1>
                            </div>

                        </div>
                        <div class="flex flex-col w-1/3 break-words items-center justify-start overflow-hidden px-1">
                            <div class="overflow-hidden">
                                <img src="/images/Metode.png" alt="" class="object-contain w-24 h-24">

                            </div>
                            <div>
                                <h1 class="text-center text-hitam font-semibold tracking-wide text-sm md:text-lg pt-2">Metode Belajar yang menyenangkan
                                </h1>
                            </div>

                        </div>
                        <div class="flex flex-col w-1/3 break-words items-center justify-start overflow-hidden px-1">
                            <div class="overflow-hidden">
                                <img src="/images/Laporan.png" alt="" class="object-contain w-24 h-24">

                            </div>
                            <div>
                                <h1 class="text-center text-hitam font-semibold tracking-wide text-sm md:text-lg pt-2">Laporan hasil belajar per mata pelajaran

                                </h1>
                            </div>

                        </div>
                        <div class="flex flex-col w-1/3 break-words items-center justify-start overflow-hidden px-1">
                            <div class="overflow-hidden">
                                <img src="/images/Outing.png" alt="" class="object-contain w-24 h-24">

                            </div>
                            <div>
                                <h1 class="text-center text-hitam font-semibold tracking-wide text-sm md:text-lg pt-2">Outbound/Outing Class</h1>
                            </div>

                        </div>
                        <div class="flex flex-col w-1/3 break-words items-center justify-start overflow-hidden px-1">
                            <div class="overflow-hidden">
                                <img src="/images/Latihan.png" alt="" class="object-contain w-24 h-24">

                            </div>
                            <div>
                                <h1 class="text-center text-hitam font-semibold tracking-wide text-sm md:text-lg pt-2">Latihan Soal</h1>
                            </div>

                        </div>
                        <div class="flex flex-col w-1/3 break-words items-center justify-start overflow-hidden px-1">
                            <div class="overflow-hidden">
                                <img src="/images/Pembelajaran.png" alt="" class="object-contain w-24 h-24">

                            </div>
                            <div>
                                <h1 class="text-center text-hitam font-semibold tracking-wide text-sm md:text-lg pt-2">Pembelajaran yang berorientasi penyelesaian materi
                                </h1>
                            </div>

                        </div>

                    </div>
                </div>
                <div class="md:container md:m-auto m-2 text-hitam pt-4 font-medium">

                    <p class="pb-2">Program ini mengedepankan pendidikan karakter dan pemberdayaan sesuai masa tumbuh anak dengan menerapkan Kurikulum 2013 Pendidikan Kesetaraan. Kurikulum 2013 dipilih dalam proses pembelajaran sehingga mampu menjadikan pembelajaran menarik yang bertujuan untuk mengembangkan kreativitas, keaktifan, dan kemandirian anak.</p>
                    <p class="pb-2">Program Setara SMA memberikan kesempatan pada anak untuk belajar melalui bermain suasana “homy” dan nyaman seperti di rumah dan diharapkan anak dapat mengembangkan kreativitas, keaktifan, dan kemandirian. Kenyamanan anak dengan guru menjadi kunci dalam setiap pembelajaran yang dilakukan di Homeschooling HS Laporin supaya anak merasa aman dan senang pada saat proses pembelajaran. Guru Homeschooling HS Laporin berisikan pengajar yang selalu mengupayakan masuk ke dalam dunia anak sehingga dapat menjadi teman bermain dan belajar bagi anak-anak setara SMA.
                    </p>
                    <p class="pb-2">Program Setara SMA terbagi menjadi 3 jenjang, yaitu: tingkatan 5 setara kelas 10 SMA dan kelas 11 SMA serta tingkatan 6 setara 12 SMA
                    </p>
                </div>

            </div>
        </section>
        <section  class="rounded-t-[56px] bg-secondary relative py-8 -mt-12 z-20" data-aos="fade-up">
            <div id="eksklusif" class="pb-16 pt-4">
                <div class=" flex justify-center mx-auto rounded-2xl w-[70vw] px-4 py-2 bg-primary ring ring-offset-2 ring-primary">
                    <h1  class="text-white font-black text-2xl tracking-wider">Program Eksklusif</h1>
                </div>
                <h1 class="text-center font-black text-hitam text-xl md:text-3xl uppercase pt-4 pb-2">Mata pelajaran yang diajarkan</h1>
                <div id="carousel" class="pb-6 pt-0 md:container p-2">
                    <div class="p-2">
                        <h1 class="text-center text-primary font-extrabold text-2xl uppercase">Wajib</h1>
                        <div class="flex flex-col items-center justify-center text-center text-hitam text-base md:text-lg font-semibold gap-y-1">
                            <p>Cambridge Exam</p>
                            <p>Bahasa Indonesia</p>
                            <p>Bahasa Inggris</p>
                            <p>Bahasa Arab</p>
                            <p>Matematika</p>
                            <p>Pendidikan Pancasila dan Kewarganegaraan</p>
                            <p>Ilmu Pengetahuan Alam <br>(Biologi, Fisika, Kimia)</p>
                            <p>Ilmu Pengetahuan Sosial <br>(Geografi, Sosiologi, Ekonomi)</p>
                        </div>
                    </div>
                </div>
                <div id="fasilitas" class="py-6 bg-primary/10">
                    <h1 class="text-center font-black text-hitam text-3xl pb-4 uppercase">Fasilitas</h1>
                    <div class="flex flex-wrap gap-y-6 px-2 justify-around md:container md:px-0">
                        <div class="flex flex-col w-1/3 break-words items-center justify-start overflow-hidden px-1">
                            <div class="overflow-hidden">
                                <img src="/images/Guru.png" alt="" class="object-contain w-24 h-24">

                            </div>
                            <div>
                                <h1 class="text-center text-hitam font-semibold tracking-wide text-sm md:text-lg pt-2">Guru yang professional dan ramah</h1>
                            </div>

                        </div>
                        <div class="flex flex-col w-1/3 break-words items-center justify-start overflow-hidden px-1">
                            <div class="overflow-hidden">
                                <img src="/images/Books.png" alt="" class="object-contain w-24 h-24">

                            </div>
                            <div>
                                <h1 class="text-center text-hitam font-semibold tracking-wide text-sm md:text-lg pt-2">Modul</h1>
                            </div>

                        </div>
                        <div class="flex flex-col w-1/3 break-words items-center justify-start overflow-hidden px-1">
                            <div class="overflow-hidden">
                                <img src="/images/Metode.png" alt="" class="object-contain w-24 h-24">

                            </div>
                            <div>
                                <h1 class="text-center text-hitam font-semibold tracking-wide text-sm md:text-lg pt-2">Metode Belajar yang menyenangkan
                                </h1>
                            </div>

                        </div>
                        <div class="flex flex-col w-1/3 break-words items-center justify-start overflow-hidden px-1">
                            <div class="overflow-hidden">
                                <img src="/images/Laporan.png" alt="" class="object-contain w-24 h-24">

                            </div>
                            <div>
                                <h1 class="text-center text-hitam font-semibold tracking-wide text-sm md:text-lg pt-2">Laporan hasil belajar per mata pelajaran

                                </h1>
                            </div>

                        </div>
                        <div class="flex flex-col w-1/3 break-words items-center justify-start overflow-hidden px-1">
                            <div class="overflow-hidden">
                                <img src="/images/Outing.png" alt="" class="object-contain w-24 h-24">

                            </div>
                            <div>
                                <h1 class="text-center text-hitam font-semibold tracking-wide text-sm md:text-lg pt-2">Outbound/Outing Class</h1>
                            </div>

                        </div>
                        <div class="flex flex-col w-1/3 break-words items-center justify-start overflow-hidden px-1">
                            <div class="overflow-hidden">
                                <img src="/images/Latihan.png" alt="" class="object-contain w-24 h-24">

                            </div>
                            <div>
                                <h1 class="text-center text-hitam font-semibold tracking-wide text-sm md:text-lg pt-2">Latihan Soal</h1>
                            </div>

                        </div>
                        <div class="flex flex-col w-1/3 break-words items-center justify-start overflow-hidden px-1">
                            <div class="overflow-hidden">
                                <img src="/images/Pembelajaran.png" alt="" class="object-contain w-24 h-24">

                            </div>
                            <div>
                                <h1 class="text-center text-hitam font-semibold tracking-wide text-sm md:text-lg pt-2">Pembelajaran yang berorientasi penyelesaian materi
                                </h1>
                            </div>

                        </div>

                    </div>
                </div>
                <div class="md:container md:m-auto m-2 text-hitam pt-4 font-medium">

                    <p class="pb-2">Program ini terbuka untuk seluruh jenjang dari siswa SD, SMP, SMA, dan Cambridge Internasional Examination (CIE). Program ini terbuka baik peserta didik Laporin maupun peserta didik di luar Laporin yang membutuhkan pendampingan mendalam mengenai mata pelajaran yang kurang dapat dikuasai. </p>
                    <p class="pb-2">Program private lesson hanya diperuntukan untuk kelas individu artinya setiap satu peserta didik akan dibimbing oleh 1 guru sehingga fokus mengejar berbagai materi yang belum dipahami. Kurikum yang dipakai mengacu pada kurikulum sekolah asal peserta didik sehingga sangat fleksibel</p>
                </div>

            </div>
        </section>
    </div>
</section>

@endsection