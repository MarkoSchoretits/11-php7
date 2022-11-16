<?php
class Vehicles{

    public $name, $model, $make_year, $color, $fuel_type;

    function __construct($name, $model, $make_year, $color, $fuel_type)
    {
        $this->name = $name;
        $this->model = $model;
        $this->make_year = $make_year;
        $this->color = $color;
        $this->fuel_type = $fuel_type;
    }

    public function name_and_model(){
        $name_and_model = "The $this->name $this->model is from $this->make_year";
        return $name_and_model;
    }
}

$my_vehicle1 = new Vehicles("FIAT", "Barchetta", 1995, "Postengrün", "Benzin");
$explaination = $my_vehicle1->name_and_model();
print $explaination;
echo "<br>";
var_dump($my_vehicle1);
echo "<br>";
echo "<br>";

$my_vehicle2 = new Vehicles("BMW", "318i", 1987, "Silbergrau", "Benzin");
$explaination = $my_vehicle2->name_and_model();
print $explaination;
echo "<br>";
var_dump($my_vehicle2);
echo "<br>";
echo "<br>";

$my_vehicle3 = new Vehicles("Ford", "Sierra", 1989, "Smaragd", "Diesel");
$explaination = $my_vehicle3->name_and_model();
print $explaination;
echo "<br>";
var_dump($my_vehicle3);
echo "<br>";
echo "<br>";
