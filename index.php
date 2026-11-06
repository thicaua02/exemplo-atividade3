<?php 
    require_once "./Cliente.php";
    $cliente1 = new Cliente("Fulano", "Masculino", 26, 11987654321, "fulano@email.com");
    $cliente2 = new Cliente("Ciclano", "Masculino", 26, 11987654321, "ciclano@email.com");
    $cliente3 = new Cliente("Deltrano", "Masculino", 26, 11987654321, "deltrano@email.com");
    $cliente4 = new Cliente("Beltrano", "Masculino", 26, 11987654321, "beltrano@email.com");
    $clientes = [$cliente1, $cliente2, $cliente3, $cliente4];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo</title>
</head>
<body>
    <h1>Lista de Clientes</h1>
    <table border="3">
        <thead>
            <th>Nome</th>
            <th>Gênero</th>
            <th>Idade</th>
            <th>Telefone</th>
            <th>E-mail</th>
        </thead>
        <tbody>
            <?php foreach ($clientes as $cliente): ?>
                <tr>
                    <td><?= $cliente->getNome() ?></td>
                    <td><?= $cliente->getGenero() ?></td>
                    <td><?= $cliente->getIdade() ?></td>
                    <td><?= $cliente->getTelefone() ?></td>
                    <td><?= $cliente->getEmailContato() ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>