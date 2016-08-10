<!DOCTYPE html>
<html>
    <head>
        <title><?php $view['slots']->output('pageTitle', 'Mautic'); ?></title>
        <?php if (isset($page)) : ?>
            <meta name="description" content="<?php echo $page->getMetaDescription(); ?>">
        <?php endif; ?>
        <script src="<?php echo $view['assets']->geturl('themes/100offer/js/jquery-2.2.4.min.js'); ?>" ></script>
        <link rel="stylesheet" href="<?php echo $view['assets']->geturl('themes/100offer/css/100offer.css'); ?>" type="text/css" />
        <link rel="stylesheet" href="<?php echo $view['assets']->geturl('themes/100offer/css/normalize.min.css'); ?>" type="text/css">
        <link rel="stylesheet" href="<?php echo $view['assets']->geturl('themes/100offer/css/skeleton.css'); ?>" type="text/css">
        <?php $view['assets']->outputHeadDeclarations(); ?>
    </head>
    <body>
        <?php $view['assets']->outputScripts("bodyOpen"); ?>
        <?php $view['slots']->output('_content'); ?>
        <?php $view['assets']->outputScripts("bodyClose"); ?>
    </body>
</html>
