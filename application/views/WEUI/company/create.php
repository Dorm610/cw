<?php
/**
 * Created by PhpStorm.
 * User: TIAN
 * Date: 16/5/30
 * Time: 下午11:10
 */
?>
<body ontouchstart>
<div class="container" id="container">
    <div class="fixbody">
        <div class="hd">
            <h1 class="page_title">创建企业</h1>
        </div>
        <div class="bd">
            <?php echo form_open('WEUI/company/create'); ?>
            <div class="weui_cells">
                <div class="weui_cell weui_cell_select weui_select_after">
                    <div class="weui_cell_hd"><label class="weui_label">企业类型：</label></div>
                    <div class="weui_cell_bd">
                        <select class="weui_select" name="mySelect1">
                            <option value="上游" <?php echo  set_select('mySelect1', '1', TRUE); ?> >上游</option>
                            <option value="下游" <?php echo  set_select('mySelect1', '2'); ?> >下游</option>
                            <option value="物流公司" <?php echo  set_select('mySelect1', '3'); ?> >物流公司</option>
                            <option value="信息部" <?php echo  set_select('mySelect1', '4'); ?> >信息部</option>
                        </select>
                    </div>
                </div>
                <div class="weui_cell weui_cell_select weui_select_after">
                    <div class="weui_cell_hd"><label class="weui_label">企业标识：</label></div>
                    <div class="weui_cell_bd">
                        <select class="weui_select" name="mySelect2">
                            <option value="普通" <?php echo  set_select('mySelect2', '1', TRUE); ?> >普通</option>
                            <option value="三星" <?php echo  set_select('mySelect2', '2'); ?> >三星</option>
                            <option value="五星" <?php echo  set_select('mySelect2', '3'); ?> >五星</option>
                            <option value="紧急" <?php echo  set_select('mySelect2', '4'); ?> >紧急</option>
                            <option value="长期" <?php echo  set_select('mySelect2', '5'); ?> >长期</option>
                        </select>
                    </div>
                </div>
                <div class="weui_cell weui_cell_select weui_select_after">
                    <div class="weui_cell_hd"><label class="weui_label">创建人：</label></div>
                    <div class="weui_cell_bd">
                        <select class="weui_select" name="mySelect3">
                            <option value="刘宝键" <?php echo  set_select('mySelect3', '1', TRUE); ?> >刘宝键</option>
                            <option value="刘启梦" <?php echo  set_select('mySelect3', '2'); ?> >刘启梦</option>
                            <option value="王泉森" <?php echo  set_select('mySelect3', '3'); ?> >王泉森</option>
                            <option value="王端阳" <?php echo  set_select('mySelect3', '4'); ?> >王端阳</option>
                            <option value="任祯" <?php echo  set_select('mySelect3', '5'); ?> >任祯</option>
                            <option value="刘宣" <?php echo  set_select('mySelect3', '6'); ?> >刘宣</option>
                            <option value="李拥政" <?php echo  set_select('mySelect3', '7'); ?> >李拥政</option>
                            <option value="荀辰龙" <?php echo  set_select('mySelect3', '8'); ?> >荀辰龙</option>
                            <option value="王超一" <?php echo  set_select('mySelect3', '9'); ?> >王超一</option>
                        </select>
                    </div>
                </div>
                <div class="weui_cell">
                    <div class="weui_cell_hd"><label class="weui_label">企业名称</label></div>
                    <div class="weui_cell_bd weui_cell_primary">
                        <input class="weui_input" name="name" placeholder="请输入企业名称"/>
                    </div>
                </div>
                <div class="weui_cell">
                    <div class="weui_cell_hd"><label class="weui_label">营业许可</label></div>
                    <div class="weui_cell_bd weui_cell_primary">
                        <input class="weui_input" name="business_license" placeholder="请输入营业许可"/>
                    </div>
                </div>
                <div class="weui_cell">
                    <div class="weui_cell_hd"><label class="weui_label">产品介绍</label></div>
                    <div class="weui_cell_bd weui_cell_primary">
                        <div class="weui_cell_bd weui_cell_primary">
                            <textarea class="weui_textarea" name="product_intro" placeholder="请输入产品介绍" rows="5"></textarea>
                        </div>
                    </div>
                </div>
                <div class="weui_cell">
                    <div class="weui_cell_hd"><label class="weui_label">企业介绍</label></div>
                    <div class="weui_cell_bd weui_cell_primary">
                        <div class="weui_cell_bd weui_cell_primary">
                            <textarea class="weui_textarea" name="clients_intro" placeholder="请输入企业介绍" rows="5"></textarea>
                        </div>
                    </div>
                </div>
                <div class="weui_cell">
                    <div class="weui_cell_hd"><label class="weui_label">其他评价</label></div>
                    <div class="weui_cell_bd weui_cell_primary">
                        <div class="weui_cell_bd weui_cell_primary">
                            <textarea class="weui_textarea" name="third_party_evaluate" placeholder="请输入请正确输入第三方对企业的评价" rows="5"></textarea>
                        </div>
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
                <a href="WEUI/company/create" class="weui_tabbar_item weui_bar_item_on">
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
