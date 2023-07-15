<?php 
    include "connect.php";
    function query($query){
        global $conn;
        $result = mysqli_query($conn, $query);
        $rows = [];
        while ($row = mysqli_fetch_assoc($result)){
            $rows[] = $row;
        }
        return $rows;
    }
    function tambah($data){
        global $conn;
        $nama = $data['nama'];
        $nim = $data['nim'];
        $mata_kuliah = $data['mataKuliah'];
        $dosen = $data['dosen'];
        $presensi = $data['presensi'];
        
        $query = "INSERT INTO presensi (nama, nim, mata_kuliah, dosen, presensi) VALUES ('$nama
        ', '$nim', '$mata_kuliah', '$dosen', '$presensi')";
        mysqli_query($conn, $query);
        return mysqli_affected_rows($conn);
    }
    function update($data){
        global $conn;
        $id = $data['id'];
        $nama = $data['nama'];
        $nim = $data['nim'];
        $mata_kuliah = $data['mataKuliah'];
        $dosen = $data['dosen'];
        $presensi = $data['presensi'];

        $query = "UPDATE presensi SET nama = '$nama', nim = '$nim', mata_kuliah = '$mata_kuliah', dosen = '$dosen', presensi = '$presensi' WHERE id_presensi = '$id'";
        mysqli_query($conn, $query);
        return mysqli_affected_rows($conn);
    }
    function delete($id){
        global $conn;
        mysqli_query($conn, "DELETE FROM presensi WHERE id_presensi = $id");
        return mysqli_affected_rows($conn);
    }
?>