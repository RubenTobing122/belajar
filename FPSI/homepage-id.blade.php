@inject('carbon', 'Carbon\Carbon')
@extends('theme.' . $theme . '.template')

@once
  @push('template-css')
    <link rel="stylesheet" href="{{ url("css/homepage.css") }}" />
  @endpush
@endonce

@once
  @push('template-js')
    <script src="{{ url("js/homepage-banner.js") }}" defer></script>
  @endpush
@endonce

@section('content')

[carousel type="post" categories="carousel" limit="15" no_title="1" no_link="1"]
<br>
<section class="container prestige" id="prestasi-fakultas">
    <div class="prestige-info">
    <i class="fa-solid fa-flag-checkered"></i>
      <div class="title">
        Rank #10<br />
        Jurusan psikologi Terbaik di Indonesia 2023
      </div>
      <div class="scope">Dengan Peringkat Dunia  1.501+</div>
      <div class="source">(Versi THE WUR)</div>
    </div>
    <!-- <div class="prestige-info">
      <i class="fa-solid fa-flag-checkered"></i>
      <div class="title">
        -<br />
        -
      </div>
      <div class="scope">-</div>
      <div class="source">-</div>
    </div>
    <div class="prestige-info">
      <i class="fa-solid fa-flag-checkered"></i>
      <div class="title">
        -<br />
        -
      </div>
      <div class="scope">-</div>
      <div class="source">-</div>
    </div> -->
    <div class="prestige-info">
      <i class="fa-solid fa-earth-asia"></i>
      <div class="title">
        #17<br />
        Best University
      </div>
      <div class="scope">In Indonesia - THE WUR 2022</div>
      <div class="source">(Overall Ranking)</div>
    </div>
</section>
<section class="academics" id="program-pendidikan">
    <div class="container">
      <h1>
      Program Pendidikan
      </h1>
      <div class="academic-list">
        <div class="academic">
        <div class="d-flex justify-content-center">
            <img src="{{ asset('images/icons/diploma.png') }}" alt="Program Sarjana" />
          </div>
          <h2>Program Sarjana</h2>
          <p>Fakultas psikologi Universitas Sumatera Utara Menyelenggarakan 1 program studi sarjana yaitu S-1 Ilmu psikologi</p>
          <div>
            <a href="id/pendidikan#sarjana" class="button button-secondary">Selengkapnya</a>
          </div>
        </div>
        <div class="academic">
          <div class="d-flex justify-content-center">
            <img src="{{ asset('images/icons/book.png') }}" alt="Program Pascasarjana" />
          </div>
          <h2>Program Magister</h2>
          <p>Fakultas psikologi Universitas Sumatera Utara Menyelenggarakan 2 program studi magister yaitu S-2 Ilmu psikologi dan S-2 Kenotariatan</p>
          <div>
            <a href="id/pendidikan#magister" class="button button-secondary">Selengkapnya</a>
          </div>
        </div>
        <div class="academic">
          <div class="d-flex justify-content-center">
            <img src="{{ asset('images/icons/diploma.png') }}" alt="Program Sarjana" />
          </div>
          <h2>Program Doktoral</h2>
          <p>Fakultas psikologi Universitas Sumatera Utara Menyelenggarakan 1 program studi doktoral yaitu S-3 Doktoral Ilmu psikologi</p>
          <div>
            <a href="id/pendidikan#doktoral" class="button button-secondary">Selengkapnya</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="container student-registration" id="penerimaan-mahasiswa">
    <img src="{{ url('images/mahasiswa.jpg') }}" alt="Foto Mahasiswa" />
    <div class="information">
      <h1>Penerimaan Mahasiswa Baru Universitas Sumatera Utara</h1>
      <small>Penerimaan Semester 1 Tahun Ajaran 2022/2023</small>
      <p style ="text-align:left">Fakultas psikologi Universitas Sumatera Utara menerima mahasiswa baru untuk Semester 1 tahun akademik 2022/2023 untuk semua program studi baik tingkat sarjana, magister maupun doktoral</p>
      <a href ="https://www.usu.ac.id/id/penerimaan" target="_blank" class="button button-secondary">
        Penerimaan
      </a>
    </div>
  </section>
  <section class="container news" id="berita-utama">
    <h1 class="section-title">Berita Fakultas psikologi</h1>
    <div class="d-flex align-items-center">
      <small class="section-subtitle flex-grow-1">Berita terkini Fakultas psikologi USU</small>
      <a class="link" href="{{ url('/id/kategori/berita') }}">
        Berita Lainnya <i class="fa-solid fa-angles-right"></i>
      </a>
    </div>
          [post-list categories="news" limit=6]
  </section>
  <section id="agenda-kegiatan">
    <div class="container news">
      <h1 class="section-title">Agenda Unit Pengembangan Pendidikan</h1>
        <small class="section-subtitle">Agenda Kegiatan Unit Pengembangan Pendidikan</small>
      [post-agenda-list limit=3 class="mt-4"]
 </section>
  <section class="container news" id="pengumuman">
    <h1 class="section-title">Pengumuman</h1>
    <small class="section-subtitle">Pengumuman Terbaru Seputar Kurikulum dan Pembelajaran</small>
    [post-announcement-list]
  </section>
    <section class="container researches" id="fakta-fakultas">
    <h1>
      Fakta Fakultas
    </h1>
    <div class="research-numbers">
    <div class="research-number-container">
        <div class="icon">
        <div class="rounded-circle usu-bg-light-gray p-3">
            <img style="width: 50px; height: 50px" src="{{ asset('images/icons/hook.png') }}" alt="Tahun Berdiri" />
          </div>
        </div>
        <div>
          <b>Tahun Berdiri</b>
          <div>1954</div>
        </div>
      </div>
      <div class="research-number-container">
        <div class="icon">
        <div class="rounded-circle usu-bg-light-gray p-3">
            <img style="width: 50px; height: 50px" src="{{ asset('images/icons/program.png') }}" alt="Program Studi" />
          </div>
        </div>
        <div>
          <b>Program Studi</b>
          <div>4</div>
        </div>
      </div>
      <div class="research-number-container">
        <div class="icon">
        <div class="rounded-circle usu-bg-light-gray p-3">
            <img style="width: 50px; height: 50px" src="{{ asset('images/icons/student.png') }}" alt="Mahasiswa" />
          </div>
        </div>
        <div>
          <b>Mahasiswa</b>
          <div>2605</div>
        </div>
      </div>
      <div class="research-number-container">
        <div class="icon">
        <div class="rounded-circle usu-bg-light-gray p-3">
            <img style="width: 50px; height: 50px" src="{{ asset('images/icons/professor.png') }}" alt="Guru Besar" />
          </div>
        </div>
        <div>
          <b>Guru Besar</b>
          <div>15</div>
        </div>
      </div>
      <div class="research-number-container">
        <div class="icon">
        <div class="rounded-circle usu-bg-light-gray p-4">
            <img style="width: 50px; height: 50px" src="{{ asset('images/icons/presentation.png') }}" alt="Dosen" />
          </div>
        </div>
        <div>
          <b>Dosen</b>
          <div>102</div>
        </div>
      </div>
    <div class="research-number-container">
        <div class="icon">
        <div class="rounded-circle usu-bg-light-gray p-3">
            <img style="width: 50px; height: 50px" src="{{ asset('images/icons/team.png') }}" alt="Tendik" />
          </div>
        </div>
        <div>
          <b>Tendik</b>
          <div>65</div>
        </div>
      </div>
      <div class="research-number-container">
        <div class="icon">
        <div class="rounded-circle usu-bg-light-gray p-3">
            <img style="width: 50px; height: 50px" src="{{ asset('images/icons/graduating-student.png') }}" alt="Alumni" />
          </div>
        </div>
        <div>
          <b>Alumni</b>
          <div>13662</div>
        </div>
      </div>
      <div class="research-number-container">
        <div class="icon">
        <div class="rounded-circle usu-bg-light-gray p-3">
            <img style="width: 50px; height: 50px" src="{{ asset('images/icons/global-learning.png') }}" alt="Inbound Student" />
          </div>
        </div>
        <div>
          <b>Inbound Student</b>
          <div>19</div>
        </div>
      </div>
      <div class="research-number-container">
        <div class="icon">
        <div class="rounded-circle usu-bg-light-gray p-3">
            <img style="width: 50px; height: 50px" src="{{ asset('images/icons/global-learning-1.png') }}" alt="Outbound Student" />
          </div>
        </div>
        <div>
          <b>Outbound Student</b>
          <div>3</div>
        </div>
      </div>
      <div class="research-number-container">
        <div class="icon">
        <div class="rounded-circle usu-bg-light-gray p-3">
            <img style="width: 50px; height: 50px" src="{{ asset('images/icons/laboratory.png') }}" alt="Laboratorium" />
          </div>
        </div>
        <div>
          <b>Laboratorium</b>
          <div>3</div>
        </div>
      </div>
      <div class="research-number-container">
        <div class="icon">
        <div class="rounded-circle usu-bg-light-gray p-3">
            <img style="width: 50px; height: 50px" src="{{ asset('images/icons/certificate.png') }}" alt="Jurnal Internasional" />
          </div>
        </div>
        <div>
          <b>Jurnal Internasional</b>
          <div>24</div>
        </div>
      </div>
      <div class="research-number-container">
        <div class="icon">
        <div class="rounded-circle usu-bg-light-gray p-3">
            <img style="width: 50px; height: 50px" src="{{ asset('images/icons/presentation.png') }}" alt="Konfrensi Internasional" />
          </div>
        </div>
        <div>
          <b>Konferensi Internasional</b>
          <div>57</div>
        </div>
      </div>
      <div class="research-number-container">
        <div class="icon">
        <div class="rounded-circle usu-bg-light-gray p-3">
            <img style="width: 50px; height: 50px" src="{{ asset('images/icons/medal.png') }}" alt="HKI" />
          </div>
        </div>
        <div>
          <b>HKI</b>
          <div>9</div>
        </div>
      </div>
  </section>
  <section class="dekan container" id="sambutan-dekan">
    <div class="dean">
        <p>
            <img class="image_resized" style="width:100%;" src="https://konten.usu.ac.id/storage/satker/15/statis/dekan_fpsi.png">
        </p>
        <div class="desc">
            <div class="name">
                <h1>Sambutan Dekan</h1>
            </div>
            <p>
            Assalamualaikum warahmatullahi wabarakatuh, Selamat Datang di Website Fakultas psikologi Universitas Sumatera Utara. Kami bertransformasi untuk pendidikan psikologi terbaik <br>
            Atas nama Civitas Akademika, saya dengan senang hati menyambut anda di Fakultas psikologi Universitas Sumatera Utara. Sejak tahun 1954 kami telah menyelenggarakan pendidikan, penelitian dan pengabdian kepada masyarakat dengan kualitas yang tinggi. Dan saat ini kami sedang melakukan berbagai upaya transformasi untuk menjadi Fakultas psikologi yang berdaya saing internasional. Kami menyiapkan sumber pemikiran psikologi dan sumber daya manusia dalam bidang psikologi yang unggul dan berintegritas. Belajar di Fakultas psikologi USU berarti anda berada dijalur yang benar. Selamat menyongsong masa depan yang lebih baik.
            </p>
        </div>
    </div>
  </section>
  <section class="testimoni" id="testimoni-alumni">
  <div class="container">
    <h1>
    Testimoni Alumni
    </h1>
    <!-- <div class="testimoni-list">
      <div class="kotak">
      <div class ="grid-testimoni">
        <div class="petik-testimoni">
          <i class="fa-solid fa-quote-left fa-2x"></i>
        </div>
        <div class="testimoni-isi">
        <p style="text-align:justify">
        Pengalaman saya selama kuliah di Fakultas psikologi USU, ada ruang akademik yang terbuka. Ruang-ruang diskusi diluar ruang kelas, yang menambah wawasan, pengalaman, sehingga menjadi sangat berarti bagi saya hingga saat ini        </p>
        </div>
        </div>
        <div class="grid-2">
        <img src="https://konten.usu.ac.id/storage/satker/22/statis/alumni1-Fakultas psikologi.jpg">
            <div class="grid-2-p">
              <h5>Iqbal Damanik</h5>
              <br>
              <h6></h6>
              <br>
              <div class="grid-2-star">
                <?php $i=1; while($i<=5){echo '<i class="fa-solid fa-star"></i>';$i++;}?>
              </div>
            </div>
        </div>
      </div>
      <div class="kotak">
      <div class ="grid-testimoni">
        <div class="petik-testimoni">
          <i class="fa-solid fa-quote-left fa-2x"></i>
        </div>
        <div class="testimoni-isi">
        <p style="text-align:justify">
        Pengalaman saya selama kuliah di Fakultas psikologi USU, ada ruang akademik yang terbuka. Ruang-ruang diskusi diluar ruang kelas, yang menambah wawasan, pengalaman, sehingga menjadi sangat berarti bagi saya hingga saat ini        </p>
        </div>
        </div>
        <div class="grid-2">
        <img src="https://konten.usu.ac.id/storage/satker/22/statis/alumni2-Fakultas psikologi.jpg">
            <div class="grid-2-p">
              <h5>Hendra Utama</h5>
              <br>
              <h6></h6>
              <br>
              <div class="grid-2-star">
                <?php $i=1; while($i<=5){echo '<i class="fa-solid fa-star"></i>';$i++;}?>
              </div>
            </div>
        </div>
      </div>
      <div class="kotak">
      <div class ="grid-testimoni">
        <div class="petik-testimoni">
          <i class="fa-solid fa-quote-left fa-2x"></i>
        </div>
        <div class="testimoni-isi">
        <p style="text-align:justify">
        Softskill sangat perlu,  mulai dari praktek kita sebagai aktivis mahasiswa, organisasi intra dan ekstra kurikuler yang sangat diperlukan di masyarakat. Untuk adek-adek yang masih berkuliah untuk perbanyak softskill. Apalagi sekarang saya bergelut di industri yang banyak menyaring para calon pencari kerja, dan kita tahu kebutuhan kita sekarang softskill, tentang bagaimana attitude, disiplin, performance yang harus dijaga.
       </p>
        </div>
        </div>
        <div class="grid-2">
        <img src="https://konten.usu.ac.id/storage/satker/22/statis/alumni3-Fakultas psikologi.jpg">
            <div class="grid-2-p">
              <h5>Tysa Novenny</h5>
              <br>
              <h6>(Presenter TvOne)</h6>
              <br>
              <div class="grid-2-star">
                <?php $i=1; while($i<=5){echo '<i class="fa-solid fa-star"></i>';$i++;}?>
              </div>
            </div>
        </div> -->
            <div class="flex-keterangan-belum-ada-data">
								<p class="keterangan-belum-ada-data">Belum Ada Data</p>
							</div>
      </div>
</section>
  <section class="partners" id="mitra">
    <h1>Mitra</h1>
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                    <div class="carousel-item active">
                             <div class="container partner-list">
                                  <a href="https://www.peradi.or.id/" target ="_blank"><img src="{{ url('https://konten.usu.ac.id/storage/satker/15/statis/logo-peradi.png') }}" /></a>
                                  <a href="https://www.banksumut.co.id/" target ="_blank"><img src="{{ url('https://konten.usu.ac.id/storage/satker/15/statis/bank-sumut-logo.png') }}" /></a>
                                  <a href="https://www.telkom.co.id/sites/" target ="_blank"><img src="{{ url('https://konten.usu.ac.id/storage/satker/15/statis/telkom-logo.png') }}" /></a>
                                  <a href="https://www.bankbsi.co.id/" target ="_blank"><img src="{{ url('https://konten.usu.ac.id/storage/satker/15/statis/bank-syariah-logo.png') }}" /></a>
                                  <a href="https://www.insw.go.id/" target ="_blank"><img src="{{ url('https://konten.usu.ac.id/storage/satker/15/statis/lnsw-logo.png') }}" /></a>
                                  <a href="https://www.posindonesia.co.id/id" target="blank"><img src="{{ url('https://konten.usu.ac.id/storage/satker/15/statis/pos-logo.png') }}" /></a>
                              </div>
                      </div>
                      <div class="carousel-item">
                              <div class="container partner-list">
                                <a href="https://www.pegadaian.co.id/" target ="_blank"><img src="{{ url('https://konten.usu.ac.id/storage/satker/15/statis/pegadaian-logo.png') }}" /></a>
                                <img src="{{ url('https://konten.usu.ac.id/storage/satker/15/statis/univ-juanda-logo.png') }}" />
                                <a href="https://tataruang.atrbpn.go.id/" target ="_blank"><img src="{{ url('https://konten.usu.ac.id/storage/satker/15/statis/kemen-atr-logo.png') }}" /></a>
                                <a href="https://www.unilever.co.id/" target ="_blank"><img src="{{ url('https://konten.usu.ac.id/storage/satker/15/statis/unilever-logo.png') }}" />   </a>
                                <a href="https://kppu.go.id/" target ="_blank"><img src="{{ url('https://konten.usu.ac.id/storage/satker/15/statis/kppu-logo.png') }}" />  </a>
                                <a href="http://dprd-sumutprov.go.id/" target="blank"><img src="{{ url('https://konten.usu.ac.id/storage/satker/15/statis/dprd-logo.png') }}" /> </a>
                              </div>
                      </div>
                      <div class="carousel-item">
                              <div class="container partner-list">
                                <a href="https://pdamtirtanadi.co.id/" target ="_blank"><img src="{{ url('https://konten.usu.ac.id/storage/satker/15/statis/tirtanadi-logo.png') }}" /></a>
                                <a href="https://ms-singkil.go.id/" target ="_blank"><img src="{{ url('https://konten.usu.ac.id/storage/satker/15/statis/mahkamah-syariah-singkil.png') }}" /></a>
                                <img src="{{ url('https://konten.usu.ac.id/storage/satker/15/statis/unud-logo.png') }}" />
                                <a href="https://ppippat.org/wp/" target ="_blank"> <img src="{{ url('https://konten.usu.ac.id/storage/satker/15/statis/ippat-logo.png') }}" /></a>
                                <img src="{{ url('https://konten.usu.ac.id/storage/satker/15/statis/prem-oil-logo.png') }}" />
                                <a href="https://aaji.or.id/" target ="_blank"><img src="{{ url('https://konten.usu.ac.id/storage/satker/15/statis/aaji-logo_.png') }}" />  </a>
                              </div>
                      </div>
                      <div class="carousel-item">
                              <div class="container partner-list">
                                <a href="https://www.cmd.co.id/" target ="_blank"><img src="{{ url('https://konten.usu.ac.id/storage/satker/15/statis/capella-logo.png') }}" /></a>
                                <a href="https://ptpsumut.com/" target ="_blank"><img src="{{ url('https://konten.usu.ac.id/storage/satker/15/statis/perkebunan-sumatera-utara-logo.png') }}" /></a>
                                <img src="{{ url('https://konten.usu.ac.id/storage/satker/15/statis/unair-logo.png') }}" />
                                <a href="https://lapssjk.id//" target ="_blank"><img src="{{ url('https://konten.usu.ac.id/storage/satker/15/statis/laps-logo.png') }}" />
                                <a href="https://www.kyushu-u.ac.jp/en/" target ="_blank"><img src="{{ url('https://konten.usu.ac.id/storage/satker/15/statis/kyushu-logo.png') }}" /> </a>
                                <a href="https://jgu.edu.in/" target ="_blank"><img src="{{ url('https://konten.usu.ac.id/storage/satker/15/statis/jindal-univ-logo.png') }}" />    </a>
                                <a href="https://uitm.edu.my/index.php/ms/" target ="_blank"><img src="{{ url('https://konten.usu.ac.id/storage/satker/15/statis/univ-mara-logo.png') }}" />  </a>
                              </div>
                      </div>
                 </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <div style="text-align:center;" class="container-xl fw-normal lh-lg mt-5"><a href="https://drive.google.com/file/d/1WMpedjvrtQ0r67cC3PIu5eNB_L7ZIZNK/view" target="_blank" class="button button-mitra">Lihat Selengkapnya</a></div>
  </section>
  <section class="container researches" id="fasilitas">
    <div class="research-sources">
    <div>
        <img src="{{ url('https://konten.usu.ac.id/storage/satker/15/statis/gedung-peradilan-semu.jpeg') }}" alt="Facility" />
        <h2 class = "titlelabs">Gedung Peradilan Semu</h2>
        <p class ="labs" style="text-align:justify"> Merupakan gedung berlantai dua yang digunakan untuk berbagai macam kegiatan. Di lantai pertama terdapat beberapa ruangan yang diperuntukan bagi pelaksanaan praktek acara peradilan yang diadakan bagi mahasiswa semester VI. Sementara di lantai kedua terdapat sebuah aula yang digunakan untuk menyelanggarakan seminar, diskusi, workshop, pelaksanaan Video Conference dalam rangka kerja sama dengan Mahkamah Konstitusi.</p>
      </div>
      <div>
        <img src="{{ url('https://konten.usu.ac.id/storage/satker/15/statis/perpustakaan-fpsi.jpeg') }}" alt="Facility" />
        <h2 class = "titlelabs">Perpustakaan</h2>
        <p class ="labs" style="text-align:justify">Perpustakaan adalah mencakup suatu ruangan, bagian dari gedung/bangunan atau gedung tersendiri yang berisi buku-buku koleksi, yang diatur dan disusun demikian rupa, sehingga mudah untuk dicari dan dipergunakan apabila sewaktu-waktu diperlukan oleh pembaca (Sutarno NS, 2006:11).</p>
      </div>
      <div>
        <img src="{{ url('https://konten.usu.ac.id/storage/satker/15/statis/asa-fpsi.jpg') }}" alt="Facility" />
        <h2 class = "titlelabs">Ruang ASA (Aplikasi Satu Atap)</h2>
        <p class ="labs" style="text-align:justify"> Aplikasi Satu Atap (ASA) merupakan aplikasi untuk mengelola persuratan ke fakultas yang melibatkan banyak pihak dalam proses pengajuan, verifikasi, dan proses mendapatkan hasil sesuai SOP yang berlaku. Pelayanan ini bertujuan agar mempermudah dalam pengurusan administrasi tanpa harus datang langsung ke kampus</p>
      </div>
    </div>
    <div style="text-align:center;" class="container-xl fw-normal lh-lg mt-5 mb-5"><a href="id/fasilitas" class="button button-mitra">Lihat Fasilitas Selengkapnya</a></div>
  </section>
  <section class="videos" id="video-fakultas">
  <div class="container news">
    <h1 class="section-title">Video Fakultas psikologi</h1>
    <small class="section-subtitle">Video Seputar Fakultas psikologi Universitas Sumatera Utara</small>
    </div>
    <div class="container video-list">
      <iframe width ="100%" src="https://www.youtube.com/embed/t0Xmi2NpeIA" title="Fakultas psikologi, Universitas Sumatera Utara" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
      <iframe width ="100%" src="https://www.youtube.com/embed/aZR_owEU2iA" title="Fakultas psikologi, Universitas Sumatera Utara" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
      <iframe width ="100%" src="https://www.youtube.com/embed/QjG1fi3BF6Q" title="Fakultas psikologi, Universitas Sumatera Utara" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
      <iframe width ="100%" src="https://drive.google.com/file/d/1OJd1Qhu_Dnu6D3yf5IM5m1v-Jfr-aKqW/preview" title="Fakultas psikologi, Universitas Sumatera Utara" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>

    </div>
  </section>
<!-- gambarfakultas -->
  <div class="footer-panorama">
    <img src="https://konten.usu.ac.id/storage/satker/15/statis/peradilan-semu-wallpaper.jpg" alt="Panorama" />
  </div>
</div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script>
    $('.carousel').carousel({
  interval: 0
})
</script>
@endsection
