
<div class="bg-primary position-fixed top-0 w-75 end-0 d-flex border-start align-items-center p-2 z-3 justify-content-evenly">
    <p class="text-white fs-4 fw-bold m-0">Welcome <i>{{ $fullname }}</i>, Your login as <i>{{ $usertype }}</i></p>
    <img src="{{ base_url('uploads/users/' . $photo) }}" class="rounded-circle" alt="" width="75" height="75">
</div>
