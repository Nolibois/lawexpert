<?php

class ClassStyle {

  private array $listClasses;


  public function __construct(array $listClasses) {

    $this->listClasses = $listClasses;

  }

 
  /**
   * getListClasses
   *
   * @return array
   */
  public function getListClasses(): array
  {
    return $this->listClasses;
  }

  /**
   * setListClasses
   *
   * @param  mixed $listClasses
   * @return void
   */
  public function setListClasses($listClasses): void
  {
    $this->listClasses = $listClasses;
  }


  
}