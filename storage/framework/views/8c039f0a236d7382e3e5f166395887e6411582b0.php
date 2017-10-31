<?php $__env->startSection('header'); ?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    .thumbnail img{
        height: 150px;
    }
</style>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>


<div class="container">

<div class="row">


<?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img class="img-responsive" src="<?php echo e($product->image); ?>" alt="...">
      <div class="caption">
        <h3><?php echo e($product->title); ?></h3>
        <p> <?php echo e($product->description); ?> </p>
        <div class="clearfix">
        <div class="pull-left price "> <strong>$<?php echo e($product->price); ?></strong> </div>
        <a href="<?php echo e(url('product') . "/". $product->id); ?>" class="btn btn-success pull-right" role="button">Add to cart</a> 
        </div>
      </div>
    </div>
  </div>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


</div>


    
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>