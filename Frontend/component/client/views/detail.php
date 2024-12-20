<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Frontend/Css/detail.css">
    <title>detail</title>

</head>

<body>
    <?php require_once(HF . "header.php")  ?>
    <!-- past -->
    <div class="grid wide row align-items-center">
        <span><a class="past__product" href="?clt=/">Trang Chủ </a></span>
        <span class="past__icon--next"><img src="Frontend/public/svg/next.svg" alt=""></span>
        <span class="past__product--category"> Nam</span> <span class="past__icon--next"><img
                src="Frontend/public/svg/next.svg" alt=""></span>
        <span class="past__product--category"> Quần nam </span> <span class="past__icon--next"><img
                src="Frontend/public/svg/next.svg" alt=""></span>
        <span class="past__product--category"> Quần Jeans Nam Tapered Lycra Thêu Túi</span>
    </div>
    <!-- main -->
    <div>

        <main class=" detail  grid wide row justify-content-between mt-4">
            <div class="l-6-2 row">
                <div class="l-1 m-0 c-0"></div>
                <div class="detail__left l-11 ">
                    <div class="detail__left--img l-1">
                        <div class="detail__left--item active--detail__left--item">
                            <img loading="lazy"
                                src="https://m.yodycdn.com/fit-in/filters:format(webp)/products/quan-jean-nam-qjm7019-xdm-1-yodyvn.jpg"
                                alt="">
                        </div>
                        <div class="detail__left--item">
                            <img loading="lazy"
                                src="https://m.yodycdn.com/fit-in/filters:format(webp)/products/quan-jean-nam-qjm7019-xdm-1-yodyvn.jpg"
                                alt="">
                        </div>
                        <div class="detail__left--item">
                            <img loading="lazy"
                                src="https://m.yodycdn.com/fit-in/filters:format(webp)/products/quan-jean-nam-qjm7019-xdm-1-yodyvn.jpg"
                                alt="">
                        </div>
                        <div class="detail__left--item">
                            <img loading="lazy"
                                src="https://m.yodycdn.com/fit-in/filters:format(webp)/products/quan-jean-nam-qjm7019-xdm-1-yodyvn.jpg"
                                alt="">
                        </div>
                        <div class="detail__left--item">
                            <img loading="lazy"
                                src="https://m.yodycdn.com/fit-in/filters:format(webp)/products/quan-jean-nam-qjm7019-xdm-1-yodyvn.jpg"
                                alt="">
                        </div>
                        <div class="detail__left--item">
                            <img loading="lazy"
                                src="https://m.yodycdn.com/fit-in/filters:format(webp)/products/quan-jean-nam-qjm7019-xdm-1-yodyvn.jpg"
                                alt="">
                        </div>
                        <div class="detail__left--item">
                            <img loading="lazy"
                                src="https://m.yodycdn.com/fit-in/filters:format(webp)/products/quan-jean-nam-qjm7019-xdm-1-yodyvn.jpg"
                                alt="">
                        </div>
                    </div>
                    <div class="detail__right--img l-10-9">
                        <img src="https://m.yodycdn.com/fit-in/filters:format(webp)/products/ao-thun-nu-TSN7301-DEN%20(10).JPG"
                            alt="">
                    </div>
                </div>
            </div>
            <div class="l-6-2 row">
                <div class="detail__right l-11 ">
                    <div class="detail__right--name">
                        T-shirt Nữ Dáng Suông
                    </div>
                    <div class="detail__right-info">
                        <span class="detail__right-code">TSN7301-DEN-S</span>
                        <span class="stars">
                            <span class="icon__stars"><img src="Frontend/public/svg/start.svg" alt=""></span>
                            <span class="icon__stars"><img src="Frontend/public/svg/start.svg" alt=""></span>
                            <span class="icon__stars"><img src="Frontend/public/svg/start.svg" alt=""></span>
                            <span class="icon__stars"><img src="Frontend/public/svg/start.svg" alt=""></span>
                            <span class="icon__stars"><img src="Frontend/public/svg/start.svg" alt=""></span>
                        </span>
                        <span class="rating">4.8</span>
                        <a href="#" class="rating-count">(120)</a>
                        <span class="sold-count">Đã bán 964</span>
                    </div>
                    <div class="detail__right--price row align-items-center">
                        <div class="detail__right--price--new">430.000 <span>đ</span></div>
                        <div class="detail__right--price--old">560.000 <span>đ</span></div>
                        <div class="detail__right--price--sale"><span>-</span>10%</div>
                    </div>
                    <div class="detail__right--view row align-items-center">
                        <div class="icon__view">
                            <img src="Frontend/public/svg/view.svg" alt="">
                        </div>
                        <div class="view__number">45</div>
                        <div>
                            người đang xem sản phẩm này
                        </div>
                    </div>
                    <div class="color__selector mt-4">
                        <span class="color-label">Màu sắc: Xanh</span>
                        <div class="row align-items-center">
                            <div class="color-option color-blue selected"></div>
                            <div class="color-option color-peach"></div>
                            <div class="color-option color-black"></div>
                            <div class="color-option color-brown"></div>
                            <div class="color-option color-white"></div>
                        </div>
                    </div>
                    <div class="size__selector ">
                        <span class="size-label">Kích thước: XL</span>
                        <div class="row align-items-center">
                            <div class="size-option active__size ">S</div>
                            <div class="size-option ">M</div>
                            <div class="size-option ">L</div>
                            <div class="size-option ">XL</div>

                        </div>
                    </div>
                    <!--  -->
                    <div>
                        <h3 class="detail__number">Số lượng</h3>
                        <div class="row justify-content-between align-items-center">
                            <div class="number  row align-items-center">
                                <span><img loading="lazy" src="Frontend/public/svg/tru.svg" alt=""></span>
                                <span id="number">1</span>
                                <span><img loading="lazy" src="Frontend/public/svg/cong.svg" alt=""></span>
                            </div>
                            <div class="add__cart l-9 ">
                                Thêm giỏ hàng
                            </div>
                        </div>
                        <div class="cate__new">
                            Mua Ngay
                        </div>
                        <div class="payment-methods">
                            <div class="">
                                <div><img src="https://yody.vn/icons/zalopay.png" alt="ZaloPay"></div>
                                <div><img src="https://yody.vn/icons/visa-card.png" alt="Visa"></div>
                                <div><img src="https://yody.vn/icons/master-card.png" alt="MasterCard"></div>
                                <div><img src="https://yody.vn/icons/vnpay-qr.png" alt="VNPay"></div>
                                <div><img src="https://yody.vn/icons/momo.png" alt="MoMo"></div>
                            </div>
                            <p class="text-align-center">Đảm bảo thanh toán an toàn và bảo mật</p>
                        </div>
                        <div class="info__ship">
                            <div>
                                <span><img loading="lazy" src="Frontend/public/svg/car.svg" alt=""></span>
                                <span> Miễn phí vận chuyển: Đơn hàng từ 498k</span>
                            </div>
                            <div>
                                <span><img loading="lazy" src="Frontend/public/svg/times.svg" alt=""></span>
                                <span> Giao hàng: Từ 3 - 5 ngày trên cả nước</span>
                            </div>
                            <div>
                                <span><img loading="lazy" src="Frontend/public/svg/traodoi.svg" alt=""></span>
                                <span> Miễn phí đổi trả: Tại 267+ cửa hàng trong 15 ngày</span>
                            </div>
                            <div>
                                <span><img loading="lazy" src="Frontend/public/svg/mac.svg" alt=""></span>
                                <span> Sử dụng mã giảm giá ở bước thanh toán</span>
                            </div>
                            <div>
                                <span><img loading="lazy" src="Frontend/public/svg/baove.svg" alt=""></span>
                                <span> Thông tin bảo mật và mã hóa</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="l-1"></div>
            </div>
        </main>

        <!-- Cos theer ban se thich -->
        <section class="canyoulikeit     grid wide">
            <h2>
                Có thể bạn sẽ thích
            </h2>
            <section class="products row  justify-content-between ">

                <article class="product l-3 m-4 c-12">
                    <a href="?clt=detail">
                        <div class="product__image">
                            <img loading="lazy"
                                src="https://m.yodycdn.com/fit-in/filters:format(webp)/products/ao-khoac-the-thao-nu-SKN7007-GNH%20(10).JPG"
                                alt="" />
                            <div class="overlay__image">
                                <img loading="lazy" src="https://m.yodycdn.com/products/donggia_m1yi17yavizhqdvliui.png"
                                    alt="">
                            </div>
                        </div>
                        <span class="product__name">Áo Khoác Thể Thao Nữ Siêu Nhẹ Chống Tia UV</span>
                        <div class="product__price row align-items-center  ">
                            <span class="price__new">599.000 đ</span>
                            <span class="price__old">3333</span>
                        </div>
                        <div class="product__variation row align-items-center">
                            <span class="product__variation--item active__product--variation "></span>
                            <span class="product__variation--item"></span>
                            <span class="product__variation--item"></span>
                            <span class="product__variation--item"></span>
                        </div>
                        <div class="product__logo--sale row align-items-center justify-content-center">
                            <span>-</span>5%
                        </div>
                    </a>
                </article>

                <article class="product l-3 m-4 c-12">
                    <div class="product__image">
                        <img loading="lazy"
                            src="https://m.yodycdn.com/fit-in/filters:format(webp)/products/ao-khoac-the-thao-nu-SKN7007-GNH%20(10).JPG"
                            alt="" />
                        <div class="overlay__image">
                            <img loading="lazy" src="https://m.yodycdn.com/products/donggia_m1yi17yavizhqdvliui.png"
                                alt="">
                        </div>
                    </div>
                    <span class="product__name">Áo Khoác Thể Thao Nữ Siêu Nhẹ Chống Tia UV</span>
                    <div class="product__price row align-items-center  ">
                        <span class="price__new">599.000 đ</span>
                        <span class="price__old">3333</span>
                    </div>
                    <div class="product__variation row align-items-center">
                        <span class="product__variation--item active__product--variation "></span>
                        <span class="product__variation--item"></span>
                        <span class="product__variation--item"></span>
                        <span class="product__variation--item"></span>
                    </div>
                    <div class="product__logo--sale row align-items-center justify-content-center">
                        <span>-</span>5%
                    </div>
                </article>
                <article class="product l-3 m-4 c-12">
                    <div class="product__image">
                        <img loading="lazy"
                            src="https://m.yodycdn.com/fit-in/filters:format(webp)/products/ao-khoac-the-thao-nu-SKN7007-GNH%20(10).JPG"
                            alt="" />
                    </div>
                    <span class="product__name">Áo Khoác Thể Thao Nữ Siêu Nhẹ Chống Tia UV</span>
                    <div class="product__price row align-items-center  ">
                        <span class="price__new">599.000 đ</span>
                        <span class="price__old">3333</span>
                    </div>
                    <div class="product__variation row align-items-center">
                        <span class="product__variation--item active__product--variation "></span>
                        <span class="product__variation--item"></span>
                        <span class="product__variation--item"></span>
                        <span class="product__variation--item"></span>
                    </div>
                    <div class="product__logo--sale row align-items-center justify-content-center">
                        <span>-</span>5%
                    </div>
                </article>
                <article class="product l-3 m-4 c-12">
                    <div class="product__image">
                        <img loading="lazy"
                            src="https://m.yodycdn.com/fit-in/filters:format(webp)/products/ao-khoac-the-thao-nu-SKN7007-GNH%20(10).JPG"
                            alt="" />
                    </div>
                    <span class="product__name">Áo Khoác Thể Thao Nữ Siêu Nhẹ Chống Tia UV</span>
                    <div class="product__price row align-items-center  ">
                        <span class="price__new">599.000 đ</span>
                        <span class="price__old">3333</span>
                    </div>
                    <div class="product__variation row align-items-center">
                        <span class="product__variation--item active__product--variation "></span>
                        <span class="product__variation--item"></span>
                        <span class="product__variation--item"></span>
                        <span class="product__variation--item"></span>
                    </div>
                    <div class="product__logo--sale row align-items-center justify-content-center">
                        <span>-</span>5%
                    </div>
                </article>


            </section>

        </section>
    </div>
    <?php require_once(HF . "footer.php")  ?>
</body>



</html>