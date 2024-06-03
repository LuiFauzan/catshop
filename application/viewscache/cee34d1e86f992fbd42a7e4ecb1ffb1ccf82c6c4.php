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
    
    <style>
        ul{
            list-style: none;
        }
    </style>
</head>
<body class="bg-primary-subtle">
    <?php echo $__env->make('components.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <main>
        <div class="position-fixed w-75 end-0 p-2 h-100 d-flex align-items-center justify-content-center" style="margin-top: 50px;">
            <div class="text-center">
                <img src="<?=base_url('assets/img/logo.png')?>" class="img-fluid" alt="" width="60%">
                <h1 class="text-primary" style="font-size: 60px;">Welcome to our catshop</h1>
                <p>"Kami Disini untuk Melayani: Temukan Kualitas dan Perhatian di Setiap Langkah di Kedai Kucing Kami!"</p>
            </div>
        </div>
    </main>
</body>
</html><?php /**PATH C:\xampp\htdocs\catshop082-ci\application\views/home.blade.php ENDPATH**/ ?>