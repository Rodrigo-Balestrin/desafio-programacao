<?php

// 1) Utilizando a variável $arrayDeClientes de um echo no nome do segundo cliente

$nomes = ['Francisco Souza', 'Guilherme Rosa', 'Arthur Golveia'];
$cliente1 = new stdClass();
$cliente1->nome = $nomes[0];
$cliente2 = new stdClass();
$cliente2->nome = $nomes[1];
$cliente3 = new stdClass();
$cliente3->nome = $nomes[2];
$arrayDeClientes = [$cliente1, $cliente2, $cliente3];

echo $arrayDeClientes[1]->nome;

?>


<?php

// 2) Utilize a estrutura de dados $arrayDeNascimento para adicionar na estrutura $arrayDeClientes a data de nascimento de cada cliente.

$nomes = ['Francisco Souza', 'Guilherme Rosa', 'Arthur Golveia'];
$cliente1 = new stdClass();
$cliente1->nome = $nomes[0];
$cliente2 = new stdClass();
$cliente2->nome = $nomes[1];
$cliente3 = new stdClass();
$cliente3->nome = $nomes[2];
$arrayDeClientes = [$cliente1, $cliente2, $cliente3];

$arrayDeNascimento = [
    'Francisco Souza' => '10-12-1996',
    'Arthur Golveia' => '14-01-2000',
    'Guilherme Rosa' => '26-05-1985',
    'Marcelo Planalto' => '26-05-1985'
];

// Adiciona a data de nascimento ao arrayDeClientes
foreach ($arrayDeClientes as $cliente) {
    $nomeCliente = $cliente->nome;
    
    // Verifica se o nome existe no arrayDeNascimento
    if (isset($arrayDeNascimento[$nomeCliente])) {
        // Adiciona a data de nascimento ao objeto do cliente
        $cliente->dataNascimento = $arrayDeNascimento[$nomeCliente];
    } else {
        // Pode definir um valor padrão caso a data de nascimento não seja encontrada
        $cliente->dataNascimento = 'Data não encontrada';
    }
}

// Exibe os resultados
foreach ($arrayDeClientes as $cliente) {
    echo "Nome: {$cliente->nome}, Data de Nascimento: {$cliente->dataNascimento}<br>";
}

?>


<?php

// 3) Faça a ordenação e impressão da estrutura $arrayDeClientes resultante do exercício 2 pela data de nascimento (pode ser ascendente ou descendente).

$nomes = ['Francisco Souza', 'Guilherme Rosa', 'Arthur Golveia'];
$cliente1 = new stdClass();
$cliente1->nome = $nomes[0];
$cliente2 = new stdClass();
$cliente2->nome = $nomes[1];
$cliente3 = new stdClass();
$cliente3->nome = $nomes[2];
$arrayDeClientes = [$cliente1, $cliente2, $cliente3];

$arrayDeNascimento = [
    'Francisco Souza' => '10-12-1996',
    'Arthur Golveia' => '14-01-2000',
    'Guilherme Rosa' => '26-05-1985',
    'Marcelo Planalto' => '26-05-1985'
];

// Adiciona a data de nascimento ao arrayDeClientes
foreach ($arrayDeClientes as $cliente) {
    $nomeCliente = $cliente->nome;
    
    // Verifica se o nome existe no arrayDeNascimento
    if (isset($arrayDeNascimento[$nomeCliente])) {
        // Adiciona a data de nascimento ao objeto do cliente
        $cliente->dataNascimento = $arrayDeNascimento[$nomeCliente];
    } else {
        // Pode definir um valor padrão caso a data de nascimento não seja encontrada
        $cliente->dataNascimento = 'Data não encontrada';
    }
}

// Função para ordenar os clientes pela data de nascimento
function compararPorDataNascimento($a, $b) {
    return strtotime($a->dataNascimento) - strtotime($b->dataNascimento);
}

// Ordena o arrayDeClientes usando a função de comparação
usort($arrayDeClientes, 'compararPorDataNascimento');

// Exibe os resultados ordenados
foreach ($arrayDeClientes as $cliente) {
    echo "Nome: {$cliente->nome}, Data de Nascimento: {$cliente->dataNascimento}<br>";
}

?>




