<script>
$('#update_form').on("submit", function(event){  
  event.preventDefault();  
  if($('#enama').val() == "")  
  {  
   alert("Mohon Isi Nama ");  
  }  
  else if($('#epoli').val() == '')  
  {  
   alert("Mohon Isi Poli");  
  }  
 
  else  
  {  
   $.ajax({  
    url:"update.php",  
    method:"POST",  
    data:$('#update_form').serialize(),  
    beforeSend:function(){  
     $('#update').val("Updating");  
    },  
    success:function(data){  
     $('#update_form')[0].reset();  
     $('#editModal').modal('hide');  
     $('#employee_table').html(data);  
    }  
   });  
  }  
 });
</script>
<?php 
if(isset($_POST["employee_id"]))
{
 $output = '';
 include "../config.php";
 $data = mysqli_query($koneksi, "SELECT * FROM dokter  WHERE id_dokter = '".$_POST["employee_id"]."'");
    $d = mysqli_fetch_array($data);
     $output .= '
     <form method="post" id="update_form">
     <label>Nama Dokter</label>
     <input type="hidden" name="id_dokter" id="id_dokter" value="'.$_POST["employee_id"].'" class="form-control" />
     <input type="text" name="nama_dokter" id="enama" value="'.$d['nama_dokter'].'" class="form-control" />
     <br />
     <label>Nama Poli</label>
     <input type="text" name="nama_poli" id="epoli" value="'.$d['nama_poli'].'" class="form-control" />
     <br />
     <input type="submit" name="update" id="update" value="Update" class="btn btn-success" />

    </form>
     ';
    echo $output;
}
?>