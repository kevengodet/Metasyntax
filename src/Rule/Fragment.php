<?php

namespace Adagio\Metasyntax\Rule;

interface Fragment
{
    /**
     *
     * @param string $label
     *
     * @return Fragment
     */
    public function label($label);

    /**
     *
     * @param string $name
     *
     * @return Rule
     */
    public function promote($name);
}
