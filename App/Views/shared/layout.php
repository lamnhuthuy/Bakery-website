<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&family=Poppins:wght@400;500;700&display=swap" rel="stylesheet" />

    <!-- LINK CSS -->
    <link rel="stylesheet" href="<?= PUB ?>/css/base.css" />
    <link rel="stylesheet" href="<?= PUB ?>/css/header.css" />
    <link rel="stylesheet" href="<?= PUB ?>/css/body.css" />
    <link rel="stylesheet" href="<?= PUB ?>/css/footer.css" />
    <link rel="stylesheet" href="<?= PUB ?>/css/different.css" />

</head>

<body>
    <div class="sk-chase sk-position">
        <div class="sk-chase-dot"></div>
        <div class="sk-chase-dot"></div>
        <div class="sk-chase-dot"></div>
        <div class="sk-chase-dot"></div>
        <div class="sk-chase-dot"></div>
        <div class="sk-chase-dot"></div>
    </div>
    <div id="toast"></div>
    <p hidden id="documentRoot"><?= DOCUMENT_ROOT ?></p>
    <?php require_once(VIEW . "\shared\header.php") ?>
    <?php require_once(VIEW . $view . ".php") ?>
    <?php require_once(VIEW . "/shared/footer.php") ?>

    <script src="<?= PUB ?>/js/main.js"></script>
    <script src="<?= PUB ?>/js/login.js"></script>
    <script src="<?= PUB ?>/js/cart.js"></script>
    <script src="<?= PUB ?>/js/time.js"></script>
    <?php if (isset($_SESSION["info"]) && $_SESSION["info"] == "no") {
        echo ('<script>
         toast({
        title: "Your cart is empty.",
        message: "You have not selected procduct.",
        type: "warning",
        duration: 2000,
         });
        </script>');
        unset($_SESSION["info"]);
    } else if (isset($_SESSION["info"]) && $_SESSION["info"] == "yes") {
        echo ('<script>
        toast({
       title: "Successfully.",
       message: "Order successfully.",
       type: "success",
       duration: 2000,
        });
       </script>');
        unset($_SESSION["info"]);
    }
    ?>
    <?php if (isset($_SESSION["updateProfile"]) && $_SESSION["updateProfile"] == "true") {
        echo ('<script>
         toast({
        title: "Update Successfully.",
        message: "you have successfully updated your personal information.",
        type: "success",
        duration: 2000,
         });
        </script>');
        unset($_SESSION["updateProfile"]);
    }
    ?>
    <script>
        window.onload = function() {
            document.querySelector("body").style.opacity = "1";
            document.querySelector(".sk-chase").style.display = "none";
            refreshCartNumber();
        };
    </script>
</body>


</html>