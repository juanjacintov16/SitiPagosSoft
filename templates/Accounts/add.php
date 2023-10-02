
<div class="accounts form content">
    <h5><?= __('Registrar Cuenta') ?></h5>
</div>
<br>

<?= $this->Form->create($account,["class"=>"needs-validation","id"=>"form-validate","data-parsley-validate"=>"" ] ) ?>
<div class="form-row"> 
    <div class="col-md-6 mb-6"> 
        <label class="labelForm">Tipo Cuenta</label>
        <?php echo $this->Form->control('type_id', ['label'=>false,'type'=>'select','class'=>'form-control select2','options' => $accountTypes,'empty'=>'Seleccione una Opción','required'=>true,"data-parsley-errors-container"=>"#custom-parsley-errorType_Id" ]); ?>
        <span id="custom-parsley-errorType_Id"></span>
    </div>
    <div class="col-md-6 mb-6">
        <label class="labelForm">Beneficiario</label>
        <?php echo $this->Form->control('beneficiary',['label'=>false,'type'=>'text','class'=>'form-control','required'=>true] ); ?>
    </div>
    <div class="col-md-6 mb-6">
        <label class="labelForm">Número Cuenta</label>
        <?php echo $this->Form->control('account_number',['label'=>false,'type'=>'text','class'=>'form-control','required'=>true] ); ?>
    </div>
    <div class="col-md-6 mb-6">
        <label class="labelForm">Tipo Registro</label>
        <?php echo $this->Form->control('type_register',['label'=>false,'type'=>'text','class'=>'form-control','required'=>true] ); ?>
    </div>
    <div class="col-md-6 mb-6">
        <label class="labelForm">Divisa</label>
        <?php echo $this->Form->control('divisa',['label'=>false,'type'=>'text','class'=>'form-control','required'=>true] ); ?>
    </div>
    <div class="col-md-6 mb-6">
        <label class="labelForm">Clabe</label>
        <?php echo $this->Form->control('clabe',['label'=>false,'type'=>'text','class'=>'form-control','required'=>true] ); ?>
    </div>
    <div class="col-md-6 mb-6">
        <label class="labelForm">Persona Fisica</label>
        <?php echo $this->Form->control('physical_person',['label'=>false,'type'=>'text','class'=>'form-control','required'=>true] ); ?>
    </div>
    <div class="col-md-6 mb-6">
        <label class="labelForm">Nombre</label>
        <?php echo $this->Form->control('name',['label'=>false,'type'=>'text','class'=>'form-control','required'=>true] ); ?>
    </div>
    <div class="col-md-6 mb-6">
        <label class="labelForm">Apellido Paterno</label>
        <?php echo $this->Form->control('last_name',['label'=>false,'type'=>'text','class'=>'form-control','required'=>true] ); ?>
    </div>
    <div class="col-md-6 mb-6">
        <label class="labelForm">Apellido Materno</label>
        <?php echo $this->Form->control('mothers_last_name',['label'=>false,'type'=>'text','class'=>'form-control','required'=>true] ); ?>
    </div>
    <div class="col-md-6 mb-6">
        <label class="labelForm">Razón Social</label>
        <?php echo $this->Form->control('business_name',['label'=>false,'type'=>'text','class'=>'form-control','required'=>true] ); ?>
    </div>
    <div class="col-md-6 mb-6">
        <label class="labelForm">Rfc / Curp</label>
        <?php echo $this->Form->control('rfc_curp',['label'=>false,'type'=>'text','class'=>'form-control','required'=>true] ); ?>
    </div>
    <div class="col-md-6 mb-6">
        <label class="labelForm">Alias</label>
        <?php echo $this->Form->control('alias',['label'=>false,'type'=>'text','class'=>'form-control','required'=>true] ); ?>
    </div>
    <div class="col-md-6 mb-6">
        <label class="labelForm">Email</label>
        <?php echo $this->Form->control('email_notification',['label'=>false,'type'=>'text','class'=>'form-control','required'=>true] ); ?>
    </div>
    <div class="col-md-6 mb-6">
        <label class="labelForm">Relación</label>
        <?php echo $this->Form->control('relation',['label'=>false,'type'=>'text','class'=>'form-control','required'=>true] ); ?>
    </div>
    <div class="col-md-6 mb-6">
        <label class="labelForm">Tipo Relación</label>
        <?php echo $this->Form->control('type_relation',['label'=>false,'type'=>'text','class'=>'form-control','required'=>true] ); ?>
    </div>
    <div class="col-md-6 mb-6">
        <label class="labelForm">Limite Transferencia</label>
        <?php echo $this->Form->control('limit_amount',['label'=>false,'type'=>'text','class'=>'form-control','required'=>true] ); ?>
    </div>
    <div class="col-md-6 mb-6">
        <label class="labelForm">Cuenta Destino</label>
        <?php echo $this->Form->control('destination_account',['label'=>false,'type'=>'text','class'=>'form-control','required'=>true] ); ?>
    </div>
    <div class="col-md-6 mb-6"> 
        <label class="labelForm">Verificado por</label>
        <?php echo $this->Form->control('verified_id', ['label'=>false,'type'=>'select','class'=>'form-control select2','options' => $accountVerifications,'empty'=>'Seleccione una Opción','required'=>true,"data-parsley-errors-container"=>"#custom-parsley-errorVerified_Id" ]); ?>
        <span id="custom-parsley-errorVerified_Id"></span>
    </div>
    <div class="col-md-6 mb-6"> 
        <label class="labelForm">Estado Id</label>
        <?php echo $this->Form->control('state_id', ['label'=>false,'type'=>'select','class'=>'form-control select2','options' => $accountStates,'empty'=>'Seleccione una Opción','required'=>true,"data-parsley-errors-container"=>"#custom-parsley-errorState_Id" ]); ?>
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