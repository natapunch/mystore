<?php
/**
 *
 */
return [
    "root" => [
        "pattern" => "/",
        "method" => "GET",
        "action" => "My\\IndexController@index"
    ],
    "product_list" => [
        "pattern" => "/product",
        "method" => "GET",
        "action" => "My\\IndexController@getAllProduct"
    ],
    "single_product" => [
        "pattern" => "/product/{id}/params/{name}",
        "method" => "GET",
        "variables" => [
            "id" => '\d+'
        ],
        "action" => "My\\IndexController@getOnProduct"
    ]
];