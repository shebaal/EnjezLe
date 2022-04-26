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
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="user-box">
                    <div class="inputContainer">
                    <input id="email"  class="form-control @error('email') is-invalid @enderror" name="email"
                        value="{{ old('email') }}" required autocomplete="email" autofocus >
                        {{-- placeholder="  عنوان البريد الالكتروني" --}}
                    <label>عنوان البريد الالكتروني</label>
                </div>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <div class='dan_mesg_po ' > * الأيميل خاطئ
                                
                          </div>

                            {{-- <div class='dan_mesg_po ' >*{{ $message }}</div> --}}
                        </span>
                    @enderror
                   
                </div>
                <div class="user-box">
                    <div class="inputContainer">

                        <input type="password" type="password" class="form-control @error('password') is-invalid @enderror"
                            name="password" required autocomplete="current-password">
                            {{-- placeholder="كلمة السر " --}}
                        <label>كلمة السر </label>
                     </div>
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <div class='dan_mesg_po'>* كلمة المرور خاطئة</div>
                    </span> 
                        {{-- <span class="invalid-feedback" role="alert">
                            <div class='dan_mesg_po'>{{ $message }}</div>
                        </span> --}}
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
                <a href="{{ route('register') }}" class="btn from-top">إنشاء حساب</a>
            </div>

        </div>
</body>
