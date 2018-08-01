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
                    <th class="mosque" scope="col">المسجد</th>
                    <th class="text-center" scope="col">عمرو بن العاص</th>
                    <th class="text-center" scope="col">الامام على</th>
                    <th class="text-center" scope="col">البر والتقوى</th>
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
                    <th scope="row">اسم صاحب الطلب</th>
                    <td>عمار أحمد</td>
                    <td>عمار أحمد</td>
                    <td>عمار أحمد</td>
                  </tr>
                  <tr>
                    <th scope="row">هاتف</th>
                    <td>+9600125478612</td>
                    <td>+9600125478612</td>
                    <td>+9600125478612</td>
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
                    <li><a href="#">2</a></li>
                    <li><a href="#">1</a></li>
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