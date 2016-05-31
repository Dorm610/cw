<?php
/**
 * Created by PhpStorm.
 * User: TIAN
 * Date: 16/5/30
 * Time: 下午11:08
 */
    $file_name = "";
?>
<body ontouchstart>
<div class="container" id="container">
    <div class="fixbody">
        <div class="hd">
            <h1 class="page_title">导入用户</h1>
            <p class="page_desc">
                请上传Excel文件,大小需小于2M!
                <br/>请按用户名,微信号,微信名,QQ号,手机号,地址,Email,公司填写!
                <br/>Excel第一行必须为数据,不能有表头!
                <br/>如果与数据库中数据有重复的,按Excel进行更新!
            </p>
        </div>
        <div class="bd">
            <?php echo validation_errors(); ?>
            <?php echo form_open_multipart('WEUI/clients/import'); ?>
            <div class="weui_cells_title">上传</div>
            <div class="weui_cells weui_cells_form">
                <div class="weui_cell">
                    <div class="weui_cell_bd weui_cell_primary">
                        <div class="weui_uploader">
                            <div class="weui_uploader_hd weui_cell">
                                <div class="weui_cell_bd weui_cell_primary">选择文件</div>
                                <div class="weui_cell_ft upload_count">0/1</div>
                            </div>
                            <div class="weui_uploader_bd">
                                <ul class="weui_uploader_files">
                                </ul>
                                <div class="weui_uploader_input_wrp"><!--回调显示已经选择文件-->
                                    <input class="weui_uploader_input upload_file" name="filename" type="file" accept="xlsx,xls" multiple/>
                                </div>
                            </div>
                            <div class="weui_btn_area">
                                <button class="weui_btn weui_btn_primary" type="submit">上传</button>
                            </div>
                        </div>
                    </div>
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
                <a href="WEUI/clients/import" class="weui_tabbar_item weui_bar_item_on">
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
<script>
    $(function () {
        $('.upload_file').on('change', function (event) {
            var files = event.target.files;

            // 如果没有选中文件，直接返回
            if (files.length === 0) {
                return;
            }
            // 插入到预览区
            var $preview = $('<li class="weui_uploader_file weui_uploader_status" style="background-image:url(http://findicons.com/files/icons/1765/windows_icons_v2/256/excel.png)"><div class="weui_uploader_status_content">0%</div></li>');
            $('.weui_uploader_files').append($preview);
            $('.upload_count').text('1/1');
            $('.weui_uploader_input_wrp').hide();
            var progress = 0;
            function uploading() {
                progress += 5;
                $preview.find('.weui_uploader_status_content').text(progress + '%');
                if (progress < 100) {
                    setTimeout(uploading, 30);
                }
                else {
                    // 如果是失败，塞一个失败图标
                    //$preview.find('.weui_uploader_status_content').html('<i class="weui_icon_warn"></i>');
                    $preview.removeClass('weui_uploader_status').find('.weui_uploader_status_content').remove();
                }
            }
            setTimeout(uploading, 30);
        });
    });
</script>