
<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
 <?php  
 $servername = "docker-mysql-demo"; // AQUI é nome do container docker mysql
 $username = "root";
 $password = "root123";
 $dbname = "docker_demo";
 $port = "3306";
 
 try{
    $conn = new PDO("mysql:host=$servername;port=$port;dbname=$dbname",$username,$password);
    $conn -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    echo "Connected succesfully";
 } catch(PDOException $e){
    echo "Connection failed: " . $e -> getMessage();
 }


 $sql = 'SELECT * FROM  users';
 foreach ($conn->query($sql) as $row) {
     print $row['name'] . "<br />";
     print $row['email'] . "<br />";
 }

 
 ?> 
 </body>
</html>
