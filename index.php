<html>
<head>

<!--This script should appear below your LINK stylesheet tags -->
<link rel="stylesheet" type="text/css" href="css/default.css" />
<link rel="alternate stylesheet" type="text/css" media="screen" title="blue-theme" href="css/style2.css" />
<link rel="alternate stylesheet" type="text/css" media="screen" title="brown-theme" href="css/style3.css" />

<script src="js/styleswitch.js" type="text/javascript">
/***********************************************
* Style Sheet Switcher v1.1- © Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use http://www.dynamicdrive.com/dynamicindex9/stylesheetswitcher.htm
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for this script and 100s more
***********************************************/
</script>


<script type="text/javascript" src="simpletreemenu.js">
/***********************************************
* Simple Tree Menu- © Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
***********************************************/
</script>
<link rel="stylesheet" type="text/css" href="simpletree.css" />

<?php include("iframe.php"); ?>
</head>




<body>

<!--This script should appear below your LINK stylesheet tags -->
<form id="switchform">
<input type="radio" name="choice" value="none" checked="checked" onClick="chooseStyle(this.value, 60)">Default style&nbsp;
<input type="radio" name="choice" value="blue-theme" onClick="chooseStyle(this.value, 60)">Blue Theme&nbsp;
<input type="radio" name="choice" value="brown-theme" onClick="chooseStyle(this.value, 60)">Brown Theme
</form>
<!--This script should appear below your LINK stylesheet tags -->
<iframe id="myframe" src="barcode/index.php" scrolling="no" marginwidth="0" marginheight="0" frameborder="0" vspace="0" hspace="0" style="overflow:visible; width:100%; display:none"></iframe>

<?php include("v_tree.php"); ?>  <!-- Vertical menu -->

<?php include("resolution.php"); ?> <!-- get your system resolution -->
</body>
</html>