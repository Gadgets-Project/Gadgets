<?= $this->extend("layouts/default") ?>

<?= $this->section("title") ?>Delete Equipment<?= $this->endSection() ?>

<?= $this->section("content") ?>

<h1>Delete Equipment</h1>

<p>Are you sure?</p>

<?= form_open("equipmentadmin/delete/" . $equipment->id) ?>

<input type="hidden" name="_method" value="delete">

<button>Yes</button>

<?= form_close() ?>

<?= $this->endSection() ?>