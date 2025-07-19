<?php 
    $home_service = $action_service->getServiceList_byMultiLevel_orderServiceId('','desc',1,9,'')['data'];
?>
<div class="gb-duan-home_ruouvang">
    <div class="container">
        <div class="row">
            <?php
                $d = 0;
                foreach ($home_service as $row) {
                    $d++;
                    $action_service1 = new action_service(); 
                    $rowLang1 = $action_service1->getServiceLangDetail_byId($row['service_id'],$lang);
                    $row1 = $action_service1->getServiceDetail_byId($row['service_id'],$lang); 
            ?>
            <div class="col-sm-4">
                <div class="gb-news-blog_ruouvang-item">
                    <div class="gb-news-blog_ruouvang-item-img">
                        <a href="/<?= $rowLang1['friendly_url'] ?>"><img src="/images/<?= $row1['service_img'] ?>" alt="<?= $rowLang1['lang_service_name'] ?>" class="img-responsive"></a>
                    </div>
                    <div class="gb-news-blog_ruouvang-item-text">
                        <div class="gb-news-blog_ruouvang-item-title">
                            <h3><a href="/<?= $rowLang1['friendly_url'] ?>"><?= $rowLang1['lang_service_name'] ?></a></h3>
                        </div>
                        <div class="gb-news-blog_ruouvang-item-text-des">
                            <p><?= $rowLang1['lang_service_des'] ?></p>
                        </div>
                    </div>
                    <div class="gb-news-blog_ruouvang-item-button">
                        <a href="/<?= $rowLang1['friendly_url'] ?>">
                            <button type="button" class="btn gb-btn-readmore">ĐỌC TIẾP</button>
                        </a>
                    </div>
                </div>
            </div>
            <?php 
            if ($d%3==0) {
                echo '<hr style="width:100%;border:0;" />';
            }
            } ?>
        </div>
    </div>
</div>