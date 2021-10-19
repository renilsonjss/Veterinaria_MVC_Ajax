<?php

require 'Models/usuarios.php';

Class loginUsuarioController extends Controller
{
    public function index()
    {
        $u = new Usuario();

        if(isset($_POST['email']))
        {
            $email = addslashes($_POST['email']);
            $senha = addslashes($_POST['senha']);

            if(!empty($email) && !empty($senha))
            {
                if($u->logar($email, $senha))
                {
                    echo 'Usuário logado!';
                }
                else
                {
                    ?>
                    <div class="msg-erro">
                        Email e/ou senha incorretos!
                    </div>
                    <?php
                }
            }
            else
            {
                ?>
                <div class="msg-erro">
                    Todos os campos devem ser preenchidos!
                </div>
                <?php
            }
        }

        $this->carregarTemplate('loginUsuario');
    }
}

?>