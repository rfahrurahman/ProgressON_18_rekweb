<?= $this->extend('layout'); ?>
<?= $this->section('content'); ?>
<h1>Barang</h1>
<table class="table">
    <thead>
        <th>Id</th>
        <th>Username</th>
        <th>Created BY</th>
        <th>Created DATE</th>
    </thead>
    <tbody>
        <?php foreach ($data['users'] as $index => $user) : ?>
            <tr>
                <td><?= $user->id; ?></td>
                <td><?= $user->username; ?></td>
                <td><?= $user->created_by; ?></td>
                <td><?= $user->created_date; ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?= $data['pager']->links('default', 'custom_pagination'); ?>
<?= $this->Endsection(); ?>