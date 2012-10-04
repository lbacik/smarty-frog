<?php

	function smarty_function_page_load($params, &$smarty)
	{
		global $PAGE_KEY, $SMARTY_DIRS, $theme, $common_theme_files;

		$page = $theme . "/" . $params['default'];
		$data = $params['data'];
		
		/* czy klucz $PAGE_KEY istnieje w tablicy $data? */
		
		if(array_key_exists($PAGE_KEY, $data)) {

			/* walidacja wartości $PAGE_KEY */
 			preg_match('/^[a-zA-Z0-9_-]+$/', $data[$PAGE_KEY], $page_names);
			
			if((count($page_names) > 0) 
				&& file_exists($SMARTY_DIRS . "/templates/" . $theme . "/" . 
					$page_names[0] . ".tpl"))
				$page = $theme . "/" . $page_names[0] . ".tpl";
			else	$page = $common_theme_files . "/" . 'error.tpl';

		}
		
		$smarty->assign( $params['assign'], $page );
	}
	
