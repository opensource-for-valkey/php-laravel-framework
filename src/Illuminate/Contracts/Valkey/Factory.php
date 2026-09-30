<?php

namespace Illuminate\Contracts\Valkey;

interface Factory
{
    /**
     * Get a Valkey connection by name.
     *
     * @param  \UnitEnum|string|null  $name
     * @return \Illuminate\Valkey\Connections\Connection
     */
    public function connection($name = null);
}
