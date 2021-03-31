<?php
include_once("header.php")
?>

<!-- sign-in -->
<section id="sign-in" class="bglight position-relative padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 pr-lg-0 col-md-12 d-none d-lg-flex">
                <div class=" image login-image h-100">
                    <img src="img/login.jpg" alt="" class="w-100 h-100">
                </div>
            </div>
            <div class="col-lg-6 pl-lg-0 col-md-12 whitebox">
                <div class="widget logincontainer">
                    <h3 class="darkcolor bottom30 text-center text-lg-left">تسجيل الدخول </h3>
                    <form class="getin_form border-form" id="login">
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group bottom35">
                                    <label for="loginEmail" class="d-none"></label>
                                    <input class="form-control" type="email" placeholder="البريد الإلكتروني :" required id="loginEmail">
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group bottom35">
                                    <label for="loginPass" class="d-none"></label>
                                    <input class="form-control" type="password" placeholder="الرقم السري :" required id="loginPass">
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group bottom30 ml-1">
                                    <div class="form-check text-left">
                                        <input class="form-check-input" checked type="checkbox" value="" id="rememberMe">
                                        <label class="form-check-label" for="rememberMe">
                                            البقاء متصلًا
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <button type="submit" class="button gradient-btn">دخول</button>
                                <a href="forget-password.html" class="ml-2 defaultcolor font-18">نسيت كلمة السر ؟</a>
                                <p class="top30 mb-0 font-18"> ليس لديك حساب ؟ &nbsp;<a href="register.html" class="defaultcolor">يمكنك إنشاء حساب</a> </p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- sign-in ends -->


<?php
include_once("footer.php")
?>