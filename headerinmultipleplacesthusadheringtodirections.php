file, like so:
<?php header("Location: index.html"); ?>
<!DOCTYPE html>
<html lang=”en”>
<head>
    <meta charset=”UTF-8">
    <meta name=”viewport” content=”width=device-width, initial-scale=1.0">
    <meta http-equiv=”X-UA-Compatible” content=”ie=edge”>
    <link rel=”stylesheet” href=”styles.css”>
    <title>PHP Test 2</title>
</head>
<body>
    <header>
        <h1>PHP SITE WITH SHARED HEADER</h1>
        <nav>
            <ul>
                <li><a href=”index.php”>Home</a></li>
                <li><a href=”contact.php”>Contact</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h2>This H2 is on the homepage</h2>
        <p>Paragraph one</p>
        <p>Paragraph two</p>
        <p>Paragraph three</p>
    </main>
</body>
</html>
