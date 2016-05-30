
<!doctype html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <base href = "<?php echo $base_url;?>"/>
    <script type="text/javascript" src="js/jquery-1.4.2.js"></script>
    <script type="text/javascript" src="js/area.js"></script>
    <style>
        body{font-size:14px; font-family:simsun;margin:0;}
    </style>
</head>
<body>
<span id="areaContainer"></span>
<input id="getValueBtn" type="button" value="getValue">
</body>
</html>
<script type="text/javascript">

    $(function(){
        Area.init('<?php echo $base_url;?>'+'js/area.json');
        var area  = new Area('#areaContainer');
        area.select('450802');

        $('#getValueBtn').click(function(){
            var code = area.getAddress();
            var address = Area.getAddressByCode(code);
            alert(code + address);
        });
    });
</script>
