<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create New Question</div>

                <div class="card-body">
                   <form action="/questionnaires/<?php echo e($questionnaire->id); ?>/questions" method="POST">
                       <?php echo csrf_field(); ?>

                       <div class="form-group">
                        <label for="question">Question</label>
                        <input name="question[question]" type="text" class="form-control"
                               value="<?php echo e(old('question.question')); ?>"
                               id="question" aria-describedby="questionHelp" placeholder="Enter Question">
                        <small id="questionHelp" class="form-text text-muted">Ask Simple Questions</small>

                        <?php $__errorArgs = ['question.question'];
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
                          <fieldset>
                              <legend>Choices</legend>
                              <small id="choicesHelp" class="form-text text-muted">Give choices that give you the most insight into your question</small>

                              <div>
                                  <div class="form-group">
                                      <label for="answer1">Choice 1</label>
                                      <input name="answers[][answer]" type="text" class="form-control"
                                             value="<?php echo e(old('answers.0.answer')); ?>"
                                             id="answer1" aria-describedby="choicesHelp" placeholder="Enter Choice 1">

                                      <?php $__errorArgs = ['answers.0.answer'];
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

                              <div>
                                  <div class="form-group">
                                      <label for="answer2">Choice 2</label>
                                      <input name="answers[][answer]" type="text" class="form-control"
                                             value="<?php echo e(old('answers.1.answer')); ?>"
                                             id="answer2" aria-describedby="choicesHelp" placeholder="Enter Choice 2">

                                      <?php $__errorArgs = ['answers.1.answer'];
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

                              <div>
                                  <div class="form-group">
                                      <label for="answer3">Choice 3</label>
                                      <input name="answers[][answer]" type="text" class="form-control"
                                             value="<?php echo e(old('answers.2.answer')); ?>"
                                             id="answer3" aria-describedby="choicesHelp" placeholder="Enter Choice 3">

                                      <?php $__errorArgs = ['answers.2.answer'];
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

                              <div>
                                  <div class="form-group">
                                      <label for="answer4">Choice 4</label>
                                      <input name="answers[][answer]" type="text" class="form-control"
                                             value="<?php echo e(old('answers.3.answer')); ?>"
                                             id="answer4" aria-describedby="choicesHelp" placeholder="Enter Choice 4">

                                      <?php $__errorArgs = ['answers.3.answer'];
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
                          </fieldset>
                      </div>
                      <button type="submit" class="btn btn-primary">Add Question</button>
                   </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\allen\Documents\SCHOOL\ICS\Third Year\questionnaire_app\resources\views/question/create.blade.php ENDPATH**/ ?>