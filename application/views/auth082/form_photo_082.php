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
    <h3>PHOTO FORM</h3>
    <hr>
    <?=$this->session->flashdata('msg')?>
    <div style="color:red;"><?=$error?></div>
    <form action="" method="post" enctype="multipart/form-data">
        <table>
        <tr>
            <td>CURRENT PHOTO</td>
            <td><img src="<?=base_url('uploads/users/'.$this->session->userdata('photo'))?>" alt="" width="128" height="128"></td>
        </tr>
        <tr>
            <td>NEW PHOTO </td>
            <td>
                <input type="file" name="photo" id="">
            </td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="UPLOAD PHOTO" name="upload"></td>
        </tr>
    </table>
    <a href="<?=base_url()?>">Back</a>
    <!-- <div style="color:red;"><?=validation_errors()?></div> -->

</form>
</body>
</html>