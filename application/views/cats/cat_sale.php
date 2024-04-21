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
    <h3>CAT SALE FORM</h3>
    <hr>
    <form action="" method="post">
        <table>
            <tr>
                <td>Cat Id</td>
                <td>: <?=$cat->id_082?></td>
            </tr>
            <tr>
                <td>Cat Name</td>
                <td>: <?=$cat->name_082?></td>
            </tr>
            <tr>
                <td>Cat Type</td>
                <td>: <?=$cat->type_082?></td>
            </tr>
            <tr>
                <td>Cat Price</td>
                <td>: $<?=$cat->price_082?></td>
            </tr>
            <tr>
                <td>Customer Name</td>
                <td><input type="text" name="customer_name_082"></td>
            </tr>
            <tr>
                <td>Customer Address</td>
                <td>
                    <textarea name="customer_address_082" id="" cols="20" rows="5"></textarea>
                </td>
            </tr>
            <tr>
                <td>Customer Phone</td>
                <td><input type="text" name="customer_phone_082"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="SALE" name="submit"></td>
            </tr>
        </table>
    </form>
    <a href="<?=site_url('cats')?>">Back</a>
</body>
</html>