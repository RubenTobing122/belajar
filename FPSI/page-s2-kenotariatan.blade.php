@inject('carbon', 'Carbon\Carbon')
@extends('theme.' . $theme . '.template')


@section('content')
<article x-data="{activeSection: ''}">
<div class="breadcrumb">
<div class="container">
<a href="{{ url("/$lang") }}"><i class="fa-solid fa-house"></i></a> &nbsp;>&nbsp;
<a class ="back-to-prodi" href="pendidikan">Program Studi</a> &nbsp;>&nbsp;
Magister Kenotariatan
</div>
</div>
<div class="page-thumbnail" style="--image: url('/images/thumbnail_prodi.png')">
	<h1 class="container">
  Magister Kenotariatan
	</h1>
</div>
<div class="fluid">
<div class='my-sticky'>
	<ul class="nav nav-tabs" role="tablist">
		<li class="nav-item">
			<a class="nav-link active" href="#info-umum" id="umum-tab" role="tab" data-toggle="tab" aria-controls="umum" aria-expanded="true">Informasi Umum</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="#kurikulum" role="tab" id="kurikulum-tab" data-toggle="tab" aria-controls="kurikulum">Kurikulum dan Riset</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="#berita-lainnya" role="tab" id="berita-tab" data-toggle="tab" aria-controls="berita">Berita Lainnya</a>
		</li>
	</ul>
</div>
	<div class="tab-content">
		<div role="tabpanel" class="tab-pane fade show active" id="info-umum" aria-labelledby="umum-tab">
<div class ="grid">
  <div class ="grid-left">
  <nav class='my-sticky'>
      <a href="#sejarah-prodi" class="section-anchor" :class="{'usu-bg-tertiary text-white': activeSection === $el.hash}">Sejarah Program Studi</a>
      <a href="#visi-misi" class="section-anchor" :class="{'usu-bg-tertiary text-white': activeSection === $el.hash}">Visi dan Misi</a>
	  <!-- <a href="#sasaran-strategi"  class="section-anchor" :class="{'usu-bg-tertiary text-white': activeSection === $el.hash}">Sasaran &amp; Strategi</a>  -->
      <a href="#fakta-prodi"  class="section-anchor" :class="{'usu-bg-tertiary text-white': activeSection === $el.hash}">Fakta Program Studi</a>
	  <a href="#sambutan-kaprodi"  class="section-anchor" :class="{'usu-bg-tertiary text-white': activeSection === $el.hash}">Sambutan Ketua Program Studi</a>
      <a href="#akreditasi-prestasi" class="section-anchor" :class="{'usu-bg-tertiary text-white': activeSection === $el.hash}">Akreditasi dan Prestasi</a>
      <a href="#prospek-karir" class="section-anchor" :class="{'usu-bg-tertiary text-white': activeSection === $el.hash}">Prospek Karir</a>
      <a href="#testimoni-alumni" class="section-anchor" :class="{'usu-bg-tertiary text-white': activeSection === $el.hash}">Testimoni Alumni</a>
      <!-- <a href="#bagan-struktur-organisasi" class="section-anchor" :class="{'usu-bg-tertiary text-white': activeSection === $el.hash}">Bagan Struktur Organisasi</a> -->
      <a href="#informasi-kontak" class="section-anchor" :class="{'usu-bg-tertiary text-white': activeSection === $el.hash}">Informasi Kontak</a>
</nav>
</div>
<div class ="grid-right">
          <div class="container mt-5">
				  <div class="content mb-5">
					<figure class="prodi-yt">
					<iframe width="600" height="315" src="https://www.youtube.com/embed/t0Xmi2NpeIA"  allow="autoplay" title="Fakultas Mipa, Universitas Sumatera Utara" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
					</figure>
				  </div>
				</div>
<section id="sejarah-prodi" class="timeline">
        <h2 class="lined-title">
            <span>Sejarah Program Studi</span>
        </h2>
      <ul>
        <li>
        <div>
                <time>1971</time>Berdiri sejak tahun 1971 di mana masih berupa Program Spesialis Notariat, departemen kami merupakan salah satu Program Magister Kenotariatan tertua di Indonesia yang berada di luar pulau Jawa.
            </div>
        </li>
	    </ul>
</section>
<section id="visi-misi" class="vision mt-5"  x-intersect.margin.-225px.0px.-70%.0px="activeSection = '#' + $el.id">
	<h2 class="lined-title">
		<span>Visi</span>
	</h2>
	  <p class="container mt-5 h5 text-center">
    Menjadi Program Studi yang berkualitas unggulan yang lulusannya trampil dalam pembuatan akta, memiliki keahlian Kenotariatan yang berkaitan dengan praktek kenotariatan, bermoral dan profesional pada era globalisasi
    </p>
	<div class="missions">
    <div class="container">
        <h1 class="lined-title3">
            <span>Misi</span>
        </h1>
		<div class="d-block d-sm-flex justify-content-center flex-wrap p-2">
    <div class="academic-flex">
			<div class="d-flex justify-content-center">
			<img src="https://api.iconify.design/fa-solid:user-tie.svg?color=white&width=60px"/>
               </div>
			  <h2 style="text-align:center">Profesional</h2>
			  <p style="text-align:center">
        Meningkatkan kapasitas peserta didik sehingga menghasilkan lulusan yang profesional di bidang kenotariatan dan menjadi pejabat publik (Notaris dan PPAT) yang handal dan kompetitif
      </p>
			</div>
			<div class="academic-flex">
			<div class="d-flex justify-content-center">
			<img src="https://api.iconify.design/game-icons:teacher.svg?color=white&width=60px"/>
               </div>
			  <h2  style="text-align:center">Kompetensi Pendidik</h2>
			  <p style="text-align:center">
        Meningkatkan kapasitas dan kompetensi para pendidik sehingga mampu mendidik dan menghasilkan lulusan yang profesional dan berkompeten sehingga mampu menjadi pejabat publik (Notaris dan PPAT) yang handal dan  kompetitif.
  		  </p>
			</div>
			<div class="academic-flex">
			<div class="d-flex justify-content-center">
			<img src="https://api.iconify.design/fluent:building-bank-16-regular.svg?color=white&width=60px"/>
               </div>
			  <h2  style="text-align:center">Sarana &amp; Prasarana</h2>
			  <p style="text-align:center">
        Meningkatkan mutu penyelenggaraan pendidikan psikologi kenotariatan dengan membangun sarana dan prasarana yang dapat mengoptimalisasi semua sumber daya yang ada untuk menghasilkan lulusan yang handal, bertanggung jawab, memiliki integritas dan moralitas tinggi.
  			</p>
			</div>
			<div class="academic-flex">
			<div class="d-flex justify-content-center">
			<img src="https://api.iconify.design/fa6-solid:handshake-angle.svg?color=white&width=60px"/>
               </div>
			  <h2  style="text-align:center">Kerjasama</h2>
			  <p style="text-align:center">
        Memperluas jalinan kerjasama dengan berbagai lembaga nasional, regional maupun internasional yang relevan dalam rangka pengembangan institusional
        </p>
			</div>
      <div class="academic-flex">
			<div class="d-flex justify-content-center">
			<img src="https://api.iconify.design/game-icons:archive-research.svg?color=white&width=60px"/>
               </div>
			  <h2  style="text-align:center">Penelitian</h2>
			  <p style="text-align:center">
        Mengembangkan penelitian psikologi dalam bidang kenotariatan, pertanahan dan psikologi bisnis sesuai dengan perkembangan masyarakat dan dinamika psikologi dalam bidang praktek kenotariatan dan pertanahan sebagai upaya untuk meningkatkan mutu pendidik dan peserta didik sehingga mampu memberikan kontribusi yang lebih tinggi dalam pembangunan psikologi nasional.
        </p>
			</div>
      <div class="academic-flex">
			<div class="d-flex justify-content-center">
			<img src="https://api.iconify.design/medical-icon:i-social-services.svg?color=white&width=60px"/>
               </div>
			  <h2  style="text-align:center">Pengabdian Masyarakat</h2>
			  <p style="text-align:center">
        Menyelenggarakan kegiatan pengabdian masyarakat untuk meningkatkan pengetahuan masyarakat akan norma-norma psikologi khususnya yang berkaitan dengan kenotariatan dan pertanahan yang berlaku dan mendorong masyarakat untuk memiliki budaya psikologi yang lebih baik.
        </p>
			</div>
		</div>
  </div>
</div>
<!-- <div class="vision mt-5">
        <h2 class="lined-title">
            <span>Tujuan</span>
        </h2>
        <ul>
            <li class="container-xl h5 fw-normal lh-lg mt-5 px-4">
            Menghasilkan lulusan yang memiliki capaian pembelajaran dan daya saing di bidang psikologi sesuai dengan perkembangan psikologi nasional dan internasional.
          </li>
            <li class="container-xl h5 fw-normal lh-lg mt-7 px-4">
            Memaksimalkan hasil transfer of knowledge dalam proses belajar mengajar.
            </li>
            <li class="container-xl h5 fw-normal lh-lg mt-7 px-4">
            Meningkatkan kemampuan, keterampilan, dan wawasan berpikir sivitas akademika untuk memecahkan persoalan psikologi baik di tingkat nasional maupun internasional, dalam upaya mewujudkan visi USU menjadi universitas yang memiliki keunggulan akademik sebagai barometer kemajuan ilmu pengetahuan yang mampu bersaing dalam tataran dunia global.
            </li>
            <li class="container-xl h5 fw-normal lh-lg mt-7 px-4">
            Memaksimalkan peran Dosen dan mahasiswa dalam kegiatan Penelitian, sebagai upaya pengembangan keilmuan psikologi pada masyarakat Indonesia dan masyarakat Global.
            </li>
            <li class="container-xl h5 fw-normal lh-lg mt-7 px-4">
            Meningkatkan peran serta sivitas akademika dalam kegiatan Pengabdian pada masyarakat, agar keberadaan Fakultas psikologi USU dapat dirasakan  manfaatnya oleh masyarakat Indonesia pada umumnya, khususnya masyarakat Sumatera Utara.
            </li>
        </ul>
</div> -->
</section>
<section id="fakta-prodi" class="container researches" x-intersect.margin.-225px.0px.-70%.0px="activeSection = '#' + $el.id">
   <h2 class="lined-title">
		<span>Fakta Program Studi</span>
	</h2>
    <div class="research-numbers-prodi">
    <div class="research-number-container">
        <div class="icon">
        <div class="rounded-circle usu-bg-light-gray p-3">
            <img style="width: 50px; height: 50px" src="{{ asset('images/icons/hook.png') }}" alt="Tahun Berdiri" />
          </div>
        </div>
        <div>
          <b>Tahun Berdiri</b>
          <div>1971</div>
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
          <div>-</div>
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
          <div>-</div>
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
          <div>-</div>
        </div>
      </div>
	  <div class="research-number-container">
        <div class="icon">
        <div class="rounded-circle usu-bg-light-gray p-3">
            <img style="width: 50px; height: 50px" src="{{ asset('images/icons/program.png') }}" alt="Jurnal Internasional" />
          </div>
        </div>
        <div>
          <b>Jumlah Mata Kuliah</b>
          <div>-</div>
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
          <div>-</div>
        </div>
      </div>
  </section>
<section class="dekan container" id="sambutan-kaprodi" x-intersect.margin.-225px.0px.-70%.0px="activeSection = '#' + $el.id">
    <div class="dean">
        <p>
            <img class="image_resized" style="width:100%;" src="https://konten.usu.ac.id/storage/satker/15/statis/kaprodi-s2-kenotariatan.png">
        </p>
        <div class="desc">
            <div class="name">
                <h1>Sambutan Ketua Program Studi</h1>
            </div>
            <!-- <p>
                <strong>Tagline Prodi</strong>
            </p> -->
            <!-- <p>
			<b>Salam Komunikasi </b><br>
			Informasi adalah bagian penting dalam kehidupan manusia. Informasi yang cepat, tepat
			dan akurat sangat diperlukan untuk menambah pengetahuan , melengkapi data dan membangun
			citra lembaga.. Salah satu upaya yang dilakukan adalah membuat Web site lembaga/organisasi.
			Web site Prodi komunikasi berisi tentang berbagai hal seperti , profil prodi yang terkait dengan
			sejarah, visi, misi , mahasiswa, dosen, kurikulum , alumni dan sebagainya. Informasi tersebut
			dimaksudkan agar individu dan masyarakat bias lebih mengenal Prodi Komunikasi dengan lebih
			dalam dan lengkap. Selain itu informasi dalam Web site diharapkan bermanfaat bagi lembaga
			lain yang berniat menjalin hubungan atau kerjasama. Semoga keberadaan Web Site ini
			membawa manfaat bagi kita semua.
            </p> -->
            <div class="flex-keterangan-belum-ada-data mt-5">
								<p class="keterangan-belum-ada-data">Belum Ada Data</p>
							</div>
        </div>
    </div>
</section>
<section id ="akreditasi-prestasi" class="akreditasi" x-intersect.margin.-225px.0px.-70%.0px="activeSection = '#' + $el.id">
    <div class="container">
		<div class="akreditasi-list">
			<div class="kontenakreditasi">
			  <h2>Program Magister Kenotariatan</h2>
			  <h1>Terakreditasi B</h1>
			  <p><i>No. 63/SK/BAN-PT/Akred/M/I/2018</i></p>
			</div>
			<div class="kontenakreditasi-link">
			<div class="icon">
			<a href="#sertifikat-akreditasi-s2-kenotariatan">
			<i class="fa fa-external-link fl-right fa-2x"></i>
			</a>
			</div>
			</div>
		</div>
    </div>
	<!-- sertifikat akreditasi -->
<div class ="pop-up" id="sertifikat-akreditasi-s2-kenotariatan">
		<div class="popup-container">
				<div class="judul-hr-bgputih">
				<p>
					<a class="popup-close" href="#closed">X</a>
				</p>
						<h3>
							Akreditasi Program Studi S-2 Kenotariatan USU
						</h3>
					</div>
					<div class="gambar-popup">
					<img src="https://konten.usu.ac.id/storage/satker/15/statis/sertifikat-akreditasi-s2-kenotariatan.jpeg">
					</div>
		</div>
	</div>
</section>
<section id ="prospek-karir" class="vision mt-5" x-intersect.margin.-225px.0px.-70%.0px="activeSection = '#' + $el.id">
	<h1 class="lined-title">
		<span>Prospek Karir</span>
	</h1>
  <p style ="text-align:center" class="container mt-5 h5">
	Prospek karir setelah lulus dari program studi S-2 Kenotariatan sangatlah menjanjikan. Berikut ini adalah prospek karirnya:
	</p>
	<div class ="prospek">
	 <div class="program-sarjana container">
	 <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
     <div class="carousel-inner">
     <div class="carousel-item active">
	<div class="tombol-prospek">
		<div class="tombol">
            <div class="button button-prospek"> Notaris</div>
          </div>
		  <div class="tombol">
            <div class="button button-prospek">Staf legal</div>
          </div>
		  <div class="tombol">
            <div class="button button-prospek"> Konsultan psikologi </div>
          </div>


  		</div>
		  </div>
            <div class="carousel-item">
			<div class="tombol-prospek">

      <div class="tombol">
            <div class="button button-prospek">Dosen psikologi</div>
          </div>
		   <div class="tombol">
            <div class="button button-prospek">Peneliti psikologi</div>
          </div>
		   <div class="tombol">
            <div class="button button-prospek">Aktivis</div>
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
		</div>
</div>
</div>
</section>
<section id="testimoni-alumni" class="testimoni"  x-intersect.margin.-225px.0px.-70%.0px="activeSection = '#' + $el.id">
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
			Assalamualaikum Wr. Wb.<br>
			Saya Lucky Andriansyah, S. Ikom., Alumni Kenotariatan stambuk 2014. Saat ini saya
			bekerja sebagai Pranata Humas di Kementerian Agama Provinsi Jawa Barat.
			Sebuah kebanggaan tersendiri bagi saya menjadi Alumni Kenotariatan yang saat ini
			semakin melebarkan sayapnya di Universitas Sumatera Utara.<br>
			Sebagai lulusan dari Sumatera saya merasa tidak kalah saing dengan lulusan-lulusan
			Universitas di Jawa, karna Kenotariatan-USU sendiri menciptakan dan mempersiapkan
			alumni-alumninya untuk mampu bersaing dengan Universitas yang ada di Indonesia. Mulai
			dari dosennya yang mengikuti perkembangan zaman, metode penyampaian serta kreasi
			pemberian materi perkuliahan yang asik hingga mudah diterima dan organisasi-organisasi
			yang ada di Kenotariatan USU itu sangat membantu menunjang kreatifitas dan skill dari
			anggotanya loh!<br>
			Tak hanya itu, Kenotariatan-USU juga sangat mensupport mahasiswa untuk meraih
			prestasi dan mengembangkan potensi diri juga. Beberapa kali menjadi perwakilan Ilmu
			Komunikasi untuk berlomba di kancah Provinsi, Nasional maupun Internasional, sangat
			melekat jelas diingatan saya bagaimana support dari dosen, rekan maupun prodi Ilmu
			Komunikasi secara umum untuk prestasi-prestasi yang saya raih.<br>
			Terima kasih prodi Kenotariatan semoga semakin bersinar dan tetap berjaya!
		</p>
		</div>
        </div>
        <div class="grid-2">
          <img src="https://konten.usu.ac.id/storage/satker/15/statis/alumni1-prodi-s2-ilmu-komunikasi.jpg">
            <div class="grid-2-p">
              <h5>Lucky Andriansyah, S. Ikom.</h5>
              <br>
              <h6>(Mahasiswa S-1 Kenotariatan Angkatan 2014)</h6>
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
		Bagi saya yg memang tertarik dgn media dan komunikasi, mata kuliah yg ditawarkan di
		Prodi Kenotariatan USU sangat menyenangkan untuk dipelajari. Kurikulum prodi ilmu
		Komunikasi menggabungkan pembelajaran teori dan praktik sehingga saya sebagai
		mahasiswa memperoleh bekal ilmu yg cukup komprehensif. Saya sangat beruntung diberikan
		kesempatan untuk belajar lebih banyak dalam kajian penelitian Kenotariatan dari dosen-
		dosen prodi Kenotariatan terutama pada kajian dampak penggunaan media. Ilmu dan
		pengalaman yg saya dapatkan dari kajian penelitian ini sangat banyak manfaatnya bagi saya
		dalam pekerjaan saya sekarang sebagai content review analyst di Teleperformance Malaysia.
		</p>
		</div>
        </div>
        <div class="grid-2">
          <img src="https://konten.usu.ac.id/storage/satker/15/statis/alumni2-prodi-s2-ilmu-komunikasi.jpg">
            <div class="grid-2-p">
              <h5>Suci Andarini S I.kom</h5>
              <br>
              <h6>(Mahasiswa S-1 Kenotariatan Angkatan 2007)</h6>
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
		Sebagai salah satu alumni dari Prodi Kenotariatan Universitas Sumatera Utara, saya
		merasa bangga karena saat melakukan pembelajaran disana, saya mendapatkan beberapa
		bekal berupa ilmu akademik maupun non akademik yang dapat saya implementasikan dalam
		bersosialisasi dengan orang baru dan juga di dunia kerja.
		Prodi Kenotariatan Universitas Sumatera Utara juga menjadi wadah saya berekspresi
		dalam menginterpretasikan pelajaran yang saya dalami dalam jurusan ini, Didukung
		dengan adanya fasilitas dan dosen-dosen yang mementoring saya sehingga terbentuknya
		karakter mahasiswa sesuai dengan apa yang di tujukan.
		Besar harapan saya untuk Prodi Kenotariatan Universitas Utara kedepannya dapat selalu
		mempertahankan eksistensi dan kualitas yang dapat membentuk karakter mahasiswa-
		mahasiswanya dalam meraih kesuksesan
		</p>
		</div>
        </div>
        <div class="grid-2">
		<img src="https://konten.usu.ac.id/storage/satker/15/statis/alumni3-prodi-s2-ilmu-komunikasi.jpg">
            <div class="grid-2-p">
              <h5>Thiara Figlia Chandra, S.I.Kom.</h5>
              <br>
              <h6>(Mahasiswa S-1 Kenotariatan Angkatan 2016)</h6>
              <br>
              <div class="grid-2-star">
                <?php $i=1; while($i<=5){echo '<i class="fa-solid fa-star"></i>';$i++;}?>
              </div>
            </div>
        </div> -->
        <div class="flex-keterangan-belum-ada-data mt-5">
								<p class="keterangan-belum-ada-data">Belum Ada Data</p>
							</div>
      </div>
</section>
<!-- <section class="struktur-organisasi" id="bagan-struktur-organisasi"  x-intersect.margin.-225px.0px.-70%.0px="activeSection = '#' + $el.id">
<h1 class="lined-title">
		<span>Bagan Struktur Organisasi</span>
	</h1>
        <div class="container">
        <div class="div-tentang mt-5">
          <a href="https://drive.google.com/file/d/1KI-qT54yn2fX_dEheGqEWWUmdkb9kBhp/view" target="blank">
            <figure class="d-flex justify-content-center">
                <img class="images-bagan" src="https://konten.usu.ac.id/storage/satker/15/statis/struktur-organisasi-prodi-s2-ilmu-komunikasi.jpg" title="Struktur Organisasi" alt="Struktur Organisasi">
            </figure>
          </a>
        </div>
    </div>
    </section> -->
<!-- gambarprodi -->
<!-- <div class="footer-panorama-prodi container">
    <img src="https://konten.usu.ac.id/storage/satker/15/statis/gedung-prodi-s2-kenotariatan.jpg  " alt="Panorama" />
  </div> -->
<section id = "informasi-kontak" class="info mt-3" x-intersect.margin.-225px.0px.-70%.0px="activeSection = '#' + $el.id">
    <h1 class="lined-title">
		<span>Informasi Kontak</span>
	</h1>
    <div class="info-kontak">
        <p>
            <b>
                Program Studi Magister Kenotariatan
                <br>Universitas Sumatera Utara<br>
            </b>
            <br>
            <i class="fa-solid fa-location-crosshairs"></i>
            Jl. Universitas No.4 Kampus USU Padang Bulan <br>
			      Kec. Medan Baru, Kota Medan, Sumatera Utara 20155 <br>
            <br>
            <!-- <i class="fa-solid fa-envelope"></i>
            <a href="mailto: prodi.s2ilmukomunikasi@usu.ac.id">prodi.s2ilmukomunikasi@usu.ac.id</a><br>
            <table class ="info-kontak-tabel">
            <tr>
            <td>
              <i class="fa-solid fa-phone"></i> <a href="tel:0618211965" target="_blank">0618211965</a>
            </td>
			<td>
              <i class="fa-brands fa-facebook"></i> <a href="https://www.facebook.com/komunikasi.usu.5?mibextid=ZbWKwL" target="_blank">Komunikasi fpsi USU</a>
            </td>
            </tr>
            <tr>
              <td>
                <i class="fa-solid fa-globe"></i> <a href="https://fpsi.usu.ac.id" target="_blank">fpsi.usu.ac.id</a>
              </td>
			  <td>
                <i class="fa-brands fa-instagram"></i> <a href="https://instagram.com/komunikasi.usu?igshid=MDM4ZDc5MmU=" target="_blank">komunikasi.usu</a>
              </td>
          </tr>
          </table> -->
        </p>
    </div>
               <div class="flex-keterangan-belum-ada-data">
								<p class="keterangan-belum-ada-data">Belum Ada Data</p>
							</div>
</section>
</div>
</div>
</div>
<!-- tab kedua -->
<div role="tabpanel" class="tab-pane fade" id="kurikulum" aria-labelledby="kurikulum-tab">
<div class ="grid">
  <div class ="grid-left">
  <nav class='my-sticky'>
         		 <a href="#jadwal-kuliah" class="section-anchor"  :class="{'usu-bg-tertiary text-white': activeSection === $el.hash}">Jadwal Kuliah</a>
				  <a href="#kurikulum-prodi" class="section-anchor"  :class="{'usu-bg-tertiary text-white': activeSection === $el.hash}">Kurikulum</a>
				  <a href="#peminatan" class="section-anchor"  :class="{'usu-bg-tertiary text-white': activeSection === $el.hash}">Peminatan</a>
				  <a href="#topik-riset" class="section-anchor"  :class="{'usu-bg-tertiary text-white': activeSection === $el.hash}">Topik Riset</a>
				  <!-- <a href="#daftar-penelitian" class="section-anchor"  :class="{'usu-bg-tertiary text-white': activeSection === $el.hash}">Daftar Penelitian</a> -->
				  <a href="#capaian-pembelajaran" class="section-anchor"  :class="{'usu-bg-tertiary text-white': activeSection === $el.hash}">Capaian Pembelajaran Lulusan</a>
				  <a href="#biaya-studi" class="section-anchor"  :class="{'usu-bg-tertiary text-white': activeSection === $el.hash}">Biaya Studi</a>
</nav>
</div>
<div class ="grid-right">
<section id = "jadwal-kuliah" class="vision mt-5" x-intersect.margin.-225px.0px.-70%.0px="activeSection = '#' + $el.id">
					<h2 class="lined-title">
					<span>Jadwal Kuliah</span>
					</h2>
					<p class="container mt-5 h5">
					Berikut ini adalah jadwal kuliah yang ada di Program Studi S-2 Kenotariatan fpsi, Universitas Sumatera Utara :
					</p>
					<!-- <div class="container mt-5">
					  <div class="content mb-5">
						<figure class="prodi-ytube">
						  <iframe src="https://drive.google.com/uc?export=view&id=12jxy66sTA5kIPdNyn1YgCotUV6RM4ckO&embedded=true" frameborder="0" height="500px" width="100%">
						  </iframe>
						</figure>
					  </div>
					</div> -->
							<div class="flex-keterangan-belum-ada-data">
								<p class="keterangan-belum-ada-data">Belum terdapat file</p>
							</div>
</section>
<section id="kurikulum-prodi" class="vision mt-5" x-intersect.margin.-225px.0px.-70%.0px="activeSection = '#' + $el.id">
<div class="container">
					<h2 class="lined-title">
					<span>Kurikulum</span>
					</h2>
							<br>
							<div class="flex-keterangan-belum-ada-data">
								<p class="keterangan-belum-ada-data">belum ada data</p>
							</div>
					<!-- <p class="container mt-5 h5">
					Berikut ini adalah rincian kurikulum yang terdapat pada program studi S-1 Kenotariatan :
					</p>
					<nav class="accordion arrows">
        <input type="radio" name="accordion" id="cb1" />
        <section class="accord">
            <label class="accord-title" for="cb1">Semester 1</label>
            <label class="accord-close" for="acc-close"></label>
            <div class="accord-content">
            <p class = "kode-matkul">UNI 1 206</p>
            <h6>Pendidikan Kewarganegaraan, Pancasila &amp; Anti Korupsi</h6><p class ="number-sks">3</p><p class ="sks">SKS</p>
            </div>
            <div class="accord-content">
            <p class = "kode-matkul">UNI 1 207</p>
            <h6>Bahasa Indonesia</h6><p class ="number-sks">2</p><p class ="sks">SKS</p>
          </div>
            <div class="accord-content">
            <p class = "kode-matkul">UNI 1 208</p>
            <h6>Bahasa Inggris</h6><p class ="number-sks">2</p><p class ="sks">SKS</p>
            </div>
            <div class="accord-content">
            <p class = "kode-matkul">UNI 1 209</p>
            <h6>Etika</h6><p class ="number-sks">2</p><p class ="sks">SKS</p>
            </div>
            <div class="accord-content">
            <p class = "kode-matkul">ANT 1 201</p>
            <h6>Pengantar Antropologi</h6><p class ="number-sks">3</p><p class ="sks">SKS</p>
            </div>
            <div class="accord-content">
            <p class = "kode-matkul">POL 1 201</p>
            <h6>Pengantar Ilmu Politik</h6><p class ="number-sks">3</p><p class ="sks">SKS</p>
            </div>
            <div class="accord-content">
            <p class = "kode-matkul">SOS 1 201</p>
            <h6>Pengantar Ilmu Sosiologi</h6><p class ="number-sks">3</p><p class ="sks">SKS</p>
            </div>
            <div class="accord-content">
            <p class = "kode-matkul">KSI 1 200</p>
            <h6>Pengantar Kenotariatan</h6><p class ="number-sks">3</p><p class ="sks">SKS</p>
            </div>
        </section>
        <input type="radio" name="accordion" id="cb2" />
        <section class="accord">
            <label class="accord-title" for="cb2">Semester 2</label>
            <label class="accord-close" for="acc-close"></label>
			<div class="accord-content">
            <p class = "kode-matkul">UNI 1 201</p>
             <h6>Agama Islam</h6><p class ="number-sks">2</p><p class ="sks">SKS</p>
             <br>
             <p class = "kode-matkul">UNI 1 202</p>
             <h6>Agama Kristen Katolik</h6><p class ="number-sks">2</p><p class ="sks">SKS</p>
             <br>
             <p class = "kode-matkul">UNI 1 203</p>
             <h6>Agama Kristen Prostetan</h6><p class ="number-sks">2</p><p class ="sks">SKS</p>
             <br>
             <p class = "kode-matkul">UNI 1 204</p>
             <h6>Agama Buddha</h6><p class ="number-sks">2</p><p class ="sks">SKS</p>
             <br>
             <p class = "kode-matkul">UNI 1 205</p>
             <h6>Agama Hindu</h6><p class ="number-sks">2</p><p class ="sks">SKS</p>
             <br>
            <div class="accord-content">
            <p class = "kode-matkul">KSI 1 201</p>
             <h6>Creative Thinking</h6><p class ="number-sks">3</p><p class ="sks">SKS</p>
            </div>
            <div class="accord-content">
            <p class = "kode-matkul">KSI 1 202</p>
            <h6>Pengantar Statistik Sosial</h6><p class ="number-sks">3</p><p class ="sks">SKS</p>
            </div>
            <div class="accord-content">
            <p class = "kode-matkul">KSI 1 203</p>
            <h6>Pengantar Psikologi Sosial</h6><p class ="number-sks">3</p><p class ="sks">SKS</p>
          </div>
            <div class="accord-content">
            <p class = "kode-matkul">KSI 1 204</p>
            <h6>Teori Komunikasi</h6><p class ="number-sks">3</p><p class ="sks">SKS</p>
            </div>
            <div class="accord-content">
            <p class = "kode-matkul">KSI 1 205</p>
            <h6>Keterampilan Berkomunikasi 1 (listening dan reading)</h6><p class ="number-sks">3</p><p class ="sks">SKS</p>
            </div>
            <div class="accord-content">
            <p class = "kode-matkul">FAK 1 212</p>
            <h6>Kewirausahaan</h6><p class ="number-sks">3</p><p class ="sks">SKS</p>
            </div>
        </section>
        <input type="radio" name="accordion" id="cb3" />
        <section class="accord">
            <label class="accord-title" for="cb3">Semester 3</label>
            <label class="accord-close" for="acc-close"></label>
            <div class="accord-content">
            <p class = "kode-matkul">KSI 2 300</p>
             <h6>Metode Penelitian Sosial (MPS)</h6><p class ="number-sks">3</p><p class ="sks">SKS</p>
            </div>
            <div class="accord-content">
            <p class = "kode-matkul">KSI 2 301</p>
            <h6>Fotografi</h6><p class ="number-sks">3</p><p class ="sks">SKS</p>
            </div>
            <div class="accord-content">
            <p class = "kode-matkul">KSI 2 302</p>
            <h6>Perkembangan Teknologi Komunikasi dan New Media</h6><p class ="number-sks">3</p><p class ="sks">SKS</p>
          </div>
            <div class="accord-content">
            <p class = "kode-matkul">KSI 2 303</p>
            <h6>Keterampilan Berkomunikasi II (Speaking dan Writing)</h6><p class ="number-sks">3</p><p class ="sks">SKS</p>
            </div>
            <div class="accord-content">
            <p class = "kode-matkul">KSI 2 304</p>
            <h6>Komunikasi Antarpribadi</h6><p class ="number-sks">3</p><p class ="sks">SKS</p>
            </div>
            <div class="accord-content">
            <p class = "kode-matkul">KSI 2 305</p>
            <h6>Desain Grafis</h6><p class ="number-sks">3</p><p class ="sks">SKS</p>
            </div>
            <div class="accord-content">
            <p class = "kode-matkul">KSI 2 306</p>
            <h6>Psikologi Komunikasi</h6><p class ="number-sks">3</p><p class ="sks">SKS</p>
            </div>
        </section>
        <input type="radio" name="accordion" id="cb4" />
        <section class="accord">
            <label class="accord-title" for="cb4">Semester 4</label>
            <label class="accord-close" for="acc-close"></label>
            <div class="accord-content">
            <p class = "kode-matkul">KSI 2 307</p>
             <h6>Komunikasi Lintas Budaya</h6><p class ="number-sks">3</p><p class ="sks">SKS</p>
            </div>
            <div class="accord-content">
            <p class = "kode-matkul">KSI 2 308</p>
            <h6>Metode Penelitian Komunikasi (Kuantitatif)</h6><p class ="number-sks">3</p><p class ="sks">SKS</p>
            </div>
            <div class="accord-content">
            <p class = "kode-matkul">KSI 2 309</p>
            <h6>Komunikasi Massa</h6><p class ="number-sks">3</p><p class ="sks">SKS</p>
          </div>
            <div class="accord-content">
            <p class = "kode-matkul">KSI 2 310</p>
            <h6>Komunikasi Organisasi</h6><p class ="number-sks">3</p><p class ="sks">SKS</p>
            </div>
            <div class="accord-content">
            <p class = "kode-matkul">KSI 2 311</p>
            <h6>Perencanaan dan Audit Komunikasi</h6><p class ="number-sks">3</p><p class ="sks">SKS</p>
            </div>
            <div class="accord-content">
            <p class = "kode-matkul">KSI 2 312</p>
            <h6>Komunikasi Pembangunan dan Penyuluhan</h6><p class ="number-sks">3</p><p class ="sks">SKS</p>
            </div>
            <div class="accord-content">
            <p class = "kode-matkul">KSI 2 313</p>
            <h6>Integrated Marketing Communication (IMC)</h6><p class ="number-sks">3</p><p class ="sks">SKS</p>
            </div>
        </section>
        <input type="radio" name="accordion" id="cb5" />
        <section class="accord">
            <label class="accord-title" for="cb5">Semester 5</label>
            <label class="accord-close" for="acc-close"></label>
            <div class="accord-content">
            <p class = "kode-matkul">KSI 3 400</p>
             <h6>Komunikasi Politik</h6><p class ="number-sks">3</p><p class ="sks">SKS</p>
            </div>
            <div class="accord-content">
            <p class = "kode-matkul">KSI 3 401</p>
            <h6>Metode Penelitian Komunikasi II (Kualitatif)</h6><p class ="number-sks">3</p><p class ="sks">SKS</p>
            </div>
            <div class="accord-content">
            <p class = "kode-matkul">KSI 3 402</p>
            <h6>Sosiologi Komunikasi</h6><p class ="number-sks">3</p><p class ="sks">SKS</p>
          </div>
            <div class="accord-content">
            <p class = "kode-matkul">KSI 3 403</p>
            <h6>psikologi dan Etika Media Massa</h6><p class ="number-sks">3</p><p class ="sks">SKS</p>
            </div>
            <div class="accord-content">
            <p class = "kode-matkul">KSI 3 404</p>
            <h6>Etika dan Filsafat Komunikasi</h6><p class ="number-sks">3</p><p class ="sks">SKS</p>
            </div>
            <div class="accord-content">
            <p class = "kode-matkul">KSI 3 405</p>
            <h6>Pendapat Umum</h6><p class ="number-sks">2</p><p class ="sks">SKS</p>
            </div>
            <div class="accord-content">
            <p class = "kode-matkul">KSI 3 406</p>
            <h6>Media, Masyarakat dan Media Literasi</h6><p class ="number-sks">3</p><p class ="sks">SKS</p>
            </div>
        </section>
        <input type="radio" name="accordion" id="cb6" />
        <section class="accord">
            <label class="accord-title" for="cb6">Semester 6</label>
            <label class="accord-close" for="acc-close"></label>
            <p class="mata-kuliah-pilihan">Konsentrasi Public Relations</p>
            <div class="accord-content">
            <p class = "kode-matkul">KPR 3 410</p>
            <h6>Dasar-Dasar Public Relations (PRs)</h6><p class ="number-sks">3</p><p class ="sks">SKS</p>
            </div>
            <div class="accord-content">
            <p class = "kode-matkul">KPR 3 411</p>
            <h6>Publisitas</h6><p class ="number-sks">3</p><p class ="sks">SKS</p>
          </div>
            <div class="accord-content">
            <p class = "kode-matkul">KPR 3 412</p>
            <h6>Seminar Proposal</h6><p class ="number-sks">2</p><p class ="sks">SKS</p>
            </div>
            <div class="accord-content">
            <p class = "kode-matkul">KPR 3 413</p>
            <h6>Praktikum Kenotariatan</h6><p class ="number-sks">3</p><p class ="sks">SKS</p>
            </div>
            <div class="accord-content">
            <p class = "kode-matkul">KPR 3 414</p>
            <h6>Event Organizer</h6><p class ="number-sks">3</p><p class ="sks">SKS</p>
            </div>
            <div class="accord-content">
            <p class = "kode-matkul">KPR 3 415</p>
            <h6>Teknik Negosiasi dan Lobbying</h6><p class ="number-sks">3</p><p class ="sks">SKS</p>
            </div>
			<p class="mata-kuliah-pilihan">Konsentrasi Jurnalistik</p>
            <div class="accord-content">
            <p class = "kode-matkul">KSJ 4 410</p>
            <h6>Jurnalistik Media Cetak</h6><p class ="number-sks">3</p><p class ="sks">SKS</p>
            </div>
            <div class="accord-content">
            <p class = "kode-matkul">KSJ 4 411</p>
            <h6>Seminar Proposal</h6><p class ="number-sks">2</p><p class ="sks">SKS</p>
          </div>
            <div class="accord-content">
            <p class = "kode-matkul">KSJ 4 412</p>
            <h6>Manajemen Media Massa (Cetak+Siar)</h6><p class ="number-sks">3</p><p class ="sks">SKS</p>
            </div>
            <div class="accord-content">
            <p class = "kode-matkul">KSJ 4 413</p>
            <h6>Jurnalistik Media Siar</h6><p class ="number-sks">3</p><p class ="sks">SKS</p>
            </div>
            <div class="accord-content">
            <p class = "kode-matkul">KSJ 4 414</p>
            <h6>Praktikum Kenotariatan</h6><p class ="number-sks">3</p><p class ="sks">SKS</p>
            </div>
            <div class="accord-content">
            <p class = "kode-matkul">KSJ 4 415</p>
            <h6>Menulis Feature &amp; Editorial</h6><p class ="number-sks">3</p><p class ="sks">SKS</p>
            </div>
			<p class="mata-kuliah-pilihan">Konsentrasi Periklanan</p>
            <div class="accord-content">
            <p class = "kode-matkul">KSJ 4 410</p>
            <h6>Jurnalistik Media Cetak</h6><p class ="number-sks">3</p><p class ="sks">SKS</p>
            </div>
            <div class="accord-content">
            <p class = "kode-matkul">KSJ 4 411</p>
            <h6>Seminar Proposal</h6><p class ="number-sks">2</p><p class ="sks">SKS</p>
          </div>
            <div class="accord-content">
            <p class = "kode-matkul">KSJ 4 412</p>
            <h6>Manajemen Media Massa (Cetak+Siar)</h6><p class ="number-sks">3</p><p class ="sks">SKS</p>
            </div>
            <div class="accord-content">
            <p class = "kode-matkul">KSJ 4 413</p>
            <h6>Jurnalistik Media Siar</h6><p class ="number-sks">3</p><p class ="sks">SKS</p>
            </div>
            <div class="accord-content">
            <p class = "kode-matkul">KSJ 4 414</p>
            <h6>Praktikum Kenotariatan</h6><p class ="number-sks">3</p><p class ="sks">SKS</p>
            </div>
            <div class="accord-content">
            <p class = "kode-matkul">KSJ 4 415</p>
            <h6>Menulis Feature &amp; Editorial</h6><p class ="number-sks">3</p><p class ="sks">SKS</p>
            </div>
        </section>
        <input type="radio" name="accordion" id="cb7" />
        <section class="accord">
            <label class="accord-title" for="cb7">Semester 7</label>
            <label class="accord-close" for="acc-close"></label>
			<p class="mata-kuliah-pilihan">Konsentrasi Public Relations</p>
            <div class="accord-content">
            <p class = "kode-matkul">KPR 4 500</p>
             <h6>PKL Public Relations</h6><p class ="number-sks">3</p><p class ="sks">SKS</p>
            </div>
            <div class="accord-content">
            <p class = "kode-matkul">KPR 4 501</p>
            <h6>Teknik-Teknik Public Relations (PRs)</h6><p class ="number-sks">3</p><p class ="sks">SKS</p>
            </div>
			<p class="mata-kuliah-pilihan">Konsentrasi Jurnalistik</p>
            <div class="accord-content">
            <p class = "kode-matkul">KSJ 4 500</p>
             <h6>PKL Jurnalistik</h6><p class ="number-sks">3</p><p class ="sks">SKS</p>
            </div>
            <div class="accord-content">
            <p class = "kode-matkul">KSJ 4 501</p>
            <h6>Jurnalisme Investigasi</h6><p class ="number-sks">3</p><p class ="sks">SKS</p>
            </div>
			<p class="mata-kuliah-pilihan">Konsentrasi Periklanan</p>
            <div class="accord-content">
            <p class = "kode-matkul">KSP 4 500</p>
             <h6>Perencanaan Media (Media Buying dan Media Placement)</h6><p class ="number-sks">3</p><p class ="sks">SKS</p>
            </div>
            <div class="accord-content">
            <p class = "kode-matkul">KSP 4 501</p>
            <h6>PKL Periklanan</h6><p class ="number-sks">3</p><p class ="sks">SKS</p>
            </div>
        </section>
        <input type="radio" name="accordion" id="cb8" />
        <section class="accord">
            <label class="accord-title" for="cb8">Semester 8</label>
            <label class="accord-close" for="acc-close"></label>
            <div class="accord-content">
            <p class = "kode-matkul">KSI 4 510</p>
            <h6>Skripsi</h6><p class ="number-sks">4</p><p class ="sks">SKS</p>
            </div>
        </section>
        <input type="radio" name="accordion" id="acc-close" />
    </nav> -->
</div>
</section>
<section id="peminatan" class="vision mt-5" x-intersect.margin.-225px.0px.-70%.0px="activeSection = '#' + $el.id">
	<div class="container">
	<h2 class="lined-title">
		<span>Peminatan</span>
	</h2>
    <div class="kelompok-keilmuan">
      <div class="slider">
        <div class="container-kelompok-keilmuan">
        <div class="item-kelompok-keilmuan item-keilmuan-active" data-toggle="modal" data-target="#ShowModal1">
        <img src="https://konten.usu.ac.id/storage/satker/15/statis/ppat.png" alt="">
          <p>Pejabat Publik (Notaris dan PPAT)</p>
        </div>
    		<div class="item-kelompok-keilmuan item-keilmuan-active" data-toggle="modal" data-target="#ShowModal2">
            <img src="https://konten.usu.ac.id/storage/satker/15/statis/konsultan-psikologi.jpg" alt="">
          <p>Konsultan psikologi</p>
        </div>
      </div>
    </div>
    </div>
      <div class="modal fade" id="ShowModal1" tabindex="-1" aria-labelledby="ShowModalLabel" style="display: none;" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered"><div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="ShowModalLabel">Pejabat Publik (Notaris dan PPAT)</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">X</span>
        </button></div><div class="modal-body modal-body-bidang-keilmuan">
          <img src="https://konten.usu.ac.id/storage/satker/15/statis/ppat.png" alt="">
          <p>
          Pejabat publik yang handal dalam pembuatan akta-akta autentik dalam bidang psikologi bisnis, psikologi pertanahan, dan akta-akta risalah lelang
          </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="ShowModal2" tabindex="-1" aria-labelledby="ShowModalLabel" style="display: none;" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered"><div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="ShowModalLabel">Konsultan psikologi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">X</span>
        </button></div><div class="modal-body modal-body-bidang-keilmuan">
          <img src="https://konten.usu.ac.id/storage/satker/15/statis/konsultan-psikologi.jpg" alt="">
          <p>
          Konsultan psikologi khususnya dalam bidang psikologi bisnis, psikologi pertanahan, dan lelang. Mampu memberikan penyuluhan psikologi, menengahi permasalahan psikologi para pihak, contract drafter, contract analisis, serta sebagai inhouse psychologyyer khususnya dalam bidang perusahaan, pertanahan dan kontrak
          </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
</section>
<section id="topik-riset" class="vision mt-5" x-intersect.margin.-225px.0px.-70%.0px="activeSection = '#' + $el.id">
	<div class="container">
	<h2 class="lined-title">
		<span>Topik Riset</span>
	</h2>
	  <!-- <p class="container mt-5 h5 text-justify">
    Berikut ini adalah topik dan riset yang ada pada Program Studi S-1 Ilmu Politik :
    </p> -->
					<!-- <div class="topik-riset">
						<div>
							<a href="#"><img src="{{ url('https://konten.usu.ac.id/storage/satker/21/statis/topik-riset-s2-matematika1.jpg') }}" /></a>
							<div class="hover">Riset Operasi<br> <p class="sub-hover">-  artikel</p></div>
							<div class="hide">
              				<p>
							  <div class="flex-keterangan-belum-ada-data2">
								<p class="keterangan-belum-ada-data">belum ada keterangan</p>
							</div>
							</p>
							</div>
						 </div>
            <div>
							<a href="#"><img src="{{ url('https://konten.usu.ac.id/storage/satker/21/statis/topik-riset-s2-matematika2.jpg') }}" /></a>
							<div>
              <div class="hover">Statistika<p class="sub-hover">-  artikel</p></div>
							<div class="hide">
							<p>
							  <div class="flex-keterangan-belum-ada-data2">
								<p class="keterangan-belum-ada-data">belum ada keterangan</p>
							</div>
							</p>
							</div>
						</div>
          </div>
            <div>
							<a href="#"><img src="{{ url('https://konten.usu.ac.id/storage/satker/21/statis/topik-riset-s2-matematika3.jpg') }}" /></a>
							<div class="hover">Analisis Real<p class="sub-hover">-  artikel</p></div>
							<div class="hide">
							<p>
							  <div class="flex-keterangan-belum-ada-data2">
								<p class="keterangan-belum-ada-data">belum ada keterangan</p>
							</div>
							</p>
							</div>
						</div>
            <div>
							<a href="#"><img src="{{ url('https://konten.usu.ac.id/storage/satker/21/statis/topik-riset-s2-matematika4.jpg') }}" /></a>
							<div class="hover"> kombinatorika<p class="sub-hover">-  artikel</p></div>
							<div class="hide">
							<p>
							  <div class="flex-keterangan-belum-ada-data2">
								<p class="keterangan-belum-ada-data">belum ada keterangan</p>
							</div>
							</p>
							</div>
							</div>
						</div> -->
							<div class="flex-keterangan-belum-ada-data mt-5">
								<p class="keterangan-belum-ada-data">belum ada data</p>
							</div>
	</div>
</section>
<!-- <section id="daftar-penelitian" class="vision mt-5" x-intersect.margin.-225px.0px.-70%.0px="activeSection = '#' + $el.id">
	<div class="container">
	<h2 class="lined-title">
		<span>Daftar Penelitian</span>
	</h2><br>
    <div class="content mb-5">
		<table class="tabel2" border="1">
			<tbody><tr>
				<th>Tahun</th>
				<th>Judul Penelitian</th>
				<th>Sumber dan Jenis Dana</th>
			</tr>
			<tr>
				<td>2016</td>
				<td>Model dan Optimalisasi proses pembuatan biogas dari fermentasi limbah cair pabrik kelapa sawit</td>
				<td>PUPT</td>
			</tr>
			<tr>
				<td>2016</td>
				<td>Eksponen Lokal Masuk dan Scrambling Index Digraf Dwiwarna</td>
				<td>Hibah Pasca Sarjana</td>
			</tr>
			<tr>
				<td>2016</td>
				<td>Metode berbasis kendala aktif untuk menyelesaikan program stokastik cacah multi-tahap</td>
				<td>Hibah Fundamental</td>
			</tr>
			<tr>
				<td>2016</td>
				<td>Metode penyelesaian model matematika berbentuk polinomial kombinatorika</td>
				<td>Hibah Bersaing</td>
			</tr>
			<tr>
				<td>2016</td>
				<td>Analisis faktor ketimpangan pendapatan regional berdasarkan dekompisisi indeks Theil dan Koefisien Variasi Terbobt</td>
				<td>DIPA DIKTI</td>
			</tr>
			<tr>
				<td>2015</td>
				<td>Keberadaan solusi model matematika berbentuk polinomial kombinatorika</td>
				<td>Hibah Fundamental</td>
			</tr>
			<tr>
				<td>2015</td>
				<td>Eksponen Lokal Masuk dan Scrambling Index Digraf Dwiwarna</td>
				<td>Hibah Pasca Sarjana</td>
			</tr>
			<tr>
				<td>2015</td>
				<td>Model dan Optimalisasi proses pembuatan biogas dari fermentasi limbah cair pabrik kelapa sawit</td>
				<td>PUPT</td>
			</tr>
			<tr>
				<td>2015</td>
				<td>Metode berbasis kendala aktif untuk menyelesaikan program stokastik cacah multi-tahap</td>
				<td>Hibah Fundamental</td>
			</tr>
			<tr>
				<td>2015</td>
				<td>Topologi Dasar dan Sifat-sifat Geometri dari Generalisasi Ruang Barisan Terurut Tertentu yang Dibangun dengan Fungsi Phi, Urutan dan Aplikasinya</td>
				<td>PDD</td>
			</tr>
			<tr>
				<td>2015</td>
				<td>Inferensi Bootstrap pada Model Regressi Semiparametrik data Longitudinal</td>
				<td>PDD</td>
			</tr>
			<tr>
				<td>2015</td>
				<td>Jaringan Rantai Suplai Multi Eselon dengan Pusat Distribusi Dinamis</td>
				<td>PDD</td>
			</tr>
			<tr>
				<td>2015</td>
				<td>Analisis Faktor-Faktor Yang Mempengaruhi Pemilihan Jasa Transportasi KAB Di Medan Tahun 2015</td>
				<td>PUPT</td>
			</tr>
			<tr>
				<td>2014</td>
				<td>Model Estimasi kuantil ekstrim dari distribusi suatu peubah acak</td>
				<td>PDD</td>
			</tr>
			<tr>
				<td>2014</td>
				<td>Komputasi Numerik Proses Gravity Thickener pada Pembuatan Biogas dari Fermentasi Limbah Cair Pabrik Kelapa Sawit</td>
				<td>PNBP</td>
			</tr>
			<tr>
				<td>2014</td>
				<td>Kajian keacakan bilangan acak berdistribusi Poisson pada sistem Antrian</td>
				<td>Hibah Fundamental</td>
			</tr>
			<tr>
				<td>2014</td>
				<td> Pemodelan dan Simulasi Pemisahan Lumpur Keluaran fermentor pada Pembuatan Biogas dari Fermentasi Limbah Cair Pabrik Kelapa Sawit</td>
				<td> Hibah Bersaing</td>
			</tr>
			<tr>
				<td>2014</td>
				<td>Eksponen Lokal Masuk dan Scrambling Index Digraf Dwiwarna</td>
				<td>Hibah Pasca Sarjana </td>
			</tr>
			<tr>
				<td>2014</td>
				<td>Analisis Keacakan Data Prodieudorandom Berdistribusi Poisson pada Sistem Antrian </td>
				<td>Hibah Fundamental</td>
			</tr>
			<tr>
				<td>2013</td>
				<td>Pemodelan dan Simulasi Pemisahan Lumpur Keluaran fermentor pada Pembuatan Biogas dari Fermentasi Limbah Cair Pabrik Kelapa Sawit</td>
				<td>Hibah Bersaing</td>
			</tr>
			<tr>
				<td>2013</td>
				<td>Sistem Temu Kembali informasi Berdasarkan Jaringan Sosial</td>
				<td>Hibah Fundamental </td>
			</tr>
			<tr>
				<td>2013</td>
				<td>Kajian Pengaruh Keacakan Data Prodieudorandom pada Simulasi Kejadian Diskrit</td>
				<td>Hibah Fundamental </td>
			</tr>
			<tr>
				<td>2015</td>
				<td>Isolasi Senyawa Metabolit Sekunder dari Daun Iler (Coleus atropurreusBenth) dan Ujia Aktivitas Antioksi dan dan Antikanker </td>
				<td> </td>
			</tr>
			<tr>
				<td>2015</td>
				<td>Enkapsulasi Vitamin E Menggunakan Galaktomanan Termodifikasi Ikatan Silang dan Pengujian Secara In Vitro </td>
				<td>DIPA DIKTI/Hibah Bersaing </td>
			</tr>
			<tr>
				<td>2015</td>
				<td>Panel Pembangkit Listrik Tenaga Uap Air Berbasis Kitosan </td>
				<td> DIPA DIKTI/Hibah Bersaing</td>
			</tr>
			<tr>
				<td>2014</td>
				<td>Isolasi  Senyawa Metabolit Sekunder Dari Daun Iler dan Uji Aktivitas Antiokssidan dan Antikanker</td>
				<td>Hibah Bersaing</td>
			</tr>
			<tr>
				<td>2014</td>
				<td>Perbandingan Aktivitas Antimikroba dan Antioksidann Jahe Merah Segar Dan Kering</td>
				<td>Hibah Bersaing</td>
			</tr>
			<tr>
				<td>2014</td>
				<td>Pembuatan Bioetanol Dari Glukosa Hasil Hidrolisi Selulosa Ampas Tebu</td>
				<td>Hibah Bersaing</td>
			</tr>
			<tr>
				<td>2014</td>
				<td>Pemanpaatan Kulit Terong Belanda Sebagai Bahan Pengisi Kertas Nanoselulosa Bakteri </td>
				<td>Hibah Bersaing</td>
			</tr>
			<tr>
				<td>2014</td>
				<td>Pembuatan dan Karakterisasi Bionanokomposit Poly Caprolactone/Nanokristal Selulosa dari  Tongkol Jagung melalui Hidrolisisi Asam Sulfat </td>
				<td>Hibah Bersaing</td>
			</tr>
			<tr>
				<td>2014</td>
				<td>Pemanfaatan Lignin Isolat Bahan Pengikat Alami Dari Kayu Sembarang Sebagai Penguat Aspal </td>
				<td>Hibah Bersaing</td>
			</tr>
			<tr>
				<td>2014</td>
				<td>Encaplulasi Vitamin E Menggunakan Galaktomanan Termodifikasi Ikatan Silang Dan Pengujian Secara In Vitro</td>
				<td>Hibah Bersaing</td>
			</tr>
			<tr>
				<td>2014</td>
				<td>Isolasi Senyawa Metabolit Sekunder Dari Daun Iler dan Uji Aktivitas Antioksidan Dan Antikanker</td>
				<td>Hibah Bersaing</td>
			</tr>
			<tr>
				<td>2014</td>
				<td>Optimalisasi Isolasi Silikon Dari Pasir Alam Secara Magnesiotermal Digunakan Sebagai Bahan Dasar Material Silika</td>
				<td>Hibah Bersaing</td>
			</tr>
			<tr>
				<td>2014</td>
				<td>Pembuatan Nanokertas Selulosa Bakteri Dengan Memanfaatkan Pulp Yang Diisolasi dari Kulit Jeruk Sebagai Penguat</td>
				<td>Hibah Bersaing</td>
			</tr>
			<tr>
				<td>2014</td>
				<td>Sintesis Basa Chiff Melalui Kondensasi Beberapa Senyawa Amina Dengan Hasil Ozonolisiis Minyak Kelapa Sawit Dan Pengujiannya Sebagai Inhibitor Korosi Pada Baja Lunak</td>
				<td>Hibah Bersaing</td>
			</tr>
		</tbody></table>
    </section> -->
<section id="capaian-pembelajaran" class="vision mt-5" x-intersect.margin.-225px.0px.-70%.0px="activeSection = '#' + $el.id">
	<div class="container">
	<h2 class="lined-title">
		<span>Capaian Pembelajaran Lulusan</span>
	</h2>
	<p class="container mt-5 h5 text-justify">Mahasiswa Program Magister Kenotariatan diharapkan dapat menjadi lulusan profesional yang terampil, jujur, serta memiliki tanggung jawab, integritas, bermoral dan taat kode etik notaris, konsisten dan taat pada psikologi. Lulusan program studi ini juga diharapkan mengakomodir kepentingan para pihak dalam pembuatan akta kontrak bisnis, membina hubungan kerjasama yang positif, sehingga tercapai kepastian psikologi yang tidak melanggar ketentuan peraturan perundang-undangan yang berlaku</p>
	<div class="daftar">
		<div class="daftar-konten">
			<div class="nomor">1</div>
			<p>
      Menguasai teori-teori psikologi yang berkaitan dengan bidang psikologi perdata, psikologi bisnis dan psikologi agraria dan menerapkannya dalam peristiwa psikologi dalam bidang kenotariatan
        </p>
      </div>
			<div class="daftar-konten">
				<div class="nomor">2</div>
				<p>
        Menguasai teknik-teknik dan kaidah-kaidah psikologi pembuatan akta-akta autentik dan penguasaan tentang teori-teori dalam bidang psikologi perdata, psikologi bisnis dan psikologi agraria
        </p>
				</div>
				<div class="daftar-konten">
					<div class="nomor">3</div>
					<p>
          Menguasai konsep-konsep dan teori-teori psikologi serta pengembangannya dalam membrikan solusi bagi masalah psikologi yang dihadapi masyarakat
          </p>
					</div>
          <div class="daftar-konten">
					<div class="nomor">4</div>
					<p>
          Menguasai teknik-teknik dan kaidah-kaidah psikologi pembuatan akta-akta autentik dan penguasaan tentang teori-teori dalam bidang psikologi perdata, psikologi bisnis dan psikologi agraria
          </p>
					</div>
          <div class="daftar-konten">
					<div class="nomor">5</div>
					<p>
          Menguasai konsep-konsep dan teori-teori psikologi serta pengembangannya dalam memberikan solusi bagi masalah psikologi ang dihadapi masyarakat
          </p>
					</div>
          <div class="daftar-konten">
					<div class="nomor">6</div>
					<p>
          Menguasai teknik-teknik berkomunikasi yang baik dengan menggunakan berbagai macam perangkat teknologi
          </p>
					</div>
          <div class="daftar-konten">
					<div class="nomor">7</div>
					<p>
          Menguasai peraturan jabatan notaris, kode etik Notaris dan PPAT serta perangkat-perangkat peraturan yang terkait di dalamnya
          </p>
					</div>
          <div class="daftar-konten">
					<div class="nomor">8</div>
					<p>
          Menguasai metode serta teknik-teknik penulisan karya tulis ilmiah
          </p>
					</div>
				</div>
	</div>
	</section>
	<section id="biaya-studi" class="vision mt-5" x-intersect.margin.-225px.0px.-70%.0px="activeSection = '#' + $el.id">
	<div class="container">
	<h2 class="lined-title">
  <span>Biaya Studi</span>
	</h2>
	  <p class="container mt-5 h5 text-center">
    Berdasarkan Keputusan Rektor USU Nomor 1610/UN.1.R/SK/KEU/2022 Tentang Biaya Pendidikan Untuk Program Studi Jenjang Pendidikan Profesi, Spesialis dan Pascasarjana (Magister dan Doktoral) di Lingkungan Universitas Sumatera Utara Tahun Akademik 2022/2023, berikut ini adalah besaran biaya pendidikan untuk setiap jalur masuk peserta didik:    </p>
    <div class="biaya-studi">
						<div class ="biaya-studi-grid-kiri">
              <div class="judul-studi1"> SPP<br> <p class="sub-judul-studi">Sumbangan Pembinaan Pendidikan</p></div>
              <div class="kotak-deskripsi-biaya">
              <p class="nominal-biaya">Rp.6.000.000,-</p>
              <p class="keterangan-per-semester">per mahasiswa/1 semester</p>
							</div>
							<div class="judul-studi4 mt-3"> Matrikulasi</div>
              <div class="kotak-deskripsi-biaya">
              <p class="nominal-biaya">Rp.500.000,-</p>
							</div>
						</div>
             <div class ="biaya-studi-grid-kanan">
              <div class ="biaya-studi-top">
              <div>
              <div class="judul-studi2"> DKA <p class="sub-judul-studi">Dana Kelengkapan Akademik </p></div>
              <div class="kotak-deskripsi-biaya">
              <p class="nominal-biaya">Rp.7.000.000,-</p>
							</div>
						</div>
          </div>
          <div class ="biaya-studi-bottom">
               <div class="judul-studi3"> Pendaftaran <p class="sub-judul-studi">Biaya Pendaftaran Awal</p> </div>
               <div class="kotak-deskripsi-biaya">
              <p class="nominal-biaya">Rp.750.000,-</p>
							</div>
						</div>
          </div>
					</div>
					</div>
</section>
</div>
</div>
</div>

  <!-- tab ketiga -->
<div role="tabpanel" class="tab-pane fade" id="berita-lainnya" aria-labelledby="berita-lainnya-tab">
<div class ="grid">
  <div class ="grid-left">
  <nav class='my-sticky'>
         		 <a href="#berita" class="section-anchor"  :class="{'usu-bg-tertiary text-white': activeSection === $el.hash}">Berita</a>
				  <a href="#agenda" class="section-anchor"  :class="{'usu-bg-tertiary text-white': activeSection === $el.hash}">Agenda</a>
				  <a href="#pengumuman" class="section-anchor"  :class="{'usu-bg-tertiary text-white': activeSection === $el.hash}">Pengumuman</a>
				  <a href="#struktur-organisasi" class="section-anchor"  :class="{'usu-bg-tertiary text-white': activeSection === $el.hash}">Struktur Organisasi</a>
				  <a href="#organisasi-mahasiswa" class="section-anchor"  :class="{'usu-bg-tertiary text-white': activeSection === $el.hash}">Organisasi Mahasiswa</a>
</nav>
</div>
<div class ="grid-right">
<section id = "berita" class="vision mt-5" x-intersect.margin.-225px.0px.-70%.0px="activeSection = '#' + $el.id">
					<h2 class="lined-title">
					<span>Berita Terkini</span>
				</h2>
				[post-list categories="news" limit=6 sub_units="183" class="mt-5"]
</section>
<section id="agenda" class="vision mt-5" x-intersect.margin.-225px.0px.-70%.0px="activeSection = '#' + $el.id">
	<h2 class="lined-title">
		<span>Agenda</span>
	</h2>
				[post-agenda-list limit=3 sub_units="183" class="mt-4"]
</section>
<section id="pengumuman" class="vision mt-5" x-intersect.margin.-225px.0px.-70%.0px="activeSection = '#' + $el.id">
	<h2 class="lined-title">
		<span>Pengumuman</span>
	</h2><br>
				[post-announcement-list sub_units="183"]
</section>
<section id="struktur-organisasi" class="vision mt-5" x-intersect.margin.-225px.0px.-70%.0px="activeSection = '#' + $el.id">
	<div class="container">
	<h2 class="lined-title">
		<span>Struktur Organisasi</span>
	</h2>
    <div class="str-organisasi">
						<div>
              <h3>Kepala Program Studi</h3>
							<a href="https://direktori.usu.ac.id/profile/eyJpdiI6IjNPQmxwd1ZnRVYreHRSdVk4VTI5aGc9PSIsInZhbHVlIjoiZWpYWnRCODVKSHIrd0tjenVkUjd2QT09IiwibWFjIjoiYzY5ZTZjMzIxNjcwYWM2NjFjMmU3MjYzYmE1ZDAxNjZlYmE3M2IzYWI0Zjg3YTFjNmMwMGIyYTA4MzZiZDIwOCJ9" target="_blank"><img src="{{ url('https://konten.usu.ac.id/storage/satker/15/statis/kaprodi-s2-kenotariatan.png') }}" /></a>
							<div class="nama">Prof. Dr. Hasim Purba SH., M.Hum<br></div>
							<div class="detail">
              <table>
				<tbody><tr>
					<td>
					NIP
					</td>
					<td>
					:
					</td>
					<td></td>
					<td>
          196603031985081001
					</td><td>
				</td></tr>
				<tr>
					<td>
					NIDN
					</td>
					<td>
					:
					</td>
					<td></td>
					<td>
          0003036602
					</td>
				</tr>
				<tr>
					<td>
					<i class="fa fa-envelope">
					</i></td>
					<td>
					</td>
					<td></td>
					<td>
					<a href="mailto:hasimpurba030366@gmail.com">hasimpurba030366@gmail.com</a>
					</td>
				</tr>
				</tbody></table>
							</div>
						 </div>
            <div>
              <h3>Sekretaris Program Studi</h3>
							<a href="https://direktori.usu.ac.id/profile/eyJpdiI6IkN1UEt5N0Q0UE1hbnVnMm5ORmFcL2dnPT0iLCJ2YWx1ZSI6InNSdEF2ZmNOQ0dXVm9uekdlU3gwU1E9PSIsIm1hYyI6IjZkOTNkYjEzOWRkNGJiYzViNDc1YmQ0NDMzM2U2MTgyOThlM2JiNmRmN2Q1ZDYyMmNlNDQ1MGUxZDY4YzY3ZDEifQ==" target="_blank"><img src="{{ url('https://konten.usu.ac.id/storage/satker/15/statis/sekprod-magister-kenotariatan.png') }}" /></a>
							<div>
              <div class="nama">Prof. Dr. Rosnidar Sembiring SH., M.Hum </div>
							<div class="detail">
              <table>
				<tbody><tr>
					<td>
					NIP
					</td>
					<td>
					:
					</td>
					<td></td>
					<td>
					196602021991032002
					</td><td>
				</td></tr>
				<tr>
					<td>
					NIDN
					</td>
					<td>
					:
					</td>
					<td></td>
					<td>
					0002026602
					</td>
				</tr>
				<tr>
					<td>
					<i class="fa fa-envelope">
					</i></td>
					<td>
					</td>
					<td></td>
					<td>
					<a href="mailto:oni_usu@yahoo.com">oni_usu@yahoo.com</a>
					</td>
				</tr>
				</tbody></table>
							</div>
						</div>
					</div>
          </div>
</section>
<section id="organisasi-mahasiswa" class="vision mt-5" x-intersect.margin.-225px.0px.-70%.0px="activeSection = '#' + $el.id">
	<div class="container">
	<h2 class="lined-title">
		<span>Organisasi Mahasiswa</span>
	</h2>
	  <!-- <p class="container mt-5 h5 text-center">
    Berikut ini adalah organisasi yang terdapat pada Program Studi S-1 Kenotariatan :
    </p>
							<div class="organisasi-flex">
							<div class ="organisasi-list">
							<a href="https://instagram.com/imajinasiusu?igshid=MDM4ZDc5MmU=" target ="_blank"><img src="{{ url('https://konten.usu.ac.id/storage/satker/15/statis/logo-imajinasi.jpg') }}" /></a>
							<div class="hover">Ikatan Mahasiswa Departemen Kenotariatan (IMAJINASI)</div>
							<div class="hide">
							<p class="container h6 text-justify">Ikatan mahasiswa departemen Kenotariatan (IMAJINASI) berdiri pada tanggal 15 Maret 1985. Imajinasi adalah organisasi intra yang langsung berdiri dibawah naungan Departemen Kenotariatan. Para pengurus IMAJINASI adalah para mahasiswa Kenotariatan yang telah melalui proses seleksi terlebih dahulu, IMAJINASI berfokus pada kegiatan yang bermuara pada pengembangan potensi mahasiswa, baik secara teori maupun praktik
										IMAJINASI dibentuk oleh Drs. Danan Djaja, M.A selaku Ketua Departemen Kenotariatan yang pertama dan dibantu oleh Prof. Suwardi Lubis, M.S sebagai Sekretaris Departemen Kenotariatan masa itu. mereka memprakarsai berdirinya IMAJINASI menjadi sebuah organisasi atau murni sebagai media belajar bagi mahasiswa Kenotariatan dan bebas dari segala unsur politik
										Adapun visi dari IMAJINASI adalah, ??? Menjadi organisasi yang mampu merangkul seluruh mahasiswa Kenotariatan fpsi USU dari berbagai latar belakang dalam usaha meningkatkan potensi dan pengetahuan dibidang Kenotariatan sekaligus menjadi sebuah keluarga besar Kenotariatan yang saling mendukung???. Salah satu wujud konkrit kegiatan IMAJINASI adalah membangun hubungan atau kerjasama dengan para praktisi dan akademisi komunikasi, baik yang berada didalam maupun diluar lingkungan kampus.
										IMAJINASI sendiri memiliki delapan divisi, dimana setiap divisi memiliki program kerja yang akan direalisasikan dalam setiap masa jabatan. Adapun divisi tersebut adalah : <br>
										1. Divisi pendidikan dan penalaran <br>
										2. Divisi minat dan bakat <br>
										3. Divisi hubungans masyarakat <br>
										4. Divisi fotografi jurnalistik <br>
										5. Divisi rohani islam<br>
										6. Divisi rohani kristen<br>
										7. Divisi pengembangan organisasi<br>
										8. Divisi penelitian dan pengembangan
											</p>
							</div>
						</div>
					</div> -->
          <div class="flex-keterangan-belum-ada-data mt-5 mb-4">
								<p class="keterangan-belum-ada-data">belum ada data</p>
							</div>
					</div>
</section>
</div>
</div>
</div>
</article>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

<script>
$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
$(function () {
  $('[data-toggle="popover"]').popover()
})
$('.carousel').carousel({
  interval: 0
})

$(function() {
 var pull    = $('#pull'); // Variabel tombol navigasi (akan muncul hanya pada perangkat mobile)
 menu    = $('nav ul'); // Variabel menu

 $(pull).on('click', function(e) {
   e.preventDefault();
   menu.slideToggle();
 });
        $(window).resize(function(){
         var w = $(window).width();
          if(w > 600 && menu.is(':hidden')) {
            menu.removeAttr('style');
         }
     });
});



</script>

@endsection
