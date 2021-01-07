<?php

class Form {

    public $data;
    public $surround = 'p';

    public function __construct($data =[]) {
        $this->data = $data;
    }
    /**
     * surrounds the input with a html tag
     * @param string the content of an html tag
     * @return string the input surrounded by html tags
     */ 
    private function surround($html) {
        return "<{$this->surround}>{$html}</{$this->surround}>";
    }
    /**
     * allows data to be remembered after submit
     * @param string the index of the data
     * @return mixed either the data or null
     */
    private function getValue($index) {
        return isset($this->data[$index]) ? $this->data[$index] : null;
    }
    /**
     * creates a new form
     * @param string the action of the form
     * @return string the html code for a new form
     */
    public function create($action) {
        return $this->surround('<form action="' . $action . '" method="post">');
    }
    /**
     * creates an input field with a name, an optional type (default = "text"), and an optional array for values (default = null)
     * @param string the input name
     * @param string the input type (optional)
     * @param array the values array
     * @return string the html code for input field or selectors
     */
    public function input($name, $type='text', $values=null) {
        if($type === 'radio') {
            return $this->radioInput($name, $type, $values);
        } else if($type === 'select'){
            return $this->selectInput($name, $type, $values);
        } else if($type === 'checkbox'){
            return $this->checkboxInput($name, $type, $values);
        } else {
            return $this->surround('<input type="' . $type . '" name="' . $name . '" value="' . $this->getValue($name) . '" placeholder="' . $name . '">');
        }
    }
    public function radioInput($name, $type, $values){
        $selectors = '';
        foreach($values as $value) {
            $selector = '<input type="' . $type . '" name="' . $name . '" value="' . $value . '"><label for="' . $value . '">' . ucfirst($value) . '</label><br>';
            $selectors .= $selector;
        }
        return $this->surround($selectors);
        // return $this->surround('<input type="' . $type . '" name="' . $name . '" value="' . $this->getValue($name) . '" placeholder="' . $name . '">' . $selectors);

    }
    public function selectInput($name, $type, $values){
        $selectors = '';
        foreach($values as $value) {
            $selector = '<option value="' . $value . '">' . ucfirst($value) . '</option>';
            $selectors .= $selector;
        }
        return $this->surround('<select name="' . $name . '">' . $selectors . '</select>');
    }
    public function checkboxInput($name, $type, $values){
        $selectors = '';
        foreach($values as $value) {
            $selector = '<input type="' . $type . '" name="' . $name . '" value="' . $value . '"><label for="' . $value . '">' . ucfirst($value) . '</label><br>';
            $selectors .= $selector;
        }
        return $this->surround($selectors);
        // return $this->surround('<input type="' . $type . '" name="' . $name . '" value="' . $this->getValue($name) . '" placeholder="' . $name . '">' . $selectors);

    }
    /**
     * creates a submit button
     * @return string the html code for a submit button
     */
    public function submit() {
        return $this->surround('<button type="submit">Envoyer</button>');
    }
    /**
     * closes the form
     * @return string the html code to close the form
     */
    public function end() {
        return $this->surround('</form>');
    }

}

?>