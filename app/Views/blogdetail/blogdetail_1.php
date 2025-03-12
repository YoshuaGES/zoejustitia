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
                    <h1 class="display-4 text-white animated zoomIn">Blog</h1>
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
                <div class="col-lg-8">
                    <!-- Blog Detail Start -->
                    <div class="mb-5">
                        <img class="img-fluid w-100 rounded mb-5" src="img/blog-1.jpg" alt="">
                        <h1 class="mb-4"><?php echo lang('Info.blog_1.title'); ?></h1>
                        <p><?php echo lang('Info.blog_1.content-1'); ?></p>
                        <p><?php echo lang('Info.blog_1.content-2'); ?></p>
                        <p><?php echo lang('Info.blog_1.content-3'); ?></p>
                        <p><?php echo lang('Info.blog_1.content-5'); ?></p>
                        <p><?php echo lang('Info.blog_1.content-6'); ?></p>
                        <p><?php echo lang('Info.blog_1.content-7'); ?></p>
                        <p><?php echo lang('Info.blog_1.content-8'); ?></p>
                        <p><?php echo lang('Info.blog_1.content-9'); ?></p>
                        <p><?php echo lang('Info.blog_1.content-10'); ?></p>
                        <p><?php echo lang('Info.blog_1.content-11'); ?></p>
                        <p><?php echo lang('Info.blog_1.content-12'); ?></p>
                        <p><?php echo lang('Info.blog_1.content-13'); ?></p>
                        <p><?php echo lang('Info.blog_1.content-14'); ?></p>
                        <p><?php echo lang('Info.blog_1.content-15'); ?></p>
                        <p><?php echo lang('Info.blog_1.content-16'); ?></p>
                        <p><?php echo lang('Info.blog_1.content-17'); ?></p>
                    </div>
                    <!-- Blog Detail End -->

                </div>

                <!-- Sidebar Start -->
                <?= $this->include('blogsummary/sidebar') ?>
                <!-- Sidebar End -->
            </div>
        </div>
    </div>
    <!-- Blog End -->

    <!-- Footer Start -->

    <!-- Vendor Start -->
    <?= $this->include('template/vendor') ?>
    <!-- Vendor End -->


    <?= $this->include('template/footer') ?>
</body>

</html>