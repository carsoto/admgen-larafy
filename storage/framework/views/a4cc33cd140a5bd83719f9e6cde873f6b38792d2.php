<div id="modal1" class="modal myModal">
    <div class="modal-content">

        <div class="row">
            <div class="col s12">
                <?php echo Form::open(['route' => 'change-password','role' => 'form', 'class' => 'change-password-form','id' => "change-password-form"]); ?>

                <div class="input-field col s6 center-aling">
                    <?php echo Form::label('old_password',trans('messages.current').' '.trans('messages.password'),[]); ?>

                    <?php echo Form::input('password','old_password','',[]); ?>

                </div>
                
            </div>
            <div class="col s12"> 
                
                <div class="input-field col s6 center-aling">
                    <?php echo Form::label('new_password',trans('messages.new').' '.trans('messages.password'),[]); ?>

                    <?php echo Form::input('password','new_password','',['class'=>'form-control '.(config('config.enable_password_strength_meter') ? 'password-strength' : '')]); ?>

                </div>

                <div class="input-field col s6 center-aling">
                    <?php echo Form::label('new_password_confirmation',trans('messages.confirm').' '.trans('messages.password'),[]); ?>

                    <?php echo Form::input('password','new_password_confirmation','',['class'=>'form-control']); ?>

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

        <p></p>
    </div>
<div class="modal-footer">
     <a href="#" class="btn red waves-effect waves-light right modal-action modal-close"><?php echo e(trans('messages.close')); ?></a>
     
</div>
</div>
