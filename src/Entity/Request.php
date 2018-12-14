<?php
/**
 * Created by PhpStorm.
 * User: Joao.Fardilha
 * Date: 13/12/2018
 * Time: 13:33
 */

namespace App\Entity;

use Exception\RequestException;

class Request
{
    private $word;

    public function __construct(string $word)
    {
        $this->word = $word;

        if(!$this->validateQueryString()) {
            throw new RequestException('Invalid Query String');
        }
    }

    public function getGenericQueryArray() : array
    {
        return [
            'index' => 'll_jan_index,ll_feb_index,ll_mar_index,ll_apr_index,ll_may_index,ll_jun_index,ll_jul_index,ll_aug_index,ll_sep_index,ll_oct_index',
            'body' => [
                'query' => [
                    'bool' => [
                        'should'=>[
                            [ 'match' => [ 'city' => $this->word]],
                            [ 'match' => [ 'status' => $this->word]],
                            [ 'match' => [ 'first_lotto_played' => $this->word]],
                            [ 'match' => [ 'registration_channel' => $this->word]],
                            [ 'match' => [ 'postcode' => $this->word]],
                            [ 'match' => [ 'week' => $this->word]],
                            [ 'match' => [ 'month' => $this->word]]
                        ]
                    ]
                ]
            ]
        ];
    }

    public function getWord() : string
    {
        return $this->word;
    }

    public function validateQueryString() : bool
    {
        //TODO
        return true;
    }
}