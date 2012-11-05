<?php
require_once "controllers/control.php";
$Header1 = clone $Header;
$footer1 = clone $footer;
$login_formView1 = clone $login_formView ;
$Header1->display_header();
$login_formView->display_login_form();
$footer->display_footer();

$html_head1 = clone $html_head;
$html_head1->display_htmlHead();


?>