<?php
/**
 * Created by PhpStorm.
 * User: TIAN
 * Date: 16/5/30
 * Time: 下午11:08
 */
?>
<body ontouchstart>
<div class="container" id="container">
    <div class="fixbody">
        <div class="hd">
            <h1 class="page_title">查询用户</h1>
        </div>
        <div class="bd">
            <?php echo form_open('WEUI/clients/search'); ?>
            <div class="weui_cells">
                <div class="weui_cell">
                    <div class="weui_cell_hd"><label class="weui_label">用户名</label></div>
                    <div class="weui_cell_bd weui_cell_primary">
                        <input class="weui_input" name="name" placeholder="请输入用户名"/>
                    </div>
                </div>
                <div class="weui_btn_area">
                    <button class="weui_btn weui_btn_primary" type="submit">查询</button>
                </div>
            </div>
            </form>
        </div>
    </div>
    <div class="fixfooter">
        <div class="weui_tab">
            <div class="weui_tab_bd">
            </div>
            <div class="weui_tabbar">
                <a href="WEUI/clients/create" class="weui_tabbar_item">
                    <div class="weui_tabbar_icon">
                        <i class="icon icon_panel"></i>
                    </div>
                    <p class="weui_tabbar_label">创建</p>
                </a>
                <a href="WEUI/clients/import" class="weui_tabbar_item">
                    <div class="weui_tabbar_icon">
                        <i class="icon icon_article"></i>
                    </div>
                    <p class="weui_tabbar_label">导入</p>
                </a>
                <a href="WEUI/clients/search" class="weui_tabbar_item weui_bar_item_on">
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
