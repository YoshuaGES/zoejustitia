<?php $uri = service('uri'); ?>
<div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
            <a href="/" class="navbar-brand p-0">
                <img src="img/logobaru.jpg" alt="Image">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="#">
                        <select id="language-select" class="btn btn-sm">
                            <option value="id" <?= ($session->get('site_language') == 'id' ? 'selected' : '') ?>>🇮🇩 ID</option>
                            <option value="en" <?= ($session->get('site_language') == 'en' ? 'selected' : '') ?>>🇬🇧 EN</option>
                        </select>
                    </a>
                    <a href="/" class="nav-item nav-link <?= ($uri->getSegment(1) == '' ? 'active' : '') ?>"><?php echo lang('Info.menu.home'); ?></a>
                    <a href="/about" class="nav-item nav-link <?= ($uri->getSegment(1) == 'about' ? 'active' : '') ?>"><?php echo lang('Info.menu.about-us'); ?></a>
                    <a href="/service" class="nav-item nav-link <?= ($uri->getSegment(1) == 'service' ? 'active' : '') ?>"><?php echo lang('Info.menu.services'); ?></a>
					<a href="/edulawcenter" class="nav-item nav-link <?= ($uri->getSegment(1) == 'edulawcenter' ? 'active' : '') ?>"><?php echo lang('Info.menu.edulawcenter'); ?></a>
                    <a href="/blog" class="nav-item nav-link <?= ($uri->getSegment(1) == 'blog' ? 'active' : '') ?>"><?php echo lang('Info.menu.blog'); ?></a>
                    <a href="/contact" class="nav-item nav-link <?= ($uri->getSegment(1) == 'contact' ? 'active' : '') ?>"><?php echo lang('Info.menu.contact'); ?></a>
                </div>
                <butaton type="button" class="btn btn-primary ms-3" data-bs-toggle="modal" data-bs-target="#searchModal"><?php echo lang('Info.menu.free-consultation'); ?></butaton>
            </div>
        </nav>
    </div>