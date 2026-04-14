<?php
require('inc/essentials.php');
require('inc/db_config.php');
adminLogin();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Settings</title>
    <?php require('inc/links.php'); ?>
</head>

<body class="bg-light">

<?php require('inc/header.php'); ?>

<div class="container-fluid" id="main-content">
    <div class="row">
        <div class="col-lg-10 ms-auto p-4 overflow-hidden">
            <h3 class="mb-4">SETTINGS</h3>

            <!-- General Settings -->
            <div class="card border-0 shadow-sm m-4">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between">
                        <h5 class="card-title m-0">General Settings</h5>
                        <button type="button" class="btn btn-dark btn-sm me-3"
                            data-bs-toggle="modal" data-bs-target="#general-s">
                            <i class="bi bi-pencil-square"></i> Edit
                        </button>
                    </div>

                    <h6 class="fw-bold mt-3">Site Title</h6>
                    <p id="site_title"></p>

                    <h6 class="fw-bold mt-3">About Us</h6>
                    <p id="site_about"></p>

                    <!-- Modal -->
                    <div class="modal fade" id="general-s" tabindex="-1">
                        <div class="modal-dialog">
                            <form>
                                <div class="modal-content">

                                    <div class="modal-header">
                                        <h5 class="modal-title">General Settings</h5>
                                    </div>

                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <label class="form-label">Site Title</label>
                                            <input type="text" id="site_title_inp" class="form-control">
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">About Us</label>
                                            <textarea id="site_about_inp" class="form-control" rows="6"></textarea>
                                        </div>
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button"
                                            onclick="resetForm()"
                                            class="btn text-secondary"
                                            data-bs-dismiss="modal">
                                            CANCEL
                                        </button>

                                        <button type="button"
                                            onclick="upd_general(site_title_inp.value, site_about_inp.value)"
                                            class="btn custom-bg text-white">
                                            SUBMIT
                                        </button>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Shutdown Section -->
            <div class="card border-0 shadow-sm m-4">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between">
                        <h5 class="card-title m-0">Shutdown Website</h5>

                        <div class="form-check form-switch">
                            <input class="form-check-input"
                                type="checkbox"
                                id="shutdown_toggle"
                                onchange="upd_shutdown(this.checked ? 1 : 0)">
                        </div>
                    </div>

                    <p class="mt-3">
                        No customer will be allowed to book hotel rooms when shutdown mode is ON.
                    </p>
                </div>
            </div>

        </div>
    </div>
</div>

<?php require('inc/scripts.php'); ?>

<script>

let general_data;

// Cache DOM elements (better performance)
let site_title = document.getElementById('site_title');
let site_about = document.getElementById('site_about');
let site_title_inp = document.getElementById('site_title_inp');
let site_about_inp = document.getElementById('site_about_inp');
let shutdown_toggle = document.getElementById('shutdown_toggle');

function get_general() {

    let xhr = new XMLHttpRequest();
    xhr.open("POST", "ajax/settings_crud.php", true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    xhr.onload = function () {

        general_data = JSON.parse(this.responseText);

        site_title.innerText = general_data.site_title;
        site_about.innerText = general_data.site_about;

        site_title_inp.value = general_data.site_title;
        site_about_inp.value = general_data.site_about;

        // Fix toggle
        shutdown_toggle.checked = (general_data.shutdown == 1);
    }

    xhr.send('get_general=1');
}

function upd_general(site_title_val, site_about_val) {

    let xhr = new XMLHttpRequest();
    xhr.open("POST", "ajax/settings_crud.php", true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    xhr.onload = function () {

        let modal = bootstrap.Modal.getInstance(document.getElementById('general-s'));
        modal.hide();

        if (this.responseText == 1) {
            alert('success', 'Changes Saved');
            get_general();
        } else {
            console.log("No changes made");
        }
    }

    xhr.send('site_title=' + site_title_val + '&site_about=' + site_about_val + '&upd_general=1');
}

function upd_shutdown(val) {

    let xhr = new XMLHttpRequest();
    xhr.open("POST", "ajax/settings_crud.php", true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    xhr.onload = function () {

        if (this.responseText == 1) {
            alert('success', 'Site has been shutdown');
        } else {
            alert('success', 'Shutdown mode is OFF');
        }

        get_general();
    }

    xhr.send('upd_shutdown=' + val);
}

// Reset modal fields
function resetForm() {
    site_title_inp.value = general_data.site_title;
    site_about_inp.value = general_data.site_about;
}

window.onload = function () {
    get_general();
}

</script>

</body>
</html>