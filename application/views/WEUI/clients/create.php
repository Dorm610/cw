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
            <h1 class="page_title">创建用户</h1>
        </div>
        <div class="bd">
            <?php echo form_open('WEUI/clients/create'); ?>
            <div class="weui_cells">
                <div class="weui_cell weui_cell_select weui_select_after">
                    <div class="weui_cell_hd"><label class="weui_label">创建人</label></div>
                    <div class="weui_cell_bd">
                        <select class="weui_select" name="myselect">
                            <option value="刘宝键" <?php echo  set_select('myselect', '1', TRUE); ?> >刘宝键</option>
                            <option value="刘启梦" <?php echo  set_select('myselect', '2'); ?> >刘启梦</option>
                            <option value="王泉森" <?php echo  set_select('myselect', '3'); ?> >王泉森</option>
                            <option value="王端阳" <?php echo  set_select('myselect', '4'); ?> >王端阳</option>
                            <option value="任祯" <?php echo  set_select('myselect', '5'); ?> >任祯</option>
                            <option value="刘宣" <?php echo  set_select('myselect', '6'); ?> >刘宣</option>
                            <option value="李拥政" <?php echo  set_select('myselect', '7'); ?> >李拥政</option>
                            <option value="荀辰龙" <?php echo  set_select('myselect', '8'); ?> >荀辰龙</option>
                            <option value="王超一" <?php echo  set_select('myselect', '9'); ?> >王超一</option>
                        </select>
                    </div>
                </div>
                <div class="weui_cell weui_cell_select weui_select_after">
                    <div class="weui_cell_hd"><label class="weui_label">客户性质</label></div>
                    <div class="weui_cell_bd">
                        <select class="weui_select" name="myselect1">
                            <option value="未知" <?php echo  set_select('myselect1', '1', TRUE); ?> >未知</option>
                            <option value="厂矿" <?php echo  set_select('myselect1', '2'); ?> >厂矿</option>
                            <option value="供应商" <?php echo  set_select('myselect1', '3'); ?> >供应商</option>
                            <option value="物流公司" <?php echo  set_select('myselect1', '4'); ?> >物流公司</option>
                        </select>
                    </div>
                </div>
                <div class="weui_cell weui_cell_select weui_select_after">
                    <div class="weui_cell_hd"><label class="weui_label">货物类型</label></div>
                    <div class="weui_cell_bd">
                        <select class="weui_select" name="myselect2">
                            <option value="未知" <?php echo  set_select('myselect2', '1', TRUE); ?> >未知</option>
                            <option value="原煤" <?php echo  set_select('myselect2', '2'); ?> >原煤</option>
                            <option value="块煤" <?php echo  set_select('myselect2', '3'); ?> >块煤</option>
                            <option value="煨煤" <?php echo  set_select('myselect2', '4'); ?> >煨煤</option>
                            <option value="动力煤" <?php echo  set_select('myselect2', '5'); ?> >动力煤</option>
                            <option value="一精煤" <?php echo  set_select('myselect2', '6'); ?> >一精煤</option>
                            <option value="二精煤" <?php echo  set_select('myselect2', '7'); ?> >二精煤</option>
                            <option value="洗选煤" <?php echo  set_select('myselect2', '8'); ?> >洗选煤</option>
                            <option value="其他" <?php echo  set_select('myselect2', '9'); ?> >其他</option>
                        </select>
                    </div>
                </div>
                <div class="weui_cell">
                    <div class="weui_cell_hd"><label class="weui_label">用户名</label></div>
                    <div class="weui_cell_bd weui_cell_primary">
                        <input class="weui_input" name="name" placeholder="请输入用户名"/>
                    </div>
                </div>
                <div class="weui_cell">
                    <div class="weui_cell_hd"><label class="weui_label">微信号</label></div>
                    <div class="weui_cell_bd weui_cell_primary">
                        <input class="weui_input" name="wx_id" placeholder="请输入微信号"/>
                    </div>
                </div>
                <div class="weui_cell">
                    <div class="weui_cell_hd"><label class="weui_label">微信名</label></div>
                    <div class="weui_cell_bd weui_cell_primary">
                        <input class="weui_input" name="wx_name" placeholder="请输入微信名"/>
                    </div>
                </div>
                <div class="weui_cell">
                    <div class="weui_cell_hd"><label class="weui_label">QQ号</label></div>
                    <div class="weui_cell_bd weui_cell_primary">
                        <input class="weui_input" name="qq" type="number" pattern="[0-9]*" placeholder="请输入QQ号"/>
                    </div>
                </div>
                <div class="weui_cell">
                    <div class="weui_cell_hd"><label class="weui_label">手机号</label></div>
                    <div class="weui_cell_bd weui_cell_primary">
                        <input class="weui_input" name="phone" type="number" pattern="[0-9]*" placeholder="请输入手机号"/>
                    </div>
                </div>
                <div class="weui_cell">
                    <div class="weui_cell_hd"><label class="weui_label">地址</label></div>
                    <div class="weui_cell_bd weui_cell_primary">
                        <input class="weui_input" name="address" placeholder="请输入地址"/>
                    </div>
                </div>
                <div class="weui_cell">
                    <div class="weui_cell_hd"><label class="weui_label">Email</label></div>
                    <div class="weui_cell_bd weui_cell_primary">
                        <input class="weui_input" name="email" type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" placeholder="请输入Email"/>
                    </div>
                </div>
                <div class="weui_cell">
                    <div class="weui_cell_hd"><label class="weui_label">企业名</label></div>
                    <div class="weui_cell_bd weui_cell_primary">
                        <input class="weui_input" name="company" placeholder="请输入企业名"/>
                    </div>
                </div>
                <div class="weui_cell">
                    <div class="weui_cell_hd"><label class="weui_label">职位</label></div>
                    <div class="weui_cell_bd weui_cell_primary">
                        <input class="weui_input" name="position" placeholder="请输入职位"/>
                    </div>
                </div>
                <div class="weui_cell">
                    <div class="weui_cell_hd"><label class="weui_label">固定电话</label></div>
                    <div class="weui_cell_bd weui_cell_primary">
                        <input class="weui_input" name="linephone" placeholder="请输入固定电话"/>
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
                <a href="WEUI/clients/create" class="weui_tabbar_item weui_bar_item_on">
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
