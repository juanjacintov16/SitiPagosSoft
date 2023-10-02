
<div class="users form content">
    <h5>Registrar</h5>
</div>
<br>

<?= $this->Form->create($user,["class"=>"needs-validation","id"=>"form-validate","data-parsley-validate"=>"" ] ) ?>
<div class="form-row"> 
            <div class="col-md-6 mb-6">
                <label class="labelForm">Name</label>
                <?php echo $this->Form->control('name',['label'=>false,'type'=>'text','class'=>'form-control','required'=>true] ); ?>
            </div>
            <div class="col-md-6 mb-6">
                <label class="labelForm">Last_Name</label>
                <?php echo $this->Form->control('last_name',['label'=>false,'type'=>'text','class'=>'form-control','required'=>true] ); ?>
            </div>
            <div class="col-md-6 mb-6">
                <label class="labelForm">Email</label>
                <?php echo $this->Form->control('email',['label'=>false,'type'=>'text','class'=>'form-control','required'=>true] ); ?>
            </div>
            <div class="col-md-6 mb-6">
                <label class="labelForm">Password</label>
                <?php echo $this->Form->control('password',['label'=>false,'type'=>'text','class'=>'form-control','required'=>true] ); ?>
            </div>
            <div class="col-md-6 mb-6">
                <label class="labelForm">Profile_Id</label>
                <?php echo $this->Form->control('profile_id', ['label'=>false,'type'=>'select','class'=>'form-control select2','options' => $userProfiles,'empty'=>'Seleccione una Opción','required'=>true,"data-parsley-errors-container"=>"#custom-parsley-errorProfile_Id" ]); ?>
                <span id="custom-parsley-errorProfile_Id"></span>
            </div>
            <div class="col-md-6 mb-6">
                <label class="labelForm">State_Id</label>
                <?php echo $this->Form->control('state_id', ['label'=>false,'type'=>'select','class'=>'form-control select2','options' => $userStates,'empty'=>'Seleccione una Opción','required'=>true,"data-parsley-errors-container"=>"#custom-parsley-errorState_Id" ]); ?>
                <span id="custom-parsley-errorState_Id"></span>
            </div>
               
            <br><br><br><br>
            <div class="pull-right">
                <?= $this->Html->link(__('<i class="ti-angle-left mr-2"></i> Regresar'), ['action' => 'index'], ['class' => 'btn btn-primary btn-uppercase','escape'=>false],['escape'=>false] ) ?>

                <button type="submit" class="btn btn-success btn-uppercase">
                    <i class="ti-check-box mr-2"></i> Guardar
                </button>
            <div>
            
            <?= $this->Form->end() ?>
</div>
