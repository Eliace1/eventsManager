<?php
    $con=mysqli_connect("localhost","root","","db2");
    if(isset($_POST['button'])){
        $email=$_POST['email'];
        $nom=$_POST['nom'];
        $confirm_mot=$_POST['confirm'];
        $password = $_POST['password'];
        if(empty($email)||empty($nom)||empty($password)||empty($confirm_mot)){
            echo'veillez entrer tous les champs';
        }
        else if($password===$confirm_mot){
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
            mysqli_query($con,"INSERT INTO users values(null,'$nom','$email','$password')");
            header('location:register.html');
            echo('inscription reussite');
        }else{
            echo 'veillez entrer le bon mot de passe';
        }
    }
?>