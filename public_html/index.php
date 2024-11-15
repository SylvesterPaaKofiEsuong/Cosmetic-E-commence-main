<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beauty Haven - Your Premium Cosmetics Destination</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <!-- Header and Navigation -->
    <?php 
    include './includes/header.php'; 
    ?>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="floating-elements">
            <div class="floating-element element-1">🌸</div>
            <div class="floating-element element-2">✨</div>
            <div class="floating-element element-3">🌺</div>
        </div>
        
        <div class="hero-content">
            <div class="hero-text">
                <h1 class="hero-title">Discover Your Natural Beauty</h1>
                <p class="hero-subtitle">Transform your skincare routine with our premium collection of natural and organic beauty products. Embrace the power of nature for radiant, healthy skin.</p>
                <div class="cta-buttons">
                    <button class="cta-primary">Shop Now</button>
                    <button class="cta-secondary">Learn More</button>
                </div>
            </div>
            
            <div class="hero-image">
                <img src="images/pics-resize8.png/600x800" alt="Natural Beauty Products">
            </div>
        </div>

        <div class="hero-features">
            <div class="feature-item">
                <i class="fas fa-leaf"></i>
                <span>100% Natural</span>
            </div>
            <div class="feature-item">
                <i class="fas fa-heart"></i>
                <span>Cruelty Free</span>
            </div>
            <div class="feature-item">
                <i class="fas fa-truck"></i>
                <span>Free Shipping</span>
            </div>
        </div>
    </section>

    <!-- Featured Categories -->
    <section class="featured-categories">
        <h2>Shop By Category</h2>
        <div class="category-grid">
            <div class="category-card">
                <img src="images/skincare.jpg" alt="Skincare">
                <h3>Skincare</h3>
                <a href="skincare.php">Explore</a>
            </div>
            <div class="category-card">
                <img src="images/makeup.jpg" alt="Makeup">
                <h3>Makeup</h3>
                <a href="makeup.php">Explore</a>
            </div>
            <div class="category-card">
                <img src="images/haircare.jpg" alt="Hair Care">
                <h3>Hair Care</h3>
                <a href="haircare.php">Explore</a>
            </div>
            <div class="category-card">
                <img src="images/fragrance.jpg" alt="Fragrance">
                <h3>Fragrance</h3>
                <a href="fragrance.php">Explore</a>
            </div>
        </div>
    </section>

    <!-- Best Sellers -->
    <section class="best-sellers">
        <h2>Best Sellers</h2>
        <div class="product-grid">
            <div class="product-card">
                <img src="images/product1.jpg" alt="Product 1">
                <h3>Luxury Face Cream</h3>
                <p class="price">$49.99</p>
                <button class="add-to-cart">Add to Cart</button>
            </div>
            <!-- Add more product cards -->
        </div>
    </section>

    <!-- Special Offers -->
    <section class="special-offers">
        <h2>Special Offers</h2>
        <div class="offers-grid">
            <div class="offer-card">
                <h3>Summer Sale</h3>
                <p>Up to 50% off</p>
                <a href="sale.php">Shop Now</a>
            </div>
            <div class="offer-card">
                <h3>New Arrivals</h3>
                <p>Discover Latest Products</p>
                <a href="new-arrivals.php">Explore</a>
            </div>
        </div>
    </section>

    <!-- Brands Section -->
    <section class="brands">
        <h2>Featured Brands</h2>
        <div class="brand-slider">
            <img src="images/brand1.png" alt="Brand 1">
            <img src="images/brand2.png" alt="Brand 2">
            <img src="images/brand3.png" alt="Brand 3">
            <!-- Add more brand images -->
        </div>
    </section>

    

    <script src="js/script.js"></script>

   <?php 
   include './includes/footer.php'; 
   ?>
</body>
</html>
