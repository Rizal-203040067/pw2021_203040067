
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


function add($data) {
    $connect = koneksi();

    $image = htmlspecialchars($data['image']);
    $name = htmlspecialchars($data['name']);
    $date = htmlspecialchars($data['date']);
    $about = htmlspecialchars($data['about']);
    $price = htmlspecialchars($data['price']);

    $query = "INSERT INTO game
                    VALUES
                    ('', '$image', '$name', '$date', '$about', '$price')";

    mysqli_query($connect, $query);

    return mysqli_affected_rows($connect);
}

function delete($id) {
    $connect = koneksi();

    mysqli_query($connect, "DELETE FROM game WHERE id = $id");

    return mysqli_affected_rows($connect);
}

function update($data) {
    $connect = koneksi();

    $id = htmlspecialchars($data['id']);
    $image = htmlspecialchars($data['image']);
    $name = htmlspecialchars($data['name']);
    $date = htmlspecialchars($data['date']);
    $about = htmlspecialchars($data['about']);
    $price = htmlspecialchars($data['price']);

    $query = "UPDATE game
              SET
              image = '$image',
              name = '$name',
              date = '$date',
              about = '$about',
              price = '$price'
              WHERE id = $id
              ";

    mysqli_query($connect, $query);

    return mysqli_affected_rows($connect);
}

?>