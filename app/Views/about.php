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
                    <h1 class="display-4 text-white animated zoomIn"><?php echo lang('Info.menu.about-us'); ?></h1>
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
                    <div class="section-title position-relative pb-3 mb-5">
                        <h2 class="fw-bold text-primary text-uppercase">Zoe Justitia Lawfirm</h2>

                    </div>
                    <h5 class="mb-0"><?php echo lang('Info.about-us.head_1'); ?></h5>
                    <p class="mb-4"><?php echo lang('Info.about-us.content_1'); ?></p>
                    <h5 class="mb-0"><?php echo lang('Info.about-us.head_2'); ?></h5>
                    <p class="mb-4"><?php echo lang('Info.about-us.content_2'); ?></p>
                    <p class="mb-4"><?php echo lang('Info.about-us.content_2b'); ?></p>
                    <div class="position-relative pb-3 mb-5">
                        <h5 class="fw-bold text-primary text-uppercase"><?php echo lang('Info.vision.title'); ?></h5>
                        <p class="mb-4"><?php echo lang('Info.vision.content'); ?></p>
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


    <!-- Features Start -->
    <div class="container-fluid py-2 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-2">
            <div class="row g-5">
                <div class="col-lg-4">
                    <div class="row g-5">
                        <div class="col-12 wow zoomIn" data-wow-delay="0.2s">
                            <h5 class="fw-bold text-primary text-uppercase"><?php echo lang('Info.mission.title'); ?></h5>
                            <p class="mb-0"><i class="fa fa-check text-primary me-2"></i><?php echo lang('Info.mission.content_1'); ?></p>
                            </br>
                            <p class="mb-0"><i class="fa fa-check text-primary me-2"></i><?php echo lang('Info.mission.content_2'); ?></p>
                            </br>
                            <p class="mb-0"><i class="fa fa-check text-primary me-2"></i><?php echo lang('Info.mission.content_3'); ?></p>
                            </br>
                            <p class="mb-0"><i class="fa fa-check text-primary me-2"></i><?php echo lang('Info.mission.content_4'); ?></p>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4  wow zoomIn" data-wow-delay="0.9s" style="min-height: 350px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.1s" src="img/visi.jpg" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="row g-5">
                        <div class="col-12 wow zoomIn" data-wow-delay="0.4s">
                            <h5 class="fw-bold text-primary text-uppercase"><?php echo lang('Info.values.title'); ?></h5>
                            <h6 class="text-uppercase"><strong><?php echo lang('Info.values.content_1'); ?></strong></h6>
                            <p class="mb-0"><?php echo lang('Info.values.content_1_desc'); ?></p>
                            </br>
                            <h6 class="text-uppercase"><strong><?php echo lang('Info.values.content_2'); ?></strong></h6>
                            <p class="mb-0"><?php echo lang('Info.values.content_2_desc'); ?></p>
                            </br>
                            <h6 class="text-uppercase"><strong><?php echo lang('Info.values.content_3'); ?></strong></h6>
                            <p class="mb-0"><?php echo lang('Info.values.content_3_desc'); ?></p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features Start -->


    <!-- Team Start -->
    <div id="tm" class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase"><?php echo lang('Info.team.title'); ?></h5>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <a href="/member?name=sorta"><img class="img-fluid w-100" src="img/lawyersorta.jpg" alt=""></a>
                        </div>
                        <div class="text-center py-4">
                            <h6 class="text-primary">SORTA HUTAGALUNG, S.H.</h6>
                            <p class="text-uppercase m-0"><?php echo lang('Info.team.partner'); ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <a href="/member?name=lindung"><img class="img-fluid w-100" src="img/lawyerlindung.jpg" alt=""></a>
                        </div>
                        <div class="text-center py-4">
                            <h6 class="text-primary">LINDUNG NAINGGOLAN, S.H., M.H.</h6>
                            <p class="text-uppercase m-0"><?php echo lang('Info.team.partner'); ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <a href="/member?name=manogu"><img class="img-fluid w-100" src="img/lawyermanogu.jpg" alt=""></a>
                        </div>
                        <div class="text-center py-4">
                            <h6 class="text-primary">MANOGU SITUNGKIR, S.H.,M.H.</h6>
                            <p class="text-uppercase m-0"><?php echo lang('Info.team.partner'); ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Row 2-->
            </br>
            <div class="row g-5">
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <a href="/member?name=mangantar"><img class="img-fluid w-100" src="img/lawyermark.jpg" alt=""></a>
                        </div>
                        <div class="text-center py-4">
                            <h6 class="text-primary">MANGANTAR M NAPITUPULU, S.H.</h6>
                            <p class="text-uppercase m-0"><?php echo lang('Info.team.partner'); ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <a href="/member?name=mesry"><img class="img-fluid w-100" src="img/lawyermesry.jpg" alt=""></a>
                        </div>
                        <div class="text-center py-4">
                            <h6 class="text-primary">MESRY RUMAHORBO, S.H.</h6>
                            <p class="text-uppercase m-0"><?php echo lang('Info.team.partner'); ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <a href="/member?name=anna"><img class="img-fluid w-100" src="img/lawyeranna.jpg" alt=""></a>
                        </div>
                        <div class="text-center py-4">
                            <h6 class="text-primary">ANNA D TAMBUNAN, S.H.</h6>
                            <p class="text-uppercase m-0"><?php echo lang('Info.team.partner'); ?></p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Team End -->


    <!-- Vendor Start -->
    <?= $this->include('template/vendor') ?>
    <!-- Vendor End -->


    <?= $this->include('template/footer') ?>
</body>

</html>