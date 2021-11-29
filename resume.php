<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">

<head>
    <title>KOKO - Resume</title>
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
            <div class="rightbar">
                <h2>KOKO Team Resumes</h2>
                <table style="margin:auto;">
                    <tr>
                        <td class="cvtable">
                            <p>Khalid Alghamdi CV</p>
                        </td>
                        <td class="cvtable">
                            <p>Albaraa Baatiyyah CV</p>
                        </td>
                        <td class="cvtable">
                            <p>Abdullah Alkatheri CV</p>
                        </td>
                    </tr>
                    <tr>
                        <td class="resumeTb">
                            <object data="pdf/Resume-Khalid-Alghamdi.pdf" width="500" height="600" type="application/pdf">
                                <p>Something went wrong might,Your browser doesn't support PDF.</p>
                            </object>
                        </td>

                        <td class="resumeTb">
                            <object data="pdf/baraa.pdf" width="500" height="600" type="application/pdf">
                                <p>Something went wrong might, Your browser doesn't support PDF.</p>
                            </object>
                        </td>
                        <td class="resumeTb">
                            <object data="pdf/otter.pdf" width="500" height="600" type="application/pdf">
                                <p>Something went wrong might, Your browser doesn't support PDF.</p>
                            </object>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <?php include_once 'includes/footer.php'; ?>
</body>

</html>