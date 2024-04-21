<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catshop - 082</title>
</head>
<body>
    <h1>Welcome to our catshop</h1>
    <hr>
    <h3>Apps Menu</h3>
    <ul>
        <li><a href="<?=site_url('cats')?>">Manage Cats</a></li>
        <li><a href="<?=site_url('categories')?>">Manage Categories </a></li>
        <?php if( $this->session->userdata('usertype') == 'Manager') { ?>
        <li><a href="<?=site_url('users')?>">Manage Users</a></li>
        <li><a href="<?=site_url('cats/sales')?>">Sales Report</a></li>
        <?php } ?>
    </ul>
    <hr>
    <h3>Welcome <i><?=$this->session->userdata('fullname')?></i>, Your login as <i><?=$this->session->userdata('usertype')?></i></h3>
    <ul>
        <li><img src="<?=base_url('uploads/users/'.$this->session->userdata('photo'))?>" alt="" width="128" height="128"></li>
        <li><a href="<?=site_url('auth082/changephoto')?>">Change Photo</a></li>
        <li><a href="<?=site_url('auth082/changepass')?>">Change Password</a></li>
        <li><a href="<?=site_url('auth082/logout')?>">Logout</a></li>
    </ul>
</body>
</html>