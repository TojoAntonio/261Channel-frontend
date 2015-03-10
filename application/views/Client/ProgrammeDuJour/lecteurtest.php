<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 01/02/15
 * Time: 17:49
 */
?>
<html>
<head>
    <title></title>
    <?php //echo base_url() ?>
    <!--<script src="<?php echo base_url() ?>/assets/scripts/jquery-1.11.1.min.js"></script>-->
    <script src="<?php echo base_url() ?>assets/scripts/jquery-1.11.1.js"></script>
    <!--[if IE]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <!--begin script functions-->
    <script type="text/javascript" language="javascript">
        function sendDate(){
            //alert('lasopy');
            var link = '<?php echo base_url(); ?>' + 'index.php/programmeDuJour/reprendreprogrammeactuel';
            //alert(link.toString());
            var completedate = new Date();
            var date = completedate.getDate();
            var month = completedate.getMonth()+1;
            var year = completedate.getFullYear();
            var hours = completedate.getHours();
            var minutes = completedate.getMinutes();
            var seconds = completedate.getSeconds();
            if(date<10) date = '0'+date.toString();
            if(month<10) month = '0'+month.toString();
            if(hours<10) hours = '0'+hours.toString();
            if(minutes<10) minutes = '0'+minutes.toString();
            if(seconds<10) seconds = '0'+seconds.toString();
            var dateformated = year + "-" + month + "-" + date;
            var timeformated = hours + ":" + minutes + ":" + seconds;
            //alert(dateformated);
            //alert(timeformated);
            var dateandtime = new Array();
            $.ajax({
                type: "POST",
                url: link.toString(),
                data: "dateformated=" + dateformated + "&timeformated=" + timeformated + "&year=" + year.toString() + "&month=" + month.toString() + "&day=" + date.toString() + "&hours=" + hours.toString() + "&minutes=" + minutes.toString() + "&seconds=" + seconds.toString(),
                dataType: "html",
                success:function(result)
                {
                    var time = jQuery.parseJSON(result);
                    alert(time);
                    //$('#testpostrecu').html(result.toString());
                    document.getElementsByName('testpostrecu').item(0).value = result;
                    alert(document.getElementsByName('testpostrecu').item(0).value);
                    //window.location.reload();
                }
            });
        };
    </script>
</head>
<body>
    <form>
        <input type="submit" onclick="sendDate()">
        <input id="testpostrecu" name="testpostrecu" type="text">
    </form>
</body>
</html>
