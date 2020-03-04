<?php

/**
 * Este é o primeiro código do sistema Eureka. É a partir dele que tudo mais será construído.
 * Meu nome é Rafael de Carvalho Marchesin e eu sou o autor deste sistema.
*/

interface ModeloLista
{
    // Entrada de dados
    public function entradaDados();

    // Armazenamento de dados
    public function armazenamentoDados();

    // Leitura de dados
    public function leituraDados();

    // Deleção de dados
    public function delecaoDados();
}

/**
 * Alguns conceitos que nortearão o site:
 * (A medida que for necessário, essas premissas poderão ser alteradas)
 * 
 * 1. Nenhum dado será definitivamente apagaro.
 * 2. Os dados serão armazenados mesmo que para fins históricos.
 * 3. Escrever código simples e limpo sem comprometer segurança
 * 4. Sempre pensar na expansão do sistema e upgrade de tecnologia
 * 5. Ter em mente sempre o escalonamento
 * 6. O sistema será construído como blocos de encaixe (módulos que se juntam)
*/

/**
 * === CRUD ===
 * C - create
 * R - read
 * U - update
 * D - delete
*/

/**
 * === PRINCÍPIOS ===
 * escrever os princípios
*/