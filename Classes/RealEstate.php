<?php
namespace Protonigramer\Megahamster;
/**
 * Created by PhpStorm.
 * User: luizm
 * Date: 17.09.2019
 * Time: 12:49
 */

/**
 * Class RealEstate
 * @package Protonigramer\Megahamster
 */
abstract class RealEstate {
    private $name;
    private $price;
    private $specialEquipment;

    /**
     * RealEstate constructor.
     * @param String $name
     * @param float $price
     * @param String ...$equipments
     */
    public function __construct(String $name,float $price,String ...$equipments) {
        $this -> name = $name;
        $this -> price = $price;
        $this -> specialEquipment = $equipments;
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
            return $this->specialEquipment;
        }

    /**
     * @return String
     */
    public function toHTML(): String {
            $name = $this->getName();
            $price = number_format($this->getPrice(),2,",",".");
            $area = number_format($this->calculateArea(),2,",",".");
            $equipments = $this->getSpecialEquipment();
            $stringEquip = "";
            if (sizeof($equipments) > 0) {
                foreach ($equipments as $element) {
                    $stringEquip .= "<li>$element</li>";
                }
            } else $stringEquip = "<li>none</li>";

            return <<<ENDE
            <div class="product">
            <h1 class="h1-style-1">$name</h1>
            <p>EUR $price</p>
            <p>Flächeninhalt: $area cm²</p>
            <p>Speziale Austattung:</p>
            <ul>
                $stringEquip
            </ul>
            </div>
ENDE;
        }
}