<?php
/**
 * @file   article.php
 * @brief  File description
 * @author Created by Sven.RAVAL
 * @version 08.02.2023
 */
require_once "controller/article.php";
$title ="SnowPoint - Nos snows";
ob_start();
?>

<?php foreach ($articles as $article):?>
    <?=$article['code'];?> -
<?php endforeach; ?>

<?php
$content = ob_get_clean();
require 'view/gabarit.php';

