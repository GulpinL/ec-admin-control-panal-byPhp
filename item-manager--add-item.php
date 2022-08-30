<?php

if (!empty($_POST["title"])) {
    $data_array = array(
        // <!-- title, price,thumbnail,description,created_at,updated_at,category_id,brand,discount -->
    
        'title' =>  $_POST['title'],
        'price' =>  $_POST['price'],
        'thumbnail' =>  $_POST['thumbnail'],
        'description' =>  $_POST['description'],
        "created_at"=> date("Y/m/d"),
        "updated_at" => date("Y/m/d"),
        'category_id' =>  $_POST['category_id'],
        'brand' =>  $_POST['brand'],
        'discount' =>  $_POST['discount']
    );
    
    // $url = "http://localhost:9000/api/v1/product/addProduct";
    $url = "https://ezcamp-api-list.herokuapp.com/api/v1/product/addProduct";
    
    $data=http_build_query($data_array);
    
    
    $ch = curl_init();
    
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 15);
    curl_setopt($ch, CURLOPT_TIMEOUT , 15);
    
    $response = curl_exec($ch);
    $data = json_decode($response, true);
    curl_close($ch);
    
    header("Location: ./");
    
}


?>
<!DOCTYPE html>


<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path=".//assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>EC01-10 - Control Panel - Admin</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="https://res.cloudinary.com/dsmrruq8n/image/upload/v1661855186/favicon_wgbyxo.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href=".//assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href=".//assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href=".//assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href=".//assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href=".//assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <link rel="stylesheet" href=".//assets/vendor/libs/apex-charts/apex-charts.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src=".//assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src=".//assets/js/config.js"></script>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

                    <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
                    <div class="app-brand demo">
                        <a href="/" class="app-brand-link">
                        <span class="app-brand-logo demo">
                            <svg
                            width="25"
                            viewBox="0 0 25 42"
                            version="1.1"
                            xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink"
                            >
                            <defs>
                                
                            </defs>
                            <g id="g-app-brand" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g id="Brand-Logo" transform="translate(-27.000000, -15.000000)">
                                <g id="Icon" transform="translate(27.000000, 15.000000)">
                                    <g id="Mask" transform="translate(0.000000, 8.000000)">
                                    <mask id="mask-2" fill="white">
                                        <use xlink:href="#path-1"></use>
                                    </mask>
                                    <use fill="#696cff" xlink:href="#path-1"></use>
                                    <g id="Path-3" mask="url(#mask-2)">
                                        <use fill="#696cff" xlink:href="#path-3"></use>
                                        <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-3"></use>
                                    </g>
                                    <g id="Path-4" mask="url(#mask-2)">
                                        <use fill="#696cff" xlink:href="#path-4"></use>
                                        <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-4"></use>
                                    </g>
                                    </g>
                                    <g
                                    id="Triangle"
                                    transform="translate(19.000000, 11.000000) rotate(-300.000000) translate(-19.000000, -11.000000) "
                                    >
                                    <use fill="#696cff" xlink:href="#path-5"></use>
                                    <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-5"></use>
                                    </g>
                                </g>
                                </g>
                            </g>
                            </svg>
                        </span>
                        <span class="app-brand-text demo menu-text fw-bolder ms-2">EC01-10</span>
                        </a>

                        <a href="/" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
                        <i class="bx bx-chevron-left bx-sm align-middle"></i>
                        </a>
                    </div>

                    <div class="menu-inner-shadow"></div>

                    <ul class="menu-inner py-1">
                        <!-- Home -->
                        <li class="menu-item active">
                        <a href="./" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-home-circle"></i>
                            <div data-i18n="Analytics">Home</div>
                        </a>
                        </li>

                    

                        <li class="menu-header small text-uppercase">
                        <span class="menu-header-text">Delivery</span>
                        </li>


                        <li class="menu-item">
                        <a href="./_layout.php?phphref=delivery.php" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-check-circle"></i>
                            <div data-i18n="Account Settings">Delivery</div>
                        </a>
                        
                        </li>


                        <li class="menu-item">
                        <a href="./_layout.php?phphref=order--waiting-order.php" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-briefcase"></i>
                            <!-- <i class='bx bx-signal-5'></i> -->
                            <div data-i18n="Authentications">Order Management</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                            <a href="./_layout.php?phphref=order--waiting-order.php" class="menu-link" >
                                <div data-i18n="Basic">Waiting Order</div>
                            </a>
                            </li>
                            <li class="menu-item">
                            <a href="./_layout.php?phphref=order--deliverying-order.php" class="menu-link" >
                                <div data-i18n="Basic">Delivering Order</div>
                            </a>
                            </li>

                            <li class="menu-item">
                            <a href="./_layout.php?phphref=order--canceled-order.php" class="menu-link" >
                                <div data-i18n="Basic">Canceled Order</div>
                            </a>
                            </li>
                            
                        </ul>
                        </li>


                        <li class="menu-item">
                        <a href="./_layout.php?phphref=item-manager--item-list.php" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-timer"></i>
                            <div data-i18n="Misc">Item Management</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                            <a href="./_layout.php?phphref=item-manager--item-list.php" class="menu-link">
                                <div data-i18n="Error">Item List</div>
                            </a>
                            </li>
                            <li class="menu-item">
                            <a href="./_layout.php?phphref=item-manager--add-item.php" class="menu-link">
                                <div data-i18n="Under Maintenance">Add item</div>
                            </a>
                            </li>
                            <li class="menu-item">
                            <a href="./_layout.php?phphref=item-manager--invalid-item.php" class="menu-link">
                                <div data-i18n="Under Maintenance">Invalid/Reported Item</div>
                            </a>
                            </li>
                        </ul>
                        </li>


                        <!-- salary, day off, holiday, your day off remain -->
                        <li class="menu-header small text-uppercase"><span class="menu-header-text">marketing</span></li>
                        
                        <!-- holiday -->
                        <li class="menu-item">
                        <a href="./_layout.php?phphref=marketing.php" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-calendar"></i>
                            <div data-i18n="Basic">Marketing</div>
                        </a>
                        </li>
                        <!-- day off -->
                        <li class="menu-item">
                        <a href="./_layout.php?phphref=statistic-income--income.php" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-calendar-x"></i>
                            <div data-i18n="User interface">Statistics / Income</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                            <a href="./_layout.php?phphref=statistic-income--income.php" class="menu-link">
                                <div data-i18n="Accordion">Income</div>
                            </a>
                            </li>
                            <li class="menu-item">
                            <a href="./_layout.php?phphref=statistic-income--statistics.php" class="menu-link">
                                <div data-i18n="Accordion">Statistics</div>
                            </a>
                            </li>
                            <li class="menu-item">
                            <a href="./_layout.php?phphref=statistic-income--paypal.php" class="menu-link">
                                <div data-i18n="Alerts">Paypal</div>
                            </a>
                            </li>
                            <li class="menu-item">
                            <a href="./_layout.php?phphref=statistic-income--momo.php" class="menu-link">
                                <div data-i18n="Alerts">Momo</div>
                            </a>
                            </li>
                            
                            
                        </ul>
                        </li>

                        

                    
                    </ul>
                    </aside>
   





                                        <!-- Layout container -->
                                    <div class="layout-page">
                                        <!-- Navbar -->

                                            <nav
                                                class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
                                                id="layout-navbar"
                                            >
                                                <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
                                                <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                                                    <i class="bx bx-menu bx-sm"></i>
                                                </a>
                                                </div>

                                                <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                                                <!-- Search -->
                                                <div class="navbar-nav align-items-center">
                                                    <div class="nav-item d-flex align-items-center">
                                                    <i class="bx bx-search fs-4 lh-0"></i>
                                                    <input
                                                        type="text"
                                                        class="form-control border-0 shadow-none"
                                                        placeholder="Search..."
                                                        aria-label="Search..."
                                                    />
                                                    </div>
                                                </div>
                                                <!-- /Search -->

                                                <ul class="navbar-nav flex-row align-items-center ms-auto">
                                                    <!-- Place this tag where you want the button to render. -->
                                                    <li class="nav-item lh-1 me-3">
                                                    <a
                                                        class="github-button"
                                                        href="/"
                                                        data-icon="octicon-star"
                                                        data-size="large"
                                                        data-show-count="true"
                                                        aria-label="Star themeselection/sneat-html-admin-template-free on GitHub"
                                                        >Star</a
                                                    >
                                                    </li>

                                                    <!-- User -->
                                                    <li class="nav-item navbar-dropdown dropdown-user dropdown">
                                                    <a class="nav-link dropdown-toggle hide-arrow" href="profile-service--profile.php" data-bs-toggle="dropdown">
                                                        <div class="avatar avatar-online">
                                                        <img src=".//assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                                                        </div>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                        <li>
                                                        <a class="dropdown-item" href="#">
                                                            <div class="d-flex">
                                                            <div class="flex-shrink-0 me-3">
                                                                <div class="avatar avatar-online">
                                                                <img src=".//assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                                                                </div>
                                                            </div>
                                                            <div class="flex-grow-1">
                                                                <span class="fw-semibold d-block"> Name is: John Doe</span>
                                                                <small class="text-muted">Role :Admin</small>
                                                            </div>
                                                            </div>
                                                        </a>
                                                        </li>
                                                        <li>
                                                        <div class="dropdown-divider"></div>
                                                        </li>
                                                        <li>
                                                        <a class="dropdown-item" href="profile-service--profile.php">
                                                            <i class="bx bx-user me-2"></i>
                                                            <span class="align-middle">My Profile</span>
                                                        </a>
                                                        </li>
                                                        <li>
                                                        <a class="dropdown-item" href="profile-service--account.php">
                                                            <i class="bx bx-cog me-2"></i>
                                                            <span class="align-middle">Account</span>
                                                        </a>
                                                        </li>
                                                        <li>
                                                        <a class="dropdown-item" href="#">
                                                            <span class="d-flex align-items-center align-middle">
                                                            <i class="flex-shrink-0 bx bx-bell me-2"></i>
                                                            <span class="flex-grow-1 align-middle">Notifications</span>
                                                            <span class="flex-shrink-0 badge badge-center rounded-pill bg-danger w-px-20 h-px-20">4</span>
                                                            </span>
                                                        </a>
                                                        </li>
                                                        <li>
                                                        <div class="dropdown-divider"></div>
                                                        </li>
                                                        <li>
                                                        <a class="dropdown-item" href="auth-login-basic.html">
                                                            <i class="bx bx-power-off me-2"></i>
                                                            <span class="align-middle">Log Out</span>
                                                        </a>
                                                        </li>
                                                    </ul>
                                                    </li>
                                                    <!--/ User -->
                                                </ul>
                                                </div>
                                            </nav>

                                                <!-- CONTENT -->
                                                <div class="content-wrapper">
                                                        <div class="container-xxl flex-grow-1 container-p-y">
                                                                                  <!-- HTML5 Inputs -->
                  <!-- title, price,thumbnail,description,created_at,updated_at,category_id,brand,discount -->
                  <div class="mx-5 ">
                  <div class="mx-5 ">
                  <div class="mx-5 ">
                  <div class="mx-5 ">
                  <div class="card mb-4 mx-5">
                    <div class="card-header d-flex justify-content-between align-items-center">
                      <h5 class="mb-0">Basic Layout</h5>
                      <small class="text-muted float-end">Default label</small>
                    </div>
                    <div class="card-body">
                        <!-- -------------------- -->
                      <form id="formOtRequest" class="mb-3" action="item-manager--add-item.php" method="POST">
                        <div class="mb-3">
                            <label for="html5-date-input" class="col-md-2 col-form-label">Name of product</label>
                            <input class="form-control" type="text" name = "title" id = "title" id="html5-date-input" />
                        </div>
                        <div class="mb-3">
                            <label for="html5-date-input" class="col-md-2 col-form-label">Price</label>
                            <input class="form-control" type="number" name = "price" id = "price" id="html5-date-input" />
                        </div>

                        <div class="mb-3">
                          <label class="form-label" for="basic-default-message">Thumbnail - img CDN</label>
                          <textarea
                            id="thumbnail"
                            class="form-control"
                            placeholder="Add CDN image here..."
                            name ="thumbnail"
                          ></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="html5-date-input" class="col-md-2 col-form-label">Mo ta san pham - description</label>
                            <input class="form-control" type="text" name = "description" id = "description" id="html5-date-input" />
                        </div>

                        <div class="mb-3">
                            <label for="html5-date-input" class="col-md-2 col-form-label">The loai -Category Id</label>
                            <input class="form-control" type="number" name = "category_id" id = "category_id" id="html5-date-input" />
                        </div>

                        <div class="mb-3">
                            <label for="html5-date-input" class="col-md-2 col-form-label">Brand</label>
                            <input class="form-control" type="text" name = "brand" id = "brand" id="html5-date-input" />
                        </div>

                        <div class="mb-3">
                            <label for="html5-date-input" class="col-md-2 col-form-label">Discount</label>
                            <input class="form-control" type="text" name = "discount" id = "discount" id="html5-date-input" />
                        </div>


                        <button type="submit" class="btn btn-primary">Send</button>
                      </form>
                    </div>
                  </div>
                </div>
                </div>
                </div>
                </div>
       
                                                </div>

                                                <!-- FOOTER -->
                                                <footer class="content-footer footer bg-footer-theme">
                                                <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                                                </div>
                                                </footer>
                                    </div>
        </div>
    </div>



    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src=".//assets/vendor/libs/jquery/jquery.js"></script>
    <script src=".//assets/vendor/libs/popper/popper.js"></script>
    <script src=".//assets/vendor/js/bootstrap.js"></script>
    <script src=".//assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src=".//assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src=".//assets/vendor/libs/apex-charts/apexcharts.js"></script>

    <!-- Main JS -->
    <script src=".//assets/js/main.js"></script>

    <!-- Page JS -->
    <script src=".//assets/js/dashboards-analytics.js"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>
