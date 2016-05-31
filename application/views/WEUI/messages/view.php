<?php
/**
 * Created by PhpStorm.
 * User: TIAN
 * Date: 16/5/31
 * Time: 下午8:36
 */
?>
<body ontouchstart>
<div class="container" id="container">
    <div class="fixbody">
        <div class="hd">
            <h1 class="page_title">业务详情</h1>
        </div>
        <div class="bd">
            <div class="weui_cells">
                <div class="weui_cell">
                    <div class="weui_cell_bd weui_cell_primary">
                        <p>编号</p>
                    </div>
                    <div class="weui_cell_ft"><?php echo $messages['id']?></div>
                </div>
                <div class="weui_cell">
                    <div class="weui_cell_bd weui_cell_primary">
                        <p>信息来源</p>
                    </div>
                    <div class="weui_cell_ft"><?php echo $messages['origin']?></div>
                </div>
                <div class="weui_cell">
                    <div class="weui_cell_bd weui_cell_primary">
                        <p>信息分类</p>
                    </div>
                    <div class="weui_cell_ft"><?php echo $messages['category']?></div>
                </div>
                <div class="weui_cell">
                    <div class="weui_cell_bd weui_cell_primary">
                        <p>信息标识</p>
                    </div>
                    <div class="weui_cell_ft"><?php echo $messages['remark']?></div>
                </div>
                <div class="weui_cell">
                    <div class="weui_cell_bd weui_cell_primary">
                        <p>创建时间</p>
                    </div>
                    <div class="weui_cell_ft"><?php echo $messages['record_time']?></div>
                </div>
            </div>
            <article class="weui_article">
                <h1>内容</h1>
                <section>
                    <p><img src="<?php echo $base_url."imgs/".$icon?>" alt=""></p>
                    <p><?php echo $messages['content']?></p>
                </section>
            </article>
            <div class="weui_opr_area">
                <p class="weui_btn_area">
                    <a href="<?php echo site_url('WEUI/messages/delete/' . $messages['id']); ?>" class="weui_btn weui_btn_warn">删除</a>
                </p>
            </div>
        </div>
    </div>
    <div class="fixfooter">
        <div class="weui_tab">
            <div class="weui_tab_bd">
            </div>
            <div class="weui_tabbar">
                <a href="WEUI/messages/create" class="weui_tabbar_item">
                    <div class="weui_tabbar_icon">
                        <i class="icon icon_panel"></i>
                    </div>
                    <p class="weui_tabbar_label">发布</p>
                </a>
                <a href="WEUI/messages/search" class="weui_tabbar_item">
                    <div class="weui_tabbar_icon">
                        <i class="icon icon_search_bar"></i>
                    </div>
                    <p class="weui_tabbar_label">查询</p>
                </a>
                <a href="" class="weui_tabbar_item">
                    <div class="weui_tabbar_icon">
                        <i class="icon icon_cell"></i>
                    </div>
                    <p class="weui_tabbar_label">首页</p>
                </a>
            </div>
        </div>
    </div>
</div>
</body>