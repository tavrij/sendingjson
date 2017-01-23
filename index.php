<?php

$data = '    { "user" : [   
                 { "firstName" : "Vignesh",  
                   "lastName"  : "Prajapati",
                   "age"       : 23,
                   "email"     : ["vignesh@gmail.com","vignesh@yahoo.com"],
                   "subject"   : ["English","Gujarati", "Hindi"]
                 }, 

                 { "firstName" : "Vaibhav",  
                   "lastName"  : "Prajapati",
                   "age"       : 19,
                   "email"     : ["vaibhav@gmail.com","vaibhav@yahoo.com","vaibhav@aol.com"],
                   "subject"   : ["English","Spanish", "Chinese","Sanskrit"]
                 }
               ]
    } ';

$url_send ="https://sendingjson.herokuapp.com/post.php";
$str_data = json_encode($data);

function sendPostData($url, $post){
 $ch = curl_init($url);
  curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");  
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_POSTFIELDS,$post);
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1); 
  curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
    'Content-Type: application/json',                                                                                
    'Content-Length: ' . strlen($post))                                                                       
   );  
  $result = curl_exec($ch);
  curl_close($ch);  // Seems like good practice
  return $result;
}
sendPostData($url_send,$str_data);
echo "ok";
?>