<script type="text/javascript" src="tinymce/jscripts/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript" src="tinymce/jscripts/tiny_mce/plugins/tinybrowser/tb_tinymce.js.php"></script>
<script type="text/javascript">
tinyMCE.init({
	// General options
	mode : "exact",
  elements : "tiny",
	language : "cs",
	entity_encoding : "raw",
  theme : "advanced",
	plugins : "safari,spellchecker,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,imagemanager,filemanager",

	// Theme options
	theme_advanced_buttons1 : "newdocument,|,paste,pastetext,pasteword,|,bold,italic,underline,strikethrough,formatselect,fontselect,fontsizeselect,forecolor,|,justifyleft,justifycenter,justifyright,justifyfull,bullist,numlist,|,insertfile",
	theme_advanced_buttons2 : "undo,redo,|,link,unlink,anchor,image,media,iespell,cleanup,code,tablecontrols,hr,removeformat,|,charmap",
	theme_advanced_buttons3 : "",
  theme_advanced_toolbar_location : "top",
	theme_advanced_toolbar_align : "left",
	theme_advanced_statusbar_location : "bottom",
	theme_advanced_resizing : false,
	file_browser_callback : "tinyBrowser",
	theme_advanced_styles : 'Link to Image=gb_image[]',

	// Example content CSS (should be your site CSS)
	content_css : "css/example.css",

	// Drop lists for link/image/media/template dialogs
	template_external_list_url : "js/template_list.js",
	external_link_list_url : "js/link_list.js",
	external_image_list_url : "js/image_list.js",
	media_external_list_url : "js/media_list.js",
	// Replace values for the template plugin
	template_replace_values : {
		username : "Some User",
		staffid : "991234"
	}
});
</script>