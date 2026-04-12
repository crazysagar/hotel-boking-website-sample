<?php
require('../inc/db_config.php');
require('../inc/essentials.php');

if(isset($_POST['get_general']) && $_POST['get_general'] == 1)
{
    $q = "SELECT * FROM `settings` WHERE `sno`=?";
    $values = [1];
    $res  = select($q,$values, "i");
    $data = mysqli_fetch_assoc($res);

    echo json_encode($data);
}

if(isset($_POST['upd_general']))
    {
        $frm_data = filteration($_POST);

        $q = "UPDATE `settings` SET `site_title`=?, `site_about`=?, WHERE `sno`=?";
        $values = [$frm_data['site_title'], $frm_data['site_about'],1];
        $res = update($q,$values,'ssi');
    }
