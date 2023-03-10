@inject('Str', 'Str')
@extends('theme.' . $theme . '.template')

@section('content')
<article>
<div class="page-thumbnail" style="--image: url('/images/thumbnail_prodi.png')">
	<h1 class="container">
		Dosen & Staff
	</h1>
</div>

<div class ="container">
<div class ="grid-halaman-dosen-staf">

<!-- //isi kiri -->
<div class="grid-kiri-dosen-staf">

<section class="pimpinan-fakultas">
@php
  $priority = array_map(fn($x) => Str::title($x),[__('dean')]);
  $items = collect($posts['items']);
  $groups = $items->groupBy(fn($x) => $x->content->position);
@endphp
@foreach ($priority as $group_key)
      @if (isset($groups[$group_key]))
        <div class="pimpinan-dekan">
        @php
        $groups[$group_key] = $groups[$group_key]->sortBy(fn($x) => $x->content->priority_number);
        @endphp
        @foreach ($groups[$group_key] as $item)  
            <div class="pimpinan">
            <a href ="{{ url("$lang/" . __('lecturer') . "/{$item->slug}") }}">
                <div class="atas">
                  <div class ="stel-gambar">
                    <img src="{{ $item->content->profile_picture }}">
                  </div>
                    <div class="bawah">
                        <div class="nama">{{ $item->content->name }}</div>
                        <small>{{ $item->content->rank }}</small>
                    </div>
                </div>
                </a>
            </div>
            @endforeach
        </div>
        @endif
    @endforeach
    </section>
    <section>
      <div class ="grid-statistik-dosen">
        <div class ="grid-kiri-statistik-dosen">
          <p class="stats">22</p>
          <p>GURU BESAR</p>
        </div>
              <div class ="grid-kanan-statistik-dosen">
                <div class="hijau1">
                <p class="stats">-</p>
                <p>DOKTOR</p>
                </div>
                <div class="hijau2">
                <p class="stats">60</p>
                <p>TENDIK</p>
                </div>
                <div class="kuning1">
                <p class="stats">-</p>
                <p>DOSEN INBOUND</p>
                </div>
                <div class="kuning2">
                <p class="stats">-</p>
                <p>DOSEN OUTBOUND</p>
                </div>
          </div>
        </div>
    </section>
    <section>
      <div class ="grid-data-dan-info-dosen">
        <div class ="grid-kiri-judul">
          <p>MERDEKA BELAJAR</p>
          <p>KAMPUS MERDEKA</p>
        </div>
              <div class ="hiasan-kuning-kanan">
                </div>
          </div>
          <div class="isi-konten">
          <div class="tulisan-klik">
          <div class ="kiri-tulisan-klik">
          <a href="#"><p>Dosen Berkarya</p></a>
          </div>
          <div class="kanan-tulisan-klik">
          <a href="#"><i class="fa fa-external-link fl-right" aria-hidden="true"></i></a>
         </div>
         </div>
         <div class="tulisan-klik">
          <div class ="kiri-tulisan-klik">
          <a href="#"><p>Competitive Fund</p></a>
          </div>
          <div class="kanan-tulisan-klik">
          <a href="#"><i class="fa fa-external-link fl-right" aria-hidden="true"></i></a>
         </div>
         </div>
         <div class="tulisan-klik">
          <div class ="kiri-tulisan-klik">
          <a href="#"><p>Matching Fund</p></a>
          </div>
          <div class="kanan-tulisan-klik">
          <a href="#"><i class="fa fa-external-link fl-right" aria-hidden="true"></i></a>
         </div>
         </div>
          <div class="tulisan-klik">
          <div class ="kiri-tulisan-klik">
          <a href="#"><p>Center of Excellence</p></a>
          </div>
          <div class="kanan-tulisan-klik">
          <a href="#"><i class="fa fa-external-link fl-right" aria-hidden="true"></i></a>
         </div>
         </div>
          <div class="tulisan-klik">
          <div class ="kiri-tulisan-klik">
          <a href="#"><p>Hibah Kelas Kolaboratif dan Partisipatif</p></a>
          </div>
          <div class="kanan-tulisan-klik">
          <a href="#"><i class="fa fa-external-link fl-right" aria-hidden="true"></i></a>
         </div>
         </div>
          <div class="tulisan-klik">
          <div class ="kiri-tulisan-klik">
          <a href="#"><p>Modul Digital</p></a>
          </div>
          <div class="kanan-tulisan-klik">
          <a href="#"><i class="fa fa-external-link fl-right" aria-hidden="true"></i></a>
         </div>
         </div>
          </div>
    </section>
    <section>
      <div class ="grid-data-dan-info-dosen">
        <div class ="grid-kiri-judul">
          <p>KONFERENSI</p>
        </div>
              <div class ="hiasan-kuning-kanan">
                </div>
          </div>
          <div class="isi-konten">
          <div class="tulisan-klik">
          <div class ="kiri-tulisan-klik">
          <a href="#"><p>International Conference on Tropical Medicine and Infectious Disease (ICTROMI)</p></a>
          </div>
          <div class="kanan-tulisan-klik">
          <a href="#"><i class="fa fa-external-link fl-right" aria-hidden="true"></i></a>
         </div>
         </div>
          </div>
    </section>
    <section>
      <div class ="grid-data-dan-info-dosen">
        <div class ="grid-kiri-judul">
          <p>PUBLIKASI</p>
        </div>
              <div class ="hiasan-kuning-kanan">
                </div>
          </div>
          <div class="isi-konten">
          <div class="tulisan-klik">
          <div class ="kiri-tulisan-klik">
          <a href="#"><p>Sinta</p></a>
          </div>
          <div class="kanan-tulisan-klik">
          <a href="#"><i class="fa fa-external-link fl-right" aria-hidden="true"></i></a>
         </div>
         </div>
          </div>
    </section>
    <section>
        <div class ="judul-bgputih">
          <p>Agenda</p>
          <p class ="abu-abu"></p>
        </div>
          <div class="isi-konten-putih">
          <div class="tulisan-klik-putih">
          <div class ="kiri-tulisan-klik-putih">
          <!-- <a href="#"><p>Lorem Ipsum</p></a>
          <a href="#"><p>Lorem Ipsum</p></a>
          <a href="#"><p>Lorem Ipsum</p></a>
          <a href="#"><p>Lorem Ipsum</p></a> -->
          <div class="flex-keterangan-belum-ada-data">
						<p class="keterangan-belum-ada-data">Data Belum Ada</p>
         </div>
          </div>
         </div>
          </div>
    </section>
    <section>
        <div class ="judul-bgputih">
          <p>Pengumuman</p>
          <p class ="abu-abu"></p>
        </div>
          <div class="isi-konten-putih">
          <!-- <div class="tulisan-klik-putih">
          <div class ="kiri-tulisan-klik-putih">
          <a href="#"><p>Lorem Ipsum</p></a>
          </div>
          <div class="kanan-tulisan-klik-putih">
          <a href="#"><i class="fa fa-external-link fl-right" aria-hidden="true"></i></a>
         </div>
         </div>
         <div class="tulisan-klik-putih">
          <div class ="kiri-tulisan-klik-putih">
          <a href="#"><p>Lorem Ipsum</p></a>
          </div>
          <div class="kanan-tulisan-klik-putih">
          <a href="#"><i class="fa fa-external-link fl-right" aria-hidden="true"></i></a>
         </div>
         </div>
         <div class="tulisan-klik-putih">
          <div class ="kiri-tulisan-klik-putih">
          <a href="#"><p>Lorem Ipsum</p></a>
          </div>
          <div class="kanan-tulisan-klik-putih">
          <a href="#"><i class="fa fa-external-link fl-right" aria-hidden="true"></i></a>
         </div>
         </div>
         <div class="tulisan-klik-putih">
          <div class ="kiri-tulisan-klik-putih">
          <a href="#"><p>Lorem Ipsum</p></a>
          </div>
          <div class="kanan-tulisan-klik-putih">
          <a href="#"><i class="fa fa-external-link fl-right" aria-hidden="true"></i></a>
         </div>
         </div> -->
         <div class="flex-keterangan-belum-ada-data">
						<p class="keterangan-belum-ada-data">Data Belum Ada</p>
         </div>
          </div>
    </section>

    <section>
        <div class ="judul-bgputih">
          <p>Sistem Informasi</p>
          <p class ="abu-abu"></p>
        </div>
          <div class="isi-konten-putih">
          <div class="tulisan-klik-putih">
          <div class ="kiri-tulisan-klik-putih">
          <a href="https://direktori.usu.ac.id/" target="_blank"><p>Direktori USU</p></a>
          </div>
          <div class="kanan-tulisan-klik-putih">
          <a href="https://direktori.usu.ac.id/" target="_blank"><i class="fa fa-external-link fl-right" aria-hidden="true"></i></a>
         </div>
         </div>
         <div class="tulisan-klik-putih">
          <div class ="kiri-tulisan-klik-putih">
          <a href="https://elearning.usu.ac.id/" target="_blank"><p>E-Learning</p></a>
          </div>
          <div class="kanan-tulisan-klik-putih">
          <a href="https://elearning.usu.ac.id/" target="_blank"><i class="fa fa-external-link fl-right" aria-hidden="true"></i></a>
         </div>
         </div>
         <div class="tulisan-klik-putih">
          <div class ="kiri-tulisan-klik-putih">
          <a href="https://library.usu.ac.id/e-journals/" target="_blank"><p>E-Journal</p></a>
          </div>
          <div class="kanan-tulisan-klik-putih">
          <a href="https://library.usu.ac.id/e-journals/" target="_blank"><i class="fa fa-external-link fl-right" aria-hidden="true"></i></a>
         </div>
         </div>
         <div class="tulisan-klik-putih">
          <div class ="kiri-tulisan-klik-putih">
          <a href="https://digilib.usu.ac.id/" target="_blank"><p>DIGILIB</p></a>
          </div>
          <div class="kanan-tulisan-klik-putih">
          <a href="https://digilib.usu.ac.id/" target="_blank"><i class="fa fa-external-link fl-right" aria-hidden="true"></i></a>
         </div>
         </div>
         <div class="tulisan-klik-putih">
          <div class ="kiri-tulisan-klik-putih">
          <a href="/id/arsip"><p>Arsip Fakultas</p></a>
          </div>
          <div class="kanan-tulisan-klik-putih">
          <a href="https://arsip.usu.ac.id/"><i class="fa fa-external-link fl-right" aria-hidden="true"></i></a>
         </div>
         </div>
         <div class="tulisan-klik-putih">
          <div class ="kiri-tulisan-klik-putih">
          <a href="https://arsip.usu.ac.id/" target="_blank"><p>Arsip USU</p></a>
          </div>
          <div class="kanan-tulisan-klik-putih">
          <a href="https://arsip.usu.ac.id/" target="_blank"><i class="fa fa-external-link fl-right" aria-hidden="true"></i></a>
         </div>
         </div>
          </div>
    </section>

    

    

</div>

<!-- //isi kanan -->
<div class ="grid-kanan-dosen-staf">

<section class="pimpinan-fakultas">
@php
  $priority = array_map(fn($x) => Str::title($x),[__('wakil dekan')]);
  $items = collect($posts['items']);
  $groups = $items->groupBy(fn($x) => $x->content->position);
@endphp
@foreach ($priority as $group_key)
      @if (isset($groups[$group_key]))
        <div class="pimpinan-grid-3">
        @php
        $groups[$group_key] = $groups[$group_key]->sortBy(fn($x) => $x->content->priority_number);
        @endphp
        @foreach ($groups[$group_key] as $item)  
            <div class="pimpinan">
            <a href ="{{ url("$lang/" . __('lecturer') . "/{$item->slug}") }}">
                <div class="atas">
                  <div class ="stel-gambar">
                    <img src="{{ $item->content->profile_picture }}">
                  </div>
                    <div class="bawah">
                        <div class="nama">{{ $item->content->name }}</div>
                        <small>{{ $item->content->rank }}</small>
                    </div>
                </div>
                </a>
            </div>
            @endforeach
        </div>
        @endif
    @endforeach
    </section>
    <section class="akordion-halaman-dosen">    
        <nav class="accordion arrows">
        <input type="radio" name="accordion" id="cb1" />
        <section class="accord">
            <label class="accord-title" for="cb1">Dosen Matematika</label>
            <label class="accord-close" for="acc-close"></label>
            <div class="accord-content">
            @php
                  $priority = array_map(fn($x) => Str::title($x),[__('dosen matematika')]);
                  $items = collect($posts['items']);
                  $groups = $items->groupBy(fn($x) => $x->content->position);
                @endphp
                @foreach ($priority as $group_key)
                      @if (isset($groups[$group_key]))
                        <div class="pimpinan-grid-2">
                        @php
                        $groups[$group_key] = $groups[$group_key]->sortBy(fn($x) => $x->content->priority_number);
                        @endphp
                        @foreach ($groups[$group_key] as $item)  
                            <div class="pimpinan">
                            <a href ="{{ url("$lang/" . __('lecturer') . "/{$item->slug}") }}">
                                <div class="atas">
                                  <div class ="stel-gambar">
                                    <img src="{{ $item->content->profile_picture }}">
                                  </div>
                                    <div class="bawah">
                                        <div class="nama">{{ $item->content->name }}</div>
                                        
                                        <small>
                                          <table>
                                            <tr>
                                              <td>NIP</td>
                                              <td>&nbsp;:</td>
                                              <td>&nbsp;{{ $item->content->nip }}</td>
                                            </tr>
                                            <tr>
                                              <td>NIDN</td>
                                              <td>&nbsp;:</td>
                                              <td>&nbsp;{{ $item->content->nidn_nidk }}</td>
                                            </tr>
                                            </table>
                                          </small>
                                    </div>
                                </div>
                                </a>
                            </div>
                            @endforeach
                        </div>
                        @endif
                    @endforeach
            </div>  
        </section>
        <input type="radio" name="accordion" id="cb2" />
        <section class="accord">
            <label class="accord-title" for="cb2">Dosen Fisika</label>
            <label class="accord-close" for="acc-close"></label>
            <div class="accord-content">
            @php
                  $priority = array_map(fn($x) => Str::title($x),[__('dosen fisika')]);
                  $items = collect($posts['items']);
                  $groups = $items->groupBy(fn($x) => $x->content->position);
                @endphp
                @foreach ($priority as $group_key)
                      @if (isset($groups[$group_key]))
                        <div class="pimpinan-grid-2">
                        @php
                        $groups[$group_key] = $groups[$group_key]->sortBy(fn($x) => $x->content->priority_number);
                        @endphp
                        @foreach ($groups[$group_key] as $item)  
                            <div class="pimpinan">
                            <a href ="{{ url("$lang/" . __('lecturer') . "/{$item->slug}") }}">
                                <div class="atas">
                                  <div class ="stel-gambar">
                                    <img src="{{ $item->content->profile_picture }}">
                                  </div>
                                    <div class="bawah">
                                        <div class="nama">{{ $item->content->name }}</div>
                                        
                                        <small>
                                          <table>
                                            <tr>
                                              <td>NIP</td>
                                              <td>&nbsp;:</td>
                                              <td>&nbsp;{{ $item->content->nip }}</td>
                                            </tr>
                                            <tr>
                                              <td>NIDN</td>
                                              <td>&nbsp;:</td>
                                              <td>&nbsp;{{ $item->content->nidn_nidk }}</td>
                                            </tr>
                                            </table>
                                          </small>
                                    </div>
                                </div>
                                </a>
                            </div>
                            @endforeach
                        </div>
                        @endif
                    @endforeach


            </div>
        </section>
        <input type="radio" name="accordion" id="cb3" />
        <section class="accord">
            <label class="accord-title" for="cb3">Dosen Kimia</label>
            <label class="accord-close" for="acc-close"></label>
            <div class="accord-content">
            @php
                  $priority = array_map(fn($x) => Str::title($x),[__('dosen kimia')]);
                  $items = collect($posts['items']);
                  $groups = $items->groupBy(fn($x) => $x->content->position);
                @endphp
                @foreach ($priority as $group_key)
                      @if (isset($groups[$group_key]))
                        <div class="pimpinan-grid-2">
                        @php
                        $groups[$group_key] = $groups[$group_key]->sortBy(fn($x) => $x->content->priority_number);
                        @endphp
                        @foreach ($groups[$group_key] as $item)  
                            <div class="pimpinan">
                            <a href ="{{ url("$lang/" . __('lecturer') . "/{$item->slug}") }}">
                                <div class="atas">
                                  <div class ="stel-gambar">
                                    <img src="{{ $item->content->profile_picture }}">
                                  </div>
                                    <div class="bawah">
                                        <div class="nama">{{ $item->content->name }}</div>
                                        
                                        <small>
                                          <table>
                                            <tr>
                                              <td>NIP</td>
                                              <td>&nbsp;:</td>
                                              <td>&nbsp;{{ $item->content->nip }}</td>
                                            </tr>
                                            <tr>
                                              <td>NIDN</td>
                                              <td>&nbsp;:</td>
                                              <td>&nbsp;{{ $item->content->nidn_nidk }}</td>
                                            </tr>
                                            </table>
                                          </small>
                                    </div>
                                </div>
                                </a>
                            </div>
                            @endforeach
                        </div>
                        @endif
                    @endforeach
            </div>
        </section>
        <input type="radio" name="accordion" id="cb4" />
        <section class="accord">
            <label class="accord-title" for="cb4">Dosen Biologi</label>
            <label class="accord-close" for="acc-close"></label>
            <div class="accord-content">
            @php
                  $priority = array_map(fn($x) => Str::title($x),[__('dosen biologi')]);
                  $items = collect($posts['items']);
                  $groups = $items->groupBy(fn($x) => $x->content->position);
                @endphp
                @foreach ($priority as $group_key)
                      @if (isset($groups[$group_key]))
                        <div class="pimpinan-grid-3">
                        @php
                        $groups[$group_key] = $groups[$group_key]->sortBy(fn($x) => $x->content->priority_number);
                        @endphp
                        @foreach ($groups[$group_key] as $item)  
                            <div class="pimpinan">
                            <a href ="{{ url("$lang/" . __('lecturer') . "/{$item->slug}") }}">
                                <div class="atas">
                                  <div class ="stel-gambar">
                                    <img src="{{ $item->content->profile_picture }}">
                                  </div>
                                    <div class="bawah">
                                        <div class="nama">{{ $item->content->name }}</div>
                                        
                                        <small>
                                          <table>
                                            <tr>
                                              <td>NIP</td>
                                              <td>&nbsp;:</td>
                                              <td>&nbsp;{{ $item->content->nip }}</td>
                                            </tr>
                                            <tr>
                                              <td>NIDN</td>
                                              <td>&nbsp;:</td>
                                              <td>&nbsp;{{ $item->content->nidn_nidk }}</td>
                                            </tr>
                                            </table>
                                          </small>
                                    </div>
                                </div>
                                </a>
                            </div>
                            @endforeach
                        </div>
                        @endif
                    @endforeach
        </div>
        </section>
        <input type="radio" name="accordion" id="cb5" />
        <section class="accord">
            <label class="accord-title" for="cb5">Kepala Laboratorium</label>
            <label class="accord-close" for="acc-close"></label>
            <div class="accord-content">
            @php
                  $priority = array_map(fn($x) => Str::title($x),[__('kepala laboratorium')]);
                  $items = collect($posts['items']);
                  $groups = $items->groupBy(fn($x) => $x->content->position);
                @endphp
                @foreach ($priority as $group_key)
                      @if (isset($groups[$group_key]))
                        <div class="pimpinan-grid-2">
                        @php
                        $groups[$group_key] = $groups[$group_key]->sortBy(fn($x) => $x->content->priority_number);
                        @endphp
                        @foreach ($groups[$group_key] as $item)  
                            <div class="pimpinan">
                            <a href ="{{ url("$lang/" . __('lecturer') . "/{$item->slug}") }}">
                                <div class="atas">
                                  <div class ="stel-gambar">
                                    <img src="{{ $item->content->profile_picture }}">
                                  </div>
                                    <div class="bawah">
                                        <div class="nama">{{ $item->content->name }}</div>
                                        
                                        <small>{{ $item->content->rank }}</small>
                                    </div>
                                </div>
                                </a>
                            </div>
                            @endforeach
                        </div>
                        @endif
                    @endforeach
            </div>
        </section>
        <input type="radio" name="accordion" id="cb6" />
        <section class="accord">
            <label class="accord-title" for="cb6">Tenaga Kependidikan</label>
            <label class="accord-close" for="acc-close"></label>
            <div class="accord-content">
            </div>
        </section>

        <input type="radio" name="accordion" id="acc-close" />
    </nav>
</section>
<section class="penelitian-pengabdian-dosen">          
					<div class="judul-penelitian-pengabdian-dosen">
          <h3>
					<span>Riset/Penelitian</span>            
					</h3>
          <a href="penelitian">
			    <i class="fa fa-external-link fl-right"></i>
			    </a>
          </div>
						<!-- <figure class="prodi-ytube">
						  <iframe src="https://drive.google.com/uc?export=view&id=12jxy66sTA5kIPdNyn1YgCotUV6RM4ckO&embedded=true" frameborder="0" height="500px" width="100%">
						  </iframe>
						</figure>
          <p class="container mt-6 h6">
					Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
					</p>   -->
          <div class="flex-keterangan-belum-ada-data">
						<p class="keterangan-belum-ada-data">File Beserta Keterangan Belum Ada</p>
         </div>
</section>
<section class="penelitian-pengabdian-dosen">          
					<div class="judul-penelitian-pengabdian-dosen">
          <h3>
					<span>Pengabdian Masyarakat</span>            
					</h3>
          <a href="pengabdian">
			    <i class="fa fa-external-link fl-right"></i>
			    </a>
          </div>
						<!-- <figure class="prodi-ytube">
						  <iframe src="https://drive.google.com/uc?export=view&id=12jxy66sTA5kIPdNyn1YgCotUV6RM4ckO&embedded=true" frameborder="0" height="500px" width="100%">
						  </iframe>
						</figure>
          <p class="container mt-6 h6">
					Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
					</p>   -->
          <div class="flex-keterangan-belum-ada-data">
						<p class="keterangan-belum-ada-data">File Beserta Keterangan Belum Ada</p>
         </div>
</section>





</div>













</div>
</div>
</article>
@endsection


