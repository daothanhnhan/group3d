<!--MENU MOBILE-->
<?php include_once DIR_MENU."MS_MENU_RUOUVANG_0002.php"; ?>
<!-- End menu mobile-->

<!--MENU DESTOP-->
<header>
    <div class="gb-header-ruouvang">
        <div class="gb-top-header_ruouvang">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-8">
                        <div class="gb-top-header_ruouvang-left">
                            <ul>
                                <li><i class="fa fa-map-marker" aria-hidden="true"></i> Địa chỉ: <?= $rowConfig['content_home1'] ?></li>
                                <li><i class="fa fa-phone" aria-hidden="true"></i> Hotline: <?= $rowConfig['content_home3'] ?></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="gb-top-header_ruouvang-right">
                            <?php include DIR_SOCIAL."MS_SOCIAL_RUOUVANG_0001.php";?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="gb-header-between_ruouvang sticky-menu">
            <div class="container">
                <div class="row">
                    <div class="col-md-2 col-sm-12">
                        <div class="gb-header-between_ruouvang-left">
                            <h1>
                                <a href="/"><img src="/images/<?= $rowConfig['web_logo'] ?>" alt="logo" class="img-responsive"></a>
                            </h1>
                        </div>
                    </div>
                    <div class="col-md-10 col-sm-12">
                        <?php include DIR_MENU."MS_MENU_RUOUVANG_0001.php";?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<script src="/plugin/sticky/jquery.sticky.js"></script>
<script>
    $(document).ready(function () {
        $(".sticky-menu").sticky({topSpacing:0});
    });
</script>