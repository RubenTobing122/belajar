@extends('theme.' . $theme . '.template')

@section('content')
<article>
<div class="page-thumbnail" style="--image:url('/images/thumbnail_prodi.png');">
    <h1 class="container">
        Frequently Asked Question
    </h1>
</div>
<section class="container">
    <div class="faqs">
        <div class="title">
            <h1>
                <strong>FAQs</strong>
            </h1>
        </div>
        <div class="desc">
            <p>
                Jawaban atas pertanyaan umum yang mungkin diminta fakultas. Jika Anda memiliki pertanyaan lain, silahkan <a href="mailto:fpsi@usu.ac.id">hubungi kami</a>
            </p>
            <ul>
                <li class="container-xl h6 fw-normal lh-lg mt-2 px-2">
                    Untuk informasi akomodasi yang disetujui untuk mahasiswa penyandang disabilitas, silahkan lihat: <a href="#">Akomodasi</a>
                </li>
                <li class="container-xl h6 fw-normal lh-lg mt-2 px-2">
                    Untuk informasi lebih lanjut tentang hak dan tanggung jawab fakultas dalam memberikan akomodasi kepada mahasiswa penyandang disabilitas, silahkan lihat: <a href="#">Hak dan Tanggung Jawab</a>
                </li>
            </ul>
        </div>
    </div>
</section>
<section class="latar-abu-abu">
    <div class="container">
        <div class="grid">
            <div class="grid-left">
                <nav class="my-sticky">
                        <a href="#akademik" class="section-anchor">Akademik</a>
                </nav>
            </div>
            <div class="grid-right">
                <section class="vision mt-5">
                    <div class="container">
                        <h2 class="title-accordion-faqs" id="akademik">
                            Akademik
                        </h2>
                        <nav class="accordion arrows mb-4">
                        <input type="radio" name="accordion" id="cb1">
                            <section class="accord">
                                    <label class="accord-title" for="cb1">Bagaimana alur pengajuan permohonan surat aktif kuliah?</label>
                                    <label class="accord-close" for="acc-close"></label>
                                <div class="accord-content">
                                    <p style="text-align:left" class="keterangan">
                                    Alur Pengajuan melalui beberapa tahapan berikut:
                                    <ol>
                                     <li><p>Mengisi kolom Semester Aktif</p></li>
                                     <li><p>Mengisi Kolom Program Studi Mahasiswa</p></li>
                                     <li><p> Mengisi Kolom Tahun Akademik</p></li>
                                     <li><p>Mengisi Kolom Nomor Telpon Yang Aktif</p></li>
                                     <li><p>Mengisi Kolom Alasan atau Keperluan Surat aktif Tersebut</p></li>
                                     <li><p>Menguplod Berkas KTM Mahasiswa</p></li>
                                     <li><p>Menguplod Berkas KRS Semester Terakhir</p></li>
                                     <li><p>Menguplod Berkas KHS Semester Terakhir</p></li>
                                     <li><p>Klik Tombol Kirim Permohonan Di Aplikasi ASA</p></li>
                                    <ol>
                                    </p>
                                </div>
                            </section>
                            <input type="radio" name="accordion" id="cb2">
                            <section class="accord">
                                    <label class="accord-title" for="cb2">Bagaimana alur pengajuan permohonan surat Magang?</label>
                                    <label class="accord-close" for="acc-close"></label>
                                <div class="accord-content">
                                    <p style="text-align:left" class="keterangan">
                                    Alur Pengajuan melalui beberapa tahapan berikut:
                                    <ol>
                                     <li><p> Mengisi kolom Program Studi Mahasiswa</p></li>
                                     <li><p> Mengisi kolom Alamat Tujuan Magang</p></li>
                                     <li><p> Mengisi kolom Kota Tujuan Magang</p></li>
                                     <li><p> Klik Tombol Kirim Permohonan Di Aplikasi ASA</p></li>
                                    <ol>
                                    </p>
                                </div>
                            </section>
                            <input type="radio" name="accordion" id="cb3">
                            <section class="accord">
                                    <label class="accord-title" for="cb3">Bagaimana alur pengajuan permohonan surat izin penelitian?</label>
                                    <label class="accord-close" for="acc-close"></label>
                                <div class="accord-content">
                                    <p style="text-align:left" class="keterangan">
                                    Alur Pengajuan melalui beberapa tahapan berikut:
                                    <ol>
                                     <li><p>Mengisi kolom Program Studi Mahasiswa</p></li>
                                     <li><p>Mengisi kolom Alamat Mahasiswa</p></li>
                                     <li><p>Mengisi kolom Judul Proposal Atau Skripsi Mahasiswa</p></li>
                                     <li><p>Mengisi kolom Lokasi Penelitian</p></li>
                                     <li><p>Mengisi kolom Ditujukan Ke Pada Siapa Surat Penelitian Tersebut</p></li>
                                     <li><p>Mengisi kolom Nama Dosen Pembimbing</p></li>
                                     <li><p>Mengisi kolom Semester</p></li>
                                     <li><p>Menguplod Berkas KTM</p></li>
                                     <li><p>Menguplod Berkas Slip SPP Terakhir</p></li>
                                     <li><p>Menguplod Berkas Cover Proposal Yang Telah Di Setejui</p></li>
                                     <li><p>Klik Tombol Kirim Permohonan Di Aplikasi ASA</p></li>
                                    <ol>
                                    </p>
                                </div>
                            </section>
                            <input type="radio" name="accordion" id="cb4">
                            <section class="accord">
                                    <label class="accord-title" for="cb4">Bagaimana alur pengajuan permohonan surat Permohonan Keterangan Alumni?</label>
                                    <label class="accord-close" for="acc-close"></label>
                                <div class="accord-content">
                                    <p style="text-align:left" class="keterangan">
                                    Alur Pengajuan melalui beberapa tahapan berikut:
                                    <ol>
                                     <li><p>Mengisi kolom Program Studi</p></li>
                                     <li><p>Mengisi kolom Hari Dan Tanggal Ujian Skripsi</p></li>
                                     <li><p>Mengisi kolom Alamat Mahasiswa</p></li>
                                     <li><p>Mengisi kolom Judul Skripsi/Tugas Akhir</p></li>
                                     <li><p>Menguplod Berkas Bukti Penyerahan Skripsi</p></li>
                                     <li><p>Klik Tombol Kirim Permohonan Di Aplikasi ASA</p></li>
                                    <ol>
                                    </p>
                                </div>
                            </section>
                            <input type="radio" name="accordion" id="cb5">
                            <section class="accord">
                                    <label class="accord-title" for="cb5">Bagaimana alur pengajuan permohonan surat Keterangan Nilai/Transkip Nilai ?</label>
                                    <label class="accord-close" for="acc-close"></label>
                                <div class="accord-content">
                                    <p style="text-align:left" class="keterangan">
                                    Alur Pengajuan melalui beberapa tahapan berikut:
                                    <ol>
                                     <li><p>Mengisi kolom Program Studi</p></li>
                                     <li><p>Mengisi kolom Alasan Pengajuan Keterangan Nilai</p></li>
                                     <li><p>Menguplod Berkas KHS Semester 1 Sampai Dengan Terakhir</p></li>
                                     <li><p>Klik Tombol Kirim Permohonan Di Aplikasi ASA</p></li>
                                    <ol>
                                    </p>
                                </div>
                            </section>
                            <input type="radio" name="accordion" id="cb6">
                            <section class="accord">
                                    <label class="accord-title" for="cb6">Bagaimana alur pengajuan permohonan surat Rekomendasi Beasiswa?</label>
                                    <label class="accord-close" for="acc-close"></label>
                                <div class="accord-content">
                                    <p style="text-align:left" class="keterangan">
                                    Alur Pengajuan melalui beberapa tahapan berikut:
                                    <ol>
                                     <li><p>Mengisi kolom Semester</p></li>
                                     <li><p>Mengisi kolom Program Studi</p></li>
                                     <li><p>Mengisi kolom Alamat Mahasiswa</p></li>
                                     <li><p>Mengisi kolom Nomor Telepon</p></li>
                                     <li><p>Mengisi kolom Nama Beasiswa Yang Ingin Di Tuju</p></li>
                                     <li><p>Menguplod Berkas Surat Pernyataan Tidak Menerima Beasiswa Dari Pihak Manapun</p></li>
                                     <li><p>Klik Tombol Kirim Permohonan Di Aplikasi ASA</p></li>
                                    <ol>
                                    </p>
                                </div>
                            </section>
                            <input type="radio" name="accordion" id="cb7">
                            <section class="accord">
                                    <label class="accord-title" for="cb7">Bagaimana alur pengajuan permohonan surat Permohonan akreditasi program studi?</label>
                                    <label class="accord-close" for="acc-close"></label>
                                <div class="accord-content">
                                    <p style="text-align:left" class="keterangan">
                                    Alur Pengajuan melalui beberapa tahapan berikut:
                                    <ol>
                                     <li><p>Mengisi kolom Program Studi</p></li>
                                     <li><p>Mengisi Kolom Nomor ijazah</p></li>
                                     <li><p>Menguplod Berkas Ijazah</p></li>
                                     <li><p>Klik Tombol Kirim Permohonan Di Aplikasi ASA</p></li>
                                    <ol>
                                    </p>
                                </div>
                            </section>
                            <input type="radio" name="accordion" id="acc-close" />
                        </nav>
                    </div>
                </section>
            </div>
        </div>
    </div>
</section>
</article>
@endsection
