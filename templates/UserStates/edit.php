<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\UserState $userState
 */
?>
<div class="form-row">
    <div class="col-md-6 mb-3">
        <div class="userStates form content">
            <?= $this->Form->create($userState,['class'=>'needs-validation','novalidate'=>'novalidate' ] ) ?>
            <fieldset>
                <h5>Registrar</h5>
                <br>
                <?php
                    echo $this->Form->control('state',['class'=>'form-control','required'=>true] );
                ?>
            </fieldset>
            <br>

            <?= $this->Html->link(__('<i class="ti-angle-left mr-2"></i> Regresar'), ['action' => 'index'], ['class' => 'btn btn-primary btn-uppercase','escape'=>false],['escape'=>false] ) ?>

            <button type="submit" class="btn btn-success btn-uppercase">
                <i class="ti-check-box mr-2"></i> Guardar
            </button>
            
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
