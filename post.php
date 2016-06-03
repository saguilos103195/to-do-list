<?php

$file = "to-do.txt";

$title = $_POST['title'];
$message = $_POST['message'];
$date = $_POST['date'];

$json = file_get_contents($file);

$arr_data = json_decode($json);


foreach ($arr_data as $data) {
    echo $data . "\n";
}



if($arr_data == null)
    {
        $id = 2;
    }
else
    {
        $id = count($arr_data) + 1;
    }

$todo['list'] = array('id' => $id,
                    'title' => $title,
                    'message' => $message,
                    'date' => $date);



 if($arr_data == null)
    {
        array_push($arr_data[], $todo);
    }
array_push($arr_data, $todo);
$json = json_encode($arr_data, JSON_PRETTY_PRINT);

            if(file_put_contents($file, $json)) {
                echo "Succesfully Added";
            }
            else
                echo "error";


?>