<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="UTF-8">
    <title>KOKO - Contact Us</title>
    <link rel="stylesheet" type="text/css" href="css/main.css" />
    <link rel="stylesheet" type="text/css" href="css/table.css" />
    <link rel="stylesheet" type="text/css" href="css/print.css" media="print" />
    <link rel="shortcut icon" type="image/png" href="images/icon.png" />
    <script src="js/email.js" type="text/javascript"></script>
</head>

<body>
    <div id="page-container">
        <div id="content-wrap">
            <div class="header">
                <?php include_once 'includes/header.php'; ?>
                <div class="header-left">
                    <?php include_once 'includes/links.php'; ?>
                </div>
            </div>
            <h2>Contact Us</h2>
            <div class="rightbar">
                <table border="2" id="KOKOTableDesign">
                    <caption>© KSG.sa</caption>
                    <tr>
                        <th colspan="3" style="text-align: center">KOKO Team</th>
                    </tr>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Contact Information</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Khalid Saeed Alghamdi</td>
                        <td id="khalidemail"></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Albaraa Hussain Baatiyyah</td>
                        <td id="baraaemail"></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Abdullah Mohammed Alkatheri</td>
                        <td id="ottteremail"></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    <?php include_once 'includes/footer.php'; ?>
</body>
<script>
    var emails = scrambleEmail();
    var khalidemail = document.getElementById("khalidemail");
    khalidemail.innerHTML = `Email: <a href="mailto:${emails.MrKhalid}">${emails.MrKhalid}</a>`;
    var baraaemail = document.getElementById("baraaemail");
    baraaemail.innerHTML = `Email: <a href="mailto:${emails.baraa}">${emails.baraa}</a>`;
    var ottteremail = document.getElementById("ottteremail");
    ottteremail.innerHTML = `Email: <a href="mailto:${emails.otter}">${emails.otter}</a>`;
</script>

</html>