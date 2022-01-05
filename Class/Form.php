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
        <input class="form-input" id="request-form-' .$key. '" type="text" name="' .$key. '" data-constraints="@Required">
        <label class="form-label" for="request-form-' .$key. '">' .ucfirst($key). '</label>
    ';
  }
  
  /**
   * createSelect
   *
   * @param  string $option1
   * @param  string $option2
   * @param  string $option3
   * @return void
   */
  public function createSelect(string $option1, string $option2, string $option3): void
  {
    echo '
      <select class="form-input select-filter" id="request-form-select" data-minimum-results-for-search="Infinity">
      <option>' .$option1. '</option>
      <option value="' .$option1. '">' .$option1. '</option>
      <option value="' .$option2. '">' .$option2. '</option>
      <option value="' .$option3. '">' .$option3. '</option>
      </select>
    ';
  }

  public function createTextarea(): void
  {
    echo '
      <textarea class="form-input" id="feedback-2-message" name="message" data-constraints="@Required"></textarea>
      <label class="form-label" for="feedback-2-message">Message</label>
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