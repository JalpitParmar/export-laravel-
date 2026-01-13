<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $product->product_name }} | Bhoomi Trade Line</title>

    <link rel="icon" type="image/png" href="{{ asset('favicon1.png') }}">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link rel="stylesheet" href="{{ asset('css/productdetail.css') }}">
</head>

<body>

<!-- LOADER -->
<div class="loader-wrapper">
    <div class="loader"></div>
</div>

<!-- HEADER -->
@include('header')

<!-- BREADCRUMB -->
<div class="breadcrumb">
    <a href="{{ url('/') }}">Home</a>
    <span>></span>
    <a href="{{ route('products.index') }}">Products</a>
    <span>></span>
    <span class="current">{{ $product->product_name }}</span>
</div>

<!-- PRODUCT DETAIL -->
<section class="product-detail-section">
    <div class="product-detail-container">

        <!-- IMAGE -->
        <div class="product-images">
            <div class="main-image">
                <img src="{{ asset($product->image_path) }}"
                     alt="{{ $product->product_name }}">
            </div>
        </div>

        <!-- INFO -->
        <div class="product-info">

            <div class="product-category">
                {{ ucwords(str_replace('-', ' ', $product->category)) }}
            </div>

            <h1 class="product-name">{{ $product->product_name }}</h1>

            <div class="product-quantity">
                <i class="fas fa-box"></i>
                {{ $product->packet_sizes }}
            </div>

            <!-- DESCRIPTION -->
            <div class="product-tabs">
                <h3>Description</h3>
                <p>{!! nl2br(e($product->description)) !!}</p>
            </div>

            <!-- KEY FEATURES -->
            <div class="product-features">
                <h3>Key Features</h3>
                <ul class="feature-list">
                    @foreach(explode(';', $product->key_features) as $feature)
                        <li>
                            <i class="fas fa-check-circle"></i>
                            {{ trim($feature) }}
                        </li>
                    @endforeach
                </ul>
            </div>

            <!-- WHATSAPP -->
            <div class="product-actions">
                <a target="_blank"
                   class="btn btn-whatsapp"
                   href="https://wa.me/919979755356?text=Hi%20Bhoomi%20Trade%20Line,%20I%20am%20interested%20in%20{{ urlencode($product->product_name) }}">
                    <i class="fab fa-whatsapp"></i>
                    Enquire on WhatsApp
                </a>
            </div>

        </div>
    </div>
</section>

<!-- RELATED PRODUCTS -->
<section class="related-products">
    <div class="related-products-container">
        <h2>Related Products</h2>

        <div  class="products-grid">
            @forelse ($relatedProducts as $r)
                <a href="{{ route('products.show', $r->id) }}" class="product-link-wrapper" class="product-card">
                    <div class="product-image">
                        <img src="{{ asset($r->image_path) }}">
                    </div>
                    <div class="product-content">
                        <div class="product-category">
                            {{ ucwords(str_replace('-', ' ', $r->category)) }}
                        </div>

                        <h3 class="product-name">{{ $r->product_name }}</h3>
                        <p class="product-description">{{ Str::limit($r->description, 80) }}</p>
                        <span class="product-link">View Details →</span>
                    </div>
                </a>
            @empty
                <p>No related products found.</p>
            @endforelse
        </div>
    </div>
</section>

<!-- FOOTER
<footer>
    <div class="footer-content">

        <div class="footer-section">
            <img src="{{ asset('assets/footercompanylogo1.jpg') }}" style="height:140px;">
            <p>Bhoomi Tradeline brings authentic Indian flavors worldwide.</p>
        </div>

        <div class="footer-section">
            <h3>Contact Info</h3>
            <p><i class="fas fa-map-marker-alt"></i> {{ $contact->business_address }}</p>
            <p><i class="fas fa-phone"></i> +91 {{ $contact->phone_number }}</p>
            <p><i class="fas fa-envelope"></i> {{ $contact->email }}</p>
        </div>

    </div>

    <div class="footer-bottom">
        &copy; {{ date('Y') }} Bhoomi Trade Line
    </div>
</footer> -->
<!-- FOOTER -->
  <footer>
    <div class="footer-content">
      <div class="footer-section">
        <img src="{{ asset('assets/footercompanylogo1.jpg') }}" alt="Company Logo" style="height: 140px;width:210px; margin-bottom: 20px;">
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
  <p><i class="fas fa-map-marker-alt"></i> {{ $contact->business_address }}</p>
  <p><i class="fas fa-phone"></i>+91 {{ $contact->phone_number }}</p>
  <p><i class="fas fa-envelope"></i> {{ $contact->email }}</p>
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
