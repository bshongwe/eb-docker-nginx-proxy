<?php
// Define page metadata and content
$title = "AWS Cloud Computing and PHP";
$description = "Learn about AWS cloud computing services and explore our resources for PHP development.";
$keywords = "AWS, PHP, Cloud Computing, Web Development, PHP Version";
$author = "Ernest Bhekizwe Shongwe";
$currentPhpVersion = phpversion();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= $description; ?>">
    <meta name="keywords" content="<?= $keywords; ?>">
    <meta name="author" content="<?= $author; ?>">
    <title><?= $title; ?></title>
</head>
<body>
    <?php
    // Header section
    echo '<header>';
    echo '<h1>Amazon Web Services (AWS) with PHP</h1>';
    echo '</header>';
    
    // Main content section
    echo '<main>';
    echo '<section>';
    echo '<h2>Current PHP Version</h2>';
    echo "<p>We are running PHP version $currentPhpVersion on this server.</p>";
    echo '</section>';
    
    // Navigation
    echo '<nav>';
    echo '<a href="/static.html" title="Visit our static HTML page">Visit Static HTML Page</a>';
    echo '</nav>';
    echo '</main>';
    ?>
</body>
</html>
