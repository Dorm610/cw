<?php
/**
 * Created by PhpStorm.
 * User: TIAN
 * Date: 16/5/30
 * Time: 下午11:09
 */
?>
<body ontouchstart>
<div class="container" id="container">
    <div class="fixbody">
        <div class="hd">
            <h1 class="page_title">发布业务</h1>
        </div>
        <div class="bd">
            <?php echo form_open('WEUI/messages/create'); ?>
            <div class="weui_cells">
                <div class="weui_cell weui_cell_select weui_select_after">
                    <div class="weui_cell_hd"><label class="weui_label">信息来源：</label></div>
                    <div class="weui_cell_bd">
                        <select class="weui_select" name="mySelect1">
                            <option value="客户微信" <?php echo  set_select('mySelect1', '1', TRUE); ?> >客户微信</option>
                            <option value="朋友圈" <?php echo  set_select('mySelect1', '2'); ?> >朋友圈</option>
                            <option value="电话" <?php echo  set_select('mySelect1', '3'); ?> >电话</option>
                            <option value="第三方网站" <?php echo  set_select('mySelect1', '4'); ?> >第三方网站</option>
                            <option value="其他" <?php echo  set_select('mySelect1', '5'); ?> >其他</option>
                        </select>
                    </div>
                </div>
                <div class="weui_cell weui_cell_select weui_select_after">
                    <div class="weui_cell_hd"><label class="weui_label">信息分类：</label></div>
                    <div class="weui_cell_bd">
                        <select class="weui_select" name="mySelect2">
                            <option value="求车" <?php echo  set_select('mySelect2', '1', TRUE); ?> >求车</option>
                            <option value="空车" <?php echo  set_select('mySelect2', '2'); ?> >空车</option>
                            <option value="供应" <?php echo  set_select('mySelect2', '3'); ?> >供应</option>
                            <option value="求购" <?php echo  set_select('mySelect2', '4'); ?> >求购</option>
                            <option value="其他" <?php echo  set_select('mySelect2', '5'); ?> >其他</option>
                        </select>
                    </div>
                </div>
                <div class="weui_cell weui_cell_select weui_select_after">
                    <div class="weui_cell_hd"><label class="weui_label">信息标识：</label></div>
                    <div class="weui_cell_bd">
                        <select class="weui_select" name="mySelect3">
                            <option value="普通" <?php echo  set_select('mySelect3', '1', TRUE); ?> >普通</option>
                            <option value="三星" <?php echo  set_select('mySelect3', '2'); ?> >三星</option>
                            <option value="五星" <?php echo  set_select('mySelect3', '3'); ?> >五星</option>
                            <option value="紧急" <?php echo  set_select('mySelect3', '4'); ?> >紧急</option>
                            <option value="长期" <?php echo  set_select('mySelect3', '5'); ?> >长期</option>
                        </select>
                    </div>
                </div>
                <div class="weui_cell">
                    <div class="weui_cell_hd"><label class="weui_label">内容</label></div>
                    <div class="weui_cell_bd weui_cell_primary">
                        <div class="weui_cell_bd weui_cell_primary">
                            <textarea class="weui_textarea" name="content" placeholder="请输入要发布业务信息的内容" rows="5"></textarea>
                        </div>
                    </div>
                </div>
                <div class="weui_cell">
                    <div class="weui_cell_hd"><label class="weui_label">企业名称</label></div>
                    <div class="weui_cell_bd weui_cell_primary">
                        <input class="weui_input" name="company" placeholder="请输入企业的名称"/>
                    </div>
                </div>
                <div class="weui_cell">
                    <div class="weui_cell_hd"><label class="weui_label">企业类型</label></div>
                    <div class="weui_cell_bd weui_cell_primary">
                        <input class="weui_input" name="company_type" placeholder="请输入企业的类型"/>
                    </div>
                </div>
                <div class="weui_cell">
                    <div class="weui_cell_hd"><label class="weui_label">联系电话</label></div>
                    <div class="weui_cell_bd weui_cell_primary">
                        <input class="weui_input" name="contact" pattern="[0-9]*" placeholder="请输入联系电话不能有空格或其他符号"/>
                    </div>
                </div>
                <div class="weui_btn_area">
                    <button class="weui_btn weui_btn_primary" type="submit">创建</button>
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
                <a href="WEUI/messages/create" class="weui_tabbar_item weui_bar_item_on">
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
