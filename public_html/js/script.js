// Main JavaScript file (script.js)

document.addEventListener('DOMContentLoaded', function() {
    // Cart Counter Animation
    function updateCartCount(count) {
        const cartCount = document.querySelector('.cart-count');
        if (cartCount) {
            cartCount.textContent = count;
            cartCount.classList.add('bounce');
            setTimeout(() => cartCount.classList.remove('bounce'), 300);
        }
    }

    // Sticky Navigation
    const mainNav = document.querySelector('.main-nav');
    const headerHeight = document.querySelector('.main-header').offsetHeight;
    let isSticky = false;

    window.addEventListener('scroll', () => {
        if (window.scrollY > headerHeight && !isSticky) {
            mainNav.classList.add('sticky');
            isSticky = true;
        } else if (window.scrollY <= headerHeight && isSticky) {
            mainNav.classList.remove('sticky');
            isSticky = false;
        }
    });

    let resizeTimer;
    window.addEventListener('resize', function() {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(function() {
            if (window.innerWidth > 992) {
                mobileToggle.classList.remove('active');
                navList.classList.remove('active');
                body.style.overflow = '';
                
                // Reset all mega menus
                document.querySelectorAll('.mega-menu').forEach(menu => {
                    menu.classList.remove('active');
                });
            }
        }, 250);
    });
});

    // Search Bar Autocomplete
    const searchInput = document.querySelector('.search-bar input');
    const searchResults = document.createElement('div');
    searchResults.className = 'search-results';
    searchInput.parentElement.appendChild(searchResults);

    searchInput.addEventListener('input', debounce(function(e) {
        const query = e.target.value.trim();
        if (query.length > 2) {
            // Simulate API call for search suggestions
            simulateSearchResults(query);
        } else {
            searchResults.style.display = 'none';
        }
    }, 300));

    // Close search results when clicking outside
    document.addEventListener('click', (e) => {
        if (!e.target.closest('.search-bar')) {
            searchResults.style.display = 'none';
        }
    });

    // Mobile Menu Toggle
    const mobileMenuBtn = document.createElement('button');
    mobileMenuBtn.className = 'mobile-menu-btn';
    mobileMenuBtn.innerHTML = '<i class="fas fa-bars"></i>';
    document.querySelector('.main-nav .container').prepend(mobileMenuBtn);

    mobileMenuBtn.addEventListener('click', () => {
        document.querySelector('.nav-list').classList.toggle('active');
    });

    // Currency Selector
    const currencySelector = document.querySelector('.currency-selector');
    currencySelector.addEventListener('change', function(e) {
        const selectedCurrency = e.target.value;
        // Simulate currency change
        console.log(`Currency changed to ${selectedCurrency}`);
        // Here you would typically trigger a function to update prices
        updatePricesForCurrency(selectedCurrency);
    });

    // Shopping Cart Preview
    const cartIcon = document.querySelector('.cart');
    const cartPreview = document.createElement('div');
    cartPreview.className = 'cart-preview';
    cartIcon.appendChild(cartPreview);

    cartIcon.addEventListener('mouseenter', () => {
        // Simulate fetching cart data
        loadCartPreview();
    });

    // Mega Menu Enhancement
    const navItems = document.querySelectorAll('.nav-item');
    navItems.forEach(item => {
        const megaMenu = item.querySelector('.mega-menu');
        if (megaMenu) {
            item.addEventListener('mouseenter', () => {
                positionMegaMenu(item, megaMenu);
            });
        }
    });

    // Utility Functions
    function debounce(func, wait) {
        let timeout;
        return function executedFunction(...args) {
            const later = () => {
                clearTimeout(timeout);
                func(...args);
            };
            clearTimeout(timeout);
            timeout = setTimeout(later, wait);
        };
    }

    function simulateSearchResults(query) {
        // Simulate API call with dummy data
        const dummyResults = [
            'Luxury Face Cream',
            'Hydrating Serum',
            'Matte Lipstick',
            'Eye Shadow Palette'
        ].filter(item => item.toLowerCase().includes(query.toLowerCase()));

        if (dummyResults.length > 0) {
            searchResults.innerHTML = dummyResults
                .map(result => `<div class="search-item">${result}</div>`)
                .join('');
            searchResults.style.display = 'block';
        } else {
            searchResults.style.display = 'none';
        }
    }

    function loadCartPreview() {
        // Simulate cart data
        const cartData = {
            items: [
                { name: 'Luxury Face Cream', price: '$49.99', quantity: 1 },
                { name: 'Hydrating Serum', price: '$35.99', quantity: 2 }
            ],
            total: '$121.97'
        };

        cartPreview.innerHTML = `
            <div class="cart-preview-content">
                ${cartData.items.map(item => `
                    <div class="cart-item">
                        <span>${item.name}</span>
                        <span>${item.quantity}x ${item.price}</span>
                    </div>
                `).join('')}
                <div class="cart-total">
                    <strong>Total:</strong> ${cartData.total}
                </div>
                <a href="cart.php" class="view-cart-btn">View Cart</a>
            </div>
        `;
    }

    function positionMegaMenu(item, megaMenu) {
        const nav = document.querySelector('.main-nav');
        const navRect = nav.getBoundingClientRect();
        const itemRect = item.getBoundingClientRect();
        
        megaMenu.style.left = `${itemRect.left - navRect.left}px`;
        megaMenu.style.minWidth = `${Math.max(itemRect.width, 250)}px`;
    }

    function updatePricesForCurrency(currency) {
        // Implement currency conversion logic here
        const conversionRates = {
            USD: 1,
            EUR: 0.85,
            GBP: 0.73
        };
        // Update prices throughout the site
    }



document.addEventListener('DOMContentLoaded'), function() {
    // Newsletter Form Submission
    const newsletterForm = document.getElementById('newsletter-form');
    const newsletterMessage = document.querySelector('.newsletter-message');

    if (newsletterForm) {
        newsletterForm.addEventListener('submit', function(e) {
            e.preventDefault();
            const email = this.querySelector('input[type="email"]').value;
            
            // Validate email
            if (!isValidEmail(email)) {
                showNewsletterMessage('Please enter a valid email address', 'error');
                return;
            }

            // Simulate API call
            simulateNewsletterSignup(email);
        });
    }

    document.addEventListener('DOMContentLoaded', function() {
        const backToTopButton = document.getElementById('back-to-top');
    
        window.addEventListener('scroll', function() {
            if (window.pageYOffset > 300) {
                backToTopButton.classList.add('show');
            } else {
                backToTopButton.classList.remove('show');
            }
        });

        backToTopButton.addEventListener('click', function() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    });
    // Social Media Share Links
    const socialLinks = document.querySelectorAll('.social-link');
    socialLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            const network = this.getAttribute('data-network');
            if (network) {
                openShareWindow(network);
            }
        });
    });

    // Footer Link Hover Animation
    const footerLinks = document.querySelectorAll('.footer-links a');
    footerLinks.forEach(link => {
        link.addEventListener('mouseenter', function() {
            this.style.transform = 'translateX(5px)';
            this.style.transition = 'transform 0.3s ease';
        });

        link.addEventListener('mouseleave', function() {
            this.style.transform = 'translateX(0)';
        });
    });

    // Utility Functions
    function isValidEmail(email) {
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailRegex.test(email);
    }

    function showNewsletterMessage(message, type = 'success') {
        if (newsletterMessage) {
            newsletterMessage.textContent = message;
            newsletterMessage.className = 'newsletter-message ' + type;
            newsletterMessage.style.color = type === 'success' ? '#4CAF50' : '#f44336';
            
            // Clear message after 5 seconds
            setTimeout(() => {
                newsletterMessage.textContent = '';
                newsletterMessage.className = 'newsletter-message';
            }, 5000);
        }
    }

    function simulateNewsletterSignup(email) {
        // Simulate API call delay
        const button = newsletterForm.querySelector('button');
        const originalText = button.innerHTML;
        
        button.disabled = true;
        button.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Subscribing...';

        setTimeout(() => {
            showNewsletterMessage('Thank you for subscribing! 🎉 Check your email for confirmation.');
            button.disabled = false;
            button.innerHTML = originalText;
            newsletterForm.reset();
        }, 1500);
    }

    function openShareWindow(network) {
        const url = encodeURIComponent(window.location.href);
        const title = encodeURIComponent(document.title);
        let shareUrl;

        switch(network) {
            case 'facebook':
                shareUrl = `https://www.facebook.com/sharer/sharer.php?u=${url}`;
                break;
            case 'twitter':
                shareUrl = `https://twitter.com/intent/tweet?url=${url}&text=${title}`;
                break;
            case 'pinterest':
                shareUrl = `https://pinterest.com/pin/create/button/?url=${url}&description=${title}`;
                break;
            // Add more social networks as needed
        }

        if (shareUrl) {
            window.open(shareUrl, 'Share', 'width=600,height=400,location=0,menubar=0');
        }
    }

// Lazy Loading for Footer Images (if any)
const footerImages = document.querySelectorAll('.footer-img[data-src]');

if ('IntersectionObserver' in window) {
    const imageObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const img = entry.target;
                img.src = img.dataset.src;
                img.classList.add('loaded');
                observer.unobserve(img); // Stop observing the image once it's loaded
            }
        });
    }, {
        root: null, // Use viewport as root
        rootMargin: '50px 0px', // Start loading images 50px before they enter viewport
        threshold: 0.1 // Trigger when even 10% of the image is visible
    });

    footerImages.forEach(img => {
        imageObserver.observe(img);
    });
} else {
    // Fallback for browsers that don't support Intersection Observer
    footerImages.forEach(img => {
        img.src = img.dataset.src;
        img.classList.add('loaded');
    });
}
}

// Add hover effect to buttons
const buttons = document.querySelectorAll('.cta-primary, .cta-secondary');
buttons.forEach(button => {
    button.addEventListener('mouseover', () => {
        button.style.transform = 'translateY(-3px)';
    });
    
    button.addEventListener('mouseout', () => {
        button.style.transform = 'translateY(0)';
    });
});

// Add smooth scroll for mobile
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});
  // Hero Section Animations
  document.addEventListener('DOMContentLoaded', () => {
      // Animate floating elements
      const floatingElements = document.querySelectorAll('.floating-element');
    
      floatingElements.forEach(element => {
          element.style.animationDuration = `${Math.random() * 2 + 4}s`;
      });

      // Smooth scroll for CTA buttons
      const ctaButtons = document.querySelectorAll('.cta-primary, .cta-secondary');
    
      ctaButtons.forEach(button => {
          button.addEventListener('click', (e) => {
              e.preventDefault();
              const target = button.getAttribute('href');
              if (target) {
                  document.querySelector(target).scrollIntoView({
                      behavior: 'smooth'
                  });
              }
          });
      });

      // Add hover effect for feature items
      const featureItems = document.querySelectorAll('.feature-item');
    
      featureItems.forEach(item => {
          item.addEventListener('mouseenter', () => {
              item.style.transform = 'translateY(-5px)';
              item.style.transition = 'transform 0.3s ease';
          });
        
          item.addEventListener('mouseleave', () => {
              item.style.transform = 'translateY(0)';
          });
      });
  });

  // Optional: Add parallax effect to floating elements
  window.addEventListener('mousemove', (e) => {
      const floatingElements = document.querySelectorAll('.floating-element');
    
      floatingElements.forEach(element => {
          const speed = element.getAttribute('data-speed') || 0.05;
          const x = (window.innerWidth - e.pageX * speed) / 100;
          const y = (window.innerHeight - e.pageY * speed) / 100;
        
          element.style.transform = `translateX(${x}px) translateY(${y}px)`;
      });
  });
