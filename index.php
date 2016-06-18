<html>
    <body>
        <h2>tugas</h2>
        <form method="post" action="index.php">
        <table width="500" border="0" cellspacing="1" cellpadding="2">
        <tr>
            <td width="100">kode_barang</td>
            <td><input name="kode_barang" type="text" id="kode_barang" placeholder="kode_barang"></td>
        </tr>
        <tr>
            <td width="120">nama_barang</td>
            <td><input name="nama_barang" type="text" id="nama_barang" placeholder="nama_barang"></td>
        </tr>
        
       <tr>
            <td width="110"> </td>
            <td>
                <input name="simpan" type="submit" id="simpan" value="Simpan">
            </td>
        </tr>
        </table>
    </form>
        <?php
            if(isset($_POST['simpan']))
            {
            $dbhost = 'localhost';
            $dbuser = 'root';
            $dbpass = '';
            $koneksi = mysql_connect($dbhost, $dbuser, $dbpass);
            if(! $koneksi )
            {
              die('Gagal Koneksi: ' . mysql_error());
            }
             
            if(! get_magic_quotes_gpc() )
            {
               $kode = addslashes ($_POST['kode_barang']);
               $nama = addslashes ($_POST['nama_barang']);
               
            }
            else
            {
               $kode = $_POST ['kode_barang'];
               $nama = $_POST ['nama_barang'];
               
            }
            
            //Memasukkan data kedalam tabel mahasiswa
            $sql = "INSERT INTO db_barang ".
                   "(kode_barang,nama_barang) ".
                   "VALUES('$kode','$nama')";
            mysql_select_db('tugas');
            $tambahdata = mysql_query( $sql, $koneksi );
            if(! $tambahdata )
            {
              die('Gagal Tambah Data: ' . mysql_error());
            }
            echo "Berhasil tambah data\n <br>";
            
            //Mengambil data dari tabel mahasiwa
            $sql = "SELECT kode_barang,nama_barang FROM db_barang";
            mysql_select_db('tugas');
            $hasil = mysql_query($sql);
            
            // Hasil Inputan
            while ( $row = mysql_fetch_assoc($hasil) ) {
                echo "<br>";
                echo "kode barang: " . $row["kode_barang"]. " - Nama: " . $row["nama_barang"]."<br>";
            }
            mysql_close($koneksi);
            }
            else
            {
            }
        ?>
    </body>
</html>
