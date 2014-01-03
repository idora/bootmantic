<?php

function themeConfig($form) {
    $bgImg = new Typecho_Widget_Helper_Form_Element_Text('bgImg', NULL, NULL, _t('首页背景图片地址'), _t('在这里填入一个图片URL地址, 作为首页背景图片, 默认使用images下的rainbow.png'));
    $form->addInput($bgImg);

    $headIcon = new Typecho_Widget_Helper_Form_Element_Text('headIcon', NULL, NULL, _t('首页头像地址'), _t('在这里填入一个图片URL地址, 作为首页头像, 默认使用images下的head.png'));
    $form->addInput($headIcon);

    $siteIcon = new Typecho_Widget_Helper_Form_Element_Text('siteIcon', NULL, NULL, _t('标题栏和书签栏Icon'), _t('在这里填入一个图片URL地址, 作为标题栏和书签栏Icon, 默认不显示'));
    $form->addInput($siteIcon);


    $sidebarBlock = new Typecho_Widget_Helper_Form_Element_Checkbox('sidebarBlock', array(
        'ShowRecentPosts' => _t('显示最新文章'),
        'ShowRecentComments' => _t('显示最近回复'),
        'ShowFriend' => _t('显示友情链接(确保正确启用了Links插件)'),
        'ShowCategory' => _t('显示分类'),
        'ShowArchive' => _t('显示归档'),
        'ShowOther' => _t('显示其它杂项')),
    array('ShowRecentPosts', 'ShowRecentComments', 'ShowFriend', 'ShowCategory', 'ShowArchive', 'ShowOther'), _t('侧边栏显示'));
    
    $form->addInput($sidebarBlock->multiMode());
}
