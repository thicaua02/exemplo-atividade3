<?php
class Cliente {
    /* Utilizando o método "__construct" para 
    iniciar as propriedades atráves dos parâmetros 
    quando o objeto for instânciado. */
    public function __construct(
        /* Declarando as propriedades atráves
        dos parametros do método "__construct" */
        private string $nome,
        private string $genero,
        private int $idade,
        private int $telefone,
        private string $emailContato
    ) {
        /* Fazendo a atribuição dos parâmetros 
        recebidos na criação da instância, colacando-os 
        nas propriedades declaradas lá em cima. */
        $this->nome = $nome;
        $this->genero = $genero;
        $this->idade = $idade;
        $this->telefone = $telefone;
        $this->emailContato = $emailContato;
    }

    public function getNome() : string {
        return $this->nome;
    }

    public function getGenero() : string {
        return $this->genero;
    }

    public function getIdade() : string {
        return $this->idade;
    }

    public function getTelefone() : string {
        return $this->telefone;
    }

    public function getEmailContato() : string {
        return $this->emailContato;
    }
}

/* class Cliente {
    private string $nome;
    private string $genero;
    private int $idade;
    private int $telefone;
    private string $emailContato;

    public function __construct(
        string $nome, 
        string $genero,
        int $idade,
        int $telefone,
        string $emailContato
    ) {
        $this->nome = $nome;
        $this->genero = $genero;
        $this->idade = $idade;
        $this->telefone = $telefone;
        $this->emailContato = $emailContato;
    }
} 
*/
