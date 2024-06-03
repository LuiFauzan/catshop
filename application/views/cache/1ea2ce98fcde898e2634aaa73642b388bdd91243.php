
<?php $__env->startSection('container'); ?>
    

<section class="h-100 ">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-8 col-xl-6">
        <div class="card rounded-3">
          <img src="<?=base_url('/assets/img/bgcat.jpg')?>"
            class="w-100" style="border-top-left-radius: .3rem; border-top-right-radius: .3rem; "
            alt="Sample photo">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">Change Photo Users Form</h3>
            
             <div style="color:red;"><?=$error?></div>

            <form class="px-md-2" action="" method="post" enctype="multipart/form-data">
              <div data-mdb-input-init class="form-outline mb-4">
                <label class="form-label" for="form3Example1q" >Current Photo</label>
              <img src="<?php echo e(base_url('uploads/users/' . $photo)); ?>" alt="" width="128" height="128">
              </div>
              <div class="input-group mb-3">
                <label class="input-group-text" for="inputGroupFile01">New Photo</label>
                <input type="file" class="form-control" name="photo" id="inputGroupFile01">
                </div>
              <!-- <button type="submit" name="upload" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg mb-1">Upload</button> -->
                <input type="submit" name="upload" value="Upload" class="btn btn-primary btn-lg mb-1">
              <a href="<?=base_url()?>"class="btn btn-secondary btn-lg mb-1">Back</a>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\catshop082-ci\application\views/auth082/form_photo_082.blade.php ENDPATH**/ ?>