<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Title -->
    <title>Habitro Dashboard</title>

    <!-- Meta -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="" />
    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="" />
    <!-- Datatable -->
    <link href="<?php echo base_url(); ?>assets/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/datatables/responsive/responsive.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/toastr/css/toastr.min.css">

    <!-- Vectormap -->
    <link href="<?php echo base_url(); ?>assets/vendor/jqvmap/css/jqvmap.min.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/vendor/owl-carousel/owl.carousel.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>/assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css"
        rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/vendor/lightgallery/dist/css/lightgallery.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/vendor/lightgallery/dist/css/lg-thumbnail.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/vendor/lightgallery/dist/css/lg-zoom.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/vendor/magnific-popup/magnific-popup.min.css" rel="stylesheet" />

    <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/css/custom.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/img-comparison-slider@8/dist/styles.css" />

</head>

<body>
    <div id="main-wrapper">
        <div class="nav-header">
            <a href="<?php echo base_url(); ?>dashboard" class="brand-logo">
                <img class="" src="https://ik.imagekit.io/habitro/company/logo.png" alt="/" style="max-width: 130px;" />
            </a>

            <div class="nav-control">
                <div class="hamburger"><span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="dashboard_bar">
                                <div class="search_bar dropdown">
                                    <div class="dropdown-menu p-0 m-0"></div>
                                </div>
                            </div>
                        </div>

                        <ul class="navbar-nav header-right">
                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
                                    <div class="header-info">
                                        <span class="color-white" style="color: #fff">Habitro</span>
                                        <p class="fs-12 mb-0" style="color: #fff">
                                            <?php echo $this->session->userdata('name'); ?> - Admin
                                        </p>
                                    </div>
                                    <i class="fa-solid fa-user fa-xl" style="color: #fff;"></i>

                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="../" target="_blank" class="dropdown-item ai-icon">
                                        <i class="fa-solid fa-globe fa-lg" style="color: #7851a9;"></i>
                                        <span class="ms-2">website</span>
                                    </a>
                                    <a href="<?php echo base_url(); ?>change-password" class="dropdown-item ai-icon">
                                        <i class="fa-solid fa-lock fa-lg" style="color: #7851a9;"></i>
                                        <span class="ms-2">Change Password </span>
                                    </a>
                                    <a href="<?php echo base_url(); ?>welcome/logout" class="dropdown-item ai-icon">
                                        <i class="fa-solid fa-right-from-bracket fa-lg" style="color: #7851a9;"></i>
                                        <span class="ms-2">Logout </span>
                                    </a>
                                </div>
                            </li>

                        </ul>
                    </div>
                </nav>
            </div>
        </div>

        <div class="deznav">
            <div class="deznav-scroll">
                <ul class="metismenu" id="menu">
                    <li>
                        <a class="has-arrow ai-icon" href="<?php echo base_url(); ?>dashboard" aria-expanded="false">
                            <i class="flaticon-dashboard-1"></i>
                            <span class="nav-text">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a class="has-arrow ai-icon" href="<?php echo base_url(); ?>leads" aria-expanded="false">
                            <i class="flaticon-form"></i>
                            <span class="nav-text">Lead Form</span>
                        </a>
                    </li>
                    <li>
                        <a class="has-arrow ai-icon" href="<?php echo base_url(); ?>pricing" aria-expanded="false">
                            <i class="fa-solid fa-tag"></i>
                            <span class="nav-text">Pricing Page</span>
                        </a>
                    </li>
                    <li>
                        <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            <i class="flaticon-landing-page"></i>
                            <span class="nav-text">Pages</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="<?php echo base_url(); ?>home">Home</a></li>
                            <li><a href="<?php echo base_url(); ?>residential">Residential</a></li>
                            <li><a href="<?php echo base_url(); ?>commercial">Commercial</a></li>
                            <li><a href="<?php echo base_url(); ?>construction">Construction</a></li>
                            <li><a href="<?php echo base_url(); ?>renovation">Renovation</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow ai-icon" href="gallery-wall" aria-expanded="false">
                            <i class="fa-solid fa-image"></i>
                            <span class="nav-text">Gallery Wall</span>
                        </a>
                    </li>
                    <li>
                        <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                            <i class="flaticon-content-writing"></i>
                            <span class="nav-text">Blogs</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="<?php echo base_url(); ?>blogs">All Blogs</a></li>
                            <li><a href="<?php echo base_url(); ?>add/new-blog">New Blog</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow ai-icon" href="<?php echo base_url(); ?>profile" aria-expanded="false">
                            <i class="flaticon-settings"></i>
                            <span class="nav-text">Company Profile</span>
                        </a>
                    </li>
                    <li>
                        <a class="has-arrow ai-icon" href="<?php echo base_url(); ?>banner" aria-expanded="false">
                            <i class="flaticon-monitoring"></i>
                            <span class="nav-text">Banner Content</span>
                        </a>
                    </li>
                    <li>
                        <a class="has-arrow ai-icon" href="<?php echo base_url(); ?>call-to-action"
                            aria-expanded="false">
                            <i class="flaticon-multimedia"></i>
                            <span class="nav-text">CTA Content</span>
                        </a>
                    </li>
                    <li>
                        <a class="has-arrow ai-icon" href="<?php echo base_url(); ?>testimonials" aria-expanded="false">
                            <i class="flaticon-test"></i>
                            <span class="nav-text">Testimonial</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <?php $this->load->view($view_page); ?>

        <div class="footer">
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by</p>
            </div>
        </div>
    </div>
    <script src="<?php echo base_url(); ?>/assets/vendor/global/global.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/vendor/chartjs/chart.bundle.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/vendor/owl-carousel/owl.carousel.js"></script>

    <!-- Apex Chart -->
    <script src="<?php echo base_url(); ?>/assets/vendor/apexchart/apexchart.js"></script>
    <!-- Vectormap -->
    <script src="<?php echo base_url(); ?>/assets/vendor/jqvmap/js/jquery.vmap.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/vendor/jqvmap/js/jquery.vmap.world.js"></script>
    <script src="<?php echo base_url(); ?>/assets/vendor/jqvmap/js/jquery.vmap.usa.js"></script>

    <!-- Chart piety plugin files -->
    <script src="<?php echo base_url(); ?>/assets/vendor/peity/jquery.peity.min.js"></script>
    <!-- Datatable -->
    <script src="<?php echo base_url(); ?>/assets/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/vendor/datatables/responsive/responsive.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/plugins-init/datatables.init.js"></script>

    <script src="<?php echo base_url(); ?>/assets/vendor/lightgallery/dist/lightgallery.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/vendor/ckeditor/ckeditor.js"></script>
    <script
        src="<?php echo base_url(); ?>/assets/vendor/lightgallery/dist/plugins/thumbnail/lg-thumbnail.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/vendor/lightgallery/dist/plugins/zoom/lg-zoom.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/vendor/magnific-popup/magnific-popup.js"></script>

    <!-- Toastr -->
    <script src="<?php echo base_url(); ?>assets/vendor/toastr/js/toastr.min.js"></script>

    <script src="<?php echo base_url(); ?>assets/js/plugins-init/toastr-init.js"></script>

    <script src="<?php echo base_url(); ?>/assets/js/dashboard/dashboard-1.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/custom.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/deznav-init.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/img-comparison-slider@8/dist/index.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/41.1.0/classic/ckeditor.js"></script>

    <script>

        document.getElementById("refreshBtn").addEventListener("click", function () {
            // Reload the current page
            location.reload();
        });
        function carouselReview() {
            /*  testimonial one function by = owl.carousel.js */
            jQuery(".testimonial-one").owlCarousel({
                loop: true,
                autoplay: true,
                margin: 0,
                nav: true,
                dots: false,
                navText: ['<i class="las la-long-arrow-alt-left"></i>', '<i class="las la-long-arrow-alt-right"></i>'],
                responsive: {
                    0: {
                        items: 1,
                    },

                    480: {
                        items: 1,
                    },

                    767: {
                        items: 1,
                    },
                    1000: {
                        items: 1,
                    },
                },
            });
            /*Custom Navigation work*/
            jQuery("#next-slide").on("click", function () {
                $(".testimonial-one").trigger("next.owl.carousel");
            });

            jQuery("#prev-slide").on("click", function () {
                $(".testimonial-one").trigger("prev.owl.carousel");
            });
            /*Custom Navigation work*/
        }

        jQuery(window).on("load", function () {
            setTimeout(function () {
                carouselReview();
            }, 1000);
        });
    </script>
    <script>
        // Get the input and image elements
        var imageUrlInput = document.getElementById('imageUrlInput');
        var imagePreview = document.getElementById('imagePreview');

        // Add an event listener to the input field
        imageUrlInput.addEventListener('input', function () {
            // Set the source of the image to the input value
            imagePreview.src = imageUrlInput.value;
        });

        var imageUrlInput2 = document.getElementById('imageUrlInput2');
        var imagePreview2 = document.getElementById('imagePreview2');

        // Add an event listener to the input field
        imageUrlInput2.addEventListener('input', function () {
            // Set the source of the image to the input value
            imagePreview2.src = imageUrlInput2.value;
        });


    </script>

</body>

</html>