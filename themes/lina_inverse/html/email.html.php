<?php
$view->extend(":$template:base.html.php");
?>
<table style="font-weight:300;background-color: #f8f8f8; font-family: 'PingFang SC', 'Hiragino Sans GB', arial, 'microsoft yahei', sans-serif; font-size: 14px; min-width: 850px !important;width: 100% !important;margin:0 auto;">
  <tbody>
    <tr>
      <td>
        <table style="background-color: #FFFFFF; margin: 0 auto; margin-top: 50px; margin-bottom: 40px; width: 700px !important; min-width: 700px !important; height: 100%; box-shadow: 0 4px 14px 5px rgba(166, 166, 177, 0.07);">
            <tr>
              <td>
                <div style="padding-top: 33px; padding-left: 90px; line-height: 40px;height: 40px;">
                  <img src="https://snow-assets.b0.upaiyun.com/assets/logo-white-2d190d988f772604c8e00fb85c632933.png" style="width: 105px; height: 20px; vertical-align: middle;" alt="lina-logo">
                  <span style="border-right: 1px solid #DCDCDC; margin: 0 19px;"></span>
                  <span style="vertical-align: middle; font-size: 16px; color: #666666;display:inline-block;">
                      <?php $view['slots']->output('slogan'); ?>
                  </span>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                    <div style="margin: 20px 90px; border-top: 1px solid #F6F6F6;"></div>
              </td>
            </tr>
            <tr>
              <td>
                <div style="color: #666666; line-height: 24px; margin: 30px 90px 40px;">
                    <?php $view['slots']->output('body'); ?>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <div style="background-color: #17B1F7; margin-left: 90px; line-height: 40px;margin-bottom: 40px; border-radius: 2px;padding: 0 30px;display:inline-block; max-width: calc(100% - 180px);">
                  <?php $view['slots']->output('special-btn'); ?>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <div style="margin: 0 90px; color: #666666;line-height: 24px;">
                  <?php $view['slots']->output('info'); ?>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <div style="margin: 40px 90px; border-top: 1px solid #F6F6F6;"></div>
              </td>
            </tr>
            <tr>
              <td>
                <div style="margin: 0 90px 43px;">
                  <div style="font-size: 24px; color: #333333; margin-bottom: 14px; height: 28px;">
                      <?php $view['slots']->output('username'); ?>
                  </div>
                  <div style="color: #666666; height: 18px; margin-bottom: 11px;">
                      <?php $view['slots']->output('title'); ?>
                  </div>
                  <div class="lina-site">
                     <?php $view['slots']->output('site'); ?>
                  </div>
                </div>
              </td>
            </tr>
        </table>
        <div style="margin: 0 auto 33px; min-width: 700px; text-align: center;">
            <div style="line-height: 17px; color: #A6A6A6;">
              <?php $view['slots']->output('sender'); ?>
            </div>
            <div style="line-height: 17px; color: #A6A6A6;">
              <?php $view['slots']->output('unsubscribe'); ?>
            </div>
        </div>
      </td>
    </tr>
  </tbody>

</table>

<?php $view['slots']->output('builder'); ?>
