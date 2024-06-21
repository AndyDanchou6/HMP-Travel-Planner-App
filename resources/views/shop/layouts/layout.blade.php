<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>e-Mart</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ asset('index/css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('index/css/font-awesome.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('index/css/elegant-icons.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('index/css/nice-select.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('index/css/jquery-ui.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('index/css/owl.carousel.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('index/css/slicknav.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('index/css/style.css') }}" type="text/css">
    <link rel="icon" type="image/x-icon" href="{{ asset('index/img/favicon.ico') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
</head>

<body>
    <!-- Page Preloder -->
    <!-- <div id="preloder">
        <div class="loader"></div>
    </div> -->

    <!-- Humberger Begin -->
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <a href="#"><img src="{{ asset('index/img/e.png') }}" alt=""></a>
        </div>
        <div class="humberger__menu__cart">
            <ul>
                <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
            </ul>
            <div class="header__cart__price">item: <span>$150.00</span></div>
        </div>
        <div class="humberger__menu__widget">
            <div class="header__top__right__language">
            </div>
            @if (Route::has('login'))
            @auth
            <div class="header__top__right__auth">
                <a href="{{ route('home') }}"><i class="fa fa-dashboard"></i>Dashboard</a>
            </div>
            @else
            <div class="header__top__right__auth">
                <a href="#"><i class="fa fa-user"></i>Login</a>
            </div>
        </div>
        @endauth
        @endif
    </div>
    <nav class="humberger__menu__nav mobile-menu">
        <ul>
            <li><a href="{{ route('shop.index') }}">Home</a></li>
            <li><a href="{{ route('shop.products') }}">Shop</a></li>
            <li><a href="#">Pages</a>
                <ul class="header__menu__dropdown">
                    <li><a href="./shop-details.html">Shop Details</a></li>
                    <li><a href="./shoping-cart.html">Shoping Cart</a></li>
                    <li><a href="./checkout.html">Check Out</a></li>
                    <li><a href="./blog-details.html">Blog Details</a></li>
                </ul>
            </li>
            <li><a href="./blog.html">Blog</a></li>
            <li><a href="./contact.html">Contact</a></li>
        </ul>
    </nav>
    <div id="mobile-menu-wrap"></div>
    <div class="header__top__right__social">
        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-linkedin"></i></a>
        <a href="#"><i class="fa fa-pinterest-p"></i></a>
    </div>
    <div class="humberger__menu__contact">
        <ul>
            <li><i class="fa fa-envelope"></i> hello@colorlib.com</li>
            <li>Free Shipping for all Order of $99</li>
        </ul>
    </div>
    </div>
    <!-- Humberger End -->

    <!-- Header Section Begin -->
    <header class="header">
        @include('shop.layouts.header')

    </header>
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    @include('shop.layouts.sidebar')

    @yield('content')



    <!-- Footer Section Begin -->
    <footer class="footer spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__about__logo">
                            <a href="{{ route('shop.index') }}"><img src="{{ asset('index/img/e.png') }}" alt=""></a>
                        </div>
                        <ul>
                            <li>Address: 60-49 Road 11378 New York</li>
                            <li>Phone: +65 11.188.888</li>
                            <li>Email: hello@colorlib.com</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
                    <div class="footer__widget">
                        <h6>Useful Links</h6>
                        <ul>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">About Our Shop</a></li>
                            <li><a href="#">Secure Shopping</a></li>
                            <li><a href="#">Delivery infomation</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Our Sitemap</a></li>
                        </ul>
                        <ul>
                            <li><a href="#">Who We Are</a></li>
                            <li><a href="#">Our Services</a></li>
                            <li><a href="#">Projects</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Innovation</a></li>
                            <li><a href="#">Testimonials</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="footer__widget">
                        <h6>Join Our Newsletter Now</h6>
                        <p>Get E-mail updates about our latest shop and special offers.</p>
                        <form action="#">
                            <input type="text" placeholder="Enter your mail">
                            <button type="submit" class="site-btn" style="background-color: #696cff;">Subscribe</button>
                        </form>
                        <div class="footer__widget__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer__copyright">
                        <div class="footer__copyright__text">
                            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                &copy; <script>
                                    document.write(new Date().getFullYear());
                                </script> e-Mart Grocery | All Rights Reserved
                            </p>
                        </div>
                        <div class="footer__copyright__payment"><img src="img/payment-item.png" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    @include('layouts.sweetalert')
    <script src="{{ asset('index/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('index/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('index/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('index/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('index/js/jquery.slicknav.js') }}"></script>
    <script src="{{ asset('index/js/mixitup.min.js') }}"></script>
    <script src="{{ asset('index/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('index/js/main.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <script>

    </script>
    <script>
        $(document).ready(function() {
            $('.set-bg').each(function() {
                var bg = $(this).data('setbg');
                $(this).css('background-image', 'url(' + bg + ')');
            });
        });

        function totalItemCost() {
            var itemSelected = sessionStorage.getItem('selectedItems');

            if (itemSelected != null) {

                var parsedItems = JSON.parse(itemSelected);
                var totalCost;

                Object.keys(parsedItems).forEach(key => {
                    var itemPrice = parsedItems[key].item_price;
                    var itemQuantity = parsedItems[key].item_quantity;

                    if (totalCost != null) {
                        totalCost += itemPrice * itemQuantity;
                    } else {
                        totalCost = itemPrice * itemQuantity;
                    }
                });

                return totalCost;
            }

            return 0;

        }

        document.addEventListener('DOMContentLoaded', function() {

            var refreshedTotal = document.querySelector('#floating-total input');

            refreshedTotal.value = totalItemCost();

            console.log(totalItemCost());

            const clickedItems = document.querySelectorAll('.product_onDisplay');

            clickedItems.forEach(function(clickedItem) {
                clickedItem.addEventListener('click', function() {
                    var itemId = clickedItem.getAttribute('data-item-id');
                    var itemPrice = clickedItem.getAttribute('data-price');

                    var key = 'item_' + itemId;

                    var storeItem = {
                        [key]: {
                            'item_id': itemId,
                            'item_price': itemPrice,
                            'item_quantity': 1
                        }
                    };

                    var alreadySelected = sessionStorage.getItem('selectedItems');
                    var parsedSelected = JSON.parse(alreadySelected);

                    if (alreadySelected != null) {
                        if (parsedSelected[key] != null) {
                            parsedSelected[key].item_quantity += 1;
                            sessionStorage.setItem('selectedItems', JSON.stringify(parsedSelected));
                        } else {
                            parsedSelected[key] = {
                                'item_id': itemId,
                                'item_price': itemPrice,
                                'item_quantity': 1
                            };
                            sessionStorage.setItem('selectedItems', JSON.stringify(parsedSelected));
                        }
                    } else {
                        sessionStorage.setItem('selectedItems', JSON.stringify(storeItem));
                    }

                    var totalField = document.querySelector('#floating-total input');
                    totalField.value = totalItemCost();
                });
            });
        });
    </script>

</body>

</html>