 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
<link rel="stylesheet" href='{{ asset("assests/css/style.css") }}'>

 <div class="resetPassContainer h-100 w-100 d-grid align-items-center justify-content-center ">
  
    <div>
       <div class="card-body">

         @if (session('status'))
             <div class="alert alert-success dan_mesg_po" role="alert">
              {{ session('status') }}
            </div>
         @endif

        </div>
      

        <div class="reset col-sm12 ">
            <div class="logo">
            <img src="{{ asset("assests/svg/Layer 2.svg") }}">
            </div>
            <div class="text-center mt-4 name text-uppercase"> Enjezle </div>
            <form class="p-3 mt-3" method="POST" action="{{ route('password.email') }}">
            @csrf
                <div class="form-field d-flex align-items-center">
                    <span class="fas fa-envelope"></span> 
                    <input type="email" name="email" id="email" placeholder="ادخل عنوان بريدك الالكتروني" class='@error('email') is-invalid @enderror' value="{{ old('email') }}" required autocomplete="email" autofocus>
                      @error('email')
                           <div class="alert alert-danger dan_mesg_po" role="alert">
          {{ $message }}
            </div>
                         
                    @enderror
                </div> 
              <button class="btn mt-3 text-capitalize" type='submit'>إرسال</button>

            </form>
        </div>
    </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>




