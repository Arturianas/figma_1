<?php
    require __DIR__ . '/../app/src/app.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arturas Projektas</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,800&family=Roboto:ital,wght@0,400;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../app/css/glider.min.css.css">
    <link rel="stylesheet" href="../app/css/style.css">
</head>
<body>

        <?php
            include('../app/views/content.php');
            include('../app/views/footer.php');
        ?>



    <script src="../app/js/glider.min.js.js"></script>

    <script>
        new Glider(document.querySelector(".testimonials"), {
            slidesToShow: 1,
            dots: ".dots",
            arrows: {
                prev: '.slider-prev',
                next: '.slider-next'
            }
        })
    </script>

    <script src="../app/js/main.js"></script>
</body>
</html>