<?php

function insert($tabla,$data){
    require_once('conexion.php');
    foreach ($data as $i => $value) {
        $campo[]=$i;
        if (is_string($value)){
            $valores[]="'".$value."'";
        }else{
        $valores[]=$value;
        }
    }
    $campo = implode(", ", $campo);
    $valores = implode(", ", $valores);
    $insert = "insert into $tabla($campo)values($valores)";
    $return = mysqli_query($conn, $insert);
    mysqli_close($conn);
}

insert('users',[ 'id' => 10 , 'name' =>'Jacinto', 'email'=>'jaci@to.es','created' =>'2022/08/16']);