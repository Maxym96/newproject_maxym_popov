<?php


namespace Homework;


class MoveCar implements MoveInterface
{
    protected $maxSpeed = 100;
    protected $ignition;
    protected $currentSpeedCar;


    public function startIgnition(): string
    {
        if($this->ignition === false){
            $this->ignition = true;
            return "Ignition on". PHP_EOL;
        }else{
            return "Ignition has already on that`s why you cannot ignition on one more time". PHP_EOL;
        }
    }

    public function stopIgnition()
    {
        if($this->ignition === true){
            $this->ignition = false;
            return "Ignition off". PHP_EOL;
        }else{
            return "Ignition has already off that`s why you cannot ignition off one more time".PHP_EOL;
        }
    }

    public function upSpeedCar(int $speedUp=1){
        if($this->ignition === true){

            if($this->currentSpeedCar >= $this->maxSpeed){
                return "Car cannot move speed more than " . $this->maxSpeed . ' km/h'. PHP_EOL;
            }

            $this->currentSpeedCar += $speedUp;

            if($this->currentSpeedCar >= $this->maxSpeed){
                $this->currentSpeedCar = $this->maxSpeed;
            }

            return "Car speed is " . $this->currentSpeedCar . ' km/h'. PHP_EOL;
        }else{
            return "Ignition has already off that`s why you cannot move". PHP_EOL;
        }

    }

    public function downSpeedCar(int $speedDown = 1){
        if($this->ignition === true){

            if($this->currentSpeedCar <= 0){
                return "Car has already stopped".PHP_EOL;
            }

            $this->currentSpeedCar -= $speedDown;

            if($this->currentSpeedCar <= 0)
            {
                $this->currentSpeedCar = 0;
                return 'Car has already stopped';
            }

            return "Car speed is " . $this->currentSpeedCar . ' km/h'. PHP_EOL;
        }else{
            return "Ignition has already off that`s why you cannot move". PHP_EOL;
        }

    }
}