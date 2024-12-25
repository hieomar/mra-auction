<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $this->e($title) ?></title>
    <link rel="stylesheet" href="../../public/css/style.css">
</head>
<body>
<?php $this->insert('partials/header') ?>
    <main>
        <?= $this->section('content') ?>
    </main>
<?php $this->insert('partials/footer') ?>
</body>
</html>