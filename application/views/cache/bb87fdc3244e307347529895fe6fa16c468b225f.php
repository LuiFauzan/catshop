
<div class="container-fluid top-0 w-25 bg-primary position-fixed h-100">
    <h4 class="text-white mt-2">Apps Menu</h4>
    <hr class="border border-white border-2">
    <ul>
        <li><a href="<?php echo e(site_url('cats')); ?>" class="btn btn-outline-light w-100 mt-2"><i class="bi bi-github"></i> Manage Cats</a></li>
        <li><a href="<?php echo e(site_url('categories')); ?>" class="btn btn-outline-light w-100 mt-2"><i class="bi bi-tags"></i> Manage Categories </a></li>
        <?php if($usertype == 'Manager'): ?>
        <li><a href="<?php echo e(site_url('users')); ?>" class="btn btn-outline-light w-100 mt-2"><i class="bi bi-people"></i> Manage Users</a></li>
        <li><a href="<?php echo e(site_url('cats/sales')); ?>" class="btn btn-outline-light w-100 mt-2" ><i class="bi bi-receipt-cutoff"></i> Sales Report</a></li>
        <?php endif; ?>
    </ul>
    <h4 class="text-white mt-2">Setting</h4>
    <hr class="border border-white border-2">
    <ul>
        <!-- <li></li> -->
        <li><a href="<?php echo e(site_url('auth082/changephoto')); ?>" class="btn btn-outline-light w-100 mt-2" ><i class="bi bi-person-circle"></i> Change Photo</a></li>
        <li><a href="<?php echo e(site_url('auth082/changepass')); ?>" class="btn btn-outline-light w-100 mt-2" ><i class="bi bi-arrow-repeat"></i> Change Password</a></li>
        <li><a href="<?php echo e(site_url('auth082/logout')); ?>" class="btn btn-outline-light w-100 mt-2"><i class="bi bi-box-arrow-left"></i> Logout</a></li>
    </ul>
</div>
<?php /**PATH C:\xampp\htdocs\catshop082-ci\application\views/components/sidebar.blade.php ENDPATH**/ ?>