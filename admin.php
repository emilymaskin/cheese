<?php
	$error = '';
	if (!empty($_POST)){
        $password = $_POST['password'];
        if($password == "ilovecheese"){ # this is a fake password for github repo
            $file = 'subscribers.csv';
            if (file_exists($file)) {
                header('Content-Description: File Transfer');
                header('Content-Type: application/octet-stream');
                header('Content-Disposition: attachment; filename='.basename($file));
                header('Content-Transfer-Encoding: binary');
                header('Expires: 0');
                header('Cache-Control: must-revalidate');
                header('Pragma: public');
                header('Content-Length: ' . filesize($file));
                ob_clean();
                flush();
                readfile($file);
                exit;
            }
        }
		else{
			$error = "Invalid password.";
		}
    }
?>
<?php include('header.php');?>
<?php echo $error; ?>
<form method="POST" action="">
    Password <input type="password" name="password"></input><br/>
    <input type="submit" name="submit"></input>
</form>