<body onload="JavaScript:timedRefresh(15000);"> 
  
<h1> Name : Kotchakorn Somsanong <br> ID : 62100029 </h1>
  
<table style="width:100%">
  <tr>
    <td><h2>RESULT</td>
    <td><h2>LAST UPDATE</h2>
      <?php
         $Temperature = file_get_contents('https://api.thingspeak.com/channels/1458410/fields/1/last.txt');
         $Humidity = file_get_contents('https://api.thingspeak.com/channels/1458410/fields/2/last.txt');
      ?>
         <script type="text/JavaScript">
          function timedRefresh(timeoutPeriod) {
          setTimeout("location.reload(true);",timeoutPeriod);
        }
  </script>
  </script>
        <br> <?php echo "Humidity : ".$Temperature ?> % </br> 
        <br> <?php echo " Temperature : ".$Humidity ?> °C </br>
  </td>		
  </tr>
  <tr>
    <td> <h3> Humidity </h3><br>
        <iframe frameborder="0" style="height:300px;width:500px" src="https://thingspeak.com/channels/1458410/charts/1?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15">"Humidity"></iframe>
    </td>
  </tr>

  <tr>
    <td><h3> Temperature </h3><br>
        <iframe frameborder="0" style="height:300px;width:500px" src="https://thingspeak.com/channels/1458410/charts/2?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&type=line&update=15">"Temperature"></iframe>
    </td>
  </tr>

  <tr>
    <td><h3> Location </h3><br>
        <iframe frameborder="0" style="height:300px;width:500px" src="https://thingspeak.com/channels/1458410/maps/channel_show" title="Location"></iframe>
    </td>
  </tr>
</table>
 
</body>
