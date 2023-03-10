@extends('theme.' . $theme . '.template')

@section('content')
<div 
  class="usu-bg-image d-flex justify-content-center align-items-center"
  style="--usu-bg: url('/images/dosen-staf.png'); height: 250px"
>
  <h1 class="fw-bold h1 text-white">
    Dosen &amp; Staff
  </h1>
</div>
<article class="container my-4">
  <div class="row g-lg-5">
    <aside class="usu-employee-sidebar col-12 col-lg-4">
      [single-lecturer class="mx-5" administration_rank="Dekan"]
      [staff-lecturer-stats class="mt-5"]
      <section class="mt-4">
        <h6 class="d-flex w-100 mb-0">
          <div class="flex-grow-1 usu-bg-primary text-white h4 fw-bold mb-0 p-4">
            Merdeka Belajar<br />Kampus Merdeka
          </div>
          <div class="usu-bg-secondary" style="width: 5rem;">&nbsp;</div>
        </h6>
        <ul class="usu-bg-tertiary h5 py-3 px-5" style="list-style: none">
          <li class="d-flex justify-content-between">
            <a href="#" class="text-white text-decoration-none hover:underline">
              Dosen Berkarya
            </a>
            <a>
              <i class="fa-solid fa-arrow-up-right-from-square text-white"></i>
            </a>
          </li>
        </ul>
      </section>
      <section class="mt-4">
        <h6 class="d-flex w-100 mb-0">
          <div class="flex-grow-1 usu-bg-primary text-white h4 fw-bold mb-0 p-4">
            Konferensi
          </div>
          <div class="usu-bg-secondary" style="width: 5rem;">&nbsp;</div>
        </h6>
        <ul class="usu-bg-tertiary h5 py-3 px-5" style="list-style: none">
          <li class="d-flex justify-content-between">
            <a href="#" class="text-white text-decoration-none hover:underline">
              Dosen Berkarya
            </a>
            <a>
              <i class="fa-solid fa-arrow-up-right-from-square text-white"></i>
            </a>
          </li>
        </ul>
      </section>
      <section class="mt-4">
        <h6 class="d-flex w-100 mb-0">
          <div class="flex-grow-1 usu-bg-primary text-white h4 fw-bold mb-0 p-4">
            Publikasi
          </div>
          <div class="usu-bg-secondary" style="width: 5rem;">&nbsp;</div>
        </h6>
        <ul class="usu-bg-tertiary h5 py-3 px-5" style="list-style: none">
          <li class="d-flex justify-content-between">
            <a href="#" class="text-white text-decoration-none hover:underline">
              Dosen Berkarya
            </a>
            <a>
              <i class="fa-solid fa-arrow-up-right-from-square text-white"></i>
            </a>
          </li>
        </ul>
      </section>
    </aside>
    <div class="col-12 col-lg-8">
      <div class="d-flex gap-5 flex-column">
        <section class="row gy-3 g-lg-5 justify-content-center">
          <div class="col-6 col-lg-4">
            [single-lecturer class="h-100" administration_rank="Wakil Dekan 1"]
          </div>
          <div class="col-6 col-lg-4">
            [single-lecturer class="h-100" administration_rank="Wakil Dekan 2"]
          </div>
          <div class="col-6 col-lg-4">
            [single-lecturer class="h-100" administration_rank="Wakil Dekan 3"]
          </div>
        </section>
        <section class="d-flex flex-column gap-4">
          <div x-data="{expanded: false}">
            <div class="d-flex align-items-center border-bottom border-3 usu-border-primary">
              <h3 class="flex-grow-1 p-3 mb-0 usu-text-primary fw-bold">
                Teknologi Informasi
              </h3>
              <button class="btn-text" @click="expanded = !expanded">
                <i class="fa-solid fa-caret-down"></i>
              </button>
            </div>
            <div class="bg-light py-4 px-3" x-show="expanded" x-collapse style="display: none; height: 0px; overflow: hidden;">
              [lecturers card_class="h-100" department="Ilmu Kesehatan Gigi Anak"]
            </div>
          </div>
          <div x-data="{expanded: false}">
            <div class="d-flex align-items-center border-bottom border-3 usu-border-primary">
              <h3 class="flex-grow-1 p-3 mb-0 usu-text-primary fw-bold">
                Department A
              </h3>
              <button class="btn-text" @click="expanded = !expanded">
                <i class="fa-solid fa-caret-down"></i>
              </button>
            </div>
            <div class="bg-light py-4 px-3" x-show="expanded" x-collapse style="display: none; height: 0px; overflow: hidden;">
              [staffs card_class="h-100" position="Department A"]
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>
</article>
@endsection