
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Us | Bhoomi Tradeline</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/aboutus.css') }}">
  <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-N325FL6EWX"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-N325FL6EWX');
</script>
</head>

<body>
  <!-- MOBILE MENU OVERLAY -->
  <div class="menu-overlay" id="menuOverlay"></div>
@include('header')


  <!-- HEADER -->
  <header id="header">
    <a href="index.php"><img src="assets/companylogo1.jpg" alt="Company Logo"></a>
    <nav id="nav">
      <a href="index.php">Home</a>
      <a href="about.php">About</a>
      <a href="index.php#products">Products</a>
      <a href="index.php#process">Process</a>
      <a href="index.php#mission-values">Mission & Values</a>
      <a href="index.php#certifications">Certifications</a>
      <a href="index.php#contact">Contact</a>
    </nav>
    <button class="mobile-menu-btn" id="mobileMenuBtn">
      <i class="fas fa-bars"></i>
    </button>
  </header>

  <!-- PAGE BANNER -->
  <section class="page-banner">
    <h1>About Us</h1>
    <div class="breadcrumb">
      <a href="index.php">Home</a> / <span>About Us</span>
    </div>
  </section>

  <!-- STATS SECTION -->
  <section class="stats-section">
    <h3 class="section-title">Our Global Impact</h3>
    <div class="stats-container">
      <div class="stat-item">
        <div class="stat-number">{{ $totalProducts }}+</div>
        <div class="stat-label">Premium Products</div>
      </div>
      <div class="stat-item">
        <div class="stat-number">{{ $totalCategories }}+</div>
        <div class="stat-label">Product Categories</div>
      </div>
      <div class="stat-item">
        <div class="stat-number">9+</div>
        <div class="stat-label">Export Countries</div>
      </div>
      
    </div>
  </section>

  <!-- ABOUT STORY SECTION -->
  <section class="about-story">
    <h3 class="section-title">Our Story</h3>
    <div class="story-content">
      <p>Bhoomi Tradeline is a new venture born from a passion for authentic Indian flavors and a vision to share the rich culinary heritage of India with the world. Founded by food enthusiasts who believe in the power of traditional recipes and quality ingredients, we're embarking on an exciting journey to bring the finest Indian snacks to global markets.</p>
      <p>While we may be new to the export business, our team brings together decades of combined experience in food production, quality control, and international trade. We understand the importance of maintaining authentic taste profiles while meeting international quality standards.</p>
      <p>Our commitment to excellence drives us to source the finest ingredients, follow time-tested recipes, and implement rigorous quality control measures. We're not just building a business; we're creating a bridge between Indian culinary traditions and global food enthusiasts.</p>
    </div>
  </section>

  <!-- BRAND SECTION -->
  <section class="brand-section">
    <h3 class="section-title">Our Flagship Brand - The Kesari</h3>
    <div class="brand-container">
      <div class="brand-image">
        <img src="assets/brand-logo.jpg" alt="The Kesari Product">
      </div>
      <div class="brand-text">
        <h3>The Kesari - A taste of it's own</h3>
        <p>Our flagship brand, "The Kesari," embodies the essence of Indian snacking traditions. Inspired by the royal kitchens of India, The Kesari brings you authentic namkeen that captures the perfect balance of spices, crunch, and flavor.</p>
        <p>Each product under The Kesari brand is carefully crafted using traditional recipes passed down through generations. Our signature Chaat Chevdo is just the beginning of our journey to introduce the world to the diverse and delightful world of Indian snacks.</p>
        <p>The vibrant yellow, black, and orange packaging reflects the energy and richness of Indian culture, while the quality seals inside ensure that every bite delivers the authentic taste of India, no matter where in the world you are.</p>
      </div>
    </div>
  </section>

  <!-- GLOBAL REACH SECTION -->
  <section class="global-reach">
    <h3 class="section-title">Our Global Reach</h3>
    <div class="reach-container">
      <div class="world-map"></div>
      <div class="countries-grid">
        <div class="country-item">
          <div class="country-flag">
            <img src="https://flagcdn.com/w40/au.png" alt="Australia">
          </div>
          <div class="country-name">Australia</div>
        </div>
        <div class="country-item">
          <div class="country-flag">
            <img src="https://flagcdn.com/w40/nz.png" alt="New Zealand">
          </div>
          <div class="country-name">New Zealand</div>
        </div>
        <div class="country-item">
          <div class="country-flag">
            <img src="https://flagcdn.com/w40/ca.png" alt="Canada">
          </div>
          <div class="country-name">Canada</div>
        </div>
        <div class="country-item">
          <div class="country-flag">
            <img src="https://flagcdn.com/w40/ae.png" alt="Dubai">
          </div>
          <div class="country-name">Dubai</div>
        </div>
        <div class="country-item">
          <div class="country-flag">
            <img src="https://flagcdn.com/w40/bh.png" alt="Bahrain">
          </div>
          <div class="country-name">Bahrain</div>
        </div>
        <div class="country-item">
          <div class="country-flag">
            <img src="https://flagcdn.com/w40/za.png" alt="South Africa">
          </div>
          <div class="country-name">South Africa</div>
        </div>
        <div class="country-item">
          <div class="country-flag">
            <img src="https://flagcdn.com/w40/sg.png" alt="Singapore">
          </div>
          <div class="country-name">Singapore</div>
        </div>
        <div class="country-item">
          <div class="country-flag">
            <img src="https://flagcdn.com/w40/us.png" alt="USA">
          </div>
          <div class="country-name">USA</div>
        </div>
      </div>
    </div>
  </section>

  <!-- MISSION VISION SECTION -->
  <section class="mission-vision">
    <h3 class="section-title">Mission & Vision</h3>
    <div class="mission-vision-container">
      <div class="mission-vision-item">
        <div class="mission-vision-icon">
          <i class="fas fa-bullseye"></i>
        </div>
        <h4 class="mission-vision-title">Our Mission</h4>
        <p class="mission-vision-description">To deliver authentic Indian flavors to the world, crafted with tradition, quality, and care. We strive to become a trusted name in the global food market by consistently providing products that exceed customer expectations.</p>
      </div>
      <div class="mission-vision-item">
        <div class="mission-vision-icon">
          <i class="fas fa-eye"></i>
        </div>
        <h4 class="mission-vision-title">Our Vision</h4>
        <p class="mission-vision-description">To be the global ambassador of Indian culinary heritage, making authentic Indian snacks a beloved part of every culture worldwide. We aim to grow from a new venture to a recognized leader in the Indian snack export industry.</p>
      </div>
    </div>
  </section>

  <!-- VALUES SECTION -->
  <section class="values">
    <h3 class="section-title">Our Core Values</h3>
    <div class="values-container">
      <div class="value-item">
        <div class="value-icon">
          <i class="fas fa-award"></i>
        </div>
        <h4 class="value-title">Quality First</h4>
        <p class="value-description">Every product meets the highest safety and taste standards.</p>
      </div>
      <div class="value-item">
        <div class="value-icon">
          <i class="fas fa-handshake"></i>
        </div>
        <h4 class="value-title">Customer Commitment</h4>
        <p class="value-description">We build long-term relationships through trust and satisfaction.</p>
      </div>
      <div class="value-item">
        <div class="value-icon">
          <i class="fas fa-balance-scale"></i>
        </div>
        <h4 class="value-title">Integrity</h4>
        <p class="value-description">We operate with honesty and transparency in every step.</p>
      </div>
      <div class="value-item">
        <div class="value-icon">
          <i class="fas fa-lightbulb"></i>
        </div>
        <h4 class="value-title">Innovation</h4>
        <p class="value-description">Blending traditional recipes with modern excellence.</p>
      </div>
      <div class="value-item">
        <div class="value-icon">
          <i class="fas fa-leaf"></i>
        </div>
        <h4 class="value-title">Sustainability</h4>
        <p class="value-description">Committed to eco-friendly practices in production and packaging.</p>
      </div>
    </div>
  </section>

  <!-- QUALITY ASSURANCE SECTION -->
  <section class="quality-assurance">
    <h3 class="section-title">Quality Assurance</h3>
    <div class="quality-intro">
      <p>At Bhoomi Tradeline, quality is not just a promise – it's the foundation of everything we do. We bring the authentic taste of India to the world through our diverse range of 150+ products across 13+ categories, ensuring each item meets the highest standards of safety, freshness, and flavor.</p>
    </div>
    
    <div class="product-categories">
  <div class="product-category">
    <i class="fas fa-cookie-bite"></i>
    <span>Namkeen</span>
  </div>
  <div class="product-category">
    <i class="fas fa-mortar-pestle"></i>
    <span>Spices Powder</span>
  </div>
  <div class="product-category">
    <i class="fas fa-seedling"></i>
    <span>Whole Spices</span>
  </div>
  <div class="product-category">
    <i class="fas fa-pepper-hot"></i>
    <span>Cooking Paste & Chutney</span>
  </div>
  <div class="product-category">
    <i class="fas fa-jar"></i>
    <span>Sauces</span>
  </div>
  <div class="product-category">
    <i class="fas fa-vial"></i>
    <span>Pickles</span>
  </div>
  <div class="product-category">
    <i class="fas fa-apple-alt"></i>
    <span>Jam</span>
  </div>
  <div class="product-category">
    <i class="fas fa-utensils"></i>
    <span>Ready to Eat</span>
  </div>
  <div class="product-category">
    <i class="fas fa-bread-slice"></i>
    <span>Dry Bhakhri & Khakhra</span>
  </div>
  <div class="product-category">
    <i class="fas fa-circle-notch"></i>
    <span>Khakhra</span>
  </div>
  <div class="product-category">
    <i class="fas fa-cookie"></i>
    <span>Dry Kachori</span>
  </div>
  <div class="product-category">
    <i class="fas fa-coffee"></i>
    <span>Beverages</span>
  </div>
  <div class="product-category">
    <i class="fas fa-candy-cane"></i>
    <span>Indian Sweets</span>
  </div>
  <div class="product-category">
    <i class="fas fa-tint"></i>
    <span>A2 Cow Ghee</span>
  </div>
</div>

    <div class="quality-process">
      <div class="quality-step">
        <div class="quality-icon">
          <i class="fas fa-search"></i>
        </div>
        <h4 class="quality-title">Ingredient Sourcing</h4>
        <p class="quality-description">We meticulously source the finest ingredients from trusted suppliers across India. Each ingredient undergoes strict quality checks before entering our production facility, ensuring only the best reaches our customers.</p>
      </div>
      <div class="quality-step">
        <div class="quality-icon">
          <i class="fas fa-microscope"></i>
        </div>
        <h4 class="quality-title">Laboratory Testing</h4>
        <p class="quality-description">Our in-house laboratory conducts comprehensive testing at every stage – from raw materials to finished products. We test for purity, freshness, and adherence to international food safety standards.</p>
      </div>
      <div class="quality-step">
        <div class="quality-icon">
          <i class="fas fa-shield-alt"></i>
        </div>
        <h4 class="quality-title">Production Standards</h4>
        <p class="quality-description">Our production facility follows GMP (Good Manufacturing Practices) with strict hygiene protocols. Each product category has specialized handling procedures to maintain authenticity and quality.</p>
      </div>
      <div class="quality-step">
        <div class="quality-icon">
          <i class="fas fa-box"></i>
        </div>
        <h4 class="quality-title">Packaging & Storage</h4>
        <p class="quality-description">We use food-grade packaging materials that preserve freshness and extend shelf life. Our climate-controlled storage facilities maintain optimal conditions for different product categories until shipment.</p>
      </div>
    </div>

    <div class="quality-standards">
      <h4 class="standards-title">Our Quality Standards</h4>
      <div class="standards-grid">
        <div class="standard-item">
          <div class="standard-icon">
            <i class="fas fa-check"></i>
          </div>
          <div class="standard-text">FSSAI Compliant</div>
        </div>
        <div class="standard-item">
          <div class="standard-icon">
            <i class="fas fa-check"></i>
          </div>
          <div class="standard-text">ISO Standards</div>
        </div>
      </div>
    </div>
  </section>

  <!-- CERTIFICATIONS SECTION -->
  <section class="certifications">
    <h3 class="section-title">Quality & Certifications</h3>
    <p>As a new company, we are in the process of obtaining international certifications. Our production processes are designed to meet global food safety standards, and we're committed to achieving certifications including ISO, FSSAI, HACCP, and BRC to ensure our products meet the highest quality benchmarks.</p>
    <div class="certification-logos">
      <div class="certification-item">
        <img src="assets/iso.png" alt="ISO">
      </div>
      <div class="certification-item">
        <img src="assets/fssai.png" alt="FSSAI">
      </div>
      <div class="certification-item">
        <img src="assets/apeda.png" alt="APEDA">
      </div>
      <div class="certification-item">
        <img src="assets/spiceboard.png" alt="SPICEBOARD">
      </div>
      <div class="certification-item">
        <img src="assets/ce.jpg" alt="CE">
      </div>
    </div>
  </section>

  <!-- FOOTER -->
  <footer>
    <div class="footer-content">
      <div class="footer-section">
        <img src="assets/footercompanylogo1.jpg" alt="Company Logo" style="height: 140px;width:210px; margin-bottom: 20px;">
        <p>Bhoomi Tradeline is a new venture dedicated to bringing authentic Indian flavors to the world. Through our flagship brand "The Kesari" and carefully selected partner brands, we're committed to delivering quality Indian snacks globally.</p>
        <div class="social-links">
          <a href="https://www.facebook.com/thekesrinamkeen" class="social-link">
              <i class="fab fa-facebook-f"></i>
          </a>
          <a href="https://www.instagram.com/thekesrinamkeen" class="social-link">
              <i class="fab fa-instagram"></i>
          </a>
        </div>
      </div>
      <div class="footer-section">
        <h3>Quick Links</h3>
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="aboutus.php">About Us</a></li>
          <li><a href="shipping-policy.php">Shipping Policy</a></li>
          <li><a href="index.php#products">Products</a></li>
          <li><a href="index.php#process">Our Process</a></li>
          <li><a href="index.php#mission-values">Mission & Values</a></li>
          <li><a href="index.php#certifications">Certifications</a></li>
          <li><a href="index.php#contact">Contact Us</a></li>
        </ul>
      </div>
      <div class="footer-section">
        <h3>Products</h3>
        <ul>
          <li><a href="product.php?category=namkeen">Namkeen</a></li>
          <li><a href="product.php?category=Spices-Powder">Spices Powder</a></li>
          <li><a href="product.php?category=Whole-Spices">Whole Spices</a></li>
          <li><a href="product.php?category=Jam">Jam</a></li>
          <li><a href="product.php?category=pickles">Pickles</a></li>
          <li><a href="product.php?category=Ready-to-Eat">Ready to Eat</a></li>
          <li><a href="product.php?category=Sauces">Sauces</a></li>
          <li><a href="product.php?category=Beverages">Beverages</a></li>
          <li><a href="product.php?category=Dry-Bhakhri">Dry Bhakhri</a></li>
          <li><a href="product.php?category=Indian-Sweets">Indian Sweets</a></li>
        </ul>
      </div>
      <div class="footer-section">
  <h3>Contact Info</h3>
  <p><i class="fas fa-map-marker-alt"></i> {{ $contact->business_address}}</p>
  <p><i class="fas fa-phone"></i>+91 {{ $contact->phone_number }}</p>
  <p><i class="fas fa-envelope"></i> {{ $contact->email }} </p>
  <p><i class="fas fa-globe"></i> www.bhoomitradeline.com</p><br/>
</div>
    </div>
    <div class="footer-bottom">
      <p>&copy; 2025 Bhoomi Trade Line | All Rights Reserved | Privacy Policy | Terms of Service</p>
    </div>
  </footer>

  <!-- WHATSAPP BUTTON -->
  <a href="https://wa.me/+919979755356?text=Hi%20Bhoomi%20Trade%20Line%2C%20I'm%20interested%20in%20your%20products."
     target="_blank" 
     class="whatsapp-btn" 
     id="whatsappBtn">
    <i class="fab fa-whatsapp"></i>
  </a>

  <!-- BACK TO TOP BUTTON -->
  <div class="back-to-top" id="backToTop">
    <i class="fas fa-arrow-up"></i>
  </div>

  <script>
    // MOBILE MENU
    const mobileMenuBtn = document.getElementById('mobileMenuBtn');
    const nav = document.getElementById('nav');
    const menuOverlay = document.getElementById('menuOverlay');

    // Function to open menu
    function openMenu() {
      nav.classList.add('active');
      menuOverlay.classList.add('active');
      document.body.style.overflow = 'hidden'; // Prevent scrolling when menu is open
      
      // Change hamburger icon to close icon
      mobileMenuBtn.innerHTML = '<i class="fas fa-times"></i>';
    }

    // Function to close menu
    function closeMenu() {
      nav.classList.remove('active');
      menuOverlay.classList.remove('active');
      document.body.style.overflow = ''; // Restore scrolling
      
      // Change close icon back to hamburger icon
      mobileMenuBtn.innerHTML = '<i class="fas fa-bars"></i>';
    }

    // Toggle menu when clicking the button
    mobileMenuBtn.addEventListener('click', function() {
      if (nav.classList.contains('active')) {
        closeMenu();
      } else {
        openMenu();
      }
    });

    // Close menu when clicking on overlay
    menuOverlay.addEventListener('click', closeMenu);

    // CLOSE MOBILE MENU WHEN CLICKING ON A LINK
    document.querySelectorAll('#nav a').forEach(link => {
      link.addEventListener('click', closeMenu);
    });

    // STICKY HEADER
    window.addEventListener('scroll', function() {
      const header = document.getElementById('header');
      if (window.scrollY > 100) {
        header.classList.add('scrolled');
      } else {
        header.classList.remove('scrolled');
      }
    });

    // BACK TO TOP BUTTON
    const backToTop = document.getElementById('backToTop');

    window.addEventListener('scroll', function() {
      if (window.scrollY > 500) {
        backToTop.classList.add('active');
      } else {
        backToTop.classList.remove('active');
      }
    });

    backToTop.addEventListener('click', function() {
      window.scrollTo({
        top: 0,
        behavior: 'smooth'
      });
    });

    // WHATSAPP BUTTON VISIBILITY
    const whatsappBtn = document.getElementById('whatsappBtn');

    window.addEventListener('scroll', function() {
      if (window.scrollY > 300) {
        whatsappBtn.classList.add('active');
      } else {
        whatsappBtn.classList.remove('active');
      }
    });
  </script>
</body>
</html>