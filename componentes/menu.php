<?php
function menu($pagina) {
    if ($pagina == "Home") {
        $link = <<<HTML
        <ul class="nav nav-underline ms-auto">
            <li class="nav-item">
                <a class="nav-link active" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="listar.php">Listar</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="form_cadastro.php">Cadastrar</a>
            </li>
        </ul>
HTML;
    } elseif ($pagina == "Listar") {
        $link = <<<HTML
        <ul class="nav nav-underline ms-auto">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="listar.php">Listar</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="form_cadastro.php">Cadastrar</a>
            </li>
        </ul>
HTML;
    } elseif ($pagina == "Cadastrar") {
        $link = <<<HTML
        <ul class="nav nav-underline ms-auto">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="listar.php">Listar</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="form_cadastro.php">Cadastrar</a>
            </li>
        </ul>
HTML;
    }

    // Exibe o HTML do cabeçalho
    echo <<<HTML
    <header class="container-fluid mb-5">
        <nav class="navbar navbar-expand-lg bg-body-tertiary py-3">
            <div class="container-fluid">
                <a class="navbar-brand d-flex align-items-center" href="#">
                    <img src="images/pilha-de-livros.png" alt="Logo" width="70" height="56" class="me-2">
                    <span style="font-size: 1.6rem;">Biblioteca</span>
                </a>    
                $link
            </div>
        </nav>
    </header>
HTML;
}
?>
