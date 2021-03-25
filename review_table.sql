-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost:3306
-- 生成日時: 
-- サーバのバージョン： 5.7.24
-- PHP のバージョン: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `review_db`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `review_table`
--

CREATE TABLE `review_table` (
  `id` int(12) NOT NULL,
  `name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `height` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `weight` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `size` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `comment` text COLLATE utf8_unicode_ci NOT NULL,
  `indate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `review_table`
--

INSERT INTO `review_table` (`id`, `name`, `height`, `weight`, `size`, `comment`, `indate`) VALUES
(1, 'mica', '171㎝以上', '65㎏', 'XL', '注文から届くまでが早くて助かりました。', '2021-03-24'),
(2, 'miki', '150㎝未満', '50㎏', 'M', '肩幅があるので、Мサイズで丁度よい', '2021-03-24'),
(3, 'まお', '163', '47㎏', 'M', '少し小さいがタイトが好みなので、満足です。', '2021-03-24'),
(4, 'マイです。', '170', '49㎏', 'M', 'サイズは丁度よかった！お洗濯機をつけないと、毛玉がでるので、注意です～！残念', '2021-03-25'),
(5, 'ピリ辛チリ味', '171', '60kg', 'L', '175㎝なんですが、袖が足りない(手首丁度くらい）です。XLがよかったと後悔～', '2021-03-25'),
(6, 'Kate', '171', '53kg', 'M', 'great:)', '2021-03-25'),
(7, 'ピザパン', '157', '40㎏', 'S', '到着早くて助かりました。すぐ来たかったので笑', '2021-03-25'),
(8, 'わかめごはん', '170', '60kg', 'L', 'ウエストがある方なので、裾のゴムの締め付けが強いと感じた。見た目は問題ないですが。', '2021-03-25'),
(9, 'せらがき', '157', '四捨五入して60kg', 'L', 'がっしり体系。お尻がかくれるくらい。\r\n生地は見た目より薄目、春先まで全然着れます。\r\n色見は写真の通りで、きれいなひよこ色！', '2021-03-25'),
(10, 'プレセント用', '163', '50～60kgくらい？', 'L', '誕生日プレゼントに買いました。気に入っていました。ちょっと大きめ花奈と思ったけど、本人は緩い方がいいらしくよかったです。', '2021-03-25'),
(11, 'かまいたち', '150', '40kgくらい', 'S', 'アースカラーの小さいサイズのスウェット探してましたー', '2021-03-25'),
(12, '柿ピー', '170', '70kg', 'XL', 'ジャストサイズっ！', '2021-03-25');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `review_table`
--
ALTER TABLE `review_table`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルのAUTO_INCREMENT
--

--
-- テーブルのAUTO_INCREMENT `review_table`
--
ALTER TABLE `review_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
