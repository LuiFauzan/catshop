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
    <h3>CHANGE PASSWORD FORM</h3>
    <hr>
    <?=$this->session->flashdata('msg');?>
    <form action="" method="post">
        <table>
        <tr>
            <td>OLD PASSWORD </td>
            <td><input type="password" name="oldpassword"></td>
        </tr>
        <tr>
            <td>PASSWORD </td>
            <td>
                <input type="password" name="newpassword" id="" >
            </td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="CHANGE PASSWORD" name="change"></td>
        </tr>
    </table>
    <a href="<?=base_url()?>">Back</a>

    <!-- <div style="color:red;"><?=validation_errors()?></div> -->

</form>
</body>
</html>