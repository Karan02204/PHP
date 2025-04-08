<?php
// Contact form to send emails
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['send_email'])) {
    $to = "karanattri022@gmail.com"; // Replace with the recipient's email address
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);
    $headers = "From: " . htmlspecialchars($_POST['email']);

    if (mail($to, $subject, $message, $headers)) {
        echo "Email sent successfully!";
    } else {
        echo "Failed to send email.";
    }
}
?>

<form method="POST">
    <label for="email">Your Email:</label>
    <input type="email" name="email" required>
    <label for="subject">Subject:</label>
    <input type="text" name="subject" required>
    <label for="message">Message:</label>
    <textarea name="message" required></textarea>
    <button type="submit" name="send_email">Send Email</button>
</form>

<?php
// File upload form
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['upload_file'])) {
    $uploadDir = 'uploads/';
    $allowedTypes = ['image/jpeg', 'image/png', 'application/pdf'];
    $maxFileSize = 2 * 1024 * 1024; // 2 MB

    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0755, true);
    }

    if (isset($_FILES['file']) && $_FILES['file']['error'] == UPLOAD_ERR_OK) {
        $fileTmpPath = $_FILES['file']['tmp_name'];
        $fileName = basename($_FILES['file']['name']);
        $fileType = mime_content_type($fileTmpPath);
        $fileSize = $_FILES['file']['size'];

        if (in_array($fileType, $allowedTypes) && $fileSize <= $maxFileSize) {
            $destination = $uploadDir . $fileName;
            if (move_uploaded_file($fileTmpPath, $destination)) {
                echo "File uploaded successfully!";
            } else {
                echo "Failed to move uploaded file.";
            }
        } else {
            echo "Invalid file type or size.";
        }
    } else {
        echo "No file uploaded or an error occurred.";
    }
}
?>

<form method="POST" enctype="multipart/form-data">
    <label for="file">Choose a file to upload:</label>
    <input type="file" name="file" required>
    <button type="submit" name="upload_file">Upload File</button>
</form></form>