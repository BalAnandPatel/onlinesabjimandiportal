<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    if (isset($_SESSION['success'])) {
        include('cdn/alert.php');
    }
    if (isset($_SESSION['errmsg'])) {
        include('cdn/alert.php');
    }
    ?>
</head>

<body>
    <?php
    if (isset($_SESSION['success'])) {
    ?>
        <div class="alert alert-success" role="alert">
            <?php echo $_SESSION['success'];  ?>
        </div>
    <?php } ?>

    <?php
    if (isset($_SESSION['errmsg'])) {
    ?>
        <div class="alert alert-danger" role="alert">
            <?php echo $_SESSION['errmsg']; ?>
        </div>
    <?php } ?>

    <?php
    session_destroy();
    ?>
</body>

</html>