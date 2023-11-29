<?php
 include 'env.php';

 $can=$sql_connect(SERVER,USERNAME,PASSWORD,DATABASE);
 $sql="SELECT * FROM login";
 $result=mysqli_query($can,$sql);
 $data=$result->fetch_all(MYSQLI_ASSOC);
 print_r($data);
 echo "all is well";