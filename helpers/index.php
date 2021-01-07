<?php 
echo "index";

require("form.php");
require("html.php");
require("validator");

$form = new Form($_POST);

// open form
echo $form->create("#");
// username
echo $form->input("username");
// password
echo $form->input("password", "password");
// message
echo $form->input("message", "textarea");
// gender
echo $form->input("gender", "radio", ["male", "female", "other"]);
// select
echo $form->input("status", "select", ["status","single", "married"]);
// checkbox
echo $form->input("pets", "checkbox", ["cats", "dogs", "other animals"]);
// submit
echo $form->submit();
// close form
echo $form->end();

/*$form = new Form(['username' => 'Roger']);

    // var_dump($form->data);
    // die();

    echo $form->input('username');
    echo $form->input('password');
    echo $form->submit();

    $form = new Form();

    echo $form->input('aze');
    echo $form->input('aze');
    echo $form->input('aze');
    echo $form->input('aze');
    echo $form->input('aze');
    echo $form->submit();

*/

?>

<!-- </form> -->


<?php 
/*
class Form {
    protected $name;
    protected $fields = [];
    public function __construct(string $name, array $fields) {
        $this->name = $name;
        foreach($fields as $fieldName => $fieldType) {
            createField($fieldName, $fieldType);
        }
        createSubmit();
    }
    public function createField() {
        echo("<input type='" . $fieldType . "' name='" . $fieldName . "'>");
    }
    public function createSubmit() {
        echo("<input type='submit' name='submit' value='submit'>");
    }
}

$new_user = new Form("new_user", ["name" => "text", "password" => "text", "email" => "email"]);
*/
?>