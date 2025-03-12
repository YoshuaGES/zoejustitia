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

    <div class="container-fluid bg-primary py-5 bg-header3" style="margin-bottom:30px;">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-2 text-center">
                    <h1 class="display-4 text-white animated zoomIn">Edu Law Center</h1>
                </div>
            </div>
        </div>
    <!-- Navbar & Carousel End -->


    <!-- Full Screen Search Start -->
    <?= $this->include('template/form_email') ?>
    <!-- Full Screen Search End -->


    <!-- Blog Start -->
    <div class="container-fluid py-2 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-2">
            <div class="row g-5">
                <!-- Blog list Start -->
                <div class="col-lg-8">
                    <div class="row g-5">
                        <div class="col-md-12 wow slideInUp" data-wow-delay="0.6s" <?= ($show_lc == false ? 'hidden' : '') ?>>
                            <div class="blog-item rounded overflow-hidden">
                                <div class="position-relative overflow-hidden" style="display:flex;">
                                    <img class="img-fluid" style="width:50%; margin:10px;" src="img/WebbinarMaret2025.jpg" alt="">
                                  <!-- <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href=""><?php //echo lang('Info.blog_1.category'); ?></a> -->
                                    <img class="img-fluid" style="width:50%; margin:10px;" src="img/Web_12-10-24.jpg" alt="">
                                  <!-- <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href=""><?php //echo lang('Info.blog_1.category'); ?></a> -->
                                </div>
                                <div class="position-relative overflow-hidden">
                                    <img class="img-fluid" style="width:50%; margin: 10px;" src="img/webfeb2025.jpg" alt="">
                                  <!-- <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href=""><?php //echo lang('Info.blog_1.category'); ?></a> -->
                                    <img class="img-fluid" style="width:50%; margin: 10px;" src="img/webbinar03092024.jpg" alt="">
                                  <!-- <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href=""><?php //echo lang('Info.blog_1.category'); ?></a> -->
                                </div>
                                <div class="position-relative overflow-hidden">
                                    <video class="img-fluid" style="width:75%; margin: 10px;" controls>
                                        <source src="vid/Webinar.mp4" type="video/mp4">
                                        Your browser does not support the video tag.
                                    </video>
                                </div>

								<!--
                                <div class="p-4">
                                    <div class="d-flex mb-3">
                                        <small class="me-3"><i class="far fa-user text-primary me-2"></i><?php echo lang('Info.blog_1.author'); ?></small>
                                        <small><i class="far fa-calendar-alt text-primary me-2"></i><?php echo lang('Info.blog_1.date'); ?></small>
                                    </div>
                                    <h4 class="mb-3"><?php echo lang('Info.blog_1.title'); ?></h4>
                                    <p><?php echo lang('Info.blog_1.summary'); ?></p>
                                    <a class="text-uppercase" href="/blog-detail?id=1"><?php echo lang('Info.blog.read-more'); ?> <i class="bi bi-arrow-right"></i></a>
                                </div>
								-->
                            </div>
                        </div>
						<!--
                        <div class="col-md-6 wow slideInUp" data-wow-delay="0.1s" <?= ($show_cl == false ? 'hidden' : '') ?>>
                            <div class="blog-item bg-light rounded overflow-hidden">
                                <div class="blog-img position-relative overflow-hidden">
                                    <img class="img-fluid" src="img/blog-3.jpg" alt="">
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
						
                        <div class="col-md-6 wow slideInUp" data-wow-delay="0.6s" <?= ($show_gl == false ? 'hidden' : '') ?>>
                            <div class="blog-item bg-light rounded overflow-hidden">
                                <div class="blog-img position-relative overflow-hidden">
                                    <img class="img-fluid" src="img/blog-1.jpg" alt="">
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
						-->

                        <!-- <div class="col-12 wow slideInUp" data-wow-delay="0.1s">
                            <nav aria-label="Page navigation">
                                <ul class="pagination pagination-lg m-0">
                                    <li class="page-item disabled">
                                        <a class="page-link rounded-0" href="#" aria-label="Previous">
                                            <span aria-hidden="true"><i class="bi bi-arrow-left"></i></span>
                                        </a>
                                    </li>
                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link rounded-0" href="#" aria-label="Next">
                                            <span aria-hidden="true"><i class="bi bi-arrow-right"></i></span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div> -->
                    </div>
                </div>
                <!-- Blog list End -->

                <!-- Sidebar Start -->
                <?= $this->include('blogsummary/sidebar') ?>
                <!-- Sidebar End -->
            </div>
        </div>
    </div>
    <!-- Blog End -->

    <!-- Vendor Start -->
    <?= $this->include('template/vendor') ?>
    <!-- Vendor End -->


    <?= $this->include('template/footer') ?>
</body>

</html>