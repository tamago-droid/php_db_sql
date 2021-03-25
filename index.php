<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>レビューを書く</title>
    <link rel="stylesheet" href="style.css">
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c:wght@300;400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@700&display=swap" rel="stylesheet">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
</head>
<body>

<!-- Header[Start] -->
<header>
  <nav class="navbar">
　  <a class="navbar_reviewData" href="select.php"><i class="fa fa-comment-o "></i> 全てのレビュー</a>
  </nav>
</header>
<!-- Header[End] -->


<!-- Main[Start] -->
<div class="byshop">
    <div>
        <span style="font-size:30px">当店でご購入頂きありがとうございました。</span><br>
        <span style="font-size:18px">商品について、良かった点、もっと改善してほしい点などございましたら、ご遠慮なく評価いただけますと幸いです。</span>
    </div>
</div>
<div class="container">
    <!-- 商品情報 -->
    <div class="product">
        <div class="img">
            <img class="p_image" src='./img/setup.jpg' alt="">
        </div>
        <div class="info">
            <p class="p_name">スウェットセットアップ(tops)</p>
            <p class="p_price">￥5,000（税抜）</p>
        </div>
    </div>
    
    <!-- レビュー記入欄 -->
    <!-- ここからinsert.phpにデータを送ります -->
    <form method="post" action="insert.php" class="frm">
        <div>
            <label for="re_name">名前</label>
            <input type="text" name="name" id="re_name">
        </div>

        <div class="hw">
            <p>
                <label for="re_height">身長</label>
                <select name="height" id="re_height">
                    <option value="150">150㎝未満</option>
                    <option value="157">150～157㎝</option>
                    <option value="163">158～163㎝</option>
                    <option value="170">164～170㎝</option>
                    <option value="171">171㎝以上</option> 
                </select>
            </p>
            <p>
                <label for="re_weight">体重</label>
                <input type="text" name="weight" id="re_weight" placeholder="○○㎏、50kg台.etc">
            </p>
        </div>

        <div>
            <p>購入した商品のサイズ</p>
            <input type="radio" name="size" id="size_s"value="S">
            <label for="size_s">S</label>
            <input type="radio" name="size" id="size_m"value="M">
            <label for="size_m">M</label>
            <input type="radio" name="size" id="size_l" value="L">
            <label for="size_l">L</label>
            <input type="radio" name="size" id="size_xl"value="XL">
            <label for="size_xl">XL</label>
        </div>

        <div>
            <p>レビュー</p>
            <textarea name="comment" rows="7" cols="60" placeholder="着心地やサイズ感等ご記入頂きますと、ほかのお客様の参考になります。"></textarea>
        </div>

        <div>
            <input type="submit" value="レビューを送信する">
            <input type="reset" value="入力をリセットする">

        </div>
    </form>
</div>
<!-- Main[End] -->

</body>
</html>