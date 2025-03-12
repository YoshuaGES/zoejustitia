<!DOCTYPE html>
<html lang="id">

<?= $this->include('template/head') ?>

<body>
    <!-- Spinner Start -->
    <?= $this->include('template/spinner') ?>
    <!-- Spinner End -->

    <!-- Topbar Start -->
    <?= $this->include('template/topbar') ?>
    <!-- Topbar End -->


    <!-- Navbar & Carousel Start -->
    <?= $this->include('template/navbar') ?>
    <div class="container-fluid bg-primary py-5 bg-header2" style="margin-bottom:30px;">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-2 text-center">
                    <h1 class="display-4 text-white animated zoomIn"><?php echo lang('Info.menu.services'); ?></h1>
                </div>
            </div>
        </div>
    <!-- Navbar & Carousel End -->


    <!-- Full Screen Search Start -->
    <?= $this->include('template/form_email') ?>
    <!-- Full Screen Search End -->


    <!-- Pricing Plan Start -->
    <div class="container-fluid py-2 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-2">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h2 class="fw-bold text-primary text-uppercase"><?php echo lang('Info.services.our-service'); ?></h2>

            </div>
            <div class="row g-0">
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                    <div class="bg-light rounded">
                        <div class="border-bottom py-4 px-5 mb-4">
                            <h4 class="text-primary mb-1"><?php echo lang('Info.services.legal-consultation'); ?></h4>

                        </div>
                        <div class="p-5 pt-0">
                            <span><img class="w-100" src="img/serv1.jpg" alt="Image"></br></br></span>
                            <div class="d-flex justify-content-between mb-3"><?php echo lang('Info.services.legal-consultation-desc'); ?></br>
                                </br>
                                </br>
                                </br>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="bg-white rounded shadow position-relative" style="z-index: 1;">
                        <div class="border-bottom py-4 px-5 mb-4">
                            <h4 class="text-primary mb-1"><?php echo lang('Info.services.general-litigation'); ?></h4>
                        </div>
                        <div class="p-5 pt-0">
                            <span><img class="w-100" src="img/serv2.jpg" alt="Image"></br></br></span>
                            <div class=" justify-content-between mb-3"><?php echo lang('Info.services.general-litigation-desc'); ?></br>
                                </br>
                                </br>
                                </br>
                                </br>
                                </br>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
                    <div class="bg-light rounded">
                        <div class="border-bottom py-4 px-5 mb-4">
                            <h4 class="text-primary mb-1"><?php echo lang('Info.services.corporate-law'); ?></h4>

                        </div>
                        <div class="p-5 pt-0">
                            <span><img class="w-100" src="img/serv3.jpg" alt="Image"></br></br></span>
                            <div class="d-flex justify-content-between mb-3"><?php echo lang('Info.services.corporate-law-desc'); ?></div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pricing Plan End -->
    <!-- Features Start -->
    <div class="container-fluid py-2 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-2">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase"><?php echo lang('Info.choose-us.title'); ?></h5>
                <h1 class="mb-0"><?php echo lang('Info.choose-us.caption'); ?></h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4">
                    <div class="row g-3">
                        <div class="col-12 wow zoomIn" data-wow-delay="0.2s">
                            <h4><?php echo lang('Info.choose-us.head_1'); ?></h4>
                            <p class="mb-0"><?php echo lang('Info.choose-us.content_1'); ?></p>
                        </div>
                        <div class="col-12 wow zoomIn" data-wow-delay="0.6s">
                            <h4><?php echo lang('Info.choose-us.head_2'); ?></h4>
                            <p class="mb-0"><?php echo lang('Info.choose-us.content_1'); ?></p>
                        </div>
                        <div class="col-12 wow zoomIn" data-wow-delay="0.6s">
                            <h4><?php echo lang('Info.choose-us.head_3'); ?></h4>
                            <p class="mb-0"><?php echo lang('Info.choose-us.content_3'); ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4  wow zoomIn" data-wow-delay="0.9s" style="min-height: 350px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.1s" src="img/corevalues.jpg" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="row g-3">
                    <div class="row g-3">
                        <div class="col-12 wow zoomIn" data-wow-delay="0.2s">
                            <h4><?php echo lang('Info.choose-us.head_4'); ?></h4>
                            <p class="mb-0"><?php echo lang('Info.choose-us.content_4'); ?></p>
                        </div>
                        <div class="col-12 wow zoomIn" data-wow-delay="0.6s">
                            <h4><?php echo lang('Info.choose-us.head_5'); ?></h4>
                            <p class="mb-0"><?php echo lang('Info.choose-us.content_5'); ?></p>
                        </div>
                        <div class="col-12 wow zoomIn" data-wow-delay="0.6s">
                            <h4><?php echo lang('Info.choose-us.head_6'); ?></h4>
                            <p class="mb-0"><?php echo lang('Info.choose-us.content_6'); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features Start -->


    <!-- Testimonial Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" hidden>
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-4 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Testimonial</h5>
                <h1 class="mb-0">What Our Clients Say About Our Digital Services</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.6s">
                <div class="testimonial-item bg-light my-4">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                        <img class="img-fluid rounded" src="img/testimonial-1.jpg" style="width: 60px; height: 60px;">
                        <div class="ps-4">
                            <h4 class="text-primary mb-1">Client Name</h4>
                            <small class="text-uppercase">Profession</small>
                        </div>
                    </div>
                    <div class="pt-4 pb-5 px-5">
                        Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam
                    </div>
                </div>
                <div class="testimonial-item bg-light my-4">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                        <img class="img-fluid rounded" src="img/testimonial-2.jpg" style="width: 60px; height: 60px;">
                        <div class="ps-4">
                            <h4 class="text-primary mb-1">Client Name</h4>
                            <small class="text-uppercase">Profession</small>
                        </div>
                    </div>
                    <div class="pt-4 pb-5 px-5">
                        Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam
                    </div>
                </div>
                <div class="testimonial-item bg-light my-4">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                        <img class="img-fluid rounded" src="img/testimonial-3.jpg" style="width: 60px; height: 60px;">
                        <div class="ps-4">
                            <h4 class="text-primary mb-1">Client Name</h4>
                            <small class="text-uppercase">Profession</small>
                        </div>
                    </div>
                    <div class="pt-4 pb-5 px-5">
                        Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam
                    </div>
                </div>
                <div class="testimonial-item bg-light my-4">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                        <img class="img-fluid rounded" src="img/testimonial-4.jpg" style="width: 60px; height: 60px;">
                        <div class="ps-4">
                            <h4 class="text-primary mb-1">Client Name</h4>
                            <small class="text-uppercase">Profession</small>
                        </div>
                    </div>
                    <div class="pt-4 pb-5 px-5">
                        Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Vendor Start -->
    <?= $this->include('template/vendor') ?>
    <!-- Vendor End -->

    <?= $this->include('template/footer') ?>
</body>

</html>