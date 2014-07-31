<?php

namespace Koine;

class MethodDelegator
{
    protected $object;
    protected $method;
    protected $params = array();

    public function method($methodName)
    {
        $this->method = $methodName;

        return $this;
    }

    public function to($object)
    {
        $this->object = $object;

        return $this;
    }

    public function with($params = array())
    {
        $this->params = $params;

        return $this;
    }

    public function delegate()
    {
        return call_user_func_array(
            array($this->object, $this->method),
            $this->params
        );
    }
}
