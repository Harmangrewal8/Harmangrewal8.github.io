<?php
$to = "iamharmangrewal@gmail.com";
$subject = "My subject";
$txt = "Hello world!";
$headers = "From: xxxxxxxxxx@example.com";
if(mail($to,$subject,$txt,$headers)){
    echo "success";
}else{
    echo "bullshit";
}

?>