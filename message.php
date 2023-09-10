<?php
//$_GET, $_POST, $_REQUEST
echo '<pre>';
$response = $_REQUEST;
print_r($response);
//$_FILES
echo '<br/>';
echo $target_dir = "uploads/";
echo '<br/>';
echo $target_path = $target_dir.basename($_FILES['fileUpload']['name']);
echo '<br/>';

$uploadOK = 1;

//$imgaheFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
$check = getimagesize($_FILES['fileUpload']['tmp_name']);
if($check !== false){
    echo 'correct file found';
    echo '<br/>';
    $uploadOK = 1;
    echo $_FILES['fileUpload']['tmp_name'];
    echo '<br/>';
    if(move_uploaded_file($_FILES['fileUpload']['tmp_name'], $target_path)){
        echo 'File uploaded successfully';
    }else{
        echo 'There is some error in directory';
    }
}else{
    echo 'wrong file found';
    $uploadOK = 0;
}

?>