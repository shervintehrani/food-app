<?php $__env->startSection('content'); ?>
    <h3>Your Cart</h3>


    <?php $total = 0; ?>


    
    <?php $__currentLoopData = session('cart', []); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="card mb-2">
            <div class="card-body d-flex justify-content-between">
                <span><?php echo e($item['name']); ?></span>
                <span>$<?php echo e($item['price']); ?></span>
            </div>
        </div>


        <?php $total += $item['price']; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


    <h4>Total: $<?php echo e($total); ?></h4>


    <!-- Checkout form -->
    <form method="POST" action="/checkout">
        <?php echo csrf_field(); ?>
        <button class="btn btn-success">Checkout</button>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Shervin\Desktop\food-app\resources\views/orders/cart.blade.php ENDPATH**/ ?>