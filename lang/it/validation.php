<?php

return [
    'required' => 'Questo campo è obbligatorio.',
    'email' => [
        'valid' => 'Il campo :attribute deve essere un indirizzo email valido.',
        'exists' => 'L\'email non è registrata.',
    ],
    'min' => [
        'string' => 'Il campo :attribute deve contenere almeno :min caratteri.',
    ],
    'confirmed' => 'La conferma di :attribute non corrisponde.',
    'unique' => ':attribute è già in uso.',
    'password' => [
        'incorrect' => 'L\'email o la password sono errate.',
        'letters' => 'La password deve contenere almeno una lettera.',
        'numbers' => 'La password deve contenere almeno un numero.',
        'symbols' => 'La password deve contenere almeno un simbolo.',
    ],
    'max' => [
        'file' => 'Il file :attribute non deve superare i :max kilobyte.',
    ],
    'image' => 'Il file deve essere un\'immagine valida.',

    'custom' => [
        'title' => [
            'required' => 'Inserisci un titolo.',
        ],
        'price' => [
            'required' => 'Inserisci il prezzo.',
            'numeric' => 'Il prezzo deve essere un numero.',
            'decimal' => 'Il prezzo deve avere massimo 2 decimali.',
        ],
        'description' => [
            'required' => 'Inserisci una descrizione.',
        ],
        'temporary_images' => [
            'max' => 'Puoi caricare massimo 6 immagini.',
            'required' => 'Devi inserire almeno una foto.',
            'image' => 'Il file deve essere un\'immagine valida.',
            'max_size' => 'Ogni immagine deve essere inferiore a 2MB.',
        ],
        'tag' => [
            'required' => 'Scegli una categoria.',
        ],
        'success' => 'Annuncio caricato con successo!',
    ],
];

