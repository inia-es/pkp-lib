<?php
/**
 * Smarty plugin
 * @package Smarty
 * @subpackage plugins
 */


/**
 * Smarty {rem_element} function plugin
 *
 * Type:     function<br>
 * Name:     html_options<br>
 * Input:<br>
 *           
 *           - values     (required if no options supplied) - array
 *           - options    (required if no values supplied) - associative array
 *           - selected   (optional) - string default not set
 *           - output     (required if not options supplied) - array
 * Purpose:  Prints the list of <option> tags generated from
 *           the passed parameters
 * @link http://smarty.php.net/manual/en/language.function.html.options.php {html_image}
 *      (Smarty online manual)
 * @author Monte Ohrt <monte at ohrt dot com>
 * @param array
 * @param Smarty
 * @return string
 * @uses smarty_function_escape_special_chars()
 */
function smarty_function_remove_elm($params, &$smarty)
{
    require_once $smarty->_get_plugin_filepath('shared','escape_special_chars');
    
    $arr = null;
    $key = null;
    $arrb= array();
    $name= null;
//    print_r($params);
    
    foreach($params as $_key => $_val) {
        switch($_key) {
            case 'arr':
                $$_key = (array)$_val;
                
//                print('name='.$_val);
                break;
            
            case 'key':
                $$_key = (string)$_val;
                break;
    
            case 'name':
                $$_key = (string)$_val;
                break;
              }
           } 
 // print_r($name);         
             
              unset($arr[$key]);
//              print("despues en plugin smarty");
              
//               print_r($arr);
                            
               $arrb = array_values($arr); 
               array_splice($arr, -1);
//               print("despues splice");
//               print_r($arr);
//               print_r($params['arr']);
$smarty->assign($name,$arrb);

 //  print(count($cc));

}

/* vim: set expandtab: */

?>
