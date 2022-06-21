<?php
session_start();
include_once 'includes/header.inc.php';
include_once 'includes/menu.inc.php';
?>

<div class="row container">
    <div class="col s12">
        <h5 class="light">Edição de Registros</h5><hr>
    </div>
</div>

    <?php
        include_once 'bd/conexao.php';

        $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
        $_SESSION['id'] = $id;
        $querySelect = $con->query("select * from tb_clientes where id='$id'");

        while($registros = $querySelect->fetch_assoc()):
            $nome = $registros['nome'];
            $email = $registros['email'];
            $telefone = $registros['telefone'];
        endwhile;
    ?>

<div class="row container">
        <p>&nbsp;</p>
        <form action="bd/update.php" method="POST" class="col s12">
        <fieldset class="formulario">
            <legend class=""><img src="assets/avatar.svg" alt="[imagem]" width="100"></legend>
            <h5 class="li center">Alteração</h5>

            <!-- Campo Nome -->
            <div class="input-field col s6">
                <i class="material-icons prefix">account_circle</i>
                <input type="text" name="nome" id="nome" maxlength="40" value="<?php echo $nome ?>" required autofocus placeholder="Nome do usuário">
                <label for="nome"></label>
            </div>

            <!-- Campo Email -->
            <div class="input-field col s6">
                <i class="material-icons prefix">email</i>
                <input type="email" name="email" id="email" value="<?php echo $email ?>" maxlength="50" required placeholder="E-mail" >
                <label for="email"></label>
            </div>

            <!-- Campo Telefone -->
            <div class="input-field col s6">
                <i class="material-icons prefix">phone</i>
                <input type="tel" name="telefone" id="telefone" value="<?php echo $telefone ?>" maxlength="15" required placeholder="Telefone">
                <label for="telefone"></label>
                </div>

                <!-- Botões -->
                <div class="input-field col s12 center">
                    <input type="submit" value="cadastrar" class="btn blue">
                    <a href="consultas.php" class="btn red">Cancelar</a>
                </div>
            </fieldset>
        </form>
    </div>

<?php include_once 'includes/footer.inc.php' ?>