<?php
// 入力チェック(受信確認処理追加)
if(
    !isset($_POST["name"]) || $_POST["name"] =="" ||
    !isset($_POST["height"]) || $_POST["height"] =="" ||
    !isset($_POST["weight"]) || $_POST["weight"] ==""||
    !isset($_POST["size"]) || $_POST["size"] ==""||
    !isset($_POST["comment"]) || $_POST["comment"] ==""
    
) {
    // 入力漏れ等あると'ParamError'と出る。
    exit('ParamError');
}

//１. POSTデータ取得
//まず前のphpからデーターを受け取る（この受け取ったデータをもとにbindValueと結びつけるため）
$name = $_POST["name"];
$height = $_POST["height"];
$weight = $_POST["weight"];
$comment = $_POST["comment"];
$size = $_POST["size"];
// radioの表示／非表示の設定
$_POST["size"] == "s"."m"."l"."xl" ? "checked" : "";

//２. DBに接続をしてデータを登録する ※dbnameにDB名を入力する
// ※mamppの方は、$pdo = new PDO('mysql:dbname=xxx;charset=utf8;host=localhost', 'root', 'root');
try {
    $pdo = new PDO('mysql:dbname=review_db;charset=utf8;host=localhost', 'root', 'root');
} catch (PDOException $e) {
    exit('DbConnectError:'.$e->getMessage());
}


//３．SQL作成 
//dbにデータをinsert ※INTO後に、テーブル名を入力
$stmt = $pdo->prepare("INSERT INTO review_table(id, name, height, weight, size, comment,
indate )VALUES(NULL, :name, :height, :weight, :size, :comment, sysdate())");

// バインド変数に変数を入れる（「:変数名」=bind変数）、次に文字列or数値か。
$stmt->bindValue(':name', $name, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':height', $height, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':weight', $weight, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':size', $size, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':comment', $comment, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
// dbに入れる。（実行= execute）
$status = $stmt->execute();

//４．データ送信処理後
if ($status==false) {
    //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
    $error = $stmt->errorInfo();
    exit("QueryError:".$error[2]);
} else {
    //入力内容に問題なければ、select.phpへ遷移。（入力データがdbに送られ、全てのレビューページに飛ぶ）
    // ※書くときにLocation: in この:　のあとは半角スペースがいるので注意！！
    header("Location: select.php");
    exit;
}

?>