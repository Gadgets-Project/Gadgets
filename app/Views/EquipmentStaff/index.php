<?= $this->extend("layouts/default") ?>

<?= $this->section("title") ?>Available Equipment<?= $this->endSection() ?>

<?= $this->section("content") ?>

<h1>Available Equipment</h1>



<?php if (!empty($equipment) && is_array($equipment)): ?>
    <table>
        <thead>
            <tr>
                <th>Reserve</th> <!-- New column for reservations -->
                <th>Equipment ID</th>
                <th>Type</th>
                <th>Brand</th>
                <th>Serial Number</th>
                <th>Model</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($equipment as $item): ?>
                <tr>
                    <td>
                        <input type="checkbox" name="reserve[]" value="<?= esc($item->equipment_id) ?>"> <!-- Checkbox for reservation -->
                    </td>
                    <td><?= esc($item->equipment_id) ?></td>
                    <td><?= esc($item->equipment_type) ?></td>
                    <td><?= esc($item->brand) ?></td>
                    <td><?= esc($item->serial_number) ?></td>
                    <td><?= esc($item->model) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php else: ?>
    <p>No equipment found.</p>
<?php endif; ?>

<?= $this->endSection() ?>