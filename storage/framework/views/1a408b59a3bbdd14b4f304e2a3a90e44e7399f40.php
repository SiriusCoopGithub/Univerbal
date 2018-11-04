<?php $__env->startSection('content'); ?>
< <nav class="nav bar nav-inverse nav-fixed-top" id="my-navbar">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="#" class="navbar-brand"><i class="fas fa-hourglass-half"></i></a>
            <a href="#" class="navbar-brand"><i class="far fa-calendar-check"></i></a>
            <a href="#" class="navbar-brand"><i class="fas fa-history"></i></a>
        </div>
    </div>
    </nav>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.head-html', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>