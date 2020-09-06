<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Academy 2020</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/foundation-sites@6.6.3/dist/css/foundation.min.css">
    <style>
        body {
            background-color: lightcoral;
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
                        <li><a href="index.php">Home</a></li>
                        <li><a href="operators.php">Operators</a></li>
                        <li><a href="<?= $_SERVER['PHP_SELF'] ?>">Table</a></li>
                        </ul>
                    </div>
                    <div class="container">
                        <table>
                        <caption><?= $caption ?></caption>
                            <thead>
                                <tr>
                                <th style="text-align: center;">X</th>
                                    <?php for ($i=1; $i <= $tab ; $i++) echo '<th>' . $i . '</th>'; ?>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    for ($i=1; $i <= $tab ; $i++){
                                        echo '<tr>';
                                        for ($j=1; $j <= $tab ; $j++){
                                            if ($j === 1) echo '<th>' . $i * $j . '</th>';
                                            echo '<td>' . $i * $j . '</td>';
                                        }
                                        echo '</tr>';
                                    }    
                                ?>
                            </tbody>
                        </table>
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