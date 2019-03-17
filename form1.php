<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="row">
        <div class="col -sm-4"></div>
        <div class="col -sm-4" style="background-color:lavender">
        <form class="form-horizontal" method="POST" action="" name="form">
            <h1 style="text-align:center">Form</h1>
            <div class="form-group">
              <label class="control-label" for="nama">Nama:</label>
              <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama" name="nama">
              <span id="error_nama"></span>
            </div>
            <div class="form-group">
              <label class="control-label" for="pwd">NIM:</label>
              <input type="text" class="form-control" id="nim" placeholder="Masukkan NIM" name="nim">
              <span id="error_nim"></span>
            </div>
            <label class="checkbox-inline"><input type="checkbox" required="required"> I accept the <a href="#">Terms of Use</a> &amp; <a href="#">Privacy Policy</a></label>
            <br>
            <input type="button" onclick="kirim()" value="kirim">
        </form>

        <div class="hint-text" style="text-align:center" >Already have an account? <a href="#">Login here</a></div>

        <?php
		if(isset($_POST["nama"]) && $_POST["nim"]) {
			echo "<br>Nama : ".$_POST["nama"];
			echo "<br>NIM : ".$_POST["nim"];
		}
	    ?>
        </div>
        <div class="col -sm-4"></div>
    </div>

    <script>
        function kirim(){
            var form = document.getElementsByName("form");
            var nama = document.getElementById("nama").value;
            var nim = document.getElementById("nim").value;
            
            if(nama !="" && nim !=""){
                form[0].submit();
            }
            else{
                if (nama==""){
                    document.getElementById("error_nama").innerHTML = "nama tidak boleh kosong";
                }
                if (nim==""){
                    document.getElementById("error_nim").innerHTML = "nim tidak boleh kosong";
                }
            }
        }
    </script>

</body>
</html>