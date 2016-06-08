<?php
$server = "localhost";
$username = "root";
$password ="";
$database = "wisata_db";

mysql_connect($server, $username, $password) or die("<h1>Koneksi Mysql Error : </h1>" . mysql_error());
mysql_select_db($database) or die("<h1>Koneksi Kedatabase Error : </h1>" . mysql_error());

@$operasi = $_GET['operasi'];

switch ($operasi) {
	case "view_nm_kendaraan": 

	$query_tampil_nm_kendaraan = mysql_query("SELECT * FROM nm_kendaraan") or die(mysql_error());
	 $data_array = array();
        while ($data = mysql_fetch_assoc($query_tampil_nm_kendaraan)) {
            $data_array[] = $data;
        }
        echo json_encode($data_array);

        //print json_encode($data_array);
        //[{"id":"1","jenis":"motor","plat":"5360A","merk":"Yamaha"},{"id":"2","jenis":"Berkat Junaidi Banurea","plat":"Sidikalang","merk":"Yamaha"}]

break;
    case "insert_nm_kendaraan":
        /* Source code untuk Insert data */
        @$jenis = $_GET['jenis'];
        @$plat = $_GET['plat'];
        @$merk = $_GET['merk'];
        $query_insert_data = mysql_query("INSERT INTO nm_kendaraan (jenis, plat, merk) VALUES('$jenis', '$plat', '$merk')");
        if ($query_insert_data) {
            echo "Data Berhasil Disimpan";
        } else {
            echo "Error Insert Nama Kendaraan " . mysql_error();
        }

   break;
    case "get_nm_kendaraan_by_id":
        /* Source code untuk Edit data dan mengirim data berdasarkan id yang diminta */
        @$id = $_GET['id'];

        $query_tampil_nm_kendaraan = mysql_query("SELECT * FROM nm_kendaraan WHERE id='$id'") or die(mysql_error());
        $data_array = array();
        $data_array = mysql_fetch_assoc($query_tampil_nm_kendaraan);
        echo "[" . json_encode($data_array) . "]";

break;
    case "update_nm_kendaraan":
        /* Source code untuk Update Nama Kendaraan */
        @$jenis = $_GET['jenis'];
        @$plat = $_GET['plat'];
        @$merk = $_GET['merk'];
        @$id = $_GET['id'];
        $query_update_nm_kendaraan = mysql_query("UPDATE nm_kendaraan SET jenis='$jenis', plat='$plat', merk='$merk' WHERE id='$id'");
        if ($query_update_nm_kendaraan) {
            echo "Update Data Berhasil";
        } else {
            echo mysql_error();
        }

break;
    case "delete_nm_kendaraan":
        /* Source code untuk Delete Nama Kendaraan */
        @$id = $_GET['id'];
        $query_delete_nm_kendaraan = mysql_query("DELETE FROM nm_kendaraan WHERE id='$id'");
        if ($query_delete_nm_kendaraan) {
            echo "Delete Data Berhasil";
        } else {
            echo mysql_error();
        }

        break;

        case "view_nm_pengunjung": 

	$query_tampil_nm_pengunjung = mysql_query("SELECT * FROM nm_pengunjung") or die(mysql_error());
	 $data_array = array();
        while ($data = mysql_fetch_assoc($query_tampil_nm_pengunjung)) {
            $data_array[] = $data;
        }
        echo json_encode($data_array);

        //print json_encode($data_array);
        //[{"id":"1","jenis":"motor","plat":"5360A","merk":"Yamaha"},{"id":"2","jenis":"Berkat Junaidi Banurea","plat":"Sidikalang","merk":"Yamaha"}]

break;
    case "insert_nm_pengunjung":
        /* Source code untuk Insert data */
        @$nama = $_GET['nama'];
        @$alamat = $_GET['alamat'];
        @$kontak = $_GET['kontak'];
        $query_insert_data = mysql_query("INSERT INTO nm_pengunjung (nama, alamat, kontak) VALUES('$nama', '$alamat', '$kontak')");
        if ($query_insert_data) {
            echo "Data Berhasil Disimpan";
        } else {
            echo "Error Insert Nama Pengunjung " . mysql_error();
        }

   break;
    case "get_nm_pengunjung_by_id":
        /* Source code untuk Edit data dan mengirim data berdasarkan id yang diminta */
        @$id = $_GET['id'];

        $query_tampil_nm_pengunjung = mysql_query("SELECT * FROM nm_pengunjung WHERE id='$id'") or die(mysql_error());
        $data_array = array();
        $data_array = mysql_fetch_assoc($query_tampil_nm_pengunjung);
        echo "[" . json_encode($data_array) . "]";

break;
    case "update_nm_pengunjung":
        /* Source code untuk Update Nama Pengunjung */
        @$nama = $_GET['nama'];
        @$alamat = $_GET['alamat'];
        @$kontak = $_GET['kontak'];
        @$id = $_GET['id'];
        $query_update_nm_pengunjung = mysql_query("UPDATE nm_pengunjung SET nama='$nama', alamat='$alamat', kontak='$kontak' WHERE id='$id'");
        if ($query_update_nm_pengunjung) {
            echo "Update Data Berhasil";
        } else {
            echo mysql_error();
        }

break;
    case "delete_nm_pengunjung":
        /* Source code untuk Delete Nama Pengunjung */
        @$id = $_GET['id'];
        $query_delete_nm_pengunjung = mysql_query("DELETE FROM nm_pengunjung WHERE id='$id'");
        if ($query_delete_nm_pengunjung) {
            echo "Delete Data Berhasil";
        } else {
            echo mysql_error();
        }

        break;

        case "view_nm_wisata": 

	$query_tampil_nm_wisata = mysql_query("SELECT * FROM nm_wisata") or die(mysql_error());
	 $data_array = array();
        while ($data = mysql_fetch_assoc($query_tampil_nm_wisata)) {
            $data_array[] = $data;
        }
        echo json_encode($data_array);

        //print json_encode($data_array);
        //[{"id":"1","jenis":"motor","plat":"5360A","merk":"Yamaha"},{"id":"2","jenis":"Berkat Junaidi Banurea","plat":"Sidikalang","merk":"Yamaha"}]

break;
    case "insert_nm_wisata":
        /* Source code untuk Insert data */
        @$nama = $_GET['nama'];
        @$jenis = $_GET['jenis'];
        @$tgl_buat = $_GET['tgl_buat'];
        $query_insert_data = mysql_query("INSERT INTO nm_wisata (nama, jenis, tgl_buat) VALUES('$nama', '$jenis', '$tgl_buat')");
        if ($query_insert_data) {
            echo "Data Berhasil Disimpan";
        } else {
            echo "Error Insert Nama Wisata " . mysql_error();
        }

   break;
    case "get_nm_wisata_by_id":
        /* Source code untuk Edit data dan mengirim data berdasarkan id yang diminta */
        @$id = $_GET['id'];

        $query_tampil_nm_wisata = mysql_query("SELECT * FROM nm_wisata WHERE id='$id'") or die(mysql_error());
        $data_array = array();
        $data_array = mysql_fetch_assoc($query_tampil_nm_wisata);
        echo "[" . json_encode($data_array) . "]";

break;
    case "update_nm_wisata":
        /* Source code untuk Update Nama Kendaraan */
        @$nama = $_GET['nama'];
        @$jenis = $_GET['jenis'];
        @$tgl_buat = $_GET['tgl_buat'];
        @$id = $_GET['id'];
        $query_update_nm_wisata = mysql_query("UPDATE nm_wisata SET nama='$nama', jenis='$jenis', tgl_buat='$tgl_buat' WHERE id='$id'");
        if ($query_update_nm_wisata) {
            echo "Update Data Berhasil";
        } else {
            echo mysql_error();
        }

break;
    case "delete_nm_wisata":
        /* Source code untuk Delete  */
        @$id = $_GET['id'];
        $query_delete_nm_wisata = mysql_query("DELETE FROM nm_wisata WHERE id='$id'");
        if ($query_delete_nm_wisata) {
            echo "Delete Data Berhasil";
        } else {
            echo mysql_error();
        }

        break;

        case "view_nm_user": 

    $query_tampil_nm_user = mysql_query("SELECT * FROM user") or die(mysql_error());
     $data_array = array();
        while ($data = mysql_fetch_assoc($query_tampil_nm_user)) {
            $data_array[] = $data;
        }
        echo json_encode($data_array);

        //print json_encode($data_array);
        //[{"id":"1","jenis":"motor","plat":"5360A","merk":"Yamaha"},{"id":"2","jenis":"Berkat Junaidi Banurea","plat":"Sidikalang","merk":"Yamaha"}]

break;
    case "insert_nm_user":
        /* Source code untuk Insert data */
        @$nama = $_GET['nama'];
        @$password = $_GET['password'];
        @$alamat = $_GET['alamat'];
        @$umur = $_GET['umur'];
        $query_insert_data = mysql_query("INSERT INTO user (nama, password, alamat, umur) VALUES('$nama', '$password', '$alamat', '$umur')");
        if ($query_insert_data) {
            echo "Data Berhasil Disimpan";
        } else {
            echo "Error Insert Nama User " . mysql_error();
        }

   break;
    case "get_nm_user_by_id":
        /* Source code untuk Edit data dan mengirim data berdasarkan id yang diminta */
        @$id = $_GET['id'];

        $query_tampil_nm_user = mysql_query("SELECT * FROM user WHERE id='$id'") or die(mysql_error());
        $data_array = array();
        $data_array = mysql_fetch_assoc($query_tampil_nm_user);
        echo "[" . json_encode($data_array) . "]";

break;

    case "update_nm_user":
        /* Source code untuk Update Nama Kendaraan */
        @$nama = $_GET['nama'];
        @$password = $_GET['password'];
        @$alamat = $_GET['alamat'];
        @$umur = $_GET['umur'];
        @$id = $_GET['id'];
        $query_update_nm_user = mysql_query("UPDATE user SET nama='$nama', password='$password', alamat='$alamat', umur='$umur' WHERE id='$id'");
        if ($query_update_nm_user) {
            echo "Update Data Berhasil";
        } else {
            echo mysql_error();
        }

break;
    case "delete_nm_user":
        /* Source code untuk Delete Nama Pengunjung */
        @$id = $_GET['id'];
        $query_delete_nm_user = mysql_query("DELETE FROM user WHERE id='$id'");
        if ($query_delete_nm_user) {
            echo "Delete Data Berhasil";
        } else {
            echo mysql_error();
        }

        break;


    default:
        break;

}
?>