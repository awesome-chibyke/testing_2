<?php

class Validator{

    var $values_to_validate;

    //create an array
    private $array_for_validation_call;

    private  $array_of_validation_types;

    var  $validation_errors = array(), $name_on_form_field, $validation_result;

    function __construct($values_to_validate = array())
    {

        if(count($values_to_validate) == 0){
            return;
        }
        $this->values_to_validate = $values_to_validate;

        $this->getTheValidationTypes();
        $this->returnResult();

    }

    function getParticularValidationType($current_validation_type){

        switch ($current_validation_type){

            case 'empty':
                $this->validate_empty();
                break;
            case 'validate_email':
                $this->validate_email();
                break;
            case 'validate_number':
                $this->validate_number();
                break;
            case 'validate_lenght':
                $this->validate_lenght();
                break;
            default:
                return 'Invalid Validation Type';

        }//

    }

    function getTheValidationTypes(){

        foreach($this->values_to_validate as $k => $value){

            //jump the iteration if the count of inner array is not equal to three
            if(count($value) != 3){
                continue;
            }

            //get the inner array explode the third value of the array that contains
            $exploded_validation_types = explode('|', $value[2]);

            //loop through the exploded values and subject the current field to the validations stated in the array gotten from the explosion
            for($i = 0; $i < count($exploded_validation_types); $i++){

                //cal the particular validation function from the array that controlls the validtion call
                $this->name_on_form_field = $value[0];
                $this->value_under_validation = $_POST[$value[0]];
                $this->field_name = $value[1];
                $this->getParticularValidationType($exploded_validation_types[$i]);

            }

        }

    }

    function validate_empty(){

        if(empty($this->value_under_validation)){
            $this->validation_errors[$this->name_on_form_field] = ucwords($this->field_name).' is required';
        }

    }

    function validate_email(){

        if(!empty($this->value_under_validation)){
            if(!filter_var($this->value_under_validation,FILTER_VALIDATE_EMAIL)){
                $this->validation_errors[$this->name_on_form_field] = ucwords($this->field_name).' must contain a valid email address';
            }
        }
    }

    function validate_number(){

        if(!empty($this->value_under_validation)){
            if(!is_numeric($this->value_under_validation)){
                $this->validation_errors[$this->name_on_form_field] = ucwords($this->field_name).' must be numeric';
            }
        }
    }

    function validate_lenght(){

        if(!empty($this->value_under_validation)){
            if(!is_numeric($this->value_under_validation)){
                $this->validation_errors[$this->name_on_form_field] = ucwords($this->field_name).' must be numeric';
            }
        }
    }

    function validate_name(){

        if(!empty($this->value_under_validation)){
            if(!is_numeric($this->value_under_validation)){
                $this->validation_errors[$this->name_on_form_field] = ucwords($this->field_name).' must be numeric';
            }
        }
    }

    function returnResult(){

        if(count($this->validation_errors) > 0){
            $this->validation_result =  array('error_code'=>1, 'error_statement'=>$this->validation_errors);
        }else{
            $this->validation_result = array('error_code'=>0, 'error_statement'=>$this->validation_errors);
        }


        return $this->validation_result;
    }

}



?>