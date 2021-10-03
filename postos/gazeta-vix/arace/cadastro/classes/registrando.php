<?php

/**
 * Classe Pegistrando
 * handles Para registrar novos usuarios
 */
class Registration
{
    /**
     * @var objeto para $db_connection Conexão com o Banco de Dados MySQL
     */
    private $db_connection = null;
    /**
     * @var array $errors Coletor de mensagens de erros
     */
    public $errors = array();
    /**
     * @var array $messages Coletor de sucesso /mensagens neutras
     */
    public $messages = array();

    /**
     *  A função "__construct()" vai iniciar automaticamente os objetos da classe em sua plena criação
     * voce pode chamar ou declarar ela mais tarde jus a variavel global "$registration = new Registration();"
     */
    public function __construct()
    {
        if (isset($_POST["register"])) {
            $this->registerNewUser();
        }
    }

    /**
     * Caminhando no processo de registro. Verificando possiveis erros dentro do envoltro das chamadas SQL
     * e criando um novo novo nome de usuario no banco de dados
     */
    private function registerNewUser()
    {
        if (empty($_POST['user_name'])) {
            $this->errors[] = "
				<div id='nomedeUsuarioBranco'>
				<div class='row frid-responsive'>
				<div class='column'>
				<div class='alert background-warning'><em class='fa fa-warning' ></em> Nome de usuário em branco.</div>
				</div>
				</div>
				</div>";
        } elseif (empty($_POST['user_password_new']) || empty($_POST['user_password_repeat'])) {
            $this->errors[] = "<div id='nomedeUsuarioBranco'>
				<div class='row frid-responsive'>
				<div class='column'>
				<div class='alert background-warning'><em class='fa fa-warning' ></em>Senha em branco.</div>
				</div>
				</div>
				</div>
			";
        } elseif ($_POST['user_password_new'] !== $_POST['user_password_repeat']) {
            $this->errors[] = "
			<div id='nomeSenhanaoSaoIguais'>
			<div class='row grid-responsive'>
			<div class='column'>
			<div class='alert background-danger'><em class='fa fa-times-circle'></em>Ops... As senhas não são iguais.</div>
			</div>
			</div>
			</div>
			";
        } elseif (strlen($_POST['user_password_new']) < 6) {
            $this->errors[] = "
			<div id='nomedeUsuarioBranco'>
				<div class='row frid-responsive'>
				<div class='column'>
				<div class='alert background-warning'><em class='fa fa-warning' ></em>Senha dever ser no minimo de 6 caracteres.</div>
				</div>
				</div>
				</div>
				";
        } elseif (strlen($_POST['user_name']) > 64 || strlen($_POST['user_name']) < 2) {
            $this->errors[] = "
			<div id='nomedeUsuarioBranco'>
				<div class='row frid-responsive'>
				<div class='column'>
				<div class='alert background-warning'><em class='fa fa-warning' ></em>Nome deve ser de 2 a 64 caracteres.</div>
				</div>
				</div>
				</div>
				";
        } elseif (!preg_match('/^[a-z\d]{2,64}$/i', $_POST['user_name'])) {
            $this->errors[] = "
			<div id='nomedeUsuarioBranco'>
				<div class='row frid-responsive'>
				<div class='column'>
				<div class='alert background-warning'><em class='fa fa-warning' ></em>Nome de usuario não pode conter caracteres especiais, somente a-Z e numeros, contendo 2 a 64 caracteres.</div>
				</div>
				</div>
				</div>
				";
        } elseif (empty($_POST['user_email'])) {
            $this->errors[] = "
			<div id='nomedeUsuarioBranco'>
				<div class='row frid-responsive'>
				<div class='column'>
				<div class='alert background-warning'><em class='fa fa-warning' ></em>O campo e-mail não pode ficar em branco.</div>
				</div>
				</div>
				</div>
				";
        } elseif (strlen($_POST['user_email']) > 64) {
            $this->errors[] = "
			<div id='nomedeUsuarioBranco'>
				<div class='row frid-responsive'>
				<div class='column'>
				<div class='alert background-warning'><em class='fa fa-warning' ></em>O campo de e-mail não pode ultrapassar 64 caracteres.</div>
				</div>
				</div>
				</div>
				";
        } elseif (!filter_var($_POST['user_email'], FILTER_VALIDATE_EMAIL)) {
            $this->errors[] = "
			<div id='nomedeUsuarioBranco'>
				<div class='row frid-responsive'>
				<div class='column'>
				<div class='alert background-warning'><em class='fa fa-warning' ></em>Seu e-mail não é um formato de e-mail valido.</div>
				</div>
				</div>
				</div>
				";
        } elseif (!empty($_POST['user_name'])
            && strlen($_POST['user_name']) <= 64
            && strlen($_POST['user_name']) >= 2
            && preg_match('/^[a-z\d]{2,64}$/i', $_POST['user_name'])
            && !empty($_POST['user_email'])
            && strlen($_POST['user_email']) <= 64
            && filter_var($_POST['user_email'], FILTER_VALIDATE_EMAIL)
            && !empty($_POST['user_password_new'])
            && !empty($_POST['user_password_repeat'])
            && ($_POST['user_password_new'] === $_POST['user_password_repeat'])
        ) {
            // create a database connection
            $this->db_connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

            // change character set to utf8 and check it
            if (!$this->db_connection->set_charset("utf8")) {
                $this->errors[] = $this->db_connection->error;
            }

            // if no connection errors (= working database connection)
            if (!$this->db_connection->connect_errno) {

                // escaping, additionally removing everything that could be (html/javascript-) code
                $user_name = $this->db_connection->real_escape_string(strip_tags($_POST['user_name'], ENT_QUOTES));
                $user_email = $this->db_connection->real_escape_string(strip_tags($_POST['user_email'], ENT_QUOTES));

                $user_password = $_POST['user_password_new'];

                // crypt the user's password with PHP 5.5's password_hash() function, results in a 60 character
                // hash string. the PASSWORD_DEFAULT constant is defined by the PHP 5.5, or if you are using
                // PHP 5.3/5.4, by the password hashing compatibility library
                $user_password_hash = password_hash($user_password, PASSWORD_DEFAULT);

                // check if user or email address already exists
                $sql = "SELECT * FROM users WHERE user_name = '" . $user_name . "' OR user_email = '" . $user_email . "';";
                $query_check_user_name = $this->db_connection->query($sql);

                if ($query_check_user_name->num_rows == 1) {
                    $this->errors[] = "
			<div id='nomeSenhanaoSaoIguais'>
			<div class='row grid-responsive'>
			<div class='column'>
			<div class='alert background-danger'><em class='fa fa-times-circle'></em>Sinto muito... o nome de usuário/e-mail já foram cadastrados.</div>
			</div>
			</div>
			</div>
			";
                } else {
                    // write new user's data into database
                    $sql = "INSERT INTO users (user_name, user_password_hash, user_email)
                            VALUES('" . $user_name . "', '" . $user_password_hash . "', '" . $user_email . "');";
                    $query_new_user_insert = $this->db_connection->query($sql);

                    // Se tudo der certo exibir uma mensagem div com a frase abaixo
                    if ($query_new_user_insert) {
                        $this->messages[] = "<div id='mensagemEnvioOK'>
	<div class='row frid-responsive'>
	<div class='column' id='mensagemEnvio1'>
	<div class='alert background-success' id='mensagemEnvio2'><em class='fa fa-thumbs-up' ></em> Sua conta foi criada cm sucesso. Faça o login agora!</div>
</div>
</div>
	</div>";
                    } else {
                        $this->errors[] = "
			<div id='nomeSenhanaoSaoIguais'>
			<div class='row grid-responsive'>
			<div class='column'>
			<div class='alert background-danger'><em class='fa fa-times-circle'></em>Sinto muito, não foi possivel realizar o registro de um novo usuário. Por favor tente novamente mais tarde ou contactar o administrador da rede</div>
			</div>
			</div>
			</div>
			";
                    }
                }
            } else {
                $this->errors[] = "
			<div id='nomeSenhanaoSaoIguais'>
			<div class='row grid-responsive'>
			<div class='column'>
			<div class='alert background-danger'><em class='fa fa-times-circle'></em>Sinto muito, não foi possivel conectar ao Banco de Dados</div>
			</div>
			</div>
			</div>
			";
            }
        } else {
            $this->errors[] = "
			<div id='nomeSenhanaoSaoIguais'>
			<div class='row grid-responsive'>
			<div class='column'>
			<div class='alert background-danger'><em class='fa fa-times-circle'></em>Ops... Alguma coisa deu errado.... Algo de Errado não estar certo.</div>
			</div>
			</div>
			</div>
			";
        }
    }
}
