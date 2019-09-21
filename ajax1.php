<?php

    $fname;
    $lname;
    $email;
    $pass;
    $passConfirm;
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $pass=$_POST['pass'];
    $passConfirm=$_POST['passConfirm'];
    if(empty($fname && $lname  && $email && $pass && $passConfirm)){
        echo "Input Field Must Not Be Empty";
        return false;
    }
    else if($pass!==$passConfirm){
echo "Password Not Matching...";
return false;
    }
        else
        {
    
            $connect=mysqli_connect("localhost","mollahsamim115","71cd817L@..","user");
            $insertDb="INSERT INTO user(fname,lname,email,password,confirmPassword) VALUES('$fname','$lname','$email','$pass','$passConfirm')";
            $runQuery=mysqli_query($connect,$insertDb);
            if($runQuery==true){
                echo "Successfully Insert Data in database..";
                $selectData="SELECT * FROM user WHERE fname='rahul'";
                $runQuery=mysqli_query($connect,$selectData);
                while($rowd=mysqli_fetch_array($runQuery)){
                    $dbFname=$rowd['fname'];
                    $dblname=$rowd['lname'];
                    $dbemail=$rowd['email'];
                    $dbpasswrod=$rowd['password'];
                    $dbconfirmPassword=$rowd['confirmPassword'];
                    ?>
                     <table class="table table-bordered">
                        <tr>
                            <td><?php echo $dbFname;?></td>
                      
                            <td><?php echo $dblname;?></td>
                      
                            <td><?php echo $dbemail;?></td>
                        <?php echo $dbpasswrod; ?></td>
                        
                            <td><?php echo $dbconfirmPassword;?></td>
                        </tr>
                    </table>
                    <?php
                    
                }
                
            }
            
            else{
                echo mysqli_error($connect);
            }
            
    }


?>


