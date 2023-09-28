<div class="userProfiles index content">
<h4><?= __('User Profiles') ?></h4>
    <div class="pull-right">
        <?= $this->Html->link(__('<i class="ti-plus mr-2"></i> Registrar'), ['action' => 'add'], ['class' => 'btn btn-success waves-effect width-md waves-light','escape'=>false ]) ?>
    </div>
    <br><br><br>
    <div class="table-responsive">
        <table class="table table-striped table-bordered dt-responsive nowrap dataTable no-footer dtr-inline">
            <thead>
                <tr>
                    <th><?= ucwords('id') ?></th>
                    <th><?= ucwords('profile') ?></th>
                    <th class="actions"><?= __('Acciones') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($userProfiles as $userProfile): ?>
                <tr>
                    <td><?= $this->Number->format($userProfile->id) ?></td>
                    <td><?= h($userProfile->profile) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('<i class="ti-eye mr-2"></i> Detalle'), ['action' => 'view', $userProfile->id],['escape'=>false,'class'=>'btn btn-info'] ) ?>
                        <?= $this->Html->link(__('<i class="ti-pencil mr-2"></i> Editar'), ['action' => 'edit', $userProfile->id],['escape'=>false,'class'=>'btn btn-warning'] ) ?>
                        <?= $this->Form->postLink(__('<i class="ti-trash mr-2"></i> Eliminar'), ['action' => 'delete', $userProfile->id], ['escape'=>false,'class'=>'btn btn-danger','confirm' => __('Estas seguro de eliminar el registro # {0}?', $userProfile->id)] ,['class'=>'btn btn-danger'] ) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('primera'),["class"=>"btn btn-primary"] ) ?>
            <?= $this->Paginator->prev('< ' . __('anterior') ,["class"=>"btn btn-primary"] ) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('siguiente') . ' >') ?>
            <?= $this->Paginator->last(__('ultima') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Pagina {{page}}  de  {{paginas}}, mostrando {{current}} registros(s) de {{count}} total')) ?></p>
    </div>
</div>
