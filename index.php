<?php
include "connect.php";
$sql = "SELECT id,nama,email,tel,tanggal_lahir,hobi " . 
        "FROM bukutelepon";
        $res = mysqli_query($link,$sql);
        ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
    <script src="js/popper.min.js"></script>
<script src="js/jquery.min.js"></script>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="styles.css">
  <script src="js/bootstrap.min.js"></script>
 <script>
    $(document).ready(function() {
	$('.delete').click(function() {
		var href = $(this).attr('href');
		$('#dataConfirmOK').attr('href', href);
	                            });
        });
        </script>
        <script>
    $(document).ready(function() {
	$('.edit').click(function() {
		var href = $(this).attr('href');
		$('#dataConfirmedit').attr('href', href);
	              });
        });
        </script>
    <title>Data</title>
</head>
<body style="background-color:#2980b9;">
<div class="container" >
    <div class="row justify-content-center " style="margin-top:50px;">
        <div class="col-xm-6 offset-xm-3">
            <div  class="card" style="width: 60rem;">
                    <table class="table table-bordered" style=" margin-bottom:0px;";>
                        <tr><th class="text-center"colspan =" 8"  > Biodata </th></tr>
                        <tr>
                            <th class="table-primary">ID</th>
                            <th class="table-primary">Nama</th>
                            <th class="table-primary">Email</th>
                            <th class="table-primary">Phone</th>
                            <th class="table-primary">Tanggal Lahir</th>
                            <th class="table-primary">Hobi</td>
                            <th class="table-primary" colspan=2>Action</th>
                        </tr>

<?php
        while ($baris = mysqli_fetch_array($res,MYSQLI_ASSOC)){
            $id= $baris['id'];
            echo "<tr>";
            echo "<td>". $baris['id']. "</td>";
            echo "<td>". $baris['nama']. "</td>";
            echo "<td>". $baris['email']. "</td>";
            echo "<td>". $baris['tel']. "</td>";
            echo "<td>". $baris['tanggal_lahir']. "</td>";
            echo "<td>". $baris['hobi']. "</td>";
            echo '<td><a data-toggle="modal" data-target="#exampleModal"  type="button" class="btn btn-danger delete "  href="delete1.php?id='.$baris['id'].'">DELETE</a></td>';
            echo '<td><a  data-toggle="modal" data-target="#exampleEdit"  type="button" class="btn btn-warning  edit " href="edit1.php?id='.$baris['id'].'" >EDIT</a></td>';
            echo "</tr>";
           
        }

        
echo "</table>";
        mysqli_close($link);
        ?>
        </table>
                    <a href="form.html" style="heigth= width:150px; margin-top:0rem; margin-left:50rem;" class="btn btn-outline-dark btn-sm">Kembali Ke Form!</a>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Penghapusan Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      Anda Yakin Akan Menghapus data?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <a type="button" id="dataConfirmOK"class="btn btn-danger btnok">Hapus</a>
      </div>
    </div>
  </div>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Penghapusan Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      Anda Yakin Akan Mengedit data?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <a type="button" id="dataConfirmedit"class="btn btn-warning ">Edit</a>
      </div>
    </div>
  </div>
</div>
</body>
</html>