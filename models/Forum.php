<?php

class Forum {
  private $id_forum;
  private $titulo;
  private $texto;
  private $tags;
  private $data;
  private $id_topico;
  private $id_usuario;



  


  /**
   * Get the value of id_forum
   */
  public function getIdForum() {
    return $this->id_forum;
  }

  /**
   * Set the value of id_forum
   */
  public function setIdForum($id_forum): self {
    $this->id_forum = $id_forum;
    return $this;
  }

  /**
   * Get the value of titulo
   */
  public function getTitulo() {
    return $this->titulo;
  }

  /**
   * Set the value of titulo
   */
  public function setTitulo($titulo): self {
    $this->titulo = $titulo;
    return $this;
  }

  /**
   * Get the value of texto
   */
  public function getTexto() {
    return $this->texto;
  }

  /**
   * Set the value of texto
   */
  public function setTexto($texto): self {
    $this->texto = $texto;
    return $this;
  }

  /**
   * Get the value of tags
   */
  public function getTags() {
    return $this->tags;
  }

  /**
   * Set the value of tags
   */
  public function setTags($tags): self {
    $this->tags = $tags;
    return $this;
  }

  /**
   * Get the value of data
   */
  public function getData() {
    return $this->data;
  }

  /**
   * Set the value of data
   */
  public function setData($data): self {
    $this->data = $data;
    return $this;
  }

  /**
   * Get the value of id_topico
   */
  public function getIdTopico() {
    return $this->id_topico;
  }

  /**
   * Set the value of id_topico
   */
  public function setIdTopico($id_topico): self {
    $this->id_topico = $id_topico;
    return $this;
  }

  /**
   * Get the value of id_usuario
   */
  public function getIdUsuario() {
    return $this->id_usuario;
  }

  /**
   * Set the value of id_usuario
   */
  public function setIdUsuario($id_usuario): self {
    $this->id_usuario = $id_usuario;
    return $this;
  }
}

?>