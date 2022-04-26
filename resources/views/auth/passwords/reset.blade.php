<link rel="stylesheet" href='{{ asset('assests/css/style.css') }}'>


<body>

    <div class="loginContainer">
        <div class=" img-squares"><img src="{{ asset('assests/svg/enLogo.svg') }}" alt=""></div>
         <div class="login-box">
             <div class="logo-container">
             <div class="login_icon_box">
                 <img src="{{ asset('assests/svg/logo.svg') }}" alt="">
             </div>
         </div>
            <h2>تسجيل الدخول</h2>
            <form method="POST" action="{{ route('password.update') }}">
                @csrf

                <input type="hidden" name="token" value="{{ $token }}">
                <div class="user-box">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                        value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
                    <label>عنوان البريد الالكتروني</label>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <div class='dan_mesg_po'>{{ $message }}</div>
                        </span>
                    @enderror
                </div>
                <div class="user-box">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                        name="password" required autocomplete="new-password">
                    <label>كلمة السر</label>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <div class='dan_mesg_po'>{{ $message }}</div>
                        </span>
                    @enderror
                </div>
                <div class="user-box">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                        required autocomplete="new-password">
                    <label>تاكيد كلمة السر</label>

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
          

        </div>
</body>
