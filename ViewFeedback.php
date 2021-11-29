<?php require_once "includes/db_handler.php";
$Feedbacks = getAllFeedbacks();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="UTF-8">
    <title>KOKO - View Feedback</title>
    <link rel="stylesheet" type="text/css" href="css/main.css" />
    <link rel="stylesheet" type="text/css" href="css/form.css" />
    <link rel="stylesheet" type="text/css" href="css/table.css" />
    <link rel="shortcut icon" type="image/png" href="images/icon.png" />
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
            <h2>View FeedBacks</h2>
            <div class="leftSide lab">
                <table id="KOKOTableDesign" cellspacing="0" width="50%">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>First name</th>
                            <th>Last name</th>
                            <th>Email</th>
                            <th>Date</th>
                            <th>Show message/details</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($Feedbacks as $i => $Feedback) { ?>
                            <tr>
                                <td><?php echo $i + 1; ?></td>
                                <td><?php echo $Feedback["firstname"]; ?></td>
                                <td><?php echo $Feedback["lastname"]; ?></td>
                                <td><?php echo $Feedback["email"]; ?></td>
                                <td><?php echo date(' Y/m/d h:i a', strtotime($Feedback['create_date'])) ?></td>
                                <td class="text-center">
                                    <form class="KOKOformstyle" name="KOKOForm" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>#details"><input type="hidden" value="<?php echo $Feedback["email"] ?>" name="email"><input type="submit" value="Show details" name="submit"></form>
                                </td>
                            </tr>
                        <?php
                        } ?>
                    </tbody>
                </table>
            </div>
            <?php if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['submit']) && checkuser($_POST['email']) != false) {
                foreach ($Feedbacks as $i => $Feedback) {
                    if ($Feedback['email'] == $_POST['email']) { ?>
                        <div id="details" class="rightbar" style="padding:50px;">
                            <table border="2" id="KOKOTableDesign">
                                <caption>© KSG.sa</caption>
                                <tr>
                                    <th colspan="2" style="text-align: center"><?php echo $Feedback["email"] ?></th>
                                </tr>
                                <tr>
                                    <th>Field</th>
                                    <th>Content</th>
                                </tr>
                                <tr>
                                    <td>First name</td>
                                    <td><?php echo $Feedback["firstname"]; ?></td>
                                </tr>
                                <tr>
                                    <td>Last name</td>
                                    <td><?php echo $Feedback["lastname"]; ?></td>
                                </tr>
                                <tr>
                                    <td>Gender</td>
                                    <td><?php echo $Feedback["gender"]; ?></td>
                                </tr>
                                <tr>
                                    <td>Phone Number</td>
                                    <td><?php echo $Feedback["pnumber"]; ?></td>
                                </tr>
                                <tr>
                                    <td>Country</td>
                                    <td><?php echo $Feedback["country"]; ?></td>
                                </tr>
                                <tr>
                                    <td>City</td>
                                    <td><?php echo $Feedback["city"]; ?></td>
                                </tr>
                                <tr>
                                    <td>Favoret parrot</td>
                                    <td><?php echo $Feedback["parrot"]; ?></td>
                                </tr>
                                <tr>
                                    <td>Subscribed in newsletter</td>
                                    <td><?php echo $Feedback["subscribe"]; ?></td>
                                </tr>
                                <tr>
                                    <td>Message Title</td>
                                    <td><?php echo $Feedback["title"]; ?></td>
                                </tr>
                                <tr>
                                    <td>Message Content</td>
                                    <td style="width: 70%;"><?php echo $Feedback["message"]; ?></td>
                                </tr>
                            </table>
                        </div>
            <?php }
                }
            } ?>
        </div>
    </div>
    <?php include_once 'includes/footer.php'; ?>
</body>

</html>