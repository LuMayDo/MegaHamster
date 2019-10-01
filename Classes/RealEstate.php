<?php
/**
 * Created by PhpStorm.
 * User: luizm
 * Date: 17.09.2019
 * Time: 12:49
 */

require_once "TrainingEstate.php";
require_once "LivingEstate.php";

abstract class RealEstate {
    private $name;
    private $price;
    private $specialEquipment = [];

    /**
     * RealEstate constructor.
     * @param String $name
     * @param float $price
     * @param String ...$equipments
     */
    public function __construct(String $name,float $price,String ...$equipments) {
        $this -> name = $name;
        $this -> price = $price;
        array_push($this -> specialEquipment,$equipments);
    }

    /**
     * @return string
     */
    public function getName(): String { return $this->name; }

    /**
     * @return float
     */
    public function getPrice(): float {return $this->price; }

    /**
     * @return String
     */
    public function __toString(): String {
            return $this->getName().' for '. $this->getPrice();
        }

    /**
     * @return float
     */
    public abstract function calculateArea(): float;

    /**
     * @return array
     */
    public function getSpecialEquipment() {
            return $this->specialEquipment[0];
        }

    /**
     * @return String
     */
    public function toHTML(): String {
            $name = $this->getName();
            $price = $this->getPrice();
            $area = $this->calculateArea();
            $equipment = implode(", ", $this->getSpecialEquipment());
            return <<<ENDE
            <div class="product">
            <h1 class="h1-style-1">$name</h1>
            <p>EUR $price</p>
            <p>Flächeninhalt: $area</p>
            <p>Special Equipment: $equipment</p>
            </div>
ENDE;
        }
}