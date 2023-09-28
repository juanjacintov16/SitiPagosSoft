<div class="form-row">
    <div class="col-md-6 mb-3">
        <div class="users form content">
            <?= $this->Form->create($user,['class'=>'needs-validation','novalidate'=>'novalidate' ] ) ?>
            <fieldset>
                <h5>Detalle</h5>
                <br>
                <?php
                    echo $this->Form->control('name',['required'=>true,'class'=>'form-control','disabled'=>'disabled'] );
                    echo $this->Form->control('last_name',['required'=>true,'class'=>'form-control','disabled'=>'disabled'] );
                    echo $this->Form->control('email',['required'=>true,'class'=>'form-control','disabled'=>'disabled'] );
                    echo $this->Form->control('password',['required'=>true,'class'=>'form-control','disabled'=>'disabled'] );
                    echo $this->Form->control('profile_id',['required'=>true,'class'=>'form-control','disabled'=>'disabled','type'=>'select','options'=>$userProfiles ,'empty'=>'Seleccione una Opción' ] );
                    echo $this->Form->control('state_id',['required'=>true,'class'=>'form-control','disabled'=>'disabled','type'=>'select','options'=>$userStates ,'empty'=>'Seleccione una Opción'] );
                ?>
            </fieldset>
            <br>

            <?= $this->Html->link(__('<i class="ti-angle-left mr-2"></i> Regresar'), ['action' => 'index'], ['class' => 'btn btn-primary btn-uppercase','escape'=>false],['escape'=>false] ) ?>
            
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
