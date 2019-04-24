<?php

class Character {
    private $name;
    private $gender;
    private $about;
    private $image;
    private $id;
    private static $count = 0;
    private $birth;
    private $mainWepon;


    public function __construct($name, $gender, $about, $image, $birth, $mainWepon) {
        $this->name = $name;
        $this->gender = $gender;
        $this->about = $about;
        $this->image = $image;
        self::$count++;
        $this->id =self::$count;
        $this->birth = $birth;
        $this->mainWepon = $mainWepon;
    }

    public function getName() {
        return $this->name;
    }

    public function getGender() {
        return $this->gender;
    }

    public function getAbout() {
        return $this->about;
    }


    public function getImage() {
        return $this->image;
    }

    public function getId() {
        return $this->id;
    }

    public function getBirth() {
        return $this->birth;
    }

    public function getMainWepon() {
        return $this->mainWepon;
    }


    public function getEvenOddId() {
        if ($this->getId()%2 == 1) {
            return "odd";
        }elseif ($this->getId()%2 == 0) {
            return "even";
        }
    }

    public static function findByName($charas, $name) {
        foreach ($charas as $chara) {
            if ($chara->getName() == $name) {
                return $chara;
            }
        }
    }

    public function getReviews($reviews) {
        $reviewsForChara = array();
        foreach ($reviews as $review) {
            if ($review->getCharaName() == $this->name) {
                $reviewsForChara[] = $review;
            }
        }
        return $reviewsForChara;
    }
    public static function getCount() {
        return self::$count;
    }
}

?>