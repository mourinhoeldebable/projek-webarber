@extends('../templet/mein')
  @section('container')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 mt-2">

      <h2>Happy Cukur:)</h2>
      <div class="row mb-2 mt-3">
        @foreach ($posts as $post)
        <div class="col-md-6">
          <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
            <div class="col p-4 d-flex flex-column position-static">
              <h3 class="mb-0">{{ $post->nama }}</h3>
              <p class="card-text mb-auto">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam quibusdam nulla voluptatem sint inventore, debitis rem voluptatibus molestiae quos vitae? Repellat quae recusandae omnis corporis dicta modi obcaecati nam
                autem.
              </p>
              <a href="/dashboard/{{ $post->nama }}" class="mt-1">
                <button type="button" class="btn btn-primary px-4 me-sm-3">cek orderan</button>
              </a>
            </div>
            <div class="col-auto d-none d-lg-block">
              <img src="https://source.unsplash.com/200x250/?bear" class="card-img-top" alt="..." />
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </main>
  @endsection
