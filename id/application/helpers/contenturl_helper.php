<?php
function get_BasePath($object){
 return base_url('assets/'.$object);
}
function site($object=''){
 return site_url('shop/'.$object);
}
function admin_site($object=''){
 return site_url('admin/'.$object);
}

function images($object,$type=''){
 if($type !== "") return get_BasePath('images/products/'.$object);
 return get_BasePath('images/'.$object);
}

function css($filename){
 return get_BasePath('css/'.$filename);
}

function js($object){
 return get_BasePath('js/'.$object);
}




//end of file table-helper.php
