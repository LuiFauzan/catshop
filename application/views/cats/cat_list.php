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
    <h3>CATS LIST</h3>
    <?=$this->session->flashdata('msg')?>
    <a href="<?=site_url('cats/add')?>">Add new cat</a>
    <hr>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Type</th>
            <th>Gender</th>
            <th>Age (month)</th>
            <th>Price($)</th>
            <th colspan="3">Action</th>
        </tr>
        <?php foreach($cats as $cat){?>
        <tr>
            <td><?=$i++?></td>
            <td><?=$cat->name_082?></td>
            <td><?=$cat->type_082?></td>
            <td><?=$cat->gender_082?></td>
            <td><?=$cat->age_082?></td>
            <td><?=$cat->price_082?></td>
            <td><a href="<?=site_url('cats/edit/'.$cat->id_082)?>">Edit</a></td>
            <td><a href="<?=site_url('cats/delete/'.$cat->id_082)?>" onclick="return confirm('Are you sure???')">Delete</a></td>
            <td><?php if($cat->sold_082 == 1) echo 'SOLD'; else { ?> <a href="<?=site_url('cats/sale/'.$cat->id_082)?>">SALE</a><?php } ?></td>
        </tr>
        <?php } ?>
    </table>
    <p ><?=$this->pagination->create_links();?></p>
    <a href="<?=site_url('home')?>">Go Home</a>
</body>
</html>