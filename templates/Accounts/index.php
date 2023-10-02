<div class="accounts index content">
<h4><?= __('Accounts') ?></h4>
    <div class="pull-right">
        <?= $this->Html->link(__('<i class="ti-plus mr-2"></i> Registrar'), ['action' => 'add'], ['class' => 'btn btn-success btn-uppercase','escape'=>false ]) ?>
    </div>
    <br><br><br>
    <div class="table-responsive">
        <table class="table table-striped table-bordered nowrap" id="dataTable">
            <thead class="thead-dark">
                <tr>
                    <th>Id</th>
                    <th>Tipo<br>Cuenta</th>
                    <th>Beneficiario</th>
                    <th>Numéro<br>Cuenta</th>
                    <th>Tipo<br>Registro</th>
                    <th>Divisa</th>
                    <th>Clabe</th>
                    <th>Persona<br>Fisica</th>
                    <th>Nombre</th>
                    <th>Apellido<br>Paterno</th>
                    <th>Apellido<br>Materno</th>
                    <th>Razón<br>Social</th>
                    <th>Rfc / Curp</th>
                    <th>Alias</th>
                    <th>Email</th>
                    <th>Relación</th>
                    <th>Tipo<br>Relación</th>
                    <th>Limite</th>
                    <th>Cuenta<br>Destino</th>
                    <th>Verificado<br>por</th>
                    <th>Estatus</th>
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
                    <td><?= h($account->divisa) ?></td>
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
                    <td><?= $account->hasValue('account_verification') ? $this->Html->link($account->account_verification->verification, ['controller' => 'AccountVerifications', 'action' => 'view', $account->account_verification->id]) : '' ?></td>
                    <td><?= $account->hasValue('account_state') ? $this->Html->link($account->account_state->state, ['controller' => 'AccountStates', 'action' => 'view', $account->account_state->id]) : '' ?></td>
                    <td>                        
                        <?= $this->Html->link(__('<i class="ti-eye mr-2"></i> Detalle'), ['action' => 'view', $account->id],['escape'=>false,'class'=>'btn btn-primary btn-uppercase'] ) ?>
                        <?= $this->Html->link(__('<i class="ti-pencil mr-2"></i> Editar'), ['action' => 'edit', $account->id],['escape'=>false,'class'=>'btn btn-warning btn-uppercase'] ) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>


