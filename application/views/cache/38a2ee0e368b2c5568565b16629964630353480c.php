
<?php $__env->startSection('container'); ?>
    

    <h3 class="text-light">USERS LIST</h3>
    
    <a href="<?=site_url('users/add')?>" class="btn btn-outline-light"><i class="bi bi-person-add"></i>  Add new users</a>
    <table class="table table-striped table-primary table-hover mt-2">
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
            <td><a href="<?=site_url('users/edit/'.$user->userid_082)?>" class="btn btn-warning"><i class="bi bi-pencil-square"></i> Edit</a></td>
            <td><a href="<?=site_url('users/delete/'.$user->userid_082)?>" class="btn btn-danger" onclick="return confirm('Are you sure???')"><i class="bi bi-trash"></i> Delete</a></td>
            <td><a href="<?=site_url('users/reset/'.$user->userid_082)?>" class="btn btn-dark" onclick="return confirm('Are you sure???')"><i class="bi bi-repeat"></i> Reset Password</a></td>
        </tr>
        <?php } ?>
    </table>
    <a href="<?=site_url('home')?>"class="btn btn-secondary"><i class="bi bi-house"></i> Back</a>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\catshop082-ci\application\views/users/user_list.blade.php ENDPATH**/ ?>