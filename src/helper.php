<?php
if(!function_exists('dd')){
    /**
     * 断点输出
     * @param $data
     * @return void
     */
    function dd(...$data){
        echo '<pre>';
        foreach ($data as $d){
            print_r($d);
        }
        echo '</pre>';
        exit;
    }
}