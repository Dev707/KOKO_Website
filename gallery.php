<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="en" dir="ltr" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>KOKO - Gallery</title>
    <script type="text/javascript" src="js/gallery.js"></script>
    <link rel="stylesheet" type="text/css" href="css/main.css" />
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
            <h2>Gallery</h2>
            <ul class="thumbs">
                <li onclick="changeImg(1)">
                    <img src="images/1.jpg" alt="First Img" />
                </li>
                <li onclick="changeImg(2)">
                    <img src="images/2.jpg" alt="Second Img" />
                </li>
                <li onclick="changeImg(3)">
                    <img src="images/3.jpg" alt="third Img" />
                </li>
                <li onclick="changeImg(4)">
                    <img src="images/4.jpg" alt="fourth Img" />
                </li>
                <li onclick="changeImg(5)">
                    <img src="images/5.jpg" alt="fifth Img" />
                </li>
                <li onclick="changeImg(6)">
                    <img src="images/6.jpg" alt="sixth Img" />
                </li>
                <li onclick="changeImg(7)">
                    <img src="images/7.jpg" alt="seventh Img" />
                </li>
                <li onclick="changeImg(8)">
                    <img src="images/8.jpg" alt="eighth Img" />
                </li>
                <li onclick="changeImg(9)">
                    <img src="images/9.jpg" alt="ninth Img" />
                </li>
                <li onclick="changeImg(10)">
                    <img src="images/10.jpg" alt="tenth Img" />
                </li>
            </ul>
            <div class="buttons">
                <img src="images/left.png" alt="Left Arrow" class="leftarrow" onclick="prevImg()"/>
                <div class="galleryImg">
                    <img id="imgblock" src="images/1.jpg" alt="Images" />
                </div>
                <img src="images/right.png" alt="Right Arrow" class="rightarrow" onclick="nextImg()"/>
            </div>
        </div>
    </div>
    <?php include_once 'includes/footer.php'; ?>
</body>

</html>