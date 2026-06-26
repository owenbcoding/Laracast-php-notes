<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Hello PHP</title>
</head>
<body>
    <h1>Recommended Books</h1>
        <?php 
        $books = [
            'Do Androids Dream of Electric Sheep?',
            'The langoliers',
            'Hail Mary',
        ];
        ?>
    <ul>
        <?php foreach ($books as $book): ?>
            <li><?= $book ?></li>
        <?php endforeach; ?>
        <!-- <li>Do Androids Dream of Electric Sheep?</li>
        <li>The langoliers</li>
        <li>Hail Mary</li> -->
    </ul>
</body>
</html>