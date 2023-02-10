## MAKER
Maker is a command line interface inspired by **Laravel Artisan**, that's can provides a number of helpful commands that can assist you while you build your application

### How to create new Commands
In the folder `Commands` create a class and extends `Command`,

```php
<?php

class Example extends Command
{
    public $signature = 'example';
    public $description = 'A simple example';

    public function handle()
    {
        echo "It's a test";
    }
}
```
### Using Created command
```
php maker YOUR_COMMAND_SIGNATURE
```

### Using Params
Sending on Terminal:
```
php maker YOUR_COMMAND_SIGNATURE --param1="lorem Ipsum" -param2=789
```

Receiving on handle function of Command
```php
$param1 = $this->input('param1'); // Returns --param1 value or null

$param2 = $this->input('param2', 'Default Value');  // Returns param2 or default value specified
```

### Examples
Open the folder of Project and Run
```bash
php maker hello
// output: hello YOUR_SYSTEM_USER_NAME!

php maker hello --name="John Doe"
// output: hello John Doe!
```
