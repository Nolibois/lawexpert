<?php

class Form{

  private array $data; //Form Data

  public function __construct($data){
    $this->data = $data;
  }

  
  /**
   * Get the value of data
   * 
   * @return array
   */ 
  public function getData(): array
  {
    return $this->data;
  }

  
  /**
   * getValue
   *
   * @param  string $key
   * @return string|null
   */
  private function getValue(string $key): string|NULL
  {
    if (isset($this->data[$key])) {
      return $this->data[$key];
    } else {
      return NULL;
    }
    
  }
  
  
  /**
   * createInput
   *
   * @param  string $key
   * @param  string $class
   * @return void
   */
  public function createInput(string $key): void
  {
    echo '
      <div>
        <input class="form-input" id="request-form-' .$key. '" type="text" name="' .$key. '" data-constraints="@Required">
        <label class="form-label" for="request-form-' .$key. '">' .$key. '</label>
      </div>
    ';
  }

  
  /**
   * createSubmit
   *
   * @param  string $text
   * @param  string $class
   * @return void
   */
  public function createSubmit(string $text, string $class = "null"): void
  {
    echo "
      <div>
        <button type='submit' class=$class>$text</button>
      </div>
    ";
  }

}