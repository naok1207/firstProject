<?php
require_once('intro.php');
require_once('data.php');

$charaName = $_GET['name'];
$chara = Character::findByName($charas, $charaName);
$charaReviews = $chara->getReviews($reviews);
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Detail of <?php echo $chara->getName() ?></title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>
    <div class="<?php echo $chara->getName() ?>">
        <div class="bg-mask">
            <div class="max-wid">
                <img src="<?php echo $chara->getImage() ?>" alt="">
                <div class="detail">
                    <p class="name">name: <?php echo $chara->getName() ?></p>
                    <p class="gender">gender: <?php echo $chara->getGender() ?></p>
                    <p class="birth">birth: <?php echo $chara->getBirth() ?></p>
                    <p class="mainwepon">main wepon: <?php echo $chara->getMainWepon() ?></p>
                    <p class="about">about: <?php echo $chara->getAbout() ?></p>
                </div>
                <a href="index.php">back</a>
            </div>
            <div class="reviews">
                <div class="reviews-bg-mask">
                    <h4 class="review-title">レビューー覧</h4>
                    <?php foreach ($charaReviews as $review) : ?>
                    <?php $user = $review->getUser($users) ?>
                    <div class="review">
                        <div class="review-user"><p><?php echo $user->getName() ?>:</p></div>
                        <div class="review-content"><p><?php echo $review->getBody() ?></p></div>
                    </div>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>