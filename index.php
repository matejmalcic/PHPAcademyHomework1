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
                    <?php include 'variables.php'; ?>
                        <ul class="dropdown menu" data-dropdown-menu>
                        <li class="menu-text"><?= $appName ?></li>
                        <li><a href="<?= $_SERVER['PHP_SELF'] ?>">Home</a></li>
                        <li><a href="/operators.php">Operators</a></li>
                        <li><a href="/table.php">Table</a></li>
                        </ul>
                    </div>
                    <div class="container">
                        <img style="width: 100%;" src="<?= $image ?>" alt="image">
                        <hr>
                        <h1>Text Formatting</h1> 
                        <b> Bold text < b ></b> <br>
                        <strong> Important text < strong ></strong><br>
                        <i> Italic text < i ></i><br>
                        <em> Emphasized text < em ></em><br>
                        <mark> Marked text < mark ></mark><br>
                        <small> Smaller text < small ></small><br>
                        <del> Deleted text < del ></del><br>
                        <ins> Inserted text < ins ></ins><br>
                        <sub> Subscript text < sub ></sub><br>
                        <sup> Superscript text < sup ></sup>
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
