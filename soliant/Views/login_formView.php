<?php
$login_formView = new login_formView;

Class login_formView
{
    function display_login_form(){
        echo "<div class='form_view'>
                                    <form id='login' method='POST' action='module/loginProcess.php'>
                                        Username:<input type='text' maxlength='16' name='user'><br/>
                                        Password: <input type='password' maxlength='16' name='pass'><br/>
                                        <input type='submit' value='Login' />
                                    </form>
                            </div>
            
            </div>";
    }
}
?>