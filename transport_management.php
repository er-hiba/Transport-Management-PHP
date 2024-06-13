<?php

abstract class Transport {
    protected $idTrans;
    protected $speed;
    protected $capacity;

    public function __construct($idTrans, $speed, $capacity) {
        $this->idTrans = $idTrans;
        $this->speed = $speed;
        $this->capacity = $capacity;
    }

    public function infos() {
        echo "ID: " . $this->idTrans . "<br>";
        echo "Speed: " . $this->speed . " km/h<br>";
        echo "Capacity: " . $this->capacity . " passengers<br>";
    }

    abstract public function amount();
}

class Autocar extends Transport {
    private $brand;
    private $ticketPrice;

    public function __construct($idTrans, $speed, $capacity, $brand, $ticketPrice) {
        parent::__construct($idTrans, $speed, $capacity);
        $this->brand = $brand;
        $this->ticketPrice = $ticketPrice;
    }

    public function infos() {
        parent::infos();
        echo "Brand: " . $this->brand . "<br>";
        echo "Ticket Price:" . $this->ticketPrice . " MAD <br>";
    }

    public function amount() {
        return $this->capacity * $this->ticketPrice;
    }
}

$a1 = new Autocar(1, 90, 70, "Hyundai", 200);

$a1->infos();

echo "Total Amount if all tickets are sold: " . $a1->amount() . " MAD";
?>
