<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catshop-082</title>
</head>
<body>
   <marquee behavior="" direction=""><h1>CATSHOP 082</h1></marquee> 
    <h3>LOGIN FORM</h3>
    <hr>
    <?=$this->session->flashdata('msg')?>
    <form action="" method="post">
        <table>
        <tr>
            <td>USERNAME </td>
            <td><input type="text" name="username" required></td>
        </tr>
        <tr>
            <td>PASSWORD </td>
            <td>
                <input type="password" name="password" id="" required>
            </td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="LOGIN" name="login"></td>
        </tr>
    </table>
    <!-- <div style="color:red;"><?=validation_errors()?></div> -->

</form>
</body>
</html>