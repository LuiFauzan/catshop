<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catshop - 082</title>
    <link rel="stylesheet" href="<?=base_url('assets/css/bootstrap.min.css')?>">
    <script src="<?=base_url('assets/js/bootstrap.bundle.min.js')?>"></script>
    <script src="<?=base_url('assets/js/jquery.min.js')?>"></script>
    <link rel="stylesheet" href="<?=base_url('assets/font/bootstrap-icons.min.css')?>">
    <link rel="stylesheet" href="<?=base_url('assets/css/style.css')?>">
    <script src="https://kit.fontawesome.com/46db5e6224.js" crossorigin="anonymous"></script>
    <style>
        ul{
            list-style: none;
        }
    </style>
</head>
<body class="bg-primary-subtle">
    @include('components.navbar')
    @include('components.sidebar')
        <main class="border w-75 float-end end-0 p-2 pt-5  h-100 align-items-center justify-content-center" style="margin-top: 50px;">
            
            @yield('container')
        </main>
</body>
</html>