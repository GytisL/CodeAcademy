<?php


class savarankiskas_serviso_klase extends savarankiskas_automobilio_klase
{
    function info()
    {
        {
            $auto = 'gamintojas: %s, modelis: %s, metai: %s';
            return sprintf($auto, $this->gamintojas, $this->modelis, $this->metai);

        }
    }
}