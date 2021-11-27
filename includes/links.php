<?php

$links = [];
$links["HomePage"] = "index.php";
$links["Gallery"] = "gallery.php";
$links["Video"] = "video.php";
$links["Bird sizes"] = "Birdsizes.php";
$links["Blog"] = "http://blog.ksg.sa/";
$links["Contact us"] = "ContactUs.php";
$links["Resumes"] = "resume.php";
$links["Privacy Policy"] = "PrivacyPolicy.php";
$links["Send Feedback"] = "Feedback.php";
$links["View feedbacks"] = "ViewFeedback.php";

foreach ($links as $key => $link) {
    if ($_SERVER["PHP_SELF"] == "/" . $link) {
        $var = "<a style='background-color:#174e19;' href='$link'>$key</a>";
    } else {
        if ($key == "Blog") {
            $var = "<a target='_blank' href='$link'>$key</a>";
        } else {
            $var = "<a href='$link'>$key</a>";
        }
    }
    echo $var;
}
