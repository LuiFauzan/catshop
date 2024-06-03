
<?php $__env->startSection('container'); ?>
    

    <h3 class="text-light">CATEGORIES LIST</h3>
    <a href="<?=site_url('categories/add')?>" class="btn btn-outline-light"><i class="bi bi-plus-circle"></i> Add new category</a>
    <table class="table table-primary table-hover table-striped mt-2">
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
            <td><a href="<?=site_url('categories/edit/'.$category->category_id_082)?>" class="btn btn-warning"><i class="bi bi-pencil-square"> </i>Edit</a></td>
            <td><a href="<?=site_url('categories/delete/'.$category->category_id_082)?>" onclick="return confirm('Are you sure???')" class="btn btn-danger"><i class="bi bi-trash"></i> Delete</a></td>
        </tr>
        <?php } ?>
    </table>
    <a href="<?=site_url('home')?>"class="btn btn-secondary"><i class="bi bi-house"></i> Back</a>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\catshop082-ci\application\views/categories/category_list.blade.php ENDPATH**/ ?>