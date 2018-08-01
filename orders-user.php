<?php
include 'controllers/header.php';
?>
    
    <div class="master-background text-center">
        <h3>الطلبات</h3>
    </div>
    <div class="table-part-2">
        <div class="container">
            <table class="table table-bordered">
                <thead>
                  <tr>
                    <th class="mosque" scope="col">الشركه</th>
                    <th class="text-center" scope="col">الرحاب</th>
                    <th class="text-center" scope="col">مرجان</th>
                    <th class="text-center" scope="col">سلسبيل</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">المسجد</th>
                    <td>الامام على</td>
                    <td>زين</td>
                    <td>فتحي زين</td>
                  </tr>
                  <tr>
                    <th scope="row">المنتج</th>
                    <td>مياه زين</td>
                    <td>زين</td>
                    <td>مياه زين</td>
                  </tr>
                  <tr>
                    <th scope="row">الكميه المطلوبه</th>
                    <td>10</td>
                    <td>12</td>
                    <td>1</td>
                  </tr>
                  <tr>
                    <th scope="row">نوع الاشتراك</th>
                    <td>يومى</td>
                    <td>شهري</td>
                    <td>كل 3 شهور</td>
                  </tr>
                  <tr>
                    <th scope="row">الحاله</th>
                    <td>جاري</td>
                    <td>بالانتظار</td>
                    <td>جاري</td>
                  </tr>
                  <tr>
                    <th scope="row">تفاصيل أكثر</th>
                    <td>
                        <div class="detailed-order">
                            <a href="#">تفاصيل الطلب</a>
                        </div>
                    </td>
                    <td>
                        <div class="detailed-order">
                            <a href="#">تفاصيل الطلب</a>
                        </div>
                    </td>
                    <td>
                        <div class="detailed-order">
                            <a href="#">تفاصيل الطلب</a>
                        </div>
                    </td>
                  </tr>
                </tbody>
            </table>
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li><span>طلبات أخرى</span></li> 
                    <li><a href="#"><i class="fa fa-caret-right fa-lg"></i></a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#"><i class="fa fa-caret-left fa-lg"></i></a></li>
                </ul>
            </nav>
        </div>
    </div>
<?php
    include 'controllers/footer.php';
?>