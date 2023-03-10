@inject('carbon', 'Carbon\Carbon')
@extends('theme.' . $theme . '.template')
@section('content')
<article>
<header class="penelitian-pengabdian-header">
<div class="penelitian-pengabdian-header-kiri">
        <div class="container">
            <div class="title-thumbnail">
                <h1>Research</h1>
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
    <section class="container" id="research-description">
        <div class="penelitian">
        <div class="title">
            <h4><strong>
            Realising Research Based on Tri Dharma
            </strong></h4>
        </div>
        <div class="desc">
            <p>
            Conducting research is a part of the three aspects of Tri Dharma of Higher Education. USU's vision is to be a university with academic superiority as a barometer of science development, with the ability to compete in a global world order. USU commits to providing excellent quality education and conducting a series of research to produce innovative findings beneficial for the public and recognised nationally and internationally. You can find a series of information related to research in the USU Faculty of Forestry here:
            </p>
        </div>
        </div>
    </section>
    <section id="research-news">
<div class="berita-penelitian-atas">
<div class="container berita-penelitian">
        <x-post-list :lang="$lang" :categories="['research']" :limit="1" container-class="container berita-kiri" >
        <x-slot name="html">
        @if(count($component->posts))
        <div class="berita-lainnya">
                @foreach ($component->posts as $post)
                <a href="{{ $post->categories[0]->slug.'/'.$post->slug }}">
							<div class="thumbnail">
								<img src="{{ $post->thumbnail_url }}" alt="{{ $post->title }}" />
							</div>
                            <div class ="bayangan">
                            <div class ="judul-berita-penelitian">
                            <a class="title" href="{{ $post->categories[0]->slug.'/'.$post->slug }}">{{ $post->title }}</a>
                            </div>
                            </div>
					  	</a>
                @endforeach
                </div>
                @else
					<div class="flex-keterangan-belum-ada-data">
						<p class="keterangan-belum-ada-data">No Research News Yet </p>
					</div>
				@endif
        </x-slot>
        </x-post-list>
        <div class="kartu-berita-penelitian">
                    <div class="title">
                        <h2 class="title-utama">Research In News</h2>
                        <h5 class="keterangan-berita-penelitian">Find the latest news covering the research that has been done</h5>
                    </div>
                    <div class="baca-berita-penelitian-selengkapnya">
                        <a class="button button-secondary" href="/id/kategori/berita">Other News</a>
                    </div>
                </div>
            </div>
<x-post-list :lang="$lang" :categories="['research']" :limit="3" container-class="container news">
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
						<a class="button button-unit" href="{{ $post->categories[0]->slug.'/'.$post->slug }}"> Read More </a>
					</div>
          </div>
					@endforeach
					</div>
				</x-slot>
				</x-post-list>
</section>
<section id="researcher-of-the-month">
    <div class="container">
        <div class="pakar">
            <div class="researcher-kiri">
                <div class="researcher-kiri-atas">
                    <h6><strong>Researcher <br> of the Month</strong></h6>
                    <img src="https://konten.usu.ac.id/storage/satker/15/statis/peneliti-bulan-ini.jpg"/><br>
                    <h6 class="name">Dr. Mahmul Siregar S.H., M.Hum</h6>
                </div>
                <div class="researcher-kiri-bawah">
                    <ul>
                        <li><a href="#">Kedudukan dan Tata Kelola Perseroan Terbatas yang Didirikan oleh Perguruan Tinggi Negeri Badan psikologi</a></li>
                        <li><a href="#">Penerapan Prinsip Tata Kelola Perusahaan yang Baik (Good Corporate Governance) Pada Badan Usaha Milik Desa di Sumatera Utara: Suatu Kajian psikologi</a></li>
                        <li><a href="#">OPTIMALISASI PENERAPAN ASAS CABOTAGE PADA ANGKUTAN LAUT UNTUK MENDUKUNG PEMBERDAYAAN INDUSTRI PELAYARAN NASIONAL</a></li>
                        <li><a href="#">MODEL EVALUASI KOMISI PENGAWASAN PERSAINGAN USAHA (KPPU) PADA KEBIJAKAN KEMITRAAN PETANI DENGAN PERUSAHAAN</a></li>
                        <li><a href="#">Peran dan Tanggung Jawab Kesyahbandaran Utama Pelabuhan BePsychologyan dalam Keselamatan dan Keamanan Angkutan Pelayaran untuk Membangun Integritas Sistem Transportasi Pelayaran</a></li>
                    </ul>

                    <a href="https://direktori.usu.ac.id/profile/eyJpdiI6IlwvQk1Ia0ZqOWxsMUZaRmlhQTdEZfpsi3PT0iLCJ2YWx1ZSI6IllNbExBNVRaZU9QM0huU25TOWVQZHc9PSIsIm1hYyI6IjYzOWUwNGM3MjRmZTVhMzljYjkwN2fpsiYTYxMWFlNGQ0ZDMwNDE0YjVjYWQ5YjFjMWE0MjhlNjc2ZDhiNDhjNWMifQ==" target="_blank"><div class="bottom">Other Research &nbsp;></div></a>
                </div>
            </div>
            <div class="pakar-kanan" id="pakar-fakultas">
                <div class="pakar-kanan-atas">
                    <div>
                        <h4><strong>Faculty Expert</strong></h4>
                    </div>
                    <div>
                        <p>
                        FIB USU is the leading Faculty of Cultural Science in North Sumatra, FIB Universitas Sumatera Utara is a gathering place for the best experts in each field of cultural science available at USU. You can find experts from each field below.                        </p>
                    </div>
                </div>
                <!-- <div id="carouselExampleControls2" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="pakar-kanan-bawah">
                                <div>
                                    <ul><b>&nbsp;Kehutanan</b>
                                        <li>drg. Ariyani., M.DSc., Sp.Pros(K)</li>
                                        <li>drg. Siti Wahyuni, M.DSc</li>
                                        <li>Prof. drg. Ismet Danial Nasution, Ph.D., Sp.Pros(K)</li>
                                        <li>Prof. drg. Haslinda Z.Tamin, M.Kes., Sp.Pros(K)</li>
                                        <li>Prof. drg. Slamat Tarigan, MS., Ph.D</li>
                                        <li>drg. Mohammad Zulkarnaen, M.Kes</li>
                                    </ul>
                                </div>
                                <div>
                                    <ul><b>&nbsp;</b>
                                        <li>drg. Dwi Tjahyaning Putranti, MS</li>
                                        <li>drg. Syafrinani, Sp.Pros(K)</li>
                                        <li>drg. Ricca Chairunnisa, Sp.Pros(K)</li>
                                        <li>drg. Ika Andryas, M.Sc</li>
                                        <li>drg. Hubban Nasution, M.Sc</li>
                                        <li>drg. Putri Welda Utami Ritonga, M.DSc, Sp.Pros(K)</li>
                                    </ul>
                                </div>
                                <div>
                                    <ul><b>&nbsp;Lorem Ipsum</b>
                                        <li>drg. Cek Dara Manja, Sp.RKG(K)</li>
                                        <li>drg. Dewi Kartika, M.DSc</li>
                                        <li>drg. Lidya Irani Nainggolan, Sp.RKG(K)</li>
                                    </ul>
                                </div>
                                <div>
                                    <ul><b>&nbsp;Lorem Ipsum</b>
                                        <li>drg. Siti Bahirrah, Sp.Ort(K)</li>
                                        <li>drg. Mimi Marina Lubis, Sp.Ort</li>
                                        <li>Prof. drg. Nazruddin, Ph.D, Sp.Ort(K)</li>
                                        <li>drg. Muslim, Sp.Ort(K)</li>
                                    </ul>
                                </div>
                                <div></div>
                                <div></div>
                                <div></div>
                                <a href="#carouselExampleControls2" role="button" data-slide="next"><div class="bottom">Selanjutnya &nbsp;></div></a>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="pakar-kanan-bawah">
                                <div>
                                    <ul><b>&nbsp;Lorem Ipsum</b>
                                        <li>drg. Hendry Rusdy, M.Kes., Sp.BM(K)</li>
                                        <li>drg. Ahyar Riza, Sp.BM(K)</li>
                                        <li>Dr. drg. Olivia Avriyanti Hanafiah, Sp.BM(K)</li>
                                        <li>drg. Indra Basar Siregar, M.Kes</li>
                                        <li>drg. Abdullah Oes</li>
                                        <li>drg. Isnandar, Sp.BM(K)</li>
                                    </ul>
                                </div>
                                <div>
                                    <ul><b>&nbsp;</b>
                                        <li>drg. Rahmi Syaflida, Sp.BM</li>
                                        <li>drg. Gostry Aldica Dohude, Sp.BM</li>
                                    </ul>
                                </div>
                                <div>
                                    <ul><b>&nbsp;Lorem Ipsum</b>
                                        <li>drg. Astrid Yudhit, M.Si</li>
                                        <li>drg. Sefty Aryani Harahap, M.Si</li>
                                        <li>drg. Lasminda Syafiar, M.Kes</li>
                                        <li>drg. Rusfian, M.Kes</li>
                                        <li>drg. Kholidina Imanda Harahap, M.DSc</li>
                                        <li>drg. Febby Revita Sari</li>
                                    </ul>
                                </div>
                                <div>
                                    <ul><b>&nbsp;Lorem Ipsum</b>
                                        <li>drg. Aida Fadhilla Darwis, M.DSc</li>
                                        <li>drg. Sayuti Hasibuan, Sp.PM</li>
                                        <li>Dr. drg. Wilda Hafny Lubis, M.Si</li>
                                        <li>drg. Nurdiana, Sp.PM</li>
                                        <li>drg. Indri Lubis, M.DSc</li>
                                        <li>drg. Pocut Astari</li>
                                    </ul>
                                </div>
                                <div></div>
                                <div></div>
                                <div></div>
                                <a href="#carouselExampleControls2" role="button" data-slide="prev"><div class="bottom">Sebelumnya &nbsp;></div></a>
                            </div>
                        </div> -->

                    <br><br><br><br><br><br><br>
					<div class="flex-keterangan-belum-ada-data">
						<p class="keterangan-belum-ada-data">No Data Available</p>
                    </div>
                    </div>
                </div>
    </div>
    </section>
    <section id="research-announcement">
    <div class="container news">
    <h1 class="section-title">Announcement</h1>
    <small class="section-subtitle">Latest Announcements Regarding Research</small>
    <x-post-list :lang="$lang" :categories="['research']" :limit="6">
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
						<p class="keterangan-belum-ada-data">No Research Announcement Yet</p>
					</div>
				@endif
      </x-slot>
    </x-post-list>
    </section>
    <section id="research-agenda">
      <x-post-list :lang="$lang" :categories="['agenda']" :limit="3" container-class="agenda">
          <x-slot name="html">
            <div class="container news">
            <h1 class="section-title">Research Agenda</h1>
            <small class="section-subtitle">Research Activity Agenda</small>
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
						<p class="keterangan-belum-ada-data">No Research Agenda Yet</p>
					</div>
				@endif
          </x-slot>
          </x-post-list>
    </section>
    <section id="daftar-penelitian">
    <div class="container news">
    <h1 class="section-title">Research List</h1>
    <div class="content mb-5">
    <table class="tabel" border="1">
			<tbody><tr>
				<th>Research Title</th>
				<th>Chief Researcher</th>
				<th>Scheme</th>
                <th>Funding Source</th>
                <th>Funds Approved</th>
                <th>Year</th>
			</tr>
			<tr>
				<td style="text-align:left">
                IMPLIKASI PENETAPAN DIVERSI TERHADAP ANAK
                YANG BERKONFLIK DENGAN psikologi TERKAIT
                PENGULANGAN TINDAK PIDANA (RESIDIVIS) ANAK
                (STUDI DI POLRESTABES MEDAN)
                </td>
				<td>Marlina</td>
				<td>Penelitian Dasar
                    Unggulan Perguruan
                    Tinggi
                </td>
				<td>DRPM</td>
				<td>Rp 92.020.000</td>
                <td>2021</td>
                </a>
			</tr>
            <tr>
            <td style="text-align:left">
                Dampak Akreditasi OBH bagi Peningkatan
                Perlindungan Anak di Sumatera Utara
                </td>
				<td>Rosmalinda</td>
				<td>Penelitian Dasar
                    Unggulan Perguruan
                    Tinggi
                </td>
				<td>DRPM</td>
				<td>Rp 75.710.000</td>
                <td>2021</td>
                </a>
			</tr>
            <tr>
            <td style="text-align:left">
                FENOMENA INSURANCE FRAUD YANG DILAKUKAN
                PENANGGUNG DALAM SENGKETA ASURANSI
                </td>
				<td>Mulhadi</td>
				<td>Penelitian Dasar
                    Unggulan Perguruan
                    Tinggi
                </td>
				<td>DRPM</td>
				<td>Rp 110.490.000</td>
                <td>2021</td>
                </a>
			</tr>
            <tr>
            <td style="text-align:left">
                Model Pelindungan Bagi Pekerja Migran Indonesia
                (PMI)Pada Masa Prakerja, Masa Kerja, dan Purna
                Kerja Berbasis Layanan Publik, Studi di Enam Provinsi:
                Sumatera Utara, Jawa Tengah, Jawa Timur, Bali, NTB,
                dan NTT.
                </td>
				<td>Agusmidah</td>
				<td>Penelitian Dasar</td>
				<td>DRPM</td>
				<td>Rp 155.980.000</td>
                <td>2021</td>
                </a>
			</tr>
		</tbody>
    </table>
    </div>
    </div>
    <div class="container selengkapnya"><a href="https://drive.google.com/file/d/1t965Cz_0r7ytRpowOFslyDbWHy7WNjVk/view" target="_blank">See More &nbsp;></a></div>
    </section>
    <section id="hibah-penelitian">
    <div class="container news">
    <h1 class="section-title">Research Grants</h1>
        <!-- <div class="hibah-list">
                <div class="hibah">
                    <img src="/images/logo-usu-hijau.png">
                    <div class="desc">
                        <h6>
                            <strong>Kearifan Dan Fungsi Kesusastraan Rakyat Melayu Kekinian Di Kabupaten Serdang Bedagai: Kajian Sosiologi Sastra</strong><br>
                            <small>author : Arie Azhari Nasution</small>
                            <p>
                               schema : Penelitian Dasar
                            </p>
                        </h6>
                    </div>
                </div>
                <div class="hibah">
                    <img src="/images/logo-usu-hijau.png">
                    <div class="desc">
                        <h6>
                            <strong>Analisis Pasar Kamu Kawan Lama Sebagai Daya Tarik Wisata Di Desa Denai Lama Kabupaten Deli Serdang</strong><br>
                            <small>author : Arwina Sufika</small>
                            <p>
                               schema : Penelitian Dasar
                            </p>
                        </h6>
                    </div>
                </div>
                <div class="hibah">
                    <img src="/images/logo-usu-hijau.png">
                    <div class="desc">
                        <h6>
                            <strong>Inferensi Pada Upacara Adat Mangupa Masyarakat Tapanuli Selatan: Kajian Kearifan Lokal</strong><br>
                            <small>author : Asrul Siregar</small>
                            <p>
                               schema : Penelitian Dasar
                            </p>
                        </h6>
                    </div>
                </div>
                <div class="hibah">
                    <img src="/images/logo-usu-hijau.png">
                    <div class="desc">
                        <h6>
                            <strong>Strategi Promosi Perpustakaan Universitas Sumatera Utara Pasca Pandemi Covid 19</strong><br>
                            <small>author : Aulia Rahma Ritonga</small>
                            <p>
                               schema : Penelitian Dasar
                            </p>
                        </h6>
                    </div>
                </div>
                <div class="hibah">
                    <img src="/images/logo-usu-hijau.png">
                    <div class="desc">
                        <h6>
                            <strong>Peningkatan Kemampuan Mendengar (Listening Skill) Dengan Implementasi Teori Tindak Tutur Pada Test Of English As Foreign Language</strong><br>
                            <small>author : Fikry Prastya Syahputra</small>
                            <p>
                               schema : Penelitian Dasar
                            </p>
                        </h6>
                    </div>
                </div>
                <div class="hibah">
                    <img src="/images/logo-usu-hijau.png">
                    <div class="desc">
                        <h6>
                            <strong>Kearifan Dan Fungsi Kesusastraan Rakyat Melayu Kekinian Di Kabupaten Serdang Bedagai: Kajian Sosiologi Sastra</strong><br>
                            <small>author : Arie Azhari Nasution</small>
                            <p>
                               schema : Penelitian Dasar
                            </p>
                        </h6>
                    </div>
                </div>   -->
                <div class="flex-keterangan-belum-ada-data">
						<p class="keterangan-belum-ada-data">No Data Available</p>
					</div>
        </div>
        <!-- <div class="container selengkapnya mt-4 mb-5"><a href="" target="_blank">Lihat Hibah Penelitian Selengkapnya &nbsp;></a></div> -->
    </section>
    <section class="academics" id="hki">
        <div class="container">
        <div class="hki">
            <div class="fl1">Intellectual Property Rights</div>
            <!-- <div class="fl2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</div> -->
        </div>
        <!-- <div class="hki2">
            <div class="fl3">
                <ul>
                    <li><a href="https://pdki-indonesia.dgip.go.id/detail/EC00202206033?type=copyright&keyword=EC00202206033" target="_blank">Mari Sembahlah IA</a></li>
                    <li><a href="https://pdki-indonesia.dgip.go.id/detail/EC00202206034?type=copyright&keyword=EC00202206034" target="_blank">Ersuraklah</a></li>
                    <li><a href="https://pdki-indonesia.dgip.go.id/detail/EC00202208190?type=copyright&keyword=EC00202208190" target="_blank">Pengawasuaraan Bunyi Bahasa Jepang (Nihongo No Boin No Museika)</a></li>
                    <li><a href="https://pdki-indonesia.dgip.go.id/detail/EC00202208189?type=copyright&keyword=EC00202208189" target="_blank">Pengantar Penerjemahan Bahasa Jepang (Nihongo Honyaku Nyuumon)</a></li>
                </ul>
            </div>
            <div class="fl3">
                <ul>
                <li><a href="https://pdki-indonesia.dgip.go.id/detail/EC00202213605?type=copyright&keyword=EC00202213605" target="_blank">Sastra Mahkota Bahasa</a></li>
                    <li><a href="https://pdki-indonesia.dgip.go.id/detail/EC00202213616?type=copyright&keyword=EC00202213616" target="_blank">Konvensi Stilistika Dalam Puisi Muhammad Haji Salleh</a></li>
                    <li><a href="https://pdki-indonesia.dgip.go.id/detail/EC00202221349?type=copyright&keyword=EC00202221349" target="_blank">Naskah Batak: Ketersediaan Media dan Upaya Revitalisasis</a></li>
                    <li><a href="https://pdki-indonesia.dgip.go.id/detail/EC00202218180?type=copyright&keyword=EC00202218180" target="_blank">Tinjauan Jenis, Fungsi dan Makna Makanan Tradisional Simalungun</a></li>
                </ul>
            </div>
            <div class="fl3">
                 <ul>
                    <li><a href="https://pdki-indonesia.dgip.go.id/detail/EC00202218178?type=copyright&keyword=EC00202218178" target="_blank">Hutinta (Teka-Teki) Simalungun: Kajian Tradisi Lisan</a></li>
                    <li><a href="https://pdki-indonesia.dgip.go.id/detail/EC00202218179?type=copyright&keyword=EC00202218179" target="_blank">Nilai-nilai Karakter dalam Permainan Tradisional Simalungun</a></li>
                    <li><a href="https://pdki-indonesia.dgip.go.id/detail/EC00202221350?type=copyright&keyword=EC00202221350" target="_blank">Hata Tongka: Wujud dan Fungsinya Sebagai Sarana Pembentuk Karakter Masyarakat Batak Toba</a></li>
                    <li><a href="https://pdki-indonesia.dgip.go.id/detail/EC00202219504?type=copyright&keyword=EC00202219504" target="_blank">Filsafat Lokal: Pencarian Kearifan</a></li>
                </ul>
            </div>
            <div class="fl3">
                <ul>
                    <li><a href="https://pdki-indonesia.dgip.go.id/detail/EC00202223002?type=copyright&keyword=EC00202223002" target="_blank">Fonotaktik Bahasa Batak Toba: Kajian Fonologi</a></li>
                    <li><a href="https://pdki-indonesia.dgip.go.id/detail/EC00202222995?type=copyright&keyword=EC00202222995" target="_blank">Ungkapan Kepercayaan Rakyat etnik Simalungun</a></li>
                    <li><a href="https://pdki-indonesia.dgip.go.id/detail/EC00202223010?type=copyright&keyword=EC00202223010" target="_blank">Kearifan Lokal Umpasa (Pantun) Etnik Simalungun</a></li>
                    <li><a href="https://pdki-indonesia.dgip.go.id/detail/EC00202223008?type=copyright&keyword=EC00202223008" target="_blank">Model Percakapan Dalam Upacara Adat Merunjak Pada Masyarakat Batak Toba: Kajian Pragmatik</a></li>
                </ul>
            </div>
        </div>
        <div class="container selengkapnya-white mt-4"><a href="https://drive.google.com/file/d/1UIeLRChJJHTtZo4cKGhYCfrRNI0dIyrM/view" target="_blank">See More IPR Data &nbsp;></a></div> -->
        <div class="flex-keterangan-belum-ada-data">
						<p class="keterangan-belum-ada-data">No Data Available</p>
					</div>
    </div>
    </section>
    <section id="research-facilities">
        <div class="container">
        <div class=fasilitas-riset>
            <div>
            <h1 class="section-title">
            Research Facilities
            </h1><br>
            <p>
            The Faculty of Psychology, Universitas Sumatera Utara provides a series of facilities to support the implementation of research in the field of Psychology.
            research in the field of Psychology. Having a moot court practice room, a legal clinic to a legal aid consultation institution
            makes the Faculty of Psychology, Universitas Sumatera Utara, superior and competent in supporting the learning outcomes of students.
            learning outcomes of students. You can find a series of research facilities at the Faculty of Psychology, Universitas Sumatera Utara.
            </p>
            </div>
            <div class="slider">
				<div class="slider__slides">
                <div class="slider__slide active">
						<img src="https://konten.usu.ac.id/storage/satker/15/statis/ruang-sidang-utama.jpeg" title="Laboratorium 1">
					</div>
					<div class="slider__slide">
                    <img src="https://konten.usu.ac.id/storage/satker/15/statis/klinik-psikologi.jpg" title="Laboratorium 2">
					</div>
                    <div class="slider__slide">
                    <img src="https://konten.usu.ac.id/storage/satker/15/statis/lkbh.jpeg" title="Laboratorium 3">
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
        <div class="lab">
        <div class="kotak">
                <h6>Moot Court Practice&nbsp;<a href="facility/moot-court"><i class="fa fa-external-link fl-right" aria-hidden="true"></i></a></h6>
                <small>Faculty of Psychology Building</small>
                <p>
                Moot Court Practice consisting of :<br>
                Criminal Moot Court Practice.<br>
                Civil Moot Court Practice<br>
                Moot Court Practice in the field of State Administration
                </p>
                <hr>
                <!-- <p>
                    <b>Prof. Dr. Zuriah Sitorus, MS</b><br>
                    <small>Kepala Laboratorium</small>
                </p>         -->
            </div>
            <div class="kotak">
                <h6>Legal Clinic&nbsp;<a href="fasilitas/legal-clinic"><i class="fa fa-external-link fl-right" aria-hidden="true"></i></a></h6>
                <small>Faculty of Psychology Building</small>
                <p>
                Legal Clinic Consists of:<br>
                Criminal Psychology Clinic<br>
                Civil Psychology Clinic<br>
                Anti-Corruption Psychology Clinic<br>
                Women and Children Protection Clinic.
                </p>
                <hr>
                <!-- <p>
                    <b>Prof. Dr. Zuriah Sitorus, MS</b><br>
                    <small>Kepala Laboratorium</small>
                </p>         -->
            </div>
            <div class="kotak">
                <h6>Legal Aid Consultation Institute (LKBH) &nbsp;<a href="facility/lkbh"><i class="fa fa-external-link fl-right" aria-hidden="true"></i></a></h6>
                <small>Faculty of Psychology Building</small>
                <p>
                Formed by the Rector's decree and currently has a Notary Deed for the purposes of Accreditation from the Ministry of Psychology and Human Rights of the Republic of Indonesia, Scope of Tasks:
                Carrying out the function of legal consultation to the community, especially the poor who need it;
                provide legal advocacy services to the community, especially the poor who need it;
                representing the Dean of fpsi USU for legal issues faced by the Faculty.
                </p>
                <hr>
                <!-- <p>
                    <b>Prof. Dr. Zuriah Sitorus, MS</b><br>
                    <small>Kepala Laboratorium</small>
                </p>         -->
            </div>
        </div>
    </div>
    </section>
    <section id="reference">
        <div class="container">
        <div class="journal">
            <div class="box-3">
                <div class="g-2">
                    <h5>Journal</h5>
                    <a href="https://jurnal.usu.ac.id/" target="_blank"><i class="fa fa-external-link fl-right" aria-hidden="true"></i></a>
                </div>

                <img src="https://konten.usu.ac.id/storage/satker/15/statis/journal-wallpaper.jpg"/>
                <ul><b>The Faculty of Psychology Journal can be viewed at :</b>
                    <li><a style="text-decoration:none" href="https://talenta.usu.ac.id/Mahadi" target="_blank">Mahadi</a></li>
                    <li><a style="text-decoration:none" href="https://talenta.usu.ac.id/ALJ" target="_blank">Acta Psychology Journal</a></li>
                    <li><a style="text-decoration:none" href="https://talenta.usu.ac.id/nlr" target="_blank">Neoclassical Legal Review</a></li>
                    <li><a style="text-decoration:none" href="https://talenta.usu.ac.id/rslr" target="_blank">Recht Studiosum</a></li>
                    <li><a style="text-decoration:none" href="https://talenta.usu.ac.id/uljls" target="_blank">Ultimate Journal of Legal Studies (ULJLS)</a></li>
                </ul>
            </div>
            <div class="box-3">
                <h5>Conference</h5>
                <img src="https://konten.usu.ac.id/storage/satker/15/statis/conference.jpg"/>
                <!-- <h5>Seminar</h5>
                <ul>
                    <li>Lorem ipsum dolor sit amet consectetur.</li>
                    <li>Lorem ipsum dolor sit amet consectetur.</li>
                    <li>Lorem, ipsum dolor sit amet consectetur.</li>
                </ul> -->
                <div class="flex-keterangan-belum-ada-data">
						<p class="keterangan-belum-ada-data">No Data Available</p>
					</div>
            </div>
            <div class="box-3">
                <div class="g-2">
                    <h5>USU Digilib</h5>
                    <a href="https://digilib.usu.ac.id/" target ="_blank"><i class="fa fa-external-link fl-right" aria-hidden="true"></i></a>
                </div>
                <div class="g-2">
                    <h5>University Archive</h5>
                    <a href="https://www.usu.ac.id/" target ="_blank"><i class="fa fa-external-link fl-right" aria-hidden="true"></i></a>
                </div>
                <div class="g-2">
                    <h5>Faculty of Psychology Archive</h5>
                    <a href="archive"><i class="fa fa-external-link fl-right" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
    </div>
    </section>
    <!-- <section class="academics">
        <div class="container">
        <h4 class="roadmap-title">Roadmap</h4>
        <div class="roadmap">
            <div class="cl-3">
                <ul>
                    <a href="#"><li>Research Format</li></a>
                    <a href="#"><li>Research Roadmap Diagram</li></a>
                    <a href="#"><li>Research Roadmap Program Studi Sarjana</li></a>
                    <a href="#"><li>Research Roadmap Program Studi Magister</li></a>
                </ul>
            </div>
            <div class="cl-3">
                <ul>
                    <a href="#"><li>Research Roadmap Program Studi Doktor</li></a>
                    <a href="#"><li>Research Roadmap Program Studi Spesialis Prostodonsia</li></a>
                    <a href="#"><li>Research Roadmap Program Studi Spesialis Periodonsia</li></a>
                    <a href="#"><li>Research Roadmap Program Studi Spesialis Ortodonsia</li></a>
                </ul>
            </div>
            <div class="cl-3">
                <ul>
                    <a href="#"><li>Research Roadmap Program Studi Spesialis Konservasi Gigi</li></a>
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
