<?php
if(isset($_POST['textValue'])){
    $inputText=$_POST['textValue'];
    if($inputText==""){
        echo "<span style='color:#EE5445;font-size:25px;'>Input field must not be Empty</span>";
    }
    else{
        echo "<span style='color:green;font-size:25px;'>$inputText</span>";
    }
}


?>