
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
<link rel="stylesheet" href='{{ asset("assests/css/main.css") }}'>



 <div class="loginContainer">
        <div class="login-box">
            <div class="login_icon_box">
                <img src="{{ asset("assests/svg/logo.svg") }}" alt=""> </div>
            <h2> إنشاء حساب
            </h2>
            <form method="POST" action="{{ route('register') }}">
            @csrf
                <div class="user-box">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                    <label> الاسم</label>
                           @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                </div>
                <div class="user-box">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                    <label>عنوان البريد الالكتروتي</label>
                     @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                </div>
                <div class="user-box">
                    <input  id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                    <label>كلمة السر</label>
                     @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                </div>
                <div class="user-box">
                    <input type="password" id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    <label> تاكيد كلمة السر</label>
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
                <a href="{{ route('login') }}" class="btn from-top">تسجيل دخول</a>

            </div>
        </div>
    </div>