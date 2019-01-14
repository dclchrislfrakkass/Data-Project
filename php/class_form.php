<?php

class form {

private $data;
private $formDeb;

// pour entourer les champs du formulaire
public $entoure = 'p';


public function __construct($data = array()) {
    $this->data = $data;
   
    
    
}
public function method($method) {
    
    $method = strtolower($method);
    
    if (in_array($method, array('get', 'post'))) {
        
        $this->attrs['method'] = $method;
    }
    return $this;
}

private function getValue($index) {
    
    return isset($this->data[$index]) ? $this->data[$index] : null;
    
}
private function getClass($index) {
    
    return isset($this->data[$index]) ? $this->data[$index] : null;
    
}

private function entoure($html){
    return "<{$this->entoure}>{$html}</{$this->entoure}>";
    
}

public function input($name){
    return $this->entoure('<input type="text" name="'. $name. '" placeholder="' . $this->getClass($name) . '">');
}

public function date($name){
    return $this->entoure('Du <input type="date" name="'. $name. '"> au <input type="date" name="'. $name. '">');
}

public function type($name){
    return $this->entoure('<ul><li><input type="checkbox" name="tous" id="" >tous </li><li><input type="checkbox" name="A" id="" >A</li><li><input type="checkbox" name="B" id="" >B </li><li><input type="checkbox" name="C" id="" >C</li><li><input type="checkbox" name="D" id="" >D </li><li><input type="checkbox" name="D1" id="" >D1</li><li><input type="checkbox" name="D2" id="" >D2 </li></ul>');
    // return $this->entoure('<input type="checkbox" name="tous" id="" >tous ');
}
public function radio($name){
    return $this->entoure('<ul><li><input type="radio" name="km" id="" checked>10 km </li><li><input type="radio" name="km" id="" >25 km</li><li><input type="radio" name="km" id="" >50 km </li><li><input type="radio" name="km" id="" >100 km</li></ul>');
}


public function submit() {
    return $this->entoure('<button type="submit">Chercher</button>');
}

}




// public function echoFormulaire()
//     {
    //         initForm();
    //         echo $this->$formDeb;
    //         echo $this->$motCle;
    //         echo $this->$parDateDu;
    //         echo $this-$parDateAu;
    //         echo $this-$rencontre;
    //         echo $this-$listeRencontre
    //     }
    
    
    //    <input type="text" name="region" placeholder="par région">
    //     <input type="text" name="ville" placeholder="par ville">
    //     <ul>
    //         <li><input type="checkbox" name="10km" id="" >10 km
    //         </li>
    //         <li><input type="checkbox" name="25km" id="" >25 km
    //         </li>
    //         <li><input type="checkbox" name="50km" id="" >50 km
    //         </li>
    //         <li><input type="checkbox" name="100km" id="" >100 km
    //         </li>
    //         </ul>
    
    
        // $this->$formDeb = '<form><h3>rechercher un cas:</h3></br>';
        // $this->$motCle =  '<input type="text" name="recherche" id="" placeholder="par mot clef">';
        // $this->$parDateDu = 'par date : <input type="date" name="dateDu" placeholder="du">';
        // $this->$parDateAu ='<input type="date" name="dateAu" placeholder="au">';
        // $this->$rencontre ='par type de rencontre</br><ul>';
        // $this->$listeRencontre ='<li><input type="checkbox" name="tous" id="" >tous
        // </li><li><input type="checkbox" name="A" id="" >A</li><li><input type="checkbox" name="B" id="" >B
        // </li><li><input type="checkbox" name="C" id="" >C</li><li><input type="checkbox" name="D" id="" >D
        // </li><li><input type="checkbox" name="D1" id="" >D1</li><li><input type="checkbox" name="D2" id="" >D2
        // </li></ul>';
    
    
    
    
    
    
    
    
    
    // </form>