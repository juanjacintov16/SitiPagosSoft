<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="form-row">
    <div class="col-md-6 mb-3">
        <div class="users form content">
            <?= $this->Form->create($user,['class'=>'needs-validation','novalidate'=>'novalidate' ] ) ?>
            <fieldset>
                <h5>Registrar</h5>
                <br>
                <?php
                    echo $this->Form->control('username',['required'=>true,'class'=>'form-control'] );
                    echo $this->Form->control('email',['required'=>true,'class'=>'form-control'] );
                    echo $this->Form->control('password',['required'=>true,'class'=>'form-control'] );
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
