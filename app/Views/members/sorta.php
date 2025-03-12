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

        <div class="container-fluid bg-primary py-5 bg-header1" style="margin-bottom: 30px;">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white animated zoomIn">About Us</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar End -->
    <!-- Full Screen Search Start -->
    <?= $this->include('template/form_email') ?>
    <!-- Full Screen Search End -->


    <!-- About Start -->
    <div class="container-fluid py-2 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-2">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="row g-5">
                        <div class="col-lg-3">&nbsp;</div>
                        <div class="col-lg-6 wow slideInUp" data-wow-delay="0.3s">
                            <div class="team-item bg-light rounded overflow-hidden">
                                <div class="team-img position-relative overflow-hidden">
                                    <a href="teammember.html"><img class="img-fluid w-100" src="img/lawyersorta.jpg" alt=""></a>
                                </div>
                                <div class="text-center py-4">
                                    <h6 class="text-primary">SORTA HUTAGALUNG, S.H.</h6>
                                    <p class="text-uppercase m-0">Partner</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">&nbsp;</div>
                    </div>
                    <div class="row g-5">
                        <div class="col-lg-12 wow slideInUp" data-wow-delay="0.3s">
                            </br>
                            <h5 class="mb-0"><?php echo lang('Info.sorta.head_1'); ?></h5>
                            <p class="mb-4"><?php echo lang('Info.sorta.content_1'); ?></p>
                            <h5 class="mb-0"><?php echo lang('Info.sorta.head_2'); ?></h5>
                            <p class="mb-4"><?php echo lang('Info.sorta.content_2'); ?></p>
                            <h5 class="mb-0"><?php echo lang('Info.sorta.head_3'); ?></h5>
                            <p class="mb-4"><?php echo lang('Info.sorta.content_3'); ?></p>
                            <h5 class="mb-0"><?php echo lang('Info.sorta.head_4'); ?></h5>
                            <p class="mb-4"><?php echo lang('Info.sorta.content_4'); ?></p>
                            <h5 class="mb-0"><?php echo lang('Info.sorta.head_5'); ?></h5>
                            <p class="mb-4"><?php echo lang('Info.sorta.content_5'); ?></p>
                            <h5 class="mb-0"><?php echo lang('Info.sorta.head_6'); ?></h5>
                            <p class="mb-4"><?php echo lang('Info.sorta.content_6'); ?></p>
                            <p class="mb-4"><?php echo lang('Info.sorta.content_6b'); ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5" style="min-height: 180px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="img/aboutlaw.jpg" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Team Start -->
    <?= $this->include('template/memberlist') ?>
    <!-- Team End -->


    <!-- Vendor Start -->
    <div class="container-fluid py-2 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-2 mb-5">
            <div class="bg-white">
                <div class="owl-carousel vendor-carousel">
                    <img src="img/vendor-1.jpg" alt="">
                    <img src="img/vendor-2.jpg" alt="">
                    <img src="img/vendor-3.jpg" alt="">
                    <img src="img/vendor-4.jpg" alt="">
                    <img src="img/vendor-5.jpg" alt="">
                    <img src="img/vendor-6.jpg" alt="">
                    <img src="img/vendor-7.jpg" alt="">
                    <img src="img/vendor-8.jpg" alt="">
                    <img src="img/vendor-9.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Vendor End -->


    <?= $this->include('template/footer') ?>
</body>

</html>