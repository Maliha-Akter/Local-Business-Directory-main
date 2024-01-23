<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <title>Homepage</title>
  <link rel="stylesheet" href="../CSS/login.css">
  <link rel="stylesheet" href="../CSS/home.css">
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  <link rel="shortcut icon" type="image/png" href="assets/images/icon/favicon.ico">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/css/themify-icons.css">
  <link rel="stylesheet" href="assets/css/metisMenu.css">
  <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
  <link rel="stylesheet" href="assets/css/slicknav.min.css">
  <!-- amchart css -->
  <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
  <!-- others css -->
  <link rel="stylesheet" href="assets/css/typography.css">
  <link rel="stylesheet" href="assets/css/default-css.css">
  <link rel="stylesheet" href="assets/css/styles.css">
  <link rel="stylesheet" href="assets/css/responsive.css">
  <link rel="stylesheet" href="/css/table.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- modernizr css -->
  <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
  <style>
    .search {
      width: 100%;
      position: relative;
      display: flex;
    }

    .searchTerm {
      width: 100%;
      border: 3px solid #00B4CC;
      border-right: none;
      padding: 5px;
      height: 30px;
      border-radius: 5px 0 0 5px;
      outline: none;
      color: #9DBFAF;
    }

    .searchTerm:focus {
      color: #00B4CC;
    }

    .searchButton {
      width: 40px;
      height: 30px;
      border: 1px solid #00B4CC;
      background: #00B4CC;
      text-align: center;
      color: #fff;
      border-radius: 0 5px 5px 0;
      cursor: pointer;
      font-size: 20px;
    }

    /*Resize the wrap to see the search bar change!*/
    .wrap {
      width: 30%;
      
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
    }
  </style>
</head>

<body>

  <header>
    <h2 class="logo">Logo</h2>
    <nav class="navigation">
      <a href="dashboard.html">Dashboard</a>
      <a href="Inventory.html">Inventory</a>
      <a href="Bill.html">Bill</a>
      <a href="Customer.html">Customers</a>
      <a href="Profile.html">Profile</a>
    </nav>
    <!-- <a href="login.php"> <button class="btnLogin-popup">Log out</button> -->
  </header>
  <main style="background-color: aliceblue; width:700px ;border-radius:10px">
    <!-- preloader area start -->
    <div id="preloader">
      <div class="loader"></div>
    </div>
    <div class="page-container">
      <!-- main content area start -->
      <div class="main-content">
        <!-- header area start -->
        <div class="header-area" style="padding-top: 20px;padding-left:10px">
          <div class="row align-items-center">
            <!-- nav and search button -->
            <div class="col-md-6 col-sm-8 clearfix">
              <div class="nav-btn pull-left">
                <span></span>
                <span></span>
                <span></span>
              </div>
              <div class="wrap" style="margin-left:100px; margin-top:20px">
                <div class="search">
                  <input type="text" class="searchTerm" placeholder="What are you looking for?">
                  <button type="submit" class="searchButton">
                    <i class="fa fa-search"></i>
                  </button>
                </div>
              </div>
            </div>

            <!-- profile info & task notification-->
            <div class="col-md-6 col-sm-4 clearfix">

            </div>
          </div>
        </div>

        <!-- page title area end -->
        <div class="add-form">

          <h1 style="margin-left:40%; margin-bottom: 100px;">Add Item Here</h1>

          <body>
            <form method="POST" style="display: grid; grid-template-columns: repeat(2,1fr);gap: 20px; padding-left: 50px;" class="form-inline" action="additem.php">
              <div class="form-group">
                <label for="name">Product Name</label>
                <input type="text" style="margin-left: 30px;" class="form-control" name="product_name">

              </div>
              <div class="form-group">
                <label for="productID">Product ID</label>
                <input type="text" class="form-control" style="margin-left: 15px;" id="productID" name="productID" maxlength="10">
              </div>
              <div class="form-group">
                <label for="productCategory">Product Category</label>
                <!-- <input type="text" id="productCategory" name="productCategory"> -->
                <select class="form-control" style="margin-left: 10px;" id="productCategory" name="productCategory">
                  <option value="electronics">Electronics</option>
                  <option value="clothing">Clothing</option>
                  <option value="books">Books</option>
                  <!-- Add more options as needed -->
                </select>
              </div>
              <div class="form-group">
                <label for="name">Product Price</label>
                <input type="text" class="form-control" style="margin-left: 0px;" name="price">
              </div>
              <div class="form-group">
                <label for="name">Available Product</label>
                <input type="number" class="form-control" style="margin-left: 10px;" name="quant" id="quant" min="1" max="">
              </div>
              <div class="form-group">
                <label for="unit">Product Unit</label>
                <input type="text" class="form-control" style="margin-left: 5px;" name="unit" id="unit">
              </div>

              <button type="submit" class="btn btn-default" style="margin-top: 50px; margin-left: auto; margin-right: 0%;" name="add">Add item</button>

            </form>
          </body>


          <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>

          <script src="assets/js/popper.min.js"></script>
          <script src="assets/js/bootstrap.min.js"></script>
          <script src="assets/js/owl.carousel.min.js"></script>
          <script src="assets/js/metisMenu.min.js"></script>
          <script src="assets/js/jquery.slimscroll.min.js"></script>
          <script src="assets/js/jquery.slicknav.min.js"></script>


          <script src="assets/js/plugins.js"></script>
          <script src="assets/js/scripts.js"></script>
</body>

</html>