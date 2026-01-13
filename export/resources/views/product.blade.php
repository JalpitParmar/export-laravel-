<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bhoomi Trade Line | Products</title>

  <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('favicon1.png') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link rel="stylesheet" href="{{ asset('css/product.css') }}">
 
</head>

<body>

<!-- LOADER -->
<div class="loader-wrapper">
  <div class="loader"></div>
</div>

<!-- HEADER -->
@include('header')

<!-- MOBILE MENU OVERLAY -->
<div class="menu-overlay" id="menuOverlay"></div>

<!-- BREADCRUMB -->
<div class="breadcrumb">
  <a href="{{ url('/') }}">Home</a>
  <span>></span>
  <span class="current">Products</span>
</div>

<!-- HERO -->
<section class="products-hero">
  <h2>Our Premium Products</h2>
  <p>
    Discover our wide range of authentic Indian snacks, spices, and pickles
    crafted with tradition and exported globally with excellence.
  </p>
</section>

<!-- PRODUCTS -->
<section class="products-section">
  <div class="products-container">

    <!-- FILTERS -->
    <div class="filters-container">

      <div class="filter-group">
        <label class="filter-label">Category:</label>
        <select class="filter-select" id="categoryFilter">
          <option value="all" {{ $selectedCategory == 'all' ? 'selected' : '' }}>All Categories</option>
          <option value="a2-cow-ghee" {{ $selectedCategory == 'a2-cow-ghee' ? 'selected' : '' }}>A2 Cow Ghee</option>
          <option value="beverages" {{ $selectedCategory == 'beverages' ? 'selected' : '' }}>Beverages</option>
          <option value="cooking-paste-chutney" {{ $selectedCategory == 'cooking-paste-chutney' ? 'selected' : '' }}>Cooking Paste & Chutney</option>
          <option value="dry-bhakhri" {{ $selectedCategory == 'dry-bhakhri' ? 'selected' : '' }}>Dry Bhakhri</option>
          <option value="indian-sweets" {{ $selectedCategory == 'indian-sweets' ? 'selected' : '' }}>Indian Sweets</option>
          <option value="jam" {{ $selectedCategory == 'jam' ? 'selected' : '' }}>Jam</option>
          <option value="namkeen" {{ $selectedCategory == 'namkeen' ? 'selected' : '' }}>Namkeen</option>
          <option value="pickles" {{ $selectedCategory == 'pickles' ? 'selected' : '' }}>Pickles</option>
          <option value="ready-to-eat" {{ $selectedCategory == 'ready-to-eat' ? 'selected' : '' }}>Ready to Eat</option>
          <option value="sauces" {{ $selectedCategory == 'sauces' ? 'selected' : '' }}>Sauces</option>
          <option value="spices-powder" {{ $selectedCategory == 'spices-powder' ? 'selected' : '' }}>Spices Powder</option>
          <option value="whole-spices" {{ $selectedCategory == 'whole-spices' ? 'selected' : '' }}>Whole Spices</option>
        </select>
      </div>

      <div class="filter-group">
        <label class="filter-label">Sort By:</label>
        <select class="filter-select" id="sortFilter">
          <option value="featured" {{ $selectedSort == 'featured' ? 'selected' : '' }}>Featured</option>
          <option value="name" {{ $selectedSort == 'name' ? 'selected' : '' }}>Name</option>
        </select>
      </div>

      <div class="search-box">
        <i class="fas fa-search"></i>
        <input type="text" placeholder="Search products..." id="searchInput">
      </div>
    </div>

    <!-- PRODUCTS GRID -->
    <div class="products-grid" id="productsGrid">

      @if ($products->isEmpty())
        <div class="no-results">
          <h3>No products found</h3>
          <p>Please check back later for new products.</p>
        </div>
      @else
        @foreach ($products as $product)
          <div class="product-card" data-category="{{ $product->category }}">
            <a href="{{ route('products.show', $product->id) }}" style="text-decoration:none;">

              <div class="product-image">
                <img src="{{ asset($product->image_path) }}" alt="{{ $product->product_name }}">
              </div>

              <div class="product-content">
                <div class="product-category">
                  {{ ucwords(str_replace('-', ' ', $product->category)) }}
                </div>

                <h3 class="product-name">{{ $product->product_name }}</h3>

                <p class="product-description">
                  {{ Str::limit($product->description, 100) }}
                </p>

                <p class="product-link">
                  View Details <i class="fas fa-arrow-right"></i>
                </p>
              </div>

            </a>
          </div>
        @endforeach
      @endif

    </div>

    <div class="no-results" id="noResults" style="display:none;">
      <h3>No products found</h3>
      <p>Try adjusting your filters or search.</p>
    </div>

  </div>
</section>

<!-- FOOTER -->
<footer>
  <div class="footer-content">

    <div class="footer-section">
      <img src="{{ asset('assets/footercompanylogo1.jpg') }}" style="height:140px;width:210px;">
      <p>
        Bhoomi Tradeline brings authentic Indian flavors to the world.
      </p>
    </div>

    <div class="footer-section">
      <h3>Contact Info</h3>
      <p><i class="fas fa-map-marker-alt"></i> {{ $contact->business_address }}</p>
      <p><i class="fas fa-phone"></i> +91 {{ $contact->phone_number }}</p>
      <p><i class="fas fa-envelope"></i> {{ $contact->email }}</p>
    </div>

  </div>

  <div class="footer-bottom">
    <p>&copy; {{ date('Y') }} Bhoomi Trade Line | All Rights Reserved</p>
  </div>
</footer>

<!-- JS -->
<script>
  function buildUrl(category, sort) {
    let url = "{{ route('products.index') }}";
    let params = [];

    if (category && category !== 'all') params.push('category=' + category);
    if (sort && sort !== 'featured') params.push('sort=' + sort);

    if (params.length) url += '?' + params.join('&');
    return url;
  }

  document.getElementById('categoryFilter').addEventListener('change', function () {
    window.location.href = buildUrl(this.value, document.getElementById('sortFilter').value);
  });

  document.getElementById('sortFilter').addEventListener('change', function () {
    window.location.href = buildUrl(document.getElementById('categoryFilter').value, this.value);
  });
</script>
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
