<?php
// Validate if a file was uploaded
if ($_FILES['file']['error'] === UPLOAD_ERR_OK) {
    $tempFile = $_FILES['file']['tmp_name'];
    $uploadPath = 'uploads/'; // Your desired upload directory

    // Create a unique file name
    $newFilename = uniqid() . '_' . $_FILES['file']['name'];
    $targetFile = $uploadPath . $newFilename;

    // Move the uploaded file to the specified directory
    if (move_uploaded_file($tempFile, $targetFile)) {
        // Return the URL of the uploaded file
        echo $targetFile;
    } else {
        http_response_code(500);
        echo 'Failed to move uploaded file.';
    }
} else {
    http_response_code(400);
    echo 'File upload error.';
}
?>