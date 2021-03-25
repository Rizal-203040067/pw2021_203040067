
<?php 

function koneksi() {
    $connect = mysqli_connect("localhost", "root", "");
    mysqli_select_db($connect, "pw_tubes_203040067");

    return $connect;
}

function query($sql) {
    $connect = koneksi();
    $result = mysqli_query($connect, "$sql");
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

?>