<?php
require_once "controllers/control.php";
$Header1 = clone $Header;
$footer1 = clone $footer;
$Header1->display_header();
$Shipment->recievedShipmentTable();
$footer->display_footer();
$html_head1 = clone $html_head;
$html_head1->display_htmlHead();


?>