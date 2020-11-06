<?php
class BaseController
{

    protected $file;

    public function render()
    {
        $path = './views/'.$this->file;
        include_once($path);
    }
}
