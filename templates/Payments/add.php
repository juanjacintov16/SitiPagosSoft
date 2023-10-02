
<div class="payments form content">
    <h5>Registrar</h5>
</div>
<br>

<?= $this->Form->create($payment,["class"=>"needs-validation","id"=>"form-validate","data-parsley-validate"=>"" ] ) ?>
<div class="form-row"> 
            <div class="col-md-6 mb-6">
                <label class="labelForm">Account_Id</label>
                <?php echo $this->Form->control('account_id', ['label'=>false,'type'=>'select','class'=>'form-control select2','options' => $accounts,'empty'=>'Seleccione una Opción','required'=>true,"data-parsley-errors-container"=>"#custom-parsley-errorAccount_Id" ]); ?>
                <span id="custom-parsley-errorAccount_Id"></span>
            </div>
            <div class="col-md-6 mb-6">
                <label class="labelForm">Amount</label>
                <?php echo $this->Form->control('amount',['label'=>false,'type'=>'text','class'=>'form-control','required'=>true] ); ?>
            </div>
            <div class="col-md-6 mb-6">
                <label class="labelForm">Tax_Iva</label>
                <?php echo $this->Form->control('tax_iva',['label'=>false,'type'=>'text','class'=>'form-control','required'=>true] ); ?>
            </div>
            <div class="col-md-6 mb-6">
                <label class="labelForm">Description</label>
                <?php echo $this->Form->control('description',['label'=>false,'type'=>'text','class'=>'form-control','required'=>true] ); ?>
            </div>
            <div class="col-md-6 mb-6">
                <label class="labelForm">Reference</label>
                <?php echo $this->Form->control('reference',['label'=>false,'type'=>'text','class'=>'form-control','required'=>true] ); ?>
            </div>
            <div class="col-md-6 mb-6"> 
                <label class="labelForm">State_Id</label>
                <?php echo $this->Form->control('state_id', ['label'=>false,'type'=>'select','class'=>'form-control select2','options' => $paymentStates,'empty'=>'Seleccione una Opción','required'=>true,"data-parsley-errors-container"=>"#custom-parsley-errorState_Id" ]); ?>
                <span id="custom-parsley-errorState_Id"></span>
            </div>
            <div class="col-md-6 mb-6"> 
                <label class="labelForm">Charges_Id</label>
                <?php echo $this->Form->control('charges_id', ['label'=>false,'type'=>'select','class'=>'form-control select2','options' => $paymentCharges,'empty'=>'Seleccione una Opción','required'=>true,"data-parsley-errors-container"=>"#custom-parsley-errorCharges_Id" ]); ?>
                <span id="custom-parsley-errorCharges_Id"></span>
            </div>
            <div class="col-md-6 mb-6">
                <label class="labelForm">Created_By</label>
                <?php echo $this->Form->control('created_by',['label'=>false,'type'=>'text','class'=>'form-control','required'=>true] ); ?>
            </div>
            <div class="col-md-6 mb-6">
                <label class="labelForm">Approved_By</label>
                <?php echo $this->Form->control('approved_by',['label'=>false,'type'=>'text','class'=>'form-control','required'=>true] ); ?>
            </div>
            <div class="col-md-6 mb-6">
                <label class="labelForm">Approved</label>
                <?php echo $this->Form->control('approved', ['label'=>false,'type'=>'text','class'=>'form-control','required'=>true]); ?>
            </div>
            <div class="col-md-6 mb-6">
                <label class="labelForm">Applied</label>
                <?php echo $this->Form->control('applied', ['label'=>false,'type'=>'text','class'=>'form-control','required'=>true]); ?>
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
