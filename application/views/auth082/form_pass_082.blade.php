@extends('layouts.index')
@section('container')
  
<section class="h-100">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-8 col-xl-6">
        <div class="card rounded-3">
          <img src="<?=base_url('/assets/img/bgcat.jpg')?>"
            class="w-100" style="border-top-left-radius: .3rem; border-top-right-radius: .3rem; "
            alt="Sample photo">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">Change Password Form</h3>
            {{-- <?=$this->session->flashdata('msg');?> --}}
            <form class="px-md-2" action="" method="post">
              <div data-mdb-input-init class="form-outline mb-4">
                <input type="password" id="form3Example1q" class="form-control" name="oldpassword" />
                <label class="form-label" for="form3Example1q" >Old Password</label>
              </div>
              <div data-mdb-input-init class="form-outline mb-4">
                <input type="password" id="form3Example1q" class="form-control" name="newpassword" />
                <label class="form-label" for="form3Example1q" >New Password</label>
              </div>
              <button type="submit" value="Change" name="change" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg mb-1">Change</button>
              <a href="<?=base_url()?>"class="btn btn-secondary btn-lg mb-1">Back</a>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection