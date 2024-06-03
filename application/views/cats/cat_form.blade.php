@extends('layouts.index')
@section('container')
<?php 
    $name = "";
    $type = "";
    $gender = "";
    $age = "";
    $price = "";
    if(isset($cat)){
        $name = $cat->name_082;
        $type = $cat->type_082;
        $gender = $cat->gender_082;
        $age = $cat->age_082;
        $price = $cat->price_082;
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
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">Cats Form</h3>

            <form class="px-md-2" action="" method="post">

              <div data-mdb-input-init class="form-outline mb-4">
                <input type="text" id="form3Example1q" class="form-control" name="name_082" value="<?=$name?>"/>
                <label class="form-label" for="form3Example1q" >Name</label>
              </div>

              <div class="row">
                <div class="col-md-6 mb-4">

                  <div data-mdb-input-init class="form-outline datepicker">
                    <input type="number" class="form-control" name="age_082" value="<?=$age?>" id="exampleDatepicker1" />
                    <label for="exampleDatepicker1" class="form-label" >Age (Month)</label>
                  </div>

                </div>
                <div class="col-md-6 mb-4">

                  <select data-mdb-select-init name="type_082" class="form-select">
                    <option value="" disabled>Choose</option>
                    <?php
                    foreach($category as $cate){

                    ?>
                    <option value="<?=$cate->category_name_082?>"<?=$type==$cate->category_name_082?'selected':''?>><?=$cate->category_name_082?></option>
                    <?php
                    }
                    ?>
                  </select>

                </div>
              </div>

              <div class="mb-4">

              <div class="form-check">
                <input class="form-check-input" type="radio" name="gender_082" id="" value="Male"<?=$gender=='Male'?'checked':''?>>
                <label class="form-check-label" for="flexRadioDefault1">
                    Male
                </label>
            </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="gender_082" id="" value="Female"<?=$gender=='Female'?'checked':''?>>
                <label class="form-check-label" for="flexRadioDefault1">
                    Female
                </label>
            </div>
              </div>

              <div class="row mb-4 pb-2 pb-md-0 mb-md-5">
                <div class="col-md-6">

                  <div data-mdb-input-init class="form-outline">
                    <input type="number" id="form3Example1w" name="price_082" value="<?=$price?>" class="form-control" />
                    <label class="form-label" for="form3Example1w">Price ($)</label>
                  </div>

                </div>
              </div>

              <button type="submit" value="SAVE" name="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg mb-1">Submit</button>
              <a href="<?=site_url('cats')?>"class="btn btn-secondary btn-lg mb-1">Back</a>
            </form>
            
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection