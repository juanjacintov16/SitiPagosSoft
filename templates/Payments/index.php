<div class="payments index content">
<h4><?= __('Payments') ?></h4>
    <div class="pull-right">
        <?= $this->Html->link(__('<i class="ti-plus mr-2"></i> Registrar'), ['action' => 'add'], ['class' => 'btn btn-success btn-uppercase','escape'=>false ]) ?>
    </div>
    <br><br><br>
    <div class="table-responsive">
        <table class="table table-striped table-bordered nowrap" id="dataTable">
            <thead class="thead-dark">
                <tr>
                    <th>Id</th>
                    <th>Account_Id</th>
                    <th>Amount</th>
                    <th>Tax_Iva</th>
                    <th>Description</th>
                    <th>Reference</th>
                    <th>State_Id</th>
                    <th>Charges_Id</th>
                    <th>Created_By</th>
                    <th>Created</th>
                    <th>Approved_By</th>
                    <th>Approved</th>
                    <th>Applied</th>
                    <th class="actions"><?= __('Acciones') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($payments as $payment): ?>
                <tr>
                    <td><?= $this->Number->format($payment->id) ?></td>
                    <td><?= $payment->hasValue('account') ? $this->Html->link($payment->account->name, ['controller' => 'Accounts', 'action' => 'view', $payment->account->id]) : '' ?></td>
                    <td><?= $payment->amount === null ? '' : $this->Number->format($payment->amount) ?></td>
                    <td><?= $payment->tax_iva === null ? '' : $this->Number->format($payment->tax_iva) ?></td>
                    <td><?= h($payment->description) ?></td>
                    <td><?= h($payment->reference) ?></td>
                    <td><?= $payment->hasValue('payment_state') ? $this->Html->link($payment->payment_state->id, ['controller' => 'PaymentStates', 'action' => 'view', $payment->payment_state->id]) : '' ?></td>
                    <td><?= $payment->hasValue('payment_charge') ? $this->Html->link($payment->payment_charge->id, ['controller' => 'PaymentCharges', 'action' => 'view', $payment->payment_charge->id]) : '' ?></td>
                    <td><?= $payment->created_by === null ? '' : $this->Number->format($payment->created_by) ?></td>
                    <td><?= h($payment->created) ?></td>
                    <td><?= $payment->approved_by === null ? '' : $this->Number->format($payment->approved_by) ?></td>
                    <td><?= h($payment->approved) ?></td>
                    <td><?= h($payment->applied) ?></td>
                    <td>                        
                        <?= $this->Html->link(__('<i class="ti-eye mr-2"></i> Detalle'), ['action' => 'view', $payment->id],['escape'=>false,'class'=>'btn btn-primary btn-uppercase'] ) ?>
                        <?= $this->Html->link(__('<i class="ti-pencil mr-2"></i> Editar'), ['action' => 'edit', $payment->id],['escape'=>false,'class'=>'btn btn-warning btn-uppercase'] ) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>


