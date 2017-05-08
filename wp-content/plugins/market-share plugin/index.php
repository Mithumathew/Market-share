<?php
/*
Plugin Name: Device Market Share
*/

function market_share_shortcodes_init()
{
    function market_share_shortcode($atts = [], $content = null)
    {
        $content .= <<<EOT
	
    <div ng-app="plunker" ng-controller="MainCtrl">
    
    <nvd3 options="options" data="data"></nvd3>
    
    <br><a href="http://krispo.github.io/angular-nvd3/" target="_blank" style="float: right;">See more</a>
  </div>

EOT;
        return $content;
    }
    add_shortcode('market-share-plugin', 'market_share_shortcode');
}
add_action('init', 'market_share_shortcodes_init');
/*// bring in external css resources
wp_register_style('your_css_and_js', plugins_url('styles/bootstrap.min.css',__FILE__ ));
wp_enqueue_style('your_css_and_js');
// bring in external javascript resources
wp_register_script( 'your_css_and_js1', plugins_url('js/jquery-1.11.0.min.js',__FILE__ ));
wp_enqueue_script('your_css_and_js1');
wp_register_script( 'your_css_and_js2', plugins_url('js/easeljs.min.js',__FILE__ ));
wp_enqueue_script('your_css_and_js2');
wp_register_script( 'your_css_and_js3', plugins_url('js/js-toolbox.js',__FILE__ ));
wp_enqueue_script('your_css_and_js3');
wp_register_script( 'your_css_and_js4', plugins_url('js/main.js',__FILE__ ));
wp_enqueue_script('your_css_and_js4');
Contact GitHub API Training Shop Blog About
© 2016 GitHub, Inc. Terms Privacy Security Status Help*/