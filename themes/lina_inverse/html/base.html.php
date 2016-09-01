<!DOCTYPE html>
<html>
    <head>
        <title><?php $view['slots']->output('pageTitle', 'Mautic'); ?></title>
        <?php if (isset($page)) : ?>
            <meta name="description" content="<?php echo $page->getMetaDescription(); ?>">
        <?php endif; ?>
        <meta name="viewport" content="width=device-width">
        <?php $view['assets']->outputHeadDeclarations(); ?>
    </head>
    <body style="background-color: #F8F8F8;">
        <?php $view['assets']->outputScripts("bodyOpen"); ?>
        <?php $view['slots']->output('_content'); ?>
        <?php $view['assets']->outputScripts("bodyClose"); ?>
    </body>
</html>
