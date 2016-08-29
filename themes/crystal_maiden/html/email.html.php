<?php
$view->extend(":$template:base.html.php");
?>
<div class="cw-container">
    <div class="cw-wrapper-container">
        <div class="cw-logo">
            <img src="https://snow-assets.b0.upaiyun.com/assets/logo-white-2d190d988f772604c8e00fb85c632933.png" width=105 height=20 alt="cw-logo"> 
        </div>
        <div class="cw-slogan">
            <div class="cw-slogan1">
                 <?php $view['slots']->output('slogan1'); ?>
            </div>
            <div class="cw-slogan2">
                 <?php $view['slots']->output('slogan2'); ?>
            </div>
        </div>
        <div class="cw-banner">
            <img src="https://mautic.b0.upaiyun.com/themes/crystal_maiden/crystal_maiden_banner.png" width=700 height=211 alt="cw-banner">
        </div>
        <div class="cw-body">
              <?php $view['slots']->output('body'); ?>
        </div>
        <div class="cw-speical-btn">
            <?php $view['slots']->output('special-btn'); ?>
        </div>
        <div class="cw-info">
            <?php $view['slots']->output('info'); ?>
        </div>
        <div class="cw-signature">
            <div class="cw-username">
                <?php $view['slots']->output('username'); ?>
            </div>
            <div class="cw-title">
                <?php $view['slots']->output('title'); ?>
            </div>
            <div class="cw-site">
               <?php $view['slots']->output('site'); ?>
            </div>
        </div>
    </div>
    <div class="cw-footer">
        <div class="cw-footer-slogan">
            <?php $view['slots']->output('footer-slogan'); ?>
        </div>
        <div class="cw-footer-sent">此邮件由100offer发送 </div>
        <div class="cw-footer-unsubscribe"><a href="{unsubscribe_url}">取消推送邮件订阅？</a></div>
    </div>
</div>

<?php $view['slots']->output('builder'); ?>

