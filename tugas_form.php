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
            <h1 style="text-align:center">Sign Up</h1>
            <div class="form-group">
              <label class="control-label" for="nama">Username:</label>
              <input type="text" class="form-control" id="nama" placeholder="Masukkan Username" name="nama">
              <span id="error_nama"></span>
            </div>
            <div class="form-group">
              <label class="control-label" for="usermail">E-mail:</label>
              <input type="text" class="form-control" id="usermail" placeholder="Masukkan E-mail" name="usermail">
              <span id="error_mail"></span>
            </div>
            <div class="form-group">
              <label class="control-label" for="pwd">Password:</label>
              <input type="password" class="form-control" id="pwd" placeholder="Masukkan Password" name="pwd">
              <span id="error_pwd"></span>
            </div>
            <div class="form-group">
              <label class="control-label" for="confpwd">Konfirmasi Password:</label>
              <input type="password" class="form-control" id="confpwd" placeholder="Masukkan Password" name="confpwd">
              <span id="error_confpwd"></span>
            </div>

            <label class="checkbox-inline"><input type="checkbox" required="required"> Saya bersedia menerima <a href="#">Ketentuan layanan</a> &amp; <a href="#">Kebijakan Privasi</a></label>
            <span id="error_checkbox"></span>
            <br>
            <button type="button" class="btn btn-primary btn-block" onclick="kirim()">Buat Akun</button>

        </form>
        <br>
        <div class="hint-text" style="text-align:center" >Sudah punya akun? <a href="#">Login disini</a></div>

        <?php
		if(isset($_POST["nama"]) && $_POST["usermail"] && $_POST["pwd"]) {
			echo "<br>Nama : ".$_POST["nama"];
            echo "<br>E-mail : ".$_POST["usermail"];
            echo "<br>Password : ".$_POST["pwd"];
		}
	    ?>
        </div>
        <div class="col -sm-4"></div>
    </div>

    <script>
        function kirim(){
            var form = document.getElementsByName("form");
            var nama = document.getElementById("nama").value;
            var usermail = document.getElementById("usermail").value;
            var pwd = document.getElementById("pwd").value;
            var confpwd = document.getElementById("confpwd").value;
            
            if(nama !="" && usermail !="" && pwd !="" && pwd == confpwd){
                form[0].submit();
            }
            else{
                if (nama==""){
                    document.getElementById("error_nama").innerHTML = "nama tidak boleh kosong";
                }
                if (usermail==""){
                    document.getElementById("error_mail").innerHTML = "E-mail tidak boleh kosong";
                }
                if (pwd==""){
                    document.getElementById("error_pwd").innerHTML = "Password tidak boleh kosong";
                }
                if (confpwd==""){
                    document.getElementById("error_confpwd").innerHTML = "Password tidak boleh kosong";
                }
                if (confpwd !="" && confpwd != pwd){
                    document.getElementById("error_confpwd").innerHTML = "Password harus sama";
                }
            }
        }
    </script>

</body>
</html>
