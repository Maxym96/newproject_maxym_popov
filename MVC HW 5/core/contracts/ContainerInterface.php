<?php


namespace MVC;


interface ContainerInterface
{
    /***
     * Method Get
     * @return mixed
     */
    public function get ();

    /***
     * Method Has
     * @return mixed
     */
    public function has ();
}