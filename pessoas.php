<?php
$pessoas = ['lista' => 
    ['nome' => 'Maria', 'idiomas' => ['mandarim', 'inglês', 'espanhol'], 'informatica' => ['Office', 'Java', 'HTML', 'CSS', 'PHP', 'Phyton'] ],
    ['nome' => 'João', 'idiomas' => 'inglês', 'informatica' => ['Office', 'Photoshop']],
    ['nome' => 'José', 'idiomas' => ['francês', 'alemão'], 'informatica' => ['C', 'C#']],
    ['nome' => 'Enzo', 'idomas' => ['inglês', 'espanhol'], 'informatica' => ['HTML', 'CSS']],
];


//transformando o array associativo em json. Vai imprimir na tela e depois é só colocar em um arquivo .json
$json = json_encode($pessoas);
echo "$json";


?>