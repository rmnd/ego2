<!-- $Id: footer.php,v 1.2 2005/01/31 09:32:27 hunter Exp $ -->
	<script>
          function Delete(url) {
            if (confirm('<?php print $i18n->sure; ?>')) {
              window.location.href = url;
            }
          }
	</script>

        <tr <?= $session->footer_style; ?> >
         <td class="rbl-border" id="footer" align="left" valign="middle" colspan="2">
	  <span class="topiclinx">
	  <? if ((($session->security->canUser($session->module, $config->right_to_change) == 1) && (trim($session->blog['author_name']) == trim($session->user['name']))) || ($session->user['isadmin'])): ?>
	    <a href="<?= $session->utils->makeHRURL("?module=".$session->module."&action=change&sub=edit&id=".$session->blog['id']); ?>">[<?= $i18n->change; ?>]</a>&nbsp;&nbsp;
	  <? endif; ?>
	  <? if (((($session->security->canUser($session->module, $config->right_to_delete) == 1) && (trim($session->blog['author_name']) == trim($session->user['name']))) || ($session->user['isadmin'])) && empty($session->blog['del'])): ?>
	    <a href="javascript:confirmIt('<?= $session->utils->makeHRURL("?module=".$session->module."&action=show&sub=delete&id=".$session->blog['id']); ?>')">[<?= $i18n->delete; ?>]</a>&nbsp;&nbsp;
	  <? endif; ?>
	  <? if (((($session->security->canUser($session->module, $config->right_to_delete) == 1) && (trim($session->blog['author_name']) == trim($session->user['name']))) || ($session->user['isadmin'])) && (!empty($session->blog['del']))): ?>
	    <a href="javascript:confirmIt('<?= $session->utils->makeHRURL("?module=".$session->module."&action=show&sub=undelete&id=".$session->blog['id']); ?>')">[<?= $i18n->undelete; ?>]</a>&nbsp;&nbsp;
	  <? endif; ?>
          <? if ((($session->security->canUser($session->module, $config->right_to_bookmark) == 1) || ($session->user['isadmin'])) && ($config->use_bookmarks)): ?>
	    <a href="<?= $session->utils->makeHRURL("?module=".$session->module."&action=bookmarks&sub=add&id=".$session->blog['id']); ?>">[<?= $i18n->2bookmarks; ?>]</a>&nbsp;&nbsp;
	  <? endif; ?>
	  <? if ((($session->security->canUser($session->module, $config->right_to_comment) == 1) || ($session->user['isadmin'])) && ($config->use_comments) && (in_array($session->blog['category'], $config->categories_allowed_to_comment[$session->module]))): ?>
	    <a href="<?= $session->utils->makeHRURL("?module=comments&action=show&tid=$session->blog['id']&board=1"); ?>" title="<?= $i18n->comment." '".$session->blog['title']."'".$i18n->inforum; ?>">[<?= $i18n->comment; ?>]</a> (<?= $comments_count; ?>)
	  <? endif; ?>
	  <?php
	    if (!empty($session->blog['addons'])) {
	      print " --- ";
	      foreach((split(";", $session->blog['addons'])) as $session->blog['addon_tmp']) {
	        $session->blog['addon'] = split(",", $session->blog['addon_tmp']);
	        if (!empty($session->blog['addon'][1])) {
	          print "<a href=\"".$session->blog['addon'][1]."\" target=\"_blank\" ".($config->use_google_nofollow?"rel=\"nofollow\"":"").">[".$session->blog['addon'][0]."]</a>&nbsp;&nbsp;";
	        }
	      }
	    } else {
	      print "&nbsp;";
	    }
	  ?>
	  </span>
         </td>
       </tr>
<!-- eof $Id: footer.php,v 1.2 2005/01/31 09:32:27 hunter Exp $ -->
