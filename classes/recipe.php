<?php
//Class names should be AllCap in PHP
//Access Modifiers are public, private
class Recipe
{

  private $title;

  //Initilizing with an array makes it easier to read and tells
  public $ingredients = array();
  public $instructions = array();
  public $yield;
  public $tag = array();
  //Source of all Recipes is Me so I can set dedault
  public $source = "Nathaniel Gustafson";


  //We are setting a private array for the measurements to set acceptible
  //mesaurements... private so that they cannot be changed.

  private $measurements = array(
    "tsp",
    "tbsp",
    "cup",
    "oz",
    "pint",
    "quart",
    "gallon"
  );

  public function addIngredient($item, $amount = null, $measure = null)
  {
    if ($amount != null && !is_float($amount) && !is_int($amount)){
      exit("The amount must be a float: " .gettype($amount) . "$amount given");
    }
    if ($measure !=null && !in_array(strtolower($measure), $this->measurements)){
      exit("Please enter a valid mesaurements: " . implode(", " ,  $this->measurements));
    }

    $this->ingredients[] = array(
      "item" => ucwords($item),
      "amount" => $amount,
      "measure" => strtolower($measure)
    );

  }

  //Methods Same Naming convention and visibility as property
  public function displayRecipe()
  {
    //Reference Yourself with $this when working within the scope of the Methods
    return $this->title . " by " . $this->source;
  }

  //Create a setter method to format date before entering it to the object
  public function setTitle($title)
  {
    //The keyword, this, before the title, gives us access to the object's property.
    $this -> title = ucwords($title);
  }

  public function getTitle()
  {
    return $this->title;
  }

}

$recipe1 = new Recipe();
//Once we create and object we can access it's properties
//Property name does not start with $ only object name!
$recipe1->source = "Grandma Natali";
$recipe1->setTitle("mac and cheese");
$recipe1->addIngredient("egg", 1, "oz");



$recipe2 = new Recipe();
$recipe2->source = "Janali";
$recipe2->setTitle("scones");

//When calling a function you most reference object it belongs to
echo $recipe1 -> getTitle();
echo $recipe2 -> displayRecipe();
