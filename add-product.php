
<?php
    include 'controllers/header.php';
?>

<div class="master-background text-center">
    <h3>إضافة منتج</h3>
</div>
<div class="form-part">
    <div class="container">
        <div class="form-register">
            <form action="" method="">
                <div class="form-group">
                    <input type="text" placeholder="اسم المنتج">
                    <i class="fa fa-sticky-note fa-lg"></i>
                </div>
                <div class="form-group">
                    <input type="number" placeholder="السعر">
                    <i class="fa fa-database fa-lg"></i>
                </div>
                <div class="form-group file-manager">
                    <input type="file" name="file" id="file" class="" multiple/>
                    <i class="fa fa-image fa-lg"></i>
                    <label for="file" class="custom-file-upload">رفع صور</label>
                </div>
                <div class="form-group">
                    <input type="number" placeholder="الحد الأدنى للكميه">
                    <i class="fa fa-random fa-lg"></i>
                </div>
                <div class="form-group text-center add-now">
                    <button class="general-btn">
                        أضف الآن
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
    include 'controllers/footer.php';
?>