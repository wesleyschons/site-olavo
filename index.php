<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
</head>

<body>
    <header id="header-sgbr">
        <a href="/">
            <img src="https://sgbr.com.br/assets/site/img/logo-sgbr.png" alt="SGBR" title="SGBR">
        </a>
        <nav></nav>
    </header>
    <section id="produtos" class="container">
        <table id="table-produtos">
            <thead>
                <th>Produto</th>
                <th>Quantidade</th>
                <th>Preço venda</th>
                <th>Ações</th>
            </thead>
            <tbody>
                <?php
                require 'backend/products.php';
                while ($row = mysqli_fetch_array($results)) {
                ?>   
                    <tr>
                    <td><?= $row['produto'] ?></td>
                    <td><?= number_format($row['qtde'], 2, ',', '.') ?> </td>
                    <td><?= number_format($row['precovenda'], 2, ',', '.') ?></td>
                    <td><a href="backend/products.php?delid=<?= $row['controle'] ?>" class="delete" title="Remover registro" onclick="return confirm('Deseja realmente apagar o registro?');">Apagar</a></td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </section>
    <footer></footer>

</body>

</html>