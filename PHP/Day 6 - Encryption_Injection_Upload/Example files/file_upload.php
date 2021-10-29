<!-- enctype="multipart/form-data" is mandatory to be able to upload a file -->
<form enctype="multipart/form-data" method="POST">
    <input type="hidden" name="MAX_FILE_SIZE" value="30000">

    Select the file :
    <input type="file" name="myFile"><br>

    <input type="submit" name="submitBtn" value="Send the file">
</form>

<?php

if (isset($_POST['submitBtn'])) {

    //echo $_FILES['myFile']['name']; // Name of the file

    /*
        Downloaded files are placed in a temporary folder on the server.
        These files must then be saved/moved to the desired location/folder.
    */

    // Is there some errors ? 
    if ($_FILES['myFile']['error'] != UPLOAD_ERR_OK) {
        echo 'Error during upload';
        // die() : stop and exit the script;
        die();
    }

    // 
    $extFoundInArray = array_search($_FILES['myFile']['type'], array(
        'jpg' => 'image/jpeg',
        'png' => 'image/png',
        'gif' => 'image/gif'
    ));

    if ($extFoundInArray == false)
        echo 'File must be image !';
    else {

        // Rename the file

        /*
            $shaFile = sha1_file($_FILES['myFile']['tmp_name']);
            $destinationDir = 'uploads/';
            $nbFile = 0;

            do {
                $fileName = $shaFile . $nbFile . '.' . $extFoundInArray;
                $destinationPath = $destinationDir . $fileName;
                $nbFile++;
            } while (file_exists($destinationPath));
        */


        $destinationDir = 'uploads/';
        $fileName =  $_FILES['myFile']['name'];
        $destinationPath = $destinationDir . $fileName;

        // Try to move/save permanently the file
        if (move_uploaded_file($_FILES['myFile']['tmp_name'], $destinationPath))
            echo 'File was saved';
        else
            echo 'Problem saving the file';
    }
}

?>