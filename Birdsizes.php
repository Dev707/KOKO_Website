<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>KOKO - Bird sizes</title>
    <link rel="stylesheet" type="text/css" href="css/main.css" />
    <link rel="stylesheet" type="text/css" href="css/table.css" />
    <link rel="stylesheet" type="text/css" href="css/print.css" media="print" />
    <link rel="shortcut icon" type="image/png" href="images/icon.png" />
</head>

<body>
    <div id="page-container">
        <div id="content-wrap">
            <div class="header">
                <?php include_once __DIR__.'/includes/header.php'; ?>
                <div class="header-left">
                    <?php include_once __DIR__.'/includes/links.php'; ?>
                </div>
            </div>
            <h2>Bird sizes</h2>
            <div class="rightbar">
                <table border="2" id="KOKOTableDesign">
                    <caption>© KSG.sa</caption>
                    <tr>
                        <th colspan="2" style="text-align: center">BIRD SIZES</th>
                    </tr>
                    <tr>
                        <th>Size</th>
                        <th>Type</th>
                    </tr>
                    <tr>
                        <td>Tiny</td>
                        <td>Canaries and Finches</td>
                    </tr>
                    <tr>
                        <td>X-Small</td>
                        <td>Cockatiels, Lovebirds, Parakeets and Parrotlets</td>
                    </tr>
                    <tr>
                        <td>Small</td>
                        <td>Caiques, Conures, Lories, Hawk-headed parrots, Pionus, Quakers and Senegals</td>
                    </tr>
                    <tr>
                        <td>Medium</td>
                        <td>Mini Macaws, Large conures and Small cockatoos</td>
                    </tr>
                    <tr>
                        <td>Large</td>
                        <td rowspan="2">Amazons, Eclectus , African greys and Macaws</td>
                    </tr>
                    <tr>
                        <td>X-Large</td>
                    </tr>

                </table>
            </div>
        </div>
    </div>
    <?php include_once __DIR__.'/includes/footer.php'; ?>
</body>

</html>