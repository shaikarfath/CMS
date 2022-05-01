<?php

require "../include/config.php";
session_start();
$job_nature = "";
$title = isset($_POST['title']) && !empty(trim($_POST['title'])) ? $_POST['title'] : '';
$sort_by = isset($_POST['sort_by']) && !empty(trim($_POST['sort_by'])) ? $_POST['sort_by'] : '';
$checkboxes = isset($_POST['checkbox']) && count($_POST['checkbox']) > 0 ? $_POST['checkbox'] : '';

if (!empty($sort_by)) {
    $sort_by = "ORDER BY $sort_by";
}
if ($checkboxes != '') {
    foreach ($checkboxes as $checkbox) {
        $job_nature .= " job_nature='$checkbox' OR";
    }
    $job_nature = preg_replace('/OR$/', '', $job_nature);
}
$where = "";
if (!empty($sort_by) || !empty($checkboxes) || !empty($title)) {
    $where = "WHERE";
}
$search_title = "title LIKE '%$title%' AND " . $job_nature;
$search_title = preg_replace('/AND$/', '', $search_title);
$q = "SELECT * FROM `jobs` $where $search_title $sort_by";
$result = $db->select($q);
foreach ($result as $row) {
    ?>
    <!-- single-job-content -->
    <div class="single-job-items mb-30">
        <div class="job-items">
            <div class="company-img">
                <a href="<?= $row->link ?>" target="_blank">
                    <img src="<?= $row->company_logo ?>" alt=""></a>
            </div>
            <div class="job-tittle job-tittle2">
                <a href="<?= $row->link ?>" target="_blank">
                    <h4><?= $row->title ?></h4>
                </a>
                <ul>
                    <li><?= $row->company_name ?></li>
                    <li><i class="fas fa-map-marker-alt"></i>
                        <?= $row->location ?></li>
                    <li><?= $row->salary ?></li>
                </ul>
                <p><?= $row->description ?></p>
            </div>
        </div>
        <div class="items-link items-link2 f-right">
            <a href="<?= $row->link ?>" target="_blank"><?= $row->job_nature ?></a>
            <span><?= $row->posted_date ?></span>
        </div>
    </div>

    <?php
} ?>
