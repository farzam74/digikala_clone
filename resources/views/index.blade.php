@extends('layouts.app')

@section('content')


    <!-- banner -->
    <div class="row">
        <div class="col-12  order-1 order-lg-2">
            <section id="main-slider" class="carousel slide carousel-fade card" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#main-slider" data-slide-to="0" class="active"></li>
                    <li data-target="#main-slider" data-slide-to="1"></li>
                    <li data-target="#main-slider" data-slide-to="2"></li>
                    <li data-target="#main-slider" data-slide-to="3"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <a class="d-block" href="#">
                            <img src="assets/img/slider/22f48d8e-6a8f-431c-985d-76ab0e1e59405_21_1_1.jpg"
                                 class="d-block w-100" alt="">
                        </a>
                    </div>
                    <div class="carousel-item">
                        <a class="d-block" href="#">
                            <img src="assets/img/slider/a264d696-9c12-4dd9-bdc1-12c13a3632b329_21_1_1.jpg"
                                 class="d-block w-100" alt="">
                        </a>
                    </div>
                    <div class="carousel-item">
                        <a class="d-block" href="#">
                            <img src="assets/img/slider/c0a50594-df40-412b-84f8-c7d6872fb83620_21_1_1.jpg"
                                 class="d-block w-100" alt="">
                        </a>
                    </div>
                    <div class="carousel-item">
                        <a class="d-block" href="#">
                            <img src="assets/img/slider/d1844e92-e5a9-4aef-8ea7-49be936422ca6_21_1_1.jpg"
                                 class="d-block w-100" alt="">
                        </a>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#main-slider" role="button" data-slide="prev">
                    <i class="now-ui-icons arrows-1_minimal-right"></i>
                </a>
                <a class="carousel-control-next" href="#main-slider" data-slide="next">
                    <i class="now-ui-icons arrows-1_minimal-left"></i>
                </a>
            </section>
            <section id="amazing-slider" class="carousel slide carousel-fade card" data-ride="carousel">
                <div class="row m-0">
                    <ol class="carousel-indicators pr-0 d-flex flex-column col-lg-3">
                        <li class="active" data-target="#amazing-slider" data-slide-to="0">
                            <span>لپ تاپ INSPIRON</span>
                        </li>
                        <li data-target="#amazing-slider" data-slide-to="1" class="">
                            <span>دل مدل 5471</span>
                        </li>
                        <li data-target="#amazing-slider" data-slide-to="2" class="">
                            <span>لپ تاپ ۱۵ اینچی</span>
                        </li>
                        <li data-target="#amazing-slider" data-slide-to="3" class="">
                            <span>۱۵ اینچی دل</span>
                        </li>
                        <li data-target="#amazing-slider" data-slide-to="4" class="">
                            <span>لنوو مدل 310</span>
                        </li>
                        <li data-target="#amazing-slider" data-slide-to="5" class="">
                            <span>لپ تاپ لنوو</span>
                        </li>
                        <li data-target="#amazing-slider" data-slide-to="6">
                            <span>لپ تاپ ۱۵ اینچی</span>
                        </li>
                        <li data-target="#amazing-slider" data-slide-to="7">
                            <span>لپ تاپ ایسوس</span>
                        </li>
                        <li data-target="#amazing-slider" data-slide-to="8">
                            <span>ایسوس مدل A540UP - F</span>
                        </li>
                        <li class="view-all">
                            <a href="#" class="btn btn-primary btn-block hvr-sweep-to-left">
                                <i class="fa fa-arrow-left"></i>مشاهده همه شگفت انگیزها
                            </a>
                        </li>
                    </ol>
                    <div class="carousel-inner p-0 col-12 col-lg-9">
                        <img class="amazing-title" src="assets/img/amazing-slider/amazing-title-01.png"
                             alt="">
                        <div class="carousel-item active">
                            <div class="row m-0">
                                <div class="right-col col-5 d-flex align-items-center">
                                    <a class="w-100 text-center" href="#">
                                        <img src="assets/img/amazing-slider/60eb20-200x200.jpg"
                                             class="img-fluid" alt="">
                                    </a>
                                </div>
                                <div class="left-col col-7">
                                    <div class="price">
                                        <del><span>4,299,000<span>تومان</span></span></del>
                                        <ins><span>4,180,000<span>تومان</span></span></ins>
                                        <span class="discount-percent">3 % تخفیف</span>
                                    </div>
                                    <h2 class="product-title">
                                        <a href="#"> لپ تاپ ۱۱٫۶ اینچی دل مدل INSPIRON 3168 -AC B </a>
                                    </h2>
                                    <ul class="list-group">
                                        <li class="list-group-item">رنگ: مشکی</li>
                                        <li class="list-group-item">160 گیگابایت</li>
                                    </ul>
                                    <hr>
                                    <div class="countdown-timer" countdown data-date="05 02 2019 20:20:22">
                                        <span data-days>0</span>:
                                        <span data-hours>0</span>:
                                        <span data-minutes>0</span>:
                                        <span data-seconds>0</span>
                                    </div>
                                    <div class="timer-title">زمان باقی مانده تا پایان سفارش</div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row m-0">
                                <div class="right-col col-5 d-flex align-items-center">
                                    <a class="w-100 text-center" href="#">
                                        <img src="assets/img/amazing-slider/4ff777-200x200.jpg"
                                             class="img-fluid" alt="">
                                    </a>
                                </div>
                                <div class="left-col col-7">
                                    <div class="price">
                                        <del><span>6,890,000<span>تومان</span></span></del>
                                        <ins><span>6,580,000<span>تومان</span></span></ins>
                                        <span class="discount-percent">6 % تخفیف</span>
                                    </div>
                                    <h2 class="product-title">
                                        <a href="#"> لپ تاپ ۱۴ اینچی دل مدل vostro 5471 </a>
                                    </h2>
                                    <ul class="list-group">
                                        <li class="list-group-item">رنگ: نوک مدادی</li>
                                        <li class="list-group-item">120 گیگابایت</li>
                                    </ul>
                                    <hr>
                                    <div class="countdown-timer" countdown data-date="05 02 2019 20:20:22">
                                        <span data-days>0</span>:
                                        <span data-hours>0</span>:
                                        <span data-minutes>0</span>:
                                        <span data-seconds>0</span>
                                    </div>
                                    <div class="timer-title">زمان باقی مانده تا پایان سفارش</div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row m-0">
                                <div class="right-col col-5 d-flex align-items-center">
                                    <a class="w-100 text-center" href="#">
                                        <img src="assets/img/amazing-slider/35a2b8-200x200.jpg"
                                             class="img-fluid" alt="">
                                    </a>
                                </div>
                                <div class="left-col col-7">
                                    <div class="price">
                                        <del><span>4,799,000<span>تومان</span></span></del>
                                        <ins><span>4,699,000<span>تومان</span></span></ins>
                                        <span class="discount-percent">2 % تخفیف</span>
                                    </div>
                                    <h2 class="product-title">
                                        <a href="#"> لپ تاپ ۱۵ اینچی دل مدل Latitude 5580 </a>
                                    </h2>
                                    <ul class="list-group">
                                        <li class="list-group-item">10 گیگابایت رم</li>
                                        <li class="list-group-item">صفحه نمایش لمسی:خیر</li>
                                    </ul>
                                    <hr>
                                    <div class="countdown-timer" countdown data-date="05 02 2019 20:20:22">
                                        <span data-days>0</span>:
                                        <span data-hours>0</span>:
                                        <span data-minutes>0</span>:
                                        <span data-seconds>0</span>
                                    </div>
                                    <div class="timer-title">زمان باقی مانده تا پایان سفارش</div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item  finished">
                            <div class="row m-0">
                                <div class="right-col col-5 d-flex align-items-center">
                                    <a class="w-100 text-center" href="#">
                                        <img src="assets/img/amazing-slider/c8297f-200x200.jpg"
                                             class="img-fluid" alt="">
                                    </a>
                                </div>
                                <div class="left-col col-7">
                                    <div class="price">
                                        <del><span>8,999,000<span>تومان</span></span></del>
                                        <ins><span>8,899,000<span>تومان</span></span></ins>
                                        <span class="discount-percent">1 % تخفیف</span>
                                    </div>
                                    <h2 class="product-title">
                                        <a href="#"> لپ تاپ ۱۵ اینچی دل مدل INSPIRON 7577 – D </a>
                                    </h2>
                                    <ul class="list-group">
                                        <li class="list-group-item">160 گیگابایت</li>
                                        <li class="list-group-item">پردازنده: Intel</li>
                                    </ul>
                                    <hr>
                                    <a href="#" class="finished btn"> تمام شد </a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item  finished">
                            <div class="row m-0">
                                <div class="right-col col-5 d-flex align-items-center">
                                    <a class="w-100 text-center" href="#">
                                        <img src="assets/img/amazing-slider/36855a-200x200.jpg"
                                             class="img-fluid" alt="">
                                    </a>
                                </div>
                                <div class="left-col col-7">
                                    <div class="price">
                                        <del><span>3,600,000<span>تومان</span></span></del>
                                        <ins><span>3,490,000<span>تومان</span></span></ins>
                                        <span class="discount-percent">3 % تخفیف</span>
                                    </div>
                                    <h2 class="product-title">
                                        <a href="#"> لپ تاپ ۱۵ اینچی لنوو مدل Ideapad 310 – O </a>
                                    </h2>
                                    <ul class="list-group">
                                        <li class="list-group-item">رنگ: مشکی</li>
                                        <li class="list-group-item">رم: 12 گیگابایت</li>
                                    </ul>
                                    <hr>
                                    <a href="#" class="finished btn"> تمام شد </a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row m-0">
                                <div class="right-col col-5 d-flex align-items-center">
                                    <a class="w-100 text-center" href="#">
                                        <img src="assets/img/amazing-slider/0e6809-200x200.jpg"
                                             class="img-fluid" alt="">
                                    </a>
                                </div>
                                <div class="left-col col-7">
                                    <div class="price">
                                        <del><span>4,160,000;<span>تومان</span></span></del>
                                        <ins><span>4,090,000<span>تومان</span></span></ins>
                                        <span class="discount-percent">2 % تخفیف</span>
                                    </div>
                                    <h2 class="product-title">
                                        <a href="#"> لپ تاپ ۱۵ اینچی لنوو مدل Ideapad 520 – F </a>
                                    </h2>
                                    <ul class="list-group">
                                        <li class="list-group-item">پردازنده: NVIDIA</li>
                                        <li class="list-group-item">حافظه: 160 گیگابایت</li>
                                    </ul>
                                    <hr>
                                    <div class="countdown-timer" countdown data-date="05 02 2019 20:20:22">
                                        <span data-days>0</span>:
                                        <span data-hours>0</span>:
                                        <span data-minutes>0</span>:
                                        <span data-seconds>0</span>
                                    </div>
                                    <div class="timer-title">زمان باقی مانده تا پایان سفارش</div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item  finished">
                            <div class="row m-0">
                                <div class="right-col col-5 d-flex align-items-center">
                                    <a class="w-100 text-center" href="#">
                                        <img src="assets/img/amazing-slider/2d71f4-200x200.jpg"
                                             class="img-fluid" alt="">
                                    </a>
                                </div>
                                <div class="left-col col-7">
                                    <div class="price">
                                        <del><span>2,390,000<span>تومان</span></span></del>
                                        <ins><span>2,320,000<span>تومان</span></span></ins>
                                        <span class="discount-percent">3 % تخفیف</span>
                                    </div>
                                    <h2 class="product-title">
                                        <a href="#"> لپ تاپ ۱۵ اینچی لنوو مدل Ideapad V310 – S </a>
                                    </h2>
                                    <ul class="list-group">
                                        <li class="list-group-item">صفحه نمایش لمسی: خیر</li>
                                        <li class="list-group-item">پردازنده: Intel</li>
                                    </ul>
                                    <hr>
                                    <a href="#" class="finished btn"> تمام شد </a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row m-0">
                                <div class="right-col col-5 d-flex align-items-center">
                                    <a class="w-100 text-center" href="#">
                                        <img src="assets/img/amazing-slider/59fc05-200x200.jpg"
                                             class="img-fluid" alt="">
                                    </a>
                                </div>
                                <div class="left-col col-7">
                                    <div class="price">
                                        <del><span>5,485,000<span>تومان</span></span></del>
                                        <ins><span>5,380,000<span>تومان</span></span></ins>
                                        <span class="discount-percent">2 % تخفیف</span>
                                    </div>
                                    <h2 class="product-title">
                                        <a href="#"> لپ تاپ ۱۵ اینچی ایسوس مدل VivoBook Flip TP510UQ – C
                                        </a>
                                    </h2>
                                    <ul class="list-group">
                                        <li class="list-group-item">حافظه: 160 گیگابایت</li>
                                        <li class="list-group-item">رنگ: نقره ای</li>
                                    </ul>
                                    <hr>
                                    <div class="countdown-timer" countdown data-date="05 02 2019 20:20:22">
                                        <span data-days>0</span>:
                                        <span data-hours>0</span>:
                                        <span data-minutes>0</span>:
                                        <span data-seconds>0</span>
                                    </div>
                                    <div class="timer-title">زمان باقی مانده تا پایان سفارش</div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row m-0">
                                <div class="right-col col-5 d-flex align-items-center">
                                    <a class="w-100 text-center" href="#">
                                        <img src="assets/img/amazing-slider/8eb96c-200x200.jpg"
                                             class="img-fluid" alt="">
                                    </a>
                                </div>
                                <div class="left-col col-7">
                                    <div class="price">
                                        <del><span>2,755,000<span>تومان</span></span></del>
                                        <ins><span>2,565,000<span>تومان</span></span></ins>
                                        <span class="discount-percent">8 % تخفیف</span>
                                    </div>
                                    <h2 class="product-title">
                                        <a href="#"> لپ تاپ ۱۵ اینچی ایسوس مدل A540UP – F </a>
                                    </h2>
                                    <ul class="list-group">
                                        <li class="list-group-item">رنگ: خاکستری</li>
                                        <li class="list-group-item">رم: 16 گیگابایت</li>
                                    </ul>
                                    <hr>
                                    <div class="countdown-timer" countdown data-date="05 02 2019 20:20:22">
                                        <span data-days>0</span>:
                                        <span data-hours>0</span>:
                                        <span data-minutes>0</span>:
                                        <span data-seconds>0</span>
                                    </div>
                                    <div class="timer-title">زمان باقی مانده تا پایان سفارش</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="row" id="amazing-slider-responsive">
                <div class="col-12">
                    <div class="widget widget-product card">
                        <header class="card-header">
                            <img src="assets/img/amazing-slider/amazing-title-01.png" width="150px" alt="">
                            <a href="#" class="view-all">مشاهده همه</a>
                        </header>
                        <div class="product-carousel owl-carousel owl-theme">
                            <div class="item">
                                <a href="#">
                                    <img src="assets/img/product-slider/60eb20-200x200.jpg"
                                         class="img-fluid" alt="">
                                </a>
                                <h2 class="post-title">
                                    <a href="#">لپ تاپ ۱۱٫۶ اینچی دل مدل INSPIRON 3168 -AC B</a>
                                </h2>
                                <div class="price">
                                    <ins><span>4,180,000<span>تومان</span></span></ins>
                                </div>
                                <hr>
                                <div class="countdown-timer" countdown data-date="05 02 2019 20:20:22">
                                    <span data-days>0</span>:
                                    <span data-hours>0</span>:
                                    <span data-minutes>0</span>:
                                    <span data-seconds>0</span>
                                </div>
                            </div>
                            <div class="item">
                                <a href="#">
                                    <img src="assets/img/product-slider/4ff777-200x200.jpg"
                                         class="img-fluid" alt="">
                                </a>
                                <h2 class="post-title">
                                    <a href="#">لپ تاپ ۱۴ اینچی دل مدل vostro 5471</a>
                                </h2>
                                <div class="price">
                                    <ins><span>6,580,000<span>تومان</span></span></ins>
                                </div>
                                <hr>
                                <div class="countdown-timer" countdown data-date="05 02 2019 20:20:22">
                                    <span data-days>0</span>:
                                    <span data-hours>0</span>:
                                    <span data-minutes>0</span>:
                                    <span data-seconds>0</span>
                                </div>
                            </div>
                            <div class="item">
                                <a href="#">
                                    <img src="assets/img/product-slider/35a2b8-200x200.jpg"
                                         class="img-fluid" alt="">
                                </a>
                                <h2 class="post-title">
                                    <a href="#">لپ تاپ ۱۵ اینچی دل مدل Latitude 5580</a>
                                </h2>
                                <div class="price">
                                    <ins><span>4,699,000<span>تومان</span></span></ins>
                                </div>
                                <hr>
                                <div class="countdown-timer" countdown data-date="05 02 2019 20:20:22">
                                    <span data-days>0</span>:
                                    <span data-hours>0</span>:
                                    <span data-minutes>0</span>:
                                    <span data-seconds>0</span>
                                </div>
                            </div>
                            <div class="item">
                                <a href="#">
                                    <img src="assets/img/product-slider/9b3da9-200x200.jpg"
                                         class="img-fluid" alt="">
                                </a>
                                <h2 class="post-title">
                                    <a href="#">لپ تاپ ۱۵ اینچی دل مدل INSPIRON 15-3567 - I</a>
                                </h2>
                                <div class="price">
                                    <ins><span>2,780,000<span>تومان</span></span></ins>
                                </div>
                                <hr>
                                <div class="countdown-timer" countdown data-date="05 02 2019 20:20:22">
                                    <span data-days>0</span>:
                                    <span data-hours>0</span>:
                                    <span data-minutes>0</span>:
                                    <span data-seconds>0</span>
                                </div>
                            </div>
                            <div class="item">
                                <a href="#">
                                    <img src="assets/img/product-slider/c8297f-200x200.jpg"
                                         class="img-fluid" alt="">
                                </a>
                                <h2 class="post-title">
                                    <a href="#">لپ تاپ ۱۵ اینچی دل مدل INSPIRON 7577 - D</a>
                                </h2>
                                <div class="price">
                                    <ins><span>8,899,000<span>تومان</span></span></ins>
                                </div>
                                <hr>
                                <div class="countdown-timer" countdown data-date="05 02 2019 20:20:22">
                                    <span data-days>0</span>:
                                    <span data-hours>0</span>:
                                    <span data-minutes>0</span>:
                                    <span data-seconds>0</span>
                                </div>
                            </div>
                            <div class="item">
                                <a href="#">
                                    <img src="assets/img/product-slider/a579bb-200x200.jpg"
                                         class="img-fluid" alt="">
                                </a>
                                <h2 class="post-title">
                                    <a href="#">لپ تاپ ۱۵ اینچی دل مدل Inspiron 15-5570 - B</a>
                                </h2>
                                <div class="price">
                                    <ins><span>4,279,000<span>تومان</span></span></ins>
                                </div>
                                <hr>
                                <div class="countdown-timer" countdown data-date="05 02 2019 20:20:22">
                                    <span data-days>0</span>:
                                    <span data-hours>0</span>:
                                    <span data-minutes>0</span>:
                                    <span data-seconds>0</span>
                                </div>
                            </div>
                            <div class="item">
                                <a href="#">
                                    <img src="assets/img/product-slider/19a2cc-200x200.jpg"
                                         class="img-fluid" alt="">
                                </a>
                                <h2 class="post-title">
                                    <a href="#">لپ تاپ ۱۵ اینچی دل مدل XPS 15-9560</a>
                                </h2>
                                <div class="price">
                                    <ins><span>18,450,000<span>تومان</span></span></ins>
                                </div>
                                <hr>
                                <div class="countdown-timer" countdown data-date="05 02 2019 20:20:22">
                                    <span data-days>0</span>:
                                    <span data-hours>0</span>:
                                    <span data-minutes>0</span>:
                                    <span data-seconds>0</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="widget widget-product card">
                        <header class="card-header">
                            <h3 class="card-title">
                                <span>کامپیوتر و لوازم جانبی</span>
                            </h3>
                            <a href="#" class="view-all">مشاهده همه</a>
                        </header>
                        <div class="product-carousel owl-carousel owl-theme">
                            <div class="item">
                                <a href="#">
                                    <img src="assets/img/product-slider/60eb20-200x200.jpg"
                                         class="img-fluid" alt="">
                                </a>
                                <h2 class="post-title">
                                    <a href="#">لپ تاپ ۱۱٫۶ اینچی دل مدل INSPIRON 3168 -AC B</a>
                                </h2>
                                <div class="price">
                                    <div class="text-center">
                                        <del><span>4,299,000<span>تومان</span></span></del>
                                    </div>
                                    <div class="text-center">
                                        <ins><span>4,180,000<span>تومان</span></span></ins>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <a href="#">
                                    <img src="assets/img/product-slider/4ff777-200x200.jpg"
                                         class="img-fluid" alt="">
                                </a>
                                <h2 class="post-title">
                                    <a href="#">لپ تاپ ۱۴ اینچی دل مدل vostro 5471</a>
                                </h2>
                                <div class="price">
                                    <del><span>6,890,000<span>تومان</span></span></del>
                                    <ins><span>6,580,000<span>تومان</span></span></ins>
                                </div>
                            </div>
                            <div class="item">
                                <a href="#">
                                    <img src="assets/img/product-slider/35a2b8-200x200.jpg"
                                         class="img-fluid" alt="">
                                </a>
                                <h2 class="post-title">
                                    <a href="#">لپ تاپ ۱۵ اینچی دل مدل Latitude 5580</a>
                                </h2>
                                <div class="price">
                                    <del><span>4,799,000<span>تومان</span></span></del>
                                    <ins><span>4,699,000<span>تومان</span></span></ins>
                                </div>
                            </div>
                            <div class="item">
                                <a href="#">
                                    <img src="assets/img/product-slider/9b3da9-200x200.jpg"
                                         class="img-fluid" alt="">
                                </a>
                                <h2 class="post-title">
                                    <a href="#">لپ تاپ ۱۵ اینچی دل مدل INSPIRON 15-3567 - I</a>
                                </h2>
                                <div class="price">
                                    <span>2,780,000<span>تومان</span></span>
                                </div>
                            </div>
                            <div class="item">
                                <a href="#">
                                    <img src="assets/img/product-slider/c8297f-200x200.jpg"
                                         class="img-fluid" alt="">
                                </a>
                                <h2 class="post-title">
                                    <a href="#">لپ تاپ ۱۵ اینچی دل مدل INSPIRON 7577 - D</a>
                                </h2>
                                <div class="price">
                                    <del><span>8,999,000<span>تومان</span></span></del>
                                    <ins><span>8,899,000<span>تومان</span></span></ins>
                                </div>
                            </div>
                            <div class="item">
                                <a href="#">
                                    <img src="assets/img/product-slider/a579bb-200x200.jpg"
                                         class="img-fluid" alt="">
                                </a>
                                <h2 class="post-title">
                                    <a href="#">لپ تاپ ۱۵ اینچی دل مدل Inspiron 15-5570 - B</a>
                                </h2>
                                <div class="price">
                                    <span>4,279,000<span>تومان</span></span>
                                </div>
                            </div>
                            <div class="item">
                                <a href="#">
                                    <img src="assets/img/product-slider/19a2cc-200x200.jpg"
                                         class="img-fluid" alt="">
                                </a>
                                <h2 class="post-title">
                                    <a href="#">لپ تاپ ۱۵ اینچی دل مدل XPS 15-9560</a>
                                </h2>
                                <div class="price">
                                    <span>18,450,000<span>تومان</span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="widget widget-product card">
                        <header class="card-header">
                            <h3 class="card-title">
                                <span>کامپیوتر و لوازم جانبی</span>
                            </h3>
                            <a href="#" class="view-all">مشاهده همه</a>
                        </header>
                        <div class="product-carousel owl-carousel owl-theme">
                            <div class="item">
                                <a href="#">
                                    <img src="assets/img/product-slider/60eb20-200x200.jpg"
                                         class="img-fluid" alt="">
                                </a>
                                <h2 class="post-title">
                                    <a href="#">لپ تاپ ۱۱٫۶ اینچی دل مدل INSPIRON 3168 -AC B</a>
                                </h2>
                                <div class="price">
                                    <del><span>4,299,000<span>تومان</span></span></del>
                                    <ins><span>4,180,000<span>تومان</span></span></ins>
                                </div>
                            </div>
                            <div class="item">
                                <a href="#">
                                    <img src="assets/img/product-slider/4ff777-200x200.jpg"
                                         class="img-fluid" alt="">
                                </a>
                                <h2 class="post-title">
                                    <a href="#">لپ تاپ ۱۴ اینچی دل مدل vostro 5471</a>
                                </h2>
                                <div class="price">
                                    <del><span>6,890,000<span>تومان</span></span></del>
                                    <ins><span>6,580,000<span>تومان</span></span></ins>
                                </div>
                            </div>
                            <div class="item">
                                <a href="#">
                                    <img src="assets/img/product-slider/35a2b8-200x200.jpg"
                                         class="img-fluid" alt="">
                                </a>
                                <h2 class="post-title">
                                    <a href="#">لپ تاپ ۱۵ اینچی دل مدل Latitude 5580</a>
                                </h2>
                                <div class="price">
                                    <del><span>4,799,000<span>تومان</span></span></del>
                                    <ins><span>4,699,000<span>تومان</span></span></ins>
                                </div>
                            </div>
                            <div class="item">
                                <a href="#">
                                    <img src="assets/img/product-slider/9b3da9-200x200.jpg"
                                         class="img-fluid" alt="">
                                </a>
                                <h2 class="post-title">
                                    <a href="#">لپ تاپ ۱۵ اینچی دل مدل INSPIRON 15-3567 - I</a>
                                </h2>
                                <div class="price">
                                    <span>2,780,000<span>تومان</span></span>
                                </div>
                            </div>
                            <div class="item">
                                <a href="#">
                                    <img src="assets/img/product-slider/c8297f-200x200.jpg"
                                         class="img-fluid" alt="">
                                </a>
                                <h2 class="post-title">
                                    <a href="#">لپ تاپ ۱۵ اینچی دل مدل INSPIRON 7577 - D</a>
                                </h2>
                                <div class="price">
                                    <del><span>8,999,000<span>تومان</span></span></del>
                                    <ins><span>8,899,000<span>تومان</span></span></ins>
                                </div>
                            </div>
                            <div class="item">
                                <a href="#">
                                    <img src="assets/img/product-slider/a579bb-200x200.jpg"
                                         class="img-fluid" alt="">
                                </a>
                                <h2 class="post-title">
                                    <a href="#">لپ تاپ ۱۵ اینچی دل مدل Inspiron 15-5570 - B</a>
                                </h2>
                                <div class="price">
                                    <span>4,279,000<span>تومان</span></span>
                                </div>
                            </div>
                            <div class="item">
                                <a href="#">
                                    <img src="assets/img/product-slider/19a2cc-200x200.jpg"
                                         class="img-fluid" alt="">
                                </a>
                                <h2 class="post-title">
                                    <a href="#">لپ تاپ ۱۵ اینچی دل مدل XPS 15-9560</a>
                                </h2>
                                <div class="price">
                                    <span>18,450,000<span>تومان</span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row banner-ads">
                <div class="col-12">
                    <div class="row">
                        <div class="col-12 col-lg-6">
                            <div class="widget-banner card">
                                <a href="#" target="_blank">
                                    <img class="img-fluid" src="assets/img/banner/banner-9.jpg" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6">
                            <div class="widget-banner card">
                                <a href="#" target="_top">
                                    <img class="img-fluid" src="assets/img/banner/banner-10.jpg" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="widget widget-product card">
                        <header class="card-header">
                            <h3 class="card-title">
                                <span>کامپیوتر و لوازم جانبی</span>
                            </h3>
                            <a href="#" class="view-all">مشاهده همه</a>
                        </header>
                        <div class="product-carousel owl-carousel owl-theme">
                            <div class="item">
                                <a href="#">
                                    <img src="assets/img/product-slider/60eb20-200x200.jpg"
                                         class="img-fluid" alt="">
                                </a>
                                <h2 class="post-title">
                                    <a href="#">لپ تاپ ۱۱٫۶ اینچی دل مدل INSPIRON 3168 -AC B</a>
                                </h2>
                                <div class="price">
                                    <del><span>4,299,000<span>تومان</span></span></del>
                                    <ins><span>4,180,000<span>تومان</span></span></ins>
                                </div>
                            </div>
                            <div class="item">
                                <a href="#">
                                    <img src="assets/img/product-slider/4ff777-200x200.jpg"
                                         class="img-fluid" alt="">
                                </a>
                                <h2 class="post-title">
                                    <a href="#">لپ تاپ ۱۴ اینچی دل مدل vostro 5471</a>
                                </h2>
                                <div class="price">
                                    <del><span>6,890,000<span>تومان</span></span></del>
                                    <ins><span>6,580,000<span>تومان</span></span></ins>
                                </div>
                            </div>
                            <div class="item">
                                <a href="#">
                                    <img src="assets/img/product-slider/35a2b8-200x200.jpg"
                                         class="img-fluid" alt="">
                                </a>
                                <h2 class="post-title">
                                    <a href="#">لپ تاپ ۱۵ اینچی دل مدل Latitude 5580</a>
                                </h2>
                                <div class="price">
                                    <del><span>4,799,000<span>تومان</span></span></del>
                                    <ins><span>4,699,000<span>تومان</span></span></ins>
                                </div>
                            </div>
                            <div class="item">
                                <a href="#">
                                    <img src="assets/img/product-slider/9b3da9-200x200.jpg"
                                         class="img-fluid" alt="">
                                </a>
                                <h2 class="post-title">
                                    <a href="#">لپ تاپ ۱۵ اینچی دل مدل INSPIRON 15-3567 - I</a>
                                </h2>
                                <div class="price">
                                    <span>2,780,000<span>تومان</span></span>
                                </div>
                            </div>
                            <div class="item">
                                <a href="#">
                                    <img src="assets/img/product-slider/c8297f-200x200.jpg"
                                         class="img-fluid" alt="">
                                </a>
                                <h2 class="post-title">
                                    <a href="#">لپ تاپ ۱۵ اینچی دل مدل INSPIRON 7577 - D</a>
                                </h2>
                                <div class="price">
                                    <del><span>8,999,000<span>تومان</span></span></del>
                                    <ins><span>8,899,000<span>تومان</span></span></ins>
                                </div>
                            </div>
                            <div class="item">
                                <a href="#">
                                    <img src="assets/img/product-slider/a579bb-200x200.jpg"
                                         class="img-fluid" alt="">
                                </a>
                                <h2 class="post-title">
                                    <a href="#">لپ تاپ ۱۵ اینچی دل مدل Inspiron 15-5570 - B</a>
                                </h2>
                                <div class="price">
                                    <span>4,279,000<span>تومان</span></span>
                                </div>
                            </div>
                            <div class="item">
                                <a href="#">
                                    <img src="assets/img/product-slider/19a2cc-200x200.jpg"
                                         class="img-fluid" alt="">
                                </a>
                                <h2 class="post-title">
                                    <a href="#">لپ تاپ ۱۵ اینچی دل مدل XPS 15-9560</a>
                                </h2>
                                <div class="price">
                                    <span>18,450,000<span>تومان</span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="widget widget-product card">
                        <header class="card-header">
                            <h3 class="card-title">
                                <span>کامپیوتر و لوازم جانبی</span>
                            </h3>
                            <a href="#" class="view-all">مشاهده همه</a>
                        </header>
                        <div class="product-carousel owl-carousel owl-theme">
                            <div class="item">
                                <a href="#">
                                    <img src="assets/img/product-slider/60eb20-200x200.jpg"
                                         class="img-fluid" alt="">
                                </a>
                                <h2 class="post-title">
                                    <a href="#">لپ تاپ ۱۱٫۶ اینچی دل مدل INSPIRON 3168 -AC B</a>
                                </h2>
                                <div class="price">
                                    <del><span>4,299,000<span>تومان</span></span></del>
                                    <ins><span>4,180,000<span>تومان</span></span></ins>
                                </div>
                            </div>
                            <div class="item">
                                <a href="#">
                                    <img src="assets/img/product-slider/4ff777-200x200.jpg"
                                         class="img-fluid" alt="">
                                </a>
                                <h2 class="post-title">
                                    <a href="#">لپ تاپ ۱۴ اینچی دل مدل vostro 5471</a>
                                </h2>
                                <div class="price">
                                    <del><span>6,890,000<span>تومان</span></span></del>
                                    <ins><span>6,580,000<span>تومان</span></span></ins>
                                </div>
                            </div>
                            <div class="item">
                                <a href="#">
                                    <img src="assets/img/product-slider/35a2b8-200x200.jpg"
                                         class="img-fluid" alt="">
                                </a>
                                <h2 class="post-title">
                                    <a href="#">لپ تاپ ۱۵ اینچی دل مدل Latitude 5580</a>
                                </h2>
                                <div class="price">
                                    <del><span>4,799,000<span>تومان</span></span></del>
                                    <ins><span>4,699,000<span>تومان</span></span></ins>
                                </div>
                            </div>
                            <div class="item">
                                <a href="#">
                                    <img src="assets/img/product-slider/9b3da9-200x200.jpg"
                                         class="img-fluid" alt="">
                                </a>
                                <h2 class="post-title">
                                    <a href="#">لپ تاپ ۱۵ اینچی دل مدل INSPIRON 15-3567 - I</a>
                                </h2>
                                <div class="price">
                                    <span>2,780,000<span>تومان</span></span>
                                </div>
                            </div>
                            <div class="item">
                                <a href="#">
                                    <img src="assets/img/product-slider/c8297f-200x200.jpg"
                                         class="img-fluid" alt="">
                                </a>
                                <h2 class="post-title">
                                    <a href="#">لپ تاپ ۱۵ اینچی دل مدل INSPIRON 7577 - D</a>
                                </h2>
                                <div class="price">
                                    <del><span>8,999,000<span>تومان</span></span></del>
                                    <ins><span>8,899,000<span>تومان</span></span></ins>
                                </div>
                            </div>
                            <div class="item">
                                <a href="#">
                                    <img src="assets/img/product-slider/a579bb-200x200.jpg"
                                         class="img-fluid" alt="">
                                </a>
                                <h2 class="post-title">
                                    <a href="#">لپ تاپ ۱۵ اینچی دل مدل Inspiron 15-5570 - B</a>
                                </h2>
                                <div class="price">
                                    <span>4,279,000<span>تومان</span></span>
                                </div>
                            </div>
                            <div class="item">
                                <a href="#">
                                    <img src="assets/img/product-slider/19a2cc-200x200.jpg"
                                         class="img-fluid" alt="">
                                </a>
                                <h2 class="post-title">
                                    <a href="#">لپ تاپ ۱۵ اینچی دل مدل XPS 15-9560</a>
                                </h2>
                                <div class="price">
                                    <span>18,450,000<span>تومان</span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row banner-ads">
                <div class="col-12">
                    <div class="row">
                        <div class="col-12">
                            <div class="widget widget-banner card">
                                <a href="#" target="_blank">
                                    <img class="img-fluid" src="assets/img/banner/banner-11.jpg" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="widget widget-product card">
                        <header class="card-header">
                            <h3 class="card-title">
                                <span>کامپیوتر و لوازم جانبی</span>
                            </h3>
                            <a href="#" class="view-all">مشاهده همه</a>
                        </header>
                        <div class="product-carousel owl-carousel owl-theme">
                            <div class="item">
                                <a href="#">
                                    <img src="assets/img/product-slider/60eb20-200x200.jpg"
                                         class="img-fluid" alt="">
                                </a>
                                <h2 class="post-title">
                                    <a href="#">لپ تاپ ۱۱٫۶ اینچی دل مدل INSPIRON 3168 -AC B</a>
                                </h2>
                                <div class="price">
                                    <del><span>4,299,000<span>تومان</span></span></del>
                                    <ins><span>4,180,000<span>تومان</span></span></ins>
                                </div>
                            </div>
                            <div class="item">
                                <a href="#">
                                    <img src="assets/img/product-slider/4ff777-200x200.jpg"
                                         class="img-fluid" alt="">
                                </a>
                                <h2 class="post-title">
                                    <a href="#">لپ تاپ ۱۴ اینچی دل مدل vostro 5471</a>
                                </h2>
                                <div class="price">
                                    <del><span>6,890,000<span>تومان</span></span></del>
                                    <ins><span>6,580,000<span>تومان</span></span></ins>
                                </div>
                            </div>
                            <div class="item">
                                <a href="#">
                                    <img src="assets/img/product-slider/35a2b8-200x200.jpg"
                                         class="img-fluid" alt="">
                                </a>
                                <h2 class="post-title">
                                    <a href="#">لپ تاپ ۱۵ اینچی دل مدل Latitude 5580</a>
                                </h2>
                                <div class="price">
                                    <del><span>4,799,000<span>تومان</span></span></del>
                                    <ins><span>4,699,000<span>تومان</span></span></ins>
                                </div>
                            </div>
                            <div class="item">
                                <a href="#">
                                    <img src="assets/img/product-slider/9b3da9-200x200.jpg"
                                         class="img-fluid" alt="">
                                </a>
                                <h2 class="post-title">
                                    <a href="#">لپ تاپ ۱۵ اینچی دل مدل INSPIRON 15-3567 - I</a>
                                </h2>
                                <div class="price">
                                    <span>2,780,000<span>تومان</span></span>
                                </div>
                            </div>
                            <div class="item">
                                <a href="#">
                                    <img src="assets/img/product-slider/c8297f-200x200.jpg"
                                         class="img-fluid" alt="">
                                </a>
                                <h2 class="post-title">
                                    <a href="#">لپ تاپ ۱۵ اینچی دل مدل INSPIRON 7577 - D</a>
                                </h2>
                                <div class="price">
                                    <del><span>8,999,000<span>تومان</span></span></del>
                                    <ins><span>8,899,000<span>تومان</span></span></ins>
                                </div>
                            </div>
                            <div class="item">
                                <a href="#">
                                    <img src="assets/img/product-slider/a579bb-200x200.jpg"
                                         class="img-fluid" alt="">
                                </a>
                                <h2 class="post-title">
                                    <a href="#">لپ تاپ ۱۵ اینچی دل مدل Inspiron 15-5570 - B</a>
                                </h2>
                                <div class="price">
                                    <span>4,279,000<span>تومان</span></span>
                                </div>
                            </div>
                            <div class="item">
                                <a href="#">
                                    <img src="assets/img/product-slider/19a2cc-200x200.jpg"
                                         class="img-fluid" alt="">
                                </a>
                                <h2 class="post-title">
                                    <a href="#">لپ تاپ ۱۵ اینچی دل مدل XPS 15-9560</a>
                                </h2>
                                <div class="price">
                                    <span>18,450,000<span>تومان</span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
