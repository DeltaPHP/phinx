<?php
/**
 * Created by PhpStorm.
 * User: orbisnull
 * Date: 31.12.15
 * Time: 22:21
 */

namespace Phinx\Db\Table\Column\Param;


class FunctionParam
{
    protected $name;

    /**
     * FunctionParam constructor.
     * @param $name
     */
    public function __construct($name = null)
    {
        if ($name) {
            $this->setName($name);
        }
    }


    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        if (false === strrpos($name, "()", strlen($name) - 2)) {
            $name =  $name . "()";
        }
        $this->name = $name;
    }

    function __toString()
    {
        return $this->getName();
    }

}
