
<div class="users form content">
    <h5>Detalle</h5>
</div>
<br>

<?= $this->Form->create($user,["class"=>"needs-validation","id"=>"form-validate","data-parsley-validate"=>"" ] ) ?>
<div class="form-row"> 
    <div class="col-md-6 mb-6">
        <label for="labelName" class="labelForm">Name</label>
        <?php echo $this->Form->control('name',['disabled'=>'disabled','label'=>false,'type'=>'text','class'=>'form-control','required'=>true] ); ?>
    </div>
    <div class="col-md-6 mb-6">
        <label for="labelLast_Name" class="labelForm">Last_Name</label>
        <?php echo $this->Form->control('last_name',['disabled'=>'disabled','label'=>false,'type'=>'text','class'=>'form-control','required'=>true] ); ?>
    </div>
    <div class="col-md-6 mb-6">
        <label for="labelMothers_Last_Name" class="labelForm">Mothers_Last_Name</label>
        <?php echo $this->Form->control('mothers_last_name',['disabled'=>'disabled','label'=>false,'type'=>'text','class'=>'form-control','required'=>true] ); ?>
    </div>
    <div class="col-md-6 mb-6">
        <label for="labelEmail" class="labelForm">Email</label>
        <?php echo $this->Form->control('email',['disabled'=>'disabled','label'=>false,'type'=>'text','class'=>'form-control','required'=>true] ); ?>
    </div>
    <div class="col-md-6 mb-6">
        <label for="labelProfile_Id" class="labelForm">Profile_Id</label>
        <?php echo $this->Form->control('profile_id', ['disabled'=>'disabled','label'=>false,'type'=>'select','class'=>'form-control select2','options' => $userProfiles,'empty'=>'Seleccione una Opción','required'=>true,"data-parsley-errors-container"=>"#custom-parsley-errorProfile_Id" ]); ?>
        <span id="custom-parsley-errorProfile_Id"></span>
    </div>
    <div class="col-md-6 mb-6">
        <label for="labelState_Id" class="labelForm">State_Id</label>
        <?php echo $this->Form->control('state_id', ['disabled'=>'disabled','label'=>false,'type'=>'select','class'=>'form-control select2','options' => $userStates,'empty'=>'Seleccione una Opción','required'=>true,"data-parsley-errors-container"=>"#custom-parsley-errorState_Id" ]); ?>
        <span id="custom-parsley-errorState_Id"></span>
    </div>
</div>
<br>
<div class="pull-right">
    <?= $this->Html->link(__('<i class="ti-angle-left mr-2"></i> Regresar'), ['action' => 'index'], ['class' => 'btn btn-primary btn-uppercase','escape'=>false],['escape'=>false] ) ?>

    <button type="submit" class="btn btn-success btn-uppercase">
        <i class="ti-check-box mr-2"></i> Guardar
    </button>
<div>
<?= $this->Form->end() ?>
