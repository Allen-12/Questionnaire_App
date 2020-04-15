<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1><?php echo e($questionnaire->title); ?></h1>

            <form action="/surveys/<?php echo e($questionnaire->id); ?>-<?php echo e(Str::slug($questionnaire->title)); ?>" method="POST">
                <?php echo csrf_field(); ?>

                <?php $__currentLoopData = $questionnaire->questions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $question): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php $__errorArgs = ['responses.'. $key .'.answer_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <small class="text-danger"><?php echo e($message); ?></small>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                    <div class="card mt-4">
                        <div class="card-header"><strong><?php echo e($key + 1); ?>.</strong> <?php echo e($question->question); ?></div>

                        <div class="card-body">
                            <ul class="list-group">
                                <?php $__currentLoopData = $question->answers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $answer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                   <label for="answer<?php echo e($answer->id); ?>">
                                       <li class="list-group-item">
                                           <input type="radio" name="responses[<?php echo e($key); ?>][answer_id]" id="answer<?php echo e($answer->id); ?>"
                                                  <?php echo e((old('responses.'. $key .'.answer_id') == $answer->id) ? 'checked': ''); ?>

                                                  class="mr-2" value="<?php echo e($answer->id); ?>">
                                           <?php echo e($answer->answer); ?>

                                           <input type="hidden" name="responses[<?php echo e($key); ?>][question_id]" value="<?php echo e($question->id); ?>">
                                       </li>
                                   </label>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                <div class="card mt-4">
                    <div class="card-header">Your Information</div>

                    <div class="card-body">
                       <div class="form-group">
                            <label for="name">Your Name</label>
                            <input name="survey[name]" type="text" class="form-control" id="name" aria-describedby="nameHelp" placeholder="Enter Your Name">
                            <small id="nameHelp" class="form-text text-muted">Thank You for filling out this survey! Kindly leave us with your name.</small>
                            <?php $__errorArgs = ['name'];
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
                            <label for="email">Your E-mail Address</label>
                            <input name="survey[email]" type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter Your Email">
                            <small id="emailHelp" class="form-text text-muted">Kindly leave us with your E-mail Address.</small>
                            <?php $__errorArgs = ['email'];
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
                    </div>
                </div>

                <div>
                    <button class="btn btn-dark mt-3 mb-3" type="submit">Complete Survey</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\allen\Documents\SCHOOL\ICS\Third Year\questionnaire_app\resources\views/survey/show.blade.php ENDPATH**/ ?>