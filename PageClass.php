<?php 
    
    class Page{}
    
    class Head extends Page{
        private static $metas = [];
        private static function getTag($tag, $datas){
            if(is_array($datas)){
                foreach($datas as $data => $val){
                    $assembly = "<$tag $data = '$val'/>\n";
                }
            }
            return $assembly;
        }
        public static function getMeta(/*$metas*/){
            for($i = 0; $i < func_num_args(); $i++){
                $arg = func_get_arg($i);
                $tags[$i] = self::getTag('meta', $arg);
            }
            return $tags;
        }
        public static function getLink($links){
            return (isset($links))? self::getTag('link', $links) : 'undefined';
        }
        public static function getScript($scripts){
            return (isset($scripts))? self::getTag('script', $scripts) : 'undefined';
        }
    }
   
    class Body extends Page{
        
    }
    
    class HTML{
        public static function parse($html){
            if(isset($html)){
                if(is_array($html)){
                    foreach($html as $h){
                        echo $h;
                    }
                }else if(is_string($html)){
                    echo $html;
                }
            }
        }
    }
    
