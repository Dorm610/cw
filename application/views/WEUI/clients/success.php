<?php
/**
 * Created by PhpStorm.
 * User: TIAN
 * Date: 16/5/30
 * Time: 下午11:09
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
                            <a href="WEUI/clients/create" class="weui_btn weui_btn_primary">继续创建</a>
                            <a href="" class="weui_btn weui_btn_default">主页</a>
                        </p>
                    </div>
                </div>
            </div>
        <?php } else if ($success == 'import') {?>
            <div class="bd">
                <div class="weui_msg">
                    <div class="weui_icon_area"><i class="weui_icon_success weui_icon_msg"></i></div>
                    <div class="weui_text_area">
                        <h2 class="weui_msg_title">导入成功</h2>
                    </div>
                    <div class="weui_opr_area">
                        <p class="weui_btn_area">
                            <a href="WEUI/clients/import" class="weui_btn weui_btn_primary">继续导入</a>
                            <a href="" class="weui_btn weui_btn_default">主页</a>
                        </p>
                    </div>
                </div>
            </div>
        <?php } else if ($success == 'import_fail') {?>
            <div class="bd">
                <div class="weui_msg">
                    <div class="weui_icon_area"><i class="weui_icon_warn weui_icon_msg"></i></div>
                    <div class="weui_text_area">
                        <h2 class="weui_msg_title">导入失败</h2>
                        <p class="weui_msg_desc">请确认所上传文件格式是否符合要求! </p>
                    </div>
                    <div class="weui_opr_area">
                        <p class="weui_btn_area">
                            <a href="WEUI/clients/import" class="weui_btn weui_btn_primary">继续导入</a>
                            <a href="" class="weui_btn weui_btn_default">主页</a>
                        </p>
                    </div>
                </div>
            </div>
        <?php } else if ($success == 'search_noexist') {?>
            <div class="bd">
                <div class="weui_msg">
                    <div class="weui_icon_area"><i class="weui_icon_warn weui_icon_msg"></i></div>
                    <div class="weui_text_area">
                        <h2 class="weui_msg_title">查询失败</h2>
                        <p class="weui_msg_desc">您输入的用户不存在,请确认所要查询的用户名! </p>
                    </div>
                    <div class="weui_opr_area">
                        <p class="weui_btn_area">
                            <a href="WEUI/clients/create" class="weui_btn weui_btn_primary">创建用户</a>
                            <a href="WEUI/clients/search" class="weui_btn weui_btn_plain_primary">重新查询</a>
                            <a href="" class="weui_btn weui_btn_default">主页</a>
                        </p>
                    </div>
                </div>
            </div>
        <?php } else if ($success == 'search_exist') {?>
            <div class="hd">
                <h1 class="page_title">查询用户</h1>
            </div>
            <div class="bd">
                <?php foreach ($results as $client): ?>
                    <div class="weui_panel weui_panel_access">
                        <div class="weui_panel_bd">
                            <div class="weui_media_box weui_media_text">
                                <h4 class="weui_media_title"><?php echo $client['name']; ?></h4>
                                <p class="weui_media_desc">
                                    用户微信名:<?php echo $client['wx_name']; ?>
                                    <br/>
                                    用户微信号:<?php echo $client['wx_id']; ?>
                                </p>
                            </div>
                            <div class="weui_media_box weui_media_text">
                                <p class="weui_media_desc">
                                    创建人:<?php echo $client['recorder']; ?>   创建时间:<?php echo $client['record_time']; ?>
                                </p>
                            </div>
                            <a href="<?php echo site_url('WEUI/clients/view/' . $client['id']); ?>" class="weui_panel_ft">查看更多</a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php } else if ($success == 'modify') {?>
            <div class="bd">
                <div class="weui_msg">
                    <div class="weui_icon_area"><i class="weui_icon_success weui_icon_msg"></i></div>
                    <div class="weui_text_area">
                        <h2 class="weui_msg_title">修改成功</h2>
                    </div>
                    <div class="weui_opr_area">
                        <p class="weui_btn_area">
                            <a href="WEUI/clients/search" class="weui_btn weui_btn_primary">查询用户</a>
                            <a href="" class="weui_btn weui_btn_plain_primary">主页</a>
                        </p>
                    </div>
                </div>
            </div>
        <?php } else if ($success == 'modify_fail') {?>
            <div class="bd">
                <div class="weui_msg">
                    <div class="weui_icon_area"><i class="weui_icon_warn weui_icon_msg"></i></div>
                    <div class="weui_text_area">
                        <h2 class="weui_msg_title">修改失败</h2>
                        <p class="weui_msg_desc">修改用户失败! 要修改的数据可能包含非法字符。</p>
                    </div>
                    <div class="weui_opr_area">
                        <p class="weui_btn_area">
                            <a href="WEUI/clients/search" class="weui_btn weui_btn_primary">查询用户</a>
                            <a href="" class="weui_btn weui_btn_plain_primary">主页</a>
                        </p>
                    </div>
                </div>
            </div>
        <?php } else if ($success == 'delete') {?>
            <div class="bd">
                <div class="weui_msg">
                    <div class="weui_icon_area"><i class="weui_icon_success weui_icon_msg"></i></div>
                    <div class="weui_text_area">
                        <h2 class="weui_msg_title">删除成功</h2>
                        <p class="weui_msg_desc">您已成功删除了该用户的信息。</p>
                    </div>
                    <div class="weui_opr_area">
                        <p class="weui_btn_area">
                            <a href="WEUI/clients/search" class="weui_btn weui_btn_primary">查询用户</a>
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
                        <p class="weui_msg_desc">删除用户失败! 请确认是否已经联网! </p>
                    </div>
                    <div class="weui_opr_area">
                        <p class="weui_btn_area">
                            <a href="WEUI/clients/search" class="weui_btn weui_btn_primary">查询用户</a>
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
