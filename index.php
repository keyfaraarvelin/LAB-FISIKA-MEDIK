<html> 
<head> 
            <title> Masukan Data</title> 
</head> 
    <body> 
        <h1>Masukan Identitas Anda<h1> 
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post"> 
            <pre> 
                 Isikan Nama : <input type="text" name="nama"><br><br>
                 Isikan No. Telp : <input type="text" name="telp"><br><br>
                 Isikan Alamat : <textarea name="alamat" rows="4" cols="40"></textarea><br><br>
                <input type="submit" value="TAMPIL"><input type="reset" value="BATAL"> 
            </pre> 
        </form>

        <?php
            $nama = $_POST['nama'];
            $telp = $_POST['telp'];
            $alamat = $_POST['alamat'];
            if(!empty($nama)){ 
            echo "nama : $nama <br>"; }
            if(!empty($telp)){ 
            echo "telp : $telp <br>"; }
            if(!empty($alamat)){ 
            echo "alamat : $alamat <br>"; } 
        ?> 
    </body> 
</html>