<?php
$malurl = "/sites/kvalitet.himolde.no/themes/himolde2009";
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" 
	lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">
<head>
    <title>Høgskolen i Molde: <?php print $site_name ?> - <?php print $title ?></title>
    <link rel="shortcut icon" href="http://www2.himolde.no/images/hsm.ico" type="image/vnd.microsoft.icon" />
    <link rel="icon" href="http://www2.himolde.no/images/hsm.ico" type="image/vnd.microsoft.icon" />
    <link rel="stylesheet" type="text/css" href="http://www2.himolde.no/content/css/system.css" />
    <link rel="stylesheet" type="text/css" href="http://www2.himolde.no/db/57/57.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo $malurl; ?>/himolde-style.css" />
    <?php if ($logged_in): ?>
    <link rel="stylesheet" type="text/css" href="<?php echo $malurl; ?>/himolde-style-loggedin.css" />
    <?php else: ?>
    <link rel="stylesheet" type="text/css" href="<?php echo $malurl; ?>/himolde-style-not-loggedin.css" />
    <?php endif; ?>
    <link rel="stylesheet" type="text/css" media="print" href="<?php echo $malurl; ?>/himolde-style-print.css" />
    <?php print $head ?>
    <?php print $styles ?>
    <?php print $scripts ?>
    <script type="text/javascript"><?php /* Needed to avoid Flash of Unstyle Content in IE */ ?> </script>
</head>
<body>
<a class="skiplink" href="#startcontent">Hopp over navigasjon</a>
<!-- ========= COPIED FROM HIMOLDE.NO ================================ -->
<div style="visibility:visible;display:block;position:absolute;left:269px;top:154px;z-index:111">
<!-- Start HiMolde Main Menu -->
<?php include(dirname(__FILE__)."/himolde-menus.html"); ?>
<!-- End HiMolde Quick Menu -->
</div>
<!-- ========= END COPY ================================ -->
<div id="leftmenu">
<?php print $left ?>
</div>
<div id="header1">
<h1 class='site-name'><a href="<?php print $front_page ?>">Høgskolen i Molde: <?php print $site_name ?></a></h1>
</div>
<div id="header1_print">
<img src="<?php echo $malurl; ?>/logo.gif" />
</div>
<div id="main_front">
<a name="startcontent" id="startcontent"></a>
<?php print $breadcrumb ?>
<h1><?php print $title ?></h1>
<div class="tabs"><?php print $tabs ?></div>
<?php if ($show_messages) { print $messages; } ?>
<?php print $help ?>
<?php print $content; ?>
<?php print $feed_icons; ?>
<div id="footer">
<hr />
<address>
<span style="float:right">
<?php print $footer_message ?>
<?php print $footer ?>
</span>
<!-- a href="http://validator.w3.org/check/referer"><img
        src="http://www.w3.org/Icons/valid-xhtml10-blue"
        alt="Valid HTML 4.01!" /></a>
<a href="http://jigsaw.w3.org/css-validator/check/referer"><img
       src="http://jigsaw.w3.org/css-validator/images/vcss-blue"
       alt="Valid CSS!" />
</a -->
</address>
</div>
</div> <!--  end main_front -->

<!-- ========= COPIED FROM HIMOLDE.NO ================================ -->
<?php include(dirname(__FILE__)."/himolde-design-elements.html"); ?>
<!-- ========= END COPY ================================ -->

<!-- ========= START GOOGLE ANALYTICS ================================ -->
<script type="text/javascript">
    var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
    document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
    try {
        var pageTracker = _gat._getTracker("UA-52256-2");
        pageTracker._trackPageview();
    } catch(err) {}
</script>
<!-- ========= END GOOGLE ANALYTICS ================================ -->

<?php print $closure ?>
</body>
</html>
