<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Post</title>
</head>
<body>

    <h1>Daftar Post</h1>

    <a href="<?php echo e(route('posts.create')); ?>">Tambah Post</a>

    <hr>

    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <h2><?php echo e($post->title); ?></h2>

        <p><?php echo e($post->content); ?></p>

        <p>Penulis: <?php echo e($post->author); ?></p>

        <a href="<?php echo e(route('posts.show', $post->id)); ?>">Lihat</a>
        |
        <a href="<?php echo e(route('posts.edit', $post->id)); ?>">Edit</a>

        <form action="<?php echo e(route('posts.destroy', $post->id)); ?>" method="POST" style="display:inline;">
            <?php echo csrf_field(); ?>
            <?php echo method_field('DELETE'); ?>
            <button type="submit">Hapus</button>
        </form>

        <hr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <?php echo e($posts->links()); ?>


</body>
</html><?php /**PATH C:\xampp\htdocs\TugasWeb-P9-LaravelSetup\resources\views/posts/index.blade.php ENDPATH**/ ?>