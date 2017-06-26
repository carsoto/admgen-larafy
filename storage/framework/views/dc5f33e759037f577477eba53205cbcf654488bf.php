<div class="row">
    <div class="col s12 m12 l12">
        <div class="card-panel">
            <h4 class="header2"><?php echo e(trans('messages.authentication')); ?></h4>                   
            <?php echo Form::open(['route' => 'configuration.store','role' => 'form', 'class'=>'config-auth-form','id' => 'config-auth-form','data-no-form-clear' => 1]); ?>


            <div class="row">
                <div class="col-md-4">
                    <div class="input-field col s6">
                        <?php echo Form::input('text','session_lifetime',(config('config.session_lifetime')) ? : '',[]); ?>

                        <?php echo Form::label('session_lifetime',trans('messages.session').' '.trans('messages.lifetime').' (In Min)',[]); ?>

                    </div>
                    <div class="input-field col s6">
                        <?php echo Form::input('text','reset_token_lifetime',(config('config.reset_token_lifetime')) ? : '',[]); ?>

                        <?php echo Form::label('reset_token_lifetime',trans('messages.reset').' '.trans('messages.token').' '.trans('messages.lifetime').' (In Min)',[]); ?>


                    </div>
                    <div class="input-field col s6">

                        <p>
                            <input name="enable_two_factor_auth" type="checkbox" class="checkbox-input enable-show-hide filled-in " id="enable_two_factor_auth" value="1" <?php echo e((config('config.enable_two_factor_auth') == 1) ? 'checked' : ''); ?> data-off-value="0">
                            <?php echo Form::label('enable_two_factor_auth',trans('messages.message').' Two Factor Auth',[]); ?>

                        </p>
                    </div>
                    <div id="enable_two_factor_auth_field">
                        <div class="input-field col s6">


                            <div class="input-field col s3">
                                <?php echo Form::select('two_factor_auth_type', [
                                '1'=>'Email',
                                '0'=>'SMS'
                                ],(config('config.two_factor_auth_type')) ? : '',[]); ?>

                                <?php echo Form::label('two_factor_auth_type','Two Factor Auth Type',[]); ?>

                            </div>


                        </div>
                    </div>
                    <div class="input-field col s6">

                        <p>
                            <input name="enable_lock_screen" type="checkbox" class="checkbox-input enable-show-hide filled-in " id="enable_lock_screen" value="1" <?php echo e((config('config.enable_lock_screen') == 1) ? 'checked' : ''); ?> data-off-value="0">
                            <?php echo Form::label('enable_lock_screen',trans('messages.enable').' '.trans('messages.lock_screen'),[]); ?>


                        </p>
                        <br>
                        <div id="enable_lock_screen_field">
                            <div class="input-field col s3">
                                <?php echo Form::input('text','lock_screen_timeout',(config('config.lock_screen_timeout')) ? : '',[]); ?>

                                <?php echo Form::label('lock_screen_timeout',trans('messages.lock_screen').' '.trans('messages.timeout').' (In Min)',[]); ?>

                            </div>
                        </div>
                    </div>

                    <div class="input-field col s6">
                        
                        <p>
                            <input name="enable_throttle" type="checkbox" class="checkbox-input enable-show-hide filled-in " id="enable_throttle" value="1" <?php echo e((config('config.enable_throttle') == 1) ? 'checked' : ''); ?> data-off-value="0">
                            <?php echo Form::label('enable_throttle',trans('messages.enable').' Throttle',[]); ?>

                        </p>

                    </div>
                    <div id="enable_throttle_field">
                        <div class="input-field col s3">
                            <?php echo Form::input('text','throttle_attempt',(config('config.throttle_attempt')) ? : '',[]); ?>

                            <?php echo Form::label('throttle_attempt','Throttle Attempt',[]); ?>

                        </div>
                        <div class="input-field col s3">
                            <?php echo Form::input('text','throttle_lockout_period',(config('config.throttle_lockout_period')) ? : '',[]); ?>

                            <?php echo Form::label('throttle_lockout_period','Throttle Lockout Period (In Min)',[]); ?>

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="input-field col s6">


                        <p>
                            <input name="login" type="checkbox" class="checkbox-input enable-show-hide filled-in " id="login" value="1" <?php echo e((config('config.login') == 1) ? 'checked' : ''); ?> data-off-value="0">
                            <?php echo Form::label('login',trans('messages.login').' '.trans('messages.with'),[]); ?>

                        </p>
                    </div>
                    <div class="input-field col s6">

                        <p>
                            <input name="enable_user_registration" type="checkbox" class="checkbox-input  filled-in " id="enable_user_registration" value="1" <?php echo e((config('config.enable_user_registration') == 1) ? 'checked' : ''); ?> data-off-value="0">
                            <?php echo Form::label('enable_user_registration',trans('messages.enable').' '.trans('messages.user').' '.trans('messages.registration'),[]); ?>


                        </p> 

                    </div>
                    <div class="input-field col s6">

                        <p>
                            <input name="enable_password_strength_meter" type="checkbox" class="checkbox-input  filled-in " id="enable_password_strength_meter" value="1" <?php echo e((config('config.enable_password_strength_meter') == 1) ? 'checked' : ''); ?> data-off-value="0">
                            <?php echo Form::label('enable_password_strength_meter',trans('messages.enable').' '.trans('messages.password_strength_meter'),[]); ?>


                        </p>
                    </div>
                    <div class="input-field col s6">
                        <p>
                            <input name="enable_email_verification" type="checkbox" class="checkbox-input  filled-in " id="enable_email_verification" value="1" <?php echo e((config('config.enable_email_verification') == 1) ? 'checked' : ''); ?> data-off-value="0">
                            <?php echo Form::label('enable_email_verification',trans('messages.enable').' '.trans('messages.email').' '.trans('messages.verification'),[]); ?>


                        </p>



                    </div>
                    <div class="input-field col s6">

                        <p>
                            <input name="enable_admin_approval" type="checkbox" class="checkbox-input  filled-in " id="enable_admin_approval" value="1" <?php echo e((config('config.enable_admin_approval') == 1) ? 'checked' : ''); ?> data-off-value="0">
                            <?php echo Form::label('enable_admin_approval',trans('messages.enable').' '.trans('messages.admin').' '.trans('messages.approval'),[]); ?>


                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="input-field col s6">


                        <p>
                            <input name="enable_tnc" type="checkbox" class="checkbox-input  filled-in " id="enable_tnc" value="1" <?php echo e((config('config.enable_tnc') == 1) ? 'checked' : ''); ?> data-off-value="0">
                            <?php echo Form::label('enable_tnc',trans('messages.enable').' '.trans('messages.tnc'),[]); ?>


                        </p>

                    </div>
                    <div class="input-field col s6">

                        <p>
                            <input name="enable_remember_me" type="checkbox" class="checkbox-input  filled-in " id="enable_remember_me" value="1" <?php echo e((config('config.allow_remember_me') == 1) ? 'checked' : ''); ?> data-off-value="0">
                            <?php echo Form::label('enable_remember_me',trans('messages.enable').' '.trans('messages.remember_me'),[]); ?>


                        </p>

                    </div>
                    <div class="input-field col s6">
                        <p>
                            <input name="enable_forgot_password" type="checkbox" class="checkbox-input  filled-in " id="enable_forgot_password" value="1" <?php echo e((config('config.enable_forgot_password') == 1) ? 'checked' : ''); ?> data-off-value="0">
                            <?php echo Form::label('enable_forgot_password',trans('messages.enable').' '.trans('messages.forgot').' '.trans('messages.password'),[]); ?>

                        </p>
                    </div>
                    <div class="input-field col s6">
                        <p>
                            <input name="session_expire_browser_close" type="checkbox" class="checkbox-input  filled-in " id="session_expire_browser_close" value="1" <?php echo e((config('config.session_expire_browser_close') == 1) ? 'checked' : ''); ?> data-off-value="0">
                            <?php echo Form::label('session_expire_browser_close','Session Expire on Browser Close',[]); ?>

                        </p>
                    </div>
                    <div class="input-field col s6">
                        <p>
                            <input name="enable_recaptcha" type="checkbox" class="checkbox-input  filled-in enable-show-hide" id="enable_recaptcha" value="1" <?php echo e((config('config.enable_recaptcha') == 1) ? 'checked' : ''); ?> data-off-value="0">
                            <?php echo Form::label('enable_recaptcha',trans('messages.enable').' Recaptcha',[]); ?>

                        </p>

                    </div>
                    <div id="enable_recaptcha_field">
                        <div class="input-field col s3">
                            <?php echo Form::input('text','recaptcha_key',(config('config.recaptcha_key')) ? config('config.hidden_value') : '',[]); ?>

                            <?php echo Form::label('recaptcha_key','Recaptcha Key',[]); ?>

                        </div>
                        <div class="input-field col s3">
                            <?php echo Form::input('text','recaptcha_secret',(config('config.recaptcha_secret')) ? config('config.hidden_value') : '',[]); ?>

                            <?php echo Form::label('recaptcha_secret','Recaptcha Secret',[]); ?>

                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <button class="btn waves-effect waves-light light-blue darken-4 right" type="submit" name="action"><?php echo e(isset($buttonText) ? $buttonText : trans('messages.save')); ?>

                        
                    </button>
                </div>
            </div>

            <?php echo Form::close(); ?>


        </div>
    </div>
</div>