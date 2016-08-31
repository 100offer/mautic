<?php
$view->extend(":$template:base.html.php");
?>
<link rel="stylesheet" href="<?php echo $view['assets']->geturl('themes/lina_inverse/css/lina_inverse.css'); ?>" type="text/css" />
<div class="lina-container">
    <div class="lina-wrapper-container">
        <div class="lina-header">
            <img src="https://snow-assets.b0.upaiyun.com/assets/logo-white-2d190d988f772604c8e00fb85c632933.png" class="lina-header-logo" alt="lina-logo">
            <span class="lina-header-spliter"></span>
            <span class="lina-header-slogan">
                帮最好的程序员发现更好的offer
            </span>
        </div>
        <div class="lina-spliter"></div>
        <div class="lina-body">
              <?php $view['slots']->output('body'); ?>
        </div>
        <div class="lina-speical-btn">
            <?php $view['slots']->output('special-btn'); ?>
        </div>
        <div class="lina-info">
            <?php $view['slots']->output('info'); ?>
        </div>
        <div class="lina-spliter"></div>
        <div class="lina-signature">
            <div class="lina-username">
                <?php $view['slots']->output('username'); ?>
            </div>
            <div class="lina-title">
                <?php $view['slots']->output('title'); ?>
            </div>
            <div class="lina-site">
               <?php $view['slots']->output('site'); ?>
            </div>
        </div>
    </div>
    <div class="lina-footer">
        <div class="lina-footer-sent">此邮件由100offer发送 </div>
        <div class="lina-footer-unsubscribe"><a href="{unsubscribe_url}">取消推送邮件订阅？</a></div>
    </div>
</div>

<?php $view['slots']->output('builder'); ?>
