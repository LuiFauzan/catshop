
<?php $__env->startSection('container'); ?>
    

    <?php 
    $namecategory = "";
    $description = "";
    
    if(isset($category)){
        $namecategory = $category->category_name_082;
        $description = $category->description_082;
    }
    ?>
<section class="h-100 h-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-8 col-xl-6">
        <div class="card rounded-3">
          <img src="<?=base_url('/assets/img/bgcat.jpg')?>"
            class="w-100" style="border-top-left-radius: .3rem; border-top-right-radius: .3rem; "
            alt="Sample photo">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">Category Form</h3>

            <form class="px-md-2" action="" method="post">

              <div data-mdb-input-init class="form-outline mb-4">
                <input type="text" id="form3Example1q" class="form-control" name="category_name_082" value="<?=$namecategory?>"/>
                <label class="form-label" for="form3Example1q" >Name Category</label>
              </div>
              <div class="form-floating">
            <textarea class="form-control mb-3" placeholder="Leave a description here" name="description_082" id="floatingTextarea2"><?=$description?></textarea>
            <label for="floatingTextarea2">Description</label>
            </div>
              <button type="submit" value="SAVE" name="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg mb-1">Submit</button>
              <a href="<?=site_url('categories')?>"class="btn btn-secondary btn-lg mb-1">Back</a>
            </form>
            
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\catshop082-ci\application\views/categories/category_form.blade.php ENDPATH**/ ?>