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
    <h3>CATS FORM</h3>
    <hr>
    <?php 
    $name = "";
    $type = "";
    $gender = "";
    $age = "";
    $price = "";
    if(isset($cat)){
        $name = $cat->name_082;
        $type = $cat->type_082;
        $gender = $cat->gender_082;
        $age = $cat->age_082;
        $price = $cat->price_082;
    }
    ?>
    <form action="" method="post">
        <table>
        <tr>
            <td>Name</td>
            <td><input type="text" name="name_082" value="<?=$name?>" required></td>
        </tr>
        <tr>
            <td>Type</td>
            <td>
                <select name="type_082" id="" required>
                    <option value="">Choose type</option>
                    <?php
                    foreach($category as $cate){

                    ?>
                    <option value="<?=$cate->category_name_082?>"<?=$type==$cate->category_name_082?'selected':''?>><?=$cate->category_name_082?></option>
                    <!-- <option value="Angora"<?=$type=='Angora'?'selected':''?> >Angora</option>
                    <option value="Persia"<?=$type=='Persia'?'selected':''?>>Persia</option> -->
                    <?php
                    }
                    ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Gender</td>
            <td><input type="radio" name="gender_082" id="" value="Male"<?=$gender=='Male'?'checked':''?> required>Male
            <input type="radio" name="gender_082" id="" value="Female"<?=$gender=='Female'?'checked':''?> required>Female</td>
        </tr>
        <tr>
            <td>Age (month)</td>
            <td><input type="number" name="age_082" value="<?=$age?>" required></td>
        </tr>
        <tr>
            <td>Price ($)</td>
            <td><input type="number" name="price_082" value="<?=$price?>" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="SAVE" name="submit"></td>
        </tr>
    </table>
</form>
<a href="<?=site_url('cats')?>">Back</a>
</body>
</html>