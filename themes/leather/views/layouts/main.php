<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
    <meta http-equiv="content-language" content="zh"/>
    <meta http-equiv="Cache-Control" content="max-age=7200"/>
    <meta content="chrome=1" http-equiv="X-UA-Compatible"/>
    <link type='text/css' rel='stylesheet' href='<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap.css'/>
    <link type='text/css' rel='stylesheet' href='<?php echo Yii::app()->theme->baseUrl; ?>/css/common.css'/>
    <link type='text/css' rel='stylesheet' href='<?php echo Yii::app()->baseUrl; ?>/css/common.css'/>
    <link type='text/css' rel='stylesheet' href='<?php echo Yii::app()->baseUrl; ?>/css/form.css'/>
    <link type='text/css' rel='stylesheet' href='<?php echo Yii::app()->theme->baseUrl; ?>/css/product.css'/>
    <link type='text/css' rel='stylesheet' href='<?php echo Yii::app()->theme->baseUrl; ?>/css/member.css'/>
    <link type='text/css' rel='stylesheet' href='<?php echo Yii::app()->theme->baseUrl; ?>/css/grid.css'/>
    <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/bootstrap.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/common.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/js/common.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/passwordCheck.js"></script>
    <script type="text/javascript" src="<?php echo F::baseUrl(); ?>/js/holder.js"></script>
    <title><?php echo Yii::app()->params['title']; ?></title>


    <style type="text/css">
     *{margin:0;padding:0;}
    </style>
</head>
<body>
<div class="top">
    <div class="top_contant">
        <div class="top_left">
            <?php echo CHtml::link('收藏网站', 'http://127.0.0.1/basic/', array(rel=>"sidebar",'onclick' => "addFavorite();"));
            echo CHtml::link('官网', Yii::app()->getBaseUrl(true));
            echo CHtml::link('新浪', 'http://www.sina.com.cn/', array('class' => 'sina'));
            echo CHtml::link('商城', Yii::app()->getBaseUrl(true), array('class' => 'mart')); ?>
            <span class="cor_red bold font14">Tel: 13967414054</span>
            <?php echo CHtml::link('在线客服',  array('page/contact','key' => 'help')); ?>
        </div>

        <?php $this->widget('widgets.default.WTopNav'); ?>

    </div>
</div>
<div class="head">
    <div class="logo">
        <a href="<?php echo Yii::app()->getBaseUrl(true); ?>">
            <img alt="<?php echo Yii::app()->params['title']; ?>"
                 src="<?php echo Yii::app()->settings->get('site','logo')=='' ? Yii::app()->theme->baseUrl.'/Image/logo.png':Yii::app()->settings->get('site','logo')?>"
                 width="227" height="80">
        </a></div>
    <?php echo CHtml::beginForm(Yii::app()->createUrl('catalog/index'), 'get', array('class' => 'search')); ?>
    <div class="search_box">
        <?php echo Chtml::textField('key', isset($_GET['key']) ? $_GET['key'] : ''); ?>
        <button></button>
    </div>
    <div class="search_hot">
        热门搜索：
        <?php foreach (array('皮雕', '软皮', '压花') as $v) {
            echo CHtml::link($v, Yii::app()->createUrl('catalog/index', array('key' => $v)));
        } ?>
    </div>
    <?php echo Chtml::endForm(); ?>
    <a href="<?php echo Yii::app()->createUrl('cart/index'); ?>">
        <div class="shopping_car">
            购物车有<span class="cor_red bold"><?php echo Yii::app()->cart->getItemsCount(); ?></span>件商品
        </div>
    </a>
</div>
<div class="nav">
    <?php $this->widget('widgets.leather.WMainMenu') ?>
</div>
<?php if (Yii::app()->params['ads']) {
    echo $this->renderPartial('picture', array('ads' => Yii::app()->params['ads']), true, true);
} ?>

<div class="container_24">

    <div class="clearfix"></div>
    <?php echo $content; ?>
</div>

<div class="footer">
    <div class="foot_c">
        <div class="foot_new">
            <ul>
                <li><span class="font14 bold">新手指南</span></li>
                <li><?php echo CHtml::link('注册新用户', array('/user/registration'));?></li>
                <li><?php echo CHtml::link('如何订购', array('/page/index','key' => 'process'));?></li>
                <li><?php echo CHtml::link('如何修改订单', array('/page/index','key' => 'modify_order'));?></li>
            </ul>
        </div>
        <div class="foot_pay">
            <ul>
                <li><span class="font14 bold">支付方式</span></li>
                <li><?php echo CHtml::link('支付方式', array('/page/index','key' => 'payment'));?></li>
                <li><?php echo CHtml::link('账户提现及退款时效', array('/page/index','key' => 'onlinepayment'));?></li>
                <li><?php echo CHtml::link('查看账户余额', array('/page/index','key' => 'process'));?></li>
            </ul>
        </div>
        <div class="foot_set">
            <ul>
                <li><span class="font14 bold">配送方式</span></li>
                <li><?php echo CHtml::link('配送费用及收费标准', array('/page/index','key' => 'shipping'));?></li>
                <li><?php echo CHtml::link('配送范围及配送时效', array('/page/index','key' => 'shipping'));?></li>
                <li><?php echo CHtml::link('签收注意事项', array('/page/index','key' => 'shippinginfo'));?></li>
            </ul>
        </div>
        <div class="foot_back">
            <ul>
                <li><span class="font14 bold">退换货服务</span></li>
                <li><?php echo CHtml::link('退换货政策', array('/page/index','key' => 'return'));?></li>
                <li><?php echo CHtml::link('退换货流程', array('/page/index','key' => 'return'));?></li>
                <li><?php echo CHtml::link('隐私申明', array('/page/index','key' => 'privacy'));?></li>
            </ul>
        </div>
        <div class="foot_help">
            <ul>
                <li><span class="font14 bold">帮助中心</span></li>
                <li><?php echo CHtml::link('常见问题', array('/page/index','key' => 'problems'));?></li>
                <li><?php echo CHtml::link('在线客服', array('/page/index','key' => 'contact'));?></li>
                <li><?php echo CHtml::link('关于我们', array('/page/index','key' => 'about'));?></li>
            </ul>
        </div>
        <div class="foot_call">
            <p class="font14 bold">咨询电话</p>

            <p class="font14 bold cor_r">13967414054</p>
        </div>
    </div>
    <div class="foot_u">
        <p class="foot_link">
            <?php echo CHtml::link('关于我们', array('/page/index','key' => 'about'));?>|
            <?php echo CHtml::link('联系我们', array('/page/index','key' => 'contact'));?>|
            <a href="">人才招聘</a>|
            <?php echo CHtml::link('商家入驻', array('/page/index','key' => 'join'));?>|
            <a href="">广告服务</a>|
            <a href="">手机商城</a>|
            <a href="">友情链接</a>|
            <a href="">销售联盟</a>|
            <a href="/basic/index.php">皮雕社区</a>|
            <a href="">资源交流</a>
        </p>

        <p>Copyright ? 2013 - 2015 演示商城 All Rights Reserved. <a href="">站长统计</a></p>

        <p>银河方舟 全程技术支持</p>
    </div>
</div>
</body>
</html>
