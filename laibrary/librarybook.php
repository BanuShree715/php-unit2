<!DOCTYPE html>
<html>
<head>
    <title>Library Book Search</title>
    <style>
        body {
            background-color: #E0F7FA;
            font-family: Arial;
            padding: 30px;
        }

        .library {
            width: 600px;
            margin: auto;
            background: white;
            padding: 25px;
            border-radius: 15px;
            box-shadow: 0 0 12px gray;
        }

        h2 {
            color: #00838F;
        }

        input {
            padding: 10px;
            width: 70%;
            border: 1px solid #aaa;
            border-radius: 5px;
        }

        button {
            padding: 10px 18px;
            background-color: #00838F;
            color: white;
            border: none;
            border-radius: 5px;
        }

        .result {
            margin-top: 20px;
            padding: 15px;
            background-color: #E8F8FA;
        }
    </style>
</head>

<body>

<div class="library">

<h2> Library Book Search</h2>

<form method="post">
    <input type="text" name="book" placeholder="Enter book title" required>
    <button type="submit">Search</button>
</form>

<?php

$books = [
    "Python Programming",
    "Web Development",
    "Data Science Basics",
    "Artificial Intelligence",
    "Database Management",
    "Computer Networks"
];

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $requestedBook = trim($_POST["book"]);

    $bookFound = array_filter($books, function($book) use ($requestedBook) {
        return strtolower($book) == strtolower($requestedBook);
    });

    echo "<div class='result'>";

    if (!empty($bookFound)) {
        echo " <b>" . htmlspecialchars($requestedBook) . "</b> is available in the library.";
    } else {
        echo "<b>" . htmlspecialchars($requestedBook) . "</b> is not available.";
    }

    echo "</div>";
}

?>

</div>

</body>
</html>