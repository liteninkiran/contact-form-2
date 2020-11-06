<!DOCTYPE html>
<html>

    <head>

        <title>Client Form</title>

        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
        <link rel="stylesheet" href="style.css">

    </head>

    <body>

        <form id="regForm" action="" method="post">

            <h1>Add New Client:</h1>

            <div class="tab">

                <h2>Client Name</h2>
<?php
                include('form-controls\client-admin\client-name\title.php');
                include('form-controls\client-admin\client-name\client-name.php');
                include('form-controls\client-admin\client-name\suffix.php');
                include('form-controls\client-admin\client-name\known-as.php');
                include('form-controls\client-admin\client-name\gender.php');
                include('form-controls\client-admin\client-name\birth-date.php');
                include('form-controls\client-admin\client-name\nationality.php');
                include('form-controls\client-admin\client-name\boat-name.php');
                include('form-controls\client-admin\client-name\subscription.php');
?>
            </div>

            <div class="tab">

                <h2>Contact Info</h2>
<?php
                include('form-controls\client-admin\contact-info\address-type.php');
                include('form-controls\client-admin\contact-info\address.php');
                include('form-controls\client-admin\contact-info\phone-type.php');
                include('form-controls\client-admin\contact-info\phone-number.php');
                include('form-controls\client-admin\contact-info\email-type.php');
                include('form-controls\client-admin\contact-info\email-address.php');
?>

            </div>

            <div class="tab">

                <h2>Notes</h2>
<?php
                include('form-controls\client-admin\notes\alert-notes.php');
                include('form-controls\client-admin\notes\log-summary.php');
                include('form-controls\client-admin\notes\detailed-notes.php');
?>

            </div>

            <div class="tab">

                <h2>Internal Coding</h2>
<?php
                include('form-controls\client-admin\internal-coding\client-type.php');
                include('form-controls\client-admin\internal-coding\client-reason.php');
                include('form-controls\client-admin\internal-coding\client-source.php');
                include('form-controls\client-admin\internal-coding\contact-frequency.php');
?>

            </div>

            <div style="overflow:auto;">
                <div style="float:right;">
                    <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                    <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
                </div>
            </div>

            <!-- Circles which indicates the steps of the form: -->
            <div style="text-align:center;margin-top:40px;">
                <span class="step"></span>
                <span class="step"></span>
                <span class="step"></span>
                <span class="step"></span>
            </div>

        </form>

        <script type="text/javascript" src="scripts.js"></script>

    </body>
</html>





