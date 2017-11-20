<?php
$title = $_REQUEST['title'];
$bgcolor = $_REQUEST['bgcolor'];
$content = $_REQUEST['title'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php $title ?></title>
    <style>
        body {
            /*            background: */
        <?php //echo $_REQUEST['color']?> /*;*/
            background: <?php echo $bgcolor;?>;
        }
    </style>
</head>
<body>
        <?php
        echo $content;
        ?>
        <br>
        <?php
        echo "1+1等于" . (1 + 1);
        ?>
</body>
</html>