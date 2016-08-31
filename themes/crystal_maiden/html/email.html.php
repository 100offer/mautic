<?php
$view->extend(":$template:base.html.php");
?>
<div style="background-color: #f8f8f8; font-family: 'PingFang SC', 'Hiragino Sans GB', arial, 'microsoft yahei', sans-serif; font-size: 14px; min-width: 850px;">
    <div style="background-color: #FFFFFF; margin: 75px auto 40px; width: 700px; min-width: 700px; height: 100%; box-shadow: 0 4px 14px 5px rgba(166, 166, 177, 0.07);">
        <div style="padding-top: 33px; padding-left: 90px;">
            <img src="https://snow-assets.b0.upaiyun.com/assets/logo-white-2d190d988f772604c8e00fb85c632933.png" width=105 height=20 alt="cw-logo">
        </div>
        <div style="margin: 30px auto;">
            <div style="margin: 0 auto; height: 40px; line-height: 40px; vertical-align: middle; font-size: 20px; text-align: center; color: #17B1F7;">
                 <?php $view['slots']->output('slogan1'); ?>
            </div>
            <div style="margin: 0 auto; height: 50px; line-height: 50px; vertical-align: middle; font-size: 30px; text-align: center; color: #666666;">
                 <?php $view['slots']->output('slogan2'); ?>
            </div>
        </div>
        <div style="margin-top: 40px;">
            <img src="https://mautic.b0.upaiyun.com/themes/crystal_maiden/crystal_maiden_banner.png" width=700 height=211 alt="cw-banner">
        </div>
        <div style="color: #666666;line-height: 24px;margin: 58px 90px 40px;">
              <?php $view['slots']->output('body'); ?>
        </div>
        <div style="background-color: #17B1F7; margin: 0 auto; width: 246px; height: 40px; margin-bottom: 40px; border-radius: 2px;">
            <?php $view['slots']->output('special-btn'); ?>
        </div>
        <div style="margin: 0 90px;color: #666666;">
            <?php $view['slots']->output('info'); ?>
        </div>
        <div style="margin: 84px 90px 43px;">
            <div style="font-size: 24px; color: #333333; margin-bottom: 14px; height: 28px;">
                <?php $view['slots']->output('username'); ?>
            </div>
            <div style="color: #666666; height: 18px; margin-bottom: 11px;">
                <?php $view['slots']->output('title'); ?>
            </div>
            <div class="cw-site">
               <?php $view['slots']->output('site'); ?>
            </div>
        </div>
    </div>
    <div style="margin: 0 auto 33px; min-width: 700px; text-align: center;">
        <div style="font-size: 24px; color: #333333; line-height: 40px; margin-bottom: 13px;">
            <?php $view['slots']->output('footer-slogan'); ?>
        </div>
        <div style="line-height: 17px;color: #A6A6A6;">此邮件由100offer发送 </div>
        <div style="line-height: 17px;color: #A6A6A6;"><a style="color: #A6A6A6;text-decoration: underline;" href="{unsubscribe_url}">取消推送邮件订阅？</a></div>
    </div>
</div>

<?php $view['slots']->output('builder'); ?>
