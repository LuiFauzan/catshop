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
    <h3>USERS LIST</h3>
    <?=$this->session->flashdata('msg')?>
    <a href="<?=site_url('users/add')?>">Add new users</a>
    <hr>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Username</th>
            <th>Usertype</th>
            <th>Fullname</th>
            <th colspan="3">Action</th>
        </tr>
        <?php $i=1; foreach($users as $user){?>
        <tr>
            <td><?=$i++?></td>
            <td><?=$user->username_082?></td>
            <td><?=$user->usertype_082?></td>
            <td><?=$user->fullname_082?></td>
            <td><a href="<?=site_url('users/edit/'.$user->userid_082)?>">Edit</a></td>
            <td><a href="<?=site_url('users/delete/'.$user->userid_082)?>" onclick="return confirm('Are you sure???')">Delete</a></td>
            <td><a href="<?=site_url('users/reset/'.$user->userid_082)?>" onclick="return confirm('Are you sure???')">Reset Password</a></td>
        </tr>
        <?php } ?>
    </table>
    <a href="<?=site_url('home')?>">Go Home</a>

</body>
</html>