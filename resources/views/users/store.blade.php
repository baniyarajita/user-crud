<?php
include 'User.php';
$post=$_POST;
$firstName=$post['first_name'];
$lastName=$post['last_name'];
$address=$post['address'];
$phone=$post['phone'];

$user=new User();
$user->setFirstName('$firstName');

$user->setLastName('$lastName');

$user->setAddress('$address');
$user->setphone('$phone');




if($user->save())
{
    header('location:list.php');
}

die("user couldnot be created");
