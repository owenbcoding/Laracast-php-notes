<?php
    // Topic: Separate Logic From the Template
    // - Keep PHP logic (data fetching, processing) out of your HTML
    // - Do all the work first, then pass data to a view/template
    // - require or include pulls in another PHP file

    $title = "My Page";
    $items = ['Apples', 'Bananas', 'Cherries'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $title ?></title>
</head>
<body>
    <h1><?= $title ?></h1>

    <ul>
        <?php foreach ($items as $item): ?>
            <li><?= $item ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
