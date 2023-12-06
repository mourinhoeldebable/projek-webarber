@extends('templet/main')

@section('container')




    <!-- Author: FormBold Team -->
    <!-- Learn More: https://formbold.com -->
    <div class="formbold-form-wrapper">
        <h1 class="text-center">Booking Sekarang!</h1>
        <img src="https://source.unsplash.com/250x200/?barber"  class="img-fluid border rounded mx-auto d-block shadow-lg mb-4"  alt="...">
        {{-- <img src="img/3bear.png" width="55%" class="rounded mx-auto d-block"> --}}
        @if(session()->has('sucess'))
        <div class="alert alert-success" role="alert">
         {{session('sucess')}} <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-emoji-kiss" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M12.493 13.368a7 7 0 1 1 2.489-4.858c.344.033.68.147.975.328a8 8 0 1 0-2.654 5.152 8.58 8.58 0 0 1-.81-.622Zm-3.731-3.22a13 13 0 0 0-1.107.318.5.5 0 1 1-.31-.95c.38-.125.802-.254 1.192-.343.37-.086.78-.153 1.103-.108.16.022.394.085.561.286.188.226.187.497.131.705a1.892 1.892 0 0 1-.31.593c-.077.107-.168.22-.275.343.107.124.199.24.276.347.142.197.256.397.31.595.055.208.056.479-.132.706-.168.2-.404.262-.563.284-.323.043-.733-.027-1.102-.113a14.87 14.87 0 0 1-1.191-.345.5.5 0 1 1 .31-.95c.371.12.761.24 1.109.321.176.041.325.069.446.084a5.609 5.609 0 0 0-.502-.584.5.5 0 0 1 .002-.695 5.52 5.52 0 0 0 .5-.577 4.465 4.465 0 0 0-.448.082Zm.766-.087-.003-.001-.003-.001c.004 0 .006.002.006.002Zm.002 1.867-.006.001a.038.038 0 0 1 .006-.002ZM6 8c.552 0 1-.672 1-1.5S6.552 5 6 5s-1 .672-1 1.5S5.448 8 6 8Zm2.757-.563a.5.5 0 0 0 .68-.194.934.934 0 0 1 .813-.493c.339 0 .645.19.813.493a.5.5 0 0 0 .874-.486A1.934 1.934 0 0 0 10.25 5.75c-.73 0-1.356.412-1.687 1.007a.5.5 0 0 0 .194.68ZM14 9.828c1.11-1.14 3.884.856 0 3.422-3.884-2.566-1.11-4.562 0-3.421Z"/></svg>
        </div>
        @endif
      <form method="Post" action="/info" >
        <div class="formbold-input-wrapp formbold-mb-3"> 
            @csrf
          <label for="pelanggan" class="formbold-form-label"> Nama </label>

          

          <div>
            <input
              type="text"
              name="pelanggan"
              id="pelanggan"
              placeholder="nama"
              class="formbold-form-input" 
              
            >

  
          </div>
        </div>

        <div class="formbold-mb-3">
          <label class="formbold-form-label" for="occupation">Pilih Beruang Mu </label>  
          <select class="formbold-form-input" name="nama" id="occupation">
            @foreach ($posts as $post)
            <option value="{{ $post->nama }}">{{ $post->nama }}</option>
            @endforeach
          </select>
        </div>

        <div class="formbold-mb-3">
          <label for="jam" class="formbold-form-label"> Tentukan Jam Potong(W.I.B)</label>
          <select class="form-select" name="jam" id="jam">
            <option value="8.00">08.00</option>
            <option value="9.00">09.00</option>
            <option value="10.00">10.00</option>
            <option value="11.00">11.00</option>
            <option value="12.00">12.00</option>
            <option value="13.00">13.00</option>
            <option value="14.00">14.00</option>
            <option value="15.00">15.00</option>
            <option value="16.00">16.00</option>
            <option value="17.00">17.00</option>
            <option value="18.00">18.00</option>
            <option value="19.00">19.00</option>
            <option value="20.00">20.00</option>
          </select>
        </div>
  
        <div class="formbold-mb-3">
          <label for="email" class="formbold-form-label"> Email </label>
          <input
            type="text"
            name="email"
            id="email"
            placeholder="example@email.com"
            class="formbold-form-input" 
          >
        </div>
  
        <div class="formbold-mb-3 formbold-input-wrapp">
          <label for="telp" class="formbold-form-label"> Phone </label>
  
          <div>
            <input
              type="number"
              name="telp"
              id="telp"
              placeholder="08xxxxxxxxxx"
              class="formbold-form-input" 
            >
          </div>
        </div>

        {{-- <div class="formbold-mb-3">
          <label for="upload" class="formbold-form-label">
            Upload Bukti Pembayaran
          </label>
          <input
            type="file"
            name="upload"
            id="upload"
            class="formbold-form-input formbold-form-file"
          /> 
        </div> --}}
  
        <p>Baca<!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
              Syarat Dan Ketentuan
            </button> disinii
            
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div></p>
        <button class="btn btn-primary" type="submit">Pesan</button>

      </form>
    </div>
  </div>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    .formbold-mb-3 {
      margin-bottom: 15px;
    }
    .formbold-relative {
      position: relative;
    }
    .formbold-stroke-current {
      stroke: #ffffff;
      z-index: 999;
    }
    #supportCheckbox:checked ~ div span {
      opacity: 1;
    }
    #supportCheckbox:checked ~ div {
      background: #6a64f1;
      border-color: #6a64f1;
    }
  
    .formbold-main-wrapper {
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 48px;
    }
  
    .formbold-form-wrapper {
      margin: 0 auto;
      max-width: 570px;
      width: 100%;
      background: white;
      padding: 40px;
    }
  
    .formbold-img {
      display: block;
      margin: 0 auto 45px;
    }
  
    .formbold-input-wrapp > div {
      display: flex;
      gap: 20px;
    }
  
    .formbold-input-flex {
      display: flex;
      gap: 20px;
      margin-bottom: 15px;
    }
    .formbold-input-flex > div {
      width: 50%;
    }
    .formbold-form-input {
      width: 100%;
      padding: 13px 22px;
      border-radius: 5px;
      border: 1px solid #dde3ec;
      background: #ffffff;
      font-weight: 500;
      font-size: 16px;
      color: #536387;
      outline: none;
      resize: none;
    }
    /* .formbold-form-input::placeholder,
    select.formbold-form-input,
    .formbold-form-input[type='date']::-webkit-datetime-edit-text,
    .formbold-form-input[type='date']::-webkit-datetime-edit-month-field,
    .formbold-form-input[type='date']::-webkit-datetime-edit-day-field,
    .formbold-form-input[type='date']::-webkit-datetime-edit-year-field {
      color: rgba(83, 99, 135, 0.5);
    } */
  
    .formbold-form-input:focus {
      border-color: #6a64f1;
      box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
    }
    .formbold-form-label {
      color: #536387;
      font-size: 14px;
      line-height: 24px;
      display: block;
      margin-bottom: 10px;
    }
  
    .formbold-checkbox-label {
      display: flex;
      cursor: pointer;
      user-select: none;
      font-size: 16px;
      line-height: 24px;
      color: #536387;
    }
    .formbold-checkbox-label a {
      margin-left: 5px;
      color: #6a64f1;
    }
    .formbold-input-checkbox {
      position: absolute;
      width: 1px;
      height: 1px;
      padding: 0;
      margin: -1px;
      overflow: hidden;
      clip: rect(0, 0, 0, 0);
      white-space: nowrap;
      border-width: 0;
    }
    .formbold-checkbox-inner {
      display: flex;
      align-items: center;
      justify-content: center;
      width: 20px;
      height: 20px;
      margin-right: 16px;
      margin-top: 2px;
      border: 0.7px solid #dde3ec;
      border-radius: 3px;
    }
  
    .formbold-form-file {
      padding: 12px;
      font-size: 14px;
      line-height: 24px;
      color: rgba(83, 99, 135, 0.5);
    }
    .formbold-form-file::-webkit-file-upload-button {
      display: none;
    }
    .formbold-form-file:before {
      content: 'Upload';
      display: inline-block;
      background: #EEEEEE;
      border: 0.5px solid #E7E7E7;
      border-radius: 3px;
      padding: 3px 12px;
      outline: none;
      white-space: nowrap;
      -webkit-user-select: none;
      cursor: pointer;
      color: #637381;
      font-weight: 500;
      font-size: 12px;
      line-height: 16px;
      margin-right: 10px;
    }
  
    .formbold-btn {
      font-size: 16px;
      border-radius: 5px;
      padding: 14px 25px;
      border: none;
      font-weight: 500;
      background-color: #6a64f1;
      color: white;
      cursor: pointer;
      margin-top: 25px;
    }
    .formbold-btn:hover {
      box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
    }
  
    input::-webkit-outer-spin-button,
      input::-webkit-inner-spin-button {
         -webkit-appearance: none;
      }

  </style>

{{-- <script>
  function createOption(value, text) {
    var option = document.createElement("option");
    option.text = text;
    option.value = value;
    return option;
  }

  var hourSelect = document.getElementById("hours");
  for (var i = 8; i <= 18; i++) {
    hourSelect.add(createOption(i, i));
  }
</script> --}}


<h1 class="text-center">Booking Sekarang!</h1>
<img src="https://source.unsplash.com/250x200/?barber"  class="img-fluid border rounded mx-auto d-block shadow-lg mb-4"  alt="...">
{{-- <img src="img/3bear.png" width="55%" class="rounded mx-auto d-block"> --}}
@if(session()->has('sucess'))
<div class="alert alert-success" role="alert">
 {{session('sucess')}} <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-emoji-kiss" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M12.493 13.368a7 7 0 1 1 2.489-4.858c.344.033.68.147.975.328a8 8 0 1 0-2.654 5.152 8.58 8.58 0 0 1-.81-.622Zm-3.731-3.22a13 13 0 0 0-1.107.318.5.5 0 1 1-.31-.95c.38-.125.802-.254 1.192-.343.37-.086.78-.153 1.103-.108.16.022.394.085.561.286.188.226.187.497.131.705a1.892 1.892 0 0 1-.31.593c-.077.107-.168.22-.275.343.107.124.199.24.276.347.142.197.256.397.31.595.055.208.056.479-.132.706-.168.2-.404.262-.563.284-.323.043-.733-.027-1.102-.113a14.87 14.87 0 0 1-1.191-.345.5.5 0 1 1 .31-.95c.371.12.761.24 1.109.321.176.041.325.069.446.084a5.609 5.609 0 0 0-.502-.584.5.5 0 0 1 .002-.695 5.52 5.52 0 0 0 .5-.577 4.465 4.465 0 0 0-.448.082Zm.766-.087-.003-.001-.003-.001c.004 0 .006.002.006.002Zm.002 1.867-.006.001a.038.038 0 0 1 .006-.002ZM6 8c.552 0 1-.672 1-1.5S6.552 5 6 5s-1 .672-1 1.5S5.448 8 6 8Zm2.757-.563a.5.5 0 0 0 .68-.194.934.934 0 0 1 .813-.493c.339 0 .645.19.813.493a.5.5 0 0 0 .874-.486A1.934 1.934 0 0 0 10.25 5.75c-.73 0-1.356.412-1.687 1.007a.5.5 0 0 0 .194.68ZM14 9.828c1.11-1.14 3.884.856 0 3.422-3.884-2.566-1.11-4.562 0-3.421Z"/></svg>
</div>
@endif
<div class="container">
<div class="row justify-content-center">
    <div class="col-md-6">
      <form method="Post" action="/info" >     
        @csrf          
          <div class="form-floating mb-3">                   
            {{-- <input type="text" class="form-control" placeholder="Leave a comment here" id="pelanggan" name="pelanggan"> --}}
            <input
              type="text"
              name="pelanggan"
              id="pelanggan"
              placeholder="nama"
              class="form-control" 
              
            >               
            <label for="pelanggan">Nama</label>
          </div>
          
          <div class="row g-2 mb-3">
            <div class="col-md">
              <div class="form-floating">
                <select class="form-select" id="floatingSelectGrids" name="nama">                
                  @foreach ($posts as $post)
              <option value="{{ $post->nama }}">{{ $post->nama }}</option>
              @endforeach
                </select>
                <label for="floatingSelectGrids">Pilih Beruang mu!</label>
              </div>
            </div>
            <div class="col-md">
              <div class="form-floating">
                <select class="form-select" id="floatingSelectGrid" name="jam" id="jam">                
                  <option value="8.00">08.00</option>
                  <option value="9.00">09.00</option>
                  <option value="10.00">10.00</option>
                  <option value="11.00">11.00</option>
                  <option value="12.00">12.00</option>
                  <option value="13.00">13.00</option>
                  <option value="14.00">14.00</option>
                  <option value="15.00">15.00</option>
                  <option value="16.00">16.00</option>
                  <option value="17.00">17.00</option>
                  <option value="18.00">18.00</option>
                  <option value="19.00">19.00</option>
                  <option value="20.00">20.00</option>
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
            >
            {{-- <input type="text"class="form-control" placeholder="Leave a comment here" id="email" name="email">                    --}}
            <label for="email">Email <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
              <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
            </svg></label>
          </div>
        
        <div class="form-floating mb-2">
          <input
            type="number"
            name="telp"
            id="telp"
            placeholder="08xxxxxxxxxx"
            class="form-control" 
          >
          {{-- <input type="number" class="form-control" placeholder="Leave a comment here" id="telp" name="telp">                  --}}
          <label for="telp">No Telp <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
            <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
          </svg></label>
        </div>
        
      
        

          <p>Baca<!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
              Syarat Dan Ketentuan
            </button> disinii
            
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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



@endsection