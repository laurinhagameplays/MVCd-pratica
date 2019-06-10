<html>
    <head>
        <title>template MVC</title>
        <base href="<?= URL_BASE ?>"><!--Esta instrução é super importante e não deve ser mudada!-->

        <link rel="stylesheet" href="./publico/css/app.css">
    </head>
    <body class="container">
        
        <a href="./">Página Inicial</a><br>
        <a href="./cliente/listarClientes">Lista de Clientes</a><br>
        <a href="./produto/listarProdutos">Lista de Produtos</a><br>
        <a href="./produto/listarCategorias">Lista de Categorias</a><br>
        <a href="./cliente/listarNewsletters">Lista de News Letters</a><br><br>
        
        <main class="container">
            <?php require $viewFilePath; ?>
        </main>

    </body>
</html>
