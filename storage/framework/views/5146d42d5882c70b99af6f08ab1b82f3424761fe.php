<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link data-optimized="1" rel="stylesheet"
        href="https://multiwebpress.com/wp-content/litespeed/css/6a6a912d0c7b55b537768da778032849.css?ver=32849" />
    <title> </title>

    <link rel="stylesheet" href="<?php echo e(asset('assests/css/home.css')); ?>">
</head>

<body>
    <div class="hero_section">
        <nav>
            <div class="logo">
                <img data-lazyloaded="1" src="<?php echo e(asset('assests/svg/logo.svg')); ?>" data-src="images/multiwebpress.png"
                    alt="Logo Image"><noscript><img src="images/multiwebpress.png" alt="Logo Image"></noscript>
            </div>
            <div class="hamburger">
                <div class="bars1"></div>
                <div class="bars2"></div>
                <div class="bars3"></div>
            </div>
            <ul class="nav-links">
                <li><a href="#">بحث عن منجز</a></li>
                <li><a href="#">تصفح المشاريع</a></li>
                <li><a href="#">اضف مشروع</a></li>
                <li><a href="#">تسجيل دخول</a></li>
                <li><button class="login-button" href="#"> إنشاء حساب</button></li>
            </ul>
        </nav>

        <main>
            <?php echo $__env->yieldContent('content'); ?>
            
        </main>
        <div class="pg-footer">
            <footer class="footer">

                <div class="footer_content">
                    <div>
                        <h4>إنجزلي</h4>
                        <ul>
                            <li><a href="">عن إنجزلي
                                </a></li>
                            <li><a href=""> الأسئلة الشائعة

                                </a></li>
                            <li><a href="">ضمان حقوقك

                                </a></li>
                            <li><a href="">شروط الاستخدام

                                </a></li>
                            <li><a href=""> بيان الخصوصية


                                </a></li>
                        </ul>
                    </div>
                    <div>
                        <h4>مشاريع</h4>
                        <ul>
                            <li><a href="">
                                    مشاريع أعمال

                                </a></li>
                            <li><a href="">
                                    مشاريع تسويق

                                </a></li>
                            <li><a href="">
                                    مشاريع تصميم

                                </a></li>
                            <li><a href="">
                                    مشاريع هندسة وعمارة

                                </a></li>
                            <li><a href="">
                                    مشاريع برمجة

                                </a></li>
                            <li><a href="">
                                    مشاريع كتابة وترجمة

                                </a></li>
                            <li><a href="">
                                    مشاريع دعم ومساعدة

                                </a></li>
                            <li><a href="">
                                    مشاريع تدريب

                                </a></li>
                            <li><a href=""> التصنيفات


                                </a></li>
                        </ul>
                    </div>
                    <div>
                        <h4>روابط</h4>
                        <ul>

                            <li><a href="">
                                    معرض الأعمال

                                </a></li>
                            <li><a href="">
                                    مدونة مستقل

                                </a></li>
                            <li><a href="">
                                    مركز المساعدة



                                </a></li>
                        </ul>
                    </div>
                    <div>
                        <div>
                            <h4>تابعنا على:</h4>
                            <ul>

                                <li><a href="">
                                        معرض الأعمال

                                    </a></li>
                                <li><a href="">
                                        مدونة مستقل

                                    </a></li>
                                <li><a href="">
                                        مركز المساعدة



                                    </a></li>
                            </ul>
                        </div>
                        <div>
                            <h4>وسائل الدفع المتاحة</h4>
                            <ul>

                                <li><a href="">
                                        معرض الأعمال

                                    </a></li>
                                <li><a href="">
                                        مدونة مستقل

                                    </a></li>
                                <li><a href="">
                                        مركز المساعدة



                                    </a></li>
                            </ul>
                        </div>
                    </div>

                </div>
                <div class="footer_copy_right">
                    <p>&copy;حقوق الطبع محفوظة
                        <Span>إنجزلي</Span>
                    </p>
                </div>
            </footer>
        </div>



        <script data-optimized="1"
                src="https://multiwebpress.com/wp-content/litespeed/js/5780facee2c85b4f45eda135e587773d.js?ver=7773d"></script>
        <script>
            $(".login-button").click(function() {
                $(this).toggleClass("fa-times");
                $(".nav-links").toggleClass("active");
            });
        </script>


        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>
<?php /**PATH C:\Users\DELL\Desktop\EnjezLe\resources\views/website/layout/headerFooter.blade.php ENDPATH**/ ?>