<div class="form-row">
    <div class="col-md-6 mb-3">
        <div class="products form content">
            <?= $this->Form->create($product,['class'=>'needs-validation','novalidate'=>'novalidate' ] ) ?>
            <fieldset>
                <h5>Detalle</h5>
                <br>
                <?php
                    echo $this->Form->control('name',['class'=>'form-control','disabled'=>'disabled'] );
                    echo $this->Form->control('type',['class'=>'form-control','disabled'=>'disabled'] );
                    echo $this->Form->control('color',['class'=>'form-control','disabled'=>'disabled'] );
                ?>
            </fieldset>
            <br>

            <?= $this->Html->link(__('<i class="ti-angle-left mr-2"></i> Regresar'), ['action' => 'index'], ['class' => 'btn btn-primary btn-uppercase','escape'=>false],['escape'=>false] ) ?>
            
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
