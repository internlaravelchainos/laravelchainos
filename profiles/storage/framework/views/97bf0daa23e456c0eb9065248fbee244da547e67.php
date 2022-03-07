<?php
$posts = $data['posts'];
// $menu = $data['menu'];
$auth_id = $data['auth_id'];

?>

<?php $__env->startSection('content'); ?>
<div class="container-fluid py-5">

    <div class="card">
        <div class="card-header font-weight-bold">
            Danh sách bài viết
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Tiêu đề bài viết</th>
                        <th scope="col">Tác giả</th>
                        <th scope="col">Thời gian tạo</th>
                        <th scope="col">Tác vụ</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <th scope="row"><?php echo e($key+1); ?></th>
                        <td><?php echo e($post->post_title); ?></td>
                        <td><?php echo e($post->post_author); ?></td>
                        <td><?php echo e($post->created_at); ?></td>
                        <td>
                        
                            <a href="<?php echo e(route('post.edit', $post->id)); ?>" class="btn btn-success btn-sm rounded-0 text-white" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></a>
                            <a href="<?php echo e(route('delete_post', $post->id)); ?>" class="btn btn-danger btn-sm rounded-0 text-white" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></a>
                            <a href="<?php echo e(route('post.show', $post->id)); ?>" class="btn btn-warning btn-sm rounded-0 text-white" type="button" data-toggle="tooltip" data-placement="top" title="Show"><i class="fa fa-eye" aria-hidden="true"></i></a>
                        
                        </td>
                    </tr>
              
                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
            
        </div>
    </div>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\wamp64\www\laravel\profiles\resources\views/post/list.blade.php ENDPATH**/ ?>