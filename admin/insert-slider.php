<?php
include "config.php"; // Your PDO connection

if (isset($_POST['insert'])) {

    $title = $_POST['title'];
    $subtitle = $_POST['subtitle'];
    $link = $_POST['link'];

    // Image upload
    $imageName = $_FILES['image']['name'];
    $imageTmp = $_FILES['image']['tmp_name'];

    // Save image to the "uploads" folder
    $uploadPath = "uploads/" . $imageName;

    if (move_uploaded_file($imageTmp, $uploadPath)) {

        // Save path exactly like your sample: assets/img/slider1.jpg
        $image_url = $uploadPath;

        // Insert into database
        $sql = "INSERT INTO slider (title, subtitle, image_url, link)
                VALUES (:title, :subtitle, :image_url, :link)";

        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            ':title' => $title,
            ':subtitle' => $subtitle,
            ':image_url' => $image_url,
            ':link' => $link
        ]);

        header("Location: view-slider.php");
        exit();

    } else {
        echo "❌ Image upload failed!";
    }
}
?>
