<!-- $Id: all_footer.php,v 1.1 2005/05/11 07:38:50 hunter Exp $ -->
    <tr>
    <? if ($session->sub <> "all"): ?>
     <td class="t-border" align="right" valign="middle" colspan="2" id="footer">
      <span class="topiclinx">
	<a href="<?= $session->utils->makeHRURL("?module=".$session->module."&action=keys&sub=all"); ?>">[<?= $i18n->allkeys; ?>]</a>
    <? else: ?>
     <td align="right" valign="middle" colspan="2" id="footer">
      <span class="topiclinx">&nbsp;
    <? endif; ?>
      </span>
     </td>
    </tr>
<!-- eof $Id: all_footer.php,v 1.1 2005/05/11 07:38:50 hunter Exp $ -->
