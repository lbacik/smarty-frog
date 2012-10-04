{strip}{* smarty *}
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
   "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
 <meta http-equiv="Content-type" content="text/html; charset=UTF-8" />
 <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body style="margin: 0; padding: 0;">
	
	{config_load file="default.conf"}

	{*
		jeżeli nie ma podanej strony w danych we ($smarty.get) to page=default,
		jeżeli plik strony nie istnieje to to jest problem serwera www

	*}
	
	{page_load default=$smarty.config.tpl_default data=$smarty.get assign=page}

	{include file=`$page`}	

</body>
</html>
{/strip}
