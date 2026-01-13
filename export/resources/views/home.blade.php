<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bhoomi Trade Line | Indian Food Exporter</title>

    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('favicon1.png') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <link rel="stylesheet" href="{{ asset('css/home.css') }}">

    <!-- Google tag -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-N325FL6EWX"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'G-N325FL6EWX');
    </script>
</head>

<body>

{{-- LOADER --}}
<div class="loader-wrapper" id="loaderWrapper">
    <div class="loader"></div>
</div>

{{-- MOBILE MENU OVERLAY --}}
<div class="menu-overlay" id="menuOverlay"></div>

{{-- HEADER --}}
<header id="header">
    <img src="{{ asset('assets/companylogo1.jpg') }}" alt="Company Logo">

    <nav id="nav">
        <a href="#home">Home</a>
        <a href="{{ url('/aboutus') }}">About Us</a>
        <a href="#products">Products</a>
        <a href="#process">Process</a>
        <a href="#mission-values">Mission & Values</a>
        <a href="#certifications">Certifications</a>
        <a href="#contact">Contact</a>
    </nav>

    <button class="mobile-menu-btn" id="mobileMenuBtn">
        <i class="fas fa-bars"></i>
    </button>
</header>

{{-- HERO --}}
<section class="hero" id="home">
    <video autoplay muted loop playsinline class="hero-video">
        <source src="{{ asset('assets/video.mp4') }}" type="video/mp4">
    </video>
    <div class="hero-overlay"></div>

    <div class="hero-content">
        <h2>Delivering India's Taste to the World</h2>
        <p>Your trusted global source for premium Indian food products.</p>
        <a href="#products" class="btn">Explore Products</a>
        <a href="#contact" class="btn btn-secondary">Contact Us</a>
    </div>
</section>

{{-- STATS --}}
<section class="stats">
    <div class="stats-container">
        <div class="stat-item">
            <div class="stat-number">{{ $totalCategories }}+</div>
            <div class="stat-label">Product Categories</div>
        </div>
        <div class="stat-item">
            <div class="stat-number">{{ $totalProducts }}+</div>
            <div class="stat-label">Product Varieties</div>
        </div>
        <div class="stat-item">
            <div class="stat-number">9+</div>
            <div class="stat-label">Global Presence</div>
        </div>
    </div>
</section>
{{-- ABOUT --}}
<section class="about fade-in" id="about">
    <h3 class="section-title">About Us</h3>
    <div class="about-content">
      <div class="about-text">
        <p>At bhoomi trade line, we are dedicated to crafting and exporting authentic Indian snacks, including our signature brand the kesari, while also bringing a variety of other premium Indian products to customers around the world.</p>
        <p>Each product is made with utmost care, blending traditional recipes with modern hygiene and quality standards to ensure consistency and satisfaction. Our commitment to excellence ensures that every snack meets international food safety benchmarks.</p>
        <p>With a focus on quality, taste, and authenticity, bhoomi trade line is your trusted partner for premium Indian snacks and other Indian specialties that delight customers across the globe.</p>
      </div>
      <div class="about-image">
        <img src="{{ asset('assets/about.jpg') }}" alt="About">
      </div>
    </div>
  </section>
{{-- CATEGORIES --}}

<!-- CATEGORIES SECTION -->
<section class="categories fade-in" id="products">
  <h3 class="section-title">Our Product Categories</h3>
  <div class="categories-grid">

    <!-- Namkeen -->
    <a href="{{ route('products.category', 'namkeen') }}" class="category-link-wrapper"  >
      <div class="category">
        <div class="category-image">
          <img src="assets/namkeens.jpg" alt="Namkeen" >
        </div>
        <div class="category-content">
          <h4>Namkeen</h4>
          <p>Authentic Indian savory snacks with traditional recipes.</p>
          <div class="category-link">Explore <i class="fas fa-arrow-right"></i></div>
        </div>
      </div>
    </a>

    <!-- Spices Powder -->
    <a href="{{ route('products.category', 'spices-powder') }}" class="category-link-wrapper">
      <div class="category">
        <div class="category-image">
          <img src="assets/spicespowder.jpg" alt="Spices Powder" onerror="this.src='https://picsum.photos/seed/spices/300/180.jpg'">
        </div>
        <div class="category-content">
          <h4>Spices Powder</h4>
          <p>Finely ground spices for rich aroma and bold flavors.</p>
          <div class="category-link">Explore <i class="fas fa-arrow-right"></i></div>
        </div>
      </div>
    </a>

    <!-- Whole Spices -->
    <a href="{{ route('products.category', 'whole-spices') }}" class="category-link-wrapper">
      <div class="category">
        <div class="category-image">
          <img src="assets/wholespices.jpg" alt="Whole Spices" onerror="this.src='https://picsum.photos/seed/wholespices/300/180.jpg'">
        </div>
        <div class="category-content">
          <h4>Whole Spices</h4>
          <p>Pure, hand-picked whole spices for authentic cooking.</p>
          <div class="category-link">Explore <i class="fas fa-arrow-right"></i></div>
        </div>
      </div>
    </a>

    <!-- Cooking Paste & Chutney -->
    <a href="{{ route('products.category', 'cooking-paste-chutney') }}" class="category-link-wrapper">
      <div class="category">
        <div class="category-image">
          <img src="assets/cooking-paste1.jpg" alt="Cooking Paste & Chutney" onerror="this.src='https://picsum.photos/seed/chutney/300/180.jpg'">
        </div>
        <div class="category-content">
          <h4>Cooking Paste & Chutney</h4>
          <p>Quick, flavorful recipe bases and delicious traditional chutneys.</p>
          <div class="category-link">Explore <i class="fas fa-arrow-right"></i></div>
        </div>
      </div>
    </a>

    <!-- Sauces -->
    <a href="{{ route('products.category', 'sauces') }}" class="category-link-wrapper">
      <div class="category">
        <div class="category-image">
          <img src="{{ asset('assets/sauce1.jpg') }}" alt="Sauce" onerror="this.src='https://picsum.photos/seed/sauce/300/180.jpg'">
        </div>
        <div class="category-content">
          <h4>Sauces</h4>
          <p>Tangy, spicy, and flavour-packed sauces for every taste.</p>
          <div class="category-link">Explore <i class="fas fa-arrow-right"></i></div>
        </div>
      </div>
    </a>

    <!-- Pickles -->
    <a href="{{ route('products.category', 'pickles') }}" class="category-link-wrapper">
      <div class="category">
        <div class="category-image">
          <img src="{{ asset('assets/pickles.jpg') }}" alt="Pickles" onerror="this.src='https://picsum.photos/seed/pickles/300/180.jpg'">
        </div>
        <div class="category-content">
          <h4>Pickles</h4>
          <p>Traditional Indian pickles bursting with bold flavours.</p>
          <div class="category-link">Explore <i class="fas fa-arrow-right"></i></div>
        </div>
      </div>
    </a>

    <!-- Jam -->
    <a href="{{ route('products.category', 'jam') }}" class="category-link-wrapper">
      <div class="category">
        <div class="category-image">
          <img src="{{ asset('assets/jam.jpg') }}" alt="Jam" onerror="this.src='https://picsum.photos/seed/jam/300/180.jpg'">
        </div>
        <div class="category-content">
          <h4>Jam</h4>
          <p>Sweet and fruity spreads made from real fruits.</p>
          <div class="category-link">Explore <i class="fas fa-arrow-right"></i></div>
        </div>
      </div>
    </a>

    <!-- Ready to Eat -->
    <a href="{{ route('products.category', 'ready-to-eat') }}" class="category-link-wrapper">
      <div class="category">
        <div class="category-image">
          <img src="{{ asset('assets/ready-to-eat.jpg') }}" alt="Ready to Eat" onerror="this.src='https://picsum.photos/seed/readytoeat/300/180.jpg'">
        </div>
        <div class="category-content">
          <h4>Ready to Eat</h4>
          <p>Instant meals crafted for convenience without compromise.</p>
          <div class="category-link">Explore <i class="fas fa-arrow-right"></i></div>
        </div>
      </div>
    </a>

    <!-- Dry Bhakhri -->
    <a href="{{ route('products.category', 'dry-bhakhri') }}" class="category-link-wrapper">
      <div class="category">
        <div class="category-image">
          <img src="{{ asset('assets/dry-bhakhri.jpg') }}" alt="Dry Bhakhri" onerror="this.src='https://picsum.photos/seed/bhakhri/300/180.jpg'">
        </div>
        <div class="category-content">
          <h4>Dry Bhakhri & Khakhra</h4>
          <p>Crispy and wholesome Gujarati-style dry bhakhri.</p>
          <div class="category-link">Explore <i class="fas fa-arrow-right"></i></div>
        </div>
      </div>
    </a>

    <!-- Beverages -->
    <a href="{{ route('products.category', 'beverages') }}" class="category-link-wrapper">
      <div class="category">
        <div class="category-image">
          <img src="{{ asset('assets/beverages.jpg') }}" alt="Beverages" onerror="this.src='https://picsum.photos/seed/beverages/300/180.jpg'">
        </div>
        <div class="category-content">
          <h4>Beverages</h4>
          <p>Refreshing drinks crafted to energize and delight.</p>
          <div class="category-link">Explore <i class="fas fa-arrow-right"></i></div>
        </div>
      </div>
    </a>

    <!-- Indian Sweets -->
    <a href="{{ route('products.category', 'indian-sweets') }}" class="category-link-wrapper">
      <div class="category">
        <div class="category-image">
          <img src="{{ asset('assets/indian-sweets.jpg') }}" alt="Indian Sweets" onerror="this.src='https://picsum.photos/seed/sweets/300/180.jpg'">
        </div>
        <div class="category-content">
          <h4>Indian Sweets</h4>
          <p>Traditional mithai made with pure ingredients and love.</p>
          <div class="category-link">Explore <i class="fas fa-arrow-right"></i></div>
        </div>
      </div>
    </a>

    <!-- A2 Cow Ghee -->
    <a href="{{ route('products.category', 'a2-cow-ghee') }}" class="category-link-wrapper">
      <div class="category">
        <div class="category-image">
          <img src="{{ asset('assets/a2-ghee.jpg') }}" alt="A2 Cow Ghee">
        </div>
        <div class="category-content">
          <h4>A2 Cow Ghee</h4>
          <p>Pure and aromatic A2 ghee crafted from indigenous cow milk.</p>
          <div class="category-link">Explore <i class="fas fa-arrow-right"></i></div>
        </div>
      </div>
    </a>

  </div>
</section>
<!-- PROCESS SECTION -->
  <section class="process fade-in" id="process">
    <h3 class="section-title">Our Process</h3>
    <div class="process-container">
      <div class="process-step">
        <div class="step-icon">
          <i class="fas fa-seedling"></i>
        </div>
        <h4 class="step-title">Sourcing</h4>
        <p class="step-description">We source the finest ingredients directly from trusted farmers and suppliers across India.</p>
      </div>
      <div class="process-step">
        <div class="step-icon">
          <i class="fas fa-mortar-pestle"></i>
        </div>
        <h4 class="step-title">Production</h4>
        <p class="step-description">Our state-of-the-art facility combines traditional recipes with modern technology.</p>
      </div>
      <div class="process-step">
        <div class="step-icon">
          <i class="fas fa-vial"></i>
        </div>
        <h4 class="step-title">Quality Testing</h4>
        <p class="step-description">Every batch undergoes rigorous quality testing to ensure it meets our high standards.</p>
      </div>
      <div class="process-step">
        <div class="step-icon">
          <i class="fas fa-shipping-fast"></i>
        </div>
        <h4 class="step-title">Export</h4>
        <p class="step-description">We ensure safe and timely delivery to our global partners with proper packaging.</p>
      </div>
    </div>
  </section>
  <!-- MISSION & VALUES SECTION -->
  <section class="mission-values fade-in" id="mission-values">
    <h3 class="section-title">Our Mission & Values</h3>
    <div class="mission-container">
      <p class="mission-statement">To deliver authentic Indian flavors to the world, crafted with tradition, quality, and care.</p>
    </div>
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

  <!-- CERTIFICATIONS SECTION -->
  <section class="certifications fade-in" id="certifications">
    <h3 class="section-title">Quality & Certifications</h3>
    <p>Our production facilities are globally certified for safety and hygiene. We comply with major food standards, ensuring our customers receive products that meet international export quality.</p>
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

  <!-- CONTACT SECTION -->
<section class="contact fade-in" id="contact">
  <h3 class="section-title" style="color:white;">Get In Touch</h3>
  <div class="contact-container">
    <div class="contact-info">
      <div class="contact-item">
        <div class="contact-icon">
          <i class="fas fa-map-marker-alt"></i>
        </div>
        <div class="contact-details">
          <h4>Our Address</h4>
          <p>{{ $contact->business_address }}</p>
        </div>
      </div>
      <div class="contact-item">
        <div class="contact-icon">
          <i class="fas fa-phone"></i>
        </div>
        <div class="contact-details">
          <h4>Phone</h4>
          <p> +91 {{ $contact->phone_number }}</p>
        </div>
      </div>
      <div class="contact-item">
        <div class="contact-icon">
          <i class="fas fa-envelope"></i>
        </div>
        <div class="contact-details">
          <h4>Email</h4>
          <p>{{ $contact->email }}</p>
        </div>
      </div>
      <div class="contact-item">
        <div class="contact-icon">
          <i class="fas fa-clock"></i>
        </div>
        <div class="contact-details">
          <h4>Business Hours</h4>
          <p>Mon - Sat: 9:00 AM - 7:00 PM</p>
        </div>
      </div>
    </div>
    
    <!-- CONTACT FORM -->
    <div class="contact-form">
      <h4 style="margin-bottom: 20px; font-size: 1.4em;">Send Us a Message</h4>
      <form id="contactForm" action="send_email.php" method="post">
        <div class="form-group">
          <input type="text" name="name" id="name" placeholder="Your Name" required>
        </div>
        <div class="form-group">
          <input type="email" name="email" id="email" placeholder="Your Email" required>
        </div>
        <div class="form-group">
          <textarea name="message" id="message" rows="5" placeholder="Your Message" required></textarea>
        </div>
        <button type="submit" class="btn" style="width: 100%; padding: 15px; border: none; margin-top: 10px;">Send Message</button>
      </form>
      <div id="formMessage" style="margin-top: 15px; padding: 10px; border-radius: 5px; display: none;"></div>
    </div>
  </div>
</section>

{{-- FOOTER --}}
<footer>
    <div class="footer-content">
      <div class="footer-section">
        <img src="assets/footercompanylogo1.jpg" alt="Company Logo" style="height: 140px;width:210px; margin-bottom: 20px;">
        <p>Bhoomi Tradeline is a new venture dedicated to bringing authentic Indian flavors to the world. Through our flagship brand "The Kesari" and carefully selected partner brands, we're committed to delivering quality Indian snacks globally.</p>
        <div class="social-links">
          <a href="https://www.facebook.com/share/17hewC2ecM/" class="social-link">
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
          <li><a href="{{ url('/shipping-policy') }}">Shipping Policy</a></li>
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
  <p><i class="fas fa-map-marker-alt"></i> <?= htmlspecialchars($contact['business_address']) ?></p>
  <p><i class="fas fa-phone"></i>+91 <?= htmlspecialchars($contact['phone_number']) ?></p>
  <p style="font-size:15px;"><i class="fas fa-envelope"></i> <?= htmlspecialchars($contact['email']) ?> </p>
  <p><i class="fas fa-globe"></i> www.bhoomitradeline.com</p><br/>
  <!--<a href="login.php" class="admin-btn">admin login</a>-->
</div>
    </div>
    <div class="footer-bottom">
      <p>&copy; 2025 Bhoomi Trade Line | All Rights Reserved | Privacy Policy | Terms of Service</p>
    </div>
  </footer>

{{-- JS --}}
<script src="{{ asset('js/index.js') }}"></script>
<script>
  document.addEventListener('DOMContentLoaded', function () {
    const loader = document.querySelector('.loader-wrapper');

    // Minimum visible time for smooth UX
    setTimeout(() => {
      loader.classList.add('hidden');
    }, 400);
  });
</script>
</body>
</html>
