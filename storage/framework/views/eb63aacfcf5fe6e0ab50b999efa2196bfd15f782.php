<?php $__env->startSection('content'); ?>
<form role="form" action="<?php echo URL::to('/login'); ?>" method="post" class="login-form" id="reset-password-form" data-submit="noAjax">

    <?php echo csrf_field(); ?>

    <div class="row">
        <div class="input-field col s12 center">

            <?php if(config('config.logo') && File::exists(config('constant.upload_path.logo').config('config.logo'))): ?>
            <div class="logo text-center">
                <img src="/<?php echo config('constant.upload_path.logo').config('config.logo'); ?>" class="circle responsive-img valign profile-image-login" alt="Logo">
            </div>
            <?php endif; ?>
            <p class="center login-form-text">Material Design Admin Template</p>



        </div>
    </div>
    <div class="row margin">
        <div class="input-field col s12">
            <i class="mdi-social-person-outline prefix"></i>

            <input type="text" name="email" id="email">

            <label for="email" class="center-align"><?php echo trans('messages.email'); ?></label>
        </div>
    </div>
    <div class="row margin">
        <div class="input-field col s12">
            <i class="mdi-action-lock-outline prefix"></i>

            <input type="password" name="password" id="password" >
            <label for="password"><?php echo trans('messages.password'); ?></label>

        </div>
    </div>

    <div class="row">
        <div class="input-field col s12">

            <button type="submit" class="btn waves-effect waves-light light-blue darken-4 col s12"><?php echo trans('messages.login'); ?></button>
        </div>
    </div>


    <?php if(config('config.enable_user_registration')): ?>
    <div class="row">
        <div class="input-field col s6 m6 l6">
            <p class="margin medium-small"> <a href="/register"><?php echo trans('messages.create').' '.trans('messages.account'); ?>?</a></p>
        </div>

        <?php endif; ?>



        <div class="input-field col s6 m6 l6">
            <?php if(config('config.enable_forgot_password')): ?>
            <p class="margin medium-small"><a href="/password/reset"><?php echo trans('messages.forgot').' '.trans('messages.password'); ?>?</a></p>
            <?php endif; ?>
        </div>


    </div>

</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.materialize.login', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>