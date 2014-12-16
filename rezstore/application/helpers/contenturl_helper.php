<?php
function get_BasePath($object){
 return base_url('assets/'.$object);
}
function site($object=''){
 return site_url('shop/'.$object);
}

function images($object){
 return get_BasePath('images/'.$object);
}

function css($filename){
 return get_BasePath('css/'.$filename);
}

function js($object){
 return get_BasePath('js/'.$object);
}




//end of file table-helper.php
