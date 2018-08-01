<?php
include 'controllers/header.php';
?>
    <div class="master-background text-center">
        <h3>تسجيل الدخول</h3>
    </div>
    <div class="form-part">
        <div class="container">
            <div class="form-register">
                <form action="" method="">
                    <div class="form-group">
                        <input type="text" placeholder="البريد الالكترونى">
                        <i class="fa fa-envelope fa-lg"></i>
                    </div>
                    <div class="form-group">
                        <input type="password" placeholder="كلمة المرور">
                        <i class="fa fa-lock fa-lg"></i>
                    </div>
                    <div class="form-group text-center forgot-password">
                        <a href="forgot-pass.php">نسيت كلمة المرور ؟</a>
                    </div>
                    <div class="btn-no-prof">
                        <div class="form-group text-center">
                            <button class="general-btn">
                                دخول الآن
                            </button>
                        </div>
                        <div class="form-group text-center no-profile">
                            <p>ليس لدى حساب <a href="register.php">تسجيل الآن</a></p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php
    include 'controllers/footer.php';
?>