<?php

class Hello extends Command
{
    public $signature = 'hello';
    public $description = 'A simple test';

    public function handle()
    {
        $name = $this->input('name') ?: '$USER';
        echo shell_exec("echo hello {$name}!");
    }
}