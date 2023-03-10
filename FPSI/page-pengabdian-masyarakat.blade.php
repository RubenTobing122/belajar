@inject('carbon', 'Carbon\Carbon')
@extends('theme.' . $theme . '.template')
@section('content')
<article>
<header class="penelitian-pengabdian-header">
<div class="penelitian-pengabdian-header-kiri">
        <div class="container">
            <div class="title-thumbnail">
                <h1>Pengabdian Masyarakat</h1>
            </div>
        </div>
</div>
<div class="penelitian-pengabdian-header-kanan">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="sdgs-baris-atas">
                <a href="https://sdgs.usu.ac.id/tentang/sdgs-1" target="_blank"><img src="{{ url('images/sdgs-1.png') }}"/></a>
                <a href="https://sdgs.usu.ac.id/tentang/sdgs-2" target="_blank"><img src="{{ url('images/sdgs-2.png') }}"/></a>
                <a href="https://sdgs.usu.ac.id/tentang/sdgs3" target="_blank"><img src="{{ url('images/sdgs-3.png') }}"/></a>
                <a href="https://sdgs.usu.ac.id/tentang/sdgs-4" target="_blank"><img src="{{ url('images/sdgs-4.png') }}"/></a>
                <a href="https://sdgs.usu.ac.id/tentang/sdgs-5" target="_blank"><img src="{{ url('images/sdgs-5.png') }}"/></a>
                <a href="https://sdgs.usu.ac.id/tentang/sdgs-6" target="_blank"><img src="{{ url('images/sdgs-6.png') }}"/></a>
                </div>
                <div class="sdgs-baris-bawah">
                <a href="https://sdgs.usu.ac.id/tentang/sdgs-7" target="_blank"><img src="{{ url('images/sdgs-7.png') }}"/></a>
                <a href="https://sdgs.usu.ac.id/tentang/sdgs-8" target="_blank"><img src="{{ url('images/sdgs-8.png') }}"/></a>
                <a href="https://sdgs.usu.ac.id/tentang/sdg-9-industry-innovation" target="_blank"><img src="{{ url('images/sdgs-9.png') }}"/></a>
                <a href="https://sdgs.usu.ac.id/tentang/sdgs-10" target="_blank"><img src="{{ url('images/sdgs-10.png') }}"/></a>
                <a href="https://sdgs.usu.ac.id/tentang/sdgs11" target="_blank"><img src="{{ url('images/sdgs-11.png') }}"/></a>
                <a href="https://sdgs.usu.ac.id/tentang/sdgs-12" target="_blank"><img src="{{ url('images/sdgs-12.png') }}"/></a>

                </div>
            </div>
            <div class="carousel-item">
                <div class="sdgs-baris-atas">
                <a href="https://sdgs.usu.ac.id/tentang/sdgs-13" target="_blank"><img src="{{ url('images/sdgs-13.png') }}"/></a>
                <a href="https://sdgs.usu.ac.id/tentang/sdgs-14" target="_blank"><img src="{{ url('images/sdgs-14.png') }}"/></a>
                <a href="https://sdgs.usu.ac.id/tentang/sdgs-15" target="_blank"><img src="{{ url('images/sdgs-15.png') }}"/></a>
                <a href="https://sdgs.usu.ac.id/tentang/sdgs-16" target="_blank"><img src="{{ url('images/sdgs-16.png') }}"/></a>
                <a href="https://sdgs.usu.ac.id/tentang/sdgs-17" target="_blank"><img src="{{ url('images/sdgs-17.png') }}"/></a>
                </div>
                <!-- <div class="sdgs-baris-bawah">
                <a href="#"><img src="{{ url('images/sdgs-16.png') }}"/></a>
                <a href="#"><img src="{{ url('images/sdgs-17.png') }}"/></a>
                </div> -->
            </div>
        </div>
        <!-- <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
        </a> -->
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
        </a>
    </div>
</div>
</header>
    <br>
    <section class="pengabdian container" id="deskripsi-pengabdian">
        <div class="title">
            <h4><strong>
                Mewujudkan Pengabdian Berlandaskan Tri Darma
            </strong></h4>
        </div>
        <div class="desc">
            <p>
          Pengabdian Masyarakat merupakan salah satu pilar Tri Dharma Perguruan Tinggi, disamping dharma pendidikan dan pengajaran serta dharma penelitian. Statuta USU yang tertuang dalam Peraturan Pemerintah nomor 67 tahun 2013 mengemukakan bahwa USU mempunyai visi sebagai pelopor perguruan tinggi nasional berkelas dunia yang unggul dan inovatif, mengabdi kepada kepentingan bangsa dan kemanusiaan dijiwai nilai-nilai budaya bangsa berdasarkan Pancasila. Visi USU tersebut dilaksanakan melalui Tri Dharma Perguruan Tinggi, yaitu: pendidikan, penelitian, dan pengabdian kepada masyarakat. Tugas USU tidak hanya melaksanakan pendidikan bagi mahasiswanya, tetapi juga melaksanakan riset dan mengembangkan inovasi, serta pelestarian dan pengembangan ilmu yang unggul dan bermanfaat bagi masyarakat.
            </p>
        </div>
    </section>
    <section class="container-pengabdian" id="fakta-pengabdian">
        <div class="statistik-pengabdian">
        <div class="data-total">
        <h2>
            Penerima Hibah Pengabdian Masyarakat
        </h2>
        <h1>-</h1>
        </div>
        <div class="data-utama">
        <div class="data-utama-atas">
            <div class ="angka-statistik">
            <h4>
                Area Pengabdian Masyarakat
            </h4>
            </div>
            <div class ="angka-statistik">
            <h5>
                LOKAL
            </h5>
            <h2>-</h2>
            </div>
            <div class ="angka-statistik">
            <h5>
                REGIONAL
            </h5>
            <h2>-</h2>
            </div>
            <div class ="angka-statistik">
            <h5>
               NASIONAL
            </h5>
            <h2>-</h2>
            </div>
            <div class ="angka-statistik">
            <h5>
               INTERNASIONAL
            </h5>
            <h2>-</h2>
            </div>
        </div>
        <div class="data-utama-bawah">
        <div class="data-utama-bawah-kiri">

            <h4>
                KONTRIBUSI INTERNAL DAN PEMBERDAYAAN SOSIAL
           </h4>
           <h2>
            -
            <h2>
        </div>
        <div class="data-utama-bawah-kanan">
            <h4>
                KONTRIBUSI INTERNAL DAN PEMBERDAYAAN SOSIAL
        </h4>
        <h2>
            -
            <h2>
        </div>
        </div>
        </div>
        <div class="hiasan-kanan">
        <div class="hiasan-kuning"></div>
        <div class="hiasan-hijau"></div>
    </div>
    </div>
</section>
<section id="berita-pengabdian">
<div class="berita-pengabdian-atas">
<div class="container berita-pengabdian">
        <div class="kartu-berita-pengabdian">
                    <div class="title">
                        <h2 class="title-utama">Pengabdian Dalam Berita</h2>
                        <h5 class="keterangan-berita-pengabdian">Temukan Berita terbaru yang meliput pengabdian kepada masyarakat yang telah dilakukan</h5>
                    </div>
                    <div class="baca-berita-pengabdian-selengkapnya">
                        <a class="button button-secondary" href="/id/kategori/berita">Berita Lainnya</a>
                    </div>
                </div>
        <x-post-list :lang="$lang"  :categories="['community']" :limit="1" container-class="container berita-kanan">
        <x-slot name="html">
        @if(count($component->posts))
        <div class="berita-lainnya">
                @foreach ($component->posts as $post)
                <a href="{{ $post->categories[0]->slug.'/'.$post->slug }}">
							<div class="thumbnail">
								<img src="{{ $post->thumbnail_url }}" alt="{{ $post->title }}" />
							</div>
                            </a>
                            <div class ="bayangan">
                            <div class ="judul-berita-pengabdian">
                            <a class="title" href="{{ $post->categories[0]->slug.'/'.$post->slug }}">{{ $post->title }}</a>
                            </div>
                            </div>
					  	</a>
                @endforeach
        </div>
                 @else
					<div class="flex-keterangan-belum-ada-data">
						<p class="keterangan-belum-ada-data">Berita Pengabdian Belum Ada</p>
					</div>
				@endif
        </x-slot>
        </x-post-list>
</div>
<x-post-list :lang="$lang"  :categories="['community']"  :limit="3" container-class="container news">
				<x-slot name="html">
					<div class="news-list">
					@foreach ($component->posts as $post)
					<div class="news-card">
						<a href="{{ $post->categories[0]->slug.'/'.$post->slug }}">
							<div class="thumbnail">
								<img src="{{ $post->thumbnail_url }}" alt="{{ $post->title }}" />
							</div>
					  	</a>
                          <div class="tag-and-date-news">
                                <div class="usu-tag-news-category">
                                    <p>{{ ucwords($post->categories[0]->slug)}}&nbsp;{{ucwords($post->categories[1]->slug) }}</p>
                                </div>
                                <div class="date-news">
                                <p>{{ (new $carbon)->create($post->published_at)->locale($lang)->isoFormat('DD MMMM YYYY')}}</p>
                                </div>
                            </div>
						<a class="title" href="{{ $post->categories[0]->slug.'/'.$post->slug }}">{{ $post->title }}</a>
            <div class="baca-berita-selengkapnya">
						<a class="button button-unit" href="{{ $post->categories[0]->slug.'/'.$post->slug }}"> Baca Selengkapnya </a>
					</div>
          </div>
					@endforeach
					</div>
				</x-slot>
				</x-post-list>
</section>
<section id="pengumuman-pengabdian">
    <div class="container news">
    <h1 class="section-title">Pengumuman</h1>
    <small class="section-subtitle">Pengumuman Terbaru Seputar Pengabdian Masyarakat</small>
    <x-post-list :lang="$lang" :categories="['community']" :limit="6">
      <x-slot name="html">
      @if(count($component->posts))
        @php
          $main = array_shift($component->posts);
        @endphp
        <div class="container pengumuman">
          <div class="kartu-pengumuman">
              <div class="grid-pengumuman">
                  <div class="grid-pengumuman-left">

                        <a href="{{ url("$lang/{$main->categories[0]->slug}/{$main->slug}") }}">
                          <img src="{{ $main->thumbnail_url }}" alt="{{ $main->title }}" />
                        </a>
                        </div>
                        <div class="grid-pengumuman-right">
                        <small>{{ (new $carbon)->create($main->published_at)->locale($lang)->isoFormat('DD MMMM YYYY') }} &nbsp;</small>
                        <div class="title">
                        <a href="{{ url("$lang/{$main->categories[0]->slug}/{$main->slug}") }}">{{ $main->title }}</a>
                        </div>
                        <div class="baca-pengumuman-selengkapnya">
                        <a class="button button-secondary" href="{{ url("$lang/{$main->categories[0]->slug}/{$main->slug}") }}">Baca Selengkapnya</a>
                        </div>
                      </div>
                    </div>
                  </div>
          <div class="pengumuman-lainnya">
        <p class="title-pengumuman-lainnya">Pengumuman Lainnya</p>
        <ul>
        @foreach ($component->posts as $index => $post)
          <li style="list-style:none;">
            <a class ="title-lainnya" href="{{ url("$lang/{$post->categories[0]->slug}/{$post->slug}") }}">   {{ $post->title }}</a>
          </li>
          @endforeach
        </ul>
        </div>
        @else
					<div class="flex-keterangan-belum-ada-data">
						<p class="keterangan-belum-ada-data">Pengumuman Pengabdian Belum Ada</p>
					</div>
				@endif
      </x-slot>
    </x-post-list>
    </section>
    <section id="agenda-pengabdian">
            <x-post-list :lang="$lang" :categories="['agenda']" :limit="3" container-class="agenda">
            <x-slot name="html">
            <div class="container news">
            <h1 class="section-title">Agenda Pengabdian</h1>
            <small class="section-subtitle">Agenda Kegiatan Pengabdian Masyarakat</small>
            @if(count($component->posts))
              <div class="news-list">
            @foreach ($component->posts as $post)
            <div class="agenda-card">
              <a href="{{ url("$lang/{$post->categories[0]->slug}/{$post->slug}") }}">
                <img class="w-100" src="{{ $post->thumbnail_url }}" alt="{{ $post->title }}" />
              </a>
              <div class="main-info">
                <div class="when">
                  <div class="date">{{ (new $carbon)->create($post->published_at)->locale($lang)->isoFormat('DD') }}</div>
                  <div class="month">{{ (new $carbon)->create($post->published_at)->locale($lang)->isoFormat('MMM') }}</div>
                </div>
                <div>
                  <h6>
                    <a class="title" href="{{ url("$lang/{$post->categories[0]->slug}/{$post->slug}") }}">{{ $post->title }}</a>
                  </h6>
                  <div class="metadata-list">
                    <div class="metadata-row">

                      <div class="icon"><i class="fa-regular fa-clock"></i></div>
                    <div>
                            @php
                              $schedule = null;
                              if(count($post->content->schedules)){
                                $schedule = $post->content->schedules[count($post->content->schedules) - 1];
                                $start = (new $carbon($schedule[0]))->locale($lang)->isoFormat('hh:MM A');
                                $finish = (new $carbon($schedule[1]))->locale($lang)->isoFormat('hh:MM A');
                              }
                            @endphp
                            {{ $start ?? 'N/A' }} - {{ $finish ?? 'N/A'  }}
                          </div>
                    </div>
                  </div>
                  <div class="metadata-list">
                    <div class="metadata-row">
                      <div class="icon"><i class="fas fa-map-marker-alt"></i></div>
                      {{ $post->content->location }}
                    </div>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
            </div>
			</div>
            @else
					<div class="flex-keterangan-belum-ada-data">
						<p class="keterangan-belum-ada-data">Agenda Pengabdian Belum Ada</p>
					</div>
				@endif
          </x-slot>
          </x-post-list>
    </section>
    <section id="daftar-kegiatan-pengabdian">
    <div class="container news">
    <h1 class="section-title">Daftar Pengabdian Masyarakat</h1>
    <p class="container mt-5 h5 text-justify">
    Pengabdian pada masyarakat (abdimas) yang dilaksanakan oleh civitas akademik USU berlandaskan pada Rencana Induk Penelitian (RIP) USU. RIP USU memiliki sepuluh tema pokok, yaitu: Sumber Saya Manusia dan Pengajaran; Pertanian, Pangan dan Kelautan; Perkebunan dan Kehutanan; Industri, Pertambagan, Energi Terbarukan dan Rekayasa Teknologi; Kesehatan; Infrastruktur dan Transportasi; Ekonomi, Koperasi dan Pariwisata; psikologi, Sosial Budaya; Tata Kelola Pemerintahan; dan Mitigasi Bencana, Iklim, dan Lingkungan Hidup.
    </p>
    <div class="content mb-5">
		<table class="tabel" id ="catTable" border="1">
			<tbody><tr>
				<th>Ketua Pelaksana</th>
				<th>Judul Pengabdian</th>
				<th>Skim Pengabdian</th>
				<th>Biaya Disetujui</th>
				<th>Sumber Dana</th>
            </tr>
			<tr>
				<td>
                Afrita
                </td>
				<td>
                Peningkatan Pemahaman Pancasila Dan
                Kewarganegaraan: Ancaman Narkoba Bagi
                Generasi Muda Melunturkan Semangat
                Kebangsaan Di Kelurahan Pangkalan Masyhur
                Kecamatan Medan Johor
                </td>
				<td>
                Mono Tahun Reguler
                </td>
                <td>
                Rp 20.000.000
                </td>
                <td>
                NON PNBP
                </td>
			</tr>
            <tr>
				<td>
                Alvi Syahrin
                </td>
				<td>
                Implementasi System psikologi Justice Restorative
                Dalam Kasus Kekerasan Dalam Rumah Tangga
                (Kdrt)
                </td>
				<td>
                Mono Tahun Reguler
                </td>
                <td>
                Rp 26.000.000
                </td>
                <td>
                NON PNBP
                </td>
			</tr>
            <tr>
				<td>
                Erna Herlinda
                </td>
				<td>
                Peningkatan Pemahaman Tentang Dampak
                Pernikahan Dini Terhadap Ketahanan Keluarga Di
                Kelurahan Titi Kuning
                </td>
				<td>
                Mono Tahun Reguler
                </td>
                <td>
                Rp 20.000.000
                </td>
                <td>
                NON PNBP
                </td>
			</tr>
            <tr>
				<td>
                Eva Syahfitri Nasution
                </td>
				<td>
                Pemberdayaan Keluarga/Pengasuh Anak Dengan
                Hiv (Adha) Dalam Dukungan Kesehatan Dan Hak
                Anak Di Lsm Medan Plus Medan
                </td>
				<td>
                Mono Tahun Reguler
                </td>
                <td>
                Rp 21.500.000
                </td>
                <td>
                NON PNBP
                </td>
			</tr>
		</tbody>
    </table>
    </div>
    </div>
    <div class="container selengkapnya mt-3 mb-5"><a href="https://drive.google.com/file/d/1XkFig7zHI1Cgr9wdmCLiZthpx0fPKXfp/view" target="_blank">Lihat Selengkapnya &nbsp;></a></div>
    </section>
    <section class="academics" id="area-pengabdian">
        <div class ="container">
        <div class="area-pengabdian">
            <div class="judul-area-pengabdian">Area Pengabdian Masyarakat</div>
            <div class="keterangan-area-pengabdian">Menjalankan kegiatan pengabdian kepada masyarakat merupakan satu dari tiga pilar dalam Tri Dharma Perguruan Tinggi. Informasi lebih lanjut mengenai area pengabdian masyaraakt yang telah dilaksanakan Fakultas psikologi USU dapat dilihat disini:</div>
        </div>
                    <div class="flex-keterangan-belum-ada-data">
						<p class="keterangan-belum-ada-data">Data Area Pengabdian Belum Ada</p>
					</div>
        <!-- <div class="flex-area-pengabdian">
            <div class="kiri-area-pengabdian">
                <div class="grid-kiri-atas-area-pengabdian">
                <p class="title-kecil-pengabdian">Judul</p>
                <h3 class="title-besar-pengabdian">Pengembangan Ternak Nila dengan Teknologi Bioflog untuk Meningkatkan Pendapatan Masyarakat Desa Pasar Lembu Kab. Asahan</h3>
                <p class="title-kecil-pengabdian">skema</p>
                <h3 class="title-besar-pengabdian-skema">Mono Tahun Reguler</h3>
                <p class="title-kecil-pengabdian">Ketua</p>
                <h3 class="title-besar-pengabdian-skema">Afifuddin Dalimunthe</h3>
                <a href="#">
                <p class="lihat-selengkapnya-area-pengabdian">lihat selengkapnya &nbsp; ></p></a>
                </div>
                <div class="grid-kiri-bawah-area-pengabdian">
                <ul>
                    <li style="list-style:none;">
                    <a class ="title-lainnya" href="#">Iptek mesin Serut Lidi bagi warga Desa Lau Damak Kec. Bahorok Kab. Langkat</a>
                    </li>
                    <li>
                    <a class ="title-lainnya" href="#">Pelatihan pembuatan dan pengembangan Produk Cinderamata dari Pantai Alam Serdang, Desa Rugemuk</a>
                    </li>
                    <li>
                    <a class ="title-lainnya" href="#">Pelatihan pembuatan dan pengembangan Produk Cinderamata dari Pantai Alam Serdang, Desa Rugemuk</a>
                    </li>
                    <li>
                    <a class ="title-lainnya" href="#">Pelatihan pembuatan dan pengembangan Produk Cinderamata dari Pantai Alam Serdang, Desa Rugemuk</a>
                    </li>
                    <li>
                    <a class ="title-lainnya" href="#">Pelatihan pembuatan dan pengembangan Produk Cinderamata dari Pantai Alam Serdang, Desa Rugemuk</a>
                    </li>
                </ul>
                </div>
            </div>
            <div class="kanan-area-pengabdian">
            <div class="slider">
				<div class="slider__slides">
					<div class="slider__slide active">
						<img src="/images/FAHUTA/maps.jpg" title="Maps-Pengabdian">
					</div>
					<div class="slider__slide">
						<img src="/images/FAHUTA/laboratorium2.jpg" title="Pengabdian-photo1">
					</div>
                    <div class="slider__slide">
						<img src="/images/FAHUTA/laboratorium3.jpg" title="Pengabdian-photo1">
					</div>
				</div>
				<div id="nav-button--prev" class="slider__nav-button"></div>
				<div id="nav-button--next" class="slider__nav-button"></div>

				<div class="slider__nav">
					<div class="slider__navlink active"></div>
					<div class="slider__navlink"></div>
                    <div class="slider__navlink"></div>
				</div>
            </div>
            </div>
        </div> -->
        </div>
    </section>
    <section id="hibah-pengabdian">
    <div class="container news">
    <h1 class="section-title">Hibah Pengabdian</h1>
        <!-- <div class="hibah-list">
                <div class="hibah">
                    <img src="/images/FAHUTA/hibah.jpg">
                    <div class="desc">
                        <h6>
                            <strong>Kemitraan Mono Tahun Reguler</strong><br>
                            <small>Deadline : 1 January 2023</small>
                            <p>
                                Capacity building in big data and technology development through health
                            </p>
                        </h6>
                    </div>
                </div>
                <div class="hibah">
                    <img src="/images/FAHUTA/hibah.jpg">
                    <div class="desc">
                        <h6>
                            <strong>Professor Mengabdi</strong><br>
                            <small>Deadline : 1 January 2023</small>
                            <p>
                                Capacity building in big data and technology development through health
                            </p>
                        </h6>
                    </div>
                </div>
                <div class="hibah">
                    <img src="/images/FAHUTA/hibah.jpg">
                    <div class="desc">
                        <h6>
                            <strong>Mitigasi Bencana</strong><br>
                            <small>Deadline : 1 January 2023</small>
                            <p>
                                Capacity building in big data and technology development through health
                            </p>
                        </h6>
                    </div>
                </div>
                <div class="hibah">
                    <img src="/images/FAHUTA/hibah.jpg">
                    <div class="desc">
                        <h6>
                            <strong>Abdimas Internasional</strong><br>
                            <small>Deadline : 1 January 2023</small>
                            <p>
                                Capacity building in big data and technology development through health
                            </p>
                        </h6>
                    </div>
                </div>
                <div class="hibah">
                    <img src="/images/FAHUTA/hibah.jpg">
                    <div class="desc">
                        <h6>
                            <strong>PPUPIK</strong><br>
                            <small>Deadline : 1 January 2023</small>
                            <p>
                                Capacity building in big data and technology development through health
                            </p>
                        </h6>
                    </div>
                </div>
                <div class="hibah">
                <a href ="#">
                <strong>Hibah Lainnya</strong><br>
                    <div class="desc">
                        <h6>
                            <p>
                                Capacity building in big data and technology development through health
                            </p>
                        </h6>
                    </div>
                </div>
                </a> -->

					<div class="flex-keterangan-belum-ada-data mb-5">
						<p class="keterangan-belum-ada-data">Hibah Pengabdian Belum Ada</p>
					</div>
        </div>
    </section>
    <!-- <section class="academics">
        <div class="container">
        <h4 class="roadmap-title">Roadmap</h4>
        <div class="roadmap">
            <div class="cl-3">
                <ul>
                    <a href="#"><li>Roadmap Pengabdian Kepada Masyarakat</li></a>
                    <a href="#"><li>Format Pengabdian Kepada Masyarakat Mono Tahun Reguler</li></a>
                    <a href="#"><li>Format Pengabdian Kepada Masyarakat Professor Mengabdi</li></a>
                    <a href="#"><li>Format Pengabdian Kepada Masyarakat Mitigasi Bencana</li></a>
                </ul>
            </div>
            <div class="cl-3">
                <ul>
                    <a href="#"><li>Roadmap Pengabdian Kepada Masyarakat</li></a>
                    <a href="#"><li>Format Pengabdian Kepada Masyarakat Mono Tahun Reguler</li></a>
                    <a href="#"><li>Format Pengabdian Kepada Masyarakat Professor Mengabdi</li></a>
                    <a href="#"><li>Format Pengabdian Kepada Masyarakat Mitigasi Bencana</li></a>
                </ul>
            </div>
            <div class="cl-3">
                <ul>
                    <a href="#"><li>Roadmap Pengabdian Kepada Masyarakat</li></a>
                    <a href="#"><li>Format Pengabdian Kepada Masyarakat Mono Tahun Reguler</li></a>
                    <a href="#"><li>Format Pengabdian Kepada Masyarakat Professor Mengabdi</li></a>
                    <a href="#"><li>Format Pengabdian Kepada Masyarakat Mitigasi Bencana</li></a>
                </ul>
            </div>
        </div>
    </div>
    </section> -->

</article>

<!-- script -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script>
    $('.carousel').carousel({
  interval: 0
})
</script>


@endsection
