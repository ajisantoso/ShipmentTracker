<?php
$Header = new Header;

Class Header
{
    function display_Header(){
        echo "<div class='header'>
            <h2>Shipment Traker</h2>
            <span id='subHeader'>keeping your business on the track to success</span>
            
            <div class='nav'>
                            <ul>
                                <li><a href='test.php'>Dashboard</a></li>|
                                <li><a href='tracking.php'>Tracking</a></li>|
                                <li><a href='Locations.php'>Locations</a></li>|
                                <li><a href='#'>Aircraft</a></li>|
                                <li><a href='#'>Settings</a></li>
                            </ul>
            </div></div><hr/>";
            
    }
}
?>