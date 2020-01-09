<?php
$malurl = "/sites/kvalitet.himolde.no/themes/himolde2014";
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html id="ctl00_HtmlTag" xmlns:o="urn:schemas-microsoft-com:office:office" __expr-val-dir="ltr" dir="ltr" lang="nb" xml:lang="nb">
<head id="ctl00_Head1">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <title>Høgskolen i Molde: <?php print $site_name ?> - <?php print $title ?></title>
    <link rel="shortcut icon" href="http://www.himolde.no/images/hsm.ico" type="image/vnd.microsoft.icon" />
    <link rel="icon" href="http://www.himolde.no/images/hsm.ico" type="image/vnd.microsoft.icon" />
    <?php if ($logged_in): ?>
    <link rel="stylesheet" type="text/css" href="<?php echo $malurl; ?>/himolde-style-loggedin.css" />
    <?php else: ?>
    <link rel="stylesheet" type="text/css" href="<?php echo $malurl; ?>/himolde-style-not-loggedin.css" />
    <?php endif; ?>
    <?php print $head ?>
    <?php print $styles ?>
    <?php print $scripts ?>
    <script type="text/javascript"><?php /* Needed to avoid Flash of Unstyle Content in IE */ ?> </script>
<!-- ========= COPIED FROM HIMOLDE.NO ================================ -->
<?php include(dirname(__FILE__)."/header.inc"); ?>
<!-- ========= END COPY ================================ -->

<div id="tdLeftColumn1" name="_invisibleIfEmpty" class="multizone_cellLeftZone" style="width: 80%; margin-bottom: 15px; padding-right: 15px; float: left;">
    <h1 class='site-name'><span id="front_page_link"><a href="<?php print $front_page ?>"><?php print $site_name ?></a> - </span><?php print $title ?></h1>
    <?php if ($logged_in): ?><?php print $breadcrumb ?><?php endif; ?>
    <div class="tabs"><?php print $tabs ?></div>
    <?php if ($show_messages) { print $messages; } ?>
    <?php print $help ?>
    <?php print $content; ?>
    <?php print $feed_icons; ?>
</div>
<div id="tdRightColumn1" name="_invisibleIfEmpty" class="multizone_cellRightZone" style="width: 15%; float: left;">
    <?php print $left ?>
</div>

<!-- ========= COPIED FROM HIMOLDE.NO ================================ -->
<?php include(dirname(__FILE__)."/footer.inc"); ?>
<!-- ========= END COPY ================================ -->

<div id="footer">
    <address>
        <span style="float:right">
            <?php print $footer_message ?>
            <?php print $footer ?>
        </span>
    </address>
</div>

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
