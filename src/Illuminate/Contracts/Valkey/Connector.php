<?php

namespace Illuminate\Contracts\Valkey;

interface Connector
{
    /**
     * Create a connection to a Valkey instance.
     *
     * @param  array  $config
     * @param  array  $options
     * @return \Illuminate\Valkey\Connections\Connection
     */
    public function connect(array $config, array $options);

    /**
     * Create a connection to a Valkey cluster.
     *
     * @param  array  $config
     * @param  array  $clusterOptions
     * @param  array  $options
     * @return \Illuminate\Valkey\Connections\Connection
     */
    public function connectToCluster(array $config, array $clusterOptions, array $options);
}
