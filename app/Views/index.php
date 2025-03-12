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
    <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/attorneyatlaw.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">Attorney At Law</h1>
                            <butaton type="button" class="btn btn-primary ms-3" data-bs-toggle="modal" data-bs-target="#searchModal"><?php echo lang('Info.menu.free-consultation'); ?></butaton>

                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/legalcounselor.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">Legal Counselor</h1>
                            <butaton type="button" class="btn btn-primary ms-3" data-bs-toggle="modal" data-bs-target="#searchModal">Free Consultation</butaton>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    <!-- Navbar & Carousel End -->


    <!-- Full Screen Search Start -->
    <?= $this->include('template/form_email') ?>
    <!-- Full Screen Search End -->


    <!-- Facts Start -->
    <div class="container-fluid facts py-2 pt-lg-0">
        <div class="container py-2 pt-lg-0">
            <div class="row gx-0">
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.1s">
                    <div class="bg-primary shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                        <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                            <i class="fa fa-users text-primary"></i>
                        </div>
                        <div class="ps-4">
                            <h2 class="text-white mb-0"><?php echo lang('Info.services.legal-consultation'); ?></h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.3s">
                    <div class="bg-light shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                            <i class="fa fa-check text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h2 class="text-primary mb-0"><?php echo lang('Info.services.general-litigation'); ?></h2>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.6s">
                    <div class="bg-primary shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                        <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                            <i class="fa fa-award text-primary"></i>
                        </div>
                        <div class="ps-4">
                            <h2 class="text-white mb-0"><?php echo lang('Info.services.corporate-law'); ?></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Facts Start -->


    <!-- About Start -->
    <div class="container-fluid py-2 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-2">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h2 class="fw-bold text-primary text-uppercase"><?php echo lang('Info.about-us.title'); ?></h2>

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



    <!-- Pricing Plan Start -->
    <div class="container-fluid py-3 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-3">
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
    <div class="container-fluid py-3 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-3">
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

    <!-- Pricing Plan Start -->
    <div class="container-fluid py-3 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-3">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase"><?php echo lang('Info.organization.title'); ?></h5>
                <p class="mb-0"><?php echo lang('Info.organization.caption'); ?>
                </p>
            </div>
            <div class="row g-0">
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                    <div class="bg-light rounded">
                        <div class="border-bottom py-4 px-5 mb-4">
                            <h4 class="text-primary mb-1"><?php echo lang('Info.organization.senior-consultants'); ?></h4>
                        </div>
                        <div class="p-5 pt-0">
                            <div class="d-flex"><i class="fa fa-user-tie text-primary me-3"></i>Kombes Pol (Purn) Rumida Sianturi S.H., M.Hum.</div>
                            <div class="d-flex"><i class="fa fa-user-tie text-primary me-3"></i><a href="/member?name=sorta">Sorta Hutagalung, S.H.</a></div>
                            <div class="d-flex"><i class="fa fa-user-tie text-primary me-3"></i>Dr. Burhan Sidabariba, S.H., M.H.</div>
                            <div class="d-flex"><i class="fa fa-user-tie text-primary me-3"></i>Dr. Horadin Saragih, S.H., M.H.</div>
                            <div class="d-flex"><i class="fa fa-user-tie text-primary me-3"></i>Dr. Erikson Sihotang, S.H., M.H.</div>
                            <div class="d-flex"><i class="fa fa-user-tie text-primary me-3"></i>Simson Panjaitan, S.H., M.B.A.</div>
							<div class="d-flex"><i class="fa fa-user-tie text-primary me-3"></i>Dr. Supardy Marbun, S.H, M.H., C.Neg., QCRO.</div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="bg-white rounded shadow position-relative" style="z-index: 1;">
                        <div class="border-bottom py-4 px-5 mb-4">
                            <h4 class="text-primary mb-1"><?php echo lang('Info.organization.partners'); ?></h4>
                        </div>
                        <div class="p-5 pt-0">
                            <div class="d-flex"><i class="fa fa-user-tie text-primary me-3"></i><a href="/member?name=manogu">Manogu Situngkir, S.H., M.H.</a></div>
                            <div class="d-flex"><i class="fa fa-user-tie text-primary me-3"></i><a href="/member?name=lindung">Lindung Nainggolan, S.H., M.H.</a></div>
                            <div class="d-flex"><i class="fa fa-user-tie text-primary me-3"></i><a href="/member?name=mangantar">Mangantar M Napitupulu, S.H.</a></div>
                            <div class="d-flex"><i class="fa fa-user-tie text-primary me-3"></i><a href="/member?name=mesry">Mesry Rumahorbo, S.H.</a></div>
                            <div class="d-flex"><i class="fa fa-user-tie text-primary me-3"></i>Lorenta, S.H.</div>
                            <div class="d-flex"><i class="fa fa-user-tie text-primary me-3"></i>Rismawaty Manurung, S.H.</div>
							<div class="d-flex"><i class="fa fa-user-tie text-primary me-3"></i><a href="/member?name=anna">Anna D. Tambunan, S.H.</a></div>
                            <div class="d-flex">
                                </br>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="bg-light rounded shadow position-relative" style="z-index: 1;">
                        <div class="border-bottom py-4 px-5 mb-4">
                            <h4 class="text-primary mb-1"><?php echo lang('Info.organization.partners'); ?></h4>
                        </div>
                        <div class="p-5 pt-0">
                            <div class="d-flex"><i class="fa fa-user-tie text-primary me-3"></i>Rondang Helena Pardede, S.H.</div>
                            <div class="d-flex"><i class="fa fa-user-tie text-primary me-3"></i>Dian Prawiro, S.H., M.H.</div>
                            <div class="d-flex"><i class="fa fa-user-tie text-primary me-3"></i>Sigop Tambunan, S.H.</div>
                            <div class="d-flex"><i class="fa fa-user-tie text-primary me-3"></i>Fandi Simbolon, S.H., M.H.</div>
                            <div class="d-flex"><i class="fa fa-user-tie text-primary me-3"></i>Astarina Ginting, S.H.</div>
                            <div class="d-flex"><i class="fa fa-user-tie text-primary me-3"></i>Sudirman Girsang, S.H. (Medan)</div>
                            <div class="d-flex">
                                </br>
                                </br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                </br>
                <h5 class="fw-bold text-primary text-uppercase"><?php echo lang('Info.organization.of-counsel'); ?></h5>
                <p class="mb-0"><?php echo lang('Info.organization.of-counsel-desc'); ?></p>
            </diV>
        </div>
    </div>
    <!-- Pricing Plan End -->

    <!-- Blog Start -->
    <div class="container-fluid py-3 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-3">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h2 class="fw-bold text-primary text-uppercase"><?php echo lang('Info.blog.recent-post'); ?></h2>
                <h4 class="mb-0"><?php echo lang('Info.blog.recent-post-caption'); ?></h4>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="blog-item bg-light rounded overflow-hidden">
                        <div class="blog-img position-relative overflow-hidden">
                            <img class="img-fluid" src="img/blog-1.jpg" alt="">
                            <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href=""><?php echo lang('Info.blog_1.category'); ?></a>
                        </div>
                        <div class="p-4">
                            <div class="d-flex mb-3">
                                <small class="me-3"><i class="far fa-user text-primary me-2"></i><?php echo lang('Info.blog_1.author'); ?></small>
                                <small><i class="far fa-calendar-alt text-primary me-2"></i><?php echo lang('Info.blog_1.date'); ?></small>
                            </div>
                            <h4 class="mb-3"><?php echo lang('Info.blog_1.title'); ?></h4>
                            <p><?php echo lang('Info.blog_1.summary'); ?></p>
                            <a class="text-uppercase" href="/blog-detail?id=1"><?php echo lang('Info.blog.read-more'); ?> <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                    <div class="blog-item bg-light rounded overflow-hidden">
                        <div class="blog-img position-relative overflow-hidden">
                            <img class="img-fluid" src="img/blog-2.jpg" alt="">
                            <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href=""><?php echo lang('Info.blog_2.category'); ?></a>
                        </div>
                        <div class="p-4">
                            <div class="d-flex mb-3">
                                <small class="me-3"><i class="far fa-user text-primary me-2"></i><?php echo lang('Info.blog_2.author'); ?></small>
                                <small><i class="far fa-calendar-alt text-primary me-2"></i><?php echo lang('Info.blog_2.date'); ?></small>
                            </div>
                            <h4 class="mb-3"><?php echo lang('Info.blog_2.title'); ?></h4>
                            <p><?php echo lang('Info.blog_2.summary'); ?></p>
                            <a class="text-uppercase" href="/blog-detail?id=2"><?php echo lang('Info.blog.read-more'); ?> <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
                    <div class="blog-item bg-light rounded overflow-hidden">
                        <div class="blog-img position-relative overflow-hidden">
                            <img class="img-fluid" src="img/blog-3.jpg" alt="">
                            <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href=""><?php echo lang('Info.blog_3.category'); ?></a>
                        </div>
                        <div class="p-4">
                            <div class="d-flex mb-3">
                                <small class="me-3"><i class="far fa-user text-primary me-2"></i><?php echo lang('Info.blog_3.author'); ?></small>
                                <small><i class="far fa-calendar-alt text-primary me-2"></i><?php echo lang('Info.blog_3.date'); ?></small>
                            </div>
                            <h4 class="mb-3"><?php echo lang('Info.blog_3.title'); ?></h4>
                            <p><?php echo lang('Info.blog_3.summary'); ?></p>
                            <a class="text-uppercase" href="/blog-detail?id=3"><?php echo lang('Info.blog.read-more'); ?> <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog Start -->


    <!-- Quote Start -->
    <div class="container-fluid py-3 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-3">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h2 class="fw-bold text-primary"><?php echo lang('Info.menu.free-consultation'); ?></h2>
                        <h4 class="mb-0"><?php echo lang('Info.form-email.caption'); ?></h4>
                    </div>
                    <div class="d-flex align-items-center mt-2 wow zoomIn" data-wow-delay="0.6s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2"><?php echo lang('Info.form-email.call-question'); ?></h5>
                            <h4 class="text-primary mb-0"><?php echo lang('Info.footer.phone'); ?></h4>
                        </div>
                    </div>

                </div>
                <div class="col-lg-7">
                    <div class="bg-primary rounded h-100 d-flex align-items-center p-5 wow zoomIn" data-wow-delay="0.9s">
                        <?= $this->include('template/form') ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Quote End -->

    <!-- Vendor Start -->
    <?= $this->include('template/vendor') ?>
    <!-- Vendor End -->


    <?= $this->include('template/footer') ?>
</body>

</html>