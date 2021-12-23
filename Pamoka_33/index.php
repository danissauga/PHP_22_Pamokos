<?php

//Validacija

$fields = [
    'prekes_pavadinimas' => 'text',
    'kaina' => 'int',
    'kiekis' => 'int'
];

//Schema

$post = [
    'prekes_pavadinimas' => 'citrina',
    'kaina' => 10,
    'kiekis' => 2
];

class Validator {

    public $post; //$_POST
    public $fields;

    public function __construct($post, $fields) {

        $this->post   = $post;
        $this->fields = $fields;

       // $this->process_fields();
    }
    public function process_fields() {

        $rezultatas = true;

        foreach($this->fields as $key => $val) {

            if( $this->process_field($key, $this->post) ) {

                switch($val) {
                    case 'text':
                        if ( !is_string($this->post[$key]) )
                            $rezultatas = false;
                    break;
                    case 'int':
                        if ( !is_integer($this->post[$key]) )
                            $rezultatas = false;
                    break;
                }
            //echo $this->post[$key] . '<br />';
            }
        }
    return $rezultatas;
    }
    public function process_field($field) {
        return array_key_exists($field, $this->post) ? true : false;
    }

}

//new Validator($_POST['prekes'], $fields);
$objektas = new Validator($post, $fields);

if($objektas->process_fields()) {
    echo 'Yra';
} else {
    echo 'Nenustatyta klaida, kreipkitės į administratorių!';
}
//print_r($objektas);

//MVC