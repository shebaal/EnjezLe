
<link rel="stylesheet" href='{{ asset("assests/css/main.css") }}'>


 <body>

 <div class="loginContainer">
        <div class="login-box">
            <div class="login_icon_box">
                <img src="{{ asset('assests/svg/Layer2.svg') }}" alt="">
             </div>
            <h2>تسجيل الدخول</h2>
            <form method="POST" action="{{ route('login') }}">
                 @csrf
                <div class="user-box">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    <label>عنوان البريد الالكتروتي</label>
                       @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                </div>
                <div class="user-box">
                    <input type="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                    <label>كلمة السر</label>
                        @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                </div>
                <!-- <a href="#">
                <span></span>
                <span></span>
                <span></span>
                <span></span> Submit
            </a> -->
    
   <div class='btn-cont'>
            <button class='btn' href='#' type="submit">
                تسجيل
                  <span class='line-1'></span>
                  <span class='line-2'></span>
                  <span class='line-3'></span>
                  <span class='line-4'></span>
            </button>
  </div>
     </form>
     <div class="login_links">
      <div>
         @if (Route::has('password.request'))
                                    <a class="btn from-top" href="{{ route('password.request') }}">
                نسيت كلمة المرور
                                    </a>
                                @endif
      </div>
                <a href="{{ route('register') }}"class="btn from-top">إنشاء حساب</a>
    </div>
    
    </div>
 </body>