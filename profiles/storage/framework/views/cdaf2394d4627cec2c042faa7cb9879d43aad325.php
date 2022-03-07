
<?php $__env->startSection('content'); ?>
<div id="content" class="container-fluid">
    <div class="card">
        <div class="card-header font-weight-bold">
            Chỉnh sửa người dùng
        </div>
        <div class="card-body">
            <form action="<?php echo e(route('post.update', $posts->id)); ?>" method="POST">
            <?php echo csrf_field(); ?> 

                <div class="form-group">
                    <label for="post_title">Tiêu đề bài viết</label>
                    <input class="form-control" type="text" value="<?php echo e($posts->post_title); ?>" name="post_title" id="post_title">
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
                </div>
                <div class="form-group">
                    <label for="post_url">URL</label>
                    <input class="form-control" type="text" value="<?php echo e($posts->post_url); ?>" name="post_url" id="post_url">
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
                </div>
                <div class="form-group">
                    <label for="post_body">Nội dung</label>
                    <textarea class="form-control" type="text" value="<?php echo e($posts->post_body); ?>" name="post_body" id="post_body" cols="10" rows="20">dấcxzcasc</textarea>
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
                </div>
                
                <div class="form-group">
                    <label for="post_author">Tác giả</label>
                    <input class="form-control" type="text" value="<?php echo e($posts->post_author); ?>" name="post_author" id="post_author" >
                    <?php $__errorArgs = ['post_author'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <small class="text-danger"><?php echo e($message); ?></small>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="form-group">
                    <label for="post_created_at">Ngày tạo</label>
                    <input class="form-control" type="text" value="<?php echo e($posts->post_created_at); ?>" name="post_created_at" id="post_created_at" disabled>
                    <?php $__errorArgs = ['post_created_at'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <small class="text-danger"><?php echo e($message); ?></small>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                
                <button type="submit" name='btn_edit' class="btn btn-primary">Sửa</button>
            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\wamp64\www\laravel\profiles\resources\views/post/edit.blade.php ENDPATH**/ ?>