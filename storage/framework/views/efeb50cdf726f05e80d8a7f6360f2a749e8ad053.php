<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

                    <a href="/questionnaires/create" class="btn btn-dark">Create New Questionnaire</a>
                </div>
            </div>

            <div class="card mt-4">
                <div class="card-header">My Questionnaires</div>

                <div class="card-body">
                    <ul class="list-group">
                        <?php $__currentLoopData = $questionnaires; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $questionnaire): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li class="list-group-item">
                                <a href="<?php echo e($questionnaire->path()); ?>"><?php echo e($questionnaire->title); ?></a>

                                <div class="mt-2">
                                    <small class="font-weight-bold">Share URL</small>
                                    <p>
                                        <a href="<?php echo e($questionnaire->publicPath()); ?>">
                                            <?php echo e($questionnaire->publicPath()); ?>

                                        </a>
                                    </p>
                                </div>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>

                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\allen\Documents\SCHOOL\ICS\Third Year\questionnaire_app\resources\views/home.blade.php ENDPATH**/ ?>