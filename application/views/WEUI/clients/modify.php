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
            <h1 class="page_title">修改用户</h1>
        </div>
        <div class="bd">
            <?php echo form_open('WEUI/clients/modify/'.$id); ?>
            <div class="weui_cells">
                <div class="weui_cell">
                    <div class="weui_cell_hd"><label class="weui_label">编号</label></div>
                    <div class="weui_cell_bd weui_cell_primary">
                        <input class="weui_input" name="name" value="<?php echo $result['id']?>" disabled/>
                    </div>
                </div>
                <div class="weui_cell">
                    <div class="weui_cell_hd"><label class="weui_label">用户名</label></div>
                    <div class="weui_cell_bd weui_cell_primary">
                        <input class="weui_input" name="name" placeholder="请输入用户名" value="<?php echo $result['name']?>"/>
                    </div>
                </div>
                <div class="weui_cell">
                    <div class="weui_cell_hd"><label class="weui_label">微信号</label></div>
                    <div class="weui_cell_bd weui_cell_primary">
                        <input class="weui_input" name="wx_id" placeholder="请输入微信号" value="<?php echo $result['wx_id']?>"/>
                    </div>
                </div>
                <div class="weui_cell">
                    <div class="weui_cell_hd"><label class="weui_label">微信名</label></div>
                    <div class="weui_cell_bd weui_cell_primary">
                        <input class="weui_input" name="wx_name" placeholder="请输入微信名" value="<?php echo $result['wx_name']?>"/>
                    </div>
                </div>
                <div class="weui_cell">
                    <div class="weui_cell_hd"><label class="weui_label">QQ号</label></div>
                    <div class="weui_cell_bd weui_cell_primary">
                        <input class="weui_input" name="qq" type="number" pattern="[0-9]*" placeholder="请输入QQ号" value="<?php echo $result['qq']?>"/>
                    </div>
                </div>
                <div class="weui_cell">
                    <div class="weui_cell_hd"><label class="weui_label">手机号</label></div>
                    <div class="weui_cell_bd weui_cell_primary">
                        <input class="weui_input" name="phone" type="number" pattern="[0-9]*" placeholder="请输入手机号" value="<?php echo $result['phone']?>"/>
                    </div>
                </div>
                <div class="weui_cell">
                    <div class="weui_cell_hd"><label class="weui_label">地址</label></div>
                    <div class="weui_cell_bd weui_cell_primary">
                        <input class="weui_input" name="address" placeholder="请输入地址" value="<?php echo $result['address']?>"/>
                    </div>
                </div>
                <div class="weui_cell">
                    <div class="weui_cell_hd"><label class="weui_label">Email</label></div>
                    <div class="weui_cell_bd weui_cell_primary">
                        <input class="weui_input" name="email" type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" placeholder="请输入Email" value="<?php echo $result['email']?>"/>
                    </div>
                </div>
                <div class="weui_cell">
                    <div class="weui_cell_hd"><label class="weui_label">企业名</label></div>
                    <div class="weui_cell_bd weui_cell_primary">
                        <input class="weui_input" name="company" placeholder="请输入企业名" value="<?php echo $result['company']?>"/>
                    </div>
                </div>
                <div class="weui_btn_area">
                    <button class="weui_btn weui_btn_primary" type="submit">修改</button>
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
