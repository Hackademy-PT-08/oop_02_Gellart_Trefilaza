<?php

// Traccia 1:
// - Utilizza i principi di OOP ed Ereditarietà per creare una struttura a classi come la seguente:
//     +-|Continent
//     +-----------|Country
//     +--------------------|Region
//     +---------------------------|Province
//     +------------------------------------|City
//     +------------------------------------------|Street

// - Ogni classe avrà un attributo public del tipo:
//     $nameContinent:
//     $nameCountry;
//     $nameRegion;
//     $nameProvince;
//     $nameCity;
//     $nameStreet;

// - La prima classe genitore avrà la seguente struttura:
//     class Continent
//     {
//       public $nameContinent;

//       public function __construct($continent){
//         $this->nameContinent = $continent;
//       }
//     }

// - Istanzia un nuovo oggetto $myLocation, per poi richiamare un metodo che stampi a schermo la seguente frase: “Mi trovo in Europa, Italia, Puglia, Ba, Bari, Strada San Giorgio Martire 2D“.

// class Continent {
//     public $nameContinent;
// }

// class Country extends Continent{
//     public $nameCountry;

// }

// class Region extends Country{
//     public $nameRegion;
// }

// class Province extends Region{
//     public $nameProvince;
// }

// class City extends Province{
//     public $nameCity;
// }

// class Street extends City{
//     public $nameStreet;

//     public function __construct($_nameContinent, $_nameCountry, $_nameRegion, $_nameProvince, $_nameCity, $_nameStreet){

//         $this->nameContinent = $_nameContinent;
//         $this->nameCountry = $_nameCountry;
//         $this->nameRegion = $_nameRegion;
//         $this->nameProvince = $_nameProvince;
//         $this->nameCity = $_nameCity;
//         $this->nameStreet = $_nameStreet;

//     }
// }

// class myLocation extends Street{
//     public function whereIAm(){
//         echo "I'm in $this->nameContinent, $this->nameCountry, $this->nameRegion, $this->nameProvince, $this->nameCity, $this->nameStreet " . "\n";
//     }
// }

// $myLocation0 = new myLocation("Europe", "Italy", "Puglia", "Ba", "Bari", "Strada San Giorgio Martire 2D") ;
// $myLocation1 = new myLocation("Asia", "Cina", "Hebei", " ", "Pechino", "xxx");
// $myLocation2 = new myLocation("Asia", "Japan", "Kantō", " ", "Tokyo", "xxx");
// $myLocation3 = new myLocation("America", "US", "West", " ", "Los Angeles", "xxx");
// $myLocation4 = new myLocation("Europe", "Italy", "Puglia", "Ba", "Bari", "xxx");
// $myLocation5 = new myLocation("Europe", "Italy", "Puglia", "Ba", "Bari", "xxx");

// $myLocation0->whereIAm();
// $myLocation1->whereIAm();
// $myLocation2->whereIAm();
// $myLocation3->whereIAm();
// $myLocation4->whereIAm();
// $myLocation5->whereIAm();

// Traccia 2:
// - Data questo semplice schema di classificazione animale:
// ![](https://paper-attachments.dropboxusercontent.com/s_08CF16CAD7A388EF516DE5246E132A28CF8C4DEB9EA1C4F15309EA7CB5F65B4B_1688494986280_Screenshot+2023-07-04+alle+20.23.04.png)

// - crea una struttura a classi sfruttando l’ereditarietà e seguendo queste semplici regole:
//     - le classi non devono avere attributi;
//     - ogni classe avrà un metodo specifico protected per stampare la sua specializzazione;
//     - non puoi realizzare metodi definiti public per stampare il risultato;
//     - l’unico metodo public ammesso è il costruttore.

// ATTENZIONE: utilizzate bene il costruttore per invocare i metodi.

// - Il risultato atteso sarà:
//     $magikarp = new Fish();
//     //Nel terminale visualizzerete:
//     Sono un animale Vertebrato
//     Sono un animale a Sangue Freddo
//     Sono un pesce

// class Vertebrates {

//     // constructor
//     public function __constructor(){
//         $this->vertebrates();

//     }

//     // protected
//     protected function vertebrates(){
//         echo "I'm an vertebrates" . "\n" . "\n";
//     }
// }

// class WarmBlooded extends Vertebrates{

//      // constructor
//      public function __constructor(){

//         $this->vertebrates();
//         $this->warmBlooded();
//     }

//     // protected
//     protected function warmBlooded(){
//         echo "I'm an warm blooded" . "\n" . "\n";
//     }
// }

// class ColdBlooded extends Vertebrates{

//      // constructor
//      public function __constructor(){

//         $this->vertebrates();
//         $this->coldBlooded();

//     }

//     // protected
//     protected function coldBlooded(){
//         echo "I'm an cold blooded" . "\n" . "\n";
//     }

// }

// class Mammals extends WarmBlooded{

//     // constructor
//     public function __constructor(){

//        $this->vertebrates();
//        $this->warmBlooded();
//        $this->mammals();
//    }

//    // protected
//    protected function mammals(){
//        echo "I'm a mammal" . "\n" . "\n";
//    }
// }

// class Birds extends WarmBlooded{

//     // constructor
//     public function __constructor(){

//        $this->vertebrates();
//        $this->warmBlooded();
//        $this->birds();
//    }

//    // protected
//    protected function birds(){
//        echo "I'm a birds" . "\n" . "\n";
//    }
// }

// class Fish extends ColdBlooded{

//     // constructor
//     public function __constructor(){

//        $this->vertebrates();
//        $this->coldBlooded();
//        $this->fish();
//    }

//    // protected
//    protected function fish(){
//        echo "I'm a fish" . "\n" . "\n";
//    }
// }

// class Reptiles extends ColdBlooded{

//     // constructor
//     public function __constructor(){

//        $this->vertebrates();
//        $this->coldBlooded();
//        $this->reptiles();
//    }

//    // protected
//    protected function reptiles(){
//        echo "I'm a reptiles" . "\n" . "\n";
//    }
// }

// class Amphibians extends ColdBlooded{

//     // constructor
//     public function __constructor(){

//        $this->vertebrates();
//        $this->coldBlooded();
//        $this->amphibians();
//    }

//    // protected
//    protected function amphibians(){
//        echo "I'm a amphibians" . "\n" . "\n";
//    }
// }

// $warmBlooded = new WarmBlooded();
// $coldBlooded = new ColdBlooded();
// $mammals = new Mammals();
// $birds = new Birds();
// $fish = new Fish();
// $reptiles = new Reptiles();
// $amphibians = new Amphibians();

// $warmBlooded->__constructor();
// $coldBlooded->__constructor();
// $mammals->__constructor();
// $birds->__constructor();
// $fish->__constructor();
// $reptiles->__constructor();
// $amphibians->__constructor();

// Traccia 3:
// - Dato il seguente codice di partenza:
//     class Car {
//       private $num_telaio;
//     }

//     class Fiat extends Car {
//       protected $license;
//       protected $color;
//     }

// - Completa la classe Fiat con le strutture mancanti e, utilizzando il livello di severità che ritieni più opportuno, estendi i metodi per stampare a terminale la seguente frase: “La mia macchina è Opel, con targa ND 123 OJ e numero di Telaio 1234“.

// Tips and Tricks
// Per sapere se l’esercizio e' corretto, stampa in console il var_dump dell’oggetto:

//     var_damp($car);

// L’output dovrà avere solamente 3 attributi:

//     object(MyCar)#1 (3) {
//       ["num_telaio":"Car":private]=>
//       string(6) "183784"
//     ["nome":protected]=>
//       string(4) "Opel"
//     ["targa":protected]=>
//       string(8) "19384785"
//     }
// ----------

class Car
{
    private $num_telaio;

    public function __construct($_num_telaio)
    {
        $this->num_telaio = $_num_telaio;
        $this->stampNumTelaio();
    }

    public function stampNumTelaio()
    {
        return $this->stampNumTelaio();
    }
}

class Fiat extends Car {
    protected $license;
    protected $color;

    public function __construct($_num_telaio, $_license, $_color){

        parent::__construct($_num_telaio);
        $this->license = $_license;
        $this->color = $_color;
    }

    public function stampCarDescription(){
        echo "La mia macchina è $this->license, con targa $this->color e numero di Telaio " . $this->stampNumTelaio();
    }
}

$car= new Fiat(6505603, "ok", "blues");
$car->stampCarDescription();
var_dump($car);
