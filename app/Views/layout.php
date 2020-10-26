<!DOCTYPE html>
<html lang="en">

<head>
    <?php echo view('templates/header') ?>
</head>

<body>
    <div id="app">
        <?php $auth = ['login', 'register', 'forgot password']; ?>
        <?php if (!in_array($view_title, $auth)) : ?>
            <?php echo view('templates/navbar') ?>
            <?php echo view('templates/sidebar') ?>
        <?php endif ?>
        <?php echo view($view_name) ?>
    </div>

    <?php echo view('templates/footer') ?>
</body>

</html>