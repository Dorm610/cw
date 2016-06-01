</div>
</div>

<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery-1.4.2.js"></script>
<script type="text/javascript" src="js/area.js"></script>
<!--<span id="areaContainer"></span>-->
<!--<input id="getValueBtn" type="button" value="getValue">-->
</body>
</html>
<script type="text/javascript">

    $(function(){
        Area.init('<?php echo $base_url;?>'+'js/area.json');
        var area  = new Area('#areaContainer');
        area.select('110108');

        $('#getValueBtn').click(function(){
            var code = area.getAddress();
            var address = Area.getAddressByCode(code);
//            alert(code + address);
            $('#districtID').val(code);
            $('#districtStr').val(address);

        });
    });
</script>