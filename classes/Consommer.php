<?php
/**
 * Created by PhpStorm.
 * User: Dell
 * Date: 03/05/2018
 * Time: 11:51
 */

trait Consommer
{
    protected $charge;
    protected $nbrCharges;

    public function calculerResteBetterie()
    {
        return $this->charge;
    }

    public function nombreChargesBetterie()
    {
        return $this->nbrCharges:
    }
}