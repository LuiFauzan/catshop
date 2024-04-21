<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catshop-082</title>
</head>
<body>
    <h1>CATSHOP 082</h1>
    <h3>USERS FORM</h3>
    <hr>
    <?php 
    $username = "";
    $password = "";
    $usertype = "";
    $fullname = "";
    
    if(isset($user)){
        $username = $user->username_082;
        $password = $user->password_082;
        $usertype = $user->usertype_082;
        $fullname = $user->fullname_082;
    }
    ?>
    <form action="" method="post">
        <table>
        <tr>
            <td>Username</td>
            <td><input type="text" name="username_082" value="<?=$username?>" required></td>
        </tr>
        <!-- <tr>
            <td>password</td>
            <td>
                <input type="password" name="password_082" id="" value="<?=$password?>">
            </td>
        </tr> -->
        <tr>
            <td>Usertype</td>
            <td>
                <input type="radio" name="usertype_082" id="" value="Manager" <?=$usertype=='Manager'?'checked':''?>>Manager
                <input type="radio" name="usertype_082" value="Chasir" <?=$usertype=='Chasir'?'checked':''?>>Chasir
            </td>
        </tr>
        <tr>
            <td>Fullname</td>
            <td><input type="text" name="fullname_082" value="<?=$fullname?>" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="SAVE" name="submit"></td>
        </tr>
    </table>
</form>
<a href="<?=site_url('users')?>">Back</a>
</body>
</html>