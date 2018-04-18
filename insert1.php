 <?php
include "connect.php";
$nama= $_POST['nama'];
$email = $_POST['email'];
$tel = $_POST['phone'];
$tgl =$_POST['tl'];
$hobi=$_POST['hobi'];
$sql=" INSERT INTO bukutelepon (nama,email,tel,tanggal_lahir,hobi) "
        ."VALUES ('$nama','$email','$tel','$tgl','$hobi')"; 

?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Status</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body style="background-color:#2980b9;">
<div class="container" >
    <div class="row justify-content-center " style="margin-top:50px;">
        <div class="col-xm-6 offset-xm-3" style="">
            <div class="card" style="width: 55rem;">       
             <?php 
             $res=mysqli_query($link,$sql);
if($res){
echo '<h1 style="text-align: center;">DATA BERHASIL DISIMPAN</h1>  ';
echo '<a    type="button" class="btn btn-primary" href="form.html"> Kembali Ke form</a> ';
}else echo mysqli_error($link);
//opsional karena skripnya akan dihentikan otomatis
mysqli_close($link);
?>
            </div>
        </div>      
     </div>
</div>
             
</body>
</html>

  