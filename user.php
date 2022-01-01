<?php
$id=$_GET['id'];
$link=mysqli_connect("localhost","root","","workpath");
$sql="select*from users where id='$id'";
$res=mysqli_query($link,$sql);
$data=array();
while($fina=mysqli_fetch_assoc($res)){
    $data[]=$final;
}
echo $user=json_encode($data);

?>
