<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Functions and Filters</title>
</head>
<body>
    <?php
        // Topic: Functions and Filters
        // - Functions are reusable blocks of code
        // - Defined with the `function` keyword
        // - array_filter() filters an array using a callback function
        // - array_map() transforms each element using a callback

        // Try it:
        function greet($name) {
            return "Hello, $name!";
        }

        echo greet("Owen");

        $numbers = [1, 2, 3, 4, 5, 6];

        $evens = array_filter($numbers, function ($n) {
            return $n % 2 === 0;
        });

        var_dump($evens);
    ?>
</body>
</html>
