@extends('../templet/mein') 
  @section('container')
      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
            <div class="btn-toolbar mb-2 mb-md-0">
            </div>
          </div>

            <div class="row">
              @foreach ($dashboard as $dashboardData)
                <div class="col-sm-4 mt-3">
                    <div class="card" style="width: 25rem;">
                        <div class="card-body">
                          <div class="centered-image">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $dashboardData->id}}">
                            <img src="{{ asset('storage/'. $dashboardData->image) }}" alt="Bukti Pembayaran">
                            </a>
                          </div>                     
                            <p>{{ $loop->iteration }}</p>
                            <h4>{{ $dashboardData->pelanggan }}</h4>
                            <span>Jam {{ $dashboardData->jam }}.00 WIB</span><br>
                            <span>Telp: +62{{ $dashboardData->telp }}</span>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="exampleModal{{ $dashboardData->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Bukti Pembayaran</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <img src="{{ asset('storage/'. $dashboardData->image) }}" alt="">
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
      </div>
    </div>
  @endsection
  
    

    