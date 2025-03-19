<?php

return [
    'required' => 'El campo :attribute es obligatorio.',
    'email' => [
        'valid' => 'El campo :attribute debe ser una dirección de correo válida.',
        'exists' => 'El correo electrónico no está registrado.',
    ],
    'min' => [
        'string' => 'El campo :attribute debe contener al menos :min caracteres.',
    ],
    'confirmed' => 'La confirmación de :attribute no coincide.',
    'unique' => ':attribute ya está en uso.',
    'password' => [
        'incorrect' => 'El correo electrónico o la contraseña son incorrectos.',
        'letters' => 'La contraseña debe contener al menos una letra.',
        'numbers' => 'La contraseña debe contener al menos un número.',
        'symbols' => 'La contraseña debe contener al menos un símbolo.',
    ],
    'custom' => [
        'title' => [
            'required' => 'Ingresa un título.',
        ],
        'price' => [
            'required' => 'Ingresa el precio.',
            'numeric' => 'El precio debe ser un número.',
            'decimal' => 'El precio debe tener hasta 2 decimales.',
        ],
        'description' => [
            'required' => 'Ingresa una descripción.',
        ],
        'images' => [
            'required' => 'Sube al menos una imagen.',
            'image' => 'Cada archivo debe ser una imagen.',
            'max' => 'Cada imagen debe tener un máximo de 2MB.',
        ],
        'tag' => [
            'required' => 'Debes seleccionar una etiqueta.',
        ],
        'success' => '¡Anuncio cargado con éxito!',
    ],
];
