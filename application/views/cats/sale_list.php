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
    <h3>SALES LIST</h3>
    <hr>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Sale ID</th>
            <th>Sale date</th>
            <th>Cat ID</th>
            <th>Cat Name</th>
            <th>Customer Name</th>
            <th>Customer Address</th>
            <th>Customer Phone</th>
            <th>Price($)</th>
        </tr>
        <?php $i=1; foreach($sales as $sale){?>
        <tr>
            <td><?=$i++?></td>
            <td><?=$sale->sale_id_082?></td>
            <td><?=$sale->sale_date_082?></td>
            <td><?=$sale->cat_id_082?></td>
            <td><?=$sale->name_082?></td>
            <td><?=$sale->customer_name_082?></td>
            <td><?=$sale->customer_address_082?></td>
            <td><?=$sale->customer_phone_082?></td>
            <td>$<?=$sale->price_082?></td>
           
        </tr>
        <?php } ?>
    </table>
    <a href="<?=site_url('home')?>">Go Home</a>
</body>
</html>