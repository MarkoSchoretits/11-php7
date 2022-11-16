<?php
require_once "Vehicles.php";

class Ships extends Vehicles
{
    private $register, $reg_nation;

    function __construct($name, $model, $make_year, $color, $fuel_type, $register, $reg_nation)
    {
        parent::__construct($name, $model, $make_year, $color, $fuel_type);
        $this->register = $register;
        $this->reg_nation = $reg_nation;
    }
    /* NOT USED HERE - ESSENTIAL FOR CRUD:
    public function get_register(){
        return $this->register;
    }
    public function set_register($new_register){
        $this->register = $new_register;
    }
    public function get_reg_nation(){
        return $this->reg_nation;
    }
    public function set_reg_nation($new_reg_nation){
        $this->reg_nation = $new_reg_nation;
    }
    */
    public function ship_details(){
        return "The {$this->model} from {$this->name} is registered in {$this->reg_nation}";
    }
}
$Ship1 = new Ships('TOMOS', 'Speedster', '1993', 'white', 'Diesel', '3,5t', 'KRO');
var_dump( $Ship1);
echo "<br>" . $Ship1->ship_details();