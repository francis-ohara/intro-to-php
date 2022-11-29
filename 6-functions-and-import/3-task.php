<?php
require "./3-task-files/code.php"
?>

<!doctype html>
<html lang="en">
<head>
    <title>ACity Website</title>
</head>

<body>
<header>
    <?php
        include "./3-task-files/header.html";
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
            include "./3-task-files/main.html";
        ?>
    </div>
    <div>

        <?php
            include "./3-task-files/form.php";
        ?>

    </div>
</main>
<footer>
    <?php
        include "./3-task-files/footer.html";
    ?>
</footer>

</body>
</html>
