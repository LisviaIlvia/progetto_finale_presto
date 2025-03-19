<?php

return [
    'required' => 'The :attribute field is required.',
    'email' => [
        'valid' => 'The :attribute must be a valid email address.',
        'exists' => 'The email is not registered.',

    ],
    'min' => [
        'string' => 'The :attribute must be at least :min characters.',
    ],
    'confirmed' => 'The :attribute confirmation does not match.',
    'unique' => ':attribute is already in use.',
    'password' => [
        'incorrect' => 'The email or password is incorrect.',
        'letters' => 'The password must contain at least one letter.',
        'numbers' => 'The password must contain at least one number.',
        'symbols' => 'The password must contain at least one symbol.',
    ],
    'custom' => [
        'title' => [
            'required' => 'Enter a title.',
        ],
        'price' => [
            'required' => 'Enter the price.',
            'numeric' => 'The price must be a number.',
            'decimal' => 'The price must have up to 2 decimal places.',
        ],
        'description' => [
            'required' => 'Enter a description.',
        ],
        'images' => [
            'required' => 'Upload at least one image.',
            'image' => 'Each file must be an image.',
            'max' => 'Each image must be a maximum of 2MB.',

        ],
        'tag' => [
            'required' => 'You must select a tag.',
        ],
        'success' => 'Ad uploaded successfully!',
    ],
];
