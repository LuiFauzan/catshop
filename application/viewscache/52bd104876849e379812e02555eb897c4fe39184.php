<div class="bg-primary position-fixed w-75 end-0 d-flex border-start align-items-center p-2  justify-content-evenly">
    <p class="text-white fs-4 fw-bold m-0">Welcome <i><?=$this->session->userdata('fullname')?></i>, Your login as <i><?=$this->session->userdata('usertype')?></i></p>
    <img src="<?=base_url('uploads/users/'.$this->session->userdata('photo'))?>" class="rounded-circle" alt="" width="75" height="75">
</div><?php /**PATH C:\xampp\htdocs\catshop082-ci\application\views/components/navbar.blade.php ENDPATH**/ ?>