<?php
//1.  DB接続 ※dbnameにDB名を入れる。
try {
$pdo = new PDO('mysql:dbname=review_db;charset=utf8;host=localhost','root','root');
} catch (PDOException $e) {
  exit('データベースに接続できませんでした。'.$e->getMessage());
}

//２．SQL作成
//  dbからデータをselect ※FROM後にテーブル名を入れます
$stmt = $pdo->prepare("SELECT * FROM review_table");
$status = $stmt->execute();

//３．データ表示
$view="";
if($status==false){
  //execute（SQL実行時にエラーがある場合）
  $error = $stmt->errorInfo();
  exit("ErrorQuery:".$error[2]);
}else{
  //Selectデータの数だけ自動でループしてくれる $resultの中に「カラム名」が入ってくるのでそれを表示させる
  while( $result = $stmt->fetch(PDO::FETCH_ASSOC)){
    // ".="ドットがついてると、上書きされずに下に続く。
    $view .= "<div class='review'>".
                "<div class='name'>".$result["name"]." 様"."</div>".
                "<div class='pd'>".$result["height"]."/".$result["weight"]." 購入サイズ：".$result["size"]."</div>".
                "<div class='comment'>".$result["comment"]."</div>".
                "<div class='date'>".$result["indate"]."</div>".
            "</div>";
  }
}
?>


<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>すべてのレビュー</title>
  <link rel="stylesheet" href="style.css">
  <!-- google fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c:wght@300;400&display=swap" rel="stylesheet"> 
  <link href="https://fonts.googleapis.com/css2?family=Sawarabi+Gothic&display=swap" rel="stylesheet">
  <!-- font awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
</head>

<body>
<!-- Head[Start] -->
<header>
  <nav class="navbar">
    <a class="navbar_inputField" href="index.php"><i class="fa fa-pencil "></i> レビューを書く</a>
  </nav>
</header>
<!-- Head[End] -->

<!-- レビュー一覧 -->
<!-- Main[Start] $view-->
<div class="reviews"><?=$view?></div>
<!-- Main[End] -->


</body>
</html>