<?php
include 'controllers/header.php';
?>

    <div class="master-background text-center">
        <!-- <img src="images/015.png" alt=""> -->
        <h3>التسجيل</h3>
    </div>
    <div class="form-part">
        <div class="container">
            <div class="form-register">
                <form action="" method="">
                    <div class="form-group">
                        <input type="text" placeholder="الاسم">
                        <i class="fa fa-user fa-lg"></i>
                    </div>
                    <div class="form-group">
                        <input type="text" placeholder="البريد الالكترونى (اختياري)">
                        <i class="fa fa-envelope fa-lg"></i>
                    </div>
                    <div class="form-group">
                        <input type="text" placeholder="الجوال">
                        <i class="fa fa-mobile fa-2x"></i>
                    </div>
                    <div class="form-group">
                        <input type="password" placeholder="كلمة المرور">
                        <i class="fa fa-lock fa-lg"></i>
                    </div>
                    <div class="form-check text-center">
                        <input type="checkbox" class="form-check-input" id="agree">
                        <label class="form-check-label" for="agree">أوافق على الشروط والأحكام</label>
                    </div>
                    <div class="form-group text-center">
                        <button class="general-btn">
                            تسجيل الآن
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php
    include 'controllers/footer.php';
?>