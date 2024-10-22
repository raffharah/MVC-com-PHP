<?php
include __DIR__ . "/../header-html.php"; ?>
    <form action="/realiza-login" method="post">
        <div class="form-group">
            <label for="email">E-mail:</label>
            <input type="email" name="email" id="email" placeholder="E-mail" class="form-control"></input>
        </div>
        <div class="form-group">
            <label for="password">Senha:</label>
            <input type="password" name="senha" id="senha" placeholder="Senha" class="form-control"></input>
        </div>
        <button class="btn btn-primary">Entrar</button>
    </form>

<?php include __DIR__ . "/../footer-html.php";  ?>