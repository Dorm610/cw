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
            <h1 class="page_title">用户详情</h1>
        </div>
        <div class="bd">
            <div class="weui_cells">
                <div class="weui_cell">
                    <div class="weui_cell_bd weui_cell_primary">
                        <p>编号</p>
                    </div>
                    <div class="weui_cell_ft"><?php echo $company['id']?></div>
                </div>
                <div class="weui_cell">
                    <div class="weui_cell_bd weui_cell_primary">
                        <p>企业名</p>
                    </div>
                    <div class="weui_cell_ft"><?php echo $company['name']?></div>
                </div>
                <div class="weui_cell">
                    <div class="weui_cell_bd weui_cell_primary">
                        <p>类型</p>
                    </div>
                    <div class="weui_cell_ft"><?php echo $company['type']?></div>
                </div>
                <div class="weui_cell">
                    <div class="weui_cell_bd weui_cell_primary">
                        <p>标识</p>
                    </div>
                    <div class="weui_cell_ft"><?php echo $company['remark']?></div>
                </div>
                <div class="weui_cell">
                    <div class="weui_cell_bd weui_cell_primary">
                        <p>创建人</p>
                    </div>
                    <div class="weui_cell_ft"><?php echo $company['recorder']?></div>
                </div>
                <div class="weui_cell">
                    <div class="weui_cell_bd weui_cell_primary">
                        <p>创建时间</p>
                    </div>
                    <div class="weui_cell_ft"><?php echo $company['record_time']?></div>
                </div>
            </div>
            <div class="weui_panel weui_panel_access">
                <div class="weui_panel_bd">
                    <div class="weui_media_box weui_media_text">
                        <h4 class="weui_media_title">营业许可</h4>
                        <p class="weui_media_desc"><?php echo $company['business_license']?></p>
                    </div>
                </div>
            </div>
            <div class="weui_panel weui_panel_access">
                <div class="weui_panel_bd">
                    <div class="weui_media_box weui_media_text">
                        <h4 class="weui_media_title">产品介绍</h4>
                        <p class="weui_media_desc"><?php echo $company['product_intro']?></p>
                    </div>
                </div>
            </div>
            <div class="weui_panel weui_panel_access">
                <div class="weui_panel_bd">
                    <div class="weui_media_box weui_media_text">
                        <h4 class="weui_media_title">企业介绍</h4>
                        <p class="weui_media_desc"><?php echo $company['clients_intro']?></p>
                    </div>
                </div>
            </div>
            <div class="weui_panel weui_panel_access">
                <div class="weui_panel_bd">
                    <div class="weui_media_box weui_media_text">
                        <h4 class="weui_media_title">其他评价</h4>
                        <p class="weui_media_desc"><?php echo $company['third_party_evaluate']?></p>
                    </div>
                </div>
            </div>
            <div class="weui_opr_area">
                <p class="weui_btn_area">
                    <a href="<?php echo site_url('WEUI/company/delete/' . $company['id']); ?>" class="weui_btn weui_btn_warn">删除</a>
                </p>
            </div>
        </div>
    </div>
    <div class="fixfooter">
        <div class="weui_tab">
            <div class="weui_tab_bd">
            </div>
            <div class="weui_tabbar">
                <a href="WEUI/company/create" class="weui_tabbar_item">
                    <div class="weui_tabbar_icon">
                        <i class="icon icon_panel"></i>
                    </div>
                    <p class="weui_tabbar_label">创建</p>
                </a>
                <a href="WEUI/company/search" class="weui_tabbar_item">
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