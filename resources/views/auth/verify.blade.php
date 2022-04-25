<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
<link rel="stylesheet" href='{{ asset('assests/css/style.css') }}'>
<div class="loginContainer verfy">
    <div class="login-box">
        <div class="login_icon_box">
            <img src="{{ asset('assests/svg/logo.svg') }}" alt="">
        </div>
        <h2></h2>
        <p>لقد قمنا بارسال رسالة عبر ريدك الالكتروني الرجاء التحقق منها
        </p>
        <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
            @csrf
            <button type="submit" class="btn btn-link p-0 m-0 align-baseline">إضغط هنا لاعادة إرسال الطلب مرة
                اخرى</button>
        </form>
    </div>
</div>
