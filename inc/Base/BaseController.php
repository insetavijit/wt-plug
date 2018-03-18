<?php 

namespace Inc\Base ;





class BaseController
{
    
    public function plug_info()
    {
        $plugin_url = plugin_dir_url( dirname( __FILE__ , 2) ) ;
        $parts = explode ( '/' ,$plugin_url ) ;
        return [
            'NAME' => $parts [ count($parts) - 2 ],
            'URL'=> $plugin_url ,
            'PATH'=> plugin_dir_path( dirname( __FILE__ , 2)),
            'SLUG'=> 'ins_wp_plug',
            'BASENAME'=> INS_PLUGIN_BASENAME ,
            'CSS_FILE' => 'wt_style',
            'JS_FILE' => 'wt_script'
        ];
    }
}