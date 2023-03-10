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
<section class="container prestige" id="faculty-achievements">
    <div class="prestige-info">
    <i class="fa-solid fa-flag-checkered"></i>
      <div class="title">
        Rank #10<br />
        Best Psychology Majors in Indonesia 2023
      </div>
      <div class="scope">With a World Ranking of 1,501+</div>
      <div class="source">(THE WUR version)</div>
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
      Education Program
      </h1>
      <div class="academic-list">
        <div class="academic">
        <div class="d-flex justify-content-center">
            <img src="{{ asset('images/icons/diploma.png') }}" alt="Program Sarjana" />
          </div>
          <h2>Undergraduate Program</h2>
          <p>Faculty of Psychology, Universitas Sumatera Utara Organizes 1 undergraduate study program, namely Undergraduate Program in Psychology Studies</p>
          <div>
            <a href="id/pendidikan#undergraduate" class="button button-secondary">Read More</a>
          </div>
        </div>
        <div class="academic">
          <div class="d-flex justify-content-center">
            <img src="{{ asset('images/icons/book.png') }}" alt="Program Pascasarjana" />
          </div>
          <h2>Master's Program</h2>
          <p>Faculty of "Psychology, Universitas Sumatera Utara Organizes 2 master study programs namely Master's Program in Psychology Studies and Master's Program in Notary</p>
          <div>
            <a href="id/pendidikan#master" class="button button-secondary">Read More</a>
          </div>
        </div>
        <div class="academic">
          <div class="d-flex justify-content-center">
            <img src="{{ asset('images/icons/diploma.png') }}" alt="Program Sarjana" />
          </div>
          <h2>Doctoral Program</h2>
          <p>Faculty of Psychology, Universitas Sumatera Utara Organizes 1 doctoral study program, namely Doctoral Program in Psychology Studies</p>
          <div>
            <a href="id/pendidikan#doctoral" class="button button-secondary">Read More</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="container student-registration" id="penerimaan-mahasiswa">
    <img src="{{ url('images/mahasiswa.jpg') }}" alt="Foto Mahasiswa" />
    <div class="information">
      <h1>New Students Admission Universitas Sumatera Utara</h1>
      <small>Admission for 1st Semester of Academic Year 2022/2023</small>
      <p style ="text-align:left">Universitas Sumatera Utara Faculty of Psychology opens admission for new students enrolling in the first semester of academic year 2022/2023 for all study programs on bachelor, master and doctoral degrees</p>
      <a href ="https://www.usu.ac.id/id/penerimaan" target="_blank" class="button button-secondary">
        Penerimaan
      </a>
    </div>
  </section>
  <section class="container news" id="berita-utama">
    <h1 class="section-title">Faculty of Psychology News</h1>
    <div class="d-flex align-items-center">
      <small class="section-subtitle flex-grow-1">Faculty of Psychology latest news</small>
      <a class="link" href="{{ url('/id/kategori/berita') }}">
    Other News <i class="fa-solid fa-angles-right"></i>
      </a>
    </div>
          [post-list categories="news" limit=6]
  </section>
  <section id="agenda-kegiatan">
    <div class="container news">
      <h1 class="section-title">Education Development Unit Agenda</h1>
        <small class="section-subtitle">Agenda of Education Development Unit Activities</small>
      [post-agenda-list limit=3 class="mt-4"]
 </section>
  <section class="container news" id="pengumuman">
    <h1 class="section-title">Announcement</h1>
    <small class="section-subtitle">Latest announcements about curriculum and learning</small>
    [post-announcement-list]
  </section>
    <section class="container researches" id="fakta-fakultas">
    <h1>
    Faculty Facts
    </h1>
    <div class="research-numbers">
    <div class="research-number-container">
        <div class="icon">
        <div class="rounded-circle usu-bg-light-gray p-3">
            <img style="width: 50px; height: 50px" src="{{ asset('images/icons/hook.png') }}" alt="Tahun Berdiri" />
          </div>
        </div>
        <div>
          <b>Year of Establishment</b>
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
          <b>Study Program</b>
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
          <b>Student</b>
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
          <b>Professor</b>
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
          <b>Lecturer</b>
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
          <b>Staff</b>
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
          <b>Laboratory</b>
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
          <b>International Journal</b>
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
          <b>International Conference</b>
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
          <b>IPR</b>
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
                <h1>Dean's Welcoming Speech</h1>
            </div>
            <p>
            Assalamualaikum warahmatullahi wabarakatuh, Welcome to the Website of the Faculty of Psychology, Universitas Sumatera Utara. We transform for the best legal education<br>
            On behalf of the Academic Community, I am pleased to welcome you to the Faculty of Psychology, Universitas Sumatera Utara. Since 1954 we have been providing high quality education, research and community service. And currently we are carrying out various transformation efforts to become an internationally competitive Faculty of Psychology. We provide sources of legal thinking and human resources in the field of Psychology that are superior and with integrity. Studying at USU's Faculty of Psychology means you are on the right track. Welcome to a better future.
            </p>
        </div>
    </div>
  </section>
  <section class="testimoni" id="testimoni-alumni">
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
        Pengalaman saya selama kuliah di Fakultas Hukum USU, ada ruang akademik yang terbuka. Ruang-ruang diskusi diluar ruang kelas, yang menambah wawasan, pengalaman, sehingga menjadi sangat berarti bagi saya hingga saat ini        </p>
        </div>
        </div>
        <div class="grid-2">
        <img src="https://konten.usu.ac.id/storage/satker/22/statis/alumni1-Fakultas Hukum.jpg">
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
        Pengalaman saya selama kuliah di Fakultas Hukum USU, ada ruang akademik yang terbuka. Ruang-ruang diskusi diluar ruang kelas, yang menambah wawasan, pengalaman, sehingga menjadi sangat berarti bagi saya hingga saat ini        </p>
        </div>
        </div>
        <div class="grid-2">
        <img src="https://konten.usu.ac.id/storage/satker/22/statis/alumni2-Fakultas Hukum.jpg">
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
        <img src="https://konten.usu.ac.id/storage/satker/22/statis/alumni3-Fakultas Hukum.jpg">
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
								<p class="keterangan-belum-ada-data">No Data Yet</p>
							</div>
      </div>
</section>
  <section class="partners" id="mitra">
    <h1>Partners</h1>
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
            <div style="text-align:center;" class="container-xl fw-normal lh-lg mt-5"><a href="https://drive.google.com/file/d/1WMpedjvrtQ0r67cC3PIu5eNB_L7ZIZNK/view" target="_blank" class="button button-mitra">See More</a></div>
  </section>
  <section class="container researches" id="fasilitas">
    <div class="research-sources">
    <div>
        <img src="{{ url('https://konten.usu.ac.id/storage/satker/15/statis/gedung-peradilan-semu.jpeg') }}" alt="Facility" />
        <h2 class = "titlelabs">Moot Court Building</h2>
        <p class ="labs" style="text-align:justify"> This is a two-story building used for various activities. On the first floor there are several rooms that are intended for the implementation of judicial practice held for 6th semester students. On the second floor, there is a hall used to organize seminars, discussions, workshops and video conferences in cooperation with the Constitutional Court.</p>
      </div>
      <div>
        <img src="{{ url('https://konten.usu.ac.id/storage/satker/15/statis/perpustakaan-fpsi.jpeg') }}" alt="Facility" />
        <h2 class = "titlelabs">Library</h2>
        <p class ="labs" style="text-align:justify">A library is a room, part of a building or a separate building that contains a collection of books, which are organized and arranged in such a way that they are easy to find and use when needed by readers at any time (Sutarno NS, 2006: 11).</p>
      </div>
      <div>
        <img src="{{ url('https://konten.usu.ac.id/storage/satker/15/statis/asa-fpsi.jpg') }}" alt="Facility" />
        <h2 class = "titlelabs">ASA (One-Stop Application) Room</h2>
        <p class ="labs" style="text-align:justify"> One Roof Application (ASA) is an application to manage correspondence to the faculty which involves many parties in the process of submission, verification, and the process of obtaining results according to the applicable SOP. This service aims to make it easier to manage administration without having to come directly to campus.</p>
      </div>
    </div>
    <div style="text-align:center;" class="container-xl fw-normal lh-lg mt-5 mb-5"><a href="en/facility" class="button button-mitra">See Other Facilities</a></div>
  </section>
  <section class="videos" id="video-fakultas">
  <div class="container news">
    <h1 class="section-title">Faculty of Psychology Video</h1>
    <small class="section-subtitle">Video about the Faculty of Psychology, Universitas Sumatera Utara</small>
    </div>
    <div class="container video-list">
      <iframe width ="100%" src="https://www.youtube.com/embed/t0Xmi2NpeIA" title="Fakultas Hukum, Universitas Sumatera Utara" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
      <iframe width ="100%" src="https://www.youtube.com/embed/aZR_owEU2iA" title="Fakultas Hukum, Universitas Sumatera Utara" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
      <iframe width ="100%" src="https://www.youtube.com/embed/QjG1fi3BF6Q" title="Fakultas Hukum, Universitas Sumatera Utara" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
      <iframe width ="100%" src="https://drive.google.com/file/d/1OJd1Qhu_Dnu6D3yf5IM5m1v-Jfr-aKqW/preview" title="Fakultas Hukum, Universitas Sumatera Utara" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>

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
