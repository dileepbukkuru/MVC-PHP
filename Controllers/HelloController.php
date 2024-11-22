<?php
require_once 'Models/HelloModel.php';

class HelloController
{
    public function sayHello()
    {
        // Use the Model to get data
        $model = new HelloModel();
        $message = $model->getMessage();
        // Load the View and pass the message
        require 'Views/layout.php';

    }
}
