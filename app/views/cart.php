
<?php
include "include/head.php";
include "include/nav.php";

?>
    <section id="cards ">
        <?php //foreach($_SESSION['mycart'] as $key => $value){
            echo count($_SESSION['mycart']);
        //} ?>
        <div class="cards container-fluid mt-4">
            <div class="card-header bg-transparent">
                <i class="fa fa-cart-arrow-down"></i>
                <h1>السلة</h1>
                <p> (3 منتجات)</p>
            </div>
            <div class="cards-items">
                
                <div class="col-md-right">
                    <div class="cards-body">
                        <?php 
                        $total = 0;
                        foreach($_SESSION['mycart'] as $key => $value){
                            foreach($params['books'] as $book){ 
                                if($book['bookid'] == $key){
                                    $total += $value['quantity'] * $book['price'] ?>
                                
                                    <div class="item">
                                        <div class="item-header">
                                            <div class="col-right">
                                                <div class="item-img ms-3">
                                                    <img src="images/<?= $book['image'] ?>" alt="">
                                                </div>
                                                <div class="item-info">
                                                    <h1 class="text-right">البداية والنهاية الجزء الاول (كتاب الكتروني) </h1>
                                                    <p class="text-right">منتج قابل للخصم لحاملي بطاقة مكتبة جرير</p>
                                                    <div class="note">
                                                        <p class="text-right">ملاحظة: <span>هذا المنتج رقمي وسيتم توصيله من خلال البريد الالكتروني</span></p>
                                                        <a href="" class="text-right">كيفية الحصول على المنتج؟</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-left">
                                                <div class="price">
                                                    <h1>3.99 <span>ر.س</span></h1>
                                                </div>
                                                <div class="number">
                                                    <div class="left-num"><?= $value['quantity']?></div>
                                                    <div class="max-min">
                                                        <i class="fa fa-plus"></i>
                                                        <i class="fa fa-plus"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-footer">
                                            <i class="fa fa-plus"></i>
                                            <p>حذف</p>
                                        </div>
                                    </div>
                        <?php }}}?>
                        <div class="item">
                            <div class="item-header">
                                <div class="col-right">
                                    <div class="item-img ms-3">
                                        <img src="assets/images/c1.jpg" alt="">
                                    </div>
                                    <div class="item-info">
                                        <h1 class="text-right">البداية والنهاية الجزء الاول (كتاب الكتروني) </h1>
                                        <p class="text-right">منتج قابل للخصم لحاملي بطاقة مكتبة جرير</p>
                                        <div class="note">
                                            <p class="text-right">ملاحظة: <span>هذا المنتج رقمي وسيتم توصيله من خلال البريد الالكتروني</span></p>
                                            <a href="" class="text-right">كيفية الحصول على المنتج؟</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-left">
                                    <div class="price">
                                        <h1>3.99 <span>ر.س</span></h1>
                                    </div>
                                    <div class="number">
                                        <div class="left-num">1</div>
                                        <div class="max-min">
                                            <i class="fa fa-plus"></i>
                                            <i class="fa fa-plus"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item-footer">
                                <i class="fa fa-plus"></i>
                                <p>حذف</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="item-header">
                                <div class="col-right">
                                    <div class="item-img ms-3">
                                        <img src="assets/images/c1.jpg" alt="">
                                    </div>
                                    <div class="item-info">
                                        <h1 class="text-right">البداية والنهاية الجزء الاول (كتاب الكتروني) </h1>
                                        <p class="text-right">منتج قابل للخصم لحاملي بطاقة مكتبة جرير</p>
                                        <div class="note">
                                            <p class="text-right">ملاحظة: <span>هذا المنتج رقمي وسيتم توصيله من خلال البريد الالكتروني</span></p>
                                            <a href="" class="text-right">كيفية الحصول على المنتج؟</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-left">
                                    <div class="price">
                                        <h1>3.99 <span>ر.س</span></h1>
                                    </div>
                                    <div class="number">
                                        <div class="left-num">1</div>
                                        <div class="max-min">
                                            <i class="fa fa-plus"></i>
                                            <i class="fa fa-plus"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item-footer">
                                <i class="fa fa-plus"></i>
                                <p class="text-right">حذف</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-left">
                    <div class="left-top">
                        <div class="top-right">
                            <h2 class="text-right">المجموع</h2>
                            <h2 class="text-right">تكاليف الشحن</h2>
                            <h1 class="text-right fs-4">المجموع الكلي<p> شامل الضريبة</p></h1>
                        </div>
                        <div class="top-left">
                            <h3><?= $total ?><span>ر.س</span></h3>
                            <h2>مجاني</h2>
                            <h1 class="fs-4 "><?= $total ?><span>ر.س</span></h1>
                        </div>
                    </div>
                    <div class="left-buttom">
                        <p class="text-right">بالضغط على "اهاء التسوق" فانت توافق<span> على الشروط والاحكام </span>و <span>سياسة الخصوصية</span></p>
                        <a href="stepper" class="text-right">تحديث سلة التسوق</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>