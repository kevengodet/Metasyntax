<?php

namespace Libcast\Metasyntax\Rule;

use Libcast\Metasyntax\Rule;

class Alternative implements Rule
{
    private $rules = [];

    /**
     *
     * @param array $rules ARray of rules
     */
    public function __construct($rules)
    {
        if (func_num_args() > 1) {
            $this->rules = func_get_args();
        } elseif (func_num_args() == 1 and is_array($rules = func_get_arg(0))) {
            $this->rules = $rules;
        }
    }

    /**
     *
     * @param Rule $rule
     *
     * @return Alternative
     */
    public function add(Rule $rule)
    {
        $this->rules[] = $rule;

        return $this;
    }
}
