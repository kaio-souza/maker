<?php


abstract class Command
{
    public $signature = '';
    public $description = '';
    private $options = [];

    public function __construct($options = [])
    {
        $this->options = $options;
    }

    public function handle()
    {

    }

    public function input($key, $default = null)
    {
        return isset($this->options[$key]) ? $this->options[$key] : $default;
    }

}