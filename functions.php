<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

function themeConfig($form) {

    
    $tx = new \Typecho\Widget\Helper\Form\Element\Text(
        'tx',
        null,
        null,
        _t('头像地址'),
        _t('在这里填入一个图片 URL 地址')
    );
    $form->addInput($tx);

    $name = new \Typecho\Widget\Helper\Form\Element\Text(
        'name',
        null,
        null,
        _t('昵称'),
        _t('在这里填入你的昵称')
    );
    $form->addInput($name);

    $hedeBlock = new \Typecho\Widget\Helper\Form\Element\Checkbox('hedeBlock', 
    ['cate' => _t('头部显示分类')],
    [], _t('顶部显示'));
    
    $form->addInput($hedeBlock->multiMode());
}


/*
function themeFields($layout) {
    $logoUrl = new Typecho_Widget_Helper_Form_Element_Text('logoUrl', NULL, NULL, _t('站点LOGO地址'), _t('在这里填入一个图片URL地址, 以在网站标题前加上一个LOGO'));
    $layout->addItem($logoUrl);
}
*/

