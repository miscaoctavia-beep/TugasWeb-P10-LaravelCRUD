<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Post</title>
</head>
<body>

    <h1>Edit Post</h1>

    <form action="<?php echo e(route('posts.update', $post->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>

        <label>Judul</label><br>
        <input type="text" name="title" value="<?php echo e($post->title); ?>"><br><br>

        <label>Isi</label><br>
        <textarea name="content"><?php echo e($post->content); ?></textarea><br><br>

        <label>Penulis</label><br>
        <input type="text" name="author" value="<?php echo e($post->author); ?>"><br><br>

        <button type="submit">Update</button>
    </form>

    <br>

    <a href="<?php echo e(route('posts.index')); ?>">Kembali</a>

</body>
</html><?php /**PATH C:\xampp\htdocs\TugasWeb-P9-LaravelSetup\resources\views/posts/edit.blade.php ENDPATH**/ ?>