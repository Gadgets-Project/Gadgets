<?= $this->extend("layouts/default") ?>

<?= $this->section("title") ?>New Equipment<?= $this->endSection() ?>

<?= $this->section("content") ?>

<h1>New Equipment</h1>

<?php if (session()->has("errors")): ?>

    <ul>
        <?php foreach(session("errors") as $error): ?>
            <li><?= $error ?></li>
        <?php endforeach; ?>
    </ul>

<?php endif; ?>

<?= form_open("equipmentadmin") ?>

<?= $this->include("EquipmentAdmin/form") ?>

<?= form_close() ?>

<?= $this->endSection() ?>