Test technisch inzicht
======================

Uitleg
------

Je hebt een array met data van een aantal personen. Om deze data op het oog nog enigszins te kunnen vergelijken
is het handig als deze in een vaste volgorde staat. Hiertoe heb ik een array aangemaakt met de belangrijkste data
die altijd bovenaan moet staan in dezelfde volgorde: `$sortKeys`. Na deze eigenschappen moet de rest van de data
komen, die soms wel soms niet aanwezig is. Om ook deze nog enigszins te kunnen vergelijken zou ik die wel graag
op alfabetische volgorde hebben.

Voorbeeld
---------

Een voorbeeldje: Peter.
```php
[
    'name' => 'Peter',
    'gender' => 'm',
    'street' => 'Snelweg',
    'city' => 'Amsterdam',
    'bsn' => '87654321',
    'house_number' => 23,
    'phone' => '0611111111',
    'postcode' => '1000AA',
    'iban' => 'NL66INGB0001234567',
],
```

En de `$sortKeys`:
```php
$sortKeys = [
    'name',
    'street',
    'house_number',
    'postcode',
    'city',
    'phone',
];
```

De data van Peter wordt dan:
```php
[
    // Eerst de vaste keys, op volgorde van $sortKeys:
    'name' => 'Peter',
    'street' => 'Snelweg',
    'house_number' => 23,
    'postcode' => '1000AA',
    'city' => 'Amsterdam',
    'phone' => '0611111111',
    // Dan de rest, op alfabetische volgorde
    'bsn' => '87654321',
    'gender' => 'm',
    'iban' => 'NL66INGB0001234567',
]
```

De oplossing
------------

Er zijn honderden manieren om dit op te lossen. Ik ben niet per se op zoek naar de snelste oplossing, niet 
per se naar de makkelijkste. Zoals in alle situaties zoek je naar een middenweg tussen die twee. De uitvoer
heb ik graag in JSON zoals in `expected_output.json`.

Ik verwacht een antwoord als:
```php
<?php
require_once 'data.php';

// Data processing
...
    
// Ouput ...
...
```
