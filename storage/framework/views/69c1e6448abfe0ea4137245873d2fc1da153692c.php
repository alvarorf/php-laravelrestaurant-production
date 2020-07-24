<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header"><?php echo e(__('Product')); ?></div>
                    <img src="<?php echo e(asset('images')); ?>/<?php echo e($food->image); ?>"
                    class="img-responsive" style="width:90%; margin: 2rem auto;">
                <div class="card-body">
                    
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><?php echo e(__('Detail')); ?></div>

                <div class="card-body">
                    <p>
                        <h2><?php echo e($food->name); ?></h2>
                    </p>
                    <p class="lead">
                        <?php echo e($food->description); ?>

                    </p>
                    <p>
                        <h4>$<?php echo e($food->price); ?></h4>
                    </p>

                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/restaurant-laravel-php-app/resources/views/food/detail.blade.php ENDPATH**/ ?>