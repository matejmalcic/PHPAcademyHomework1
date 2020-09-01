<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Academy 2020</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/foundation-sites@6.6.3/dist/css/foundation.min.css">
    <style>
        body {
            background-color: lightgreen;
        }
    </style>
</head>
<body>
    <div class="grid-container">
        <div class="grid-x">
            <div class="large-12 small-12 columns">
                <div class="callout">
                    <div class="top-bar">
                        <ul class="dropdown menu" data-dropdown-menu>
                        <li class="menu-text">PHP Academy Homework 1</li>
                        <li><a href="<?= $_SERVER['PHP_SELF'] ?>">Home</a></li>
                        <li><a href="/table.php">Table</a></li>
                        <li><a href="#">Third</a></li>
                        </ul>
                    </div>
                    <div class="container">
                    <section><span><p><h4><b><i><strong>Variables</strong></i></b></h4></p></span></section>
                        <?php 
                            include 'variables.php';
                            echo 'x = ' . $x . '<br>';
                            echo 'y = ' . $y . '<hr>';

                            echo 'x + y = ' . ($x + $y) . '<br>';
                            echo 'x - y = ' . ($x - $y) . '<br>';
                            echo 'x * y = ' . $x * $y . '<br>';
                            echo 'x / y = ' . $x / $y . '<br>';
                            echo 'x % y = ' . $x % $y . '<br>';
                            echo 'x ^ y = ' . $x ** $y. '<hr>';
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.min.js"></script>
    <script src="js/app.js"></script>
</body>
</html>