<?php
/**
 * @file   ArticleCreate.php
 * @brief  File description
 * @author Created by Sven.RAVAL
 * @version 03.03.2023
 */
require_once "controller/article.php";
$title="SnowPoint - Ajouter un produit";

ob_start();
?>
<!-- Title Page -->
<section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url(view/content/images/home_slide_2.jpg);">
    <h2 class="l-text2 t-center">
        créer un article
    </h2>
</section>

<!-- content page -->
<section class="bgwhite p-t-66 p-b-60">
    <div class="container">
        <div class="row">

            <div class="col-md-12 p-b-30">
                <form class="leave-comment" action="index.php?action=ArticleAddItem" method="post">
                    <h4 class="m-text26 p-b-36 p-t-15">
                        Nouvel Article
                    </h4>

                    <div class="bo4 of-hidden size15 m-b-20">
                        <input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="InputArticleCode" placeholder="Code de l'article">
                    </div>
                    <div class="bo4 of-hidden size15 m-b-20">
                        <input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="InputMarque" placeholder="Marque de l'article">
                    </div>
                    <div class="bo4 of-hidden size15 m-b-20">
                        <input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="InputModele" placeholder="Modèle de l'article">
                    </div>
                    <div class="bo4 of-hidden size15 m-b-20">
                        <input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="InputDescription" placeholder="Description de l'article">
                    </div>
                    <div class="bo4 of-hidden size15 m-b-20">
                        <input class="sizefull s-text7 p-l-22 p-r-22" type="number" name="InputLongeur" placeholder="Longeur de l'article">
                    </div>
                    <div class="bo4 of-hidden size15 m-b-20">
                        <input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="InputNiveau" placeholder="Niveau requis">
                    </div>
                    <div class="bo4 of-hidden size15 m-b-20">
                        <input class="sizefull s-text7 p-l-22 p-r-22" type="number" name="InputPrix" placeholder="Prix">
                    </div>
                    <div class="bo4 of-hidden size15 m-b-20">
                        <input class="sizefull s-text7 p-l-22 p-r-22" type="number" name="InputQty" placeholder="quantité">
                    </div>
                    <div class="bo4 of-hidden size15 m-b-20" id="genreRadio">&emsp;&emsp;
                        <input type="radio" class="form-check-input" id="radio1" name="radioGenre" value="Homme">
                        <label class="form-check-label" for="radio1">Homme </label>&emsp;&emsp;&emsp;
                        <input type="radio" class="form-check-input" id="radio2" name="radioGenre" value="Femme">
                        <label class="form-check-label" for="radio2">Femme</label>&emsp;&emsp;&emsp;
                        <input type="radio" class="form-check-input" id="radio3" name="radioGenre" value="Enfant">
                        <label class="form-check-label" for="radio2">Enfant</label>
                    </div>
                    <div class="bo4 of-hidden size15 m-b-20">
                        <input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="InputDescComp" placeholder="Description Complète">
                    </div>
                    <input type="submit" value="Ajouter" class="flex-c-m size2 bg4 bo-rad-23 hov1 m-text3 trans-0-4" ><br>
                    <input type="reset" value="Annuler" class="flex-c-m size2 bg4 bo-rad-23 hov1 m-text3 trans-0-4">

                </form>
            </div>
        </div>
    </div>
</section>
<?php
$content = ob_get_clean();
require 'gabarit.php';
?>
