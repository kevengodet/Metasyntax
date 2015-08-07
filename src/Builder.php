<?php

namespace Adagio\Metasyntax;

class Builder
{
    /**
     *
     * @var array
     */
    private $rules = [];

    /**
     *
     * @return Rule
     */
    public function rule($name)
    {
        if (isset($this->rules[$name])) {
            return $this->rules[$name];
        }
    }
}
