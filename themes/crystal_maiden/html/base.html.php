<!DOCTYPE html>
<html>
    <head>
        <title><?php $view['slots']->output('pageTitle', 'Mautic'); ?></title>
        <?php if (isset($page)) : ?>
            <meta name="description" content="<?php echo $page->getMetaDescription(); ?>">
        <?php endif; ?>
        <meta name="viewport" content="width=device-width">
        <script src="https://mautic.b0.upaiyun.com/assets/js/jquery-2.0.3.min.js" ></script>
        <link rel="stylesheet" href="<?php echo $view['assets']->geturl('themes/crystal_maiden/css/crystal_maiden.css'); ?>" type="text/css" />
        <link rel="stylesheet" href="https://mautic.b0.upaiyun.com/assets/css/normalize.min.css" type="text/css">
        <?php $view['assets']->outputHeadDeclarations(); ?>
        <script>
            if (!window.jQuery) {
                var script = document.createElement('script');
                script.src = "<?php echo $view['assets']->geturl('themes/crystal_maiden/js/jquery-2.2.4.min.js'); ?>";
                document.body.appendChild(script);
            }
        </script>
    </head>
    <body style="background-color: #F8F8F8;">
        <?php $view['assets']->outputScripts("bodyOpen"); ?>
        <?php $view['slots']->output('_content'); ?>
        <?php $view['assets']->outputScripts("bodyClose"); ?>
    </body>
</html>
