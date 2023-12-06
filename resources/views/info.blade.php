@extends('templet/main')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-sm-5 mt-3">
                <img src="img/tamat.JPG" class="img-fluid" alt="...">
        </div>
        
        <div class="col p-3 m-3">
            <h1>Latar Belakang We Barber</h1>
            <article>
               <p class="fs-5">We Barber merupakan tempat pangkas rambut yang bertemakan Beruang pertama di Indonesia.
                 Owner Dari We Barber Terinpirasi Dari Kartun We Bare Bears yang merupakan kartun Kesukaan anaknya,
                  Karena rasa Sedihnya yang Cukup Dalam Setelah Mengetahui Kartun Kesayangan anaknya Telah Tamat, 
                  maka Owner We Barber memutuskan untuk membuka Barber shop yang bertemakan Kartun We Bare Bears.
                    We Barber Company Juga berencana untuk memperluas Jangkauanya Dengan membuka Sekitar 100 Cabang DiBumi.</p>
            </article>
        </div>
    </div>
 
    <hr class="border border-primary border-3 opacity-75">
    <h2 class="text-center">Our Bear</h2>


  <div class="container">
      <div class="row mb-2">
          @foreach ($posts as $post)
          <div class="col-md-6">
              <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                  <h3 class="mb-0">{{ $post->nama }}</h3>
                  <p class="card-text mb-auto">Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore temporibus impedit, in quaerat voluptatem corporis unde suscipit culpa quasi possimus ab adipisci consequatur quam quae magni. Placeat, atque quia? Ratione.</p>
                  <a href="/info/create" class="mt-1">
                    <button type="button" class="btn btn-primary px-4 me-sm-3">Booking Sekarang!</button>
                  </a>
                </div>
                <div class="col-auto d-none d-lg-block">
                    <img src="https://source.unsplash.com/200x250/?bear" class="card-img-top" alt="...">
                </div>
              </div>
            </div>
          @endforeach
      </div>
  </div>
</div>
@endsection