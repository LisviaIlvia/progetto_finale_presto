<?php

return [
    'required' => 'This field is required.',
    'email' => [
        'valid' => 'The :attribute field must be a valid email address.',
        'exists' => 'The email is not registered.',
    ],
    'min' => [
        'string' => 'The :attribute field must have at least :min characters.',
    ],
    'confirmed' => 'The confirmation of :attribute does not match.',
    'unique' => ':attribute is already in use.',
    'password' => [
        'incorrect' => 'The email or password is incorrect.',
        'letters' => 'The password must contain at least one letter.',
        'numbers' => 'The password must contain at least one number.',
        'symbols' => 'The password must contain at least one symbol.',
    ],
    'max' => [
        'file' => 'The :attribute file must not exceed :max kilobytes.',
    ],
    'image' => 'The :attribute file must be a valid image.',

    'custom' => [
        'title' => [
            'required' => 'Please enter a title.',
        ],
        'price' => [
            'required' => 'Please enter the price.',
            'numeric' => 'The price must be a number.',
            'decimal' => 'The price can have a maximum of 2 decimal places.',
        ],
        'description' => [
            'required' => 'Please enter a description.',
        ],
        'temporary_images' => [
            'max' => 'You can upload a maximum of 6 images.',
            'required' => 'You must upload at least one photo.',
            'image' => 'The file must be a valid image.',
            'max_size' => 'Each image must be less than 2MB.',
        ],
        'tag' => [
            'required' => 'Please choose a category.',
        ],
        'success' => 'Ad uploaded successfully!',
    ],
];
