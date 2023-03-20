<?php

class Foo
{
    /** @var string **/
    private $sHelloString = 'Hello world!';
    
    /** @var array **/
    public $aArray = [];

    /**
     * The class method won't work because the there is no helloString variable. 
     */
    public function printString(): void
    {
        echo $this->helloString;
    }
    
    /** Write here the method */

    /**
     * To string magic function.
     * 
     * Get the class properties dynamicly.
     * 
     * @return string
     */
    public function __toString(): string
    {
        return $this->toString();
    }

    /**
     * To string.
     * 
     * Get the class properties dynamicly and parse them to string.
     * 
     * @return string
     */
    public function toString(): string
    {
        $properties = get_object_vars($this);

        $stringifiedPropertiesList = [];

        foreach ($properties as $propertyName => $propertyValue)
        {
            $stringifiedPropertiesList[] = "$propertyName: " . json_encode($propertyValue);
        }

        return "The Properties of the Class: <br>" . implode('<br>', $stringifiedPropertiesList);
    }
}

$foo = new Foo();
echo $foo;