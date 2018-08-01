<?php
    include 'controllers/header.php';
?>
    <div class="master-background text-center">
        <!-- <img src="images/015.png" alt=""> -->
        <h3>تغيير كلمة المرور</h3>
    </div>
    <div class="form-part">
        <div class="container">
            <div class="form-register">
                <form action="" method="">
                    <div class="form-group">
                        <input type="password" placeholder="كلمة المرور القديمه">
                        <i class="fa fa-lock fa-lg"></i>
                    </div>
                    <div class="form-group">
                        <input type="password" placeholder="كلمة المرور الجديده">
                        <i class="fa fa-lock fa-lg"></i>
                    </div>
                    <div class="form-group">
                        <input type="password" placeholder="تأكيد كلمة المرور">
                        <i class="fa fa-lock fa-lg"></i>
                    </div>
                    <div class="form-group text-center save-button">
                        <button class="general-btn">
                            حفظ
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

<?php
include 'controllers/footer.php';
?>