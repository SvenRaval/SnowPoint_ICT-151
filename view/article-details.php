<?php
/**
 * @file   article-details.php
 * @brief  File description
 * @author Created by Sven.RAVAL
 * @version 24.02.2023
 */
require_once "controller/article.php";
$title = "SnowPoint - Détail du produit";

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
                    <?php if (is_file("view/content/images/men_snows/" . $articleDetailToDisplay['code'] . ".jpg")): ?>
                        <img src="view/content/images/men_snows/<?= $articleDetailToDisplay['code']; ?>.jpg"
                             alt="IMG-PRODUCT">
                    <?php else: ?>
                        <img src="view/content/images/no_image_snow.png" alt="IMG-PRODUCT">
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="w-size14 p-t-30 respon5">
        <h4 class="product-detail-name m-text16 p-b-13">
            <?= $articleDetailToDisplay['brand'] . "-" . $articleDetailToDisplay['model']; ?>
        </h4>

        <span class="m-text17">
					Prix : <?= $articleDetailToDisplay['price']; ?> .-
            </span>

        <p class="s-text8 p-t-10">
            <?= $articleDetailToDisplay['description']; ?>
        </p>

        <!--  -->
        <div class="p-t-33 p-b-60">
            <form action="index.php?action=cartAddItem" method="post">
                <div class="flex-m flex-w p-b-10">
                    <div class="s-text15 w-size15 t-center">
                        Code
                    </div>
                    <input readonly type="text" name="inputUserArticleId"
                           value="<?php echo $articleDetailToDisplay['code']; ?>">
                    <div class="rs2-select2 rs3-select2 bo4 of-hidden w-size16"></div>
                </div>


                <div class="flex-m flex-w p-b-10">
                    <div class="s-text15 w-size15 t-center">
                        Longueur
                    </div>
                    <?= $articleDetailToDisplay['snowLength']; ?> cm
                    <div class="rs2-select2 rs3-select2 bo4 of-hidden w-size16"></div>
                </div>

                <div class="flex-m flex-w">
                    <div class="s-text15 w-size15 t-center">
                        Niveau
                    </div>
                    <?= $articleDetailToDisplay['level']; ?>
                    <div class="rs2-select2 rs3-select2 bo4 of-hidden w-size16"></div>
                </div>

                <div class="flex-r-m flex-w p-t-10">
                    <div class="w-size16 flex-m flex-w">
                        <div class="flex-w bo5 of-hidden m-r-22 m-t-10 m-b-10">
                            <button class="btn-num-product-down color1 flex-c-m size7 bg8 eff2">
                                <i class="fs-12 fa fa-minus" aria-hidden="true"></i>
                            </button>

                            <input class="size8 m-text18 t-center num-product" type="number"
                                   name="inputUserQuantityToAdd" value="1">

                            <button class="btn-num-product-up color1 flex-c-m size7 bg8 eff2">
                                <i class="fs-12 fa fa-plus" aria-hidden="true"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="flex-r-m flex-w p-t-10">
                    <div class="btn-addcart-product-detail size15 trans-0-4 m-t-10 m-b-10">
                        <!-- Button -->
                        <button type="submit" class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
                            Ajouter au panier
                        </button>
                    </div>
                </div>
            </form>
        </div>

        <!--  -->
        <div class="wrap-dropdown-content bo6 p-t-15 p-b-14 active-dropdown-content">
            <h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
                Description
                <i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
                <i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
            </h5>

            <div class="dropdown-content dis-none p-t-15 p-b-23">
                <p class="s-text8">
                    <?= $articleDetailToDisplay['descriptionFull']; ?>
                </p>
            </div>
        </div>
    </div>
    </div>
    </div>
<?php endif; ?>
<?php
$content = ob_get_clean();
require 'gabarit.php';
?>