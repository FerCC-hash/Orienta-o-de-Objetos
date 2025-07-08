<?php

class Receita
{

    //Atributos
    private $descricao;
    private $valor;

    //Métodos
    public function __toString() {
        
            $this->descricao;
            $this->valor;
    }

    //GETs e SETs
    /**
     * Get the value of descricao
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * Set the value of descricao
     */
    public function setDescricao($descricao): self
    {
        $this->descricao = $descricao;

        return $this;
    }

    /**
     * Get the value of valor
     */
    public function getValor()
    {
        return $this->valor;
    }

    /**
     * Set the value of valor
     */
    public function setValor($valor): self
    {
        $this->valor = $valor;

        return $this;
    }
}

//////////////////////////////////////////////////////////////////////////////////////////////

class Despesa
{

    //Atributos
    private $descricao;
    private $valor;

    ///Métodos
    public function __toString() {
        $retorno =
        $this->descricao;
        $this->valor;
        return $retorno;
}

    /**
     * Get the value of valor
     */
    public function getValor()
    {
        return $this->valor;
    }

    /**
     * Set the value of valor
     */
    public function setValor($valor): self
    {
        $this->valor = $valor;

        return $this;
    }

    /**
     * Get the value of descricao
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * Set the value of descricao
     */
    public function setDescricao($descricao): self
    {
        $this->descricao = $descricao;

        return $this;
    }
}
//Programa principal com o menu
$opcao = 0;

$receitas = array();
$despesas = array();

do {
    echo "\n-----------MENU-----------\n";
    echo "1- Adicionar receita\n";
    echo "2- Adicionar despesa\n";
    echo "3- Lista de receita\n";
    echo "4- Lista de despesa\n";
    echo "5- Sumario\n";
    echo "0- SAIR\n";
    $opcao = readline("Escolha a opção: ");
    
    switch($opcao) {
        case 0:
            echo "Programa encerrado!\n";
            break;
        
        case 1:
            echo "\n";
            $receita = new Receita();
            $receita->setDescricao(readline("Informe a descrição: "));
            array_push($receitas, $receita);
            break;

        case 2:
            echo "\n";
            $despesa = new Despesa();
            $despesa->setDescricao(readline("Informe a despesa: "));
            array_push($despesas, $despesa);
            break;

        case 3:
            if(count($receita) > 0) {
                echo "\nResceitas cadastradas: \n";
                foreach($receitas as $r)
                    echo $r;
            } else
                echo "\nReceita não cadastrada!\n";
            
            break;

        case 4:
            if(count($despesa) > 0) {
                echo "\nDespesas informadas: \n";
                foreach($despesas as $d)
                    echo $d;
            } else
                echo "\nEssa despesa não foi cadastrada!\n";
                
            break;    
        
        case 5:
            
        
        default:
            echo "Opção INVÁLIDA!\n";
    }
} while($opcao != 0);
