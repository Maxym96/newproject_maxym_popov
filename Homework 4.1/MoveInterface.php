<?php


namespace Homework;


interface MoveInterface
{
    /**
     * Start ignition
     * @return mixed
     */
    public function startIgnition();

    /**
     * Stop ignition
     * @return mixed
     */
    public function stopIgnition();

    /**
     * Up speed car
     * @return mixed
     */
    public function upSpeedCar();

    /**
     * Down speed car
     * @return mixed
     */
    public function downSpeedCar();
}