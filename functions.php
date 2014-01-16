<?php

function themeConfig($form) {
    $bgImg = new Typecho_Widget_Helper_Form_Element_Text('bgImg', NULL, NULL, _t('首页背景图片地址'), _t('在这里填入一个图片URL地址, 作为首页背景图片, 默认使用images下的rainbow.png'));
    $form->addInput($bgImg);

    $headIcon = new Typecho_Widget_Helper_Form_Element_Text('headIcon', NULL, NULL, _t('首页头像地址'), _t('在这里填入一个图片URL地址, 作为首页头像, 默认使用images下的head.png'));
    $form->addInput($headIcon);

    $siteIcon = new Typecho_Widget_Helper_Form_Element_Text('siteIcon', NULL, NULL, _t('标题栏和书签栏Icon'), _t('在这里填入一个图片URL地址, 作为标题栏和书签栏Icon, 默认不显示'));
    $form->addInput($siteIcon);

    $singleColor = new Typecho_Widget_Helper_Form_Element_Radio('singleColor', array(
        'red' => _t('<span style="display: inline-block; width: 24px; height: 15px; background-color: #D95C5C;"></span>'),
        'green' => _t('<span style="display: inline-block; width: 24px; height: 15px; background-color: #A1CF64;"></span>'),
        'blue' => _t('<span style="display: inline-block; width: 24px; height: 15px; background-color: #6ECFF5;"></span>'),
        'purple' => _t('<span style="display: inline-block; width: 24px; height: 15px; background-color: #564F8A;"></span>'),
        'orange' => _t('<span style="display: inline-block; width: 24px; height: 15px; background-color: #F05940;"></span>'),
        'teal' => _t('<span style="display: inline-block; width: 24px; height: 15px; background-color: #00B5AD;"></span>'),
        'grey' => _t('<span style="display: inline-block; width: 24px; height: 15px; background-color: #E8E8E8;"></span>'),
    ), 'red', _t('标签颜色'), _t('包括标签的颜色和每篇文章中的圆形日期的颜色'));
    $form->addInput($singleColor);

    $navbarNav = new Typecho_Widget_Helper_Form_Element_Checkbox('navbarNav', array(
        'ShowIndex' => _t('显示首页'),
        'ShowCategoryMenu' => _t('显示分类菜单'),
        'ShowArchiveMenu' => _t('显示归档菜单'),
        'ShowPage' => _t('显示独立页面')),
    array('ShowIndex', 'ShowCategoryMenu', 'ShowArchiveMenu', 'ShowPage'), _t('导航栏左侧导航显示'));
    $form->addInput($navbarNav);

    $navbarMeta = new Typecho_Widget_Helper_Form_Element_Checkbox('navbarMeta', array(
        'ShowSearch' => _t('显示搜索框'),
        'ShowRSS' => _t('显示RSS订阅'),
        'ShowEmail' => _t('显示电子邮箱'),
        'ShowAdmin' => _t('显示管理/登录')),
    array('ShowSearch', 'ShowRSS', 'ShowAdmin'), _t('导航栏右侧图标显示'));
    $form->addInput($navbarMeta);

    $sidebarBlock = new Typecho_Widget_Helper_Form_Element_Checkbox('sidebarBlock', array(
        'ShowRecentPosts' => _t('显示最新文章'),
        'ShowRecentComments' => _t('显示最近回复'),
        'ShowFriend' => _t('显示友情链接(需Links插件)'),
        'ShowCategory' => _t('显示分类'),
        'ShowArchive' => _t('显示归档'),
        'ShowOther' => _t('显示其它杂项')),
    array('ShowRecentPosts', 'ShowRecentComments', 'ShowFriend'), _t('侧边栏显示'));
    
    $form->addInput($sidebarBlock->multimode());
}
