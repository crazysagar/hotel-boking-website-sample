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

                <!-- General settings section -->

                <div class="card border-0 shadow-sm m-4">
                    <div class="card-body">

                        <div class="d-flex align-items-center justify-content-between">
                            <h5 class="card-title m-0">General Settings</h5>

                            <button type="button" class="btn btn-dark btn-sm me-3"
                                data-bs-toggle="modal" data-bs-target="#general_s">
                                <i class="bi bi-pencil-square"></i> Edit
                            </button>
                        </div>

                        <h6 class="fw-bold mt-3">Site Title</h6>
                        <p id="site_title"></p>

                        <h6 class="fw-bold mt-3">About Us</h6>
                        <p id="site_about"></p>

                    </div>
                </div>

                <!-- General settings modal -->

                <div class="modal fade" id="general_form" tabindex="-1">
                    <div class="modal-dialog">

                        <form id="general_s_form">
                            <div class="modal-content">

                                <div class="modal-header">
                                    <h5 class="modal-title">General Settings</h5>
                                </div>

                                <div class="modal-body">

                                    <div class="mb-3">
                                        <label class="form-label">Site Title</label>
                                        <input type="text" name="site_title" id="site_title_inp" class="form-control">
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">About Us</label>
                                        <textarea name="site_about" id="site_about_inp" class="form-control" rows="6"></textarea>
                                    </div>

                                </div>

                                <div class="modal-footer">
                                    <button type="button" onclick="resetForm()" class="btn text-secondary" data-bs-dismiss="modal">
                                        CANCEL
                                    </button>

                                    <button type="submit" class="btn custom-bg text-white">
                                        SUBMIT
                                    </button>
                                </div>

                            </div>
                        </form>

                    </div>
                </div>

                <!-- Shutdown section -->

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

                <!-- Contact details section -->

                <div class="card border-0 shadow-sm m-4">
                    <div class="card-body">

                        <!-- Header -->
                        <div class="d-flex align-items-center justify-content-between">
                            <h5 class="card-title m-0">Contacts Settings</h5>

                            <button type="button" class="btn btn-dark btn-sm me-3"
                                data-bs-toggle="modal" data-bs-target="#contacts_s">
                                <i class="bi bi-pencil-square"></i> Edit
                            </button>
                        </div>

                        <!-- Content -->
                        <div class="row mt-4">

                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <h6 class="fw-bold mb-1">Address</h6>
                                    <p id="address"></p>
                                </div>

                                <div class="mb-4">
                                    <h6 class="fw-bold mb-1">Google Map</h6>
                                    <p id="gmap"></p>
                                </div>

                                <div class="mb-4">
                                    <h6 class="fw-bold mb-1">Phone Numbers</h6>
                                    <p><i class="bi bi-telephone-fill"></i> <span id="pn1"></span></p>
                                    <p><i class="bi bi-telephone-fill"></i> <span id="pn2"></span></p>
                                </div>

                                <div class="mb-4">
                                    <h6 class="fw-bold mb-1">E-mail</h6>
                                    <p id="email"></p>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <h6 class="fw-bold mb-1">Social Links</h6>
                                    <p>
                                        <i class="bi bi-facebook"></i>
                                        <span id="fb"></span>
                                    </p>

                                    <p>
                                        <i class="bi bi-instagram"></i>
                                        <span id="ig"></span>
                                    </p>

                                    <p>
                                        <i class="bi bi-twitter"></i>
                                        <span id="tw"></span>
                                    </p>
                                </div>

                                <div class="mb-4">
                                    <h6 class="fw-bold mb-1">iFrame</h6>
                                    <iframe id="iframe" class="border p-2 w-100"></iframe>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Contacts details modal -->

                <div class="modal fade" id="contacts_s" tabindex="-1">
                    <div class="modal-dialog modal-lg">

                        <form id="contacts_s_form">
                            <div class="modal-content">

                                <div class="modal-header">
                                    <h5 class="modal-title">Contacts Settings</h5>
                                </div>

                                <div class="modal-body">

                                    <div class="container-fluid p-0">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Address</label>
                                                    <input type="text" name="address" id="address_inp" class="form-control shadow-none" required>
                                                </div>

                                                <div class="mb-3">
                                                    <label class="form-label">Google Map Link</label>
                                                    <input type="text" name="gmap" id="gmap_inp" class="form-control shadow-none" required>
                                                </div>

                                                <div class="mb-3">
                                                    <label class="form-label">Phone Numbers (with country code)</label>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text"><i class="bi bi-telephone-fill"></i></span>
                                                        <input type="text" name="pn1" id="pn1_inp" class="form-control shadow-none" required>
                                                    </div>

                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text"><i class="bi bi-telephone-fill"></i></span>
                                                        <input type="text" name="pn2" id="pn2_inp" class="form-control shadow-none" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">Email</label>
                                                        <input type="email" name="email" id="email_inp" class="form-control shadow-none" required>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Social Links</label>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text"><i class="bi bi-facebook"></i></span>
                                                        <input type="text" name="fb" id="fb_inp" class="form-control shadow-none" required>
                                                    </div>

                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text"><i class="bi bi-instagram"></i></span>
                                                        <input type="text" name="ig" id="ig_inp" class="form-control shadow-none" required>
                                                    </div>

                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text"><i class="bi bi-twitter"></i></span>
                                                        <input type="text" name="tw" id="tw_inp" class="form-control shadow-none" required>
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">iFrame Src</label>
                                                    <input type="text" name="iframe" id="iframe_inp" class="form-control shadow-none" required>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="modal-footer">
                                    <button type="button" onclick="resetForm()" class="btn text-secondary" data-bs-dismiss="modal">
                                        CANCEL
                                    </button>

                                    <button type="submit" class="btn custom-bg text-white">
                                        SUBMIT
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <!--Management Team section  -->
                <div class="card border-0 shadow-sm m-4">
                    <div class="card-body">

                        <div class="d-flex align-items-center justify-content-between">
                            <h5 class="card-title m-0">Management Team</h5>

                            <button type="button" class="btn btn-dark btn-sm me-3"
                                data-bs-toggle="modal" data-bs-target="#team_s">
                                <i class="bi bi-plus-square"></i> Add
                            </button>
                        </div>

                        <div class="row" id="team-data">

                        </div>
                    </div>
                </div>

                <!-- Management Team modal -->

                <div class="modal fade" id="team_s" tabindex="-1">
                    <div class="modal-dialog">

                        <form id="team_s_form">
                            <div class="modal-content">

                                <div class="modal-header">
                                    <h5 class="modal-title">Add Team Member</h5>
                                </div>

                                <div class="modal-body">

                                    <div class="mb-3">
                                        <label class="form-label">Name</label>
                                        <input type="text" name="member_name" id="member_name_inp" class="form-control">
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Picture</label>
                                        <input type="file" name="member_pic" id="member_pic_inp" accept=".jpg, .png, .webp, .jpeg" class="form-control">

                                    </div>

                                </div>

                                <div class="modal-footer">
                                    <button type="button" onclick="" class="btn text-secondary" data-bs-dismiss="modal">
                                        CANCEL
                                    </button>

                                    <button type="submit" class="btn custom-bg text-white">
                                        SUBMIT
                                    </button>
                                </div>

                            </div>
                        </form>

                    </div>
                </div>

            </div>
        </div>
    </div>

    <?php require('inc/scripts.php'); ?>

    <script>
        let general_data, contacts_data;

        // elements
        let site_title = document.getElementById('site_title');
        let site_about = document.getElementById('site_about');
        let site_title_inp = document.getElementById('site_title_inp');
        let site_about_inp = document.getElementById('site_about_inp');
        let shutdown_toggle = document.getElementById('shutdown_toggle');
        let general_s_form = document.getElementById('general_s_form');
        let contacts_s_form = document.getElementById('contacts_s_form');
        let team_s_form = document.getElementById('team_s_form');
        let member_name_inp = document.getElementById('member_name_inp');
        let member_pic_inp = document.getElementById('member_pic_inp');

        // get data
        function get_general() {

            let xhr = new XMLHttpRequest();
            xhr.open("POST", "ajax/settings_crud.php", true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

            xhr.onload = function() {

                general_data = JSON.parse(this.responseText);

                site_title.innerText = general_data.site_title;
                site_about.innerText = general_data.site_about;

                site_title_inp.value = general_data.site_title;
                site_about_inp.value = general_data.site_about;

                shutdown_toggle.checked = (general_data.shutdown == 1);
            }

            xhr.send('get_general=1');
        }

        // form submit (FIXED)
        general_s_form.addEventListener('submit', function(e) {
            e.preventDefault();
            upd_general(site_title_inp.value, site_about_inp.value);
        });

        // update
        function upd_general(site_title_val, site_about_val) {

            let xhr = new XMLHttpRequest();
            xhr.open("POST", "ajax/settings_crud.php", true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

            xhr.onload = function() {

                let modalEl = document.getElementById('general_form'); // FIXED
                let modal = bootstrap.Modal.getOrCreateInstance(modalEl);
                modal.hide();

                if (this.responseText == 1) {
                    alert('success', 'Changes Saved');
                    get_general();
                }
            }

            xhr.send('site_title=' + site_title_val + '&site_about=' + site_about_val + '&upd_general=1');
        }

        // reset
        function resetForm() {
            site_title_inp.value = general_data.site_title;
            site_about_inp.value = general_data.site_about;
        }

        // shutdown toggle
        function upd_shutdown(val) {

            let xhr = new XMLHttpRequest();
            xhr.open("POST", "ajax/settings_crud.php", true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

            xhr.onload = function() {

                if (this.responseText == 1) {
                    alert('success', 'Site has been shutdown');
                } else {
                    alert('success', 'Shutdown mode is OFF');
                }

                get_general();
            }

            xhr.send('upd_shutdown=' + val);
        }

        // contacts
        function get_contacts() {

            let contacts_p_id = ['address', 'gmap', 'pn1', 'pn2', 'email', 'fb', 'ig', 'tw'];
            let iframe = document.getElementById('iframe');

            let xhr = new XMLHttpRequest();
            xhr.open("POST", "ajax/settings_crud.php", true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

            xhr.onload = function() {

                contacts_data = JSON.parse(this.responseText);

                for (let i = 0; i < contacts_p_id.length; i++) {
                    document.getElementById(contacts_p_id[i]).innerText = contacts_data[contacts_p_id[i]];
                }

                iframe.src = contacts_data['iframe'];
                contacts_inp(contacts_data);
            }

            xhr.send('get_contacts=1');
        }

        // contacts input
        function contacts_inp(contacts_data) {
            let contacts_inp_id = ['address_inp', 'gmap_inp', 'pn1_inp', 'pn2_inp', 'email_inp', 'fb_inp', 'ig_inp', 'tw_inp', 'iframe_inp'];
            let keys = ['address', 'gmap', 'pn1', 'pn2', 'email', 'fb', 'ig', 'tw', 'iframe'];

            for (let i = 0; i < contacts_inp_id.length; i++) {
                document.getElementById(contacts_inp_id[i]).value = contacts_data[keys[i]];
            }
        }

        // submit contacts
        contacts_s_form.addEventListener('submit', function(e) {
            e.preventDefault();
            upd_contacts();
        });

        function upd_contacts() {
            let index = ['address', 'gmap', 'pn1', 'pn2', 'email', 'fb', 'ig', 'tw', 'iframe'];
            let contacts_inp_id = ['address_inp', 'gmap_inp', 'pn1_inp', 'pn2_inp', 'email_inp', 'fb_inp', 'ig_inp', 'tw_inp', 'iframe_inp'];

            let data_str = "";

            for (let i = 0; i < index.length; i++) {
                data_str += index[i] + "=" + document.getElementById(contacts_inp_id[i]).value + "&";
            }
            data_str += "upd_contacts";

            let xhr = new XMLHttpRequest();
            xhr.open("POST", "ajax/settings_crud.php", true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

            xhr.onload = function() {
                let modalEl = document.getElementById('contacts_s'); // FIXED
                let modal = bootstrap.Modal.getOrCreateInstance(modalEl);
                modal.hide();

                if (this.responseText == 1) {
                    alert('success', 'Changes saved!!');
                    get_contacts();
                } else {
                    alert('error', 'No changes made!!');
                }
            }
            xhr.send(data_str);

        }


        team_s_form.addEventListener('submit', function(e) {
            e.preventDefault();
            add_member();
        });

        function add_member() {
            
            if (!member_name_inp.value || !member_pic_inp.files.length) {
                console.log("Fill all fields");
                return;
            }

            let data = new FormData();
            data.append('name', member_name_inp.value);
            data.append('picture', member_pic_inp.files[0]);
            data.append('add_member', '');

            let xhr = new XMLHttpRequest();
            xhr.open("POST", "ajax/settings_crud.php", true);

            xhr.onload = function() {

                console.log(this.responseText);

                let modalEl = document.getElementById('team_s');
                let modal = bootstrap.Modal.getOrCreateInstance(modalEl);
                modal.hide();

                 if (this.responseText == 'inv_img') {
                    alert('error','Only JPG, PNG, WEBP and JPEG are allowed!');

                } else if (this.responseText == 'inv_size') {
                    alert('error','Image should be less than 2MB');

                } else if (this.responseText == 'upd_failed') {
                    alert('error','Image upload failed. Server Down!');

                } else {
                    alert('success', 'New Member Added!');
                    member_name_inp.value = '';
                    member_pic_inp.value = '';
                }

                
            }


            xhr.send(data);
        }

        // load
        window.onload = function() {
            get_general();
            get_contacts();
        }
    </script>
</body>

</html>