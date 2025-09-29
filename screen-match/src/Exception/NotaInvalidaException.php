<?php

namespace ScreenMatch\Exception;

use Exception;

class NotaInvalidaException Extends Exception
{

    public function __construct()
    {
        
        parent::__construct('Nota precisa ser entre 0 e 10');
        
    }

}