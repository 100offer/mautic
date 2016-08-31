<?php
$view->extend(":$template:base.html.php");
?>
<div style="background-color: #f8f8f8; font-family: 'Helvetica Neue', 'PingFang SC', 'Hiragino Sans GB', arial, 'microsoft yahei', sans-serif; font-size: 14px; min-width: 850px;">
    <style type="text/css" scoped>
      .lina-wrapper-container {
          background-color: #FFFFFF;
          margin: 75px auto 40px;
          width: 700px;
          min-width: 700px;
          height: 100%;
          box-shadow: 0 4px 14px 5px rgba(166, 166, 177, 0.07);
      }

      .lina-wrapper-container a {
          color: #17B1F7;
          text-decoration: none;
      }

      .lina-header {
          padding-top: 33px;
          padding-left: 90px;
          line-height: 40px;
      }

      .lina-header-logo {
          width: 105px;
          height: 20px;
          vertical-align: middle;
      }

      .lina-header-spliter {
          border-right: 1px solid #DCDCDC;
          margin: 0 19px;
      }

      .lina-header-slogan {
          vertical-align: middle;
          font-size: 16px;
          font-color: #666666;
      }

      .lina-spliter {
          margin: 40px 90px;
          border-top: 1px solid #F6F6F6;
      }

      .lina-body {
          color: #666666;
          line-height: 24px;
          margin: 58px 90px 40px;
      }

      .lina-body p {
          margin-bottom: 25px;
      }

      .lina-speical-btn {
          background-color: #17B1F7;
          margin-left: 90px;
          width: 246px;
          height: 40px;
          margin-bottom: 40px;
          border-radius: 2px;
      }

      .lina-speical-btn a {
          display: block;
          color: white;
          line-height: 40px;
          font-size: 16px;
          text-align: center;
      }

      .lina-info {
          margin: 0 90px;
          color: #666666;
      }

      .lina-info p {
          line-height: 24px;
          margin-bottom: 12px;
      }

      .lina-info a {
          text-decoration: underline;
      }

      .lina-signature {
          margin: 0 90px 43px;
      }

      .lina-signature .lina-username {
          font-size: 24px;
          color: #333333;
          margin-bottom: 14px;
          height: 28px;
      }

      .lina-signature .lina-title {
          color: #666666;
          height: 18px;
          margin-bottom: 11px;
      }

      .lina-footer {
          margin: 0 auto 33px;
          min-width: 700px;
          text-align: center;
      }

      .lina-footer .lina-footer-sent {
          line-height: 17px;
          color: #A6A6A6;
      }

      .lina-footer .lina-footer-unsubscribe {
          line-height: 17px;
          color: #A6A6A6;
      }

      .lina-footer .lina-footer-unsubscribe a {
          color: #A6A6A6;
          text-decoration: underline;
      }

      @media(max-width: 768px) {
          .lina-container {
              font-size: 22px;
              line-height: 38px;
          }
          .lina-speical-btn {
              width: 520px;
              height: 50px;
          }
          .lina-body p {
              margin-bottom: 32px;
          }
          .lina-body {
              line-height: 40px;
          }
          .lina-info p {
              line-height: 40px;
          }
          .lina-footer .lina-footer-unsubscribe {
              line-height: 30px;
          }
          .lina-header {
              padding-top: 33px;
              padding-left: 75px;
              line-height: 60px;
          }
          .lina-header-logo {
              width: 130px;
              height: 30px;
              vertical-align: middle;
          }
          .lina-header-spliter {
              border-right: 1px solid #DCDCDC;
              margin: 0 19px;
          }
          .lina-header-slogan {
              vertical-align: middle;
              font-size: 22px;
              font-color: #666666;
          }
          .lina-speical-btn a {
              font-size: 22px;
              line-height: 50px;
          }
      }
    </style>
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
