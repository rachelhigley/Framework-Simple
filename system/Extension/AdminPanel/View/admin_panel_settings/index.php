<style type="text/css">
label {font-weight: bold;}
div {margin: 20px 0;}
p {margin: 5px 10px;}
input,textarea {margin-left: 10px;}

</style>
<h1>Settings</h1>
<form method="POST" action="<?= Asset::createUrl('AdminPanelSettings','index')?>">
	<?php View::render("admin_panel_settings/_form",$settings,array("path_to_views"=>"/Extension/AdminPanel/View/")) ?>
<div>
	<input type="submit" value="save" />
</div>

</form>