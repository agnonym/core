<?php

namespace Apiato\Core\Generator\Interfaces;

interface ComponentsGenerator
{
    /**
     * Reads all data for the component to be generated (as well as the mappings for path, file and stubs)
     *
     * @return  mixed
     */
    public function getUserInputs(): array;
}
