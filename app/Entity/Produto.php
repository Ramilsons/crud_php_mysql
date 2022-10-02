<?php

namespace App\Entity;

use \App\Db\Database;
use \PDO;

class Produto{
  public $id;
  public $titulo;
  public $descricao;
  public $ativo;
  public $preco;
  public $urlImagem;


  public function cadastrar(){
    $obDatabase = new Database('produtos');
    $this->id = $obDatabase->insert([
                                      'titulo'    => $this->titulo,
                                      'descricao' => $this->descricao,
                                      'ativo'     => $this->ativo,
                                      'preco'     => $this->preco,
                                      'urlImagem' => $this->urlImagem, 
                                    ]);

    //RETORNAR SUCESSO
    return true;
  }


  public function atualizar(){
    return (new Database('produtos'))->update('id = '.$this->id,[
                                                                'titulo'    => $this->titulo,
                                                                'descricao' => $this->descricao,
                                                                'ativo'     => $this->ativo,
                                                                'preco'     => $this->preco,
                                                                'urlImagem' => $this->urlImagem, 
                                                              ]);
  }

  public function excluir(){
    return (new Database('produtos'))->delete('id = '.$this->id);
  }


  public static function getProdutos($where = null, $order = null, $limit = null){
    return (new Database('produtos'))->select($where,$order,$limit)
                                  ->fetchAll(PDO::FETCH_CLASS,self::class);
  }


  public static function getProduto($titulo){
    return (new Database('produtos'))->select('titulo LIKE "%'.$titulo.'%"')
                                      ->fetchAll(PDO::FETCH_CLASS,self::class);
  }

  public static function getProdutoById($id){
    return (new Database('produtos'))->select('id = '.$id)
                                  ->fetchObject(self::class);
  }

}