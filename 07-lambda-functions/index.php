<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lambda Functions</title>
</head>
<body>
    <?php
        // Topic: Lambda Functions (Anonymous Functions)
        // - Functions without a name, assigned to a variable
        // - Useful for short, one-off callbacks
        // - Arrow functions (fn =>) are a shorter syntax (PHP 7.4+)
        // - Arrow functions automatically capture outer scope variables

        // Try it:
        $double = fn($n) => $n * 2;

        $numbers = [1, 2, 3, 4, 5];
        $doubled = array_map($double, $numbers);

        var_dump($doubled);
    ?>
</body>
</html>
