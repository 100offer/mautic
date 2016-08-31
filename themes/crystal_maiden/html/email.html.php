<?php
$view->extend(":$template:base.html.php");
?>
<div style="background-color: #f8f8f8; font-family: 'Helvetica Neue', 'PingFang SC', 'Hiragino Sans GB', arial, 'microsoft yahei', sans-serif; font-size: 14px; min-width: 850px;">
    <style type="text/css" scoped>
      .cw-wrapper-container {
          background-color: #FFFFFF;
          margin: 75px auto 40px;
          width: 700px;
          min-width: 700px;
          height: 100%;
          box-shadow: 0 4px 14px 5px rgba(166, 166, 177, 0.07);
      }

      .cw-wrapper-container a {
          color: #17B1F7;
          text-decoration: none;
      }

      .cw-logo {
          padding-top: 33px;
          padding-left: 90px;
      }

      .cw-slogan {
          margin: 30px auto;
      }

      .cw-slogan1 {
          margin: 0 auto;
          height: 40px;
          line-height: 40px;
          vertical-align: middle;
          font-size: 20px;
          text-align: center;
          color: #17B1F7;
      }

      .cw-slogan2 {
          margin: 0 auto;
          height: 50px;
          line-height: 50px;
          vertical-align: middle;
          font-size: 30px;
          text-align: center;
          color: #666666;
      }

      .cw-slogan2 p {
          margin: 0 0;
      }

      .cw-banner {
          margin-top: 40px;
      }

      .cw-body {
          color: #666666;
          line-height: 24px;
          margin: 58px 90px 40px;
      }

      .cw-body p {
          margin-bottom: 25px;
      }

      .cw-speical-btn {
          background-color: #17B1F7;
          margin: 0 auto;
          width: 246px;
          height: 40px;
          margin-bottom: 40px;
          border-radius: 2px;
      }

      .cw-speical-btn a {
          display: block;
          color: white;
          line-height: 40px;
          font-size: 16px;
          text-align: center;
      }

      .cw-info {
          margin: 0 90px;
          color: #666666;
      }

      .cw-info p {
          line-height: 24px;
          margin-bottom: 12px;
      }

      .cw-info a {
          text-decoration: underline;
      }

      .cw-signature {
          margin: 84px 90px 43px;
      }

      .cw-signature .cw-username {
          font-size: 24px;
          color: #333333;
          margin-bottom: 14px;
          height: 28px;
      }

      .cw-signature .cw-title {
          color: #666666;
          height: 18px;
          margin-bottom: 11px;
      }

      .cw-signature .cw-site {}

      .cw-footer {
          margin: 0 auto 33px;
          min-width: 700px;
          text-align: center;
      }

      .cw-footer .cw-footer-slogan {
          font-size: 24px;
          color: #333333;
          line-height: 40px;
          margin-bottom: 13px;
      }

      .cw-footer .cw-footer-sent {
          line-height: 17px;
          color: #A6A6A6;
      }

      .cw-footer .cw-footer-unsubscribe {
          line-height: 17px;
          color: #A6A6A6;
      }

      .cw-footer .cw-footer-unsubscribe a {
          color: #A6A6A6;
          text-decoration: underline;
      }

      @media(max-width: 768px) {
          .cw-container {
              font-size: 22px;
              line-height: 38px;
          }
          .cw-speical-btn {
              width: 520px;
              height: 50px;
          }
          .lina-speical-btn a {
              font-size: 22px;
              line-height: 50px;
          }
          .cw-body p {
              margin-bottom: 32px;
          }
          .cw-body {
              line-height: 40px;
          }
          .cw-info p {
              line-height: 40px;
          }
          .cw-footer .cw-footer-unsubscribe {
              line-height: 30px;
          }
      }
    </style>

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
