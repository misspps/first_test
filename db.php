<?php
 
header('Content-Type:text/html;charset=utf-8');
 $con=mysqli_connect("sql12.freemysqlhosting.net","sql12201792","lVyz56I65f","sql12201792");
if(!$con)
//localhost = �D����}; root = �ϥΪ�; 1234567 = �K�X
    die("connect false");
//die = ����즹��A�N�r���X�ᵲ���{��
    else echo 'OK!';
 
//yuki = ��Ʈw�W��
$sql = 'select * from users';
//test = �����ƪ�
 $result=mysqli_query($con,$sql);
 
//$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
//��X�Ĥ@�����
//echo 'Number:';
//echo $row['firstname'];
//����Ĥ@����ƪ�Number����X
  while ($row=mysqli_fetch_row($result))
    {
        printf ("%s : %s",$row[0],$row[1],$row[2]);
        echo "<br>";
    }
?>


<?php
$dbms='mysql';     //?�u??��
$host='sql12.freemysqlhosting.net'; //?�u?�D��W
$dbName='sql12201792';    //�ϥΪ�?�u?
$user='sql12201792';      //?�u??����?�W
$pass='lVyz56I65f';          //??���K?
$dsn="$dbms:host=$host;dbname=$dbName";


try {
    $dbh = new PDO($dsn, $user, $pass); //��l�Ƥ@?PDO?�H
    echo "?�����\<br/>";
    /*�A?�i�H?��@���j���ާ@
    foreach ($dbh->query('SELECT * from users') as $row) {
        print_r($row); //�A�i�H�� echo($GLOBAL); ?�ݨ�?�ǭ�
    }
    */
    $dbh = null;
} catch (PDOException $e) {
    die ("Error!: " . $e->getMessage() . "<br/>");
}
//�q???���O??���A�p�G�ݭn?�u???���A�ݭn�̦Z�[�@???�Garray(PDO::ATTR_PERSISTENT => true) ?��??�G
$db = new PDO($dsn, $user, $pass, array(PDO::ATTR_PERSISTENT => true));

?>