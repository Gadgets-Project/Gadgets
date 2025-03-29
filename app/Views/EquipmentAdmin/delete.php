<!-- filepath: c:\Users\oadam\gadgets\Gadgets\app\Views\EquipmentAdmin\delete.php -->
<?= $this->extend("layouts/default") ?>

<?= $this->section("title") ?>Delete Equipment<?= $this->endSection() ?>

<?= $this->section("content") ?>

<h1>Delete Equipment</h1>

<p>Are you sure you want to delete the equipment: <strong><?= esc($equipment->equipment_type) ?></strong>?</p>

<?= form_open("equipmentadmin/delete/" . $equipment->equipment_id, ['method' => 'post']) ?>
    <input type="hidden" name="_method" value="delete">
    <button type="submit" class="btn btn-danger">Yes, Delete</button>
    <a href="<?= site_url('equipmentadmin') ?>" class="btn btn-secondary">No, Cancel</a>
<?= form_close() ?>

<?= $this->endSection() ?>







