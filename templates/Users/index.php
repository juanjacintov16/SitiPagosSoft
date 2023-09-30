<div class="users index content">
<h4><?= __('Users') ?></h4>
    <div class="pull-right">
        <?= $this->Html->link(__('<i class="ti-plus mr-2"></i> Registrar'), ['action' => 'add'], ['class' => 'btn btn-success waves-effect width-md waves-light','escape'=>false ]) ?>
    </div>
    <br><br><br>
    <div class="table-responsive">
        <table class="table table-striped table-bordered nowrap" id="dataTable">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Last_Name</th>
                    <th>Email</th>
                    <th>Created</th>
                    <th>Modified</th>
                    <th>Profile_Id</th>
                    <th>State_Id</th>
                    <th class="actions"><?= __('Acciones') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user): ?>
                <tr>
                    <td><?= $this->Number->format($user->id) ?></td>
                    <td><?= h($user->name) ?></td>
                    <td><?= h($user->last_name) ?></td>
                    <td><?= h($user->email) ?></td>
                    <td><?= h($user->created) ?></td>
                    <td><?= h($user->modified) ?></td>
                    <td><?= $user->hasValue('user_profile') ? $this->Html->link($user->user_profile->profile, ['controller' => 'UserProfiles', 'action' => 'view', $user->user_profile->id]) : '' ?></td>
                    <td><?= $user->hasValue('user_state') ? $this->Html->link($user->user_state->state, ['controller' => 'UserStates', 'action' => 'view', $user->user_state->id]) : '' ?></td>
                    <td>                        
                        <?= $this->Html->link(__('<i class="ti-eye mr-2"></i> Detalle'), ['action' => 'view', $user->id],['escape'=>false,'class'=>'btn btn-primary btn-rounded'] ) ?>
                        <?= $this->Html->link(__('<i class="ti-pencil mr-2"></i> Editar'), ['action' => 'edit', $user->id],['escape'=>false,'class'=>'btn btn-warning btn-rounded'] ) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
