<?php
/**
 * Created by PhpStorm.
 * User: TIAN
 * Date: 16/5/30
 * Time: 下午11:10
 */
?>
<body ontouchstart xmlns="http://www.w3.org/1999/html">
<div class="container" id="container">
    <div class="fixbody">
        <?php if ($success == 'create') {?>
            <div class="bd">
                <div class="weui_msg">
                    <div class="weui_icon_area"><i class="weui_icon_success weui_icon_msg"></i></div>
                    <div class="weui_text_area">
                        <h2 class="weui_msg_title">创建成功</h2>
                    </div>
                    <div class="weui_opr_area">
                        <p class="weui_btn_area">
                            <a href="WEUI/messages/create" class="weui_btn weui_btn_primary">继续创建</a>
                            <a href="" class="weui_btn weui_btn_default">主页</a>
                        </p>
                    </div>
                </div>
            </div>
        <?php } else if ($success == 'searchfail') {?>
            <div class="bd">
                <div class="weui_msg">
                    <div class="weui_icon_area"><i class="weui_icon_warn weui_icon_msg"></i></div>
                    <div class="weui_text_area">
                        <h2 class="weui_msg_title">查询失败</h2>
                        <p class="weui_msg_desc">查询企业失败! 暂时没有任何企业信息! </p>
                    </div>
                    <div class="weui_opr_area">
                        <p class="weui_btn_area">
                            <a href="WEUI/messages/create" class="weui_btn weui_btn_primary">创建业务</a>
                            <a href="WEUI/messages/search" class="weui_btn weui_btn_plain_primary">重新查询</a>
                            <a href="" class="weui_btn weui_btn_default">主页</a>
                        </p>
                    </div>
                </div>
            </div>
        <?php } else if ($success == 'searchall') {?>
            <div class="hd">
                <h1 class="page_title">查询业务</h1>
            </div>
            <div class="bd">
                <?php foreach ($result as $messages): ?>
                    <div class="weui_panel weui_panel_access">
                        <div class="weui_panel_bd">
                            <div class="weui_media_box weui_media_text">
                                <h4 class="weui_media_title"><?php echo $messages['title']; ?></h4>
                                <p class="weui_media_desc">
                                    信息来源:<?php echo $messages['origin']; ?>
                                    <br/>
                                    信息分类:<?php echo $messages['category']; ?>
                                    <br/>
                                    信息标识:<?php echo $messages['remark']; ?>
                                </p>
                            </div>
                            <div class="weui_media_box weui_media_text">
                                <p class="weui_media_desc">
                                    创建时间:<?php echo $messages['record_time']; ?>
                                </p>
                            </div>
                            <a href="<?php echo site_url('WEUI/messages/view/' . $messages['id']); ?>" class="weui_panel_ft">查看更多</a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php } else if ($success == 'delete') {?>
            <div class="bd">
                <div class="weui_msg">
                    <div class="weui_icon_area"><i class="weui_icon_success weui_icon_msg"></i></div>
                    <div class="weui_text_area">
                        <h2 class="weui_msg_title">删除成功</h2>
                        <p class="weui_msg_desc">您已成功删除了该业务。</p>
                    </div>
                    <div class="weui_opr_area">
                        <p class="weui_btn_area">
                            <a href="WEUI/messages/search" class="weui_btn weui_btn_primary">查询业务</a>
                            <a href="" class="weui_btn weui_btn_plain_primary">主页</a>
                        </p>
                    </div>
                </div>
            </div>
        <?php } else if ($success == 'delete_fail') {?>
            <div class="bd">
                <div class="weui_msg">
                    <div class="weui_icon_area"><i class="weui_icon_warn weui_icon_msg"></i></div>
                    <div class="weui_text_area">
                        <h2 class="weui_msg_title">删除失败</h2>
                        <p class="weui_msg_desc">删除业务失败! 请确认是否已经联网! </p>
                    </div>
                    <div class="weui_opr_area">
                        <p class="weui_btn_area">
                            <a href="WEUI/messages/search" class="weui_btn weui_btn_primary">查询业务</a>
                            <a href="" class="weui_btn weui_btn_plain_primary">主页</a>
                        </p>
                    </div>
                </div>
            </div>
        <?php } ?>
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