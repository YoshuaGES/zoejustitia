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
    <div class="container-fluid bg-primary py-5 bg-header4" style="margin-bottom:30px;">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-2 text-center">
                    <h1 class="display-4 text-white animated zoomIn"><?php echo lang('Info.contact-us.title'); ?></h1>
                </div>
            </div>
        </div>
    <!-- Navbar & Carousel End -->


    <!-- Full Screen Search Start -->
    <?= $this->include('template/form_email') ?>
    <!-- Full Screen Search End -->


    <!-- Contact Start -->
    <div class="container-fluid py-2 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-2">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase"><?php echo lang('Info.contact-us.title'); ?></h5>
                <h1 class="mb-0"><?php echo lang('Info.contact-us.inquiry'); ?></h1>
            </div>
            <div class="row g-5 mb-5">
                <div class="col-lg-4">
                    <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.1s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2"><?php echo lang('Info.contact-us.call-us'); ?></h5>
                            <h4 class="text-primary mb-0">+62 812 1026 0437</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.4s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <i class="fa fa-envelope-open text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2"><?php echo lang('Info.contact-us.email-us'); ?></h5>
                            <h4 class="text-primary mb-0">zoejustitia@gmail.com</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.8s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <i class="fa fa-map-marker-alt text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2"><?php echo lang('Info.contact-us.visit-us'); ?></h5>
                            <h4 class="text-primary mb-0">Jl. Cempaka Putih Barat XVI/2A</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-5">
                <div class="col-lg-6 wow slideInUp" data-wow-delay="0.3s">
                    <?= $this->include('template/form') ?>
                </div>
                <div class="col-lg-6 wow slideInUp" data-wow-delay="0.6s">
                    <!-- <iframe class="position-relative rounded w-100 h-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.038171896171!2d106.86700157499061!3d-6.2587022937298515!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f2fe67ecd32b%3A0x32bfa143595a8368!2sGedung%20Harvest%20(JKI%20Harvest)!5e0!3m2!1sid!2sid!4v1711465152540!5m2!1sid!2sid"
                        frameborder="0" style="min-height: 350px; border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe> -->
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.616224188506!2d106.86335351038885!3d-6.182090660547981!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f4f89029e947%3A0xa518f28c9c96f218!2sJl.%20Cemp.%20Putih%20Barat%20XVI%20No.2a%2C%20RT.9%2FRW.7%2C%20Cemp.%20Putih%20Bar.%2C%20Kec.%20Cemp.%20Putih%2C%20Kota%20Jakarta%20Pusat%2C%20Daerah%20Khusus%20Ibukota%20Jakarta%2010520!5e0!3m2!1sen!2sid!4v1718123121469!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


    <!-- Vendor Start -->
    <?= $this->include('template/vendor') ?>
    <!-- Vendor End -->


    <?= $this->include('template/footer') ?>
</body>

</html>