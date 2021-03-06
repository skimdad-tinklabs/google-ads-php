<?php

return [
    'interfaces' => [
        'google.ads.googleads.v0.services.KeywordPlanIdeaService' => [
            'GenerateKeywordIdeas' => [
                'method' => 'post',
                'uriTemplate' => '/v0/customers/{customer_id=*}:generateKeywordIdeas',
                'body' => '*',
                'placeholders' => [
                    'customer_id' => [
                        'getters' => [
                            'getCustomerId',
                        ],
                    ],
                ],
            ],
        ],
    ],
];
