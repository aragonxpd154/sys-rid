<?php
class conexao
{

    /*
        Altere as variaveis a seguir caso necessario
    */

    private $db_host = 'localhost'; // servidor
    private $db_user = 'Administrador'; // usuario do banco
    private $db_pass = 'G@zeta1234'; // senha do usuario do banco
    private $db_name = 'gazeta-vix'; // nome do banco

    private $con = false;

  
    public function connect(){

     // estabelece conexao
            $con = new mysqli('localhost', 'Administrador', 'G@zeta1234', 'gazeta-vix');
            if(mysqli_connect_errno()){
                echo '<h3>Não foi possivel conectar ao servidor de Banco de Dados</h3>';
            }
        }
    public function disconnect() // Fechar conexão
    {
        $con->close();
        }
    }
?>
