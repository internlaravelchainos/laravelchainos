
<?php $__env->startSection('content'); ?>

<div id="content" class="container-fluid">
    <div class="card">
        <div class="card-header font-weight-bold">
            Thêm bài viết
        </div>
        <div class="card-body">
            <form action="<?php echo e(url('post/store')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <div class="form-group">
                    <label for="post_title">Tiêu đề bài viết</label>
                    <input class="form-control" type="text" name="post_title" id="post_title">
                </div>
                <?php $__errorArgs = ['post_title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <small class="text-danger"><?php echo e($message); ?></small>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                <div class="form-group">
                    <label for="post_url">URL</label>
                    <input class="form-control" type="text" name="post_url" id="post_url">
                </div>
                <?php $__errorArgs = ['post_url'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <small class="text-danger"><?php echo e($message); ?></small>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                <div class="form-group">
                    <label for="post_body">Nội dung</label>
                    <textarea name="post_body" id="post_body" cols="10" rows="20" class="form-control"></textarea>

                </div>
                <?php $__errorArgs = ['post_body'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <small class="text-danger"><?php echo e($message); ?></small>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                <!-- <div class="form-group">
                    <label for="post_author">Tác giả</label>
                    <input class="form-control" type="text" name="post_author" id="post_author">
                </div>
                <?php $__errorArgs = ['post_author'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <small class="text-danger"><?php echo e($message); ?></small>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> -->
                <!-- <div class="form-group">
                    <label for="post_create_at">Ngày tạo/chỉnh sửa</label>
                    <input class="form-control" type="text" name="post_create_at" id="post_create_at" disabled>
                </div> -->


                <button type="submit" name="btn_add" value="Đăng bài" class="btn btn-primary">Đăng bài</button>
            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\wamp64\www\laravel\profiles\resources\views/post/add.blade.php ENDPATH**/ ?>