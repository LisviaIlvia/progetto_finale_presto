<?php

return [
    'required' => 'Il campo :attribute è obbligatorio.',
    'email' => 'Il campo :attribute deve essere un indirizzo email valido.',
    'min' => [
        'string' => 'Il campo :attribute deve contenere almeno :min caratteri.',
    ],
    'confirmed' => 'La conferma della :attribute non corrisponde.',
    'unique' => ':attribute è già in uso.',
    'password' => [
        'letters' => 'La password deve contenere almeno una lettera.',
        'numbers' => 'La password deve contenere almeno un numero.',
        'symbols' => 'La password deve contenere almeno un simbolo.',
    ],
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
        'images' => [
            'required' => 'Inserisci almeno un\'immagine.',
            'image' => 'Ogni file deve essere un\'immagine.',
            'max' => 'Ogni immagine deve essere di massimo 2MB.',
        ],
        'tag' => [
            'required' => 'Devi selezionare un tag.',
        ],
        'success' => 'Annuncio caricato con successo!',
    ],
];

