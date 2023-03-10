@inject('carbon', 'Carbon\Carbon')
@extends('theme.' . $theme . '.template')
@section('content')
<article>
<header class="penelitian-pengabdian-header">
<div class="penelitian-pengabdian-header-kiri">
        <div class="container">
            <div class="title-thumbnail">
                <h1>Public Service</h1>
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
    <section class="pengabdian container" id="public-service-description">
        <div class="title">
            <h4><strong>
            Realising Public Service Based On Tri Dharma
            </strong></h4>
        </div>
        <div class="desc">
            <p>
            Public Service is one of the Tri Dharma of Higher Education pillars, apart from education dharma and research dharma. USU Statutes, as described in Peraturan Pemerintah No. 67 of 2013, state that USU has a vision as a world-class national university pioneer, superior and innovative, devoted to the national needs and humanity based on the national cultural values of Pancasila. This USU vision is conducted through Tri Dharma of Higher Education: education, research, and public service. USU’s duty is not only conducting academic education for its students but also conducting research, innovation development, and science utilisation and development, superior and beneficial for the public.
            </p>
        </div>
    </section>
    <section class="container-pengabdian" id="public-service-fact">
        <div class="statistik-pengabdian">
        <div class="data-total">
        <h2>
        Public Service Grants Receivers
        </h2>
        <h1>-</h1>
        </div>
        <div class="data-utama">
        <div class="data-utama-atas">
            <div class ="angka-statistik">
            <h4>
            Public Service Area
            </h4>
            </div>
            <div class ="angka-statistik">
            <h5>
            LOCAL

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
            NATIONAL
            </h5>
            <h2>-</h2>
            </div>
            <div class ="angka-statistik">
            <h5>
            INTERNATIONAL
            </h5>
            <h2>-</h2>
            </div>
        </div>
        <div class="data-utama-bawah">
        <div class="data-utama-bawah-kiri">

            <h4>
            INTERNAL CONTRIBUTION AND SOCIAL EMPOWERMENT
           </h4>
           <h2>
            -
            <h2>
        </div>
        <div class="data-utama-bawah-kanan">
            <h4>
            EXTERNAL CONTRIBUTION AND SOCIAL EMPOWERMENT
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
<section id="public-service-news">
<div class="berita-pengabdian-atas">
<div class="container berita-pengabdian">
        <div class="kartu-berita-pengabdian">
                    <div class="title">
                        <h2 class="title-utama">Public Service In News</h2>
                        <h5 class="keterangan-berita-pengabdian">Find the latest news related to the performed public services.</h5>
                    </div>
                    <div class="baca-berita-pengabdian-selengkapnya">
                        <a class="button button-secondary" href="/id/kategori/berita">Other News</a>
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
						<p class="keterangan-belum-ada-data">No Public Service News yet</p>
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
<section id="public-service-announcement">
    <div class="container news">
    <h1 class="section-title">Announcement</h1>
    <small class="section-subtitle">Latest Announcement Related to Public Service</small>
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
        <p class="title-pengumuman-lainnya">Other Announcement</p>
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
						<p class="keterangan-belum-ada-data">No Service Announcement Yet.</p>
					</div>
				@endif
      </x-slot>
    </x-post-list>
    </section>
    <section id="public-service-agenda">
            <x-post-list :lang="$lang" :categories="['agenda']" :limit="3" container-class="agenda">
            <x-slot name="html">
            <div class="container news">
            <h1 class="section-title">Public Service Agenda</h1>
            <small class="section-subtitle">Public Service Activity Agenda</small>
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
						<p class="keterangan-belum-ada-data">No Public Service Agenda</p>
					</div>
				@endif
          </x-slot>
          </x-post-list>
    </section>
    <section id="list-of-public-service-activities">
    <div class="container news">
    <h1 class="section-title">List of Public Services</h1>
    <p class="container mt-5 h5 text-justify">
    Public Services (abdimas) performed by USU academic civitas are based on the abdimas roadmap. Abdimas theme can also be based on the USU Research Master Plan (RIP) because it is a follow-up of research results, partners’ needs, and national needs. RIP UKWMS consists of 7 groups, including food independence; new and renewable energy; health techologies and medicine development; information and communication technology; advanced materials, social aspects, humanities, education, arts and culture; and disaster management
    </p>
    <div class="content mb-5">
	<table class="tabel" id ="catTable" border="1">
			<tbody><tr>
				<th>Chief Executive Officer</th>
				<th>Title of Service</th>
				<th>Service Scheme</th>
				<th>Approved Cost</th>
				<th>Funding Source</th>
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
    <div class="container selengkapnya mt-3 mb-5"><a href="https://drive.google.com/file/d/1XkFig7zHI1Cgr9wdmCLiZthpx0fPKXfp/view" target="_blank">See More&nbsp;></a></div>
    </section>
    <section class="academics" id="public-service-area">
        <div class ="container">
        <div class="area-pengabdian">
            <div class="judul-area-pengabdian">Community Service Area</div>
            <div class="keterangan-area-pengabdian">Conducting community service is one of the three pillars of the Tri Dharma of Higher Education. Get further information about the community service area conducted by the USU Faculty of Math and Science here:</div>
        </div>
                    <div class="flex-keterangan-belum-ada-data">
						<p class="keterangan-belum-ada-data">No Data Available</p>
					</div>
        <!-- <div class="flex-area-pengabdian">
            <div class="kiri-area-pengabdian">
                <div class="grid-kiri-atas-area-pengabdian">
                <p class="title-kecil-pengabdian">Judul</p>
                <h3 class="title-besar-pengabdian">Pengembangan Ternak Nila dengan Teknologi Bioflog untuk Meningkatkan Pendapatan Masyarakat Desa Pasar Lembu Kab. Asahan</h3>
                <p class="title-kecil-pengabdian">skema</p>
                <h3 class="title-besar-pengabdian-skema">Regular Mono Year</h3>
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
    <section id="public-service-grant">
    <div class="container news">
    <h1 class="section-title">Community Service Grants</h1>
        <!-- <div class="hibah-list">
                <div class="hibah">
                    <img src="/images/FAHUTA/hibah.jpg">
                    <div class="desc">
                        <h6>
                            <strong>Kemitraan Regular Mono Year</strong><br>
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
                            <strong>Professor Serves</strong><br>
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
                            <strong>Disaster Mitigation</strong><br>
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
						<p class="keterangan-belum-ada-data">No Community Service Grants Yet</p>
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
                    <a href="#"><li>Format Pengabdian Kepada Masyarakat Regular Mono Year</li></a>
                    <a href="#"><li>Format Pengabdian Kepada Masyarakat Professor Serves</li></a>
                    <a href="#"><li>Format Pengabdian Kepada Masyarakat Disaster Mitigation</li></a>
                </ul>
            </div>
            <div class="cl-3">
                <ul>
                    <a href="#"><li>Roadmap Pengabdian Kepada Masyarakat</li></a>
                    <a href="#"><li>Format Pengabdian Kepada Masyarakat Regular Mono Year</li></a>
                    <a href="#"><li>Format Pengabdian Kepada Masyarakat Professor Serves</li></a>
                    <a href="#"><li>Format Pengabdian Kepada Masyarakat Disaster Mitigation</li></a>
                </ul>
            </div>
            <div class="cl-3">
                <ul>
                    <a href="#"><li>Roadmap Pengabdian Kepada Masyarakat</li></a>
                    <a href="#"><li>Format Pengabdian Kepada Masyarakat Regular Mono Year</li></a>
                    <a href="#"><li>Format Pengabdian Kepada Masyarakat Professor Serves</li></a>
                    <a href="#"><li>Format Pengabdian Kepada Masyarakat Disaster Mitigation</li></a>
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
