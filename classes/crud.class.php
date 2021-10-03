<?php

/** Class crud 
*/

class crud {
    private $sql_ins='';
    private $tabela='';
    private $sql_sel='';

    // Caso pretendermos que esta class seja herdada por outras, então alguns atributos podem ser protected

    /**Método construtor
     * @method __construct
     * @param string $tabela
     * @return $this->tabela 
     */
     public function __construct($tabela){ // construtor, nome da tabela como parâmntro
     $this->tabela=$tabela;
     return $this-> tabela;
     }

     /**Metodo de Inserir
      * @method inserir
      * @param string $campos
      * @param string $valores
      * @param string @diretorioRaiz
      * @example: @campos="ID, nome, tipo, diretorio", @diretorioRaiz='ID'
      * @return void
      */

      public function inserir($campos, $valores){ // Função de inserção dos campos e seus respectivos valores como paramentos
        $this->sql_ins="INSERT INTO" .$this->tabela. "($campo) VALUES ($valores)";
        //if(!$this)
    }
}
