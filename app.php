<?php

// Simple app.php

$name = 'Guest';
if (isset($_GET['name']) && is_string($_GET['name']) && $_GET['name'] !== '') {
    $name = htmlspecialchars($_GET['name'], ENT_QUOTES, 'UTF-8');
}

$message = sprintf('Hello, %s! Welcome to the simple app.', $name);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Simple App</title>
</head>
<body>
    <h1><?php echo $message; ?></h1>
    <form method="get">
        <label for="name">Enter your name:</label>
        <input id="name" name="name" type="text" value="<?php echo $name !== 'Guest' ? $name : ''; ?>">
        <button type="submit">Greet</button>
    </form>
</body>
</html>