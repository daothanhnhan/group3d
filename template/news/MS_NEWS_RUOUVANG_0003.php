<?php 
    $list_news_relative = $action_news->getListNewsRelate_byIdCat_hasLimit($row['newscat_id'], 3);//var_dump($list_news_ralative);
?>
<link rel="stylesheet" href="/plugin/owl-carouse/owl.carousel.min.css">
<link rel="stylesheet" href="/plugin/owl-carouse/owl.theme.default.min.css">

<div class="gb-tintuc-lienquan">
    <!--HEADER PRODUICT TOP-->
    <div class="gb-product-top">
        <div class="gb-tintuc-lienquan-title">Tin tức liên quan</div>
    </div>
    <!--SHOW PRODUCT ITEM-->
    <div class="gb-product-show">
        <div class="gb-tintuc-lienquan-three-item owl-carousel owl-theme">
            <?php 
            foreach ($list_news_relative as $item) {
                $rowLang = $action_news->getNewsLangDetail_byId($item['news_id'],$lang);
            ?>
            <div class="item">
                <div class="gb-news-blog_ruouvang-item">
                    <div class="gb-news-blog_ruouvang-item-img">
                        <a href="/<?= $rowLang['friendly_url'] ?>"><img src="/images/<?= $item['news_img'] ?>" alt="<?= $rowLang['lang_news_name'] ?>" class="img-responsive"></a>
                    </div>
                    <div class="gb-news-blog_ruouvang-item-text">
                        <div class="gb-news-blog_ruouvang-item-title">
                            <h3><a href="/<?= $rowLang['friendly_url'] ?>"><?= $rowLang['lang_news_name'] ?></a></h3>
                        </div>
                        <div class="gb-news-blog_ruouvang-item-text-des">
                            <p><?= $rowLang['lang_news_des'] ?></p>
                        </div>
                    </div>
                    <div class="gb-news-blog_ruouvang-item-button">
                        <a href="/<?= $rowLang['friendly_url'] ?>">
                            <button type="button" class="btn gb-btn-readmore">ĐỌC TIẾP</button>
                        </a>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</div>

<script src="/plugin/owl-carouse/owl.carousel.min.js"></script>
<script>
    $(document).ready(function () {
        $('.gb-tintuc-lienquan-three-item').owlCarousel({
            loop:true,
            autoplay: true,
            responsiveClass:true,
            nav:true,
            navText:[],
            dots:false,
            margin:30,
            responsive:{
                0:{
                    items:1
                },
                768:{
                    items:3
                }
            }
        });
    });
</script>