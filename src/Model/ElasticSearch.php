<?php
/**
 * Created by PhpStorm.
 * User: Joao.Fardilha
 * Date: 13/12/2018
 * Time: 15:59
 */

namespace App\Model;

use Elasticsearch\ClientBuilder;
use App\Exception\ElasticSearchException;

class ElasticSearch
{
    private $hosts;

    private $client;

    public function __construct(\stdClass $config)
    {
        if(!is_array($config->hosts)) {
            throw new ElasticSearchException( "hosts are not defined");
        }

        $this->hosts = $config->hosts;

        $this->client = ClientBuilder::create()
            ->setHosts($this->hosts)
            ->build();
    }

}