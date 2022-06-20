<?php session_start() ?>
<?php include_once 'includes/header.inc.php'?>

<?php include_once 'includes/menu.inc.php'?>
    <!-- Form de Cadastro -->

    <div class="row container">
        <p>&nbsp;</p>
        <form action="bd/create.php" method="POST" class="col s12">
        <fieldset class="formulario">
            <legend class=""><img src="assets/avatar.svg" alt="[imagem]" width="100"></legend>
            <h5 class="li center">Cadastro de Clientes</h5>

            <?php
                if(isset($_SESSION['msg'])):
                    echo $_SESSION['msg'];
                session_unset();
                endif;
            ?>

            <!-- Campo Nome -->
            <div class="input-field col s6">
                <i class="material-icons prefix">account_circle</i>
                <input type="text" name="nome" id="nome" maxlength="40" required autofocus placeholder="Nome do usuário">
                <label for="nome"></label>
            </div>

            <!-- Campo Email -->
            <div class="input-field col s6">
                <i class="material-icons prefix">email</i>
                <input type="email" name="email" id="email" maxlength="50" required placeholder="E-mail" >
                <label for="email"></label>
            </div>

            <!-- Campo Telefone -->
            <div class="input-field col s6">
                <i class="material-icons prefix">phone</i>
                <input type="tel" name="telefone" id="telefone" maxlength="15" required placeholder="Telefone">
                <label for="telefone"></label>
                </div>

                <!-- Botões -->
                <div class="input-field col s12 center">
                    <input type="submit" value="cadastrar" class="btn blue">
                    <input type="reset" value="limpar" class="btn red">
                </div>
            </fieldset>
        </form>
    </div>
    
<?php include_once 'includes/footer.inc.php' ?>