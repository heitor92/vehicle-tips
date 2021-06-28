<div class="modal fade" id="signUpUser" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="upsertTipsLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="upsertTipsLabel">Cadastre-se</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="user-form-signup">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="userName" placeholder="name@example.com">
                        <label for="userName">Nome de Usuário</label>
                        <div id="name-error" class="invalid-tooltip"> 
                        </div>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="userEmail" placeholder="name@example.com" required>
                        <label for="userEmail">Email</label>
                        <div id="email-error" class="invalid-tooltip"> 
                        </div>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="userPassword" placeholder="Password"
                            autocomplete="on">
                        <label for="userPassword">Senha</label>
                        <div id="password-error" class="invalid-tooltip"> 
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-dark" data-bs-dismiss="modal">Fechar</button>
                <button type="button" class="btn btn-warning" onclick="SignUpUser.register()">Cadastra-se</button>
            </div>
        </div>
    </div>
</div>