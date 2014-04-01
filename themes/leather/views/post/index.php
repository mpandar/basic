
<?php
$this->pageTitle = Yii::app()->name;
$this->breadcrumbs = array(
    '新闻列表' => array('/post/index'),
);
?>
<?php if(!empty($_GET['tag'])): ?>
<h1>Posts Tagged with <i><?php echo CHtml::encode($_GET['tag']); ?></i></h1>
<?php endif; ?>


<div class="box" >
    <div class="box-title" style="text-align: left"><a href="/basic/site/index">首页</a>>><a href="/basic/post/index">新闻列表</a></div>

    <div class="box-content" >
        <!-- <?php $this->widget('zii.widgets.CListView', array(
                     'dataProvider'=>$dataProvider,
                     'itemView'=>'_view',
                     'template'=>"{items}\n{pager}",
                 )); ?>
                 -->

        <div class="pull-left" style="height:1900px;width:75%;background:white;">

            <!--列表-->
<!--            <div class="news-outside">   <!--新闻-->-->
<!--                <div class="col-xs-3 news-img" <a href="' . Yii::app()->createUrl('post/view', array('id' => $post->id)) . '">  <!--图片部分-->-->
<!--                    --><?php
//                    if(!empty($post->pic_url)){
//                        $imageHelper=new ImageHelper();
//                        $picUrl=$imageHelper->thumb('150','150',$post->pic_url);
//                        $picUrl=Yii::app()->baseUrl. $picUrl;
//                        $news=Yii::app()->createUrl("post/view/$post->id");
//                    }?>
<!--                    <div class="col-xs-9 nes-list">-->
<!--                        <div class="col-xs-12">   <!--新闻标题-->-->
<!--                            --><?php //echo '<li class="' . $class . '"><a href="' . Yii::app()->createUrl('post/view', array('id' => $post->id)) . '">' . $post->title . '</a></li>';?>
<!--                        </div>-->
<!--                        <div class="col-xs-12 news-summary">    <!--摘要-->-->
<!--                            <p>--><?php //echo '<li class="' . $class . '"><a href="' . Yii::app()->createUrl('post/view', array('id' => $post->id)) . '">' . $post->title . '</a></li>';?><!--<a href="' . Yii::app()->createUrl('post/view', array('id' => $post->id)) . '">阅读全文 >></a>-->
<!--                            </p>-->
<!--                            <p>发表于: --><?php //echo date('F j, Y',$data->update_time); ?><!--, 已经有30人看过, 标签：CSS, float, 浮动</p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--            </div>    <!--新闻结束-->-->
<!---->
<!--            <div class="pd_pd">-->
<!--                --><?php //foreach ($posts as $post) {
//                    $postUrl = Yii::app()->createUrl('post/view', array('id' => $post->id));
//                    ?>
<!--                    <div class="product_pd">-->
<!--                        <div class="product_img_1"><a href="--><?php //echo $postUrl; ?><!--">-->
<!--<!--                                <img width="150" height="150" alt="css" class="attachment-thumbnail wp-post-image" src="-->--><?php ////Yii::app()->$post->pic_url ?><!--<!--"></div>-->-->-->
<!--                                --><?php
//                                $imageHelper=new ImageHelper();
//                                $picUrl=$imageHelper->thumb('150','150',$post->pic_url);
//                                $picUrl=Yii::app()->baseUrl. $picUrl;
//                                $news=Yii::app()->createUrl("post/view/$post->id");
//                                if($post->pic_url){
//                                    $imgHelper=new ImageHelper();
//                                    $picUrl=$imageHelper->thumb('150','150',$post->pic_url);
//                                    $picUrl=Yii::app()->baseUrl.$picUrl;
//                                }
//                                ?>
<!--                                <img alt="--><?php //echo $post->title; ?><!--"-->
<!--                                     src="--><?php //echo $picUrl; ?><!--" width="150" height="150"></a>-->
<!--                        </div>-->
<!--                        <div class="product_name_1">-->
<!--                            <a href="--><?php //echo $postUrl; ?><!--">--><?php //echo $post->title; ?><!--</a>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                --><?php //} ?>
<!--            </div>-->

            <div class="news-outside">   <!--第一个新闻-->
                <div class="col-xs-3 news-img" >  <!--图片部分-->
                    <img width="150" height="150" alt="css" class="attachment-thumbnail wp-post-image" src="http://www.icultivator.com/wp-content/uploads/2014/03/css-150x150.png"></div>
                <div class="col-xs-9 nes-list">
                    <div class="col-xs-12">   <!--新闻标题-->
                        <h4><a href="/basic/themes/leather/views/post/firstNews.html" class="news-link">关于浮动（float）的最优清除方案推荐  </a>  </h4>
                    </div>
                    <div class="col-xs-12 news-summary">    <!--摘要-->
                        <p>对于日新月异的WEB开发技术和浏览器更新频率来说，清除浮动已然是一个被人嚼碎了的话题。说是这些年过去了，有关float的地方，还依然少不了清除浮动的标签和css代码。W3C整天研究html5，就不能抽出点时间来把这种烦人的小细节修正一下吗？抱怨归抱怨，饭还得吃，钱还得挣，清除浮动就不能停止。 为了清除浮动增加无语义代码已经是最稳定和简单的方式，但总叫开发者心里感到不舒服，毕竟这么多年来早已习惯了结 …  <a href="/basic/themes/leather/views/post/firstNews.html " class="news-link">阅读全文 >></a>
                        </p>
                        <p>发表于: 2014-03-09, 已经有30人看过, 标签：CSS, float, 浮动</p>
                    </div>
                </div>
            </div>    <!--第一个新闻结束-->
<!---->
<!--            <div class="news-outside">   <!--第2个新闻-->-->
<!--                <div class="col-xs-3 news-img" >  <!--图片部分-->-->
<!--                    <img width="150" height="150" alt="ps" class="attachment-thumbnail wp-post-image" src="http://www.icultivator.com/wp-content/uploads/2014/02/ps-150x150.png"></div>-->
<!--                <div class="col-xs-9 nes-list">-->
<!--                    <div class="col-xs-12">   <!--新闻标题-->-->
<!--                        <h4><a href="/basic/themes/leather/views/post/secondNews.html " class="news-link">如何用PhotoShop制作网站的favicon.ico  </a>  </h4>-->
<!--                    </div>-->
<!--                    <div class="col-xs-12 news-summary">    <!--摘要-->-->
<!--                        <p>所谓favicon，即Favorites Icon的缩写，顾名思义，便是其可以让浏览器的收藏夹中除显示相应的标题外，还以图标的方式区别不同的网站。当然，这不仅仅是Favicon的全部，根据浏览器的不同，Favicon显示也有所区别：在大多数主流浏览器如FireFox和Internet Explorer (5.5及以上版本)中，favicon不仅在收藏夹中显示，还会同时出现在地址栏上，这时用户可以拖....-->
<!--                            <a href=" /basic/themes/leather/views/post/secondNews.html" class="news-link">阅读全文 >></a>-->
<!--                        </p>-->
<!--                        <p>发表于: 2014-03-09, 已经有30人看过, 标签：CSS, float, 浮动</p>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>    <!--第2个新闻结束-->-->
<!---->
<!---->
<!--            <div class="news-outside">   <!--第3个新闻-->-->
<!--                <div class="col-xs-3 news-img" >  <!--图片部分-->-->
<!--                    <img width="150" height="150" alt="c39402b68500fa89eab29a5a2d7144bd" class="attachment-thumbnail wp-post-image" src="http://www.icultivator.com/wp-content/uploads/2014/02/c39402b68500fa89eab29a5a2d7144bd-150x150.png"></div>-->
<!--                <div class="col-xs-9 nes-list">-->
<!--                    <div class="col-xs-12">   <!--新闻标题-->-->
<!--                        <h4><a href="/basic/themes/leather/views/post/thirdNews.html " class="news-link">Web 开发者必备的 14 个 JavaScript 音频库   </a>  </h4>-->
<!--                    </div>-->
<!--                    <div class="col-xs-12 news-summary">    <!--摘要-->-->
<!--                        <p>网页设计可能是现在最有趣的领域之一了。这块的东西对所有的人，不管是知识储备里有料没料的，都敞开大门，机会多多。 其最大的特点就是随着时间的推移，实践的深入，你可以慢慢学习着成为一个大鸟。 涉足这个领域，Google将会是你最好的导师，同时她也将毫无偏颇的对你的水平进行评价。设计并不全是铁定的要为应用程序的创建或者编程语言的一些逻辑应用进行大量的编码工作。她更像是创造力同逻辑代码的结合，从而可以使您 …-->
<!--                            <a href="/basic/themes/leather/views/post/thirdNews.html " class="news-link">阅读全文 >></a>-->
<!--                        </p>-->
<!--                        <p>发表于: 2014-03-09, 已经有30人看过, 标签：CSS, float, 浮动</p>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>    <!--第3个新闻结束-->-->
<!---->
<!--            <div class="news-outside">   <!--第4个新闻-->-->
<!--                <div class="col-xs-3 news-img" >  <!--图片部分-->-->
<!--                    <img width="150" height="150" alt="jquery" class="attachment-thumbnail wp-post-image" src="http://www.icultivator.com/wp-content/uploads/2014/02/jquery-150x150.png">-->
<!--                </div>-->
<!--                <div class="col-xs-9 nes-list">-->
<!--                    <div class="col-xs-12">   <!--新闻标题-->-->
<!--                        <h4><a href=" /basic/themes/leather/views/post/forthNews.html" class="news-link">jquery ajax回调函数中调用$(this)的问题   </a>  </h4>-->
<!--                    </div>-->
<!--                    <div class="col-xs-12 news-summary">    <!--摘要-->-->
<!--                        <p>今天在用jquery的ajax的回调函数时出现了问题，就是在回调函数中不能使用$(this)。这个问题一直弄了很久，怎么也解决不了，后来是在调用函数前先把$(this)存入变量，然后再在回调函数中使用就没问题了，在这作一下笔记。 $(document).ready(function(){ $(“.del”).click(function () { obj=$(this).parent();//回调 …-->
<!--                            <a href="/basic/themes/leather/views/post/forthNews.html " class="news-link">阅读全文 >></a>-->
<!--                        </p>-->
<!--                        <p>发表于: 2014-03-09, 已经有30人看过, 标签：CSS, float, 浮动</p>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>    <!--第4新闻结束-->-->
<!--            <div class="news-outside">   <!--第5个新闻-->-->
<!--                <div class="col-xs-3 news-img" >  <!--图片部分-->-->
<!--                    <img width="150" height="150" alt="css" class="attachment-thumbnail wp-post-image" src="http://www.icultivator.com/wp-content/uploads/2014/03/css-150x150.png"></div>-->
<!--                <div class="col-xs-9 nes-list">-->
<!--                    <div class="col-xs-12">   <!--新闻标题-->-->
<!--                        <h4><a href="/basic/themes/leather/views/post/firstNews.html " class="news-link">关于浮动（float）的最优清除方案推荐  </a>  </h4>-->
<!--                    </div>-->
<!--                    <div class="col-xs-12 news-summary">    <!--摘要-->-->
<!--                        <p>对于日新月异的WEB开发技术和浏览器更新频率来说，清除浮动已然是一个被人嚼碎了的话题。说是这些年过去了，有关float的地方，还依然少不了清除浮动的标签和css代码。W3C整天研究html5，就不能抽出点时间来把这种烦人的小细节修正一下吗？抱怨归抱怨，饭还得吃，钱还得挣，清除浮动就不能停止。 为了清除浮动增加无语义代码已经是最稳定和简单的方式，但总叫开发者心里感到不舒服，毕竟这么多年来早已习惯了结 …  <a href=" /basic/themes/leather/views/post/firstNews.html" class="news-link">阅读全文 >></a>-->
<!--                        </p>-->
<!--                        <p>发表于: 2014-03-09, 已经有30人看过, 标签：CSS, float, 浮动</p>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>    <!--第5个新闻结束-->-->
<!---->
<!--            <div class="news-outside">   <!--第6个新闻-->-->
<!--                <div class="col-xs-3 news-img" >  <!--图片部分-->-->
<!--                    <img width="150" height="150" alt="ps" class="attachment-thumbnail wp-post-image" src="http://www.icultivator.com/wp-content/uploads/2014/02/ps-150x150.png"></div>-->
<!--                <div class="col-xs-9 nes-list">-->
<!--                    <div class="col-xs-12">   <!--新闻标题-->-->
<!--                        <h4><a href=" /basic/themes/leather/views/post/secondNews.html" class="news-link">如何用PhotoShop制作网站的favicon.ico  </a>  </h4>-->
<!--                    </div>-->
<!--                    <div class="col-xs-12 news-summary">    <!--摘要-->-->
<!--                        <p>所谓favicon，即Favorites Icon的缩写，顾名思义，便是其可以让浏览器的收藏夹中除显示相应的标题外，还以图标的方式区别不同的网站。当然，这不仅仅是Favicon的全部，根据浏览器的不同，Favicon显示也有所区别：在大多数主流浏览器如FireFox和Internet Explorer (5.5及以上版本)中，favicon不仅在收藏夹中显示，还会同时出现在地址栏上，这时用户可以拖....-->
<!--                            <a href="/basic/themes/leather/views/post/secondNews.html " class="news-link">阅读全文 >></a>-->
<!--                        </p>-->
<!--                        <p>发表于: 2014-03-09, 已经有30人看过, 标签：CSS, float, 浮动</p>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>    <!--第6个新闻结束-->-->
<!---->
<!---->
<!--            <div class="news-outside">   <!--第7个新闻-->-->
<!--                <div class="col-xs-3 news-img" >  <!--图片部分-->-->
<!--                    <img width="150" height="150" alt="c39402b68500fa89eab29a5a2d7144bd" class="attachment-thumbnail wp-post-image" src="http://www.icultivator.com/wp-content/uploads/2014/02/c39402b68500fa89eab29a5a2d7144bd-150x150.png"></div>-->
<!--                <div class="col-xs-9 nes-list">-->
<!--                    <div class="col-xs-12">   <!--新闻标题-->-->
<!--                        <h4><a href=" /basic/themes/leather/views/post/thirdNews.html" class="news-link">Web 开发者必备的 14 个 JavaScript 音频库   </a>  </h4>-->
<!--                    </div>-->
<!--                    <div class="col-xs-12 news-summary">    <!--摘要-->-->
<!--                        <p>网页设计可能是现在最有趣的领域之一了。这块的东西对所有的人，不管是知识储备里有料没料的，都敞开大门，机会多多。 其最大的特点就是随着时间的推移，实践的深入，你可以慢慢学习着成为一个大鸟。 涉足这个领域，Google将会是你最好的导师，同时她也将毫无偏颇的对你的水平进行评价。设计并不全是铁定的要为应用程序的创建或者编程语言的一些逻辑应用进行大量的编码工作。她更像是创造力同逻辑代码的结合，从而可以使您 …-->
<!--                            <a href="/basic/themes/leather/views/post/thirdNews.html " class="news-link">阅读全文 >></a>-->
<!--                        </p>-->
<!--                        <p>发表于: 2014-03-09, 已经有30人看过, 标签：CSS, float, 浮动</p>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>    <!--第7个新闻结束-->-->
<!---->
<!--            <div class="news-outside">   <!--第8个新闻-->-->
<!--                <div class="col-xs-3 news-img" >  <!--图片部分-->-->
<!--                    <img width="150" height="150" alt="jquery" class="attachment-thumbnail wp-post-image" src="http://www.icultivator.com/wp-content/uploads/2014/02/jquery-150x150.png">-->
<!--                </div>-->
<!--                <div class="col-xs-9 nes-list">-->
<!--                    <div class="col-xs-12">   <!--新闻标题-->-->
<!--                        <h4><a href=" /basic/themes/leather/views/post/forthNews.html" class="news-link">jquery ajax回调函数中调用$(this)的问题   </a>  </h4>-->
<!--                    </div>-->
<!--                    <div class="col-xs-12 news-summary">    <!--摘要-->-->
<!--                        <p>今天在用jquery的ajax的回调函数时出现了问题，就是在回调函数中不能使用$(this)。这个问题一直弄了很久，怎么也解决不了，后来是在调用函数前先把$(this)存入变量，然后再在回调函数中使用就没问题了，在这作一下笔记。 $(document).ready(function(){ $(“.del”).click(function () { obj=$(this).parent();//回调 …-->
<!--                            <a href="/basic/themes/leather/views/post/forthNews.html " class="news-link">阅读全文 >></a>-->
<!--                        </p>-->
<!--                        <p>发表于: 2014-03-09, 已经有30人看过, 标签：CSS, float, 浮动</p>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>    <!--第8新闻结束-->-->


            <div> <!--分页-->
                <ul class="pagination pull-right" id="news-pag">
                    <li><a href="#">&laquo;</a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">&raquo;</a></li>
                </ul>

            </div>
        </div>   <!--新闻列表-->
        <div  style="height:1840px;border-left:2px solid #ececec;padding:10px;width:24%;" class="pull-right">
             <div style="text-align:center"> <h4><b>热点追踪</b></h4>
             </div>
               <ul class=" pull-center" id="news-hot">
                                  <li><a class="news-link "href="/basic/themes/leather/views/post/firstNews.html">关于浮动（float）的最优清除方案推荐 </a></li>
                                  <li><a class="news-link" href="/basic/themes/leather/views/post/secondNews.html">如何用PhotoShop制作网站的favicon.ico </a></li>
                                  <li><a class="news-link " href="/basic/themes/leather/views/post/thirdNews.html">	Web 开发者必备的 14 个 JavaScript 音频库</a></li>
                                  <li><a class="news-link  "href="/basic/themes/leather/views/post/forthNews.html">	jquery ajax回调函数中调用$(this)的问题</a></li>
                                  <li><a class="news-link  "href="">......</a></li>
                                  <li><a  class="news-link " href="#">.....</a></li>
                                  <li><a class="news-link " href="#">.....</a></li>
                              </ul>
        </div>
</div>
