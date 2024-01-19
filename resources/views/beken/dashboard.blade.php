@extends('../templet/mein')
  @section('container')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 mt-2">

        <h2>Happy Cukur:)</h2>
        <div>
          @if(session()->has('sucess'))
            <div class="alert alert-success rounded-5 " role="alert">
              {{session('sucess')}} <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-emoji-kiss" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M12.493 13.368a7 7 0 1 1 2.489-4.858c.344.033.68.147.975.328a8 8 0 1 0-2.654 5.152 8.58 8.58 0 0 1-.81-.622Zm-3.731-3.22a13 13 0 0 0-1.107.318.5.5 0 1 1-.31-.95c.38-.125.802-.254 1.192-.343.37-.086.78-.153 1.103-.108.16.022.394.085.561.286.188.226.187.497.131.705a1.892 1.892 0 0 1-.31.593c-.077.107-.168.22-.275.343.107.124.199.24.276.347.142.197.256.397.31.595.055.208.056.479-.132.706-.168.2-.404.262-.563.284-.323.043-.733-.027-1.102-.113a14.87 14.87 0 0 1-1.191-.345.5.5 0 1 1 .31-.95c.371.12.761.24 1.109.321.176.041.325.069.446.084a5.609 5.609 0 0 0-.502-.584.5.5 0 0 1 .002-.695 5.52 5.52 0 0 0 .5-.577 4.465 4.465 0 0 0-.448.082Zm.766-.087-.003-.001-.003-.001c.004 0 .006.002.006.002Zm.002 1.867-.006.001a.038.038 0 0 1 .006-.002ZM6 8c.552 0 1-.672 1-1.5S6.552 5 6 5s-1 .672-1 1.5S5.448 8 6 8Zm2.757-.563a.5.5 0 0 0 .68-.194.934.934 0 0 1 .813-.493c.339 0 .645.19.813.493a.5.5 0 0 0 .874-.486A1.934 1.934 0 0 0 10.25 5.75c-.73 0-1.356.412-1.687 1.007a.5.5 0 0 0 .194.68ZM14 9.828c1.11-1.14 3.884.856 0 3.422-3.884-2.566-1.11-4.562 0-3.421Z"/>
              </svg>
            </div>
            @endif
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-emoji-frown" viewBox="0 0 16 16">
                              <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                              <path d="M4.285 12.433a.5.5 0 0 0 .683-.183A3.498 3.498 0 0 1 8 10.5c1.295 0 2.426.703 3.032 1.75a.5.5 0 0 0 .866-.5A4.498 4.498 0 0 0 8 9.5a4.5 4.5 0 0 0-3.898 2.25.5.5 0 0 0 .183.683zM7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5zm4 0c0 .828-.448 1.5-1 1.5s-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5z"/>
                            </svg></li>
                        @endforeach
                    </ul>
                </div>
          @endif
        <div class="row mb-2 mt-3">
          @foreach ($posts as $post)
          <div class="col-md-6
          ">
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative 
            @if($post->status === 'hadir')
              hadir-bg
            @elseif($post->status === 'pre')
              pre-bg
            @elseif($post->status === 'cuti')
              cuti-bg
            @endif">
              <div class="col p-4 d-flex flex-column position-static">
                <h3 class="mb-0">{{ $post->nama }}</h3>
                <p class="card-text mb-auto">
                  {{ $post->pengalaman }}
                </p>
                <div class="row">
                  <div class="col">
                    <a href="/dashboard/{{ $post->nama }}" class="mt-1">
                      <button type="button" class="btn btn-primary px-4 me-sm-3">cek orderan</button>
                    </a>
                  </div>
                  <div class="col">
                    Status: {{ $post->status }}
                  </div>      
                </div>            
              </div>
              <div class="col-auto d-none d-lg-block">
                <img src="https://source.unsplash.com/200x250/?bear" class="card-img-top" alt="..." />
              </div>
            </div>
          </div>
          @endforeach
        </div>
        <h2 class="mt-4">ORDERAN HARI INI : {{ $total }}</h2>
        <div class="row">
          @foreach ($dashboard as $dashboardData)
            <div class="col-sm-4 mt-3">
                <div class="card" style="width: 25rem;">
                    <div class="card-body">
                      <h4>{{ $dashboardData->nama }}</h4>
                      <div class="centered-image">
                        <a href="/dashboard/{{ $dashboardData->nama }}">
                        <img src="{{ asset('storage/'. $dashboardData->image) }}" alt="Bukti Pembayaran">
                        </a>
                      </div>                                       
                        <h4>{{ $dashboardData->pelanggan }}</h4>                        
                        <span>Jam {{ $dashboardData->jam }}.00 WIB</span><br>
                        <span>Telp: +62{{ $dashboardData->telp }}</span>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="exampleModal{{ $dashboardData->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog dialok">
                <div class="modal-content konten">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Bukti Pembayaran</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body bodi">
                    <img src="{{ asset('storage/'. $dashboardData->image) }}" alt="" class="maxgambar">
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>
          @endforeach
      </div>
    </main>
  @endsection
