<!DOCTYPE html>

<html lang="en">


<!-- Mirrored from getskills.dexignzone.com/xhtml/form-validation.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 Oct 2022 13:50:37 GMT -->

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="keywords" content="" />
  <meta name="author" content="" />
  <meta name="robots" content="" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="GetSkills  : GetSkills Online Learning Admin Bootstrap 5 Template" />
  <meta property="og:title" content="GetSkills  : GetSkills Online Learning  Admin Bootstrap 5 Template" />
  <meta property="og:description" content="GetSkills  : GetSkills Online Learning  Admin Bootstrap 5 Template" />
  <meta property="og:image" content="social-image.html" />
  <meta name="format-detection" content="telephone=no">

  <!-- PAGE TITLE HERE -->
  <title>Profil utilisateur</title>

  <!-- FAVICONS ICON -->
  <link rel="shortcut icon" type="image/png" href=" <?php echo site_url('assets/images/favicon.png') ?>" />
  <link href="<?php echo site_url('assets/vendor/jquery-nice-select/css/nice-select.css') ?>" rel="stylesheet">
  <link href="<?php echo site_url('assets/css/style.css') ?>" rel="stylesheet">

</head>

<body>

  <!--*******************
        Preloader start
    ********************-->
  <div id="preloader">
    <div class="lds-ripple">
      <div></div>
      <div></div>
    </div>
  </div>
  <!--*******************
        Preloader end
    ********************-->


  <!--**********************************
        Main wrapper start
    ***********************************-->
  <div id="main-wrapper">

    <!--**********************************
            Nav header start
        ***********************************-->
    <div class="nav-header">
      <a href="#" class="brand-logo">
        <svg class="logo-abbr" width="35" height="35" viewBox="0 0 50 53" fill="none"
          xmlns="http://www.w3.org/2000/svg">
          <path class="line-2"
            d="M0 25C0 20.3801 1.28016 15.8505 3.69839 11.9141C6.11663 7.97761 9.57835 4.78822 13.6993 2.69989C17.8203 0.611568 22.4394 -0.294006 27.0438 0.0836832C31.6483 0.461372 36.058 2.10755 39.7836 4.8395L33.2788 13.7101C31.1925 12.1802 28.723 11.2584 26.1445 11.0469C23.566 10.8354 20.9794 11.3425 18.6716 12.5119C16.3639 13.6814 14.4253 15.4675 13.0711 17.6719C11.7169 19.8763 11 22.4128 11 25H0Z"
            fill="#374557" />
          <path class="line-2"
            d="M50 28C50 34.6304 47.3661 40.9893 42.6777 45.6777C37.9893 50.3661 31.6304 53 25 53C18.3696 53 12.0107 50.3661 7.32233 45.6777C2.63392 40.9893 1.00116e-06 34.6304 0 28L11 28C11 31.713 12.475 35.274 15.1005 37.8995C17.726 40.525 21.287 42 25 42C28.713 42 32.274 40.525 34.8995 37.8995C37.525 35.274 39 31.713 39 28H50Z"
            fill="var(--primary)" />
          <path class="line-2" d="M25 28H50L37 47L25 28Z" fill="var(--primary)" />
        </svg>
        <svg class="brand-title" width="304" height="50" viewBox="0 0 282 50" fill="none"
          xmlns="http://www.w3.org/2000/svg">
          <path class="line-3"
            d="M30.68 20.2C29.92 18.8 28.82 17.74 27.38 17.02C25.98 16.26 24.32 15.88 22.4 15.88C19.08 15.88 16.42 16.98 14.42 19.18C12.42 21.34 11.42 24.24 11.42 27.88C11.42 31.76 12.46 34.8 14.54 37C16.66 39.16 19.56 40.24 23.24 40.24C25.76 40.24 27.88 39.6 29.6 38.32C31.36 37.04 32.64 35.2 33.44 32.8H20.42V25.24H42.74V34.78C41.98 37.34 40.68 39.72 38.84 41.92C37.04 44.12 34.74 45.9 31.94 47.26C29.14 48.62 25.98 49.3 22.46 49.3C18.3 49.3 14.58 48.4 11.3 46.6C8.06 44.76 5.52 42.22 3.68 38.98C1.88 35.74 0.98 32.04 0.98 27.88C0.98 23.72 1.88 20.02 3.68 16.78C5.52 13.5 8.06 10.96 11.3 9.16C14.54 7.32 18.24 6.4 22.4 6.4C27.44 6.4 31.68 7.62 35.12 10.06C38.6 12.5 40.9 15.88 42.02 20.2H30.68ZM79.9831 31.72C79.9831 32.68 79.9231 33.68 79.8031 34.72H56.5831C56.7431 36.8 57.4031 38.4 58.5631 39.52C59.7631 40.6 61.2231 41.14 62.9431 41.14C65.5031 41.14 67.2831 40.06 68.2831 37.9H79.2031C78.6431 40.1 77.6231 42.08 76.1431 43.84C74.7031 45.6 72.8831 46.98 70.6831 47.98C68.4831 48.98 66.0231 49.48 63.3031 49.48C60.0231 49.48 57.1031 48.78 54.5431 47.38C51.9831 45.98 49.9831 43.98 48.5431 41.38C47.1031 38.78 46.3831 35.74 46.3831 32.26C46.3831 28.78 47.0831 25.74 48.4831 23.14C49.9231 20.54 51.9231 18.54 54.4831 17.14C57.0431 15.74 59.9831 15.04 63.3031 15.04C66.5431 15.04 69.4231 15.72 71.9431 17.08C74.4631 18.44 76.4231 20.38 77.8231 22.9C79.2631 25.42 79.9831 28.36 79.9831 31.72ZM69.4831 29.02C69.4831 27.26 68.8831 25.86 67.6831 24.82C66.4831 23.78 64.9831 23.26 63.1831 23.26C61.4631 23.26 60.0031 23.76 58.8031 24.76C57.6431 25.76 56.9231 27.18 56.6431 29.02H69.4831ZM104.056 40.3V49H98.8358C95.1158 49 92.2158 48.1 90.1358 46.3C88.0558 44.46 87.0158 41.48 87.0158 37.36V24.04H82.9358V15.52H87.0158V7.36H97.2758V15.52H103.996V24.04H97.2758V37.48C97.2758 38.48 97.5158 39.2 97.9958 39.64C98.4758 40.08 99.2758 40.3 100.396 40.3H104.056ZM275.118 49.48C273.318 49.48 271.838 48.96 270.678 47.92C269.558 46.84 268.998 45.52 268.998 43.96C268.998 42.36 269.558 41.02 270.678 39.94C271.838 38.86 273.318 38.32 275.118 38.32C276.878 38.32 278.318 38.86 279.438 39.94C280.598 41.02 281.178 42.36 281.178 43.96C281.178 45.52 280.598 46.84 279.438 47.92C278.318 48.96 276.878 49.48 275.118 49.48Z"
            fill="var(--primary)" />
          <path class="line-3"
            d="M125.011 49.42C121.931 49.42 119.171 48.92 116.731 47.92C114.291 46.92 112.331 45.44 110.851 43.48C109.411 41.52 108.651 39.16 108.571 36.4H119.491C119.651 37.96 120.191 39.16 121.111 40C122.031 40.8 123.231 41.2 124.711 41.2C126.231 41.2 127.431 40.86 128.311 40.18C129.191 39.46 129.631 38.48 129.631 37.24C129.631 36.2 129.271 35.34 128.551 34.66C127.871 33.98 127.011 33.42 125.971 32.98C124.971 32.54 123.531 32.04 121.651 31.48C118.931 30.64 116.711 29.8 114.991 28.96C113.271 28.12 111.791 26.88 110.551 25.24C109.311 23.6 108.691 21.46 108.691 18.82C108.691 14.9 110.111 11.84 112.951 9.64C115.791 7.4 119.491 6.28 124.051 6.28C128.691 6.28 132.431 7.4 135.271 9.64C138.111 11.84 139.631 14.92 139.831 18.88H128.731C128.651 17.52 128.151 16.46 127.231 15.7C126.311 14.9 125.131 14.5 123.691 14.5C122.451 14.5 121.451 14.84 120.691 15.52C119.931 16.16 119.551 17.1 119.551 18.34C119.551 19.7 120.191 20.76 121.471 21.52C122.751 22.28 124.751 23.1 127.471 23.98C130.191 24.9 132.391 25.78 134.071 26.62C135.791 27.46 137.271 28.68 138.511 30.28C139.751 31.88 140.371 33.94 140.371 36.46C140.371 38.86 139.751 41.04 138.511 43C137.311 44.96 135.551 46.52 133.231 47.68C130.911 48.84 128.171 49.42 125.011 49.42ZM167.145 49L156.945 34.96V49H146.685V4.6H156.945V29.14L167.085 15.52H179.745L165.825 32.32L179.865 49H167.145ZM188.935 12.04C187.135 12.04 185.655 11.52 184.495 10.48C183.375 9.4 182.815 8.08 182.815 6.52C182.815 4.92 183.375 3.6 184.495 2.56C185.655 1.48 187.135 0.939996 188.935 0.939996C190.695 0.939996 192.135 1.48 193.255 2.56C194.415 3.6 194.995 4.92 194.995 6.52C194.995 8.08 194.415 9.4 193.255 10.48C192.135 11.52 190.695 12.04 188.935 12.04ZM194.035 15.52V49H183.775V15.52H194.035ZM211.73 4.6V49H201.47V4.6H211.73ZM229.425 4.6V49H219.165V4.6H229.425ZM250.481 49.48C247.561 49.48 244.961 48.98 242.681 47.98C240.401 46.98 238.601 45.62 237.281 43.9C235.961 42.14 235.221 40.18 235.061 38.02H245.201C245.321 39.18 245.861 40.12 246.821 40.84C247.781 41.56 248.961 41.92 250.361 41.92C251.641 41.92 252.621 41.68 253.301 41.2C254.021 40.68 254.381 40.02 254.381 39.22C254.381 38.26 253.881 37.56 252.881 37.12C251.881 36.64 250.261 36.12 248.021 35.56C245.621 35 243.621 34.42 242.021 33.82C240.421 33.18 239.041 32.2 237.881 30.88C236.721 29.52 236.141 27.7 236.141 25.42C236.141 23.5 236.661 21.76 237.701 20.2C238.781 18.6 240.341 17.34 242.381 16.42C244.461 15.5 246.921 15.04 249.761 15.04C253.961 15.04 257.261 16.08 259.661 18.16C262.101 20.24 263.501 23 263.861 26.44H254.381C254.221 25.28 253.701 24.36 252.821 23.68C251.981 23 250.861 22.66 249.461 22.66C248.261 22.66 247.341 22.9 246.701 23.38C246.061 23.82 245.741 24.44 245.741 25.24C245.741 26.2 246.241 26.92 247.241 27.4C248.281 27.88 249.881 28.36 252.041 28.84C254.521 29.48 256.541 30.12 258.101 30.76C259.661 31.36 261.021 32.36 262.181 33.76C263.381 35.12 264.001 36.96 264.041 39.28C264.041 41.24 263.481 43 262.361 44.56C261.281 46.08 259.701 47.28 257.621 48.16C255.581 49.04 253.201 49.48 250.481 49.48Z"
            fill="#374557" />
        </svg>




      </a>
      <div class="nav-control">
        <div class="hamburger">
          <span class="line"></span><span class="line"></span><span class="line"></span>
        </div>
      </div>
    </div>
    <!--**********************************
            Nav header end
        ***********************************-->

    <!--**********************************
            Chat box start
        ***********************************-->

    <!--**********************************
            Chat box End
        ***********************************-->




    <!--**********************************
            Header start
        ***********************************-->
    <div class="header">
      <div class="header-content">
        <nav class="navbar navbar-expand">
          <div class="collapse navbar-collapse justify-content-between">
            <div class="header-left">
              <div class="dashboard_bar">
                Votre profil
              </div>
            </div>
          </div>
        </nav>
      </div>
    </div>

    <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

    <!--**********************************
            Sidebar start
        ***********************************-->

    <div class="dlabnav">
      <div class="dlabnav-scroll">
        <ul class="metismenu" id="menu">
          <li><a href="./../Accueil.html" aria-expanded="false">
              <i class="bi bi-house"></i>
              <span class="nav-text">Accueil</span>
            </a>
          </li>
          <li class="mm-active">
            <a class="has-arrow " href="javascript:void(0);" aria-expanded="true">
              <i class="bi bi-person"></i>
              <span class="nav-text">Profil</span>
            </a>
            <ul aria-expanded="false" class="mm-show">
              <li><a href="./create_regime.html">Voir mon profil</a></li>
            </ul>
          </li>
          <li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
              <i class="bi bi-grid"></i>
              <span class="nav-text">Regime</span>
            </a>
            <ul aria-expanded="false">
              <li><a href="./create_regime.html">Augmenter poids</a></li>
              <li><a href="./update_regime.html">Diminuer poids</a></li>
              <li><a href="./List_regime.html">Tout les regimes</a></li>
            </ul>
          </li>

          <li>
            <a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
              <i class="fas fa-coins"></i>
              <span class="nav-text">Porte monnaie</span>
            </a>
            <ul aria-expanded="false">
              <li><a href="./Create_monnaie.html">Acheter un credit</a></li>
              <li><a href="./Liste_monnaie.html">Liste tout mes credit</a></li>
            </ul>
          </li>
          <li><a href="./../Login.html" aria-expanded="false">
              <i class="fas fa-sign-out"></i>
              <span class="nav-text">Deconnexion</span>
            </a>
        </ul>
      </div>
    </div>

    <div class="content-body">
      <div class="container-fluid">

        <!-- row -->
        <div class="row">
          <div class="col-lg-12">
            <div class="profile card card-body px-3 pt-3 pb-0">
              <div class="profile-head">
                <div class="photo-content">
                  <div class="cover-photo rounded"></div>
                </div>
                <div class="profile-info">
                  <div class="profile-photo">
                    <img src="./../../assets/images/profile/user.png" class="img-fluid rounded-circle" alt="">
                  </div>
                  <div class="profile-details">
                    <div class="profile-name px-3 pt-2">
                      <h4 class="text-primary mb-0"><?php echo $profil['nom'] ?></h4>
                    </div>
                    <div class="profile-email px-2 pt-2">
                      <h4 class="text-muted mb-0"><?php echo $profil['email'] ?></h4>
                      <p>Email</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-xl-4">
            <div class="row">
              <div class="col-xl-12">
                <div class="card">
                  <div class="card-body">
                    <div class="profile-statistics">
                      <div class="text-center">
                        <div class="row">
                          <div class="col">
                            <h3 class="m-b-0">25 000Ar</h3>
                            <h4>Credit</h4>
                          </div>
                          <div class="col">
                            <h3 class="m-b-0">6</h3>
                            <h4>regimes</h4>
                          </div>
                        </div>
                      </div>
                      <!-- Modal -->
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
          <div class="col-xl-8">
            <div class="row">
              <div class="col-xl-12">
                <div class="card">
                  <div class="card-body">
                    <div class="profile-statistics">
                      <div class="text-center">
                        <div class="row">
                          <div class="col">
                            <h3 class="m-b-0"><?php echo $user['genre'] ?></h3>
                            <h4>genre</h4>
                          </div>
                          <div class="col">
                            <h3 class="m-b-0"><?php echo $user['poids'] ?></h3>
                            <h4>poids <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                data-bs-target="#modifyPoids">
                                <i class="bi bi-pen"></i>
                              </button></h4>


                            <div class="modal fade" id="modifyPoids" tabindex="-1" aria-labelledby="exampleModalLabel"
                              aria-hidden="true">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Modifier le poids</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                      aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">
                                    <form class="d-flex align-items-center flex-wrap">
                                      <div class="mb-12 mb-12">
                                          <label class="sr-only">Nouveau poids</label>
                                          <input type="text" class="form-control" value="56" placeholder="en kg">
                                      </div>
                                      <button type="submit" class="btn btn-success mb-2" style="margin-left: 2%;">Modifier</button>
                                  </form>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                      data-bs-dismiss="modal">Close</button>
                                  </div>
                                </div>
                              </div>
                            </div>


                          </div>
                          <div class="col">
                            <h3 class="m-b-0"><?php echo $user['taille'] ?></h3>
                            <h4>taille <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                data-bs-target="#modifyTaille">
                                <i class="bi bi-pen"></i>
                              </button></h4>


                            <div class="modal fade" id="modifyTaille" tabindex="-1" aria-labelledby="exampleModalLabel"
                              aria-hidden="true">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Modifier le taille</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                      aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">
                                    <form class="d-flex align-items-center flex-wrap">
                                      <div class="mb-12 mb-12">
                                          <label class="sr-only">Nouveau taille</label>
                                          <input type="text" class="form-control" value="170" placeholder="en centimetre">
                                      </div>
                                      <button type="submit" class="btn btn-success mb-2" style="margin-left: 2%;">Modifier</button>
                                  </form>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                      data-bs-dismiss="modal">Close</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- Modal -->
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Liste des regimes</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-responsive-md">
                    <thead>
                      <tr>
                        <th><strong>NOM</strong></th>
                        <th><strong>PRIX</strong></th>
                        <th><strong>TYPE</strong></th>
                        <th><strong>POIDS</strong></th>
                        <th><strong>DURRE</strong></th>
                        <th><strong>Plus</strong></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Kaly be</td>
                        <td>250 000Ar</td>
                        <td><span class="badge badge-success">Augmenter poids</span></td>
                        <td>5kg</td>
                        <td>3 jours</td>
                        <td>
                          <a href="#" class="btn btn-warning"><i class="bi bi-eye"></i> Details</a>
                        </td>
                      </tr>
                      <tr>
                        <td>Vary mora</td>
                        <td>20 000Ar</td>
                        <td><span class="badge badge-light"> Diminuer poids</span></td>
                        <td>10 kg</td>
                        <td>10 jours</td>
                        <td>
                          <a href="#" class="btn btn-warning"><i class="bi bi-eye"></i> Details</a>
                        </td>
                      </tr>
                      <tr>
                        <td>Kaly be</td>
                        <td>250 000Ar</td>
                        <td><span class="badge badge-success">Augmenter poids</span></td>
                        <td>5kg</td>
                        <td>3 jours</td>
                        <td>
                          <a href="#" class="btn btn-warning"><i class="bi bi-eye"></i> Details</a>
                        </td>
                      </tr>
                      <tr>
                        <td>Kaly be</td>
                        <td>250 000Ar</td>
                        <td><span class="badge badge-success">Augmenter poids</span></td>
                        <td>5kg</td>
                        <td>3 jours</td>
                        <td>
                          <a href="#" class="btn btn-warning"><i class="bi bi-eye"></i> Details</a>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>

  </div>
  <!--**********************************
        Main wrapper end
    ***********************************-->

  <!--**********************************
        Scripts
    ***********************************-->
  <!-- Required vendors -->
  <script src=" <?php echo site_url('assets/vendor/jquery-nice-select/js/jquery.nice-select.min.js') ?>"></script>
  <script src=" <?php echo site_url('assets/vendor/global/global.min.js') ?>"></script>
  <script src="<?php echo site_url('assets/js/custom.js') ?>"></script>
  <script src="<?php echo site_url('assets/js/dlabnav-init.js') ?>"></script>
  <script src="<?php echo site_url('assets/js/demo.js') ?>"></script>
  <script src="<?php echo site_url('assets/js/styleSwitcher.js') ?>"></script>
</body>