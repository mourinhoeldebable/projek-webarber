<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>
    <link rel="icon" href="../../img/download.PNG" type="image/gif" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
      .feature-icon {
  width: 4rem;
  height: 4rem;
  border-radius: .75rem;
}

.icon-square {
  width: 3rem;
  height: 3rem;
  border-radius: .75rem;
}

.card-cover {
  background-repeat: no-repeat;
  background-position: center center;
  background-size: cover;
}

.feature-icon-small {
  width: 3rem;
  height: 3rem;
}

body {
        background-image: url('../../img/2.jpg');
        /* Opsional: properti lain untuk mengatur tampilan background */
        background-size: cover; /* Untuk menyesuaikan ukuran gambar dengan background */
        /* Tambahan properti lainnya seperti background-repeat, background-position, dll. */
}

    </style>
  </head>

  @extends('templet/main')

  @section('container')


<body class="text-light">
  <div class="container px-4 py-5">
    <h2 class="pb-2">We Barber</h2>
    <hr class="border border-primary border-3 opacity-75">
    <div class="row row-cols-1 row-cols-md-2 align-items-md-center g-5 py-5">
      <div class="col d-flex flex-column align-items-start gap-2">
        <a href="/info">
        <img src="img/homelogo.jpg" class="img-fluid border rounded-3 shadow-lg mb-4" alt="Example image" loading="lazy" />
        </a>
        <h2 class="text-light"> Wujudkan Gaya Rambut Impianmu Di Barber Shop Bertemakan Beruang!</h2>
        <a href="/info" class="btn btn-primary btn-lg">Lihat Disini</a>
      </div>

      <div class="col">
        <div class="row row-cols-1 row-cols-sm-2 g-4">
          <div class="col d-flex flex-column gap-2">
            <div class="feature-icon-small d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-4 rounded-3">
              <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="bi bi-cash-coin" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8zm5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0z"/>
                <path d="M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522 0-.294.216-.514.572-.578v1.1h-.003zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.709.614v-1.195l.054.012z"/>
                <path d="M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083c.058-.344.145-.678.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1H1z"/>
                <path d="M9.998 5.083 10 5a2 2 0 1 0-3.132 1.65 5.982 5.982 0 0 1 3.13-1.567z"/>
              </svg>
            </div>
            <div class="">
              <h4 class="fw-semibold mb-0 text-black">Harga Terjangkau</h4>
              <p class="text-black">Paragraph of text beneath the heading to explain the heading.</p>
            </div>
          </div>

          <div class="col d-flex flex-column gap-2">
            <div class="feature-icon-small d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-4 rounded-3">
              <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
                <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"/>
              </svg>
            </div>
            <div class="">
              <h4 class="fw-semibold mb-0 text-black">Waktu Yang Fleksibel</h4>
              <p class="text-black">Paragraph of text beneath the heading to explain the heading.</p>
            </div>
          </div>

          <div class="col d-flex flex-column gap-2">
            <div class="feature-icon-small d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-4 rounded-3">
              <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="bi bi-phone" viewBox="0 0 16 16">
                <path d="M11 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z"/>
                <path d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2"/>
              </svg>
            </div>
            <div class="text-white">
              <h4 class="fw-semibold mb-0">Pemesanan Secara Online</h4>
              <p class="">Paragraph of text beneath the heading to explain the heading.</p>
            </div>
          </div>

          <div class="col d-flex flex-column gap-2">
            <div class="feature-icon-small d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-4 rounded-3">
              <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="bi bi-person-workspace" viewBox="0 0 16 16">
                <path d="M4 16s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-5.95a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5"/>
                <path d="M2 1a2 2 0 0 0-2 2v9.5A1.5 1.5 0 0 0 1.5 14h.653a5.373 5.373 0 0 1 1.066-2H1V3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v9h-2.219c.554.654.89 1.373 1.066 2h.653a1.5 1.5 0 0 0 1.5-1.5V3a2 2 0 0 0-2-2z"/>
              </svg>
            </div>
            <div class="text-white">
              <h4 class="fw-semibold mb-0">Featured title</h4>
              <p class="">Paragraph of text beneath the heading to explain the heading.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
  {{-- <div class="px-4 pt-5 my-5 text-center border-bottom">
    <h1 class="display-4 fw-bold text-body-emphasis">Selamat datang Di We Barber</h1>
    <div class="col-lg-6 mx-auto">
      <p class="lead mb-4">
        Wujudkan Gaya Rambut Impianmu Di Barber Shop Bertemakan Beruang!, 
      </p>
      <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mb-5">
        <a href="/info">
          <button type="button" class="btn btn-primary btn-lg px-4 me-sm-3">Lihat Disini</button>
        </a>
      </div>
    </div>
    <div class="overflow-hidden">
      <div class="container px-5">
        <img src="img/homelogo.jpg" class="img-fluid border rounded-3 shadow-lg mb-4" alt="Example image" width="700" height="500" loading="lazy" />
      </div>
    </div>
  </div> --}}
  </body>
</html>

@endsection