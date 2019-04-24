<?php 
require_once('data.php');
require_once('intro.php');
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Introguction of SAO</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>
  <div class="title">
    <h3>Introduction<br />of<br />SAO</h3>
  </div>
  <div class="intro">
    <?php foreach ($charas as $chara) :?>
    <div class="character">
      <img class="<?php echo "image-data" . ' ' . $chara->getGender() ?>" src="<?php echo $chara->getImage() ?>" alt="" />
      <div class="data">
        <p class="name">name: <?php echo $chara->getName() ?></p>
        <p class="gender">gender: <?php echo $chara->getGender() ?></p>
        <p class="about">about: <?php echo $chara->getAbout() ?></p>
        <a href="show.php?name=<?php echo $chara->getName() ?>">detail</a>
      </div>
    </div>
    <?php endforeach ?>
  </div>
</body>
</html>