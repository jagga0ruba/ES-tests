<?php
/**
 * Created by PhpStorm.
 * User: Joao.Fardilha
 * Date: 13/12/2018
 * Time: 15:27
 */

namespace App\Controller;

use App\Entity\Request;
use App\Exception\RequestException;

class RequestInterpreter
{
    private $request;

    public function __construct(array $data)
    {
        if(!isset($data['query'])) {
            throw new RequestException('Query is missing from Request');
        }

        $this->request = new Request($data['query']);
    }

    public function getRequest() : array
    {
        return $this->request->getGenericQueryArray();
    }
}