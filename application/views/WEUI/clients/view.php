<?php
/**
 * Created by PhpStorm.
 * User: TIAN
 * Date: 16/5/31
 * Time: 上午12:37
 */
?>
<body ontouchstart>
<div class="container" id="container">
    <div class="fixbody">
        <div class="hd">
            <h1 class="page_title">用户详情</h1>
        </div>
        <div class="bd">
            <div class="weui_cells">
                <div class="weui_cell">
                    <div class="weui_cell_bd weui_cell_primary">
                        <p>编号</p>
                    </div>
                    <div class="weui_cell_ft"><?php echo $client['id']?></div>
                </div>
                <div class="weui_cell">
                    <div class="weui_cell_bd weui_cell_primary">
                        <p>用户名</p>
                    </div>
                    <div class="weui_cell_ft"><?php echo $client['name']?></div>
                </div>
                <div class="weui_cell">
                    <div class="weui_cell_bd weui_cell_primary">
                        <p>微信号</p>
                    </div>
                    <div class="weui_cell_ft"><?php echo $client['wx_id']?></div>
                </div>
                <div class="weui_cell">
                    <div class="weui_cell_bd weui_cell_primary">
                        <p>微信名</p>
                    </div>
                    <div class="weui_cell_ft"><?php echo $client['wx_name']?></div>
                </div>
                <div class="weui_cell">
                    <div class="weui_cell_bd weui_cell_primary">
                        <p>手机号</p>
                    </div>
                    <div class="weui_cell_ft"><?php echo $client['phone']?></div>
                </div>
                <div class="weui_cell">
                    <div class="weui_cell_bd weui_cell_primary">
                        <p>QQ号</p>
                    </div>
                    <div class="weui_cell_ft"><?php echo $client['qq']?></div>
                </div>
                <div class="weui_cell">
                    <div class="weui_cell_bd weui_cell_primary">
                        <p>电子邮箱</p>
                    </div>
                    <div class="weui_cell_ft"><?php echo $client['email']?></div>
                </div>
                <div class="weui_cell">
                    <div class="weui_cell_bd weui_cell_primary">
                        <p>企业名</p>
                    </div>
                    <div class="weui_cell_ft"><?php echo $client['company']?></div>
                </div>
                <div class="weui_cell">
                    <div class="weui_cell_bd weui_cell_primary">
                        <p>创建人</p>
                    </div>
                    <div class="weui_cell_ft"><?php echo $client['recorder']?></div>
                </div>
                <div class="weui_cell">
                    <div class="weui_cell_bd weui_cell_primary">
                        <p>创建时间</p>
                    </div>
                    <div class="weui_cell_ft"><?php echo $client['record_time']?></div>
                </div>
            </div>
            <div class="weui_panel weui_panel_access">
                <div class="weui_panel_bd">
                    <div class="weui_media_box weui_media_text">
                        <h4 class="weui_media_title">地址</h4>
                        <p class="weui_media_desc"><?php echo $client['address']?></p>
                    </div>
                </div>
            </div>
            <div class="weui_opr_area">
                <p class="weui_btn_area">
                    <a href="<?php echo site_url('WEUI/clients/modify/' . $client['id']); ?>" class="weui_btn weui_btn_primary">修改</a>
                    <a href="<?php echo site_url('WEUI/clients/delete/' . $client['id']); ?>" class="weui_btn weui_btn_warn">删除</a>
                </p>
            </div>
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
                <a href="WEUI/clients/search" class="weui_tabbar_item">
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
