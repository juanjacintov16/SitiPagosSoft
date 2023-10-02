
<div class="accounts form content">
    <h5>Registrar</h5>
</div>
<br>

<?= $this->Form->create($account,["class"=>"needs-validation","id"=>"form-validate","data-parsley-validate"=>"" ] ) ?>
<div class="form-row"> 
            <div class="col-md-6 mb-6"> 
                <label class="labelForm">Type_Id</label>
                <?php echo $this->Form->control('type_id', ['label'=>false,'type'=>'select','class'=>'form-control select2','options' => $accountTypes,'empty'=>'Seleccione una Opción','required'=>true,"data-parsley-errors-container"=>"#custom-parsley-errorType_Id" ]); ?>
                <span id="custom-parsley-errorType_Id"></span>
            </div>
            <div class="col-md-6 mb-6">
                <label class="labelForm">Beneficiary</label>
                <?php echo $this->Form->control('beneficiary',['label'=>false,'type'=>'text','class'=>'form-control','required'=>true] ); ?>
            </div>
            <div class="col-md-6 mb-6">
                <label class="labelForm">Account_Number</label>
                <?php echo $this->Form->control('account_number',['label'=>false,'type'=>'text','class'=>'form-control','required'=>true] ); ?>
            </div>
            <div class="col-md-6 mb-6">
                <label class="labelForm">Type_Register</label>
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
                <label class="labelForm">Physical_Person</label>
                <?php echo $this->Form->control('physical_person',['label'=>false,'type'=>'text','class'=>'form-control','required'=>true] ); ?>
            </div>
            <div class="col-md-6 mb-6">
                <label class="labelForm">Name</label>
                <?php echo $this->Form->control('name',['label'=>false,'type'=>'text','class'=>'form-control','required'=>true] ); ?>
            </div>
            <div class="col-md-6 mb-6">
                <label class="labelForm">Last_Name</label>
                <?php echo $this->Form->control('last_name',['label'=>false,'type'=>'text','class'=>'form-control','required'=>true] ); ?>
            </div>
            <div class="col-md-6 mb-6">
                <label class="labelForm">Mothers_Last_Name</label>
                <?php echo $this->Form->control('mothers_last_name',['label'=>false,'type'=>'text','class'=>'form-control','required'=>true] ); ?>
            </div>
            <div class="col-md-6 mb-6">
                <label class="labelForm">Business_Name</label>
                <?php echo $this->Form->control('business_name',['label'=>false,'type'=>'text','class'=>'form-control','required'=>true] ); ?>
            </div>
            <div class="col-md-6 mb-6">
                <label class="labelForm">Rfc_Curp</label>
                <?php echo $this->Form->control('rfc_curp',['label'=>false,'type'=>'text','class'=>'form-control','required'=>true] ); ?>
            </div>
            <div class="col-md-6 mb-6">
                <label class="labelForm">Alias</label>
                <?php echo $this->Form->control('alias',['label'=>false,'type'=>'text','class'=>'form-control','required'=>true] ); ?>
            </div>
            <div class="col-md-6 mb-6">
                <label class="labelForm">Email_Notification</label>
                <?php echo $this->Form->control('email_notification',['label'=>false,'type'=>'text','class'=>'form-control','required'=>true] ); ?>
            </div>
            <div class="col-md-6 mb-6">
                <label class="labelForm">Relation</label>
                <?php echo $this->Form->control('relation',['label'=>false,'type'=>'text','class'=>'form-control','required'=>true] ); ?>
            </div>
            <div class="col-md-6 mb-6">
                <label class="labelForm">Type_Relation</label>
                <?php echo $this->Form->control('type_relation',['label'=>false,'type'=>'text','class'=>'form-control','required'=>true] ); ?>
            </div>
            <div class="col-md-6 mb-6">
                <label class="labelForm">Limit_Amount</label>
                <?php echo $this->Form->control('limit_amount',['label'=>false,'type'=>'text','class'=>'form-control','required'=>true] ); ?>
            </div>
            <div class="col-md-6 mb-6">
                <label class="labelForm">Destination_Account</label>
                <?php echo $this->Form->control('destination_account',['label'=>false,'type'=>'text','class'=>'form-control','required'=>true] ); ?>
            </div>
            <div class="col-md-6 mb-6"> 
                <label class="labelForm">Verified_Id</label>
                <?php echo $this->Form->control('verified_id', ['label'=>false,'type'=>'select','class'=>'form-control select2','options' => $accountVerifications,'empty'=>'Seleccione una Opción','required'=>true,"data-parsley-errors-container"=>"#custom-parsley-errorVerified_Id" ]); ?>
                <span id="custom-parsley-errorVerified_Id"></span>
            </div>
            <div class="col-md-6 mb-6"> 
                <label class="labelForm">State_Id</label>
                <?php echo $this->Form->control('state_id', ['label'=>false,'type'=>'select','class'=>'form-control select2','options' => $accountStates,'empty'=>'Seleccione una Opción','required'=>true,"data-parsley-errors-container"=>"#custom-parsley-errorState_Id" ]); ?>
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
