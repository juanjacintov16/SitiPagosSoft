
<div class="userStates form content">
    <h5><?= __('Registrar Estatus ') ?></h5>
</div>
<br>

<?= $this->Form->create($userState,["class"=>"needs-validation","id"=>"form-validate","data-parsley-validate"=>"" ] ) ?>
<div class="form-row"> 
    <div class="col-md-12 mb-12">
        <label class="labelForm">Estado</label>
        <?php echo $this->Form->control('state',['label'=>false,'type'=>'text','class'=>'form-control','required'=>true] ); ?>
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