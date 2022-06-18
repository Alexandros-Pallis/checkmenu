<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Menu</title>
<?php if($loadCSS) : ?>
<?php foreach($loadCSS as $CSS) : ?>
    <link rel="stylesheet" href="<?php echo "/dist/$CSS.css"; ?>">
<?php endforeach; ?>
<?php endif; ?>
</head>
<body>
    
<h1>Dashboard Header</h1>
