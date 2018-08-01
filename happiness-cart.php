    
<?php
include 'controllers/header.php';
?>
    
    <div class="master-background text-center">
        <h3>سلة السعاده</h3>
    </div>
    <div class="table-part-2">
        <div class="container">
            <table class="table table-bordered">
                <thead>
                  <tr>
                    <th class="mosque" scope="col">الشركه</th>
                    <th class="text-center" scope="col">الرحاب</th>
                    <th class="text-center" scope="col">سلسبيل</th>
                    <th class="text-center" scope="col">التقوى</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">المنتج</th>
                    <td>مياه زين</td>
                    <td>زين</td>
                    <td>مياه زين</td>
                  </tr>
                  <tr>
                    <th scope="row">مدة الإشتراك</th>
                    <td>يومى</td>
                    <td>شهري</td>
                    <td>كل 3 شهور</td>
                  </tr>
                  <tr>
                    <th scope="row">الكميه</th>
                    <td>10</td>
                    <td>12</td>
                    <td>1</td>
                  </tr>
                  <tr>
                    <th scope="row">التاريخ</th>
                    <td>10/12/2018</td>
                    <td>15/12/2018</td>
                    <td>11/12/2018</td>
                    </tr>
                  <tr>
                    <th scope="row">السعر</th>
                    <td>15 ر.س</td>
                    <td>15 ر.س</td>
                    <td>15 ر.س</td>
                  </tr>
                  <tr>
                    <th scope="row">الطلب</th>
                    <td>
                        <div class="detailed-order">
                            <a href="#">إنهاء الطلب</a>
                        </div>
                    </td>
                    <td>
                        <div class="detailed-order">
                            <a href="#">إنهاء الطلب</a>
                        </div>
                    </td>
                    <td>
                        <div class="detailed-order">
                            <a href="#">إنهاء الطلب</a>
                        </div>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">حذف</th>
                    <td><i class="fa fa-times"></i></td>
                    <td><i class="fa fa-times"></i></td>
                    <td><i class="fa fa-times"></i></td>
                    </tr>
                </tbody>
            </table>
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li><span>طلبات أخرى</span></li> 
                    <li><a href="#"><i class="fa fa-caret-right fa-lg"></i></a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    
                    <li><a href="#"><i class="fa fa-caret-left fa-lg"></i></a></li>
                </ul>
            </nav>
        </div>
    </div>
<?php
    include 'controllers/footer.php';
?>