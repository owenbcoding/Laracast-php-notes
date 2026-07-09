<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Hello PHP</title>
</head>
<body>
    <h1>Recommended Books</h1>
    <?php 
    $business = [
        "The Lean Startup" => "Eric Ries",
        "Zero to One" => "Peter Thiel",
        "Good to Great" => "Jim Collins"
    ];

    foreach  ($business['category'] as $book => $author) {
        echo "<p>$book by $author</p>";
    }
    ?>
</body>
</html>