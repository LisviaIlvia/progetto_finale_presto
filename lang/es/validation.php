<?php

return [
    'required' => 'Este campo es obligatorio.',
    'email' => [
        'valid' => 'El campo :attribute debe ser una dirección de correo electrónico válida.',
        'exists' => 'El correo electrónico no está registrado.',
    ],
    'min' => [
        'string' => 'El campo :attribute debe tener al menos :min caracteres.',
    ],
    'confirmed' => 'La confirmación de :attribute no coincide.',
    'unique' => ':attribute ya está en uso.',
    'password' => [
        'incorrect' => 'El correo electrónico o la contraseña son incorrectos.',
        'letters' => 'La contraseña debe contener al menos una letra.',
        'numbers' => 'La contraseña debe contener al menos un número.',
        'symbols' => 'La contraseña debe contener al menos un símbolo.',
    ],
    'max' => [
        'file' => 'El archivo :attribute no debe superar los :max kilobytes.',
    ],
    'image' => 'El archivo :attribute debe ser una imagen válida.',

    'custom' => [
        'title' => [
            'required' => 'Por favor ingrese un título.',
        ],
        'price' => [
            'required' => 'Por favor ingrese el precio.',
            'numeric' => 'El precio debe ser un número.',
            'decimal' => 'El precio debe tener un máximo de 2 decimales.',
        ],
        'description' => [
            'required' => 'Por favor ingrese una descripción.',
        ],
        'temporary_images' => [
            'max' => 'Puedes cargar un máximo de 6 imágenes.',
            'required' => 'Debes cargar al menos una foto.',
            'image' => 'El archivo debe ser una imagen válida.',
            'max_size' => 'Cada imagen debe ser inferior a 2MB.',
        ],
        'tag' => [
            'required' => 'Por favor elige una categoría.',
        ],
        'success' => '¡Anuncio cargado con éxito!',
    ],
];
