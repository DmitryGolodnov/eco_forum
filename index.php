<!doctype html>
<html lang="eng">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Eco Forum</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link href='https://fonts.googleapis.com/css?family=Oxygen:400,300,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Lora' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css2?family=Marck+Script&display=swap" rel="stylesheet">
</head>

<body>
    <!-- HEADER START -->
    <header>
        <nav id="header-nav" class="navbar navbar-default">
            <div class="container1">
                <div class="jumbotron1">
                    <div class="navbar-header">


                        <button id="navbarToggle" type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#collapsable-nav" aria-expanded="fasle">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>

                    <div id="collapsable-nav" class="header_main collapse navbar-collapse">
                        <ul id="nav-list" class="nav navbar-nav navbar-left">
                            <li>
                                <a href="#menu-categories-title" class="visible-xs hidden-sm visible-md visible-lg">
                                    <span>News</span></a>
                            </li>
                            <li id="navMenuButton">
                                <a href="#menu-categories-title">
                                    <span>About us</span></a>
                            </li>

                            <li>
                                <a href="#testimonials" class="visible-xs visible-sm visible-md visible-lg">
                                    <span>Donate</span></a>
                            </li>
                        </ul><!-- #nav-list -->
                        <ul id="nav-list" class="nav navbar-nav navbar-right">
                            <?php
                            session_start();
                            if ($_SESSION["logged_in"] == "Success"){
                              echo
                              '<li>
                                  <a href="profile.php" class="visible-xs hidden-sm visible-md visible-lg">
                                      <span>'.$_SESSION["nickname"].'</span>
                                  </a>
                              </li>
                              <li>
                                  <a href="logout.php" class="visible-xs hidden-sm visible-md visible-lg">
                                      <span>Log out</span>
                                  </a>
                              </li>';
                            }
                            else {
                              echo
                              '<li>
                                  <a href="authorization.php" class="visible-xs hidden-sm visible-md visible-lg">
                                      <span>Sign in</span>
                                  </a>
                              </li>
                              <li>
                                  <a href="registration.php" class="visible-xs hidden-sm visible-md visible-lg">
                                      <span>Sign up</span>
                                  </a>
                              </li>';
                            }                            
                            ?>
                        </ul>
                    </div><!-- .collapse .navbar-collapse -->
                    <div class="brand">
                        <a href="index.html">
                            <h1>Eco Forum</h1>
                        </a>
                    </div>
                    <div class="slogan hidden-xs">#SaveOurPlanet</div>
                    <div id="call-btn" class="visible-xs">
                        <a class="btn" href="tel:+7-(912)-345-67-89">
                            <span class="glyphicon glyphicon-earphone"></span>
                            +7-(912)-345-67-89
                        </a>
                    </div>
                </div>
            </div><!-- .container -->

        </nav><!-- #header-nav -->
    </header>
    <!-- HEADER END -->

    <div id="main-content" class="container">

        <h2 id="menu-categories-title" class="text-center">???????? ????????????</h2>

        <section class="row">
            <div class="menu-item-tile col-md-6">
                <div class="row">
                    <div class="menu-item-details">
                        <div>??????????????</div>
                        <div>500 ???</div>
                    </div>
                    <hr>
                </div>
            </div>

            <div class="menu-item-tile col-md-6">
                <div class="row">
                    <div class="menu-item-details">
                        <div>??????????????</div>
                        <div>500 ???</div>
                    </div>
                    <hr>
                </div>
            </div>
            <!-- Add after every 2nd menu-item-tile -->
            <div class="clearfix visible-lg-block visible-md-block"></div>

            <div class="menu-item-tile col-md-6">
                <div class="row">
                    <div class="menu-item-details">
                        <div>??????????????</div>
                        <div>500 ???</div>
                    </div>
                    <hr>
                </div>
            </div>

            <div class="menu-item-tile col-md-6">
                <div class="row">
                    <div class="menu-item-details">
                        <div>??????????????</div>
                        <div>500 ???</div>
                    </div>
                    <hr>
                </div>
            </div>
            <!-- Add after every 2nd menu-item-tile -->
            <div class="clearfix visible-lg-block visible-md-block"></div>
            <div class="menu-item-tile col-md-6">
                <div class="row">
                    <div class="menu-item-details">
                        <div>??????????????</div>
                        <div>500 ???</div>
                    </div>
                    <hr>
                </div>
            </div>

            <div class="menu-item-tile col-md-6">
                <div class="row">
                    <div class="menu-item-details">
                        <div>??????????????</div>
                        <div>500 ???</div>
                    </div>
                    <hr>
                </div>
            </div>
            <!-- Add after every 2nd menu-item-tile -->
            <div class="clearfix visible-lg-block visible-md-block"></div>
        </section>
        <h2 class="text-center" id="review">???????????? ?? ?????????? ????????????</h2>
        <h3 id="menu-categories-title" class="text-center">?????? ???????????? ?????????? ?? ?????????? <a
                href="https://vk.com/pojiloybeavis" class="group-ref">?????????????????????? ???????????? ??????????????????</a></h3>

        <section class="row">
            <div class="menu-item-tile col-md-6">
                <div class="row">
                    <div class="review-item">
                        <div>???????????? ?????????????? ?? ??????????????, ?????????????? ?? ???????? ?????? ?????????? ??????????????????????, ?????????????????? ??????????????????,
                            ??????????,??????????????!!!!?????????????? ???????????? ??????????????!!!! ?????????????? ?????????????? ????????????????. ?????????????? ?????????? ??????!!!!
                        </div>
                        <div class="review-author">- ????????????????</div>
                    </div>
                    <hr>
                </div>
            </div>
            <div class="menu-item-tile col-md-6">
                <div class="row">
                    <div class="review-item">
                        <div>???????????? ?????????????? ?? ??????????????, ?????????????? ?? ???????? ?????? ?????????? ??????????????????????, ?????????????????? ??????????????????,
                            ??????????,??????????????!!!!?????????????? ???????????? ??????????????!!!! ?????????????? ?????????????? ????????????????. ?????????????? ?????????? ??????!!!!
                        </div>
                        <div class="review-author">- ????????????????</div>
                    </div>
                    <hr>
                </div>
            </div>
            <div class="clearfix visible-lg-block visible-md-block"></div>
            <div class="menu-item-tile col-md-6">
                <div class="row">
                    <div class="review-item">
                        <div>???????????? ?????????????? ?? ??????????????, ?????????????? ?? ???????? ?????? ?????????? ??????????????????????, ?????????????????? ??????????????????,
                            ??????????,??????????????!!!!?????????????? ???????????? ??????????????!!!! ?????????????? ?????????????? ????????????????. ?????????????? ?????????? ??????!!!!
                        </div>
                        <div class="review-author">- ????????????????</div>
                    </div>
                    <hr>
                </div>
            </div>
            <div class="menu-item-tile col-md-6">
                <div class="row">
                    <div class="review-item">
                        <div>???????????? ?????????????? ?? ??????????????, ?????????????? ?? ???????? ?????? ?????????? ??????????????????????, ?????????????????? ??????????????????,
                            ??????????,??????????????!!!!?????????????? ???????????? ??????????????!!!! ?????????????? ?????????????? ????????????????. ?????????????? ?????????? ??????!!!!
                        </div>
                        <div class="review-author">- ????????????????</div>
                    </div>
                    <hr>
                </div>
            </div>
            <div class="clearfix visible-lg-block visible-md-block"></div>
        </section>

        <div id="home-tiles" class="row">

            <div>
                <a href="https://goo.gl/maps/ARV4HZa2UsqwsnLf9" target="_blank">
                    <div id="map-tile">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d19330.646121710717!2d41.444353136523425!3d52.726223503427995!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4139143b9cfe011d%3A0x84dab8189e36a7ff!2z0KLQsNC80LHQvtCyLCDQotCw0LzQsdC-0LLRgdC60LDRjyDQvtCx0Lsu!5e0!3m2!1sru!2sru!4v1590257118045!5m2!1sru!2sru"
                            width=100% height="450" frameborder="0" style="border:0;" allowfullscreen=""
                            aria-hidden="false" tabindex="0"></iframe>
                        <span>??????????</span>
                    </div>
                </a>
            </div>
        </div><!-- End of #home-tiles -->
    </div><!-- End of #main-content -->

    <footer class="panel-footer">
        <div class="container">
            <div class="row">
                <section id="hours" class="col-sm-4">
                    <span>?????????? ????????????:</span><br>
                    ?????????????????????? - ??????????????: 9:00 - 19:00<br>
                    ??????????????: 9:00 - 17:00<br>
                    ??????????????????????: ??????????????
                    <hr class="visible-xs">
                </section>
                <section id="address" class="col-sm-4">
                    <span>??????????:</span><br>
                    ????????????, ?????????? ??????????????,
                    <br>
                    ??. 1
                    <br>
                    <br>
                    <span><a href="https://vk.com/pojiloybeavis" target="_blank" class="hidden-xs">
                            <svg class="t-sociallinks__svg" version="1.1" id="Layer_1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                                y="0px" width="30px" height="30px" viewBox="0 0 48 48" enable-background="new 0 0 48 48"
                                xml:space="preserve">
                                <desc>VK</desc>
                                <path style="fill:#ffffff;"
                                    d="M47.761,24c0,13.121-10.639,23.76-23.76,23.76C10.878,47.76,0.239,37.121,0.239,24c0-13.123,10.639-23.76,23.762-23.76C37.122,0.24,47.761,10.877,47.761,24 M35.259,28.999c-2.621-2.433-2.271-2.041,0.89-6.25c1.923-2.562,2.696-4.126,2.45-4.796c-0.227-0.639-1.64-0.469-1.64-0.469l-4.71,0.029c0,0-0.351-0.048-0.609,0.106c-0.249,0.151-0.414,0.505-0.414,0.505s-0.742,1.982-1.734,3.669c-2.094,3.559-2.935,3.747-3.277,3.524c-0.796-0.516-0.597-2.068-0.597-3.171c0-3.449,0.522-4.887-1.02-5.259c-0.511-0.124-0.887-0.205-2.195-0.219c-1.678-0.016-3.101,0.007-3.904,0.398c-0.536,0.263-0.949,0.847-0.697,0.88c0.31,0.041,1.016,0.192,1.388,0.699c0.484,0.656,0.464,2.131,0.464,2.131s0.282,4.056-0.646,4.561c-0.632,0.347-1.503-0.36-3.37-3.588c-0.958-1.652-1.68-3.481-1.68-3.481s-0.14-0.344-0.392-0.527c-0.299-0.222-0.722-0.298-0.722-0.298l-4.469,0.018c0,0-0.674-0.003-0.919,0.289c-0.219,0.259-0.018,0.752-0.018,0.752s3.499,8.104,7.573,12.23c3.638,3.784,7.764,3.36,7.764,3.36h1.867c0,0,0.566,0.113,0.854-0.189c0.265-0.288,0.256-0.646,0.256-0.646s-0.034-2.512,1.129-2.883c1.15-0.36,2.624,2.429,4.188,3.497c1.182,0.812,2.079,0.633,2.079,0.633l4.181-0.056c0,0,2.186-0.136,1.149-1.858C38.281,32.451,37.763,31.321,35.259,28.999">
                                </path>
                            </svg>
                        </a></span>
                    <span><a href="https://vk.com/pojiloybeavis" target="_blank" class="hidden-xs">
                            <svg class="t-sociallinks__svg" version="1.1" id="Layer_1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="30px" height="30px" viewBox="0 0 30 30" xml:space="preserve">
                                <desc>Instagram</desc>
                                <path style="fill:#ffffff;"
                                    d="M15,11.014 C12.801,11.014 11.015,12.797 11.015,15 C11.015,17.202 12.802,18.987 15,18.987 C17.199,18.987 18.987,17.202 18.987,15 C18.987,12.797 17.199,11.014 15,11.014 L15,11.014 Z M15,17.606 C13.556,17.606 12.393,16.439 12.393,15 C12.393,13.561 13.556,12.394 15,12.394 C16.429,12.394 17.607,13.561 17.607,15 C17.607,16.439 16.444,17.606 15,17.606 L15,17.606 Z">
                                </path>
                                <path style="fill:#ffffff;"
                                    d="M19.385,9.556 C18.872,9.556 18.465,9.964 18.465,10.477 C18.465,10.989 18.872,11.396 19.385,11.396 C19.898,11.396 20.306,10.989 20.306,10.477 C20.306,9.964 19.897,9.556 19.385,9.556 L19.385,9.556 Z">
                                </path>
                                <path style="fill:#ffffff;"
                                    d="M15.002,0.15 C6.798,0.15 0.149,6.797 0.149,15 C0.149,23.201 6.798,29.85 15.002,29.85 C23.201,29.85 29.852,23.202 29.852,15 C29.852,6.797 23.201,0.15 15.002,0.15 L15.002,0.15 Z M22.666,18.265 C22.666,20.688 20.687,22.666 18.25,22.666 L11.75,22.666 C9.312,22.666 7.333,20.687 7.333,18.28 L7.333,11.734 C7.333,9.312 9.311,7.334 11.75,7.334 L18.25,7.334 C20.688,7.334 22.666,9.312 22.666,11.734 L22.666,18.265 L22.666,18.265 Z">
                                </path>
                            </svg>
                        </a></span>
                    <hr class="visible-xs">
                </section>
                <section id="testimonials" class="col-sm-4">
                    <div class="footer-nav-head">??????????????:</div>
                    <a href="gallery.html">
                        <div class="footer-nav">??????????????</div>
                    </a>
                    <a href="#menu-categories-title">
                        <div class="footer-nav">????????????</div>
                    </a>
                    <a href="#testimonials">
                        <div class="footer-nav">????????????????</div>
                    </a>
                    <a href="#testimonials">
                        <div class="footer-nav">????????????????</div>
                    </a>
                    <a href="#review">
                        <div class="footer-nav">????????????</div>
                    </a>
                </section>
            </div>
            <div class="text-center">&copy; Copyright BeavisProduction 2020</div>
        </div>
    </footer>

    <!-- jQuery (Bootstrap JS plugins depend on it) -->
    <script src="js/jquery-2.1.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/script.js"></script>
</body>

</html>