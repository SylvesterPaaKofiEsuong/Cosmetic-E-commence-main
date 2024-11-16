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
        <button class="mobile-menu-toggle" aria-label="Toggle menu">
            <span></span>
            <span></span>
            <span></span>
        </button>
        <ul class="nav-list">
            <li class="nav-item has-mega-menu">
                <a href="skincare.php" class="nav-link">Skincare</a>
                <div class="mega-menu">
                    <div class="mega-menu-content">
                        <div class="mega-menu-column">
                            <h3>By Category</h3>
                            <ul>
                                <li><a href="#">Cleansers</a></li>
                                <li><a href="#">Toners</a></li>
                                <li><a href="#">Serums</a></li>
                                <li><a href="#">Moisturizers</a></li>
                            </ul>
                        </div>
                        <div class="mega-menu-column">
                            <h3>By Concern</h3>
                            <ul>
                                <li><a href="#">Acne</a></li>
                                <li><a href="#">Anti-aging</a></li>
                                <li><a href="#">Hydration</a></li>
                                <li><a href="#">Brightening</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
            <li class="nav-item has-mega-menu">
                <a href="makeup.php" class="nav-link">Makeup</a>
                <div class="mega-menu">
                    <div class="mega-menu-content">
                        <div class="mega-menu-column">
                            <h3>Face</h3>
                            <ul>
                                <li><a href="#">Foundation</a></li>
                                <li><a href="#">Concealer</a></li>
                                <li><a href="#">Powder</a></li>
                            </ul>
                        </div>
                        <div class="mega-menu-column">
                            <h3>Eyes</h3>
                            <ul>
                                <li><a href="#">Mascara</a></li>
                                <li><a href="#">Eyeshadow</a></li>
                                <li><a href="#">Eyeliner</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a href="haircare.php" class="nav-link">Hair Care</a>
            </li>
            <li class="nav-item">
                <a href="fragrance.php" class="nav-link">Fragrance</a>
            </li>
            <li class="nav-item">
                <a href="brands.php" class="nav-link">Brands</a>
            </li>
            <li class="nav-item sale">
                <a href="sale.php" class="nav-link">Sale</a>
            </li>
        </ul>
        <div class="nav-auth">
            <div class="user-menu">
                <button class="user-menu-trigger">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                        <circle cx="12" cy="7" r="4"></circle>
                    </svg>
                    <span class="sr-only">User Menu</span>
                </button>
                <div class="user-dropdown">
                    <div class="user-dropdown-content">
                        <a href="login.html" class="auth-link">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4"></path>
                                <polyline points="10 17 15 12 10 7"></polyline>
                                <line x1="15" y1="12" x2="3" y2="12"></line>
                            </svg>
                            Login
                        </a>
                        <a href="register.html" class="auth-link">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                <circle cx="8.5" cy="7" r="4"></circle>
                                <line x1="20" y1="8" x2="20" y2="14"></line>
                                <line x1="23" y1="11" x2="17" y2="11"></line>
                            </svg>
                            Register
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>