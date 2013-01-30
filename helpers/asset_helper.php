<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * CodeIgniter Asset Helpers
 *
 * @author      Jan D. Jorgensen
 * @link        https://github.com/jandjorgensen/codeigniter-toolkit
 */

// ------------------------------------------------------------------------

if(!function_exists('base_url')){
    get_instance()->load->helper('url');
}

/**
 * @param string
 * @return string path to requested asset folder, or root if it does not exist
 */
if(!function_exists("asset_url")){
    function asset_url($dir = "root"){
        $CI =& get_instance();
        $assetPaths = $CI->config->item("asset_path");

        if($dir!=="root" && array_key_exists($dir, $assetPaths)){
            return base_url() . $assetPaths["root"] . $assetPaths[$dir];
        }else{
            return base_url() . $assetPaths["root"];
        }
    }
}

/**
 * @param string
 * @return  string script tag with src to javascript asset
 */
if(!function_exists("asset_js")){
    function asset_js($src){
        $path = asset_url('js') . $src;
        return "<script type=\"text/javascript\" src=\"$path\"></script>";
    }
}

/**
 * @param string
 * @return  string css link tag with href to css asset
 */
if(!function_exists("asset_css")){
    function asset_css($href){
        $path = asset_url('css') . $href;
        return "<link rel=\"stylesheet\" href=\"$path\" />";
    }
}

/* End of file asset_helper.php */
/* Location: ./application/helpers/asset_helper.php */