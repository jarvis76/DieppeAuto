<?php
class Berline extends Voiture implements Consommation
{
    public $couleur;
    public function peindre($color)
    {
        $this->couleur = $color;
    }
    public function polluer()
    {
        // TODO: Implement polluer() method.
    }
    public function distanceFreinage()
    {
        echo "Je freine, c'est génial !";
    }
}
