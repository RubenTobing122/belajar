@inject('carbon', 'Carbon\Carbon')
@extends('theme.' . $theme . '.template')



@section('content')
<article>
  <header class="post-page-header">
    <div class="container">
      <div class="header-wrapper">

        <div>
          <h1 class="post-title">
            <?php if ($lang=='id'): ?>
            ERROR 404 - HALAMAN TIDAK DITEMUKAN
            <?php else: ?>
            ERROR 404 - PAGE NOT FOUND
            <?php endif; ?>
        </h1>
          <div class="post-metadata mt-3">

          </div>
        </div>
      </div>
    </div>
  </header>

  {{-- <div class="container mt-5">
    <div class="content mb-5">
        <p>Halaman tidak ditemukan.</p>

    </div>
  </div> --}}
</article>
@endsection
