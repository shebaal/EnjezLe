<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
<link rel="stylesheet" href='{{ asset('assests/css/style.css') }}'>



<div class="loginContainer sign-up-container">
    <div class=" img-squares"><img src="{{ asset('assests/svg/enLogo.svg') }}" alt=""></div>

    <div class="login-box sign-up">
        <div class="logo-container">
            
            <div class="login_icon_box">
                <img src="{{ asset('assests/svg/logo.svg') }}" alt="">
            </div>
        </div>
        <h2> إنشاء حساب
        </h2>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="user-box">
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                    value="{{ old('name') }}" required autocomplete="name" autofocus>
                <label> الاسم</label>
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <div class='dan_mesg_po'>{{ $message }}</div>
                    </span>
                @enderror
                <span   id='name-error'class="invalid-feedback dan_mesg_po" role="alert" >
                   
                </span>
               
            </div>
            <div class="user-box">
                <input id="email" class="form-control @error('email') is-invalid @enderror" name="email"
                    value="{{ old('email') }}" required autocomplete="email">
                <label>عنوان البريد الالكتروني</label>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <div class='dan_mesg_po'>{{ $message }}</div>
                    </span>
                @enderror
                <span  style="display:none"  id='email-error'class="invalid-feedback dan_mesg_po" role="alert" >
                    
                </span>
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
                <span  style="display:none"  id='password-error'class="invalid-feedback dan_mesg_po" role="alert" >
                    
                </span>
            </div>
            <div class="user-box">
                <input type="password" id="password-confirm" type="password" class="form-control"
                    name="password_confirmation" required autocomplete="new-password">
                <label> تاكيد كلمة السر</label>
                <span  style="display:none"  id='confirm-error' class="invalid-feedback dan_mesg_po" role="alert" >
                    
                </span>
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
