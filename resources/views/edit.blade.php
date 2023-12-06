@extends('templet/main')

@section('container')
<h1 class="text-center">Ubah Pesanan?</h1>
{{-- <img src="https://source.unsplash.com/250x200/?barber"  class="img-fluid border rounded mx-auto d-block shadow-lg mb-4"  alt="..."> --}}
{{-- <img src="img/3bear.png" width="55%" class="rounded mx-auto d-block"> --}}
<img src="{{ asset('storage/bukti-bayar/3bear.png') }}" width="200px" height="200px" class="rounded mx-auto d-block mb-2" alt="gambar1">

<div class="container">
<div class="row justify-content-center">
    <div class="col-md-6">
      @if(session()->has('sucess'))
<div class="alert alert-success rounded-5 " role="alert">
 {{session('sucess')}} <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-emoji-kiss" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M12.493 13.368a7 7 0 1 1 2.489-4.858c.344.033.68.147.975.328a8 8 0 1 0-2.654 5.152 8.58 8.58 0 0 1-.81-.622Zm-3.731-3.22a13 13 0 0 0-1.107.318.5.5 0 1 1-.31-.95c.38-.125.802-.254 1.192-.343.37-.086.78-.153 1.103-.108.16.022.394.085.561.286.188.226.187.497.131.705a1.892 1.892 0 0 1-.31.593c-.077.107-.168.22-.275.343.107.124.199.24.276.347.142.197.256.397.31.595.055.208.056.479-.132.706-.168.2-.404.262-.563.284-.323.043-.733-.027-1.102-.113a14.87 14.87 0 0 1-1.191-.345.5.5 0 1 1 .31-.95c.371.12.761.24 1.109.321.176.041.325.069.446.084a5.609 5.609 0 0 0-.502-.584.5.5 0 0 1 .002-.695 5.52 5.52 0 0 0 .5-.577 4.465 4.465 0 0 0-.448.082Zm.766-.087-.003-.001-.003-.001c.004 0 .006.002.006.002Zm.002 1.867-.006.001a.038.038 0 0 1 .006-.002ZM6 8c.552 0 1-.672 1-1.5S6.552 5 6 5s-1 .672-1 1.5S5.448 8 6 8Zm2.757-.563a.5.5 0 0 0 .68-.194.934.934 0 0 1 .813-.493c.339 0 .645.19.813.493a.5.5 0 0 0 .874-.486A1.934 1.934 0 0 0 10.25 5.75c-.73 0-1.356.412-1.687 1.007a.5.5 0 0 0 .194.68ZM14 9.828c1.11-1.14 3.884.856 0 3.422-3.884-2.566-1.11-4.562 0-3.421Z"/></svg>
</div>
@endif
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-emoji-frown" viewBox="0 0 16 16">
                  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                  <path d="M4.285 12.433a.5.5 0 0 0 .683-.183A3.498 3.498 0 0 1 8 10.5c1.295 0 2.426.703 3.032 1.75a.5.5 0 0 0 .866-.5A4.498 4.498 0 0 0 8 9.5a4.5 4.5 0 0 0-3.898 2.25.5.5 0 0 0 .183.683zM7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5zm4 0c0 .828-.448 1.5-1 1.5s-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5z"/>
                  </svg>
                </li>
            @endforeach
        </ul>
    </div>
@endif
      <form method="Post" action="/info/{{ $dashboards[0]->id }}" enctype="multipart/form-data" >    
        @method('put') 
        @csrf          
          <div class="form-floating mb-3">                   
            <input
              type="text"
              name="pelanggan"
              id="pelanggan"
              placeholder="nama"
              class="form-control" 
              value="{{ old('pelanggan', $dashboards[0]->pelanggan)}}"
            >               
            <label for="pelanggan">Nama</label>
          </div>
          <div class="row g-2 mb-3">
            <div class="col-md">
              <div class="form-floating">
                <select class="form-select" id="floatingSelectGrids-222" name="nama">              
                  @foreach ($posts as $post)                   
                    {{-- <option value="{{ $post->nama }}">{{ $post->nama }}</option>  --}}                                     
                    @if(old('nama', $post->nama) == $dashboards[0]->nama)
                      <option value="{{ $post->nama }}"selected>{{ $post->nama }}</option>                     
                    @else
                      <option value="{{ $post->nama }}">{{ $post->nama }}</option>                    
                    @endif                 
                 @endforeach
                </select>
                <label for="floatingSelectGrids">Pilih Beruang mu!</label>
              </div>
            </div>
            <div class="col-md">
              <div class="form-floating">
                <select class="form-select" id="floatingSelectGrid-1111" name="jam" id="jam">   
                  @foreach($jam as $data)
                    @if (!in_array(  $data->jam_potong, $dashboardDD))
                      @if (old('jam', $data->jam_potong) == $dashboards[0]->jam)                        
                          <option value="{{ $data->jam_potong }}" selected>{{ $data->jam_potong }}</option>                     
                      @else
                          <option value="{{ $data->jam_potong }}">{{ $data->jam_potong }}</option>
                      @endif
                    @endif   
                  @endforeach
                </select>
                <label for="floatingSelectGrid">Tentukan Jam Potong(W.I.B)</label>
              </div>
            </div>
          </div>
          
          <div class="form-floating mb-3">
            <input
              type="text"
              name="email"
              id="email"
              placeholder="example@email.com"
              class="form-control" 
              value="{{ old('email', $dashboards[0]->email) }}"
            >
            {{-- <input type="text"class="form-control" placeholder="Leave a comment here" id="email" name="email">                    --}}
            <label for="email">Email <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
              <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
            </svg> User@example.com</label>
          </div>
        
        <div class="input-group mb-3">
          <span class="input-group-text">+62</span>
          <div class="form-floating">
            <input type="text" class="form-control" id="floatingInputGroup1" placeholder="Username" name="telp" value="{{ old('telp', $dashboards[0]->telp) }}">
            <label for="floatingInputGroup1">No Telp <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
              <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
            </svg></label>
          </div>
        </div>

        <div class="mb-3">
          <label for="image" class="form-label text-light">Scan Qris Gopay Pada Syarat Dan ketentuan,Dan Upload Bukti Pembayaran Disiniiii <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pin-angle" viewBox="0 0 16 16">
            <path d="M9.828.722a.5.5 0 0 1 .354.146l4.95 4.95a.5.5 0 0 1 0 .707c-.48.48-1.072.588-1.503.588-.177 0-.335-.018-.46-.039l-3.134 3.134a5.927 5.927 0 0 1 .16 1.013c.046.702-.032 1.687-.72 2.375a.5.5 0 0 1-.707 0l-2.829-2.828-3.182 3.182c-.195.195-1.219.902-1.414.707-.195-.195.512-1.22.707-1.414l3.182-3.182-2.828-2.829a.5.5 0 0 1 0-.707c.688-.688 1.673-.767 2.375-.72a5.922 5.922 0 0 1 1.013.16l3.134-3.133a2.772 2.772 0 0 1-.04-.461c0-.43.108-1.022.589-1.503a.5.5 0 0 1 .353-.146zm.122 2.112v-.002zm0-.002v.002a.5.5 0 0 1-.122.51L6.293 6.878a.5.5 0 0 1-.511.12H5.78l-.014-.004a4.507 4.507 0 0 0-.288-.076 4.922 4.922 0 0 0-.765-.116c-.422-.028-.836.008-1.175.15l5.51 5.509c.141-.34.177-.753.149-1.175a4.924 4.924 0 0 0-.192-1.054l-.004-.013v-.001a.5.5 0 0 1 .12-.512l3.536-3.535a.5.5 0 0 1 .532-.115l.096.022c.087.017.208.034.344.034.114 0 .23-.011.343-.04L9.927 2.028c-.029.113-.04.23-.04.343a1.779 1.779 0 0 0 .062.46z"/>
            </svg>
          </label>
          <input type="hidden" name="oldImage" value="{{ $dashboards[0]->image }}">          
          <input class="form-control" type="file" id="image" name="image" onchange="previewImage()">  
          @if ($dashboards[0]->image)
            <img src="{{ asset('storage/' . $dashboards[0]->image) }}" class="img-preview col-sm-5 mt-3" style="">  
          @endif             
        </div>


          <p>Baca<!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
              Syarat Dan Ketentuan
            </button> disinii
            
            <!-- Modal -->
            <div class="modal fade text-dark" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Syarat Dan Ketentuan</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <p>1. no refund</p>
                    <p>2. datang sesuai waktu</p>
                    <p>3. bayar biaya booking sebesar Rp.20.000 pada qris yang tersedia</p>
                    <p>4. happy bear</p>
                    <img src="{{ asset('storage/bukti-bayar/scan.jpg') }}"  class="img-fluid border rounded mx-auto d-block shadow-lg mb-4"  alt="Qris Gopay">
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>
          </p>
        <button class="btn btn-primary" type="submit">Pesan</button>
          </form>
    </div>
</div>
</div>


<style>
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
 -webkit-appearance: none;
}

</style>

<script>
  function previewImage(){
  const image = document.querySelector('#image');
  const imgPreview = document.querySelector('.img-preview');

  imgPreview.style.display = 'block'; 

  const oFReader = new FileReader();
  oFReader.readAsDataURL(image.files[0]);

  oFReader.onload = function(oFRevent){
    imgPreview.src = oFRevent.target.result;
  }
}
    
</script>

@endsection