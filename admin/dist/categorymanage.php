<!doctype html>
<html lang="en">

<!-- Head -->
<head>
    <!-- Page Meta Tags-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./assets/images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./assets/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./assets/images/favicon/favicon-16x16.png">
    <link rel="mask-icon" href="./assets/images/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <!-- Google Font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="./assets/css/libs.bundle.css" />

    <!-- Main CSS -->
    <link rel="stylesheet" href="./assets/css/theme.bundle.css" />

    <!-- Fix for custom scrollbar if JS is disabled-->
    <noscript>
        <style>
          /**
          * Reinstate scrolling for non-JS clients
          */
          .simplebar-content-wrapper {
            overflow: auto;
          }
        </style>
    </noscript>

    <!-- Page Title -->
    <title>Manage Catrgory</title>
    
</head>
<body class="">
    
    <!-- Navbar-->
    <nav class="navbar navbar-expand-lg navbar-light border-bottom py-0 fixed-top bg-white">
      <div class="container-fluid">
        <a class="navbar-brand d-flex justify-content-start align-items-center border-end"
          href="./index.html">
          <div class="d-flex align-items-center">
              <!-- <svg class="f-w-5 me-2 text-primary d-flex align-self-center lh-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 203.58 182"><path d="M101.66,41.34C94.54,58.53,88.89,72.13,84,83.78A21.2,21.2,0,0,1,69.76,96.41,94.86,94.86,0,0,0,26.61,122.3L81.12,0h41.6l55.07,123.15c-12-12.59-26.38-21.88-44.25-26.81a21.22,21.22,0,0,1-14.35-12.69c-4.71-11.35-10.3-24.86-17.53-42.31Z" fill="currentColor" fill-rule="evenodd" fill-opacity="0.5"/><path d="M0,182H29.76a21.3,21.3,0,0,0,18.56-10.33,63.27,63.27,0,0,1,106.94,0A21.3,21.3,0,0,0,173.82,182h29.76c-22.66-50.84-49.5-80.34-101.79-80.34S22.66,131.16,0,182Z" fill="currentColor" fill-rule="evenodd"/></svg> -->
              <span class="fw-black text-uppercase tracking-wide fs-6 lh-1">Admin</span>
          </div>    </a>
        <div class="d-flex justify-content-between align-items-center flex-grow-1 navbar-actions">
    
          <!-- Search Bar and Menu Toggle-->
          <div class="d-flex align-items-center">
    
            <!-- Menu Toggle-->
            <div class="menu-toggle cursor-pointer me-4 text-primary-hover transition-color disable-child-pointer">
              <i class="ri-skip-back-mini-line ri-lg fold align-middle" data-bs-toggle="tooltip" data-bs-placement="right"
                title="Close menu"></i>
              <i class="ri-skip-forward-mini-line ri-lg unfold align-middle" data-bs-toggle="tooltip" data-bs-placement="right"
                title="Open Menu"></i>
            </div>
            <!-- / Menu Toggle-->
    
            <!-- Search Bar-->
            <form class="d-none d-md-flex bg-light rounded px-3 py-1">
                <!-- <input class="form-control border-0 bg-transparent px-0 py-2 me-5 fw-bolder" type="search"
                  placeholder="Search" aria-label="Search"> -->
                <!-- <button class="btn btn-link p-0 text-muted" type="submit"><i class="ri-search-2-line"></i></button> -->
            </form>        <!-- / Search Bar-->
    
          </div>
          <!-- / Search Bar and Menu Toggle-->
    
          <!-- Right Side Widgets-->
          <div class="d-flex align-items-center">
    
            <!-- Notifications-->
            <div class="d-none d-sm-flex dropdown mx-1">
              <button class="btn-action text-muted" type="button" id="notificationsDropdown" data-bs-toggle="dropdown"
                aria-expanded="false">
                <span class="f-w-4">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round" class="w-100">
                    <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                    <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                  </svg>
                </span>
                <span
                class="position-absolute top-0 start-50 p-1 bg-success border border-3 border-white rounded-circle mt-n1">
                <span class="visually-hidden">New alerts</span>
              </span>
              </button>
              <div class="dropdown-menu dropdown-menu-end dropdown-lg" aria-labelledby="notificationsDropdown">
                <div class="dropdown-header d-flex justify-content-between align-items-center">
                  <p class="fw-bolder m-0 text-body">Notifications</p>
                  <span class="badge bg-success-faded text-success rounded-pill">4 new</span>
                </div>
                <div class="simplebar-wrapper">
                  <div data-pixr-simplebar>
                    <ul class="list-unstyled m-0 pb-4">
                        <li class="d-flex py-2 align-items-start">
                          <button class="btn-icon bg-primary-faded text-primary fw-bolder me-3">O</button>
                          <div class="d-flex align-items-start justify-content-between flex-grow-1">
                            <div>
                              <p class="lh-1 mb-2 fw-semibold text-body">Order #123-5567</p>
                              <p class="text-muted lh-1 mb-2 small">Placed by John Doe at 11:23 AM</p>
                            </div>
                            <small class="text-muted text-uppercase tracking-wide fw-bold fs-xs">2min</small>
                          </div>
                        </li>
                        <li class="d-flex py-2 align-items-start">
                          <button class="btn-icon bg-primary-faded text-primary fw-bolder me-3">M</button>
                          <div class="d-flex align-items-start justify-content-between flex-grow-1">
                            <div>
                              <p class="lh-1 mb-2 fw-semibold text-body">Mike Johnston</p>
                              <p class="text-muted lh-1 mb-2 small">Hi Jack, can we setup a meeting...</p>
                            </div>
                            <small class="text-muted text-uppercase tracking-wide fw-bold fs-xs">1 hr</small>
                          </div>
                        </li>
                        <li class="d-flex py-2 align-items-start">
                          <button class="btn-icon bg-primary-faded text-primary fw-bolder me-3">D</button>
                          <div class="d-flex align-items-start justify-content-between flex-grow-1">
                            <div>
                              <p class="lh-1 mb-2 fw-semibold text-body">Daily Backup</p>
                              <p class="text-muted lh-1 mb-2 small">Backup completed at 11:59 PM</p>
                            </div>
                            <small class="text-muted text-uppercase tracking-wide fw-bold fs-xs">3hr</small>
                          </div>
                        </li>
                        <li class="d-flex py-2 align-items-start">
                          <button class="btn-icon bg-primary-faded text-primary fw-bolder me-3">E</button>
                          <div class="d-flex align-items-start justify-content-between flex-grow-1">
                            <div>
                              <p class="lh-1 mb-2 fw-semibold text-body">Event: Staff Review</p>
                              <p class="text-muted lh-1 mb-2 small">Monthly staff review starts in...</p>
                            </div>
                            <small class="text-muted text-uppercase tracking-wide fw-bold fs-xs">4hr</small>
                          </div>
                        </li>
                        <li class="d-flex py-2 align-items-start">
                          <button class="btn-icon bg-primary-faded text-primary fw-bolder me-3">O</button>
                          <div class="d-flex align-items-start justify-content-between flex-grow-1">
                            <div>
                              <p class="lh-1 mb-2 fw-semibold text-body">Order #123-3322</p>
                              <p class="text-muted lh-1 mb-2 small">Placed by Sally Smith at 10:07 AM</p>
                            </div>
                            <small class="text-muted text-uppercase tracking-wide fw-bold fs-xs">1d</small>
                          </div>
                        </li>
                    </ul>
                  </div>
                </div>
                <div><a class="dropdown-item text-primary fw-bolder text-center border-top pt-3" href="#">See more &rarr;</a></div>
              </div>
            </div>        <!-- / Notifications-->
    
            <!-- Activity-->
            <button class="btn-action mx-1" data-bs-toggle="offcanvas"
            data-bs-target="#offcanvasActivity" aria-controls="offcanvasActivity">
                <span class="f-w-4 text-muted">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline></svg>
                </span>
            </button>        <!-- / Activity-->
    
            <!-- Messages-->
            <button class="btn-action mx-1" type="button" data-bs-toggle="offcanvas"
            data-bs-target="#offcanvasMessage" aria-controls="offcanvasMessage">
                <span class="f-w-4 text-muted">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg>
                </span>
            </button>        <!-- / Messages-->
    
            <!-- Apps-->
            <div class="d-none d-sm-flex dropdown mx-1">
              <button class="btn-action mx-1" type="button" id="appsDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                <span class="f-w-4 text-muted">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round" class="feather feather-grid">
                    <rect x="3" y="3" width="7" height="7"></rect>
                    <rect x="14" y="3" width="7" height="7"></rect>
                    <rect x="14" y="14" width="7" height="7"></rect>
                    <rect x="3" y="14" width="7" height="7"></rect>
                  </svg>
                </span>
              </button>
              <div class="dropdown-menu dropdown-menu-end dropdown-lg" aria-labelledby="appsDropdown">
                <div class="dropdown-header d-flex justify-content-between align-items-center">
                  <p class="fw-bolder m-0 text-body">My Applications</p>
                </div>
                <div class="simplebar-wrapper">
                  <div data-pixr-simplebar>
                    <div class="row g-2 pb-3">
                        <div class="col-4 h-100">
                          <a href="#" class="d-flex justify-content-center align-items-center flex-column bg-light-hover rounded-2 px-2 py-3 transition-all">
                            <span class="d-block f-h-8">
                              <picture>
                                <img class="h-100" src="./assets/images/logos/logo-1.svg" alt="">
                              </picture>
                            </span>
                            <span class="small fw-bolder text-body mb-0 mt-3">Figma</span>
                          </a>
                        </div>
                        <div class="col-4 h-100">
                          <a href="#" class="d-flex justify-content-center align-items-center flex-column bg-light-hover rounded-2 px-2 py-3 transition-all">
                            <span class="d-block f-h-8">
                              <picture>
                                <img class="h-100" src="./assets/images/logos/logo-2.svg" alt="">
                              </picture>
                            </span>
                            <span class="small fw-bolder text-body mb-0 mt-3">Sketch</span>
                          </a>
                        </div>
                        <div class="col-4 h-100">
                          <a href="#" class="d-flex justify-content-center align-items-center flex-column bg-light-hover rounded-2 px-2 py-3 transition-all">
                            <span class="d-block f-h-8">
                              <picture>
                                <img class="h-100" src="./assets/images/logos/logo-3.svg" alt="">
                              </picture>
                            </span>
                            <span class="small fw-bolder text-body mb-0 mt-3">Adobe XD</span>
                          </a>
                        </div>
                        <div class="col-4 h-100">
                          <a href="#" class="d-flex justify-content-center align-items-center flex-column bg-light-hover rounded-2 px-2 py-3 transition-all">
                            <span class="d-block f-h-8">
                              <picture>
                                <img class="h-100" src="./assets/images/logos/logo-4.svg" alt="">
                              </picture>
                            </span>
                            <span class="small fw-bolder text-body mb-0 mt-3">Netlify</span>
                          </a>
                        </div>
                        <div class="col-4 h-100">
                          <a href="#" class="d-flex justify-content-center align-items-center flex-column bg-light-hover rounded-2 px-2 py-3 transition-all">
                            <span class="d-block f-h-8">
                              <picture>
                                <img class="h-100" src="./assets/images/logos/logo-5.svg" alt="">
                              </picture>
                            </span>
                            <span class="small fw-bolder text-body mb-0 mt-3">Dropbox</span>
                          </a>
                        </div>
                        <div class="col-4 h-100">
                          <a href="#" class="d-flex justify-content-center align-items-center flex-column bg-light-hover rounded-2 px-2 py-3 transition-all">
                            <span class="d-block f-h-8">
                              <picture>
                                <img class="h-100" src="./assets/images/logos/logo-6.svg" alt="">
                              </picture>
                            </span>
                            <span class="small fw-bolder text-body mb-0 mt-3">Gitlab</span>
                          </a>
                        </div>
                        <div class="col-4 h-100">
                          <a href="#" class="d-flex justify-content-center align-items-center flex-column bg-light-hover rounded-2 px-2 py-3 transition-all">
                            <span class="d-block f-h-8">
                              <picture>
                                <img class="h-100" src="./assets/images/logos/logo-7.svg" alt="">
                              </picture>
                            </span>
                            <span class="small fw-bolder text-body mb-0 mt-3">Click Up</span>
                          </a>
                        </div>
                        <div class="col-4 h-100">
                          <a href="#" class="d-flex justify-content-center align-items-center flex-column bg-light-hover rounded-2 px-2 py-3 transition-all">
                            <span class="d-block f-h-8">
                              <picture>
                                <img class="h-100" src="./assets/images/logos/logo-8.svg" alt="">
                              </picture>
                            </span>
                            <span class="small fw-bolder text-body mb-0 mt-3">Atlassian</span>
                          </a>
                        </div>
                        <div class="col-4 h-100">
                          <a href="#" class="d-flex justify-content-center align-items-center flex-column bg-light-hover rounded-2 px-2 py-3 transition-all">
                            <span class="d-block f-h-8">
                              <picture>
                                <img class="h-100" src="./assets/images/logos/logo-9.svg" alt="">
                              </picture>
                            </span>
                            <span class="small fw-bolder text-body mb-0 mt-3">Bitbucket</span>
                          </a>
                        </div>
                        <div class="col-4 h-100">
                          <a href="#" class="d-flex justify-content-center align-items-center flex-column bg-light-hover rounded-2 px-2 py-3 transition-all">
                            <span class="d-block f-h-8">
                              <picture>
                                <img class="h-100" src="./assets/images/logos/logo-10.svg" alt="">
                              </picture>
                            </span>
                            <span class="small fw-bolder text-body mb-0 mt-3">Photoshop</span>
                          </a>
                        </div>
                        <div class="col-4 h-100">
                          <a href="#" class="d-flex justify-content-center align-items-center flex-column bg-light-hover rounded-2 px-2 py-3 transition-all">
                            <span class="d-block f-h-8">
                              <picture>
                                <img class="h-100" src="./assets/images/logos/logo-11.svg" alt="">
                              </picture>
                            </span>
                            <span class="small fw-bolder text-body mb-0 mt-3">Illustrator</span>
                          </a>
                        </div>
                        <div class="col-4 h-100">
                          <a href="#" class="d-flex justify-content-center align-items-center flex-column bg-light-hover rounded-2 px-2 py-3 transition-all">
                            <span class="d-block f-h-8">
                              <picture>
                                <img class="h-100" src="./assets/images/logos/logo-12.svg" alt="">
                              </picture>
                            </span>
                            <span class="small fw-bolder text-body mb-0 mt-3">Adobe CC</span>
                          </a>
                        </div>
                    </div>
                  </div>
                </div>
                <div><a class="dropdown-item text-primary fw-bolder text-center border-top pt-3" href="#">See more &rarr;</a></div>
              </div>
            </div>        <!-- / Apps-->
    
            <!-- Profile Menu-->
            <div class="dropdown ms-1">
                <button class="btn btn-link p-0 position-relative" type="button" id="profileDropdown"
                  data-bs-toggle="dropdown" aria-expanded="false">
                  <picture>
                    <img class="f-w-10 rounded-circle" src="./assets/images/profile-small.jpeg"
                      alt="HTML Bootstrap Admin Template by Pixel Rocket">
                  </picture>
                  <span
                    class="position-absolute bottom-0 start-75 p-1 bg-success border border-3 border-white rounded-circle">
                    <span class="visually-hidden">New alerts</span>
                  </span>
                </button>
                <ul class="dropdown-menu dropdown-md dropdown-menu-end" aria-labelledby="profileDropdown">
                  <li><a class="dropdown-item d-flex align-items-center" href="#">Set Visibility</a></li>
                  <li><a class="dropdown-item d-flex align-items-center" href="#">Edit Profile</a></li>
                  <li><a class="dropdown-item d-flex align-items-center" href="#">Edit Settings</a></li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li class="d-flex py-2 align-items-start">
                    <button class="btn-icon bg-primary-faded text-primary fw-bolder me-3">J</button>
                    <div class="d-flex align-items-start justify-content-between flex-grow-1">
                      <div>
                        <p class="lh-1 mb-2 fw-semibold text-body">John Daniels</p>
                        <p class="text-muted lh-1 mb-2 small">john@email.com</p>
                      </div>
                      <small class="badge bg-success-faded text-success rounded-pill">Pro</small>
                    </div>
                  </li>     
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li><a class="dropdown-item d-flex align-items-center" href="#">Account Settings</a></li>
                  <li><a class="dropdown-item d-flex align-items-center" href="#">Logout</a></li>
                </ul>
              </div>        <!-- / Profile Menu-->
    
          </div>
          <!-- / Notifications & Profile-->
        </div>
      </div>
    </nav>    <!-- / Navbar-->


<section class="d-flex justify-content-center align-items-start vh-100 py-5 px-3 px-md-0">

<!-- Login Form-->
<div class="d-flex flex-column w-100 align-items-center">

  <!-- Logo-->
  <a href="./index.html" class="d-table mt-5 mb-4 mx-auto">
    <div class="d-flex align-items-center">
        <!-- <svg class="f-w-5 me-2 text-primary d-flex align-self-center lh-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 203.58 182"><path d="M101.66,41.34C94.54,58.53,88.89,72.13,84,83.78A21.2,21.2,0,0,1,69.76,96.41,94.86,94.86,0,0,0,26.61,122.3L81.12,0h41.6l55.07,123.15c-12-12.59-26.38-21.88-44.25-26.81a21.22,21.22,0,0,1-14.35-12.69c-4.71-11.35-10.3-24.86-17.53-42.31Z" fill="currentColor" fill-rule="evenodd" fill-opacity="0.5"/><path d="M0,182H29.76a21.3,21.3,0,0,0,18.56-10.33,63.27,63.27,0,0,1,106.94,0A21.3,21.3,0,0,0,173.82,182h29.76c-22.66-50.84-49.5-80.34-101.79-80.34S22.66,131.16,0,182Z" fill="currentColor" fill-rule="evenodd"/></svg> -->
        <span class="fw-black text-uppercase tracking-wide fs-6 lh-1">Manage Category</span>
    </div>      </a>
  <!-- Logo-->
  
  <div class="shadow-lg rounded p-4 p-sm-5 bg-white form">
    <h3 class="fw-bold">Category</h3>

    <!-- Login Form-->
    <form class="mt-4" method="post" action="category"> 
      <div class="form-group">
        <!-- <label class="form-label" for="login-email">Email address</label>
        <input type="email" class="form-control" id="login-email" placeholder="name@email.com"> -->
      </div>
      <div class="form-group">
        <!-- <label for="login-password" class="form-label d-flex justify-content-between align-items-center">
          Password
          <a href="./forgot-password.html" class="text-muted small ms-2 text-decoration-underline">Forgotten
            password?</a>
        </label> -->
        <input type="password" class="form-control" id="login-password" placeholder="Enter Category">
      </div>
      <button type="submit" class="btn btn-primary d-block w-100 my-4">Save</button>
    </form>
    <!-- / Login Form -->

  </div>
</div>
<!-- / Login Form-->

</section>



    <!-- Page Aside-->
    <aside class="aside bg-white">
    
        <div class="simplebar-wrapper">
            <div data-pixr-simplebar>
                <div class="pb-6">
                    <!-- Mobile Logo-->
                    <div class="d-flex d-xl-none justify-content-between align-items-center border-bottom aside-header">
                        <a class="navbar-brand lh-1 border-0 m-0 d-flex align-items-center" href="./index.html">
                            <div class="d-flex align-items-center">
                                <svg class="f-w-5 me-2 text-primary d-flex align-self-center lh-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 203.58 182"><path d="M101.66,41.34C94.54,58.53,88.89,72.13,84,83.78A21.2,21.2,0,0,1,69.76,96.41,94.86,94.86,0,0,0,26.61,122.3L81.12,0h41.6l55.07,123.15c-12-12.59-26.38-21.88-44.25-26.81a21.22,21.22,0,0,1-14.35-12.69c-4.71-11.35-10.3-24.86-17.53-42.31Z" fill="currentColor" fill-rule="evenodd" fill-opacity="0.5"/><path d="M0,182H29.76a21.3,21.3,0,0,0,18.56-10.33,63.27,63.27,0,0,1,106.94,0A21.3,21.3,0,0,0,173.82,182h29.76c-22.66-50.84-49.5-80.34-101.79-80.34S22.66,131.16,0,182Z" fill="currentColor" fill-rule="evenodd"/></svg>
                                <span class="fw-black text-uppercase tracking-wide fs-6 lh-1">Admin</span>
                            </div>                    </a>
                        <i
                            class="ri-close-circle-line ri-lg close-menu text-muted transition-all text-primary-hover me-4 cursor-pointer"></i>
                    </div>
                    <!-- / Mobile Logo-->
    
                    <ul class="list-unstyled mb-6">
    
                        <!-- Dashboard Menu Section-->
                        <li class="menu-section mt-2">Menu</li>
                        <li class="menu-item"><a class="d-flex align-items-center" href="./index.html">
                                <span class="menu-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="w-100">
                                        <rect fill-opacity=".5" fill="currentColor" x="3" y="3" width="7" height="7"></rect>
                                        <rect fill="currentColor" x="14" y="3" width="7" height="7"></rect>
                                        <rect fill-opacity=".5" fill="currentColor" x="14" y="14" width="7" height="7">
                                        </rect>
                                        <rect fill="currentColor" x="3" y="14" width="7" height="7"></rect>
                                    </svg>
                                </span>
                                <span class="menu-link">
                                    Dashboard
                                    <span class="badge bg-success-faded text-success pb-1 ms-2 align-middle rounded-pill">beta</span>
                                </span></a></li>
                        <!-- / Dashboard Menu Section-->
    
                        <!-- Dashboard Menu Section-->
                   
    
                        <!-- Pages Menu Section-->
                        <li class="menu-section mt-4">Pages</li>
                        <li class="menu-item"><a class="d-flex align-items-center collapsed" href="#"
                                data-bs-toggle="collapse" data-bs-target="#collapseMenuItemPages" aria-expanded="false"
                                aria-controls="collapseMenuItemPages">
                                <span class="menu-icon">
                                    <svg enable-background="new 0 0 520 520" viewBox="0 0 520 520" xmlns="http://www.w3.org/2000/svg"><g><path fill="currentColor" d="m481.734 100.063h-158.331l-43.111-70.397c-2.727-4.452-7.571-7.166-12.792-7.166h-119.235c-21.099 0-38.265 17.166-38.265 38.266v65.51 229.184c0 21.1 17.166 38.266 38.265 38.266h261.735 71.734c21.1 0 38.266-17.166 38.266-38.266v-217.13c0-21.101-17.166-38.267-38.266-38.267z"/><path fill="currentColor" opacity=".5" d="m80 355.459v-229.184h-41.734c-21.1 0-38.266 17.166-38.266 38.266v294.693c0 21.1 17.166 38.266 38.266 38.266h333.469c21.1 0 38.266-17.166 38.266-38.266v-35.51h-261.736c-37.641.001-68.265-30.623-68.265-68.265z"/></g></svg>
                                </span>
                                <span
                                    class="menu-link">Product Data</span></a>
                            <div class="collapse" id="collapseMenuItemPages">
                                <ul class="submenu">
                                    <!-- <li><a href="./charts.html">Charts</a></li> -->
                                    <li><a href="./user-listing.html">Manage Categories</a></li>
                                    <li><a href="./user-listing.html">Manage Products</a></li>

                                    <!-- <li><a href="./login.html">Login</a></li>
                                    <li><a href="./register.html">Register</a></li>
                                    <li><a href="./forgot-password.html">Forgot Password</a></li>
                                    <li><a href="./404.html">404 Page</a></li>
                                    <li><a href="./blank.html">Blank Page</a></li> -->
                                </ul>
                            </div>
                        </li>
                        <!-- / Pages Menu Section-->
    
                        <!-- Pages Menu Section-->
                        <li class="menu-section mt-4">User Management</li>
                        <li class="menu-item"><a class="d-flex align-items-center collapsed" href="#"
                                data-bs-toggle="collapse" data-bs-target="#collapseMenuItemUsers" aria-expanded="false"
                                aria-controls="collapseMenuItemUsers">
                                <span class="menu-icon">
                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                    viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                       <path fill="currentColor" opacity=".5" d="M155.327,57.142c-51.531,0-93.454,44.45-93.454,99.086c0,54.636,41.923,99.086,93.454,99.086s93.455-44.45,93.455-99.086
                                           C248.782,101.592,206.859,57.142,155.327,57.142z"/>
                               
                                       <path fill="currentColor" d="M367.798,71.321c-0.211,0-0.425,0.001-0.636,0.002c-21.626,0.179-41.826,9.31-56.878,25.713
                                           c-14.788,16.113-22.829,37.37-22.644,59.854c0.186,22.484,8.577,43.605,23.628,59.473c15.17,15.991,35.265,24.773,56.651,24.773
                                           c0.215,0,0.43-0.001,0.646-0.002c21.626-0.179,41.826-9.311,56.878-25.713c14.788-16.113,22.829-37.37,22.644-59.855
                                           C447.702,108.972,411.747,71.321,367.798,71.321z"/>
                               
                                       <path fill="currentColor" d="M371.74,257.358h-7.76c-36.14,0-69.12,13.74-94.02,36.26c6.23,4.78,12.16,9.99,17.78,15.61
                                           c16.58,16.58,29.6,35.9,38.7,57.42c8.2,19.38,12.88,39.8,13.97,60.83H512v-29.87C512,320.278,449.08,257.358,371.74,257.358z"/>
                               
                                       <path fill="currentColor" opacity=".5" d="M310.35,427.478c-2.83-45.59-25.94-85.69-60.43-111.39c-25.09-18.7-56.21-29.77-89.92-29.77h-9.34
                                           C67.45,286.319,0,353.768,0,436.978v17.88h310.65v-17.88C310.65,433.788,310.55,430.618,310.35,427.478z"/>
                               
                               </svg>
                                </span>
                                <span
                                    class="menu-link">Users</span></a>
                            <div class="collapse" id="collapseMenuItemUsers">
                                <ul class="submenu">
                                    <li><a href="./user-listing.html">User Listing</a></li>
                                </ul>
                            </div>
                        </li>
                        <!-- / Pages Menu Section-->
    
                   
    
                    </ul>
                </div>
            </div>
        </div>
    
    </aside>    <!-- / Page Aside-->





    <!-- Theme JS -->
    <!-- Vendor JS -->
    <script src="./assets/js/vendor.bundle.js"></script>
    
    <!-- Theme JS -->
    <script src="./assets/js/theme.bundle.js"></script>
</body>

</html>