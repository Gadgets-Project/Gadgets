<?= $this->extend("layouts/default") ?>

<?= $this->section("title") ?>Equipment Details<?= $this->endSection() ?>

<?= $this->section("content") ?>

<h1>Equipment Details</h1>

<p><strong>Equipment ID:</strong> <?= esc($equipment->equipment_id) ?></p>
<p><strong>Type:</strong> <?= esc($equipment->equipment_type) ?></p>
<p><strong>Brand:</strong> <?= esc($equipment->brand) ?></p>
<p><strong>Serial Number:</strong> <?= esc($equipment->serial_number) ?></p>
<p><strong>Model:</strong> <?= esc($equipment->model) ?></p>


<?= $this->endSection() ?>