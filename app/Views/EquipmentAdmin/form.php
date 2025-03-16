<label for="equipment_id">Equipment ID</label>
<input type="text" id="equipment_id" name="equipment_id" value="<?= old("equipment_id", esc($equipment->equipment_id ?? '')) ?>">

<label for="equipment_type">Type</label>
<input type="text" id="equipment_type" name="equipment_type" value="<?= old("equipment_type", esc($equipment->equipment_type ?? '')) ?>">

<label for="brand">Brand</label>
<input type="text" id="brand" name="brand" value="<?= old("brand", esc($equipment->brand ?? '')) ?>">

<label for="serial_number">Serial Number</label>
<input type="text" id="serial_number" name="serial_number" value="<?= old("serial_number", esc($equipment->serial_number ?? '')) ?>">

<label for="model">Model</label>
<input type="text" id="model" name="model" value="<?= old("model", esc($equipment->model ?? '')) ?>">

<label for="equipment_type_id">Equipment Type ID</label>
<select id="equipment_type_id" name="equipment_type_id">
    <option value="1 - Laptop" <?= old('equipment_type_id', $equipment->equipment_type_id ?? '') == '1' ? 'selected' : '' ?>>1 - Laptop</option>
    <option value="2 - Projector" <?= old('equipment_type_id', $equipment->equipment_type_id ?? '') == '2' ? 'selected' : '' ?>>2 - Projector</option>
    <option value="3 - Camera" <?= old('equipment_type_id', $equipment->equipment_type_id ?? '') == '3' ? 'selected' : '' ?>>3 - Camera</option>
    <option value="4 - Media Kit" <?= old('equipment_type_id', $equipment->equipment_type_id ?? '') == '4' ? 'selected' : '' ?>>4 - Media Kit</option>
    <option value="5 - Clicker" <?= old('equipment_type_id', $equipment->equipment_type_id ?? '') == '4' ? 'selected' : '' ?>>5 - Clicker</option>
</select>

<label for="equipment_status_id">Equipment Status ID</label>
<select id="equipment_status_id" name="equipment_status_id">
    <option value="1 - Out for repair" <?= old('equipment_status_id', $equipment->equipment_status_id ?? '') == '1' ? 'selected' : '' ?>>1 - Out for repair</option>
    <option value="2 - Operational" <?= old('equipment_status_id', $equipment->equipment_status_id ?? '') == '2' ? 'selected' : '' ?>>2 - Operational</option>
    <option value="3 - Retired" <?= old('equipment_status_id', $equipment->equipment_status_id ?? '') == '3' ? 'selected' : '' ?>>3 - Retired</option>
    <option value="4 - Not Available" <?= old('equipment_status_id', $equipment->equipment_status_id ?? '') == '4' ? 'selected' : '' ?>>4 - Not Available</option>
</select>

<button>Save</button>
