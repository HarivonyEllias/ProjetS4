<?php
  if (session() -> has('customerId')) {
    $customerId = session() -> get('customerId');
  }
  // helper('Product_helper');

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>RAPHIA</title>

  <!--
    - favicon
  -->
  <link rel="shortcut icon" href="<?php echo base_url('assets/home/images/logo/favicon.ico'); ?>" type="image/x-icon">

  <!--
    - custom css link
  -->
  <link rel="stylesheet" href="<?php echo base_url('assets/home/css/style-prefix.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/home/css/exception.css'); ?>">

  <!--
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

</head>

<body>


  <div class="overlay" data-overlay></div>

  <header style="z-index:4;position:fixed;width:100%;background:white;top:0">

    <div class="header-top">

      <div class="container">

        <ul class="header-social-container">

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-facebook"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-twitter"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-instagram"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-linkedin"></ion-icon>
            </a>
          </li>

        </ul>

        <div class="header-alert-news">
          <p>
            <b>Free Shipping</b>
            This Week Order Over - $55
          </p>
        </div>

        <div class="header-top-actions">

          <select name="currency">

          <option value="usd">USD &#36;</option>
            <option value="eur">EUR &#8364;</option>
            <option value="mad">Ariary &#8373;</option>s

          </select>

          <select name="language">

            <option value="en-US">English</option>
            <option value="es-ES">Espa&ntilde;ol</option>
            <option value="fr">Fran&ccedil;ais</option>

          </select>

        </div>

      </div>

    </div>

    <div class="header-main">

      <div class="container">

        <a href="#" id="logo" class="header-logo" style="font-size:15px;color:grey">
          <H1>RAPHIA.COM</H1>
        </a>

        <div class="header-search-container">

              <input type="search" name="productName" class="search-field" id="search" placeholder="Enter your product name...">

              <button class="search-btn" type="submit">
                <ion-icon name="search-outline"></ion-icon>
              </button>

        </div>

        <div class="header-user-actions">

        <a href="#" class="action-btn">
          <ion-icon name="person"></ion-icon>
        </a>

          <button class="action-btn">
            <ion-icon name="heart-outline"></ion-icon>
            <span class="count">2</span>
          </button>

          <button class="action-btn">
            <ion-icon name="bag-handle-outline"></ion-icon>
            <span class="count">0</span>
          </button>

        </div>

      </div>

    </div>

    <nav class="desktop-navigation-menu">

      <div class="container">

        <ul class="desktop-menu-category-list">

          <li class="menu-category">
            <a href="#" class="menu-title"></a>
          </li>

          <li class="menu-category">
            <a href="/" class="menu-title">Home</a>
          </li>

          <li class="menu-category">
            <a href="#" class="menu-title">Categories</a>

            <ul class="dropdown-list">

                <li class="dropdown-item">
                  <a href="#">none</a>
                </li>

            </ul>
          </li>

          <li class="menu-category">
            <a href="#" class="menu-title">none</a>

            <ul class="dropdown-list">
                <li class="dropdown-item">
                  <a href="#">Product</a>
                </li>
            </ul>

          </li>

          <li class="menu-category">
            <a href="#" class="menu-title">Name</a>

            <ul class="dropdown-list">

                <li class="dropdown-item">
                  <a href="#">NM</a>
                </li>

            </ul>
          </li>

          <li class="menu-category">
            <a href="#" class="menu-title">Name</a>
            <ul class="dropdown-list">

                <li class="dropdown-item">
                  <a href="#">Product</a>
                </li>

            </ul>
          </li>

          <li class="menu-category">
            <a href="#" class="menu-title">Gender</a>
            <ul class="dropdown-list">

                <li class="dropdown-item">
                  <a href="#">Name</a>
                </li>

            </ul>
          </li>

          <li class="menu-category">
            <a href="#" class="menu-title"></a>
            <ul class="dropdown-list">

                <li class="dropdown-item">
                  <a href="#">None</a>
                </li>

            </ul>
          </li>

        </ul>

      </div>

    </nav>


  </header>

  <main>



    <div class="banner">

      <div class="container" style="margin-top:240px;">

        <div class="slider-container has-scrollbar" style="height:500px">


            <div class="slider-item">

              <img  style="width: 500px;height: 350px;float:right;margin: right 50px;" src="" alt="Satroka" class="banner-img">

              <div class="banner-content">

                <p class="banner-subtitle">Raphia</p>

                <h2 class="banner-title">Banierre</h2>

                <p class="banner-text">
                  amidy &dollar; <b>240</b>.00
                </p>

                <a href="#" class="banner-btn">Vidio</a>

              </div>

            </div>

        </div>

      </div>

    </div>

  </main>

  <div class="product-grid">
    <style>
      .product-grid {
        margin-top: 100px;
        margin-left: 150px;
        margin-right: 150px;
      }
    </style>



      <div id="product" class="showcase" style="width: 250px; ">
        <div class="showcase-banner" style="height: 250px">

          <img src="" alt="Pure Garment Dyed Cotton Shirt" class="product-img default">
          <img src="" class="product-img hover">

          <p class="showcase-badge angle black">sale</p>

          <div class="showcase-actions">
            <form action="#" method="get">
              <input type="hidden" name="productId" value="" />
              <button class="btn-action" type="submit" onclick="" ?>">
                <ion-icon name="heart"></ion-icon>
              </button>
            </form>

            <form action="<#" method="get">
              <button class="btn-action" type="submit" onclick="">
                <ion-icon name="eye"></ion-icon>
              </button>
            </form>

            <form action="#" method="get">
              <button class="btn-action" type="submit" onclick="" >
                <ion-icon name="bag-add-outline"></ion-icon>
              </button>
            </form>

          </div>
        </div>

        <div class="showcase-content">
        <a href="#" onclick="" class="showcase-category">Anana</a>

          <h3>
            <a href="#" class="showcase-title">None</a>
          </h3>

          <div class="showcase-rating">
            <ion-icon name="star"></ion-icon>
            <ion-icon name="star"></ion-icon>
            <ion-icon name="star"></ion-icon>
            <ion-icon name="star-outline"></ion-icon>
            <ion-icon name="star-outline"></ion-icon>
          </div>

          <div class="price-box">
            <p class="price">$10<p>
            <del>$56.00</del>
          </div>
        </div>
      </div>

    <script src="<?php echo base_url('assets/home/js/jquery-3.6.0.min.js'); ?>"></script>


    <script src="<?php echo base_url('assets/home/js/script.js'); ?>"></script>
    <script src="<?php echo base_url('assets/home/js/exception.js'); ?>"></script>
    <script src="<?php echo base_url('assets/home/js/search.js'); ?>"></script>
    <script src="<?php echo base_url('assets/home/js/raphia.js'); ?>"></script>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>


</body>

</html>
