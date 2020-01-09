<?php
$malurl = "/sites/kvalitet.himolde.no/themes/himolde2020";
?><!DOCTYPE html>
<html lang="no" class=" js no-touch csstransforms csstransforms3d csstransitions svg no-overflowtouch no-overflowscrolling">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta id="viewport" name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no">
    <meta name="generator" content="Vortex">
    <title>Høgskolen i Molde: <?php print $site_name ?> - <?php print $title ?></title>
    <link rel="stylesheet" media="all" href="http://www.himolde.no/vrtx/decorating/resources/dist/src/css/style.css">
    <link rel="stylesheet" media="only screen and (max-width: 16cm) and (orientation : portrait), only screen and (max-width: 19cm) and (orientation : landscape)" href="http://www.himolde.no/vrtx/decorating/resources/dist/src/css/responsive.css">
    <link rel="stylesheet" media="print" href="http://www.himolde.no/vrtx/decorating/resources/dist/src/css/print.css">
    <link rel="stylesheet" type="text/css" href="http://www.himolde.no/vrtx/decorating/resources/style/local.css">
<!--
    <link rel="shortcut icon" href="http://www.himolde.no/images/hsm.ico" type="image/vnd.microsoft.icon" />
    <link rel="icon" href="http://www.himolde.no/images/hsm.ico" type="image/vnd.microsoft.icon" />
-->
    <?php if ($logged_in): ?>
    <link rel="stylesheet" type="text/css" href="<?php echo $malurl; ?>/himolde-style-loggedin.css" />
    <?php print $head ?>
    <?php else: ?>
    <link rel="stylesheet" type="text/css" href="<?php echo $malurl; ?>/himolde-style-not-loggedin.css" />
    <?php endif; ?>
    <?php print $styles ?>
    <?php print $scripts ?>
</head>

<body class="www.himolde.no not-for-ansatte faculty no total-main">


<!-- Hidden navigation start -->
<div id="hidnav-wrapper" role="navigation">
    <ul id="hidnav">
       <li><a href="#globalnav">Hovednavigasjon (hopp)</a></li>
       <li><a href="#main">Hovedinnholdet (hopp)</a></li>
       <li><a href="#footers">Kontaktinformasjon (hopp)</a></li>
    </ul>
</div>
<!-- Hidden navigation end -->

<div id="head-wrapper">
        <div id="head">
              <div id="header">
                   <span class="logo"><a class="title" href="https://www.himolde.no/">Høgskolen i Molde</a></span>
	   </div>
        </div>

	<div id="menu-wrapper" role="navigation">
           <ul class="menu">
            <li><a href="#" class="toggle-navigation">
                    <span class="icon"></span>
                    <span class="text">Meny</span>
                </a>
            </li>
            <li>
                <a href="#" class="toggle-search">
                    <span class="icon"></span>
                    <span class="text">Søk</span>
                </a>
            </li>
        </ul>
       </div>

        <!-- Global navigation start -->
	<div id="globalnav" aria-labelledby="globalnav-title">
          <span id="globalnav-title" style="display: none">Hovednavigasjon</span>
            
  <ul class="vrtx-tab-menu">
    <li class="root-folder parent-folder">
  <a href="https://www.himolde.no/">Forsiden</a>
    </li>
    <li class="studier">
  <a href="https://www.himolde.no/studier/">Studier</a>
    </li>
    <li class="forskning">
  <a href="https://www.himolde.no/forskning/">Forskning</a>
    </li>
    <li class="livet-rundt-studiene">
  <a href="https://www.himolde.no/livet-rundt-studiene/">Livet rundt studiene</a>
    </li>
    <li class="vrtx-current-item" aria-current="page">
  <a href="https://www.himolde.no/tjenester/">Tjenester og verktøy</a>
    </li>
    <li class="om">
  <a href="https://www.himolde.no/om/">Om høgskolen</a>
    </li>
    <li class="personer">
  <a href="https://www.himolde.no/personer/">Personer</a>
    </li>
  </ul>
          
        </div>
	<!-- Global navigation end -->

</div>


<div id="main" role="main">
        <div id="left-main" class="hidden">
        </div>

        <div id="total-main" class="uio-main">
            <div id="vrtx-content">
<!-- CONTENT -->
                <h1 id="hdr"><a href="<?php print $front_page ?>"><?php print $site_name ?></a></h1>
          	<div id="vrtx-main-content" class="vrtx-hide-additional-content-false">
                    <h2><?php print $title ?></h2>

<?php if ($logged_in): ?><?php print $breadcrumb ?><?php endif; ?>
<div class="tabs"><?php print $tabs ?></div>
<?php if ($show_messages) { print $messages; } ?>
<?php print $help ?>
<?php print $content; ?>
<?php print $feed_icons; ?>

          	</div>
		<div id="vrtx-additional-content">
            		<div id="vrtx-related-content">

<?php print $left ?>

            		</div>
            	</div>
<!-- CONTENT -->
            </div>      
        </div>
</div>

<!-- Page footer start -->
<div id="footer-wrapper" class="grid-container ">
	<div id="footers" class="row">
            	<div class="col-3-5 vcard">
                  	

<div class="col-1-3 adr">
<div class="content">
  <h2 class="menu-label">Besøksadresse</h2>
  <p><span>Høgskolen i Molde</span><br />
  <span class="address">Britvegen 2</span><br>
  <span class="postal-code">6410</span> 
  <span class="locality">NO-Molde</span><br> 
  <span class="country-name">Norway</span></p>
</div>
</div>
<div class="col-1-3 adr">
<div class="content">
  <h2 class="menu-label">Postadresse</h2>
  <p><span>Høgskolen i Molde</span><br />
  <span class="post-office-box">Postboks 2110</span><br>
  <span class="postal-code">6402</span> 
  <span class="locality">Molde</span><br> 
  <span class="country-name">Norway</span></p>
</div>
</div>
<div class="col-1-3">
<div class="content">
  <h2 class="menu-label">Kontakt</h2>
  <p><span class="phone">Telefon:  <span class="normal-font">71 21 40 00</span></span><br>
  <span class="email">E-post: <a href="mailto:post@himolde.no"><span class="normal-font">post@himolde.no</span></a></span></p>
</div>
</div>

		</div>
		<div class="col-2-5 responsible-login">
             		<div class="content">
                		<span class="menu-label">Ansvarlig for denne siden</span>
                		<p><a href="mailto:webmaster@himolde.no">webmaster@himolde.no</a></p>
                		<p><a href="/user" class="vrtx-login-manage-title-link" rel="nofollow">Logg inn</a></p>
			</div>
    		</div>
                <div id="footer-logo"><a href="http://www.himolde.no/">Høgskolen i Molde</a></div>
	</div>
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
