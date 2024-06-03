@extends('layouts.index')
@section('container')
    

    <?php 
    $username = "";
    $password = "";
    $usertype = "";
    $fullname = "";
    
    if(isset($user)){
        $username = $user->username_082;
        $password = $user->password_082;
        $usertype = $user->usertype_082;
        $fullname = $user->fullname_082;
    }
    ?>
    <section class="h-100">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-8 col-xl-6">
        <div class="card rounded-3">
          <img src="<?=base_url('/assets/img/bgcat.jpg')?>"
            class="w-100" style="border-top-left-radius: .3rem; border-top-right-radius: .3rem; "
            alt="Sample photo">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">Users Form</h3>

            <form class="px-md-2" action="" method="post">

              <div data-mdb-input-init class="form-outline mb-4">
                <input type="text" id="form3Example1q" class="form-control" name="username_082" value="<?=$username?>"/>
                <label class="form-label" for="form3Example1q" >Username</label>
              </div>
              <div class="mb-4">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="usertype_082" id="" value="Manager" <?=$usertype=='Manager'?'checked':''?>>
                <label class="form-check-label" for="flexRadioDefault1">
                    Manager
                </label>
            </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="usertype_082" value="Chasir" <?=$usertype=='Chasir'?'checked':''?>>
                <label class="form-check-label" for="flexRadioDefault1">
                    Chasir
                </label>
            </div>
              </div>
              <div data-mdb-input-init class="form-outline mb-4">
                <input type="text" id="form3Example1q" class="form-control" name="fullname_082" value="<?=$fullname?>"/>
                <label class="form-label" for="form3Example1q" >Fullname</label>
              </div>
              <button type="submit" value="SAVE" name="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg mb-1">Submit</button>
              <a href="<?=site_url('users')?>"class="btn btn-secondary btn-lg mb-1">Back</a>
            </form>
            
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection