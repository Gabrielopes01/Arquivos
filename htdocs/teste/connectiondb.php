<?php

$server_nm = "CRMNOTE_18\SQLEXPRESS4";
$connection = array( "Database"=>"teste", "UID"=>"", "PWD"=>"" );
$conn = sqlsrv_connect($server_nm, $connection);

if ( $conn ) {
    echo "Conexão Estabelecida";
}else{
    echo "Conexão Não estabelecida";
    die( print_r( sqlsrv_errors(), true ) );
}



?>