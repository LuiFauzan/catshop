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
    <h3>CATEGORY FORM</h3>
    <hr>
    <?php 
    $namecategory = "";
    $description = "";
    
    if(isset($category)){
        $namecategory = $category->category_name_082;
        $description = $category->description_082;
    }
    ?>
    <form action="" method="post">
        <table>
        <tr>
            <td>Name Category</td>
            <td><input type="text" name="category_name_082" value="<?=$namecategory?>" required></td>
        </tr>
        <tr>
            <td>Description</td>
            <td>
                <textarea name="description_082" id="" cols="30" rows="10"> <?=$description?></textarea>
            </td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="SAVE" name="submit"></td>
        </tr>
    </table>
</form>
<a href="<?=site_url('categories')?>">Back</a>
</body>
</html>