<?php 
require_once('intro.php');
require_once('review.php');
require_once('user.php');

$kirito = new Character('kirito', 'male', '本作全編を通しての主人公。SAO事件を劇的な早期解決へと導いた「黒の剣士」。SAO事件後も、その残滓が引き起こした様々な事件に巻き込まれていく。','./img/kirito.jpg', '10月7日', '片手直剣');
$asuna = new Character('asuna', 'female', '本作のメインヒロイン。SAO事件における紆余曲折の末にキリトと結ばれて相思相愛の関係となり、心身ともにキリトに寄り添い彼を支えていく。SAOでは最強のギルド「血盟騎士団」の副団長であり「閃光」と渾名されていたが、事件以前はゲームとは無縁な良家の令嬢であった。','./img/asuna.jpg','9月30日', '細剣');
$yui = new Character('yui', 'female', 'アインクラッド第22層の森に倒れていた少女。キリトとアスナを両親のように慕い、2人も実の娘のように可愛がっている。', './img/yui.jpg', '不明', 'なし');
$leafa = new Character('leafa', 'female', 'フェアリィ・ダンス編のヒロイン。ALOでキリトの戦いを援護し、アスナ奪還に大きく貢献した。以後もキリト一行の仲間に加わり行動をともにする。', './img/leafa.jpeg', '4月19日', '片手直剣');
$sinon = new Character('sinon', 'female', 'ファントム・バレット編のヒロイン。自身の過去を乗り越えるべくGGOをプレイしている。第3回BoBにてキリトと共闘し、死銃事件を共に解決した。事件後はGGOと兼ねる形でALOを始め、キリトたちと行動を共にし、交流を深めていく。', './img/sinon.jpg', '8月21日', 'マテリアルライフル');
$yuuki = new Character('yuuki', 'female', 'マザーズ・ロザリオ編のヒロイン。ALOにおいて「絶剣（ぜっけん）」と呼ばれ圧倒的な戦闘力を誇るプレイヤー。ギルド「スリーピング・ナイツ」のリーダー。ALOでの辻デュエルでアスナと出会いその強さを認め、ボス攻略戦の助っ人を依頼した。', './img/yuuki.jpg', '5月23日', '片手直剣');
$alice = new Character('alice', 'female', 'アリシゼーション編のヒロイン。UWにおけるキリトとユージオの幼なじみ。禁忌目録に反したため公理教会へ連行されたが、後に整合騎士屈指の実力者としてその姿を現す。', './img/alice.jpg', '不明', '片手直剣');
$eugeo = new Character('eugeo', 'male', 'UWにおけるキリトとアリスの幼なじみ。元は漆黒の巨木ギガスシダーの刻み手であったが、キリトに剣術を教わり、アリスを救い出すために共に央都を目指す。', './img/eugeo.jpg','不明', '片手直剣');

$charas = array($kirito, $asuna, $yui, $leafa, $sinon, $yuuki, $alice, $eugeo);

$user1 = new User('suzuki', 'male');
$user2 = new User('tanaka', 'female');
$user3 = new User('suzuki', 'female');
$user4 = new User('sato', 'male');

$users = array($user1, $user2, $user3, $user4);

$review1 = new Review($kirito->getName(), $user1->getId(), 'キリトカッコいいー！！');
$review2 = new Review($asuna->getName(), $user1->getId(), '嫁にしたいランキング1位！');
$review3 = new Review($yui->getName(), $user2->getId(), 'かわいいー！');
$review4 = new Review($leafa->getName(), $user2->getId(), '直葉ちゃん！？');
$review5 = new Review($sinon->getName(), $user3->getId(), '「チェックメイトよ」');
$review6 = new Review($yuuki->getName(), $user3->getId(), 'マザーズ・ロザリオ！！');
$review7 = new Review($alice->getName(), $user4->getId(), '金色の騎士様や！');
$review8 = new Review($eugeo->getName(), $user4->getId(), '咲け！青薔薇！！');
$review9 = new Review($kirito->getName(), $user4->getId(), 'ここは通行止めだ ( ･ิω･ิ)ｷﾘ！');

$reviews = array($review1, $review2, $review3, $review4, $review5, $review6, $review7, $review8, $review9);


?>