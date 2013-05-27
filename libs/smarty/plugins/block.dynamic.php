<?php
function smarty_block_dynamic($param, $content, &$smarty) 
{ 
    if (isset($smarty->_cache_info['cached_vars'])) { 
        foreach ($smarty->_cache_info['cached_vars'] As $thisvar => $value) { 
            $smarty->_tpl_vars[$thisvar] = $value; 
        } 
    } else { 
        if (isset($param['cached_vars'])) { 
            $vars = explode(',', $param['cached_vars']); 

            foreach ($vars As $thisvar) { 
                $smarty->_cache_info['cached_vars'][$thisvar] = $smarty->_tpl_vars[$thisvar]; 
            } 
        } 
    } 
    return $content; 
} 
?>
