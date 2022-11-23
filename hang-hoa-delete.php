<?php
    require_once ('hang-hoa.php');

    extract($_REQUEST);

    hang_hoa_delete($ma_hh);

    header('location: hang-hoa-list.php');

?>
