<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Design System for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Argon Design System - Free Design System for Bootstrap 4</title>
  <!-- Favicon -->
  <link href="./assets/img/brand/logo.png" rel="icon" type="image/png">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href=" ./assets/vendor/nucleo/css/nucleo.css" rel="stylesheet">
  <link href="./assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- Argon CSS -->
  <link type="text/css" href="./assets/css/argon.css?v=1.0.1" rel="stylesheet">
  <!-- Docs CSS -->
  <link type="text/css" href="./assets/css/docs.min.css" rel="stylesheet">
  <!-- Font Google -->
  <link href="https://fonts.googleapis.com/css?family=Viga" rel="stylesheet">
  <!-- MY CSS -->
  <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>
  <header class="header-global">
    <nav id="navbar-main" class="navbar navbar-main navbar-expand-lg navbar-transparent navbar-light headroom">
      <div class="container">
        <a class="navbar-brand mr-sm-5" href="./index.php">
          <small>powered by : </small>
          <img src="./assets/img/brand/white.png">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse" id="navbar_global">
          <div class="navbar-collapse-header">
            <div class="row">
              <div class="col-6 collapse-brand">
                <a href="./index.html">
                  <img src="./assets/img/brand/logo.png">
                </a>
              </div>
              <div class="col-6 collapse-close">
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
                  <span></span>
                  <span></span>
                </button>
              </div>
            </div>
          </div>
          <ul class="navbar-nav navbar-nav-hover align-items-lg-center ml-auto">
            <li class="nav-item dropdown">
              <a href="#" class="nav-link" data-toggle="dropdown" href="#" role="button">
                <i class="ni ni-ui-04 d-lg-none"></i>
                <span class="nav-link-inner--text ml-auto">Login</span>
              </a>
            </li>
            <li class="nav-item dropdown">
              <a href="#" class="nav-link" data-toggle="dropdown" href="#" role="button">
                <i class="ni ni-ui-04 d-lg-none"></i>
                <span class="nav-link-inner--text ml-auto">Components</span>
              </a>
            </li>
            <li class="nav-item dropdown">
              <a href="#" class="nav-link" data-toggle="dropdown" href="#" role="button">
                <i class="ni ni-collection d-lg-none"></i>
                <span class="nav-link-inner--text">Examples</span>
              </a>
              <div class="dropdown-menu">
                <a href="./examples/landing.html" class="dropdown-item">Landing</a>
                <a href="./examples/profile.html" class="dropdown-item">Profile</a>
                <a href="./examples/login.html" class="dropdown-item">Login</a>
                <a href="./examples/register.html" class="dropdown-item">Register</a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <main>
    <div class="position-relative">
      <!-- Hero for FREE version -->
      <section class="section section-lg section-hero section-shaped" style="border: 1px solid blue">
        <!-- Background circles -->
        <div class="shape shape-style-1 shape-primary">
          <span class="span-150"></span>
          <span class="span-50"></span>
          <span class="span-50"></span>
          <span class="span-75"></span>
          <span class="span-100"></span>
          <span class="span-75"></span>
          <span class="span-50"></span>
          <span class="span-100"></span>
          <span class="span-50"></span>
          <span class="span-100"></span>
        </div>
        <div class="container shape-container d-flex align-items-center py-sm">
          <div class="col px-0">
            <div class="row align-items-center justify-content-center">
              <div class="col-lg-6 text-center">
                <img src="./assets/img/brand/logo.png" style="width: 150px;" class="img-fluid pb-2">
                <h1 class="display-1 text-white mail">SELAMAT DATANG</h1>
                <q class="text-white"><i>Buku adalah jendela ilmu yang akan membuka cakrawala kehidupan manusia.</i></q>
                <div class="btn-wrapper mt-5">
                  <button type="button" class="btn btn-lg btn-white btn-icon mb-3 mb-sm-0" data-toggle="modal" data-target="#modal-form"><i class="ni ni-cloud-download-95"></i> masuk</button>
                   <div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
                   <div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
                     <div class="modal-content">
                       <div class="modal-body p-0">
                         <div class="card bg-secondary shadow border-0">
                           <div class="card-header bg-white pb-5">
                             <div class="text-muted text-center mb-3">
                               <small>Sign in with</small>
                             </div>
                             <div class="btn-wrapper text-center">
                               <a href="#" class="btn btn-neutral btn-icon">
                                 <span class="btn-inner--icon">
                                   <img src="./assets/img/icons/common/github.svg">
                                 </span>
                                 <span class="btn-inner--text">Github</span>
                               </a>
                               <a href="#" class="btn btn-neutral btn-icon">
                                 <span class="btn-inner--icon">
                                   <img src="./assets/img/icons/common/google.svg">
                                 </span>
                                 <span class="btn-inner--text">Google</span>
                               </a>
                             </div>
                           </div>
                           <div class="card-body px-lg-5 py-lg-5">
                             <div class="text-center text-muted mb-4">
                               <small>Or sign in with credentials</small>
                             </div>
                             <form role="form">
                               <div class="form-group mb-3">
                                 <div class="input-group input-group-alternative">
                                   <div class="input-group-prepend">
                                     <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                   </div>
                                   <input class="form-control" placeholder="Email" type="email">
                                 </div>
                               </div>
                               <div class="form-group">
                                 <div class="input-group input-group-alternative">
                                   <div class="input-group-prepend">
                                     <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                   </div>
                                   <input class="form-control" placeholder="Password" type="password">
                                 </div>
                               </div>
                               <div class="custom-control custom-control-alternative custom-checkbox">
                                 <input class="custom-control-input" id=" customCheckLogin" type="checkbox">
                                 <label class="custom-control-label" for=" customCheckLogin">
                                   <span>Remember me</span>
                                 </label>
                               </div>
                               <div class="text-center">
                                 <button type="button" class="btn btn-primary my-4">Sign in</button>
                               </div>
                             </form>
                           </div>
                         </div>
                       </div>
                     </div>
                   </div>
                 </div>

                  <button type="button" class="btn btn-lg btn-github btn-icon mb-3 mb-sm-0" data-toggle="modal" data-target="#modal-form"><i class="ni ni-cloud-download-95"></i> daftar</button>
                  
                </div>
                <div class="mt-5">
                  <small class="text-white font-weight-bold mb-0 mr-2">*proudly coded by</small>
                  <img src="./assets/img/brand/creativetim-white-slim.png" style="height: 28px;">
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- SVG separator -->
        <div class="separator separator-bottom separator-skew zindex-100">
          <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
            <polygon class="fill-white" points="2560 0 2560 100 0 100"></polygon>
          </svg>
        </div>
      </section>
    </div>
    <section class="section section-components" style="border: 1px solid red">
      <div class="container">
        <h3 class="h4 text-success font-weight-bold mb-4">Tabs</h4>
          <div class="row justify-content-center">
            <div class="col-lg-6">
              <!-- Tabs with icons -->
              <div class="mb-3">
                <small class="text-uppercase font-weight-bold">With icons</small>
              </div>
              <div class="nav-wrapper">
                <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-icons-text" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link mb-sm-3 mb-md-0 active" id="tabs-icons-text-1-tab" data-toggle="tab" href="#tabs-icons-text-1" role="tab" aria-controls="tabs-icons-text-1" aria-selected="true"><i class="ni ni-cloud-upload-96 mr-2"></i>Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-2-tab" data-toggle="tab" href="#tabs-icons-text-2" role="tab" aria-controls="tabs-icons-text-2" aria-selected="false"><i class="ni ni-bell-55 mr-2"></i>Profile</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-3-tab" data-toggle="tab" href="#tabs-icons-text-3" role="tab" aria-controls="tabs-icons-text-3" aria-selected="false"><i class="ni ni-calendar-grid-58 mr-2"></i>Messages</a>
                  </li>
                </ul>
              </div>
              <div class="card shadow">
                <div class="card-body">
                  <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="tabs-icons-text-1" role="tabpanel" aria-labelledby="tabs-icons-text-1-tab">
                      <p class="description">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth.</p>
                      <p class="description">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse.</p>
                    </div>
                    <div class="tab-pane fade" id="tabs-icons-text-2" role="tabpanel" aria-labelledby="tabs-icons-text-2-tab">
                      <p class="description">Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>
                    </div>
                    <div class="tab-pane fade" id="tabs-icons-text-3" role="tabpanel" aria-labelledby="tabs-icons-text-3-tab">
                      <p class="description">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 mt-5 mt-lg-0">
              <!-- Menu -->
              <div class="mb-3">
                <small class="text-uppercase font-weight-bold">With text</small>
              </div>
              <div class="nav-wrapper">
                <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-text" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link mb-sm-3 mb-md-0 active" id="tabs-text-1-tab" data-toggle="tab" href="#tabs-text-1" role="tab" aria-controls="tabs-text-1" aria-selected="true">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link mb-sm-3 mb-md-0" id="tabs-text-2-tab" data-toggle="tab" href="#tabs-text-2" role="tab" aria-controls="tabs-text-2" aria-selected="false">Profile</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link mb-sm-3 mb-md-0" id="tabs-text-3-tab" data-toggle="tab" href="#tabs-text-3" role="tab" aria-controls="tabs-text-3" aria-selected="false">Messages</a>
                  </li>
                </ul>
              </div>
              <div class="card shadow">
                <div class="card-body">
                  <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="tabs-text-1" role="tabpanel" aria-labelledby="tabs-text-1-tab">
                      <p class="description">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth.</p>
                      <p class="description">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse.</p>
                    </div>
                    <div class="tab-pane fade" id="tabs-text-2" role="tabpanel" aria-labelledby="tabs-text-2-tab">
                      <p class="description">Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>
                    </div>
                    <div class="tab-pane fade" id="tabs-text-3" role="tabpanel" aria-labelledby="tabs-text-3-tab">
                      <p class="description">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
        
        <!-- Images -->
        <h2 class="mt-lg mb-5">
          <span>Images</span>
        </h2>
        <div class="row">
          <div class="col-sm-3 col-6">
            <small class="d-block text-uppercase font-weight-bold mb-4">Image</small>
            <img src="./assets/img/theme/team-1-800x800.jpg" alt="Rounded image" class="img-fluid rounded shadow" style="width: 150px;">
          </div>
          <div class="col-sm-3 col-6">
            <small class="d-block text-uppercase font-weight-bold mb-4">Circle Image</small>
            <img src="./assets/img/theme/team-2-800xx 800.jpg" alt="Circle image" class="img-fluid rounded-circle shadow" style="width: 150px;">
          </div>
          <div class="col-sm-3 col-6 mt-5 mt-sm-0">
            <small class="d-block text-uppercase font-weight-bold mb-4">Raised</small>
            <img src="./assets/img/theme/team-3-800x800.jpg" alt="Raised image" class="img-fluid rounded shadow-lg" style="width: 150px;">
          </div>
          <div class="col-sm-3 col-6 mt-5 mt-sm-0">
            <small class="d-block text-uppercase font-weight-bold mb-4">Circle Raised</small>
            <img src="./assets/img/theme/team-4-800x800.jpg" alt="Raised circle image" class="img-fluid rounded-circle shadow-lg" style="width: 150px;">
          </div>
        </div>
        <h2 class="mt-lg mb-5">
          <span>Javascript Components</span>
        </h2>
        <h3 class="h4 text-success font-weight-bold mb-4">Modals</h3>
        <!-- Modals -->
        <div class="row">
          <div class="col-md-4">
            <button type="button" class="btn btn-block btn-primary mb-3" data-toggle="modal" data-target="#modal-default">Default</button>
            <div class="modal fade" id="modal-default" tabindex="-1" role="dialog" aria-labelledby="modal-default" aria-hidden="true">
              <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h6 class="modal-title" id="modal-title-default">Type your modal title</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">×</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                    <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Save changes</button>
                    <button type="button" class="btn btn-link  ml-auto" data-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <button type="button" class="btn btn-block btn-warning mb-3" data-toggle="modal" data-target="#modal-notification">Notification</button>
            <div class="modal fade" id="modal-notification" tabindex="-1" role="dialog" aria-labelledby="modal-notification" aria-hidden="true">
              <div class="modal-dialog modal-danger modal-dialog-centered modal-" role="document">
                <div class="modal-content bg-gradient-danger">
                  <div class="modal-header">
                    <h6 class="modal-title" id="modal-title-notification">Your attention is required</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">×</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <div class="py-3 text-center">
                      <i class="ni ni-bell-55 ni-3x"></i>
                      <h4 class="heading mt-4">You should read this!</h4>
                      <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-white">Ok, Got it</button>
                    <button type="button" class="btn btn-link text-white ml-auto" data-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <button type="button" class="btn btn-block btn-default" data-toggle="modal" data-target="#modal-form">Form</button>
            <div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
              <div class="modal-dialog modal- modal-dialog-centered modal-sm" role="document">
                <div class="modal-content">
                  <div class="modal-body p-0">
                    <div class="card bg-secondary shadow border-0">
                      <div class="card-header bg-white pb-5">
                        <div class="text-muted text-center mb-3">
                          <small>Sign in with</small>
                        </div>
                        <div class="btn-wrapper text-center">
                          <a href="#" class="btn btn-neutral btn-icon">
                            <span class="btn-inner--icon">
                              <img src="./assets/img/icons/common/github.svg">
                            </span>
                            <span class="btn-inner--text">Github</span>
                          </a>
                          <a href="#" class="btn btn-neutral btn-icon">
                            <span class="btn-inner--icon">
                              <img src="./assets/img/icons/common/google.svg">
                            </span>
                            <span class="btn-inner--text">Google</span>
                          </a>
                        </div>
                      </div>
                      <div class="card-body px-lg-5 py-lg-5">
                        <div class="text-center text-muted mb-4">
                          <small>Or sign in with credentials</small>
                        </div>
                        <form role="form">
                          <div class="form-group mb-3">
                            <div class="input-group input-group-alternative">
                              <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                              </div>
                              <input class="form-control" placeholder="Email" type="email">
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="input-group input-group-alternative">
                              <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                              </div>
                              <input class="form-control" placeholder="Password" type="password">
                            </div>
                          </div>
                          <div class="custom-control custom-control-alternative custom-checkbox">
                            <input class="custom-control-input" id=" customCheckLogin" type="checkbox">
                            <label class="custom-control-label" for=" customCheckLogin">
                              <span>Remember me</span>
                            </label>
                          </div>
                          <div class="text-center">
                            <button type="button" class="btn btn-primary my-4">Sign in</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Datepicker -->
        <h3 class="h4 text-success font-weight-bold mt-md mb-4">Datepicker</h3>
        <div class="row">
          <div class="col-md-4">
            <small class="d-block text-uppercase font-weight-bold mb-3">Single date</small>
            <div class="form-group">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                </div>
                <input class="form-control datepicker" placeholder="Select date" type="text" value="06/20/2018">
              </div>
            </div>
          </div>
          <div class="col-md-8 mt-4 mt-md-0">
            <small class="d-block text-uppercase font-weight-bold mb-3">Date range</small>
            <div class="input-daterange datepicker row align-items-center">
              <div class="col">
                <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                    </div>
                    <input class="form-control" placeholder="Start date" type="text" value="06/18/2018">
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                    </div>
                    <input class="form-control" placeholder="End date" type="text" value="06/22/2018">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Tooltips and Popovers -->
        <h3 class="h4 text-success font-weight-bold mt-md mb-4">Tooltips &amp; Popovers</h3>
        <div class="row">
          <div class="col-lg-6">
            <small class="d-block text-uppercase font-weight-bold mb-3">Tooltips</small>
            <button type="button" class="btn btn-sm btn-primary btn-tooltip" data-toggle="tooltip" data-placement="left" title="Tooltip on left" data-container="body" data-animation="true" data-delay="100">On left</button>
            <button type="button" class="btn btn-sm btn-primary btn-tooltip" data-toggle="tooltip" data-placement="top" title="Tooltip on top" data-container="body" data-animation="true">On top</button>
            <button type="button" class="btn btn-sm btn-primary btn-tooltip" data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom" data-container="body" data-animation="true">On bottom</button>
            <button type="button" class="btn btn-sm btn-primary btn-tooltip" data-toggle="tooltip" data-placement="right" title="Tooltip on right" data-container="body" data-animation="true">On right</button>
          </div>
          <div class="col-lg-6 mt-4 mt-lg-0">
            <small class="d-block text-uppercase font-weight-bold mb-3">Popovers</small>
            <button type="button" class="btn btn-sm btn-default" data-container="body" data-original-title="Popover On Left" data-toggle="popover" data-placement="left" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">On left</button>
            <button type="button" class="btn btn-sm btn-default" data-container="body" data-original-title="Popover on Top" data-toggle="popover" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">On top</button>
            <button type="button" class="btn btn-sm btn-default" data-container="body" data-original-title="Popover on Right" data-toggle="popover" data-placement="right" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">On right</button>
            <button type="button" class="btn btn-sm btn-default" data-container="body" data-original-title="Popover on Bottom" data-toggle="popover" data-placement="bottom" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">On bottom</button>
          </div>
        </div>
      </div>
    </section>
    <section class="section section-shaped" style="border: 1px solid green">
      <div class="shape shape-style-1 shape-default">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
      </div>
      <div class="container py-md">
        <div class="row justify-content-between align-items-center">
          <div class="col-lg-5 mb-5 mb-lg-0">
            <h1 class="text-white font-weight-light">Bootstrap carousel</h1>
            <p class="lead text-white mt-4">Argon Design System comes with four pre-built pages to help you get started faster. You can change the text and images and you're good to go.</p>
            <a href="https://demos.creative-tim.com/argon-design-system/docs/components/alerts.html" class="btn btn-white mt-4">See all components</a>
          </div>
          <div class="col-lg-6 mb-lg-auto">
            <div class="rounded shadow-lg overflow-hidden transform-perspective-right">
              <div id="carousel_example" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carousel_example" data-slide-to="0" class="active"></li>
                  <li data-target="#carousel_example" data-slide-to="1"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="img-fluid" src="./assets/img/theme/img-1-1200x1000.jpg" alt="First slide">
                  </div>
                  <div class="carousel-item">
                    <img class="img-fluid" src="./assets/img/theme/img-2-1200x1000.jpg" alt="Second slide">
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carousel_example" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel_example" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- SVG separator -->
      <div class="separator separator-bottom separator-skew">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <polygon class="fill-white" points="2560 0 2560 100 0 100"></polygon>
        </svg>
      </div>
    </section>
   
  </main>
  <footer class="footer has-cards">
    <div class="container container-lg">
      <div class="row">
        <div class="col-md-6 mb-5 mb-md-0">
          <div class="card card-lift--hover shadow border-0">
            <a href="./examples/landing.html" title="Landing Page">
              <img src="./assets/img/theme/landing.jpg" class="card-img">
            </a>
          </div>
        </div>
        <div class="col-md-6 mb-5 mb-lg-0">
          <div class="card card-lift--hover shadow border-0">
            <a href="./examples/profile.html" title="Profile Page">
              <img src="./assets/img/theme/profile.jpg" class="card-img">
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row row-grid align-items-center my-md">
        <div class="col-lg-6">
          <h3 class="text-primary font-weight-light mb-2">Thank you for supporting us!</h3>
          <h4 class="mb-0 font-weight-light">Let's get in touch on any of these platforms.</h4>
        </div>
        <div class="col-lg-6 text-lg-center btn-wrapper">
          <a target="_blank" href="https://twitter.com/creativetim" class="btn btn-neutral btn-icon-only btn-twitter btn-round btn-lg" data-toggle="tooltip" data-original-title="Follow us">
            <i class="fa fa-twitter"></i>
          </a>
          <a target="_blank" href="https://www.facebook.com/creativetim" class="btn btn-neutral btn-icon-only btn-facebook btn-round btn-lg" data-toggle="tooltip" data-original-title="Like us">
            <i class="fa fa-facebook-square"></i>
          </a>
          <a target="_blank" href="https://dribbble.com/creativetim" class="btn btn-neutral btn-icon-only btn-dribbble btn-lg btn-round" data-toggle="tooltip" data-original-title="Follow us">
            <i class="fa fa-dribbble"></i>
          </a>
          <a target="_blank" href="https://github.com/creativetimofficial" class="btn btn-neutral btn-icon-only btn-github btn-round btn-lg" data-toggle="tooltip" data-original-title="Star on Github">
            <i class="fa fa-github"></i>
          </a>
        </div>
      </div>
      <hr>
      <div class="row align-items-center justify-content-md-between">
        <div class="col-md-6">
          <div class="copyright">
            &copy; 2018
            <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a>.
          </div>
        </div>
        <div class="col-md-6">
          <ul class="nav nav-footer justify-content-end">
            <li class="nav-item">
              <a href="https://www.creative-tim.com" class="nav-link" target="_blank">Creative Tim</a>
            </li>
            <li class="nav-item">
              <a href="https://www.creative-tim.com/presentation" class="nav-link" target="_blank">About Us</a>
            </li>
            <li class="nav-item">
              <a href="http://blog.creative-tim.com" class="nav-link" target="_blank">Blog</a>
            </li>
            <li class="nav-item">
              <a href="https://github.com/creativetimofficial/argon-design-system/blob/master/LICENSE.md" class="nav-link" target="_blank">MIT License</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
  <!-- Core -->
  <script src="./assets/vendor/jquery/jquery.min.js"></script>
  <script src="./assets/vendor/popper/popper.min.js"></script>
  <script src="./assets/vendor/bootstrap/bootstrap.min.js"></script>
  <script src="./assets/vendor/headroom/headroom.min.js"></script>
  <!-- Optional JS -->
  <script src="./assets/vendor/onscreen/onscreen.min.js"></script>
  <script src="./assets/vendor/nouislider/js/nouislider.min.js"></script>
  <script src="./assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
  <!-- Argon JS -->
  <script src="./assets/js/argon.js?v=1.0.1"></script>
</body>

</html>