<?php
if (isset($_POST["name"]) && isset($_POST["kategori"]) && isset($_POST["xarct"]) && isset($_POST["cost"])&& isset($_POST["photo"])) {
      
    $connect = mysqli_connect('localhost', 'root', '', 'peace');
    if($connect->connect_error){
        die("Ошибка: " . $connect->connect_error);
    }
    $name = $connect->real_escape_string($_POST["name"]);
    $kategori = $connect->real_escape_string($_POST["kategori"]);
    $xarct = $connect->real_escape_string($_POST["xarct"]);
    $cost = $connect->real_escape_string($_POST["cost"]);
    $photo = $connect->real_escape_string($_POST["photo"]);
    $sql = "INSERT INTO `order` (`id_order`, `name`, `kategori`, `xarct`, `cost`, `photo`) VALUES (NULL, ' $name', '$kategori', '  $xarct', '$cost', ' $photo')";
    if($connect->query($sql)){
         echo "Данные успешно добавлены";
        header('Location: ../index1.php');
    } else{
        echo "Ошибка: " . $connect->error;
    }
    $connect->close();
}
?>
$name