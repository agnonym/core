<?php

namespace Apiato\Core\Abstracts\Actions;

use Apiato\Core\Traits\HasRequestCriteriaTrait;

abstract class Action
{
    use HasRequestCriteriaTrait;

    protected string $ui;

    public function __invoke(...$arguments)
    {
        return static::run(...$arguments);
    }

    public function getUI()
    {
        return $this->ui;
    }

    public function setUI($interface)
    {
        $this->ui = $interface;

        return $this;
    }
}
