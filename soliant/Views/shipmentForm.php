<?php
$Shipment = new Shipment;

Class Shipment
{
    function ship(){
        echo "<div id='tableDiv'>
                    You can ship a package using this form.
                            <table class='table'>
                                    <form method='POST' action='ProcessShipmentForm.php'>
                                    <tr>
                                        <th colspan='2'><h4>Shipment</h4></th>
                                    </tr>
                                    <tr>
                                        <td><input type='hidden' name='hidden'></td>
                                    </tr>
                                    <tr>
                                        <td class='label'>Width:</td><td><input type='text' maxlength='16' name='width'></td>
                                    </tr>
                                    <tr>
                                        <td class='label'>Height:</td><td><input type='text' maxlength='16' name='length'></td>
                                    </tr>
                                    <tr>
                                        <td class='label'>Length:</td><td><input type='text' maxlength='16' name='height'></td>
                                    </tr>
                                    <tr>
                                        <td class='label'>Weight:</td><td><input type='text' maxlength='16' name='weight'></td>
                                    </tr>
                                    <tr>
                                        <td class='label'>destination:</td><td><input type='text' maxlength='16' name='destination'></td>
                                    </tr>
                                    <tr>
                                        <td><input type='submit' value='Ship'></td>
                                    </tr>
                                    </form>
                            </table>
                </div>";
    }
    
    function recievedShipmentTable(){
            echo"<div id='tableDiv'>
                        <table class='table'>
                                <tr><h4>Descrisption</h4> <tr>
                                <tr><td>Height:</td><td></td></tr>
                                <tr><td>Length:</td><td></td></tr>
                                <tr><td>width:</td><td></td></tr>
                                <tr><td>fragile:</td><td></td></tr>
                                <tr><td>recieved on:<td><td>DATE<td></tr>
                        </table>
                </div>
                ";
        
    }
    function ShippedShipmentTable(){
            echo"<div id='tableDiv'>
                        <table class='table'>
                                <tr><h4>Descrisption</h4> <tr>
                                <tr><td>Height:</td><td></td></tr>
                                <tr><td>Length:</td><td></td></tr>
                                <tr><td>width:</td><td></td></tr>
                                <tr><td>fragile:</td><td></td></tr>
                                <tr><td>Shipped on:<td><td>DATE<td></tr>
                        </table>
                </div>
                ";
        
    }


    function displayLocationTable(){
            echo"<div id='tableDiv' class='Locations'>
                        <table class='table'>
                                <tr><h4>Locations</h4> <tr>
                                <tr><td class='label'>Id</td><td class='label'>Locations</td><td class='label'>X cordinate</td><td class='label'>Y cordinate</td></tr>
                        </table>
                </div>
                ";
    }
        
}
?>