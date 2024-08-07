<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="copyright" content="MACode ID, https://macodeid.com/">

    <title>One Health </title>

    <link rel="stylesheet" href="../node_modules/bootstrap-icons/font/bootstrap-icons.min.css">

    <link rel="stylesheet" href="../assets/css/maicons.css">

    <link rel="stylesheet" href="../assets/css/bootstrap.css">

    <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

    <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

    <link rel="stylesheet" href="../assets/css/theme.css">
</head>

<body>

    <!-- Back to top button -->
    <div class="back-to-top"></div>

    <header>
        <div class="topbar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 text-sm">
                        <div class="site-info">
                            <a href="#"><span class="mai-call text-primary"></span> +00 123 4455 6666</a>
                            <span class="divider">|</span>
                            <a href="#"><span class="mai-mail text-primary"></span> mail@example.com</a>
                        </div>
                    </div>
                    <div class="col-sm-4 text-right text-sm">
                        <div class="social-mini-button">
                            <a href="#"><span class="mai-logo-facebook-f"></span></a>
                            <a href="#"><span class="mai-logo-twitter"></span></a>
                            <a href="#"><span class="mai-logo-dribbble"></span></a>
                            <a href="#"><span class="mai-logo-instagram"></span></a>

                      </div>
                    </div>
                </div> <!-- .row -->
            </div> <!-- .container -->
        </div> <!-- .topbar -->

        <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="#"><span class="text-primary">One</span>-Health</a>

                <form action="#">
                    <div class="input-group input-navbar">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="icon-addon1"><span class="mai-search"></span></span>
                        </div>
                        <input type="text" class="form-control" placeholder="Enter keyword.." aria-label="Username"
                            aria-describedby="icon-addon1">
                    </div>
                </form>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport"
                    aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupport">
                    <ul class="navbar-nav ">
                        <li class="nav-item active">
                            <a class="nav-link" href=<?php echo e(url('/')); ?>>Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">Doctors</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">News</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="">Contact</a>
                        </li>

                        <?php if(Route::has('login')): ?>

                            <?php if(auth()->guard()->check()): ?>

                            <li class="nav-item">
                                <a class="nav-link" style="background-color: greenyellow; color: white;" href="<?php echo e(url('myappointment')); ?>">My Appointment</a>
                              </li>

                                <?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54 = $attributes; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $attributes = $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
                            <?php else: ?>
                                <li class="nav-item">
                                    <a class="btn btn-primary ml-lg-3" href="<?php echo e(route('login')); ?>">Login</a>
                                </li>
                                <li class="nav-item">
                                    <a class="btn btn-primary ml-lg-3" href="<?php echo e(route('register')); ?>">Register</a>
                                </li>

                            <?php endif; ?>

                        <?php endif; ?>

                    </ul>
                </div> <!-- .navbar-collapse -->
            </div> <!-- .container -->
        </nav>
    </header>

    <?php if(@session()->has('message')): ?>
        <div class="alert alert-success">
            <?php echo e(session()->get('message')); ?>

            <button type="button" class="close"  onclick="$(this).parent().hide()">x </button>


        </div>
        <?php endif; ?>
        <div class="page-hero bg-image overlay-dark" style="background-image: url(../assets/img/bg_image_1.jpg);">
            <div class="hero-section">
                <div class="container text-center wow zoomIn">
                    <span class="subhead">Let's make your life happier</span>
                    <h1 class="display-4">Healthy Living</h1>
                    <a href="#" class="btn btn-primary">Let's Consult</a>
                </div>
            </div>
        </div>


        <div class="bg-light">
            <div class="page-section py-3 mt-md-n5 custom-index">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-4 py-3 py-md-0">
                            <div class="card-service wow fadeInUp">
                                <div class="circle-shape bg-secondary text-white">
                                    <span class="mai-chatbubbles-outline"></span>
                                </div>
                                <p><span>Chat</span> with a doctors</p>
                            </div>
                        </div>
                        <div class="col-md-4 py-3 py-md-0">
                            <div class="card-service wow fadeInUp">
                                <div class="circle-shape bg-primary text-white">
                                    <span class="mai-shield-checkmark"></span>
                                </div>
                                <p><span>One</span>-Health Protection</p>
                            </div>
                        </div>
                        <div class="col-md-4 py-3 py-md-0">
                            <div class="card-service wow fadeInUp">
                                <div class="circle-shape bg-accent text-white">
                                    <span class="mai-basket"></span>
                                </div>
                                <p><span>One</span>-Health Pharmacy</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- .page-section -->

            <div class="page-section pb-0">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 py-3 wow fadeInUp">
                            <h1>Welcome to Your Health <br> Center</h1>
                            <p class="text-grey mb-4">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                                nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam
                                voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Accusantium aperiam
                                earum ipsa eius, inventore nemo labore eaque porro consequatur ex aspernatur. Explicabo,
                                excepturi accusantium! Placeat voluptates esse ut optio facilis!</p>
                            <a href="about.html" class="btn btn-primary">Learn More</a>
                        </div>
                        <div class="col-lg-6 wow fadeInRight" data-wow-delay="400ms">
                            <div class="img-place custom-img-1">
                                <img src="../assets/img/bg-doctor.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- .bg-light -->
        </div> <!-- .bg-light -->

        <?php echo $__env->make('user.doctor', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <?php echo $__env->make('user.latest', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <?php echo $__env->make('user.appointment', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="page-section banner-home bg-image"
            style="background-image: url(../assets/img/banner-pattern.svg);">
            <div class="container py-5 py-lg-0">
                <div class="row align-items-center">
                    <div class="col-lg-4 wow zoomIn">
                        <div class="img-banner d-none d-lg-block">
                            <img src="../assets/img/mobile_app.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-8 wow fadeInRight">
                        <h1 class="font-weight-normal mb-3">Get easy access of all features using One Health
                            Application</h1>
                        <a href="#"><img src="../assets/img/google_play.svg" alt=""></a>
                        <a href="#" class="ml-2"><img src="../assets/img/app_store.svg" alt=""></a>
                    </div>
                </div>
            </div>
        </div> <!-- .banner-home -->

        <footer class="page-footer">
            <div class="container">
                <div class="row px-md-3">
                    <div class="col-sm-6 col-lg-3 py-3">
                        <h5>Company</h5>
                        <ul class="footer-menu">
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Career</a></li>
                            <li><a href="#">Editorial Team</a></li>
                            <li><a href="#">Protection</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-lg-3 py-3">
                        <h5>More</h5>
                        <ul class="footer-menu">
                            <li><a href="#">Terms & Condition</a></li>
                            <li><a href="#">Privacy</a></li>
                            <li><a href="#">Advertise</a></li>
                            <li><a href="#">Join as Doctors</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-lg-3 py-3">
                        <h5>Our partner</h5>
                        <ul class="footer-menu">
                            <li><a href="#">One-Fitness</a></li>
                            <li><a href="#">One-Drugs</a></li>
                            <li><a href="#">One-Live</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-lg-3 py-3">
                        <h5>Contact</h5>
                        <p class="footer-link mt-2">351 Willow Street Franklin, MA 02038</p>
                        <a href="#" class="footer-link">701-573-7582</a>
                        <a href="#" class="footer-link">healthcare@temporary.net</a>

                        <h5 class="mt-3">Social Media</h5>
                        <div class="footer-sosmed mt-3">
                            <a href="#" target="_blank"><span class="mai-logo-facebook-f"></span></a>
                            <a href="#" target="_blank"><span class="mai-logo-twitter"></span></a>
                            <a href="#" target="_blank"><span class="mai-logo-google-plus-g"></span></a>
                            <a href="#" target="_blank"><span class="mai-logo-instagram"></span></a>
                            <a href="#" target="_blank"><span class="mai-logo-linkedin"></span></a>
                        </div>
                    </div>
                </div>

                <hr>

                <p id="copyright">Copyright &copy; 2020 <a href="https://macodeid.com/" target="_blank">MACode
                        ID</a>. All right reserved</p>
            </div>
        </footer>

        <script src="../assets/js/jquery-3.5.1.min.js"></script>

        <script src="../assets/js/bootstrap.bundle.min.js"></script>

        <script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

        <script src="../assets/vendor/wow/wow.min.js"></script>

        <script src="../assets/js/theme.js"></script>

</html>
<?php /**PATH D:\hms\resources\views/user/home.blade.php ENDPATH**/ ?>