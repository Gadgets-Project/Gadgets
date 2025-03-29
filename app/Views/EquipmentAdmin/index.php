<?= $this->extend("layouts/default") ?>

<?= $this->section("title") ?>Equipment Inventory<?= $this->endSection() ?>

<?= $this->section("content") ?>

<h1>Equipment Inventory</h1>

<!-- Flash Message -->
<?php if (session()->getFlashdata('message')): ?>
    <div class="alert alert-success">
        <?= session()->getFlashdata('message') ?>
    </div>
<?php endif; ?>

<a href="<?= url_to("EquipmentAdmin::new") ?>">New</a>

<?php if (!empty($equipment) && is_array($equipment)): ?>
    <table>
        <thead>
            <tr>
                <th>Equipment ID</th>
                <th>Type</th>
                <th>Brand</th>
                <th>Serial Number</th>
                <th>Model</th>
                <th>Equipment Status</th>
                <th>Equipment Type ID</th>
                <th>Equipment Status ID</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($equipment as $item): ?>
                <tr>
                    <td><a href="<?= site_url('/equipmentadmin/' . $item->id) ?>"><?= esc($item->equipment_id) ?></a></td>
                    <td><?= esc($item->equipment_type) ?></td>
                    <td><?= esc($item->brand) ?></td>
                    <td><?= esc($item->serial_number) ?></td>
                    <td><?= esc($item->model) ?></td>
                    <td><?= esc($item->equipment_status) ?></td>
                    <td><?= esc($item->equipment_type_id) ?></td>
                    <td><?= esc($item->equipment_status_id) ?></td>
                    <td>
                        <a href="<?= site_url('/equipmentadmin/' . $item['equipment_id'] . '/edit') ?>">Edit</a>
                        <a href="<?= site_url('/equipmentadmin/' . $item->equipment_id . '/delete') ?>">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    
<?php else: ?>
    <p>No equipment found.</p>
<?php endif; ?>

<?= $this->endSection() ?>