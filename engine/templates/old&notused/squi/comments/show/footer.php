<!-- $Id: footer.php,v 1.2 2005/02/01 11:54:13 hunter Exp $ -->
        <tr <?= $session->footer_style; ?> >
         <td class="rbl-border" id="footer" align="left" valign="middle" colspan="2">
	  <span class="topiclinx">
	  <? if ((($session->security->canUser($session->module, $config->right_to_delete) == 1) && (trim($session->comment['author_name']) == trim($session->user['name']))) || ($session->user['isadmin'])): ?>
	    <? if (empty($session->comment['del'])): ?>
	      <a href="javascript:confirmIt('<?= $session->utils->makeHRURL("?module=".$session->module."&action=show&sub=delete&id=".$session->comment['id']."&board=".$session->board."&tid=".$session->tid); ?>')">[<?= $i18n->delete; ?>]</a>&nbsp;&nbsp;
	    <? else: ?>
	      <a href="javascript:confirmIt('<?= $session->utils->makeHRURL("?module=".$session->module."&action=show&sub=undelete&id=".$session->comment['id']."&board=".$session->board."&tid=".$session->tid); ?>')">[<?= $i18n->undelete; ?>]</a>&nbsp;&nbsp;
	    <? endif; ?>
	  <? endif; ?>
	  <a href="javascript:quoteIt('<?= $session->comment['quoted']; ?>', '<?= $session->comment['author_name']; ?>', '<?= $session->utils->hideEMail($session->comment['author_email']); ?>')">[<?= $i18n->cite; ?>]</a></span>
         </td>
       </tr>
<!-- eof $Id: footer.php,v 1.2 2005/02/01 11:54:13 hunter Exp $ -->