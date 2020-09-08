<?php
$array = []; 
$array['name'] = $_POST['name'];
$array['mobile'] = $_POST['mobile'];
$array['email'] = $_POST['email'];
var_dump($array);
    $url = "http://bharathapi.epizy.com/api/Employee/post";
        $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
			curl_setopt($ch, CURLOPT_POST, 1);
			curl_setopt($ch, CURLOPT_POSTFIELDS,json_encode($array));
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
      $output = curl_exec($ch);
      $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
      print_r($httpCode);
      if($httpCode == 200){
      	// To check the server output
            header("Location:http://bharathhost.epizy.com/getData.php");
	    }

?>
