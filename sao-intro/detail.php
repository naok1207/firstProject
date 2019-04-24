<?php
class Detail{
    private $birth;
    private $mainWepon;

    public function __construct($birth, $mainWepon) {
        $this->birth = $birth;
        $this->mainWepon = $mainWepon;
    }

    public function getBirth() {
        return $this->birth;
    }

    public function getMainWepon() {
        return $this->mainWepon;
    }
}
?>