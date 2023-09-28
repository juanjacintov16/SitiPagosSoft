<h5>Registrar</h5>

<?= $this->Form->create($account,['class'=>'needs-validation','novalidate'=>'novalidate' ] ) ?>

<div class="form-row">
    <div class="col-md-6 mb-6"> <?php echo $this->Form->control('type_id', ['label'=>'Tipo','class'=>'form-control','options' => $accountTypes,'required'=>true ]);  ?> </div>
    <div class="col-md-6 mb-6"> <?php echo $this->Form->control('beneficiary',['label'=>'Beneficiario','class'=>'form-control','required'=>true] );  ?> </div>
    <div class="col-md-6 mb-6"> <?php echo $this->Form->control('account_number',['label'=>'Número Cuenta','class'=>'form-control','required'=>true] );  ?> </div>
    <div class="col-md-6 mb-6"> <?php echo $this->Form->control('type_register',['label'=>'Tipo Registro','class'=>'form-control','required'=>true] );  ?> </div>
    <div class="col-md-6 mb-6"> <?php echo $this->Form->control('badge',['label'=>'Divisa','class'=>'form-control','required'=>true] );  ?> </div>
    <div class="col-md-6 mb-6"> <?php echo $this->Form->control('clabe',['label'=>'Clabe','class'=>'form-control','required'=>true] );  ?> </div>
    <div class="col-md-6 mb-6"> <?php echo $this->Form->control('physical_person',['label'=>'Persona Fisica','class'=>'form-control','required'=>true,'options' => ['1'=>'Persona Fisica','2'=>'Persona Moral']] );  ?> </div>
    <div class="col-md-6 mb-6"> <?php echo $this->Form->control('name',['label'=>'Nombre Persona','class'=>'form-control','required'=>true] );  ?> </div>
    <div class="col-md-6 mb-6"> <?php echo $this->Form->control('last_name',['label'=>'Apellido Paterno','class'=>'form-control','required'=>true] );  ?> </div>
    <div class="col-md-6 mb-6"> <?php echo $this->Form->control('mothers_last_name',['label'=>'Apellido Materno','class'=>'form-control','required'=>true] );  ?> </div>
    <div class="col-md-6 mb-6"> <?php echo $this->Form->control('business_name',['label'=>'Razón Social','class'=>'form-control','required'=>true] );  ?> </div>
    <div class="col-md-6 mb-6"> <?php echo $this->Form->control('rfc_curp',['label'=>'Curp/Rfc','class'=>'form-control','required'=>true] );  ?> </div>
    <div class="col-md-6 mb-6"> <?php echo $this->Form->control('alias',['label'=>'Alas','class'=>'form-control','required'=>true] );  ?> </div>
    <div class="col-md-6 mb-6"> <?php echo $this->Form->control('email_notification',['label'=>'Correo Notificación','class'=>'form-control','required'=>true,'type'=>'email'] );  ?> </div>
    <div class="col-md-6 mb-6"> <?php echo $this->Form->control('relation',['label'=>'Relación','class'=>'form-control','required'=>true] );  ?> </div>
    <div class="col-md-6 mb-6"> <?php echo $this->Form->control('type_relation',['label'=>'Tipo Relación','class'=>'form-control','required'=>true] );  ?> </div>
    <div class="col-md-6 mb-6"> <?php echo $this->Form->control('limit_amount',['label'=>'Monto Limite Operación','class'=>'form-control','required'=>true] );  ?> </div>
    <div class="col-md-6 mb-6"> <?php echo $this->Form->control('destination_account',['label'=>'Cuenta Destino','class'=>'form-control','required'=>true] );  ?> </div>
    <div class="col-md-6 mb-6"> <?php echo $this->Form->control('verified',['label'=>'Verificado','class'=>'form-control','required'=>true ,'options' => ['1'=>'Verificado','2'=>'Sin Verificar']  ] );  ?> </div>
    <div class="col-md-6 mb-6"> <?php echo $this->Form->control('state_id', ['label'=>'Estado','class'=>'form-control','options' => $accountStates,'empty'=>'Seleccione una Opción','required'=>true ]);  ?> </div>
</div>

<br><br>

<div class="pull-right">
    <?= $this->Html->link(__('<i class="ti-angle-left mr-2"></i> Regresar'), ['action' => 'index'], ['class' => 'btn btn-primary btn-uppercase','escape'=>false],['escape'=>false] ) ?>
    <button type="submit" class="btn btn-success btn-uppercase">
        <i class="ti-check-box mr-2"></i> Guardar
    </button>
</div>
        
<?= $this->Form->end() ?>

