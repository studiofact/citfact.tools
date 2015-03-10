<?
$bitrixpath = $_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/citfact.tools/admin/citfact_tools.php";
$localpath = $_SERVER["DOCUMENT_ROOT"]."/local/modules/citfact.tools/admin/citfact_tools.php";
if (file_exists($bitrixpath)) {
	require($bitrixpath);
}
else if (file_exists($localpath)){
	require ($localpath);
}
?>