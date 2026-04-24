<!DOCTYPE html>
<html>
<head>
    <title>Upload Foto</title>
</head>
<body>
<?php if(session('success')): ?>
    <p style="color:green;"><?php echo e(session('success')); ?></p>
<?php endif; ?>

<form action="/upload" method="POST" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <label>Nama:</label>
    <input type="text" name="name"><br><br>
    <label>Foto:</label>
    <input type="file" name="photo"><br><br>
    <button type="submit">Upload</button>
</form>

<hr>


<?php $__currentLoopData = $card; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div>
        <p><?php echo e($u->nama_makanan); ?></p>
        <img src="<?php echo e(asset('storage/'.$u->gambar_makanan)); ?>" width="100">
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</body>
</html>
<?php /**PATH C:\Tugas Mandiri\CODE\Php\miaw\resources\views/upload.blade.php ENDPATH**/ ?>