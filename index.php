<?php
session_start();

if(!empty($_GET['utm_source']))
    $_SESSION['utm_source'] = $_GET['utm_source'];
if(!empty($_GET['utm_medium']))
    $_SESSION['utm_medium'] = $_GET['utm_medium'];
if(!empty($_GET['utm_campaign']))
    $_SESSION['utm_campaign'] = $_GET['utm_campaign'];
if(!empty($_GET['utm_term']))
    $_SESSION['utm_term'] = $_GET['utm_term'];
if(!empty($_GET['utm_content']))
    $_SESSION['utm_content'] = $_GET['utm_content'];

$phone = "8 (800) 333-59-45";
?>
    <!doctype html>
    <html lang="ru">
    <head>

        <meta charset="utf-8">

        <title>Guarchibao</title>
        <meta name="description" content="">

        <?php include ("template/all/head.php")?>

    </head>

<body> <!--Defmenu_open-->

<main class="Home DefmenuWrapper">
    <?php include ("template/component/BurgerMenu.php")?>

    <div class="DefmenuContainer">
        <div class="DefmenuOverlay"></div>

        <?php include ("template/all/Header.php")?>

            <?php include ("template/Intro.php")?>

            <?php include ("template/GiveChance.php")?>

            <?php include ("template/HzDecor.php")?>

            <?php include ("template/ForThose.php")?>

            <?php include ("template/HzDecor.php")?>

            <?php include ("template/WeKnow.php")?>

            <?php include ("template/HighEfficiency.php")?>

            <?php include ("template/Product.php")?>

            <?php include ("template/WhyWeSert.php")?>

            <?php include ("template/AfterUse.php")?>

            <?php include ("template/WhyWe.php")?>

            <?php include ("template/SpecOffer.php")?>

            <?php include ("template/CourseTable.php")?>

            <?php include ("template/HzDecor.php")?>

            <?php include ("template/Courses.php")?>

            <?php include ("template/SpecGift.php")?>

            <?php include ("template/HowOrder.php")?>

            <?php include ("template/Delivery.php")?>

            <?php include ("template/HzDecor.php")?>

            <?php include ("template/DeliveryMap.php")?>

            <!-- <?php include ("template/StarRecommend.php")?> -->

            <?php include ("template/NeedHelp.php")?>

            <?php include ("template/all/Footer.php")?>
        </div>
    </div>
</main>

<?php include ("template/all/bot-scripts.php")?>