<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <header>
        <div class="header">
            <div class="navbar">
                <div class="action">
                    <div>
                        <a href="#">Log in</a>
                        <a href="#">My Accont</a>
                        <a href="#">My Wishlist</a>
                        <a href="#">Find Wishlist</a>
                    </div>
                    <div class="cart">
                        <a href="#">0 items</a>
                        <a href="#">Check out</a>
                    </div>
                </div>
                <div class="navsearch">
                    <img src="img/bai2-63.png" alt="">
                    <input type="text" placeholder="Search...">
                    <a type="submit" href="#">SEARCH</a>
                </div>
            </div>
            <div class="logo">
                <img src="img/bai2-70.png" alt="">
            </div>
        </div>
        <div class="menu">
            <ul>
                <li><a href="#">COLLECTION</a></li>
                <li>
                    <a href="#">ABOUT US</a>
                    <ul class="dropdown">
                        <li><a href="#">WEDDING & ENGAGEMENT</a></li>
                        <li><a href="#">FINE JEWELRY</a></li>
                        <li><a href="#">ESTATE</a></li>
                        <li><a href="#">VINTAGE</a></li>
                        <li><a href="#">LOOSE STONES</a></li>
                    </ul>
                </li>  
                <li>
                    <a href="#">SERVICES</a>
                    <ul class="dropdown">
                        <li><a href="#">WEDDING & ENGAGEMENT</a></li>
                        <li><a href="#">FINE JEWELRY</a></li>
                        <li><a href="#">ESTATE</a></li>
                        <li><a href="#">VINTAGE</a></li>
                        <li><a href="#">LOOSE STONES</a></li>
                    </ul>
                </li>
                <li><a href="#">BLOG</a></li>
                <li><a href="#">CONTACT US</a></li>
                <li><a href="#">FREE LIFETIME WARRANTY</a></li>
                <li><a href="#">FLEXIBLE PAYMENTS</a></li>
                <li><a href="#">PRIVACY POLICY</a></li>
            </ul>
        </div>
    </header>
    <main>
        <div class="slideshow">
            <div   div class="slide fade">
                <img src="img/bai2-50.png" alt="">
            </div>
            <div class="slide fade">
                <img src="img/bai2-51.png" alt="">
            </div>
            <div class="slide fade">
                <img src="img/bai2-52.png" alt="">
            </div>
            <div class="dots-container">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
            </div>
        </div>
        <div class="product">
            <div class="product-item">
                <img src="img/bai2-39.png">
                <div class="overlay">
                    <button class="detali">MORE DETALIS</button>
                </div>
            </div>
            <div class="product-item">
                <img src="img/bai2-40.png">
                <div class="overlay">
                    <button class="detali">MORE DETALIS</button>
                </div>
            </div>
            <div class="product-item">
                <img src="img/bai2-41.png">
                <div class="overlay">
                    <button class="detali">MORE DETALIS</button>
                </div>
            </div>
            <div class="product-item">
                <img src="img/bai2-42.png">
                <div class="overlay">
                    <button class="detali">MORE DETALIS</button>
                </div>
            </div>
            <div class="product-item">
                <img src="img/bai2-43.png">
                <div class="overlay">
                    <button class="detali">MORE DETALIS</button>
                </div>
            </div>
            <div class="product-item">
                <img src="img/bai2-44.png">
                <div class="overlay">
                    <button class="detali">MORE DETALIS</button>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <div class="footer-content">
            <div class="contact">
                <div class="newsletter">
                    <a>
                        Newsletter
                    </a>
                    <div class="email">
                        <input type="text" placeholder="Email">
                        <a href="#"> JOIN</a>
                    </div>  
                </div>
                <div class="social">
                    <a>
                        Follow us
                    </a>
                    <a href="#"><img src="img/bai2-4.png" alt=""></a>
                    <a href="#"><img src="img/bai2-5.png" alt=""></a>
                    <a href="#"><img src="img/bai2-6.png" alt=""></a>
                </div>
            </div>
        </div>
        <div class="bottom-bar">
                <a href="#">TERMS AND CONDITIONS</a>
                <a href="#">PRIVACY POLICY</a>
                <a href="#">SHIPPING POLICY</a>
                <a href="#">ABOUT US</a>
                <a href="#">CONTACT US</a>
        </div>
        <div class="info">
            <p>Copyright © 2014 Appelblom Jewelry Co. All rights reserved.</p>
            <div class="payment">
                <img src="img/bai2-9.png" alt="">
                <img src="img/bai2-10.png" alt="">
                <img src="img/bai2-11.png" alt="">
                <img src="img/bai2-12.png" alt="">
                <img src="img/bai2-13.png" alt="">
            </div>
        </div>
    </footer>

    <div class="bottom-nav">
        <a href="#">Log in</a>
        <a href="#">My Accont</a>
        <a href="#">My Wishlist</a>
        <a href="#">Find Wishlist</a>
        <button class="menu-toggle">☰</button>
    </div>

    <script src="script.js"></script>
    
</body>
</html>