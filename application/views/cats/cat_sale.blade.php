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
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">Sale Form</h3>
            <div class="mb-3">
            <label for="disabledTextInput" class="form-label">Cat Id</label>
            <input type="text" id="disabledTextInput" class="form-control" disabled placeholder="<?=$cat->id_082?>">
            </div>
            <div class="mb-3">
            <label for="disabledTextInput" class="form-label">Cat Name</label>
            <input type="text" id="disabledTextInput" class="form-control" disabled placeholder="<?=$cat->name_082?>">
            </div>
            <div class="mb-3">
            <label for="disabledTextInput" class="form-label">Cat Type</label>
            <input type="text" id="disabledTextInput" class="form-control" disabled placeholder="<?=$cat->type_082?>">
            </div>
            <div class="mb-3">
            <label for="disabledTextInput" class="form-label">Cat Price</label>
            <input type="text" id="disabledTextInput" class="form-control" disabled placeholder="$<?=$cat->price_082?>">
            </div>
            <form class="px-md-2" action="" method="post">

              <div data-mdb-input-init class="form-outline mb-4">
                <input type="text" name="customer_name_082" id="form3Example1q" class="form-control"/>
                <label class="form-label" for="form3Example1q" >Customer Name</label>
              </div>
              <div class="form-floating">
            <textarea class="form-control  mb-3" name="customer_address_082" placeholder="Leave a description here" id="floatingTextarea2"></textarea>
            <label for="floatingTextarea2">Customer address</label>
            </div>
            <div data-mdb-input-init class="form-outline mb-4">
                <input type="text" id="form3Example1q" name="customer_phone_082" class="form-control">
                <label class="form-label" for="form3Example1q" >Customer phone</label>
              </div>
              <button type="submit" value="Sale" name="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg mb-1">Sale</button>
              <a href="<?=site_url('cats')?>"class="btn btn-secondary btn-lg mb-1">Back</a>
            </form>
            
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
    
@endsection