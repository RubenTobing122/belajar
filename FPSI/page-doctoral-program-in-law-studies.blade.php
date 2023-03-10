@inject('carbon', 'Carbon\Carbon')
@extends('theme.' . $theme . '.template')


@section('content')
<article x-data="{activeSection: ''}">
<div class="breadcrumb">
<div class="container">
<a href="{{ url("/$lang") }}"><i class="fa-solid fa-house"></i></a> &nbsp;>&nbsp;
<a class ="back-to-prodi" href="academic">Study Program</a> &nbsp;>&nbsp;
Doctoral Program in Psychology Studies
</div>
</div>
<div class="page-thumbnail" style="--image: url('/images/thumbnail_prodi.png')">
	<h1 class="container">
	Doctoral Program in Psychology Studies
	</h1>
</div>
<div class="fluid">
<div class='my-sticky'>
	<ul class="nav nav-tabs" role="tablist">
		<li class="nav-item">
			<a class="nav-link active" href="#info-umum" id="umum-tab" role="tab" data-toggle="tab" aria-controls="umum" aria-expanded="true">General Information</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="#kurikulum" role="tab" id="kurikulum-tab" data-toggle="tab" aria-controls="kurikulum">Curriculum and Research</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="#berita-lainnya" role="tab" id="berita-tab" data-toggle="tab" aria-controls="berita">Other Research</a>
		</li>
	</ul>
</div>
	<div class="tab-content">
		<div role="tabpanel" class="tab-pane fade show active" id="info-umum" aria-labelledby="umum-tab">
<div class ="grid">
  <div class ="grid-left">
  <nav class='my-sticky'>
      <a href="#sejarah-prodi" class="section-anchor" :class="{'usu-bg-tertiary text-white': activeSection === $el.hash}">History of Study Program</a>
      <a href="#visi-misi" class="section-anchor" :class="{'usu-bg-tertiary text-white': activeSection === $el.hash}">Vision and Mission</a>
	  <!-- <a href="#sasaran-strategi"  class="section-anchor" :class="{'usu-bg-tertiary text-white': activeSection === $el.hash}">Sasaran &amp; Strategi</a>  -->
      <a href="#fakta-prodi"  class="section-anchor" :class="{'usu-bg-tertiary text-white': activeSection === $el.hash}">Study Program Facts</a>
	  <a href="#sambutan-kaprodi"  class="section-anchor" :class="{'usu-bg-tertiary text-white': activeSection === $el.hash}">Head of Study Program's Welcome Speech</a>
      <a href="#akreditasi-prestasi" class="section-anchor" :class="{'usu-bg-tertiary text-white': activeSection === $el.hash}">Accreditation and Achievements</a>
      <a href="#prospek-karir" class="section-anchor" :class="{'usu-bg-tertiary text-white': activeSection === $el.hash}">Career Prospects</a>
      <a href="#testimoni-alumni" class="section-anchor" :class="{'usu-bg-tertiary text-white': activeSection === $el.hash}">Alumni Testimonials</a>
      <!-- <a href="#bagan-struktur-organisasi" class="section-anchor" :class="{'usu-bg-tertiary text-white': activeSection === $el.hash}">Bagan Struktur Organisasi</a> -->
      <a href="#informasi-kontak" class="section-anchor" :class="{'usu-bg-tertiary text-white': activeSection === $el.hash}">Contact Information</a>
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
            <span>History of Study Program</span>
        </h2>
      <!-- <ul>
        <li>
        <div>
                <time>1994</time>Berdasarkan Keputusan Menteri Pendidikan dan Kebudayaan RI No. 0325/U/1994 tanggal 9 Desember 1994 dan Surat Keputusan Rektor USU No. 1637/PT05.H/SK/I/95 dinyatakan bahwa Fakultas Hukum hanya mengelola satu program studi yaitu Program Studi Ilmu Hukum.
            </div>
        </li>
	    </ul> -->
              <div class="flex-keterangan-belum-ada-data mt-5">
								<p class="keterangan-belum-ada-data">No Daya Yet</p>
							</div>
</section>
<section id="visi-misi" class="vision mt-5"  x-intersect.margin.-225px.0px.-70%.0px="activeSection = '#' + $el.id">
	<h2 class="lined-title">
		<span>Vision</span>
	</h2>
	  <p class="container mt-5 h5 text-center">
    Becoming a Doctor of Psychology Program that is superior, has integrity, is competitive and is able to apply the development of science and technology in national and international legal development.
   </p>
	<div class="missions">
    <div class="container">
        <h1 class="lined-title3">
            <span>Mission</span>
        </h1>
		<div class="d-block d-sm-flex justify-content-center flex-wrap p-1">
			<div class="academic-flex">
			<div class="d-flex justify-content-center">
			<img src="https://api.iconify.design/material-symbols:high-quality-rounded.svg?color=white&width=60px"/>
               </div>
			  <h2 style="text-align:center">Quality</h2>
			  <p style="text-align:center">
        Educating a cadre of qualified Doctor of Psychology Science scientists with a scientific base and responsibility that has national and global competitiveness.
        </p>
			</div>
			<div class="academic-flex">
			<div class="d-flex justify-content-center">
			<img src="https://api.iconify.design/game-icons:padlock.svg?color=white&width=60px"/>
               </div>
			  <h2  style="text-align:center">Integrity</h2>
			  <p style="text-align:center">
        Educating cadres of Doctor of Psychology scientists who have integrity, personality and are able to participate in the process of developing science and technology, as well as socio-cultural developments for the benefit of the nation and state by upholding religious values and morality.
        </p>
			</div>
			<div class="academic-flex">
			<div class="d-flex justify-content-center">
			<img src="https://api.iconify.design/icon-park-solid:brain.svg?color=white&width=60px"/>
               </div>
			  <h2  style="text-align:center">Legal Reasoning</h2>
			  <p style="text-align:center">
        Educating a cadre of Doctor of Psychology scientists with liberation and enlightenment of thinking based on legal reasoning to produce new findings that are useful for the application of legal development in Indonesia.
        </p>
        </div>
		</div>
  </div>
</div>
</section>
<section id="fakta-prodi" class="container researches" x-intersect.margin.-225px.0px.-70%.0px="activeSection = '#' + $el.id">
   <h2 class="lined-title">
		<span>Study Program Facts</span>
	</h2>
    <div class="research-numbers-prodi">
    <div class="research-number-container">
        <div class="icon">
        <div class="rounded-circle usu-bg-light-gray p-3">
            <img style="width: 50px; height: 50px" src="{{ asset('images/icons/hook.png') }}" alt="Tahun Berdiri" />
          </div>
        </div>
        <div>
          <b>Year of Establishment</b>
          <div>-</div>
        </div>
      </div>
	  <div class="research-number-container">
        <div class="icon">
        <div class="rounded-circle usu-bg-light-gray p-3">
            <img style="width: 50px; height: 50px" src="{{ asset('images/icons/student.png') }}" alt="Mahasiswa" />
          </div>
        </div>
        <div>
          <b>Student</b>
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
          <b>Lecturer</b>
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
          <b>Number of Subjects</b>
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
          <b>Laboratory</b>
          <div>-</div>
        </div>
      </div>
  </section>
<section class="dekan container" id="sambutan-kaprodi" x-intersect.margin.-225px.0px.-70%.0px="activeSection = '#' + $el.id">
    <div class="dean">
        <p>
            <img class="image_resized" style="width:100%;" src="https://konten.usu.ac.id/storage/satker/15/statis/kaprodi-s3-ilmu-hukum.png">
        </p>
        <div class="desc">
            <div class="name">
                <h1>Head of Study Program's Welcome Speech</h1>
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
								<p class="keterangan-belum-ada-data">No Daya Yet</p>
							</div>
        </div>
    </div>
</section>
<section id ="akreditasi-prestasi" class="akreditasi" x-intersect.margin.-225px.0px.-70%.0px="activeSection = '#' + $el.id">
    <div class="container">
		<div class="akreditasi-list">
			<div class="kontenakreditasi">
			  <h2>Doctoral Program in Psychology Studies</h2>
			  <h1>Very Good Accredited</h1>
			  <p><i>No. 6790/SK/BAN-PT/Ak.KP/D/X/2022</i></p>
			</div>
			<div class="kontenakreditasi-link">
			<div class="icon">
			<a href="#sertifikat-akreditasi-s3-ilmu-hukum">
			<i class="fa fa-external-link fl-right fa-2x"></i>
			</a>
			</div>
			</div>
		</div>
    </div>
	<!-- sertifikat akreditasi -->
<div class ="pop-up" id="sertifikat-akreditasi-s3-ilmu-hukum">
		<div class="popup-container">
				<div class="judul-hr-bgputih">
				<p>
					<a class="popup-close" href="#closed">X</a>
				</p>
						<h3>
            Accreditation of USU Doctoral Program in Psychology Studies
						</h3>
					</div>
					<div class="gambar-popup">
					<img src="https://konten.usu.ac.id/storage/satker/15/statis/sertifikat-akreditasi-s3-ilmu-hukum.jpeg">
					</div>
		</div>
	</div>
</section>
<section id ="prospek-karir" class="vision mt-5" x-intersect.margin.-225px.0px.-70%.0px="activeSection = '#' + $el.id">
	<h1 class="lined-title">
  <span>Career Prospects</span>
	</h1>
  <p style ="text-align:center" class="container mt-5 h5">
  Career prospects after graduating from the Undergraduate Program in Psychology Studies are very promising. The following are the career prospects:	</p>
	<div class ="prospek">
	 <div class="program-sarjana container">
	 <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
     <div class="carousel-inner">
     <div class="carousel-item active">
	<div class="tombol-prospek">
		<div class="tombol">
            <div class="button button-prospek"> Psychologyyer</div>
          </div>
		  <div class="tombol">
            <div class="button button-prospek">Prosecutor</div>
          </div>
		  <div class="tombol">
            <div class="button button-prospek"> Judge</div>
          </div>
		   <div class="tombol">
            <div class="button button-prospek">Legal Consultant</div>
          </div>
		   <div class="tombol">
            <div class="button button-prospek">Diplomat</div>
          </div>
		   <div class="tombol">
            <div class="button button-prospek">Notary</div>
          </div>

  		</div>
		  </div>
            <div class="carousel-item">
			<div class="tombol-prospek">

          <div class="tombol">
            <div class="button button-prospek"> Legal Staff</div>
          </div>
          <div class="tombol">
            <div class="button button-prospek">Human Resources Staff</div>
          </div>
          <div class="tombol">
            <div class="button button-prospek">Ministry Staff</div>
          </div>
		  <div class="tombol">
            <div class="button button-prospek">Lecturer</div>
          </div>
		  <div class="tombol">
            <div class="button button-prospek">Registrar</div>
          </div>
		  <div class="tombol">
            <div class="button button-prospek">Activist</div>
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
    Alumni Testimonials
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
			Saya Lucky Andriansyah, S. Ikom., Alumni Ilmu Hukum stambuk 2014. Saat ini saya
			bekerja sebagai Pranata Humas di Kementerian Agama Provinsi Jawa Barat.
			Sebuah kebanggaan tersendiri bagi saya menjadi Alumni Ilmu Hukum yang saat ini
			semakin melebarkan sayapnya di Universitas Sumatera Utara.<br>
			Sebagai lulusan dari Sumatera saya merasa tidak kalah saing dengan lulusan-lulusan
			Universitas di Jawa, karna Ilmu Hukum-USU sendiri menciptakan dan mempersiapkan
			alumni-alumninya untuk mampu bersaing dengan Universitas yang ada di Indonesia. Mulai
			dari dosennya yang mengikuti perkembangan zaman, metode penyampaian serta kreasi
			pemberian materi perkuliahan yang asik hingga mudah diterima dan organisasi-organisasi
			yang ada di Ilmu Hukum USU itu sangat membantu menunjang kreatifitas dan skill dari
			anggotanya loh!<br>
			Tak hanya itu, Ilmu Hukum-USU juga sangat mensupport mahasiswa untuk meraih
			prestasi dan mengembangkan potensi diri juga. Beberapa kali menjadi perwakilan Ilmu
			Komunikasi untuk berlomba di kancah Provinsi, Nasional maupun Internasional, sangat
			melekat jelas diingatan saya bagaimana support dari dosen, rekan maupun prodi Ilmu
			Komunikasi secara umum untuk prestasi-prestasi yang saya raih.<br>
			Terima kasih prodi Ilmu Hukum semoga semakin bersinar dan tetap berjaya!
		</p>
		</div>
        </div>
        <div class="grid-2">
          <img src="https://konten.usu.ac.id/storage/satker/15/statis/alumni1-prodi-s3-ilmu-komunikasi.jpg">
            <div class="grid-2-p">
              <h5>Lucky Andriansyah, S. Ikom.</h5>
              <br>
              <h6>(Mahasiswa S-3 Ilmu Hukum Angkatan 2014)</h6>
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
		Prodi Ilmu Hukum USU sangat menyenangkan untuk dipelajari. Kurikulum prodi ilmu
		Komunikasi menggabungkan pembelajaran teori dan praktik sehingga saya sebagai
		mahasiswa memperoleh bekal ilmu yg cukup komprehensif. Saya sangat beruntung diberikan
		kesempatan untuk belajar lebih banyak dalam kajian penelitian Ilmu Hukum dari dosen-
		dosen prodi Ilmu Hukum terutama pada kajian dampak penggunaan media. Ilmu dan
		pengalaman yg saya dapatkan dari kajian penelitian ini sangat banyak manfaatnya bagi saya
		dalam pekerjaan saya sekarang sebagai content review analyst di Teleperformance Malaysia.
		</p>
		</div>
        </div>
        <div class="grid-2">
          <img src="https://konten.usu.ac.id/storage/satker/15/statis/alumni2-prodi-s3-ilmu-komunikasi.jpg">
            <div class="grid-2-p">
              <h5>Suci Andarini S I.kom</h5>
              <br>
              <h6>(Mahasiswa S-3 Ilmu Hukum Angkatan 2007)</h6>
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
		Sebagai salah satu alumni dari Prodi Ilmu Hukum Universitas Sumatera Utara, saya
		merasa bangga karena saat melakukan pembelajaran disana, saya mendapatkan beberapa
		bekal berupa ilmu akademik maupun non akademik yang dapat saya implementasikan dalam
		bersosialisasi dengan orang baru dan juga di dunia kerja.
		Prodi Ilmu Hukum Universitas Sumatera Utara juga menjadi wadah saya berekspresi
		dalam menginterpretasikan pelajaran yang saya dalami dalam jurusan ini, Didukung
		dengan adanya fasilitas dan dosen-dosen yang mementoring saya sehingga terbentuknya
		karakter mahasiswa sesuai dengan apa yang di tujukan.
		Besar harapan saya untuk Prodi Ilmu Hukum Universitas Utara kedepannya dapat selalu
		mempertahankan eksistensi dan kualitas yang dapat membentuk karakter mahasiswa-
		mahasiswanya dalam meraih kesuksesan
		</p>
		</div>
        </div>
        <div class="grid-2">
		<img src="https://konten.usu.ac.id/storage/satker/15/statis/alumni3-prodi-s3-ilmu-komunikasi.jpg">
            <div class="grid-2-p">
              <h5>Thiara Figlia Chandra, S.I.Kom.</h5>
              <br>
              <h6>(Mahasiswa S-3 Ilmu Hukum Angkatan 2016)</h6>
              <br>
              <div class="grid-2-star">
                <?php $i=1; while($i<=5){echo '<i class="fa-solid fa-star"></i>';$i++;}?>
              </div>
            </div>
        </div> -->
        <div class="flex-keterangan-belum-ada-data mt-5">
								<p class="keterangan-belum-ada-data">No Daya Yet</p>
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
                <img class="images-bagan" src="https://konten.usu.ac.id/storage/satker/15/statis/struktur-organisasi-prodi-s3-ilmu-komunikasi.jpg" title="Struktur Organisasi" alt="Struktur Organisasi">
            </figure>
          </a>
        </div>
    </div>
    </section> -->
<!-- gambarprodi -->
<!-- <div class="footer-panorama-prodi container">
<div id="carouselExampleControls2" class="carousel slide" data-ride="carousel">
     <div class="carousel-inner">
     <div class="carousel-item active">
          <img src="https://konten.usu.ac.id/storage/satker/15/statis/foto1-gedung-ilmu-komunikasi.jpg" alt="Panorama" />
      </div>
      <div class="carousel-item">
      <img src="https://konten.usu.ac.id/storage/satker/15/statis/foto2-gedung-ilmu-komunikasi.jpg" alt="Panorama" />
      </div>
      <div class="carousel-item">
      <img src="https://konten.usu.ac.id/storage/satker/15/statis/foto3-gedung-ilmu-komunikasi.jpg" alt="Panorama" />
      </div>
      <a class="carousel-control-prev" href="#carouselExampleControls2" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls2" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
        </a>
      </div>
   </div>
 </div> -->
<section id = "informasi-kontak" class="info mt-3" x-intersect.margin.-225px.0px.-70%.0px="activeSection = '#' + $el.id">
    <h1 class="lined-title">
		<span>Contact Information</span>
	</h1>
    <div class="info-kontak">
        <p>
            <b>
            Doctoral Program in Psychology Studies
                <br>Universitas Sumatera Utara<br>
            </b>
            <br>
            <i class="fa-solid fa-location-crosshairs"></i>
            Jl. Universitas No.4 Kampus USU Padang Bulan <br>
			      Kec. Medan Baru, Kota Medan, Sumatera Utara 20155 <br>
            <br>
            <!-- <i class="fa-solid fa-envelope"></i>
            <a href="mailto: prodi.s3ilmukomunikasi@usu.ac.id">prodi.s3ilmukomunikasi@usu.ac.id</a><br>
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
								<p class="keterangan-belum-ada-data">No Daya Yet</p>
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
         		 <a href="#jadwal-kuliah" class="section-anchor"  :class="{'usu-bg-tertiary text-white': activeSection === $el.hash}">Class Schedule</a>
				  <a href="#kurikulum-prodi" class="section-anchor"  :class="{'usu-bg-tertiary text-white': activeSection === $el.hash}">Curriculum</a>
				  <a href="#peminatan" class="section-anchor"  :class="{'usu-bg-tertiary text-white': activeSection === $el.hash}">Specialization</a>
				  <a href="#topik-riset" class="section-anchor"  :class="{'usu-bg-tertiary text-white': activeSection === $el.hash}">Research Topic</a>
				  <!-- <a href="#daftar-penelitian" class="section-anchor"  :class="{'usu-bg-tertiary text-white': activeSection === $el.hash}">Daftar Penelitian</a> -->
				  <a href="#capaian-pembelajaran" class="section-anchor"  :class="{'usu-bg-tertiary text-white': activeSection === $el.hash}">Graduate Learning Outcomes</a>
				  <a href="#biaya-studi" class="section-anchor"  :class="{'usu-bg-tertiary text-white': activeSection === $el.hash}">Study Fee</a>
</nav>
</div>
<div class ="grid-right">
<section id = "jadwal-kuliah" class="vision mt-5" x-intersect.margin.-225px.0px.-70%.0px="activeSection = '#' + $el.id">
					<h2 class="lined-title">
					<span>Class Schedule</span>
					</h2>
					<p class="container mt-5 h5">
          The following is the schedule of lectures in the Doctoral Program in Psychology Studies, Universitas Sumatera Utara:
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
								<p class="keterangan-belum-ada-data">There is no file yet</p>
							</div>
</section>
<section id="kurikulum-prodi" class="vision mt-5" x-intersect.margin.-225px.0px.-70%.0px="activeSection = '#' + $el.id">
<div class="container">
					<h2 class="lined-title">
					<span>Curriculum</span>
					</h2>
							<br>
							<div class="flex-keterangan-belum-ada-data">
								<p class="keterangan-belum-ada-data">No Daya Yet</p>
							</div>
					<!-- <p class="container mt-5 h5">
					Berikut ini adalah rincian kurikulum yang terdapat pada program studi S-3 Ilmu Hukum :
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
            <h6>Pengantar Ilmu Hukum</h6><p class ="number-sks">3</p><p class ="sks">SKS</p>
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
            <h6>Hukum dan Etika Media Massa</h6><p class ="number-sks">3</p><p class ="sks">SKS</p>
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
            <h6>Praktikum Ilmu Hukum</h6><p class ="number-sks">3</p><p class ="sks">SKS</p>
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
            <h6>Praktikum Ilmu Hukum</h6><p class ="number-sks">3</p><p class ="sks">SKS</p>
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
            <h6>Praktikum Ilmu Hukum</h6><p class ="number-sks">3</p><p class ="sks">SKS</p>
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
		<span>Specialization</span>
	</h2>
    <!-- <div class="kelompok-keilmuan">
      <div class="slider">
        <div class="container-kelompok-keilmuan">
        <div class="item-kelompok-keilmuan item-keilmuan-active" data-toggle="modal" data-target="#ShowModal1">
          <img src="https://konten.usu.ac.id/storage/satker/15/statis/hukum-perdata.jpg" alt="">
          <p>Hukum Perdata</p>
        </div>
          <div class="item-kelompok-keilmuan item-keilmuan-active" data-toggle="modal" data-target="#ShowModal2">
            <img src="https://konten.usu.ac.id/storage/satker/15/statis/hukum-pidana.jpg" alt="">
          <p>Hukum Pidana</p>
        </div>
		<div class="item-kelompok-keilmuan item-keilmuan-active" data-toggle="modal" data-target="#ShowModal3">
            <img src="https://konten.usu.ac.id/storage/satker/15/statis/hukum-internasional.jpg" alt="">
          <p>Hukum Internasional</p>
        </div>
		<div class="item-kelompok-keilmuan item-keilmuan-active" data-toggle="modal" data-target="#ShowModal4">
            <img src="https://konten.usu.ac.id/storage/satker/15/statis/hukum-ekonomi.jpg" alt="">
          <p>Hukum Ekonomi</p>
        </div>
		<div class="item-kelompok-keilmuan item-keilmuan-active" data-toggle="modal" data-target="#ShowModal5">
            <img src="https://konten.usu.ac.id/storage/satker/15/statis/hukum-tata-negara.jpg" alt="">
          <p>Hukum Tata Negara</p>
        </div>
		<div class="item-kelompok-keilmuan item-keilmuan-active" data-toggle="modal" data-target="#ShowModal6">
            <img src="https://konten.usu.ac.id/storage/satker/15/statis/hukum-administrasi-negara.jpg" alt="">
          <p>Hukum Administrasi Negara</p>
        </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="ShowModal1" tabindex="-1" aria-labelledby="ShowModalLabel" style="display: none;" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered"><div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="ShowModalLabel">Hukum Perdata</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">X</span>
        </button></div><div class="modal-body modal-body-bidang-keilmuan">
          <img src="https://konten.usu.ac.id/storage/satker/15/statis/hukum-perdata.jpg" alt="">
          <p>
          Hukum perdata adalah hukum antar-perorangan yang mengatur hak dan kewajiban perorangan yang satu terhadap yang lain di dalam hubungan keluarga dan di dalam pergaulan masyarakat
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
        <h5 class="modal-title" id="ShowModalLabel">Hukum Pidana</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">X</span>
        </button></div><div class="modal-body modal-body-bidang-keilmuan">
          <img src="https://konten.usu.ac.id/storage/satker/15/statis/hukum-pidana.jpg" alt="">
          <p>
          Hukum Pidana atau Hukum Kriminal (bahasa Belanda: Strafrecht) adalah keseluruhan dari peraturan-peraturan yang menentukan perbuatan apa yang dilarang dan termasuk ke dalam tindak pidana, serta menentukan hukuman apa yang dapat dijatuhkan terhadap yang melakukannya
        </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="ShowModal3" tabindex="-1" aria-labelledby="ShowModalLabel" style="display: none;" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered"><div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="ShowModalLabel">Hukum Internasional</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">X</span>
        </button></div><div class="modal-body modal-body-bidang-keilmuan">
          <img src="https://konten.usu.ac.id/storage/satker/15/statis/hukum-internasional.jpg" alt="">
          <p>
          Hukum internasional adalah bagian hukum yang mengatur aktivitas entitas berskala internasional , mengurusi struktur dan perilaku organisasi internasional dan pada batas tertentu, perusahaan multinasional dan individu , mengatur hubungan antar negara, dan memuat ketentuan untuk situasi konflik dan perang
        </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
	<div class="modal fade" id="ShowModal4" tabindex="-1" aria-labelledby="ShowModalLabel" style="display: none;" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered"><div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="ShowModalLabel">Hukum Ekonomi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">X</span>
        </button></div><div class="modal-body modal-body-bidang-keilmuan">
          <img src="https://konten.usu.ac.id/storage/satker/15/statis/hukum-ekonomi.jpg" alt="">
          <p>
          Hukum ekonomi adalah beragam ketentuan yang menjelaskan tentang hubungan yang terjadi antara berbagai peristiwa ekonomi yang didalamnya terdapat hubungan kasualitas (sebab-akibat) dan fungsional (saling mempengaruhi) yang bersifat tidak berlaku secara mutlak / cenderung terjadi
          </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
	<div class="modal fade" id="ShowModal5" tabindex="-1" aria-labelledby="ShowModalLabel" style="display: none;" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered"><div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="ShowModalLabel">Hukum Tata Negara</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">X</span>
        </button></div><div class="modal-body modal-body-bidang-keilmuan">
          <img src="https://konten.usu.ac.id/storage/satker/15/statis/hukum-tata-negara.jpg" alt="">
          <p>
          Hukum tata negara adalah bentuk hukum yang mendefinisikan hubungan antara berbagai lembaga di dalam suatu negara, yaitu eksekutif, legislatif, dan yudikatif
          </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="ShowModal6" tabindex="-1" aria-labelledby="ShowModalLabel" style="display: none;" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered"><div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="ShowModalLabel">Hukum Administrasi Negara</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">X</span>
        </button></div><div class="modal-body modal-body-bidang-keilmuan">
          <img src="https://konten.usu.ac.id/storage/satker/15/statis/hukum-administrasi-negara.jpg" alt="">
          <p>
          Hukum administrasi negara (bahasa Inggris: administrative Psychology) adalah sebuah cabang dari ilmu hukum yang mempelajari mengenai tindakan-tindakan dalam menyelenggarakan sebuah negara. Hukum ini juga dikenal sebagai hukum tata usaha negara atau hukum tata pemerintahan
          </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div> -->
      <div class="flex-keterangan-belum-ada-data mt-5">
								<p class="keterangan-belum-ada-data">No Daya Yet</p>
							</div>
    </div>
</section>
<section id="topik-riset" class="vision mt-5" x-intersect.margin.-225px.0px.-70%.0px="activeSection = '#' + $el.id">
	<div class="container">
	<h2 class="lined-title">
		<span>Research Topic</span>
	</h2>
	  <!-- <p class="container mt-5 h5 text-justify">
    Berikut ini adalah topik dan riset yang ada pada Program Studi S-3 Ilmu Politik :
    </p> -->
					<!-- <div class="topik-riset">
						<div>
							<a href="#"><img src="{{ url('https://konten.usu.ac.id/storage/satker/21/statis/topik-riset-s3-matematika1.jpg') }}" /></a>
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
							<a href="#"><img src="{{ url('https://konten.usu.ac.id/storage/satker/21/statis/topik-riset-s3-matematika2.jpg') }}" /></a>
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
							<a href="#"><img src="{{ url('https://konten.usu.ac.id/storage/satker/21/statis/topik-riset-s3-matematika3.jpg') }}" /></a>
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
							<a href="#"><img src="{{ url('https://konten.usu.ac.id/storage/satker/21/statis/topik-riset-s3-matematika4.jpg') }}" /></a>
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
								<p class="keterangan-belum-ada-data">No Daya Yet</p>
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
		<span>Graduate Learning Outcomes</span>
	</h2>
	<p class="container mt-5 h5 text-justify">Students in the doctoral program in Psychology are expected to graduate as professionals with the ability to think critically, logically, methodically, and creatively. They should also be able to analyze socially occurring legal phenomena, symptoms, and events by applying what they have learned about the Psychology. With the learning attainment targets, it is anticipated that students would be able to convey legal ideas and legal doctrines to the academic community and the general public through the media, either generally or in line with the field of Psychology.</p>
	<div class="daftar">
		<div class="daftar-konten">
			<div class="nomor">1</div>
			<p>
      Contribute to the development and practice of science and/or technology that pays attention to and applies the values of the humanities, in their field of expertise, by producing scientific research based on scientific methodology, logical, critical, systematic thinking, and creative problem-solving
      </p>
      </div>
			<div class="daftar-konten">
				<div class="nomor">2</div>
				<p>
        Capable of compiling interdisciplinary, multidisciplinary, or transdisciplinary research, comprising theoretical and/or experimental studies in the disciplines of science, technology, art, and innovation, as stated in dissertations and papers published in prominent international publications.
      </p>
				</div>
				<div class="daftar-konten">
					<div class="nomor">3</div>
					<p>
          Capable of selecting research that is appropriate, actual, advanced, and beneficial to humanity through interdisciplinary, multidisciplinary, or transdisciplinary approaches in order to develop and/or produce problem-solving in the fields of science, technology, art, or society, based on the results of studies on internal and external resource availability.
          </p>
					</div>
          <div class="daftar-konten">
					<div class="nomor">4</div>
					<p>
          Capable of developing a research road map with an interdisciplinary, multidisciplinary, or transdisciplinary strategy, based on assessments of the primary research aims and their relationship to broader goals.
          </p>
					</div>
          <div class="daftar-konten">
					<div class="nomor">5</div>
					<p>

          Capable of compiling scientific, technological, or artistic arguments and solutions based on a critical view of scientifically verifiable facts, concepts, principles, or hypotheses, and communicating them through mass media or directly to the public.
          </p>
					</div>
          <div class="daftar-konten">
					<div class="nomor">6</div>
					<p>
          Capable of demonstrating intellectual leadership in the administration, development, and growth of resources and organizations within his purview.
          </p>
					</div>
          <div class="daftar-konten">
					<div class="nomor">7</div>
					<p>
          Able to manage research data and information under his purview, including storing, auditing, safeguarding, and retrieving it.
          </p>
					</div>
          <div class="daftar-konten">
					<div class="nomor">8</div>
					<p>
          Capable of establishing and maintaining collegial and peer-to-peer relationships within their own setting or via a collaborative network with research groups outside the university.
          </p>
					</div>
          <div class="daftar-konten">
					<div class="nomor">9</div>
					<p>
          Mastering legal reasoning processes comprehensively and in-depth through the application of sociological, juridical, and philosophical thinking methods, which are the foundation for creating, expanding, and discovering new and original things in the field of la
          </p>
					</div>
          <div class="daftar-konten">
					<div class="nomor">10</div>
					<p>
          Mastering legal philosophy, which supports the theory of specific domains of Psychology and serves as the major study material in its entirety and in depth, as part of the development of the Science of Psychology
          </p>
					</div>
          <div class="daftar-konten">
					<div class="nomor">11</div>
					<p>
          Mastering normative and/or empirical legal research methods, inter-, multi-, or transdisciplinary
          </p>
					</div>
				</div>
	</div>
	</section>
	<section id="biaya-studi" class="vision mt-5" x-intersect.margin.-225px.0px.-70%.0px="activeSection = '#' + $el.id">
	<div class="container">
	<h2 class="lined-title">
  <span>Study Fee</span>
	</h2>
	  <p class="container mt-5 h5 text-center">
	  Based on the Decree of the USU Chancellor Number 1610/UN.1.R/SK/KEU/2022 concerning tuition fees for study programs for professional, specialist and postgraduate (master and doctoral) education levels at the University of North Sumatra for the 2022/2023 academic year, the following is the amount of tuition fees for each learner entry point:
	</p>
	    <div class="biaya-studi">
						<div class ="biaya-studi-grid-kiri">
              <div class="judul-studi1"> SPP<br> <p class="sub-judul-studi">Education Development Donation</p></div>
              <div class="kotak-deskripsi-biaya">
              <p class="nominal-biaya">Rp.15.000.000,-</p>
              <p class="keterangan-per-semester">per student/1 semester</p>
							</div>
							<div class="judul-studi4 mt-3"> Matriculation</div>
              <div class="kotak-deskripsi-biaya">
              <p class="nominal-biaya">Rp.5.000.000,-</p>
							</div>
						</div>
             <div class ="biaya-studi-grid-kanan">
              <div class ="biaya-studi-top">
              <div>
              <div class="judul-studi2"> Administration Fee </p></div>
              <div class="kotak-deskripsi-biaya">
              <p class="nominal-biaya">Rp.7.000.000,-</p>
							</div>
						</div>
          </div>
          <div class ="biaya-studi-bottom">
               <div class="judul-studi3"> Registration <p class="sub-judul-studi">Initial Registration Fee</p> </div>
               <div class="kotak-deskripsi-biaya">
              <p class="nominal-biaya">Rp.1.250.000,-</p>
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
         		 <a href="#berita" class="section-anchor"  :class="{'usu-bg-tertiary text-white': activeSection === $el.hash}">News</a>
				  <a href="#agenda" class="section-anchor"  :class="{'usu-bg-tertiary text-white': activeSection === $el.hash}">Agenda</a>
				  <a href="#pengumuman" class="section-anchor"  :class="{'usu-bg-tertiary text-white': activeSection === $el.hash}">Announcement</a>
				  <a href="#struktur-organisasi" class="section-anchor"  :class="{'usu-bg-tertiary text-white': activeSection === $el.hash}">Organization Structure</a>
				  <a href="#organisasi-mahasiswa" class="section-anchor"  :class="{'usu-bg-tertiary text-white': activeSection === $el.hash}">Student Organization</a>
</nav>
</div>
<div class ="grid-right">
<section id = "berita" class="vision mt-5" x-intersect.margin.-225px.0px.-70%.0px="activeSection = '#' + $el.id">
					<h2 class="lined-title">
					<span>Latest News</span>
				</h2>
				[post-list categories="news" limit=6 sub_units="184" class="mt-5"]
</section>
<section id="agenda" class="vision mt-5" x-intersect.margin.-225px.0px.-70%.0px="activeSection = '#' + $el.id">
	<h2 class="lined-title">
		<span>Agenda</span>
	</h2>
				[post-agenda-list limit=3 sub_units="184" class="mt-4"]
</section>
<section id="pengumuman" class="vision mt-5" x-intersect.margin.-225px.0px.-70%.0px="activeSection = '#' + $el.id">
	<h2 class="lined-title">
		<span>Announcement</span>
	</h2><br>
				[post-announcement-list sub_units="184"]
</section>
<section id="struktur-organisasi" class="vision mt-5" x-intersect.margin.-225px.0px.-70%.0px="activeSection = '#' + $el.id">
	<div class="container">
	<h2 class="lined-title">
		<span>Organization Structure</span>
	</h2>
    <div class="str-organisasi">
						<div>
              <h3>Head of Study Program</h3>
							<a href="https://direktori.usu.ac.id/profile/eyJpdiI6IitrS0lSN1NNT1wvY1BmU1E2RGtQXC9Gdz09IiwidmFsdWUiOiJLK0FramQzRnNteUpRME9KdCtidjFRPT0iLCJtYWMiOiI2ZWZkNTcyMmE1NWY2MjNkZWQzYzMwYzA1ZTcyNGFlY2ExODNjZDgzNTEzZmEyNWE2MTg1ZmNhMjJiMDYzZTQ3In0=" target="_blank"><img src="{{ url('https://konten.usu.ac.id/storage/satker/15/statis/kaprodi-s3-ilmu-hukum.png') }}" /></a>
							<div class="nama">Prof. Dr. Ningrum Natasya Sirait SH, MLI <br></div>
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
          196201171989032002
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
					0017016203
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
					<a href="mailto:ningrum.sirait@gmail.com">ningrum.sirait@gmail.com</a>
					</td>
				</tr>
				</tbody></table>
							</div>
						 </div>
            <div>
              <h3>Sekretaris Program Studi</h3>
							<a href="https://direktori.usu.ac.id/profile/eyJpdiI6IktIMWpGbnpYNHNpdkp1aEdlNExkUnc9PSIsInZhbHVlIjoiRGRlK0JWak5hdEZtNjRjbExwN2JyQT09IiwibWFjIjoiMDJlMWFlZjk4MTE3OTc5ZGEwMjdhYTAyZjY1OTkxM2RmYzAwZDI5NjY5YWQ4M2I1MGI2MDgyMTdiMTgwMjdmNiJ9" target="_blank"><img src="{{ url('https://konten.usu.ac.id/storage/satker/15/statis/sekprod-doktoral-ilmu-hukum.png') }}" /></a>
							<div>
              <div class="nama">Dr. Tengku Keizeirina Devi Azwar SH., CN., M.Hum </div>
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
					197002012002122001
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
					0001027001
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
					<a href="mailto:deviazwar@yahoo.com">deviazwar@yahoo.com</a>
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
		<span>Student Organization</span>
	</h2>
	  <!-- <p class="container mt-5 h5 text-center">
    Berikut ini adalah organisasi yang terdapat pada Program Studi S-3 Ilmu Hukum :
    </p>
							<div class="organisasi-flex">
							<div class ="organisasi-list">
							<a href="https://instagram.com/imajinasiusu?igshid=MDM4ZDc5MmU=" target ="_blank"><img src="{{ url('https://konten.usu.ac.id/storage/satker/15/statis/logo-imajinasi.jpg') }}" /></a>
							<div class="hover">Ikatan Mahasiswa Departemen Ilmu Hukum (IMAJINASI)</div>
							<div class="hide">
							<p class="container h6 text-justify">Ikatan mahasiswa departemen Ilmu Hukum (IMAJINASI) berdiri pada tanggal 15 Maret 1985. Imajinasi adalah organisasi intra yang langsung berdiri dibawah naungan Departemen Ilmu Hukum. Para pengurus IMAJINASI adalah para mahasiswa Ilmu Hukum yang telah melalui proses seleksi terlebih dahulu, IMAJINASI berfokus pada kegiatan yang bermuara pada pengembangan potensi mahasiswa, baik secara teori maupun praktik
										IMAJINASI dibentuk oleh Drs. Danan Djaja, M.A selaku Ketua Departemen Ilmu Hukum yang pertama dan dibantu oleh Prof. Suwardi Lubis, M.S sebagai Sekretaris Departemen Ilmu Hukum masa itu. mereka memprakarsai berdirinya IMAJINASI menjadi sebuah organisasi atau murni sebagai media belajar bagi mahasiswa Ilmu Hukum dan bebas dari segala unsur politik
										Adapun visi dari IMAJINASI adalah, “ Menjadi organisasi yang mampu merangkul seluruh mahasiswa Ilmu Hukum fpsi USU dari berbagai latar belakang dalam usaha meningkatkan potensi dan pengetahuan dibidang Ilmu Hukum sekaligus menjadi sebuah keluarga besar Ilmu Hukum yang saling mendukung”. Salah satu wujud konkrit kegiatan IMAJINASI adalah membangun hubungan atau kerjasama dengan para praktisi dan akademisi komunikasi, baik yang berada didalam maupun diluar lingkungan kampus.
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
								<p class="keterangan-belum-ada-data">No Daya Yet</p>
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
