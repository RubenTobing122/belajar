@extends('theme.' . $theme . '.template')


@section('content')
<article>
    <section class="tentang">
        <div class="container">
        <div class="desc">
            <div class="judul">
                Tentang Fakultas psikologi<br>Universitas Sumatera Utara
            </div>
            <p>
            Fakultas psikologi USU merupakan Fakultas nomor 2 tertua di Universitas Sumatera Utara yang didirikan pada tanggal 12 Januari 1954 dibawah asuhan Yayasan Universitas Sumatera Utara. Selanjutnya pada tanggal 1 September 1955 Yayasan Universitas Sumatera Utara secara resmi menyerahkan Fakultas psikologi USU yang sebelumnya bernama Fakultas psikologi dan Pengetahuan Masyarakat kepada Pemerintah Republik Indonesia. Sejak tanggal tersebut Fakultas psikologi USU telah berubah menjadi Fakultas psikologi Negeri melalui Keputusan Menteri P. P&K Nomor : 34175/S tanggal 29 Maret 1957. Sejak keluarnya Peraturan Pemerintah RI Nomor 56 Tahun 2003 Tentang Penetapan Universitas Sumatera Utara Sebagai Badan psikologi Milik Negara pada tanggal 11 November 2003, USU telah ditetapkan sebagai Perguruan Tinggi Badan psikologi Milik Negara (PT BHMN), dan Fakultas psikologi merupakan salah satu unit pelaksanaan dari PT BHMN USU. Dimana melalui Undang-undang No 12 tahun 2012 tentang Pendidikan Tinggi, 7 (Tujuh) PT BHMN yang ada di Indonesia termasuk Universitas Sumatera Utara berubah menjadi Perguruan Tinggi Negeri Badan psikologi (PTN BH).
            </p>
        </div>
        <p class="kanan">
            <img src="https://konten.usu.ac.id/storage/satker/15/statis/ruang-persidangan-fpsi.jpg">
        </p>
        </div>
          </section>
    <section class="sejarah-fakultas" id="sejarah-fakultas">
        <h1>
            Sejarah Fakultas
        </h1>
        <div class="timeline-sejarah-fakultas">
            <div class="container">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">

            <div class="kotak-sejarah-fakultas">
            <div class="carousel-inner">
                <div class="carousel-item active">
                <div class="experience-slide-one row h-100 align-items-center">
                <div class="col-md-5">
                    <div class="experience-slide-img">
                    <h3>1954</h3>
                         <div class="cropped_gambar_sejarah_fakultas">
                         <img src="{{ url('https://konten.usu.ac.id/storage/satker/15/statis/sejarah-fakultas-psikologi.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="experience-slide-text">
                   <p>
                   Universitas Sumatera Utara awalnya berbentuk Yayasan, yang didirikan pada tanggal 4 Juni 1952 oleh Abdul Hakim (Gubernur Propinsi Sumatera Utara), Dr. Mansoer (Chirurg di Medan), dan Dr. Soemarsono (Inspektur Kesehatan Rakyat Propinsi Sumatera Utara). Bulan Januari 1954 Yayasan Universitet Sumatera Utara
                   mendirikan Fakultet psikologi dan Pengetahuan Masyarakat, yang diresmikan pada tanggal 12 Januari 1954.
                    </p>
                    <a href="#1965" class="d-flex mt-3">Baca Selengkapnya</a>
                    </div>
                </div>
                </div>
                </div>
            </div>
                </div>
                <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                class="active" aria-current="true" aria-label="Slide 1">
                    <h4>1954</h4>
                    <i class="fa-solid fa-circle"></i>
                </button>
            </div>
            <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true">
                </span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true">
                </span>
            </button> -->
            </div>
            </div>
        </div>
    </section>
    <!-- //popup sejarah -->
    <div class ="pop-up" id="1965">
		<div class="popup-container">
			<div class="judul-hr-bgputih">
				<p>
		        	<a class="popup-close" href="#closed">X</a>
				</p>
				<h3>
					1954
    			</h3>
				</div>
				<div class="gambar-popup">
			        <img src="https://konten.usu.ac.id/storage/satker/15/statis/sejarah-fakultas-psikologi.jpg">
				</div>
                Universitas Sumatera Utara diawal berdirinya berbentuk Yayasan, yang didirikan Dewan Pimpinan Yayasan Universitet Sumatera Utara pada tanggal 4 Juni 1952 oleh : <br>
                <ol>
                    <li>Abdul Hakim (Gubernur Propinsi Sumatera Utara)</li>
                    <li>Mansoer (Chirurg di Medan), dan</li>
                    <li>Soemarsono (Inspektur Kesehatan Rakyat Propinsi Sumatera Utara).</li>
                </ol>
                Pada awal Januari 1954, Yayasan Universitet Sumatera Utara mendirikan Fakultet psikologi dan Pengetahuan Masyarakat, dengan menampung sejumlah mahasiswa tahap ujian persiapan pada Perguruan Tinggi Islam Indonesia (sekarang Universitas Islam Sumatera Utara) yang secara kolektif mengajukan permohonan untuk melanjutkan pelajarannya di bawah naungan Universitet Sumatera Utara.<br>
                Pada saat itu Dewan Pimpinan Yayasan Universitet Sumatera Utara mengambil suatu keputusan dengan tetap menjaga hubungan baik dengan Perguruan Tinggi Islam Indonesia serta atas dasar tanggung jawab terhadap masyarakat maka diadakanlah penampungan pada masa itu bagi 8 mahasiswa yang sudah mendapat tingkat ujian persiapan. Setelah diadakan penyaringan dengan teliti diterima lagi mahasiswa untuk pertama sebanyak 37 orang. Fakultet psikologi dan Pengetahuan Masyarakat secara resmi dibuka pada tanggal 12 Januari 1954 ditandai dengan menerima 10 orang mahasiswa baru dan sejalan dengan itu sebagai usaha penampungan  diterima lagi 34 orang sebagai pendengar.  Setelah menempuh ujian tambahan untuk memenuhi Peraturan Menteri Pendidikan, Pengajaran dan Kebudayaan RI, tanggal 5 September 1954, Nomor: 12356/BPT, maka diterima 9 orang mahasiswa dari 21 orang yang meminta ujian tambahan. Dengan demikian, Fakultet psikologi dan Pengetahuan Masyarakat pada Tahun Akademik 1953 – 1954 mempunyai 64 orang mahasiswa ditambah 34 orang pendengar. Pimpinan Fakultet psikologi dan Pengetahuan Masyarakat saat itu oleh Yayasan Universitet Sumatera Utara ditunjuk Mr. T. Dzulkarnain sebagai Dekan dan Mr. Mahadi sebagai Sekretaris.<br>
                Selanjutnya pada tanggal 1 September 1955 Fakultas psikologi dan Pengetahuan Masyarakat serta Fakultas Kedokteran diserahkan kepada Pemerintah Republik Indonesia. Beberapa tokoh yang berperan dalam hal ini adalah:<br>
                <ol>
                    <li>Mr. T. Dzulkarnain</li>
                    <li>Mr. Mahadi</li>
                    <li>Mrs. Ani Abbas Manoppo</li>
                    <li>Mr. Mahammad Yusuf, Mr. Tagor Ginagan Harahap</li>
                    <li>Jafizham, S.H.</li>
                </ol>
                Para tokoh tersebut kemudian disertakan dalam proses pembentukan Universitas Negeri di Medan yang tercantum di dalam Surat Keputusan Menteri Pendidikan dan Pengajaran dan Kebudayaan Republik Indonesia Nomor: 34175/S, tanggal 29 Maret 1957. Pada hari Rabu tanggal 20 November 1957, Ir. Soekarno, Presiden Republik Indonesia meresmikan berdirinya Universitas Sumatera Utara. Tokoh-tokoh lain yang tidak dapat dilupakan peranannya dalam hal ini adalah:<br>
                <ol>
                    <li>Mr. Suhunan Hamzah</li>
                    <li>Cung Tet Lie</li>
                    <li>Mr. Tan Tjeng Bie</li>
                    <li>Mr. T.M. Hanafiah</li>
                </ol>
                Berdasarkan Keputusan Menteri Pendidikan dan Kebudayaan Republik Indonesia Nomor: 0325/U/1994 tanggal 9 Desember 1994 dan Surat Keputusan Rektor USU Nomor: 1637/PT05.H/SK/I/95 dinyatakan bahwa Fakultas psikologi hanya mengelola satu program studi yaitu Program Studi Ilmu psikologi. Berdasarkan Peraturan Pemerintah RI Nomor: 56 Tahun 2003 pada tanggal 11 November 2003, USU ditetapkan sebagai Perguruan Tinggi Badan psikologi Milik Negara (PT. BHMN) dan Fakultas psikologi merupakan salah satu unit pelaksana akademik dari PT. BHMN USU.<br>
                Pada tahun 2012 dengan berlakunya UU Nomor: 12 Tahun 2012 tentang Pendidikan Tinggi, USU ditetapkan menjadi Perguruan Tinggi Negeri badan psikologi (PTN bh) disamping Universitas Indonesia, Universitas Gadjah Mada, Institut Teknologi Bandung, Institut Pertanian Bogor, Universitas Pendidikan Indonesia, dan Universitas Airlangga.<br>
                Pimpinan Fakultas psikologi Universitas Sumatera Utara sejak berdiri hingga saat ini:<br>
                <p class="text-success fw-bold mt-3">Periode 1954 – 1955</p>
                <table>
                <tr>
                    <td>Dekan</td>
                    <td>&nbsp;:&nbsp;</td>
                    <td>Prof. Mr. T. Dzulkarnain</td>
                </tr>
                <tr>
                    <td>Sekretaris</td>
                    <td>&nbsp;:&nbsp;</td>
                    <td>Prof. Mr. Mahadi</td>
                </tr>
                </table>
                <p class="text-success fw-bold mt-3">Periode 1955 – 1959</p>
                <p class="fw-bold">Masa peralihan dari swasta menjadi Fakultas psikologi Negeri :</p>
                <table>
                <tr>
                    <td>Dekan</td>
                    <td>&nbsp;:&nbsp;</td>
                    <td> Prof. Mr. Ani Abbas Manopo</td>
                </tr>
                <tr>
                    <td>Sekretaris</td>
                    <td>&nbsp;:&nbsp;</td>
                    <td>Prof. Mr. T. Dzulkarnain</td>
                </tr>
                </table>
                <p class="h6 mt-3">Pada tahun 1955 Prof. Mr. Ani Abbas Manoppo bertugas ke luar negeri, oleh karena itu Prof. Mr. Mahadi ditunjuk sebagai akting Dekan Fakultas psikologi Universitas Sumatera Utara sampai akhir tahun akademik 1958.</p>
                <p class="text-success fw-bold mt-3">Periode 1959 – 1962</p>
                <table>
                <tr>
                    <td>Dekan</td>
                    <td>&nbsp;:&nbsp;</td>
                    <td>Prof. Mr. T. Dzulkarnain</td>
                </tr>
                <tr>
                    <td>Sekretaris</td>
                    <td>&nbsp;:&nbsp;</td>
                    <td>Prof. Mr. Suhunan Hamzah</td>
                </tr>
                </table>
                <p class="text-success fw-bold mt-3">Periode 1962 – 1964</p>
                <table>
                <tr>
                    <td>Dekan</td>
                    <td>&nbsp;:&nbsp;</td>
                    <td>Hatunggal Siregar, S.H.</td>
                </tr>
                <tr>
                    <td>Sekretaris</td>
                    <td>&nbsp;:&nbsp;</td>
                    <td>Bachtiar Agus Salim, S.H.</td>
                </tr>
                </table>
                <p class="text-success fw-bold mt-3">Periode 1964 – 1965</p>
                <table>
                <tr>
                    <td>Dekan</td>
                    <td>&nbsp;:&nbsp;</td>
                    <td>Hatunggal Siregar, S.H.</td>
                </tr>
                <tr>
                    <td>Pembantu Dekan I</td>
                    <td>&nbsp;:&nbsp;</td>
                    <td>Bachtiar Agus Salim, S.H.</td>
                </tr>
                <tr>
                    <td>Pembantu Dekan II</td>
                    <td>&nbsp;:&nbsp;</td>
                    <td>Ny.Mariam Darus, S.H.</td>
                </tr>
                <tr>
                    <td>Pembantu Dekan III</td>
                    <td>&nbsp;:&nbsp;</td>
                    <td>Madjloes, S.H.</td>
                </tr>
                </table>
                <p class="text-success fw-bold mt-3">Periode 1965 – 1967</p>
                <table>
                <tr>
                    <td>Dekan</td>
                    <td>&nbsp;:&nbsp;</td>
                    <td>Hatunggal Siregar, S.H</td>
                </tr>
                <tr>
                    <td>Pembantu Dekan I</td>
                    <td>&nbsp;:&nbsp;</td>
                    <td>Bachtiar Agus Salim, S.H.</td>
                </tr>
                <tr>
                    <td>Pembantu Dekan II</td>
                    <td>&nbsp;:&nbsp;</td>
                    <td> M. Solly Lubis, S.H.</td>
                </tr>
                <tr>
                    <td>Pembantu Dekan III</td>
                    <td>&nbsp;:&nbsp;</td>
                    <td>Drs. T. Mustafa</td>
                </tr>
                </table>
                <p class="text-success fw-bold mt-3">Periode 1967 – 1969</p>
                <table>
                <tr>
                    <td>Dekan</td>
                    <td>&nbsp;:&nbsp;</td>
                    <td>Madjloes, S.H.</td>
                </tr>
                <tr>
                    <td>Pembantu Dekan I</td>
                    <td>&nbsp;:&nbsp;</td>
                    <td>Miharza, S.H.</td>
                </tr>
                <tr>
                    <td>Pembantu Dekan II</td>
                    <td>&nbsp;:&nbsp;</td>
                    <td>Abdul Azis, S.H.</td>
                </tr>
                <tr>
                    <td>Pembantu Dekan III</td>
                    <td>&nbsp;:&nbsp;</td>
                    <td>Amru Daulay, S.H.</td>
                </tr>
                </table>
                <p class="text-success fw-bold mt-3">Periode 1969 – 1971</p>
                <table>
                <tr>
                    <td>Dekan</td>
                    <td>&nbsp;:&nbsp;</td>
                    <td>Bachtiar Agus Salim, S.H.</td>
                </tr>
                <tr>
                    <td>Pembantu Dekan I</td>
                    <td>&nbsp;:&nbsp;</td>
                    <td>Miharza, S.H.</td>
                </tr>
                <tr>
                    <td>Pembantu Dekan II</td>
                    <td>&nbsp;:&nbsp;</td>
                    <td>Abdul Azis, S.H.</td>
                </tr>
                <tr>
                    <td>Pembantu Dekan III</td>
                    <td>&nbsp;:&nbsp;</td>
                    <td>Muhammad Abduh, S.H.</td>
                </tr>
                </table>
                <p class="text-success fw-bold mt-3">Periode 1971 – 1973</p>
                <table>
                <tr>
                    <td>Dekan</td>
                    <td>&nbsp;:&nbsp;</td>
                    <td>Bachtiar Agus Salim, S.H.</td>
                </tr>
                <tr>
                    <td>Pembantu Dekan I</td>
                    <td>&nbsp;:&nbsp;</td>
                    <td>Muhammad Abduh, S.H.</td>
                </tr>
                <tr>
                    <td>Pembantu Dekan II</td>
                    <td>&nbsp;:&nbsp;</td>
                    <td>Sanwani Nasution, S.H.</td>
                </tr>
                <tr>
                    <td>Pembantu Dekan III</td>
                    <td>&nbsp;:&nbsp;</td>
                    <td>Dt. Usman, S.H.</td>
                </tr>
                </table>
                <p class="text-success fw-bold mt-3">Periode 1974 – 1975</p>
                <table>
                <tr>
                    <td>Dekan</td>
                    <td>&nbsp;:&nbsp;</td>
                    <td> Amru Daulay, S.H.</td>
                </tr>
                <tr>
                    <td>Pembantu Dekan I</td>
                    <td>&nbsp;:&nbsp;</td>
                    <td> Mariam Darus, S.H./Usman, S.H.</td>
                </tr>
                <tr>
                    <td>Pembantu Dekan II</td>
                    <td>&nbsp;:&nbsp;</td>
                    <td> Issanuddin, S.H.</td>
                </tr>
                <tr>
                    <td>Pembantu Dekan III</td>
                    <td>&nbsp;:&nbsp;</td>
                    <td>Abdul Muthalib Sembiring, S.H.</td>
                </tr>
                </table>
                <p class="text-success fw-bold mt-3">Periode 1976 – 1977</p>
                <table>
                <tr>
                    <td>Dekan</td>
                    <td>&nbsp;:&nbsp;</td>
                    <td>Amru Daulay, S.H.</td>
                </tr>
                <tr>
                    <td>Pembantu Dekan I</td>
                    <td>&nbsp;:&nbsp;</td>
                    <td>Dt. Usman, S.H.</td>
                </tr>
                <tr>
                    <td>Pembantu Dekan II</td>
                    <td>&nbsp;:&nbsp;</td>
                    <td> Issanuddin, S.H.</td>
                </tr>
                <tr>
                    <td>Pembantu Dekan III</td>
                    <td>&nbsp;:&nbsp;</td>
                    <td>Abdul Muthalib Sembiring, S.H.</td>
                </tr>
                </table>
                <p class="text-success fw-bold mt-3">Periode 1977 – 1979</p>
                <table>
                <tr>
                    <td>Dekan</td>
                    <td>&nbsp;:&nbsp;</td>
                    <td> Muhammad Abduh, S.H.</td>
                </tr>
                <tr>
                    <td>Pembantu Dekan I</td>
                    <td>&nbsp;:&nbsp;</td>
                    <td>O.K. Chairuddin, S.H.</td>
                </tr>
                <tr>
                    <td>Pembantu Dekan II</td>
                    <td>&nbsp;:&nbsp;</td>
                    <td>Muhammad Daud, S.H.</td>
                </tr>
                <tr>
                    <td>Pembantu Dekan III</td>
                    <td>&nbsp;:&nbsp;</td>
                    <td>Karim Kueteh Sembiring, S.H.</td>
                </tr>
                </table>
                <p class="text-success fw-bold mt-3">Periode 1979 – 1981</p>
                <table>
                <tr>
                    <td>Dekan</td>
                    <td>&nbsp;:&nbsp;</td>
                    <td>Muhammad Abduh, S.H.</td>
                </tr>
                <tr>
                    <td>Pembantu Dekan I</td>
                    <td>&nbsp;:&nbsp;</td>
                    <td> O.K. Chairuddin, S.H.</td>
                </tr>
                <tr>
                    <td>Pembantu Dekan II</td>
                    <td>&nbsp;:&nbsp;</td>
                    <td>Muhammad Daud, S.H.</td>
                </tr>
                <tr>
                    <td>Pembantu Dekan III</td>
                    <td>&nbsp;:&nbsp;</td>
                    <td> Karim Kueteh Sembiring, S.H.</td>
                </tr>
                </table>
                <p class="text-success fw-bold mt-3">Periode 1982 – 1985</p>
                <table>
                <tr>
                    <td>Dekan</td>
                    <td>&nbsp;:&nbsp;</td>
                    <td>Sanwani Nasution, S.H.</td>
                </tr>
                <tr>
                    <td>Pembantu Dekan I</td>
                    <td>&nbsp;:&nbsp;</td>
                    <td>Muhammad Daud, S.H.</td>
                </tr>
                <tr>
                    <td>Pembantu Dekan II</td>
                    <td>&nbsp;:&nbsp;</td>
                    <td>Rehngena Purba, S.H.</td>
                </tr>
                <tr>
                    <td>Pembantu Dekan III</td>
                    <td>&nbsp;:&nbsp;</td>
                    <td>M. Djafar Ali, S.H.</td>
                </tr>
                </table>
                <p class="text-success fw-bold mt-3">Periode 1985 – 1988</p>
                <table>
                <tr>
                    <td>Dekan</td>
                    <td>&nbsp;:&nbsp;</td>
                    <td>Sanwani Nasution, S.H.</td>
                </tr>
                <tr>
                    <td>Pembantu Dekan I</td>
                    <td>&nbsp;:&nbsp;</td>
                    <td>Muhammad Daud, S.H.</td>
                </tr>
                <tr>
                    <td>Pembantu Dekan II</td>
                    <td>&nbsp;:&nbsp;</td>
                    <td>Rehngena Purba, S.H.</td>
                </tr>
                <tr>
                    <td>Pembantu Dekan III</td>
                    <td>&nbsp;:&nbsp;</td>
                    <td>Hasnil Basri Siregar, S.H.</td>
                </tr>
                </table>
                <p class="text-success fw-bold mt-3">Periode 1988 – 1991</p>
                <table>
                <tr>
                    <td>Dekan</td>
                    <td>&nbsp;:&nbsp;</td>
                    <td>O.K Chairuddin, S.H.</td>
                </tr>
                <tr>
                    <td>Pembantu Dekan I</td>
                    <td>&nbsp;:&nbsp;</td>
                    <td>Zainul Pelly, S.H.</td>
                </tr>
                <tr>
                    <td>Pembantu Dekan II</td>
                    <td>&nbsp;:&nbsp;</td>
                    <td>T. Mansyurdin, S.H.</td>
                </tr>
                <tr>
                    <td>Pembantu Dekan III</td>
                    <td>&nbsp;:&nbsp;</td>
                    <td>Tinggi Sembiring, S.H.</td>
                </tr>
                </table>
                <p class="text-success fw-bold mt-3">Periode 1991 – 1994</p>
                <table>
                <tr>
                    <td>Dekan</td>
                    <td>&nbsp;:&nbsp;</td>
                    <td>O.K Chairuddin, S.H.</td>
                </tr>
                <tr>
                    <td>Pembantu Dekan I</td>
                    <td>&nbsp;:&nbsp;</td>
                    <td>Zainul Pelly, S.H.</td>
                </tr>
                <tr>
                    <td>Pembantu Dekan II</td>
                    <td>&nbsp;:&nbsp;</td>
                    <td>T. Mansyurdin, S.H.</td>
                </tr>
                <tr>
                    <td>Pembantu Dekan III</td>
                    <td>&nbsp;:&nbsp;</td>
                    <td>Tinggi Sembiring, S.H.</td>
                </tr>
                </table>
                <p class="text-success fw-bold mt-3">Periode 1994 – 1997</p>
                <table>
                <tr>
                    <td>Dekan</td>
                    <td>&nbsp;:&nbsp;</td>
                    <td> Rehngena Purba, S.H., M.S.</td>
                </tr>
                <tr>
                    <td>Pembantu Dekan I</td>
                    <td>&nbsp;:&nbsp;</td>
                    <td>Issanuddin, S.H.</td>
                </tr>
                <tr>
                    <td>Pembantu Dekan II</td>
                    <td>&nbsp;:&nbsp;</td>
                    <td>M.Djafar Ali, S.H.</td>
                </tr>
                <tr>
                    <td>Pembantu Dekan III</td>
                    <td>&nbsp;:&nbsp;</td>
                    <td>Hasan Basri Siregar, S.H.</td>
                </tr>
                </table>
                <p class="text-success fw-bold mt-3">Periode 1997 – 2000</p>
                <p class="h6 fw-normal mt-3"><i>Tahun 1997 – 1998</i></p>
                <table>
                <tr>
                    <td>Dekan</td>
                    <td>&nbsp;:&nbsp;</td>
                    <td> Rehngena Purba, S.H., M.S.</td>
                </tr>
                <tr>
                    <td>Pembantu Dekan I</td>
                    <td>&nbsp;:&nbsp;</td>
                    <td> Issanuddin, S.H.</td>
                </tr>
                <tr>
                    <td>Pembantu Dekan II</td>
                    <td>&nbsp;:&nbsp;</td>
                    <td>M. Djafar Ali, S.H.</td>
                </tr>
                <tr>
                    <td>Pembantu Dekan III</td>
                    <td>&nbsp;:&nbsp;</td>
                    <td> Hasan Basri Siregar, S.H.</td>
                </tr>
                </table>
                <p class="h6 fw-normal mt-3"><i>Tahun 1998 - 2000</i></p>
                <table>
                <tr>
                    <td>Pembantu Dekan I</td>
                    <td>&nbsp;:&nbsp;</td>
                    <td> Issanuddin, S.H.</td>
                </tr>
                <tr>
                    <td>Pembantu Dekan II</td>
                    <td>&nbsp;:&nbsp;</td>
                    <td>Sulaiman, S.H.</td>
                </tr>
                <tr>
                    <td>Pembantu Dekan III</td>
                    <td>&nbsp;:&nbsp;</td>
                    <td>  Madiasa Ablisar, S.H., M.S.</td>
                </tr>
                </table>
                <p class="text-success fw-bold mt-3">Periode 2000 – 2005</p>
                <p class="h6 fw-normal mt-3"><i>Tahun 2000 – 2002</i></p>
                <table>
                <tr>
                    <td>Dekan</td>
                    <td>&nbsp;:&nbsp;</td>
                    <td> Hasnil Basri Siregar, S.H.</td>
                </tr>
                <tr>
                    <td>Pembantu Dekan I</td>
                    <td>&nbsp;:&nbsp;</td>
                    <td>  Issanuddin, S.H.</td>
                </tr>
                <tr>
                    <td>Pembantu Dekan II</td>
                    <td>&nbsp;:&nbsp;</td>
                    <td>Sulaiman, S.H.</td>
                </tr>
                <tr>
                    <td>Pembantu Dekan III</td>
                    <td>&nbsp;:&nbsp;</td>
                    <td> Madiasa Ablisar, S.H., M.S.</td>
                </tr>
                </table>
                <p class="h6 fw-normal mt-3"><i>Tahun 2002 – 2005</i></p>
                <table>
                <tr>
                    <td>Pembantu Dekan I</td>
                    <td>&nbsp;:&nbsp;</td>
                    <td> Abdul Rahman, S.H., M.H.</td>
                </tr>
                <tr>
                    <td>Pembantu Dekan II</td>
                    <td>&nbsp;:&nbsp;</td>
                    <td> Madiasa Ablisar, S.H., M.S.</td>
                </tr>
                <tr>
                    <td>Pembantu Dekan III</td>
                    <td>&nbsp;:&nbsp;</td>
                    <td>  Armansyah, S.H., M.H.</td>
                </tr>
                </table>
                <p class="text-success fw-bold mt-3">Periode 2005 – 2010</p>
                <table>
                <tr>
                    <td>Dekan</td>
                    <td>&nbsp;:&nbsp;</td>
                    <td>Prof. Dr. Runtung, S.H., M.Hum.</td>
                </tr>
                <tr>
                    <td>Pembantu Dekan I</td>
                    <td>&nbsp;:&nbsp;</td>
                    <td>Prof. Dr. Suhaidi, S.H., M.H.</td>
                </tr>
                <tr>
                    <td>Pembantu Dekan II</td>
                    <td>&nbsp;:&nbsp;</td>
                    <td>Syafruddin Hasibuan, S.H., M.H.,DFM.</td>
                </tr>
                <tr>
                    <td>Pembantu Dekan III</td>
                    <td>&nbsp;:&nbsp;</td>
                    <td>Muhammad Husni, S.H., M.H.</td>
                </tr>
                </table>
                <p class="text-success fw-bold mt-3">Periode 2010- 2015</p>
                <table>
                <tr>
                    <td>Dekan</td>
                    <td>&nbsp;:&nbsp;</td>
                    <td>Prof. Dr. Runtung, S.H., M.Hum.</td>
                </tr>
                <tr>
                    <td>Pembantu Dekan I</td>
                    <td>&nbsp;:&nbsp;</td>
                    <td>Prof. Dr. Budiman Ginting, SH.,M.Hum</td>
                </tr>
                <tr>
                    <td>Pembantu Dekan II</td>
                    <td>&nbsp;:&nbsp;</td>
                    <td>Syafruddin Hasibuan, S.H., M.H.,DFM.</td>
                </tr>
                <tr>
                    <td>Pembantu Dekan III</td>
                    <td>&nbsp;:&nbsp;</td>
                    <td>Muhammad Husni, S.H., M.H.</td>
                </tr>
                </table>
                <p class="text-success fw-bold mt-3">Tahun 2014-2016</p>
                <table>
                <tr>
                    <td>Dekan</td>
                    <td>&nbsp;:&nbsp;</td>
                    <td>Prof. Dr. Runtung, S.H., M.Hum.</td>
                </tr>
                <tr>
                    <td>Pembantu Dekan I</td>
                    <td>&nbsp;:&nbsp;</td>
                    <td>Prof. Dr. Budiman Ginting, SH.,M.Hum</td>
                </tr>
                <tr>
                    <td>Pembantu Dekan II</td>
                    <td>&nbsp;:&nbsp;</td>
                    <td>Syafruddin Hasibuan, S.H., M.H.,DFM.</td>
                </tr>
                <tr>
                    <td>Pembantu Dekan III</td>
                    <td>&nbsp;:&nbsp;</td>
                    <td>Dr. Saidin, S.H., M.Hum.</td>
                </tr>
                </table>
                <p class="text-success fw-bold mt-3">Periode 2016 - 2021</p>
                <table>
                <tr>
                    <td>Dekan</td>
                    <td>&nbsp;:&nbsp;</td>
                    <td>Prof. Dr. Budiman Ginting, S.H., M.Hum.</td>
                </tr>
                <tr>
                    <td>Wakil Dekan I</td>
                    <td>&nbsp;:&nbsp;</td>
                    <td>Prof. Dr. Saidin, SH.M.Hum</td>
                </tr>
                <tr>
                    <td>Wakil Dekan II</td>
                    <td>&nbsp;:&nbsp;</td>
                    <td> Puspa Melati Hasibuan, S.H., M.Hum</td>
                </tr>
                <tr>
                    <td>Wakil Dekan III</td>
                    <td>&nbsp;:&nbsp;</td>
                    <td>Dr. Jelly Leviza, S.H., M.Hum.</td>
                </tr>
                </table>
                <p class="text-success fw-bold mt-3">Periode 2021-2026</p>
                <table>
                <tr>
                    <td>Dekan</td>
                    <td>&nbsp;:&nbsp;</td>
                    <td>Dr. Mahmul Siregar, SH.,M.Hum</td>
                </tr>
                <tr>
                    <td>Wakil Dekan I</td>
                    <td>&nbsp;:&nbsp;</td>
                    <td> Dr. Agusmidah, SH.,M.Hum</td>
                </tr>
                <tr>
                    <td>Wakil Dekan II</td>
                    <td>&nbsp;:&nbsp;</td>
                    <td>  Puspa Melati Hasibuan, SH.,M.Hum</td>
                </tr>
                <tr>
                    <td>Wakil Dekan III</td>
                    <td>&nbsp;:&nbsp;</td>
                    <td> Dr. Mohammad Eka Putra, SH.,M.Hum</td>
                </tr>
                </table>
        </div>
	</div>
    <section>
    <div class="container mt-5">
	  <div class="content mb-5">
    		<figure class="prodi-yt">
			<iframe width="600" height="315" src="https://www.youtube.com/embed/t0Xmi2NpeIA" title="FPSI, Universitas Sumatera Utara" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
			</figure>
		  </div>
		</div>
    </section>
    <section class="pimpinan-fakultas" id="pimpinan-fakultas">
        <div class ="container">
        <h2 class="judul-pimpinan">Pimpinan Fakultas</h2>
        <p>Bertugas menjalankan fungsi fakultas sesuai Tri Dharma Perguruan Tinggi: Pendidikan dan Pengajaran, Penelitian dan Pengembangan serta Pengabdian Kepada Masyarakat Fakultas psikologi Universitas Sumatera Utara dipimpin oleh tenaga pengajar yang kompeten di bidangnya. Berikut adalah jajaran dekanat dan tenaga pengajar di Fakultas psikologi, Universitas Sumatera Utara</p>
        <div class="pimpinan-grid-4">
            <div class="pimpinan">
                <div class="atas">
                    <img src="https://konten.usu.ac.id/storage/satker/15/statis/dekan-fpsi.jpg">
                    <div class="bawah">
                        <div class="nama">Dr. Mahmul Siregar, SH.,M.Hum</div>
                        <small>Dekan Fakultas psikologi</small>
                    </div>
                </div>
            </div>
            <div class="pimpinan">
                <div class="atas">
                    <img src="https://konten.usu.ac.id/storage/satker/15/statis/wakil-dekan1.jpg">
                    <div class="bawah">
                        <div class="nama">Dr. Agusmidah, SH.,M.Hum</div>
                        <small>Wakil Dekan I Fakultas psikologi</small>
                    </div>
                </div>
            </div>
            <div class="pimpinan">
                <div class="atas">
                <img src="https://konten.usu.ac.id/storage/satker/15/statis/wakil-dekan2.jpg">
                    <div class="bawah">
                        <div class="nama">Puspa Melati Hasibuan, SH.,M.Hum</div>
                        <small>Wakil Dekan II Fakultas psikologi</small>
                    </div>
                </div>
            </div>
            <div class="pimpinan">
                <div class="atas">
                <img src="https://konten.usu.ac.id/storage/satker/15/statis/wakil-dekan3.jpg">
                    <div class="bawah">
                        <div class="nama">Dr. Mohammad Ekaputra, SH.,M.Hum</div>
                        <small>Wakil Dekan III Fakultas psikologi</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="selengkapnya-kiri"><a href="dosen-staff">Lihat Selengkapnya &nbsp;></a></div>
        </div>
    </section>
    <section class="vision mt-5" id="visi-misi-tujuan">
        <h1 class="lined-title">
            <span>Visi</span>
        </h1>
        <p class="container mt-5 h5 text-center">
        Menjadi Fakultas psikologi terkemuka, yang menghasilkan lulusan berkualitas, bermoral, profesional dan memiliki keunggulan kompetitif, baik di tingkat nasional maupun internasional.
        </p>
        <div class="misi-tentang">
        <div class="container">
            <h1 class="lined-title3">
                <span>Misi</span>
            </h1>
            <div class="misi-tentang-list">
                <div class="misi-isi">
                    <div class="icon">
					<div class="d-flex justify-content-center">
			        <img src="https://api.iconify.design/dashicons:code-standards.svg?color=white&width=60px"/>
                    </div>
                    </div>
                    <h2>
                        Standard Nasional
                    </h2>
                    <p style="text-align:center;">
                    Menyelenggarakan pendidikan dan penelitian psikologi berbasis Kerangka Kualifikasi Nasional Indonesia (KKNI) dan Standard Nasional Pendidikan Tinggi (SN Dikti) yang menekankan pada pemecahan masalah sesuai dengan trend perkembangan psikologi nasional dan  internasional.
                    </p>
                </div>
                <div class="misi-isi">
                    <div class="icon">
                    <div class="d-flex justify-content-center">
			        <img src="https://api.iconify.design/game-icons:teacher.svg?color=white&width=60px"/>
                    </div>
                    </div>
                    <h2>
                       Meningkatkan Mutu Pembelajaran
                    </h2>
                    <p style="text-align:center;">
                    Meningkatkan mutu proses belajar mengajar melalui pembangunan sarana, prasarana, fasilitas pendidikan, pembinaan karir serta peningkatan kesejahteraan dosen dan pegawai.
                    </p>
                </div>
                <div class="misi-isi">
                    <div class="icon">
                    <div class="d-flex justify-content-center">
			        <img src="https://api.iconify.design/game-icons:archive-research.svg?color=white&width=60px"/>
                    </div>
                    </div>
                    <h2>
                    Kegiatan Ilmiah
                    </h2>
                    <p style="text-align:center;">
                    Melibatkan dosen dan mahasiswa dalam kegiatan ilmiah dan pengabdian pada masyarakat dengan pemecahan masalah (problem solving) sesuai dengan pengembangan psikologi ditingkat nasional dan internasional sesuai dengan kompetensinya.
                    </p>
                </div>
                <div class="misi-isi">
                    <div class="icon">
                    <div class="d-flex justify-content-center">
			        <img src="https://api.iconify.design/emojione-monotone:handshake.svg?color=white&width=60px"/>
                    </div>
                    </div>
                    <h2>
                    Kerjasama
                    </h2>
                    <p style="text-align:center;">
                    Membangun jaringan kerjasama dalam rangka meningkatkan daya saing dengan instansi pemerintah, pihak swasta dan Organisasi Non-Pemerintah.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="vision mt-5">
        <div class="container">
        <h1 class="lined-title">
            <span>Tujuan</span>
        </h1>
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
    </div>
    </div>
    </section>
    <section class="tentang-akreditasi-usu" id="akreditasi-capaian">
        <div class ="container">
        <a href="https://www.usu.ac.id/id/akreditasi" target="_blank">
        <div class="grid-akreditasi-usu">
        <div class="akreditasi-usu">
			  <h2>Universitas Sumatera Utara</h2>
              <h1>Terakreditasi Unggul</h1>
			  <p><i>No.1517/SK/BAN-PT/Ak.KP/PT/IX/2022</i></p>
			</div>
			<div class="icon">
			<i class="fa fa-external-link fl-right fa-2x"></i>
		</div>
		</div>
        </a>
        <a href="akreditasi-prestasi">
        <div class="grid-capaian-usu">
        <div class="capaian-usu">
			  <h2>Capaian dan Prestasi</h2>
			</div>
			<div class="icon">
			<i class="fa fa-external-link fl-right fa-2x"></i>
		    </div>
		</div>
            </a>
        </div>
    </section>
    <section class="struktur-organisasi" id="struktur-organisasi">
        <div class="container">
        <h2 class="judul-tentang">Struktur Organisasi</h2>
        <hr class="garis-bawah-hijau"/>
        <div class="div-tentang">
            <figure class='goOnZoom' style="background-image: url('https://konten.usu.ac.id/storage/satker/15/statis/bagan-struktur-organisasi-fpsi.jpg');" onmousemove="zoom(event)" ontouchmove="zoom(event)">
                <img style="width:100%;" src="https://konten.usu.ac.id/storage/satker/15/statis/bagan-struktur-organisasi-fpsi.jpg" title="Struktur Organisasi" alt="Struktur Organisasi">
            </figure>
        </div>
    </div>
    </section>
    <section class="sumber-daya-manusia" id="sumberdaya-manusia">
        <div class="container">
        <h2 class="judul-tentang">Sumber Daya Manusia</h2>
        <hr class="garis-bawah-hijau"/>
        <div class="div-tentang">
            <h5 class="judul">Dosen</h5>
            <div class="sdm">
                <div class="pimpinan">
                    <div class="atas">
                    <img src="https://konten.usu.ac.id/storage/satker/15/statis/dosen1-fpsi.png">
                        <div class="bawah">
                            <div class="nama">Dr. Fajar Khaify Rizky SH.,MH</div>
                            <small>Dosen psikologi Internasional</small>
                        </div>
                    </div>
                </div>
                <div class="pimpinan">
                    <div class="atas">
                    <img src="https://konten.usu.ac.id/storage/satker/15/statis/dosen2-fpsi.png">
                        <div class="bawah">
                            <div class="nama">Nita Nilan Sry Rezki Pulungan SH., M.Kn</div>
                            <small>Dosen psikologi Perdata </small>
                        </div>
                    </div>
                </div>
                <div class="pimpinan">
                    <div class="atas">
                    <img src="https://konten.usu.ac.id/storage/satker/15/statis/dosen3-fpsi.png">
                        <div class="bawah">
                            <div class="nama">Dr. Henry Sinaga, S.H., Sp.N., M.Kn.</div>
                            <small>Dosen psikologi Kenotariatan (Magister)</small>
                        </div>
                    </div>
                </div>
                <div class="pimpinan">
                    <div class="atas">
                    <img src="https://konten.usu.ac.id/storage/satker/15/statis/dosen4-fpsi.png">
                        <div class="bawah">
                            <div class="nama">Hani Riadho Nasution, SH., MH</div>
                            <small>Dosen psikologi Perdata</small>
                        </div>
                    </div>
                </div>
                <div class="selengkapnya-kiri"><a href="dosen-staff">Lihat Selengkapnya &nbsp;></a></div>
            </div>
            <br><br>
            <h5 class="judul">Tenaga Kependidikan</h5>
            <div class="sdm">
                <div class="pimpinan">
                    <div class="atas">
                        <img src="https://konten.usu.ac.id/storage/satker/15/statis/staff1-fpsi.png">
                        <div class="bawah">
                            <div class="nama">Sri Rahayu, SH</div>
                            <h6>Kepala Bagian Tata Usaha</h6>
                        </div>
                    </div>
                </div>
                <div class="pimpinan">
                    <div class="atas">
                    <img src="https://konten.usu.ac.id/storage/satker/15/statis/staff2-fpsi.png">
                        <div class="bawah">
                            <div class="nama">Fatimah, SH</div>
                            <h6>Kasubbag Akademik</h6>
                        </div>
                    </div>
                </div>
                <div class="pimpinan">
                    <div class="atas">
                    <img src="https://konten.usu.ac.id/storage/satker/15/statis/staff3-fpsi.png">
                        <div class="bawah">
                            <div class="nama">Anita Rosmawati, SH</div>
                            <h6>Kasubbag Kemahasiswaan</h6>
                        </div>
                    </div>
                </div>
                <div class="pimpinan">
                    <div class="atas">
                    <img src="https://konten.usu.ac.id/storage/satker/15/statis/staff4-fpsi.png">
                        <div class="bawah">
                            <div class="nama">Fitri Idayanti, Amd</div>
                            <h6>Kasubbag PKM dan Kerjasama</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
     </section><br>
    <section id="arsip">
        <div class="container">
        <h2 class="judul-tentang">Arsip</h2>
        <hr class="garis-bawah-hijau"/>
        <div class="div-tentang">
            <div class="arsip-tentang">
                <div>
                    <div class="arsip-tentang-judul">
                        <h3>Arsip Universitas</h3>
                        <a href="https://library.usu.ac.id/" target="_blank"><i class="fa fa-external-link fl-right" aria-hidden="true"></i></a>

                    </div>
                    <p>
                    Perpustakaan Universitas Sumatera Utara (USU) dimulai dengan berdirinya Universitas Sumatera Utara pada 20 Agustus 1952. Hingga tahun 2017, telah tersedia 13 Perpustakaan Universitas Cabang Fakultas dan Cabang Rumah Sakit USU yang telah menerapkan system pelayanan terintegrasi dengan Perpustakaan Universitas. Perpustakaan USU kini menyediakan berbagai layanan seperti Online Public Access Catalogue (OPAC), Jurnal dan buku elektrik serta repositori USU.
                    </p>
                </div>
                <div>
                    <div class="arsip-tentang-judul">
                        <h3>Arsip Fakultas psikologi USU</h3>
                        <a href="arsip"><i class="fa fa-external-link fl-right" aria-hidden="true"></i></a>
                    </div>
                    <p>
                    Melalui sistem yang terintegrasi dengan Perpustakaan USU, Arsip Fakultas psikologi USU menyediakan
                    rangkaian kumpulan rekaman kegiatan, laporan, penelitian serta surat-surat yang diterima dan dikeluarkan
                    oleh Fakultas psikologi USU. Arsip Fakultas psikologi USU berkomitmen dalam menyimpan kearsipan fakultas
                    dan memberikan layanan terbaik kepada mahasiswa, tenaga pengajar maupun publik.
                    </p>
                </div>
            </div>
        </div>
        </div>
    </section>
    <section class="struktur-organisasi" id="peta-virtual">
        <div class="container">
        <h2 class="judul-tentang">Peta Virtual</h2>
        <hr class="garis-bawah-hijau"/>
        <div class="div-tentang">
             <p class ="judul-peta-hijau"> Peta Universitas<p>
             <div class="gambar-peta">
            <figure class='goOnZoom-peta-virtual' style="background-image: url('/images/peta-usu.jpg');" onmousemove="zoom(event)" ontouchmove="zoom(event)">
                <img src="/images/peta-usu.jpg" title="Peta Universitas" alt="Peta Universitas">
            </figure>
            </div>
            <p class ="judul-peta-hijau"> Peta Fakultas<p>
            <div class="gambar-peta">
            <figure class='goOnZoom-peta-virtual' style="background-image: url('https://konten.usu.ac.id/storage/satker/15/statis/peta-fpsi.jpg" onmousemove="zoom(event)" ontouchmove="zoom(event)">
                <img src="https://konten.usu.ac.id/storage/satker/15/statis/peta-fpsi.jpg" title="Peta Fakultas" alt="Peta Fakultas">
            </figure>
        </div>
        </div>
    </div>
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

</article>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<script>
    function zoom(e){
      var zoomer = e.currentTarget;
      e.offsetX ? offsetX = e.offsetX : offsetX = e.touches[0].pageX
      e.offsetY ? offsetY = e.offsetY : offsetX = e.touches[0].pageX
      x = offsetX/zoomer.offsetWidth*100
      y = offsetY/zoomer.offsetHeight*100
      zoomer.style.backgroundPosition = x + '% ' + y + '%';
    }
    </script>
@endsection
