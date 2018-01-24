<?php
 
header('Content-Type:text/html;charset=utf-8');
 $con=mysqli_connect("sql12.freemysqlhosting.net","sql12201792","lVyz56I65f","sql12201792");
if(!$con)
//localhost = 主機位址; root = 使用者; 1234567 = 密碼
    die("connect false");
//die = 執行到此行，將字串輸出後結束程式
    else echo 'OK!';
 
//yuki = 資料庫名稱
$sql = 'select * from users';
//test = 選取資料表
 $result=mysqli_query($con,$sql);
 
//$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
//輸出第一筆資料
//echo 'Number:';
//echo $row['firstname'];
//選取第一筆資料的Number欄位輸出
  while ($row=mysqli_fetch_row($result))
    {
        printf ("%s : %s",$row[0],$row[1],$row[2]);
        echo "<br>";
    }
?>


<?php
$dbms='mysql';     //?据??型
$host='sql12.freemysqlhosting.net'; //?据?主机名
$dbName='sql12201792';    //使用的?据?
$user='sql12201792';      //?据??接用?名
$pass='lVyz56I65f';          //??的密?
$dsn="$dbms:host=$host;dbname=$dbName";


try {
    $dbh = new PDO($dsn, $user, $pass); //初始化一?PDO?象
    echo "?接成功<br/>";
    /*你?可以?行一次搜索操作
    foreach ($dbh->query('SELECT * from users') as $row) {
        print_r($row); //你可以用 echo($GLOBAL); ?看到?些值
    }
    */
    $dbh = null;
} catch (PDOException $e) {
    die ("Error!: " . $e->getMessage() . "<br/>");
}
//默???不是??接，如果需要?据???接，需要最后加一???：array(PDO::ATTR_PERSISTENT => true) ?成??：
$db = new PDO($dsn, $user, $pass, array(PDO::ATTR_PERSISTENT => true));

?>