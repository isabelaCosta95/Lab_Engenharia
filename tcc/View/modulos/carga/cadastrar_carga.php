<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap">
    <link rel="stylesheet" href="/tcc/View/includes/css/style.css">
    <title>Cadastro Carga</title>
</head>
<body>
    <div class="header">
        <?php include PATH_VIEW . 'includes/cabecalho.php'; ?>
    </div>
    
    <div class="spacer"></div>

    <div class="menu">
        <?php include PATH_VIEW . 'includes/menu.php' ?>
    </div>
    <div class="conteudo">
        <div class="titulo-pagina">
            <h1>Cadastrar Carga</h1>
        </div>
        <div class="formulario">
            <form method="post" action="/tcc/carga/salvar">
                <div class="form-section">
                    <h2>Dados</h2>
                    <div class="form-row">
                        <div class="form-column">
                            <label>Cliente
                                <input name="cliente" value="<?= isset($dados_car) && isset($dados_car->cliente) ? $dados_car->cliente : "" ?>" type="text"/>
                            </label>

                            <label>Produto
                                <input name="produto" value="<?= isset($dados_car) && isset($dados_car->produto) ? $dados_car->produto : "" ?>" type="text"/>
                            </label>
                        </div>
                        <div class="form-column">
                            <label>Quantidade
                                <input name="quantidade" value="<?= isset($dados_car) && isset($dados_car->quantidade) ? $dados_car->quantidade : "" ?>" type="text"/>
                            </label>

                            <label>Valor total
                                <input name="valor_total" value="<?= isset($dados_car) && isset($dados_car->valor_total) ? $dados_car->valor_total : "" ?>" type="text" readonly/>
                            </label>

                            <label>Status
                                <input name="status" value="<?= isset($dados_car) && isset($dados_car->status) ? $dados_car->status : "" ?>" type="text" readonly/>
                            </label>
                        </div>
                    </div>    
                </div>

                <!-- Campo oculto para o ID (aparece apenas se houver um ID) -->
                <?php if (isset($dados_car)): ?>
                    <input type="hidden" name="id" value="<?= $dados_car->id ?>">
                <?php endif; ?>

                <div class="form-buttons">
                    <!-- Botão dinâmico -->
                    <button type="submit">
                        <?= isset($dados_car) ? 'Alterar' : 'Cadastrar' ?>
                    </button>

                    <button type="button" class="btn-consultar" onclick="window.location.href='/tcc/carga'">Consultar</button>
                    <button type="button" class="btn-consultar" onclick="window.location.href='/tcc/carga'">Associar Viagem</button>
                    <button type="button" class="btn-consultar" onclick="window.location.href='/tcc/carga'">Contas a Receber</button>
                    <?php if (isset($dados_car)): ?>
                        <button type="button" class="btn-excluir" onclick="window.location.href='/tcc/carga/excluir?id=<?= $dados_car->id ?>'">
                            Excluir
                        </button>
                    <?php endif; ?>
                </div>
            </form>
        </div>
    </div>
        