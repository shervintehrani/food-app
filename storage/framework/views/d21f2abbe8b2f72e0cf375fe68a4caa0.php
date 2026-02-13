<?php $__env->startSection('content'); ?>
    <div class="row">


        
        <?php $__currentLoopData = $menu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-4">
                <div class="card mb-3 shadow-sm">
                    <div class="card-body">


                        <h5><?php echo e($item['name']); ?></h5>
                        <p>$<?php echo e($item['price']); ?></p>


                        <!-- Add to cart form -->
                        <form method="POST" action="/add">
                            <?php echo csrf_field(); ?>


                            <!-- Hidden inputs to send item data -->
                            <input type="hidden" name="id" value="<?php echo e($item['id']); ?>">
                            <input type="hidden" name="name" value="<?php echo e($item['name']); ?>">
                            <input type="hidden" name="price" value="<?php echo e($item['price']); ?>">


                            <button class="btn btn-primary">Add</button>
                        </form>


                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


    </div>

<?php echo $__env->make('layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Shervin\Desktop\food-app\resources\views/menu/index.blade.php ENDPATH**/ ?>