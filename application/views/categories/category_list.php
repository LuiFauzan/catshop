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
    <h3>CATEGORIES LIST</h3>
    <a href="<?=site_url('categories/add')?>">Add new category</a>
    <hr>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Name Category</th>
            <th>Description</th>
            <th colspan="2">Action</th>
        </tr>
        <?php $i=1; foreach($categories as $category){?>
        <tr>
            <td><?=$i++?></td>
            <td><?=$category->category_name_082?></td>
            <td><?=$category->description_082?></td>
            <td><a href="<?=site_url('categories/edit/'.$category->category_id_082)?>">Edit</a></td>
            <td><a href="<?=site_url('categories/delete/'.$category->category_id_082)?>" onclick="return confirm('Are you sure???')">Delete</a></td>
        </tr>
        <?php } ?>
    </table>
    <a href="<?=site_url('home')?>">Go Home</a>

</body>
</html>