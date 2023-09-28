<div class="accounts index content">
<h4><?= __('Cuentas') ?></h4>
    <div class="pull-right">
        <?= $this->Html->link(__('<i class="ti-plus mr-2"></i> Registrar'), ['action' => 'add'], ['class' => 'btn btn-success waves-effect width-md waves-light','escape'=>false ]) ?>
    </div>
    <br><br><br>
    <div class="table-responsive">
        <table class="table table-striped table-bordered dt-responsive nowrap dataTable no-footer dtr-inline">
            <thead>
                <tr>
                    <th><?= ucwords('id') ?></th>
                    <th><?= ucwords('Tipo') ?></th>
                    <th><?= ucwords('Beneficiario') ?></th>
                    <th><?= ucwords('Número Cuenta') ?></th>
                    <th><?= ucwords('Tipo Registro') ?></th>
                    <th><?= ucwords('Divisa') ?></th>
                    <th><?= ucwords('Clabe') ?></th>
                    <th><?= ucwords('Persona Fisica') ?></th>
                    <th><?= ucwords('Nombre Persona') ?></th>
                    <th><?= ucwords('Apellido Paterno') ?></th>
                    <th><?= ucwords('Apellido Materno') ?></th>
                    <th><?= ucwords('Razón Social') ?></th>
                    <th><?= ucwords('Curp/Rfc') ?></th>
                    <th><?= ucwords('Alias') ?></th>
                    <th><?= ucwords('Correo Notificación') ?></th>
                    <th><?= ucwords('Relación') ?></th>
                    <th><?= ucwords('Tipo Relación') ?></th>
                    <th><?= ucwords('Monto Limite Operación') ?></th>
                    <th><?= ucwords('Cuenta Destino') ?></th>
                    <th><?= ucwords('Verificado') ?></th>
                    <th><?= ucwords('Estado') ?></th>
                    <th class="actions"><?= __('Acciones') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($accounts as $account): ?>
                <tr>
                    <td><?= $this->Number->format($account->id) ?></td>
                    <td><?= $account->hasValue('account_type') ? $this->Html->link($account->account_type->type, ['controller' => 'AccountTypes', 'action' => 'view', $account->account_type->id]) : '' ?></td>
                    <td><?= h($account->beneficiary) ?></td>
                    <td><?= h($account->account_number) ?></td>
                    <td><?= h($account->type_register) ?></td>
                    <td><?= h($account->badge) ?></td>
                    <td><?= h($account->clabe) ?></td>
                    <td><?= $account->physical_person === null ? '' : $this->Number->format($account->physical_person) ?></td>
                    <td><?= h($account->name) ?></td>
                    <td><?= h($account->last_name) ?></td>
                    <td><?= h($account->mothers_last_name) ?></td>
                    <td><?= h($account->business_name) ?></td>
                    <td><?= h($account->rfc_curp) ?></td>
                    <td><?= h($account->alias) ?></td>
                    <td><?= h($account->email_notification) ?></td>
                    <td><?= h($account->relation) ?></td>
                    <td><?= h($account->type_relation) ?></td>
                    <td><?= $account->limit_amount === null ? '' : $this->Number->format($account->limit_amount) ?></td>
                    <td><?= h($account->destination_account) ?></td>
                    <td><?= h($account->verified) ?></td>
                    <td><?= $account->hasValue('account_state') ? $this->Html->link($account->account_state->state, ['controller' => 'AccountStates', 'action' => 'view', $account->account_state->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('<i class="ti-eye mr-2"></i> Detalle'), ['action' => 'view', $account->id],['escape'=>false,'class'=>'btn btn-info'] ) ?>
                        <?= $this->Html->link(__('<i class="ti-pencil mr-2"></i> Editar'), ['action' => 'edit', $account->id],['escape'=>false,'class'=>'btn btn-warning'] ) ?>
                        <?= $this->Form->postLink(__('<i class="ti-trash mr-2"></i> Eliminar'), ['action' => 'delete', $account->id], ['escape'=>false,'class'=>'btn btn-danger','confirm' => __('Estas seguro de eliminar el registro # {0}?', $account->id)] ,['class'=>'btn btn-danger'] ) ?>
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
