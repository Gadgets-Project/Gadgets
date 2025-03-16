<?= $this->extend("layouts/default") ?>

<?= $this->section("title") ?>Edit Equipment<?= $this->endSection() ?>

<?= $this->section("content") ?>

<h1>Edit Equipment</h1>

<?php if (session()->has("errors")): ?>

    <ul>
        <?php foreach(session("errors") as $error): ?>
            <li><?= $error ?></li>
        <?php endforeach; ?>
    </ul>

<?php endif; ?>

<?= form_open("equipmentadmin/update/" . $equipment->id) ?>

<input type="hidden" name="_method" value="patch">

<?= $this->include("EquipmentAdmin/form") ?>

<?= form_close() ?>

<?= $this->endSection() ?>