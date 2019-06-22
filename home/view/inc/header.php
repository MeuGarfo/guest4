<!DOCTYPE html>
<html>
<head>
    <title><?php e($title); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php asset([
        $_ENV['SITE_CSS'],
        $_ENV['SITE_JS']
    ]); ?>
</head>
<body>
