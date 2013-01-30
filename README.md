codeigniter-toolkit
===================

Helpers, etc. I wrote to use in Codeigniter projects

##Asset Helper

This makes it easy to handle assets like javascript and css.

###Setup

1. Create a directory for your assets (mine is in the application folder), with a css and javascript subdirectory (and optionally more)
2. Map the location of the asset root and subdirectories.  The following are the only required elements.  Feel free to add more so the `asset_url()` function is more userful.
```$config["asset_path"] = array(
"root" => "application/assets/",
"js" => "js/",
"css" => "css/"
);
```
 
###Usage

####Getting the URL for an asset directory
`asset_url($dir)` will return the URL for the given directory.  If no argument is passed or the name of the directory is not included in the configuration, it will return the URL for the root asset directory.  For example, based on the above configuration, `asset_url('css/')` will return `http://example.com/application/assets/css/`.

####Creating a `<script>` tag from a filename
`asset_js($src)` will return a `<script>` tag with the absolute path to the included file.  For example, based on the above configuration, `asset_js('jquery.js')` will return `<script type="text/javascript" src="http://example.com/application/assets/js/jquery.js"></script>`.

####Creating a css `<link>` tag from a filename
`asset_css($href)` will return a `<link>` tag with the absolute path to the included file.  For example, based on the above configuration, `asset_css('bootstrap.css')` will return `<link rel="stylesheet" href="http://example.com/application/assets/css/bootstrap.css" />`
