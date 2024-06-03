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
    <?php echo $__env->make('components.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('components.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <main class="border w-75 float-end end-0 p-2 pt-5  h-100 align-items-center justify-content-center" style="margin-top: 50px;">
            
            <?php echo $__env->yieldContent('container'); ?>
        </main>
</body>
</html><?php /**PATH C:\xampp\htdocs\catshop082-ci\application\views/layouts/index.blade.php ENDPATH**/ ?>