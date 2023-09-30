
<div class="accounts form content">
    <h5>Detalle</h5>
</div>
<br>

<?= $this->Form->create($account,["class"=>"needs-validation","id"=>"form-validate","data-parsley-validate"=>"" ] ) ?>
<div class="form-row"> 
            <div class="col-md-6 mb-6"> 
                <label for="labelType_Id" class="labelForm">Type_Id</label>
                <?php echo $this->Form->control('type_id', ['disabled'=>'disabled','label'=>false,'type'=>'select','class'=>'form-control select2','options' => $accountTypes,'empty'=>'Seleccione una Opción','required'=>true,"data-parsley-errors-container"=>"#custom-parsley-errorType_Id" ]); ?>
                <span id="custom-parsley-errorType_Id"></span>
            </div>
            <div class="col-md-6 mb-6">
                <label for="labelBeneficiary" class="labelForm">Beneficiary</label>
                <?php echo $this->Form->control('beneficiary',['disabled'=>'disabled','label'=>false,'type'=>'text','class'=>'form-control','required'=>true] ); ?>
            </div>
            <div class="col-md-6 mb-6">
                <label for="labelAccount_Number" class="labelForm">Account_Number</label>
                <?php echo $this->Form->control('account_number',['disabled'=>'disabled','label'=>false,'type'=>'text','class'=>'form-control','required'=>true] ); ?>
            </div>
            <div class="col-md-6 mb-6">
                <label for="labelType_Register" class="labelForm">Type_Register</label>
                <?php echo $this->Form->control('type_register',['disabled'=>'disabled','label'=>false,'type'=>'text','class'=>'form-control','required'=>true] ); ?>
            </div>
            <div class="col-md-6 mb-6">
                <label for="labelBadge" class="labelForm">Badge</label>
                <?php echo $this->Form->control('badge',['disabled'=>'disabled','label'=>false,'type'=>'text','class'=>'form-control','required'=>true] ); ?>
            </div>
            <div class="col-md-6 mb-6">
                <label for="labelClabe" class="labelForm">Clabe</label>
                <?php echo $this->Form->control('clabe',['disabled'=>'disabled','label'=>false,'type'=>'text','class'=>'form-control','required'=>true] ); ?>
            </div>
            <div class="col-md-6 mb-6">
                <label for="labelPhysical_Person" class="labelForm">Physical_Person</label>
                <?php echo $this->Form->control('physical_person',['disabled'=>'disabled','label'=>false,'type'=>'text','class'=>'form-control','required'=>true] ); ?>
            </div>
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
                <label for="labelBusiness_Name" class="labelForm">Business_Name</label>
                <?php echo $this->Form->control('business_name',['disabled'=>'disabled','label'=>false,'type'=>'text','class'=>'form-control','required'=>true] ); ?>
            </div>
            <div class="col-md-6 mb-6">
                <label for="labelRfc_Curp" class="labelForm">Rfc_Curp</label>
                <?php echo $this->Form->control('rfc_curp',['disabled'=>'disabled','label'=>false,'type'=>'text','class'=>'form-control','required'=>true] ); ?>
            </div>
            <div class="col-md-6 mb-6">
                <label for="labelAlias" class="labelForm">Alias</label>
                <?php echo $this->Form->control('alias',['disabled'=>'disabled','label'=>false,'type'=>'text','class'=>'form-control','required'=>true] ); ?>
            </div>
            <div class="col-md-6 mb-6">
                <label for="labelEmail_Notification" class="labelForm">Email_Notification</label>
                <?php echo $this->Form->control('email_notification',['disabled'=>'disabled','label'=>false,'type'=>'text','class'=>'form-control','required'=>true] ); ?>
            </div>
            <div class="col-md-6 mb-6">
                <label for="labelRelation" class="labelForm">Relation</label>
                <?php echo $this->Form->control('relation',['disabled'=>'disabled','label'=>false,'type'=>'text','class'=>'form-control','required'=>true] ); ?>
            </div>
            <div class="col-md-6 mb-6">
                <label for="labelType_Relation" class="labelForm">Type_Relation</label>
                <?php echo $this->Form->control('type_relation',['disabled'=>'disabled','label'=>false,'type'=>'text','class'=>'form-control','required'=>true] ); ?>
            </div>
            <div class="col-md-6 mb-6">
                <label for="labelLimit_Amount" class="labelForm">Limit_Amount</label>
                <?php echo $this->Form->control('limit_amount',['disabled'=>'disabled','label'=>false,'type'=>'text','class'=>'form-control','required'=>true] ); ?>
            </div>
            <div class="col-md-6 mb-6">
                <label for="labelDestination_Account" class="labelForm">Destination_Account</label>
                <?php echo $this->Form->control('destination_account',['disabled'=>'disabled','label'=>false,'type'=>'text','class'=>'form-control','required'=>true] ); ?>
            </div>
            <div class="col-md-6 mb-6">
                <label for="labelVerified" class="labelForm">Verified</label>
                <?php echo $this->Form->control('verified',['disabled'=>'disabled','label'=>false,'type'=>'text','class'=>'form-control','required'=>true] ); ?>
            </div>
            <div class="col-md-6 mb-6"> 
                <label for="labelState_Id" class="labelForm">State_Id</label>
                <?php echo $this->Form->control('state_id', ['disabled'=>'disabled','label'=>false,'type'=>'select','class'=>'form-control select2','options' => $accountStates,'empty'=>'Seleccione una Opción','required'=>true,"data-parsley-errors-container"=>"#custom-parsley-errorState_Id" ]); ?>
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
