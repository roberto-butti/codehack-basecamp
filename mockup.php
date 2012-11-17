<?php
$v = array("type"=> "HQ","level" => "MEDIUM","val"=>"6.1", "timestamp"=> "1353205650", "lat"=>"45.563101016195546", "lng"=> "12.42467099999999");

$extra=array("description"=> "Roncade", "depth"=>"10km");
$v["extra"]= $extra;
echo json_encode($v);