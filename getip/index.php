<?php

$viti=date("YmdHis");

include("getip.php");

$vtip=getIP();

?>

<?php

    //------[ based setting ]-------
    $mysql_server_name='###';
    $mysql_username   ='###';
    $mysql_password='###';
    $mysql_database='###';
    //-------
    
    
    $conn=mysql_connect($mysql_server_name,$mysql_username,$mysql_password);
    if (!$conn)
  {
  die('Could not connect: ' . mysql_error());
  }
    
    
    $sql="insert into pavigi (va,adip,ti) values (1,\"$vtip\",$viti)";
    mysql_select_db($mysql_database,$conn);
    
    $result=mysql_query($sql);
    

    mysql_close($conn);

    //,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,
    
    $conn=mysql_connect($mysql_server_name,$mysql_username,$mysql_password);
          
    $sql="SELECT COUNT(*) FROM pavigi ";
    
    mysql_select_db($mysql_database,$conn);
    
    $result=mysql_query($sql);
    
    $row=mysql_fetch_row($result);
    
    //print_r($row);
    
    mysql_free_result($result);


?>

<html>

<head>
<title>get_your_ip</title>

</head>

<body>


<?php
echo "$vtip";

?>


</body>

</html>