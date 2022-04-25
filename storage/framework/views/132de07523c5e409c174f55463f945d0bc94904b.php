<link rel="stylesheet" href='<?php echo e(asset('assests/css/style.css')); ?>'>


<body>

    <div class="loginContainer">
        <div class="login-box">
            <div class="login_icon_box">
                <img src="<?php echo e(asset('assests/svg/logo.svg')); ?>" alt="">
            </div>
            <form class="p-3 mt-3" method="POST" action="<?php echo e(route('password.email')); ?>">
                <?php echo csrf_field(); ?>
                <div class="user-box">
                    <input type="email" name="email" id="email" placeholder=""
                        class='<?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>' value="<?php echo e(old('email')); ?>" required
                        autocomplete="email" autofocus>
                    <label> ادخل عنوان بريدك الالكتروني </label>
                    <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <div class=" dan_mesg_po" role="alert">
                            <?php echo e($message); ?>

                        </div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
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
<?php /**PATH C:\Users\DELL\Desktop\مشروع رواد\EnjezLe\resources\views/auth/passwords/email.blade.php ENDPATH**/ ?>