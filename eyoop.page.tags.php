<?PHP

/* ====================
Seditio - Website engine
Copyright Neocrome
http://www.neocrome.net
[BEGIN_SED]
File=plugins/eyoop/eyoop.php
Version=100
Updated=2006-jul-25
Type=Plugin
Author=riptide
Description=
[END_SED]

[BEGIN_SED_EXTPLUGIN]
Code=eyoop
Part=page
File=eyoop.page.tags
Hooks=page.tags
Tags=
Order=10
[END_SED_EXTPLUGIN]
==================== */


if (!$usr['isadmin'] && $pag['page_ownerid'] == $usr['id'])
  {
  $t-> assign(array(
  	"PAGE_ADMIN_COUNT" => $pag['page_count'],
  	"PAGE_ADMIN_UNVALIDATE" => "<a href=\"plug.php?e=eyoop&amp;a=unvalidate&amp;id=".$pag['page_id']."&amp;".sed_xg()."\">".$L['Putinvalidationqueue']."</a>",
  	"PAGE_ADMIN_EDIT" => "<a href=\"plug.php?e=eyoop&amp;id=".$pag['page_id']."&amp;r=list\">".$L['Edit']."</a>"
  	));
  
  $t->parse("MAIN.PAGE_ADMIN");
  }

?>
