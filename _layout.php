<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="styles/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="icon" type="image/x-icon" href="favicon.ico">
</head>
<body>
    <header>
        <div class="header-content">
            <h1>Anton Örtlund</h1>
            <p>Fullstack-intresserad mjukvaruutvecklare</p>
        </div>
        <nav class="navbar">
            <ul>
                <li><a href="index.php">Hem</a></li>
                <li><a href="about.php">Om mig</a></li>
                <li><a href="projects.php">Projekt</a></li>
                <li><a href="contact.php">Kontakt</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <?php echo $content; ?>
    </main>
    <footer>
        <p>&copy; 2025 Anton Örtlund</p>
    </footer>
    <script src="scripts/script.js"></script>
</body>
</html>