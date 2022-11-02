<?php
include "./3-data/code.php"
?>

<!doctype html>
<html lang="en">
<head>
    <title>ACity Website</title>
</head>

<body>
<header>
    <?php
        include "./2-data/header.html";
    ?>
</header>
<main>
    <div>
        <div>
            <?php calc()
            ?>
        </div>
        <div>
            <?php echo area(4,2); ?>
        </div>
    </div>
    <div>
        <?php
            include "./2-data/main.html";
        ?>
    </div>
    <div>

        <?php
            include "./3-data/form.php";
        ?>

    </div>
</main>
<footer>
    <?php
        include "./2-data/footer.html";
    ?>
</footer>

</body>
</html>
