<?php
class Manufacturer extends ManufacturerCore
{
    public function getLink()
    {
        return strtolower(str_replace(' ', '-', $this->name));
    }
}
    