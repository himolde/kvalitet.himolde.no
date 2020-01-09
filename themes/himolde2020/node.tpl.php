<?php
// $Id: node.tpl.php,v 1.7 2007/08/07 08:39:36 goba Exp $
?>
  <div class="node<?php if ($sticky) { print " sticky"; } ?><?php if (!$status) { print " node-unpublished"; } ?>">
    <?php if ($picture) {
      print $picture;
    }?>
    <?php if ($page == 0) { ?><h2 class="title"><a href="<?php print $node_url?>"><?php print $title?></a></h2><?php }; ?>
    <?php if ($submitted && ($node->type != 'page')) { ?> <p class="submitted">Sist oppdatert <?php print format_date($node->changed, 'custom', 'd.m.y'); ?> </p><?php } ?>
    <div class="taxonomy"><?php print $terms?></div>
    <div class="content"><?php print $content?></div>
    <?php if ($links) { ?><div class="links">&raquo; <?php print $links?></div><?php }; ?>
  </div>
