<?php
        extract($_POST);
        $con=mysqli_connect("localhost","root","","db2");
        $email=$_POST['email'];
        $pasword=$_POST['motpasse'];
        $email= mysqli_real_escape_string($con,$email);
        $req=mysqli_query($con,"SELECT * FROM users WHERE email='$email'");
        $row=mysqli_fetch_assoc($req);
        if(mysqli_num_rows($req)>0){
            session_start();
           if(password_verify($pasword, $row['pasword'])){
            echo"connexion valide";
            $_SESSION['id']=$row['id'];
            $_SESSION['email']=$row['email'];
            $_SESSION['nom']=$row['name'];
            header("location:profil.php");
           }else{
            echo"nom ou mot de passe incorrect";
        }
    }else{
        echo"mauvaise connexion";
    }
?>