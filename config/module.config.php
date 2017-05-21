<?php

declare(strict_types=1);

return [
    'view_manager' => [
        'display_not_found_reason' => false,
        'display_exceptions' => false,
        'template_map' => [
            'layout/layout' => __DIR__ . '/../view/layout/layout.phtml',
            'email/receipt' => __DIR__ . '/../view/email/receipt.phtml',
            'tickets/ticket/select-tickets' => __DIR__ . '/../view/tickets/ticket/select-tickets.phtml',
            'tickets/ticket/complete' => __DIR__ . '/../view/tickets/ticket/complete.phtml',
            'tickets/ticket/manage' => __DIR__ . '/../view/tickets/ticket/manage.phtml',
            'tickets/ticket/purchase' => __DIR__ . '/../view/tickets/ticket/purchase.phtml',
            'tickets/ticket/_orderInformation' => __DIR__ . '/../view/tickets/ticket/_orderInformation.phtml',
        ],
    ],
    'mailconf' => [
        'purchase' => [
            'subject' => 'Your ScotlandPHP Ticket Receipt',
            'from' => 'organisers@scotlandphp.co.uk',
        ],
    ],
    'form_elements' => [
        'delegators' => [
            \OpenTickets\Tickets\Form\ManageTicket::class => [
                \OpenTickets\Tickets\Form\FormInputFilterDelegator::class,
            ],
        ],
    ],
    'input_filter_specs' => [
        \OpenTickets\Tickets\Form\ManageTicket::class => [
            'delegate' => [
                'firstname' => [
                    'required' => true,
                    'validators' => [
                        [
                            'name' => \Zend\Validator\StringLength::class,
                            'options' => [
                                'min' => 3,
                                'max' => 10,
                            ],
                        ],

                    ],
                ],
            ],
        ],
    ],
];
