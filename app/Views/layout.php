<!DOCTYPE html>
<html lang="en">

<head>
    <?php echo view('templates/header') ?>
</head>

<body>
    <div id="app">
        <?php echo view('templates/navbar') ?>
        <?php echo view('templates/sidebar') ?>
        <?php echo view($view_name) ?>
    </div>

    <?php echo view('templates/footer') ?>
</body>

</html>