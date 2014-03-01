
<div class="top_right">
                <span>您好，欢迎来到皮雕软包耗材批发商城！</span>
    <?php if (Yii::app()->user->isGuest) { ?>
        <div class="login-nav"><?php echo CHtml::link('登录', array('/user/login')) ?>
            |<?php echo CHtml::link('注册', array('/user/registration')) ?></div>
    <?php } else { ?>
        <div class="login-nav"><?php echo Yii::t('main', 'Welcome') ?>，<?php echo Yii::app()->user->name ?></div>
        <div class="login-nav2"><?php $this->widget('zii.widgets.CMenu', array(
                'htmlOptions'=>array("style"=>"margin: 0; padding: 0;"),
                'items'=>array(
                    array('label'=>Yii::t('main', 'Member Center'), 'url'=>array('//member'),'itemOptions'=>array('class'=>'personal-center')),
                    array('label'=>Yii::t('main', 'personal data'), 'url'=>array('//user/profile/edit'),'itemOptions'=>array('class'=>'personal-list')),
                    array('label'=>Yii::t('main', 'delivery address'), 'url'=>array('//member/delivery_address/admin'),'itemOptions'=>array('class'=>'personal-list')),
                    array('label'=>Yii::t('main', 'my order'), 'url'=>array('//member/orderlist/admin'),'itemOptions'=>array('class'=>'personal-list')),
                    array('label'=>Yii::t('main', 'my collect'), 'url'=>array('//member/wishlist/admin'),'itemOptions'=>array('class'=>'personal-list')),
                ),
            ));
            ?></div>
        <div class="login-nav"><?php echo CHtml::link(Yii::t('main', 'log out'), array('/user/logout')) ?></div>
    <?php } ?>

    <div class="top_daohang">
        <li id="daohang" >网站导航<i>arrow</i>
            <div class="daohang_box" style="width:250px; display:none;position:absolute;padding:6px; border:0px;box-shadow:0 1px 2px #666;background:#f9f9f9;z-index:10;font-size:12px;">
                <a href="/"> 官方网站 </a><span style="width: 0;">|</span>
                <a href="/"> 热卖信息 </a><span style="width: 0;">|</span>
                <a href="/"> 合作伙伴 </a> <br>
                <a href="/"> 官方网站 </a><span style="width: 0;">|</span>
                <a href="/"> 热卖信息 </a><span style="width: 0;">|</span>
                <a href="/"> 合作伙伴 </a> <br>
            </div>
        </li>
    </div>
</div>
