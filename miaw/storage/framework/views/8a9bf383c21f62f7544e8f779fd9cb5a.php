<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar Buku</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
</head>
<body>

    <header>
        <h2 class="Logo">Logo</h2>
        <div class="Navbar-container">
            <a href="#" class="Navbar">Home</a>
            <a href="#" class="Navbar">About</a>
            <a href="#" class="Navbar">Services</a>
            <a href="#" class="Navbar">Contact</a>
        </div>
    </header>

    <main>
        <h2 class="judul">Daftar Makanan</h2>

        <div class="menu-container">
            <?php $__currentLoopData = $data_buku; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $buku): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="menu">
                    <div class="nama-makanan">
                        <h3><?php echo e($buku->nama); ?></h3>
                    </div>
                    <div class="gambar-makanan">
                        <span><?php echo e($buku->alamat); ?></span>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

<div class="previous">
    <?php echo e($data_buku->links('pagination::bootstrap-5')); ?>

</div>
    </main>

</body>
</html><?php /**PATH C:\Tugas Mandiri\CODE\Php\miaw\resources\views/index.blade.php ENDPATH**/ ?>