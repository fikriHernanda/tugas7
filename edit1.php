<?php
include "connect.php";
$id= $_GET['id'];

$sql = "SELECT id,nama,email,tel,tanggal_lahir,hobi " . 
        "FROM bukutelepon WHERE id='$id'";
        $res = mysqli_query($link,$sql);
        $coba=mysqli_fetch_assoc($res);
     
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
</head>
<body style="background-color:#2980b9;">

<?print_r($coba);?>
    <div class="container" >
                <div class="row justify-content-center " style="margin:50px;">
                    <div class="col-xm-6 offset-xm-3" style="">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                        <form action="#" method ="POST">
                            <div class="form-group">

    <label for="id">ID</label>
    <input type="text"  name="id" class="form-control"  placeholder="<?php echo $coba['id'];?> " disabled><br>
    </div>
                            <div class="form-group">

    <label for="name">Nama</label>
    <input type="text"  name="nama" class="form-control" value="<?php echo $coba['nama'];?>"><br>
    </div>
    <div class="form-group">
             <label for="exampleInputEmail1">Alamat Email</label>
             <input name="email" type="email" class="form-control"  aria-describedby="emailHelp" value="<?php echo $coba['email']; ?>"><br> 
             </div>
   <div class="form-group">
            <label for="phone">Nomor Handphone</label>
            <input name="phone" type="tel" class="form-control" value="<?php echo $coba['tel']; ?>"><br> </div>
   <div class="form-group">
            <label for="tgl">Tanggal Lahir</label>
            <input type="date" class="form-control" name="tl"  required pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}" title="Enter a date in this format YYYY-MM-DD"  value="<?php echo $coba['tanggal_lahir'];?>"><br> 
         </div>   
    <div class="form-group">
    <label for="name">Hobi</label>
    <input type="text" class="form-control" name="hobi" value="<?php echo $coba['hobi'] ;?>" ><br>
    </div> 
    <input type="submit" name="submit" value="Simpan Update" style="float:right;"><br>
    </form>
    </div>
                        </div>        
                    </div>
                </div>
            </div>
</body>
</html>

<?php 
if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $lahir = $_POST['tl'];
	$hobi = $_POST['hobi'];

  $sql1="UPDATE bukutelepon SET nama='$nama', email='$email',tel='$phone',tanggal_lahir='$lahir',hobi='$hobi'
        WHERE id='$id'";

    $hasil=mysqli_query($link,$sql1);
}

if (isset($_POST['submit'])) {
header('location:select.php');
}
?>


