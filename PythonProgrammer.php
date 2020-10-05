<?php
class PythonProgrammer extends PhpProgrammer {
    public function showInfo()
    {
        $this->age=17;
        $this->name="Mamun";
        echo $this->showName();
        echo "<br>";
        echo $this->showAge();
        echo "<br>";
       // echo $this->salary = 20;
        $this->showPrivateProperty();


    }

}