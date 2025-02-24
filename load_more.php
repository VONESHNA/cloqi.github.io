<?php
require_once 'header.php';
require_once 'topbar.php';
$cats=Dbops::getCategory($con);
$cats['n']>0?$categories=$cats['f']:$categories=[];
$pds=Dbops::getProduct($con);
$pds['n']>0?$products=$pds['f']:$products=[];


foreach ($categories as $k => $v) {
    $catids[]=$v['id'];
}
$posts=$products;
echo json_encode($posts);
?>
