    <?php
        include 'controllers/header.php';
    ?>
    <!-- Start Carousel -->
    <div class="slide-show">
        <div class="container">
            <div class="owl-carousel owl-theme">
                <div class="item"><img src="images/006.png" class="active"></div>
                <div class="item"><img src="images/006.png"></div>
                <div class="item"><img src="images/006.png"></div>
            </div>
        </div>
    </div>
    <!-- End Carousel -->

    <!-- Start Search Tab -->
    <div class="search-tool">
        <div class="container">
            <div class="row">
                <form action="">
                    <div class="form-group">
                        <input type="text" placeholder="ابحث عن أقرب المساجد لك" class="form-control" name="word" value="">
                        <a href="#">
                            <button class="first-one">
                                <i class="fa fa-search fa-lg"></i>
                            </button>
                        </a>
                        <a href="#">
                            <button class="second-one">
                                ابحث الآن
                            </button>
                        </a>
                    </div>
                </form>
            </div>
            <div class="google-maps">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7411090.151173206!2d45.1964626975046!3d24.90833671621014!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15e7b33fe7952a41%3A0x5960504bc21ab69b!2sSaudi+Arabia!5e0!3m2!1sen!2seg!4v1520687735875" frameborder="0" style="border:0; height:20em;" allowfullscreen></iframe>
            </div>
        </div>
    </div>
    <!-- End Search Tab -->

    <!-- Start last Companies -->
    <div class="last-companies text-center">
        <div class="container">
            <h3>آخر الشركات</h3>
            <div class="owl-carousel owl-theme">
                <div class="item"><img src="images/010.png" class="active"></div>
                <div class="item"><img src="images/011.png"></div>
                <div class="item"><img src="images/012.png"></div>
                <div class="item"><img src="images/013.png"></div>
                <div class="item"><img src="images/014.png"></div>
                <div class="item"><img src="images/013.png"></div>
                <div class="item"><img src="images/014.png"></div>
            </div>
        </div>
    </div>
    <!-- End last Companies -->

    <?php
        include 'controllers/footer.php';
    ?>