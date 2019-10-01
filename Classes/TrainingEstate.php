<?php
/**
 * Created by PhpStorm.
 * User: luizm
 * Date: 24.09.2019
 * Time: 13:00
 */

class TrainingEstate extends RealEstate {
    private $sideLenght;

    /**
     * TrainingEstate constructor.
     * @param String $name
     * @param float $price
     * @param float $sideLenght
     * @param String ...$equipments
     */
    public function __construct(String $name, float $price, float $sideLenght, String ...$equipments) {
        parent::__construct($name,$price,...$equipments);
        $this->sideLenght = $sideLenght;
    }

    /**
     * @return float
     */
    public function calculateArea(): float {
        return 2 * (1 + sqrt(2)) * pow($this->sideLenght,2);
    }

}