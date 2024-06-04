<?php include_once './pages/header.html'; // carrega uma vez apenas

/** Acordo de cavalheiros
 * 
 * $snake_case -> variáveis
 * $camelCase -> variáveis
 * $kebab-case -> imagens
 * $PascalCase -> funções, classes
 *
 * palavra singular -> variáveis, classes, objetos  
 * palavra plural -> arrays, json,
 */

$produtos = [
    [

        'titulo' => 'baldrus gate 3',
        'preco' => '299',
        'avaliacao' => '3',
        'poster' => 'baldurs-gate-3.jpg'

    ],
    [

        'titulo' => 'death stranding',
        'preco' => '139',
        'avaliacao' => '2',
        'poster' => 'death-stranding.png'

    ],
    [

        'titulo' => 'jedi survivo',
        'preco' => '139',
        'avaliacao' => '5',
        'poster' => 'jedi-survivor.png'

    ],
    [

        'titulo' => 'devil may cry',
        'preco' => '399',
        'avaliacao' => '3',
        'poster' => 'devil-may-cry5.png'

    ],
    [

        'titulo' => 'ghost of tshushima',
        'preco' => '439',
        'avaliacao' => '1',
        'poster' => 'ghost-of-tshushima.jpg'

    ],
    [

        'titulo' => 'mirage',
        'preco' => '539',
        'avaliacao' => '5',
        'poster' => 'mirage.png'

    ],
    [

        'titulo' => 'requiem',
        'preco' => '399',
        'avaliacao' => '3',
        'poster' => 'requiem.png'

    ],
    [

        'titulo' => 'valhalla',
        'preco' => '439',
        'avaliacao' => '1',
        'poster' => 'valhalla.jpg'

    ],
    [

        'titulo' => 'mirage',
        'preco' => '839',
        'avaliacao' => '5',
        'poster' => 'wukong.png'

    ],


];



include './pages/produto.php';
