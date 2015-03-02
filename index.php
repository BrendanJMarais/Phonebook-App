<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Phone Book Application</title>
<link rel="stylesheet" href="css/style.css" />
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/jquery.maskedinput.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css"></script>
</head>

<body>
    <div class="container">
        <h1 class="main_title">Phone Book Application</h1>
        <div class="content">
            <fieldset class="field_container">
                <legend> <img src="images/plus.gif"> Add new contact </legend>
                <form>
                    <input type="text" id="first_name" class="frm_input" placeholder="First name">
                    <input type="text" id="last_name" class="frm_input" placeholder="Last Name">
                    <input type="text" id="phone_number" class="frm_input" placeholder="Phone Number">
                    <input type="button" class="frm_button" value="Add" onclick="add_contact()">
                </form>
            </fieldset>
            <fieldset class="field_container">
                <legend> <img src="images/arrow.gif"> Contact list </legend>
                <div id="list_container">
                    <?php 
                        // including the config file
                        include('config.php');
                        $pdo = connect();
                        // list_contacts : this file displays the list of contacts in a table view
                        include('list_contacts.php'); 
                    ?>
                </div><!-- list_container -->
            </fieldset>
        </div><!-- content -->    
    </div><!-- container -->
</body>
</html>
