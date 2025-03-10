<?php
include 'connectdb.php';

if ($_SERVER['REQUEST_METHOD'] = "POST"){

    if(isset($_POST['id']) && is_numeric(($_POST['id']))){

        $id = $_POST['id'];

        $data = $link->prepare("DELETE FROM Student WHERE id = ?");
        $data->bind_param("i", $id);

        if($data->execute()){
            echo "record deleted successfully";
        }
        else{
            echo "error deleting data";
        }

        $data->close();
        $link->close();
    }
    else{
        echo "Invalid request.";
    }
}else{
    echo "Unauthorized access.";
}
?>