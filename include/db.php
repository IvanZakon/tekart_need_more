<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', 'root');
define('DB_NAME', 'crud');
    
$mysql = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
if ($mysql->connect_errno) exite('Ошибка подключения к БД');
$mysql->set_charset('utf8');
$mysql->close();


$str= mysqli_connect('localhost', 'root', 'root', 'news');
$select= mysqli_query($str, "SELECT id, idate, title, announce, content FROM `news`");
while ($r= mysqli_fetch_array($select)) {
         echo $r['idate'] . "<br />";
        //  echo $r['title'] . "<br />";
        //  echo $r['announce'] . "<br />";
        //  echo $r['content'] . "<br />";
}
mysqli_close($str);








// $res = $mysqli->query("SELECT id, title, announce, content FROM `news`");
// for ($row_no = $res->num_rows - 1; $row_no >= 0; $row_no--) {
//     $res->data_seek($row_no);
//     $row = $res->fetch_assoc();
//     echo " id = " . $row['title'] . "\n";
// }






// $str= mysqli_connect('localhost', 'root', 'root', 'crud');
// $select= mysqli_query($str, "SELECT price FROM `products`;");
// while ($hh= mysqli_fetch_array($select)) {
//          echo $hh['price'] . "<br />";
// }
// mysqli_close($str);




// Подключение к базе данных
//$db = mysql_connect($db_host,$db_user,$db_password) OR DIE("Не могу создать соединение ");
 
// Выборка базы
// mysql_select_db("crud",$db);

// mysql_query("SET NAMES 'utf8'",$db);



//ВЫВОД ИЗ БАЗЫ РАБОЧИЙ КОД //
    // $str= mysqli_connect('localhost', 'root', 'root', 'crud');
    // $select= mysqli_query($str, "SELECT title FROM `products`;");
    // while ($r= mysqli_fetch_array($select)) {
    //         echo $r['title'] . "<br />";
    // }
    // mysqli_close($str);


// define('DB_HOST', 'localhost');
// define('DB_USER', 'root');
// define('DB_PASSWORD', 'root');
// define('DB_NAME', 'crud');
    
// $connect = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
// if ($connect->connect_errno) exite('Ошибка подключения к БД');
// $connect->set_charset('utf8');
// $connect->close();


// $result = mysql_query("SELECT * FROM `products`",$db);



    //ВЫВОД ИЗ БАЗЫ РАБОЧИЙ КОД //
    // $str= mysqli_connect('localhost', 'root', 'root', 'crud');
    // $select= mysqli_query($str, "SELECT id FROM `products` LIMIT 10;");
    // while ($r= mysqli_fetch_array($select)) {
    //         echo $r['id'] . "<br />";
    // }
    // mysqli_close($str);

    //Не помню что это, вроде код подклчения с видео //
//     $connect = mysqli_connect( host: 'grant', user: 'root', password: 'root' database: 'news');
//    if (!$connect) {
//        echo 'Error connect to database!';
//    }
    



  //$str = mysqli($connect, query:"SELECT id FROM `products` LIMIT 10;");
    // $products = mysqli_query($connect, query:"SELECT * FROM `products`");
    // $products = mysqli_fetch_all($products);
    // foreach ($products as $product) {
    //   echo ''
    //   <tr>
    //       <td>' . $product[0] . '</td>
    //       <td>Product 1</td>
    //       <td>Lorem ipsum dolor sit amet.</td>
    //       <td>1000$</td>
    //   </tr>
    //   ';
    // }
    


        




// $result = mysql_query('SELECT id FROM `products` LIMIT 10;');
// while($row = mysql_fetch_assoc($result)):
// 
//