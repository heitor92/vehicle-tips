<div class="modal fade" id="loginUser" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="upsertTipsLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="upsertTipsLabel">Login</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="user-login">
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="userEmailLogin" placeholder="name@example.com">
                        <label for="userEmailLogin">Email</label>
                        <div id="email-error" class="invalid-tooltip"> 
                        </div>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="userPasswordLogin" placeholder="Password" autocomplete="on">
                        <label for="userPasswordLogin">Senha</label>
                        <div id="password-error" class="invalid-tooltip"> 
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-dark" data-bs-dismiss="modal">Fechar</button>
                <button type="button" class="btn btn-warning" onclick="LoginUser.login()">Logar</button>
            </div>
        </div>
    </div>
</div>