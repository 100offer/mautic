<?php
/**
 * @package     Mautic
 * @copyright   2014 Mautic Contributors. All rights reserved.
 * @author      Mautic
 * @link        http://mautic.org
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */
?>
<!DOCTYPE html>
<html>
    <head>
        <title><?php $view['slots']->output('pageTitle', 'Mautic'); ?></title>
        <?php if (isset($page)) : ?>
            <meta name="description" content="<?php echo $page->getMetaDescription(); ?>">
        <?php endif; ?>
        <script src="//mautic.b0.upaiyun.com/jquery.min.js"></script>
        <link rel="stylesheet" href="//mautic.b0.upaiyun.com/bootstrap.min.css" type="text/css" />
        <script src="//mautic.b0.upaiyun.com/bootstrap.min.js"></script>
        <link href="//mautic.b0.upaiyun.com/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo $view['assets']->getUrl('themes/nature/css/nature.css'); ?>" type="text/css" />
        <?php $view['assets']->outputHeadDeclarations(); ?>
    </head>
    <body>
        <?php $view['assets']->outputScripts("bodyOpen"); ?>
        <?php $view['slots']->output('_content'); ?>
        <?php $view['assets']->outputScripts("bodyClose"); ?>
    </body>
</html>
