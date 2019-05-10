<?php 
session_start();
include "admin/koneksi.php";

$username = ($_POST['nidn']);
$password = md5($_POST['password']);

if(!empty($password) && empty($username)){
    echo "<script> alert('Username Belum Diisi'); </script>";
    echo "<meta http-equiv='refresh' content='1; url=index.php'>";
}else if(!empty($username) && empty($password)){
    echo "<script> alert('Password Belum Diisi'); </script>";
    echo "<meta http-equiv='refresh' content='1; url=index.php'>";
}else if(empty($username) && empty($password)){
    echo "<script> alert('Username dan Password Belum Diisi'); </script>";
    echo "<meta http-equiv='refresh' content='1; url=index.php'>";

}else if(!empty($username)&& !empty($password)){
    
    $sql = "SELECT * FROM user WHERE nidn = '$username' and password = '$password' LIMIT 1";
    $query = mysqli_query($koneksi,$sql);
    $hasil = mysqli_num_rows($query);
    
    // var_dump($hasil);
    if($hasil > 0){
    $data = mysqli_fetch_assoc($query);

    // cek jika user login sebagai admin
    if($data['level']=="Admin"){

        // buat session login dan username
        $_SESSION['nidn'] = $username;
        $_SESSION['password'] = $password;
        $_SESSION['level'] = "Admin";
        // alihkan ke halaman dashboard admin
        header("Location:admin/index.php");


?>

<?php   
        }
        else if($data['level']=="Dosen"){
        // buat session login dan username
        $_SESSION['nidn'] = $username;
        $_SESSION['password'] = $password;
        $_SESSION['level'] = "Dosen";
        // alihkan ke halaman dashboard pegawai
        header("Location:dosen/index.php");

    // cek jika user login sebagai pengurus
}  
}else {
    echo "<script> alert('Akun tidak terdaftar..'); </script>";
            echo "<meta http-equiv='refresh' content='1; url=index.php'>";  
    }

?> 
    
<?php } ?>