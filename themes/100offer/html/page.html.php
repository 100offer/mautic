<?php
$view->extend(":$template:base.html.php");
$parentVariant = $page->getVariantParent();
$title         = (!empty($parentVariant)) ? $parentVariant->getTitle() : $page->getTitle();
$view['slots']->set('public', (isset($public) && $public === true) ? true : false);
$view['slots']->set('pageTitle', $title);
?>
    <?php if ($view['slots']->hasContent(array('header', 'flash_icon', 'flash_content_header', 'flash_content_detail'))): ?>
    <div id="header">
        <?php if ($view['slots']->hasContent('header')): ?>
        <div id="component-header">
            <?php $view['slots']->output('header'); ?>
        </div>
        <?php endif; // end of header ?>
        <?php if ($view['slots']->hasContent('flash_icon')): ?>
        <div id="component-flash_icon">
            <?php $view['slots']->output('flash_icon'); ?>
        </div>
        <?php endif; // end of flash_icon ?>
        <div id="header-flash-content">
            <?php if ($view['slots']->hasContent('flash_content_header')): ?>
            <div id="component-flash_content_header">
                <?php $view['slots']->output('flash_content_header'); ?>
            </div>
            <?php endif; // end of flash_content_header ?>
            <?php if ($view['slots']->hasContent('flash_content_detail')): ?>
            <div id="component-flash_content_detail">
                <?php $view['slots']->output('flash_content_detail'); ?>
            </div>
            <?php endif; // end of flash_content_detail ?>
        </div>
    </div>
    <?php endif; // end of header check ?>

    <?php if ($view['slots']->hasContent(array('ad_header', 'ad_info', 'ad_header', 'ad_form'))): ?>
    <div id="ad"> 
        <div class="ad-container">
            <div id="ad-header-info-img" class="float-left">
                <div id="component-ad_header">
                    <?php $view['slots']->output('ad_header'); ?>
                </div>
                <div id="component-ad_info">
                    <?php $view['slots']->output('ad_info'); ?>
                </div>
                <div id="component-ad_img">
                    <?php $view['slots']->output('ad_img'); ?>
                </div>
            </div>
            <div id="component-ad_form" class="float-left">
                <?php $view['slots']->output('ad_form'); ?>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <?php endif; ?>

    <div class="recommend-articles">
        <?php if ($view['slots']->hasContent(array("recommendation_thumbnail_1", "recommendation_header_1", "recommendation_summary_1", "recommendation_more_1"))): ?>
        <div class="recommend-article float-left">
            <div class="component-recommendation_thumbnail">
                <?php $view['slots']->output('recommendation_thumbnail_1'); ?>
            </div>
            <div class="component-recommendation_header">
                <?php $view['slots']->output('recommendation_header_1'); ?>
            </div>
            <div class="component-recommendation_summary">
                <?php $view['slots']->output('recommendation_summary_1'); ?>
            </div>
            <div class="component-recommendation_more">
                <?php $view['slots']->output('recommendation_more_1'); ?>
            </div>
        </div>
        <?php endif;?>
        <?php if ($view['slots']->hasContent(array("recommendation_thumbnail_2", "recommendation_header_2", "recommendation_summary_2", "recommendation_more_2"))): ?>
        <div class="recommend-article float-left">
            <div class="component-recommendation_thumbnail">
                <?php $view['slots']->output('recommendation_thumbnail_2'); ?>
            </div>
            <div class="component-recommendation_header">
                <?php $view['slots']->output('recommendation_header_2'); ?>
            </div>
            <div class="component-recommendation_summary">
                <?php $view['slots']->output('recommendation_summary_2'); ?>
            </div>
            <div class="component-recommendation_more">
                <?php $view['slots']->output('recommendation_more_2'); ?>
            </div>
        </div>
        <?php endif;?>
        <?php if ($view['slots']->hasContent(array("recommendation_thumbnail_3", "recommendation_header_3", "recommendation_summary_3", "recommendation_more_3"))): ?>
        <div class="recommend-article float-left">
            <div class="component-recommendation_thumbnail">
                <?php $view['slots']->output('recommendation_thumbnail_3'); ?>
            </div>
            <div class="component-recommendation_header">
                <?php $view['slots']->output('recommendation_header_3'); ?>
            </div>
            <div class="component-recommendation_summary">
                <?php $view['slots']->output('recommendation_summary_3'); ?>
            </div>
            <div class="component-recommendation_more">
                <?php $view['slots']->output('recommendation_more_3'); ?>
            </div>
        </div>
        <?php endif;?>
        <div class="clearfix"></div>
    </div>
    <?php if ($view['slots']->hasContent(array('recommendation_more'))): ?>
    <div id="component-recommendation_more">
        <?php $view['slots']->output('recommendation_more'); ?>
    </div>
    <?php endif;?>

    <?php if ($view['slots']->hasContent(array('footer'))): ?>
    <div id="component-footer">
        <?php $view['slots']->output('footer'); ?>
    </div>
    <?php endif;?>

    <div id="component-copyright"><span class="fs14">沪ICP备14017096号-3</span></div>

    <?php $view['slots']->output('builder'); ?>