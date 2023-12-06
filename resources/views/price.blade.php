@extends('templet/main')

@section('container')
<h1 class="text-center">Price List</h1>
<hr class="border border-primary border-3 opacity-75">
<div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
          <div class="col">
            <div class="card mb-4 rounded-3 shadow-sm border-warning">
              <div class="card-header py-3 text-bg-warning border-warning">
                <h4 class="my-0 fw-normal">PROMO BULAN INI!!</h4>
              </div>
              <div class="card-body">
                <h1 class="card-title pricing-card-title">Kids Haircut</h1>
                <ul class="list-unstyled mt-3 mb-4">
                  <h1 class="card-title pricing-card-title">60K<small class="text-body-secondary fw-light text-decoration-line-through">70K</small></h1>
                  <p>Pengalaman potong rambut yang ramah dan nyaman untuk si kecil.</p>
                </ul>
                <a href="/info/create"><button class="w-100 btn btn-lg btn-warning">BOOKING SEKARANG!</button></a>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card mb- rounded-3 shadow-sm border-danger">
              <div class="card-header py-3 text-bg-danger">
                <h4 class="my-0 fw-normal">PROMO MINGGU INI!</h4>
              </div>
              <div class="card-body">
                <h1 class="card-title pricing-card-title">Black Hair Coloring</h1>
                <ul class="list-unstyled mt-3 mb-4">
                  <h1 class="card-title pricing-card-title">100K<small class="text-body-secondary fw-light text-decoration-line-through">115K</small></h1>
                  <p>Kembalikan warna rambutmu menjadi rambut hitam Cerah berkilau.</p>
                </ul>
                <a href="/info/create"><button type="button" class="w-100 btn btn-lg btn-danger">BOOKING SEKARANG!</button></a>
              </div>
            </div>
          </div>
        </div>

<div class="d-flex flex-column flex-md-row p-4 gap-4 py-md-5 align-items-center">
    <div class="list-group">
      <a href="/info/create" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">       
        <div class="d-flex gap-4 w-100 justify-content-between">
          <div>
            <h6 class="mb-0">Kids Haircut</h6>
            <p class="mb-0 opacity-75">Pengalaman potong rambut yang ramah dan nyaman untuk si kecil.</p>
          </div>
          <small class="opacity-20 text-nowrap">60k</small>
        </div>
      </a>
      <a href="/info/create" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">       
        <div class="d-flex gap-4 w-100 justify-content-between">
          <div>
            <h6 class="mb-0">Gentlemen Grooming</h6>
            <p class="mb-0 opacity-75">A complete mens grooming service. Dimulai dengan membersihkan wajah dengan handuk dingin kemudian potong rambut lalu keramas.</p>
          </div>
          <small class="opacity-20 text-nowrap">75k</small>
        </div>
      </a>
      <a href="/info/create" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">        
        <div class="d-flex gap-4 w-100 justify-content-between">
          <div>
            <h6 class="mb-0">Black Hair Coloring</h6>
            <p class="mb-0 opacity-75">ubah rambut ubanmu menjadi rambut hitam berkilau</p>
          </div>
          <small class="opacity-20 text-nowrap">100k</small>
        </div>
      </a>
      <a href="/info/create" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">        
        <div class="d-flex gap-4 w-100 justify-content-between">
          <div>
            <h6 class="mb-0">Anti-Dandruff Treatment</h6>
            <p class="mb-0 opacity-75">Treatment untuk menghilangkan ketombe</p>
          </div>
          <small class="opacity-20 text-nowrap">120k</small>
        </div>
      </a>
      <a href="/info/create" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">        
        <div class="d-flex gap-4 w-100 justify-content-between">
          <div>
            <h6 class="mb-0">Hair Loss Serum Treatment</h6>
            <p class="mb-0 opacity-75">Solusi untuk rambut rontok & tipis. Berguna untuk mengurangi kerontokan rambut</p>
          </div>
          <small class="opacity-20 text-nowrap">45k</small>
        </div>
      </a>
      <a href="/info/create" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">        
        <div class="d-flex gap-4 w-100 justify-content-between">
          <div>
            <h6 class="mb-0">Gentlemen Shave</h6>
            <p class="mb-0 opacity-75">Dimulai dengan handuk panas untuk merilekskan kulit wajah dan membuka pori-pori wajah lalu diikuti dengan pencukuran yang nyaman.</p>
          </div>
          <small class="opacity-20 text-nowrap">45k</small>
        </div>
      </a>
      <a href="/info/create" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">        
        <div class="d-flex gap-4 w-100 justify-content-between">
          <div>
            <h6 class="mb-0">Fashion Hair Color</h6>
            <p class="mb-0 opacity-75">Warnai rambutmu dengan sempurna sesuai dengan warna idaman-mu dengan barberman kami yang sudah berpengalaman.</p>
          </div>
          <small class="opacity-20 text-nowrap">45k</small>
        </div>
      </a>
      <a href="/info/create" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">        
        <div class="d-flex gap-4 w-100 justify-content-between">
          <div>
            <h6 class="mb-0">Gentlemen Shave</h6>
            <p class="mb-0 opacity-75">Dimulai dengan handuk panas untuk merilekskan kulit wajah dan membuka pori-pori wajah lalu diikuti dengan pencukuran yang nyaman.</p>
          </div>
          <small class="opacity-20 text-nowrap">45k</small>
        </div>
      </a>
         
    </div>
  </div>
  

@endsection