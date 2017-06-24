<?php

	$page = 'admin';

    $section = 'adminHome';

    require_once '../core/init.php';

    requireAdmin();

    require_once header;

    require_once adminHomeView;

    require_once footer;
              
?>