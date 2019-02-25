<?php
//You could implement a destructor to unset all you references if the class is not of any need anymore.


public function __destruct(){
    $this->cleanup();
}

public function cleanup() {
    //cleanup everything from attributes
    foreach (get_class_vars(__CLASS__) as $clsVar => $_) {
        unset($this->$clsVar);
    }

    //cleanup all objects inside data array
    if (is_array($this->_data)) {
        foreach ($this->_data as $value) {
            if (is_object($value) && method_exists($value, 'cleanUp')) {
                $value->cleanUp();
            }
        }
    }
}


/*
 * Avoid global variables, because those are never garbage collected and need 
 * to be unset explicitly. If you are using a Framework like ZF or
 *  Symfony that might not be possible, since you would break functionality if you do.
 * */
