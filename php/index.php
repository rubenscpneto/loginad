<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMTIC</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <script src="../../biblioteca/js/jquery-1.4.4.min.js"></script>
    <script src="../../biblioteca/js/jquery-1.4.4.min.js"></script>
    <link rel="icon" type="image" href="simboloPmfBranco.png">
</head>
<body>
    
    <!-- Inclui a sidebar -->
    <?php include_once "sidebar.php" ?>


    <!-- Área de conteúdo dinâmico -->
    <div id="content2" class="container">
        <!-- O conteúdo carregado será inserido aqui -->
    </div>

<script>
    // Função para carregar o conteúdo de uma página sem recarregar a sidebar e o header
    function loadContent(url) {
        $('#content2').load(url);
        // document.getElementById('content2').load(url);
    }

    // Exemplo de como usar o jQuery para carregar conteúdo
    $(document).ready(function() {
        // Carrega o conteúdo inicial
        loadContent('search.php');

    // Navegação com carregamento dinâmico de conteúdo
    // $(document).on('click', '#menu-item1', function(e) {
    //     e.preventDefault();
    //     loadContent('search.php');
    // });

    // $(document).on('click', '#menu-item2', function(e) {
    //     e.preventDefault();
    //     loadContent('cadastro.php');
    // });

    // $(document).on('click', '#menu-item3', function(e) {
    //     e.preventDefault();
    //     loadContent('detalhes.php');
    // });

        // Adicione mais itens de menu conforme necessário
    });

    function abrirchamado(url) {
        alert(url);
        $('#content2').load(url);
    }
</script>
</body>
</html>
