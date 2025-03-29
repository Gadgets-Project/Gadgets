<?= $this->extend("layouts/default") ?>

<?= $this->section("title") ?>Edit Equipment<?= $this->endSection() ?>

<?= $this->section("content") ?>

<h1>Edit Equipment</h1>

<?= form_open("equipmentadmin/update/" . $equipment->equipment_id, ['method' => 'post']) ?>
    <div>
        <label for="equipment_type">Type</label>
        <input type="text" name="equipment_type" id="equipment_type" value="<?= esc($equipment->equipment_type) ?>" required>
    </div>
    <div>
        <label for="brand">Brand</label>
        <input type="text" name="brand" id="brand" value="<?= esc($equipment->brand) ?>" required>
    </div>
    <div>
        <label for="serial_number">Serial Number</label>
        <input type="text" name="serial_number" id="serial_number" value="<?= esc($equipment->serial_number) ?>" required>
    </div>
    <div>
        <label for="model">Model</label>
        <input type="text" name="model" id="model" value="<?= esc($equipment->model) ?>" required>
    </div>
    <div>
        <label for="equipment_type_id">Equipment Type ID</label>
        <select id="equipment_type_id" name="equipment_type_id">
            <option value="1 - Laptop" <?= old('equipment_type_id', $equipment->equipment_type_id ?? '') == '1' ? 'selected' : '' ?>>1 - Laptop</option>
            <option value="2 - Projector" <?= old('equipment_type_id', $equipment->equipment_type_id ?? '') == '2' ? 'selected' : '' ?>>2 - Projector</option>
            <option value="3 - Camera" <?= old('equipment_type_id', $equipment->equipment_type_id ?? '') == '3' ? 'selected' : '' ?>>3 - Camera</option>
            <option value="4 - Media Kit" <?= old('equipment_type_id', $equipment->equipment_type_id ?? '') == '4' ? 'selected' : '' ?>>4 - Media Kit</option>
            <option value="5 - Clicker" <?= old('equipment_type_id', $equipment->equipment_type_id ?? '') == '4' ? 'selected' : '' ?>>5 - Clicker</option>
        </select>
    </div>
    <div>
        <label for="equipment_status_id">Equipment Status ID</label>
        <select id="equipment_status_id" name="equipment_status_id">
            <option value="1 - Out for repair" <?= old('equipment_status_id', $equipment->equipment_status_id ?? '') == '1' ? 'selected' : '' ?>>1 - Out for repair</option>
            <option value="2 - Operational" <?= old('equipment_status_id', $equipment->equipment_status_id ?? '') == '2' ? 'selected' : '' ?>>2 - Operational</option>
            <option value="3 - Retired" <?= old('equipment_status_id', $equipment->equipment_status_id ?? '') == '3' ? 'selected' : '' ?>>3 - Retired</option>
            <option value="4 - Not Available" <?= old('equipment_status_id', $equipment->equipment_status_id ?? '') == '4' ? 'selected' : '' ?>>4 - Not Available</option>
        </select>
    </div>
    <!-- <div>
        <label for="equipment_status">Status</label>
        <input type="text" name="equipment_status" id="equipment_status" value="<?= esc($equipment->equipment_status) ?>" required>
    </div> -->
    <button type="submit">Save Changes</button>
    <a href="<?= site_url('equipmentadmin') ?>">Cancel</a>
<?= form_close() ?>

<?= $this->endSection() ?>