<?php
/**
 * @file   article-details.php
 * @brief  File description
 * @author Created by Sven.RAVAL
 * @version 24.02.2023
 */
require_once "controller/article.php";
$title ="SnowPoint - Détails du produit";
ob_start();
?>
<!-- Product Detail -->
<div class="container bgwhite p-t-35 p-b-80">
    <div class="flex-w flex-sb">
        <?php if (isset($articleDetailErrorMessage)) : ?>
            <h5><span style="color:red"><?= $articleDetailErrorMessage; ?></span></h5>
        <?php else : ?>
        <div class="w-size13 p-t-30 respon5">
            <div class="wrap-slick3 flex-sb flex-w">
                <div class="slick3">
                    <div class="wrap-pic-w">
                        <?php if(is_file("view/content/images/men_snows/".$articleDetailToDisplay['code'].".jpg")): ?>
                            <img src="view/content/images/men_snows/<?=$articleDetailToDisplay['code']; ?>.jpg" alt="IMG-PRODUCT">
                        <?php else: ?>
                            <img src="view/content/images/no_image_snow.png" alt="IMG-PRODUCT">
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-size14 p-t-30 respon5">
            <h4 class="product-detail-name m-text16 p-b-13">
                <?=$articleDetailToDisplay['brand'] . "-" . $articleDetailToDisplay['model']; ?>
            </h4>


