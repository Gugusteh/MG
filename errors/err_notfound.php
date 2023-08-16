<?php include ('../includes/langSetter.php');?>

<html>
    <head>
        <?php include('../includes/head.php');?>
        <link href="../assets/err_styles.css" rel="stylesheet"/>
    </head>
    <body>
        <?php include('../includes/navbar.php');?>
        <div class="error-body">
            <h1 class="error-title"><?= _('Error 404: the page you\'re trying to access is not here');?></h1>
            <p class="error-text"><?= _('you must have entered the wrong address or the link you employed to come here isn\'t valid anymore');?></p>
            <button class="error-button"><a href="../"><?= _('Navigate back to the homepage');?></a></button>
        </div>
        <?php include('../includes/footer.php');?>
    </body>
</html>