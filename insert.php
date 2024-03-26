<?php
//khai bao thong tin
$ser="localhost";//server
$u="root";//user
$p="";//pass
$db="vunlph30245_b";//ten database
//tao ket noi csdl
$conn= new mysqli($ser,$u,$p,$db);
//lenh insert
$sql="insert into test (HoTen,SoDT,Ma) values ('Vu','0123456789',1)";
//thuc hien insert
if($conn->query($sql)===TRUE){
    echo "Da insert thanh cong";
}
else
{
    echo "Co loi: ".$conn->error;
}
$conn->close();//dong ket noi

?>