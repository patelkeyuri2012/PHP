<?php
function pr($arr){
    echo '<pre>';
    print_r($arr);
}

function prx($arr){
    echo '<pre>';
    print_r($arr);
    die();
}

function get_safe_value($con,$str){
	if($str!=''){
		$str=trim($str);
		return mysqli_real_escape_string($con,$str);
	}
}

function get_subcat($con, $subcat_id=''){
    $sql="select * from product";
    if($subcat_id!=''){
        $sql.=" where subcategory_id='$subcat_id' order by product_id";
    }
    
    $res=mysqli_query($con,$sql);
    $data=array();
    while($row=mysqli_fetch_assoc($res)){
        $data[]=$row;
    }
    return $data;
}

function get_porduct($con, $type='', $limit='', $product_id=''){
    $sql="select * from product";
        
    if($product_id!=''){
        $sql.=" where product_id='$product_id'";
    }

    if($type=='latest'){
        $sql.=" order by product_id desc";
    }

    if($limit!=''){
        $sql.=" limit $limit";
    }   
    
    $res=mysqli_query($con,$sql);
    $data=array();
    while($row=mysqli_fetch_assoc($res)){
        $data[]=$row;
    }
    return $data;
}


function get_sort($con, $highest='', $lowest='', $newest='', $oldest=''){
    $sql="select * from product";
    if($highest!=''){
        $sql.=" order by product_price desc";
    }
    
    if($lowest!=''){
        $sql.=" order by product_price";
    }

    if($newest!=''){
        $sql.=" order by product_id desc";
    }

    if($oldest!=''){
        $sql.=" order by product_id";
    }
    $res=mysqli_query($con,$sql);
    $data=array();
    while($row=mysqli_fetch_assoc($res)){
        $data[]=$row;
    }
    return $data;
}



?>




