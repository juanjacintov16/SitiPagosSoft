<div class="accountTypes index content">
<h4><?= __('Account Types') ?></h4>
    <div class="pull-right">
        <?= $this->Html->link(__('<i class="ti-plus mr-2"></i> Registrar'), ['action' => 'add'], ['class' => 'btn btn-success btn-uppercase','escape'=>false ]) ?>
    </div>
    <br><br><br>
    <div class="table-responsive">
        <table class="table table-striped table-bordered nowrap" id="dataTable">
            <thead class="thead-dark">
                <tr>
                    <th>Id</th>
                    <th>Type</th>
                    <th class="actions"><?= __('Acciones') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($accountTypes as $accountType): ?>
                <tr>
                    <td><?= $this->Number->format($accountType->id) ?></td>
                    <td><?= h($accountType->type) ?></td>
                    <td>                        
                        <?= $this->Html->link(__('<i class="ti-eye mr-2"></i> Detalle'), ['action' => 'view', $accountType->id],['escape'=>false,'class'=>'btn btn-primary btn-uppercase'] ) ?>
                        <?= $this->Html->link(__('<i class="ti-pencil mr-2"></i> Editar'), ['action' => 'edit', $accountType->id],['escape'=>false,'class'=>'btn btn-warning btn-uppercase'] ) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>


