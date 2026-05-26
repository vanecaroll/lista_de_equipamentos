<?php

// exibir na tela 5 caixas de texto para o usuário digitar.
for ($i = 1; $i <= 5; $i++) {

    print 'Digite ' . $i . ': <input type="text" name="digite' . $i . '"><br>';
}

echo "<br>";

$Equipamentos = ['teclado', 'mouse', 'fone', 'ssd', 'monitor', 'webcam', 'modem', 'HD'];

foreach ($Equipamentos as $i ){

    print 'Equipamentos: ' . $i . '<br>';
}

echo "<br>";

$alunos = [
    'Vitor' => 10,
    'Vanessa' => 9.8,
    'Beatriz' => 8.5,
    'Ayron' => 6.9,
    'Felipe' => 8,
    'haru' => 2.5,
    'hana' => 3,
];

foreach($alunos as $nome => $nota){

    print "Nome: $nome, Nota: $nota <br>";

}

	?>