<?php

/**
 * Classe de login
 * handles para os usuarios processar o login e logout
 */
class Login
{
    /**
     * @var objeto para a conexão do Banco de Dados
     */
    private $db_connection = null;
    /**
     * @var array Collection para as mensagens de erros
     */
    public $errors = array();
    /**
     * @var array Collection para sucessor/ mensagem neutra
     */
    public $messages = array();

    /**
     * A função "__construct()" Vai iniciar automaticamente a cada evento do objeto descrito na classe criada
     * por voce "$login = new Login();"
     */
    public function __construct()
    {
        // Criar/Ler a sessão, absolutamente necessario 
        session_start();

        // Checar a possibilidade de ação de login
        // Se o user não realizar o o click no botão de logout
        if (isset($_GET["logout"])) {
            $this->doLogout();
        }
        // login via post data (Se o usuario submente ao form de login verdadeira)
        elseif (isset($_POST["login"])) {
            $this->dologinWithPostData();
        }
    }

    /**
     * Logando por requisição POST data
     */
    private function dologinWithPostData()
    {
        // Checando os content de login e as form devidamente escritas
        if (empty($_POST['user_name'])) {
            $this->errors[] = "Campo de nome de usuário esta vazio.";
        } elseif (empty($_POST['user_password'])) {
            $this->errors[] = "Campo de senha esta vazio";
        } elseif (!empty($_POST['user_name']) && !empty($_POST['user_password'])) {

            // Criando a conexãop com o Banco de Dados, usando as constantes recuperada dos campos de form e o arquivo de conexão config/db.php (E que nois carregamos o index.php)
            $this->db_connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

            // Verificar os caracteristica de texto presetados via codificaçãoutf8
            if (!$this->db_connection->set_charset("utf8")) {
                $this->errors[] = $this->db_connection->error;
            }

            // Se não tiver erro na conexão do banco de dados
            if (!$this->db_connection->connect_errno) {

                // Sair do POST stuff
                $user_name = $this->db_connection->real_escape_string($_POST['user_name']);

                $sql = "SELECT user_name, user_email, user_password_hash
                        FROM users
                        WHERE user_name = '" . $user_name . "' OR user_email = '" . $user_name . "';";
                $result_of_login_check = $this->db_connection->query($sql);

                // Se houver algum usuario ja cadastrado
                if ($result_of_login_check->num_rows == 1) {

                    // Verificar os row (row dos objetos)
                    $result_row = $result_of_login_check->fetch_object();

                    // Usando o PHP 5.5's password_verify() função que realizar a verificação das providencias de senha
                    // o hash sendo gerado para cada usuario e suas senhas
                    if (password_verify($_POST['user_password'], $result_row->user_password_hash)) {

                        // Escrever o dados do usuario na SESSION PHP instroduzindo o seu arquivo no server
                        $_SESSION['user_name'] = $result_row->user_name;
                        $_SESSION['user_email'] = $result_row->user_email;
                        $_SESSION['user_login_status'] = 1;

                    } else {
                        $this->errors[] = "
								
			<center>
			<div id='mensagemERROX2'> 
			<div class='row grid-responsive'>
			<div class='column'>
			<div class='alert background-danger'><em class='fa fa-times-circle'></em>Ops, A senha esta incorreta. Por favor tente novamente</div>
			</div>
			</div>
			</div>
			</center>";
                    }
                } else {
                    $this->errors[] = "
			<center>
			<div id='mensagemERROX1'> 
			<div class='row grid-responsive'>
			<div class='column'>
			<div class='alert background-danger'><em class='fa fa-times-circle'></em>Ops, Esse usuário não existe. Por favor tente novamente</div>
			</div>
			</div>
			</div>
			</center>
			</head>";
                }
            } else {
                $this->errors[] = "
				<center>
			<div id='mensagemERROX1'> 
			<div class='row grid-responsive'>
			<div class='column'>
			<div class='alert background-danger'><em class='fa fa-times-circle'></em>Não foi possivel conectar ao Banco de Dados</div>
			</div>
			</div>
			</div>
			</center>
			</head>";
            }
        }
    }

    /**
     * Pre-Campo de logout
     */
    public function doLogout()
    {
        // Deletando a sessão do usuario
        $_SESSION = array();
        session_destroy();
        // retornando a littler para o freedback de mensagem dizendo que foi realizado o logout
        $this->messages[] = "<div id='mensagemEnvioOK'>
	<div class='row frid-responsive'>
	<div class='column' id='mensagemOKX3'>
	<div class='alert background-success' id='mensagemEnvio2'><em class='fa fa-thumbs-up' ></em> Você realizou o logout </div>
	</div>
	</div>
	</div>";

    }

    /**
     * Simples retorno de estado do usuario para proximo login
     * @return boolean 
     */
    public function isUserLoggedIn()
    {
        if (isset($_SESSION['user_login_status']) AND $_SESSION['user_login_status'] == 1) {
            return true;
        }
        // Retorno padrão
        return false;
    }
}
