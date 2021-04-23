<?php
    if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $msg=$_POST['msg'];

        $to='khloe.brown.39@gmail.com';
        $subject='Form Submission';
        $message="Name :".$name."\n"."Phone :".$phone."\n"."Wrote the following :"."\n\n".$msg;
        $headers="From: ".$email;

        if(mail($to, $subject, $message, $headers)){
            echo "<h1>Sent Successfully! <br>Thank you"." ".$name.", I will get back to you shortly!</h1>";
            echo '<a href="index.html">Go back to my Portfolio</a>.';
        }
        else{
            echo "Something went wrong!";
        }
    }
?>