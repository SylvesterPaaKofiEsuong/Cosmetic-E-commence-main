<!-- Header.php -->
<header class="main-header">
    <div class="top-bar">
        <div class="container">
            <div class="contact-info">
                <a href="tel:1-800-BEAUTY"><i class="fas fa-phone"></i> 1-800-BEAUTY</a>
                <a href="mailto:info@beautystore.com"><i class="fas fa-envelope"></i> info@beautystore.com</a>
            </div>
            <div class="top-right">
                <a href="#"><i class="fas fa-map-marker-alt"></i> Store Locator</a>
                <select class="currency-selector">
                    <option value="GHS">GHS</option>
                    <option value="USD">USD</option>
                    <option value="EUR">EUR</option>
                    <option value="GBP">GBP</option>
                </select>
            </div>
        </div>
    </div>

    <div class="main-header-content">
        <div class="container">
            <div class="logo">
                <a href="index.php">
                    <h1>BeautyStore</h1>
                </a>
            </div>
            <div class="header-right">
                <div class="search-bar">
                    <form action="search.php" method="GET">
                        <input type="text" placeholder="Search for products...">
                        <button type="submit"><i class="fas fa-search"></i></button>
                    </form>
                </div>
                <div class="header-icons">
                    <a href="account.php" class="header-icon">
                        <i class="fas fa-user"></i>
                        <span>Account</span>
                    </a>
                    <a href="wishlist.php" class="header-icon">
                        <i class="fas fa-heart"></i>
                        <span>Wishlist</span>
                    </a>
                    <a href="cart.php" class="header-icon cart">
                        <i class="fas fa-shopping-cart"></i>
                        <span>Cart</span>
                        <span class="cart-count">0</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Navbar.php -->
<nav class="main-nav">
    <div class="container">
        <ul class="nav-list">
            <li class="nav-item">
                <a href="skincare.php">Skincare</a>
                <div class="mega-menu">
                    <div class="mega-menu-column">
                        <h3>By Category</h3>
                        <ul>
                            <li><a href="#">Cleansers</a></li>
                            <li><a href="#">Toners</a></li>
                            <li><a href="#">Serums</a></li>
                            <li><a href="#">Moisturizers</a></li>
                        </ul>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a href="makeup.php">Makeup</a>
                <div class="mega-menu">
                    <div class="mega-menu-column">
                        <h3>Face</h3>
                        <ul>
                            <li><a href="#">Foundation</a></li>
                            <li><a href="#">Concealer</a></li>
                            <li><a href="#">Powder</a></li>
                        </ul>
                    </div>
                </div>
            </li>
            <li class="nav-item"><a href="haircare.php">Hair Care</a></li>
            <li class="nav-item"><a href="fragrance.php">Fragrance</a></li>
            <li class="nav-item"><a href="brands.php">Brands</a></li>
            <li class="nav-item sale"><a href="sale.php">Sale</a></li>
        </ul>
    </div>
</nav>