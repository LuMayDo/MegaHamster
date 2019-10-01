<?php
/**
 * Created by PhpStorm.
 * User: luizm
 * Date: 30.09.2019
 * Time: 17:11
 */

class LivingEstate extends RealEstate {
    private $length;
    private $width;
    private $height;

    /**
     * LivingEstate constructor.
     * @param String $name
     * @param float $price
     * @param float $length
     * @param float $width
     * @param float $height
     * @param String ...$equipments
     */
    public function __construct(String $name, float $price, float $length, float $width, float $height, String ...$equipments) {
        parent::__construct($name,$price,...$equipments);
        $this -> length = $length;
        $this -> width = $width;
        $this -> height = $height;
    }

    /**
     * @return float
     */
    public function calculateArea(): float {
        return $this->length * $this->width;
    }
}