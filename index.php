<body onload="JavaScript:timedRefresh(15000);"> 
  
<h1> Name : Kotchakorn Somsanong <br> ID : 62100029 </h1>
<iframe frameborder="0" style="height:300px;width:500px" src="https://thingspeak.com/channels/1458410/charts/1?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15">"Humidity"></iframe>
<iframe frameborder="0" style="height:300px;width:500px" src="https://thingspeak.com/channels/1458410/charts/2?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15">"Temperaturet"></iframe>
<iframe frameborder="0" style="height:300px;width:500px" src="https://thingspeak.com/channels/1458410/maps/channel_show" title="Location"></iframe>

 <?php
 $Temperature = file_get_contents('https://api.thingspeak.com/channels/1458410/fields/1/last.txt');
 $Humidity = file_get_contents('https://api.thingspeak.com/channels/1458410/fields/2/last.txt');
?>
<script type="text/JavaScript">
function timedRefresh(timeoutPeriod) {
    setTimeout("location.reload(true);",timeoutPeriod);
}
</script>
 <br> <?php echo "Humidity : ".$Temperature ?> % </br> 
 <br> <?php echo " Temperature : ".$Humidity ?> °C </br>
 
</body>
