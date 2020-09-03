<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Academy 2020</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/foundation-sites@6.6.3/dist/css/foundation.min.css">
    <style>
        body {
            background-color: lightblue;
        }
    </style>
</head>
<body>
    <div class="grid-container">
        <div class="grid-x">
            <div class="large-12 small-12 columns">
                <div class="callout">
                    <div class="top-bar">
                    <?php include 'variables.php'; ?>
                        <ul class="dropdown menu" data-dropdown-menu>
                        <li class="menu-text"><?= $appName ?></li>
                        <li><a href="/index.php">Home</a></li>
                        <li><a href="<?= $_SERVER['PHP_SELF'] ?>">Operators</a></li>
                        <li><a href="/table.php">Table</a></li>
                        </ul>
                    </div>
                    <div class="container">
                    <section><span><p><h4><i><strong>Variables</strong></i></h4></p></span></section>
                        <?php 
                            echo 'x = ' . $x . '<br>';
                            echo 'y = ' . $y . '<hr>';
                        ?>
                        <h4><b><i>Operators</i></b></h4>
                        <?php
                            echo 'x + y = ' . ($x + $y) . '<br>';
                            echo 'x - y = ' . ($x - $y) . '<br>';
                            echo 'x * y = ' . $x * $y . '<br>';
                            echo 'x / y = ' . $x / $y . '<br>';
                            echo 'x % y = ' . $x % $y . '<br>';
                            echo 'x ^ y = ' . $x ** $y. '<hr>';
                        ?>
                        <h5><b><i>Comparison Operators</i></b></h5>
                        <?php 
                            if ($x < $y) {
                                echo $x . ' is greater than ' . $y . '<br>';
                            } elseif ($x > $y) {
                                echo $x . ' is lower than ' . $y . '<br>';
                            } else {
                                echo $x . ' is equal ' . $y . '<br>';
                            }  

                            if (!($x===$y)) {
                                echo $x . ' is not equal ' . $y . '<br>';
                            } else {
                                echo $x . ' is egual ' . $y . '<br>';
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php require_once 'footer.php'; ?>

    <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.min.js"></script>
    <script src="js/app.js"></script>
</body>
</html>