
<div class="container-fluid">
    <div class="row">
        <div class="col-xs-3 col-sm-2 col-md-1 sidebar">
            <ul class="nav nav-sidebar">
                <li><a href="<?php echo site_url('clients'); ?>">首页</a></li>
                <li class="active"><a href="<?php echo site_url('districts/create'); ?>">创建地域</a></li>
                <li><a href="<?php echo site_url('districts'); ?>">查询地域</a></li>
            </ul>
        </div>
        <div class="main">
            <?php echo validation_errors(); ?>
            <div class="col-md-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">定义地域</h3>
                    </div>
                    <div class="panel-body">
                        <!--创建表单-->
<!--                        --><?php //echo form_open('districts/create'); ?>
<!--                        <label for="inputer" class="control-label">创建人：</label>-->
<!--                        <select name="myselect" id="inputer">-->
<!--                            <option value="刘宝键" --><?php //echo  set_select('myselect', '1', TRUE); ?><!-- >刘宝键</option>-->
<!--                            <option value="刘启梦" --><?php //echo  set_select('myselect', '2'); ?><!-- >刘启梦</option>-->
<!--                            <option value="王泉森" --><?php //echo  set_select('myselect', '3'); ?><!-- >王泉森</option>-->
<!--                            <option value="王端阳" --><?php //echo  set_select('myselect', '4'); ?><!-- >王端阳</option>-->
<!--                            <option value="任祯" --><?php //echo  set_select('myselect', '5'); ?><!-- >任祯</option>-->
<!--                            <option value="刘宣" --><?php //echo  set_select('myselect', '6'); ?><!-- >刘宣</option>-->
<!--                            <option value="李拥政" --><?php //echo  set_select('myselect', '7'); ?><!-- >李拥政</option>-->
<!--                            <option value="荀辰龙" --><?php //echo  set_select('myselect', '8'); ?><!-- >荀辰龙</option>-->
<!--                            <option value="王超一" --><?php //echo  set_select('myselect', '9'); ?><!-- >王超一</option>-->
<!--                        </select>-->
<!--                       -->
<!--                        <button type="submit" name="submit" class="btn btn-default">创建</button>-->
<!--                        </form>-->


                        <?php
                        $data['province_selected'] = $address['province_id'];
                        $data['city_selected'] = $address['city_id'];
                        $data['district_selected'] = $address['district_id'];
                        $this->load->view('district_select',$data);
                        ?>

                        <?php
                        $CI = get_instance();
                        $CI->load->model('region_model', 'region');
                        $provinces   = $CI->region->provinces();
                        $citys = $CI->region->children_of($province_selected);
                        ?>
                        <script  language="JavaScript">


                            <?php if(isset($province_selected)):?>
                            var province_selected = <?php echo (int)$province_selected?>;
                            <?php else:?>
                            var province_selected = 0;
                            <?php endif?>

                            <?php if(isset($city_selected)):?>
                            var city_selected = <?php echo (int)$city_selected?>;
                            <?php else:?>
                            var city_selected = 0;
                            <?php endif?>

                            <?php if(isset($district_selected)):?>
                            var district_selected = <?php echo (int)$district_selected?>;
                            <?php else:?>
                            var district_selected = 0;
                            <?php endif?>

                            $(document).ready(function() {

                                var change_city = function(){
                                    $.ajax({
                                        url: '<?php echo  ITURL.'/admin.php/region_change/select_children/parent_id'// site_url('region_change/select_children/parent_id')?>'+'/'+$('#province_id').val(),
                                        type: 'GET',
                                        dataType: 'html',
                                        success: function(data){
                                            city_json = eval('('+data+')');
                                            var city = document.getElementById('city_id');
                                            city.options.length = 0;
                                            city.options[0] = new Option('城市', '-11');
                                            for(var i=0; i<city_json.length; i++){
                                                var len = city.length;
                                                city.options[len] = new Option(city_json[i].region_name, city_json[i].region_id);
                                                if (city.options[len].value == city_selected){
                                                    city.options[len].selected = true;
                                                }
                                            }
                                            change_district();//重置地区
                                        }
                                    });
                                }

                                change_city();//初始化城市

                                $('#province_id').change(function(){
                                    change_city();
                                });


                                var change_district = function(){
                                    $.ajax({
                                        url: '<?php echo  ITURL.'/admin.php/region_change/select_children/parent_id'//site_url('region_change/select_children/parent_id')?>'+'/'+$('#city_id').val(),
                                        type: 'GET',
                                        dataType: 'html',
                                        success: function(data){
                                            district_json = eval('('+data+')');
                                            var district = document.getElementById('district_id');
                                            district.options.length = 0;
                                            district.options[0] = new Option('县/区', '-22');
                                            for(var i=0; i<district_json.length; i++){
                                                var len = district.length;
                                                district.options[len] = new Option(district_json[i].region_name, district_json[i].region_id);
                                                if (district.options[len].value == district_selected){
                                                    district.options[len].selected = true;
                                                }
                                            }
                                        }
                                    });
                                }

                                $('#city_id').change(function(){
                                    change_district();
                                });



                            });


                        </script>
                        <select name="province_id" id="province_id"  style="width:100px;">
                            <option value="-1" >省份</option>
                            <?php foreach($provinces as $key => $province): ?>
                                <option value="<?php echo $province['region_id']; ?>" <?php if($province['region_id']==$province_selected){echo 'selected';}?> ><?php echo $province['region_name']; ?></option>
                            <?php endforeach; ?>

                        </select>

                        <select name="city_id" id="city_id"  style="width:100px;">

                        </select>

                        <select name="district_id" id="district_id" style="width:100px;">
                            <option value=""></option>
                        </select>


                    </div>
                </div>
            </div>
        </div>
