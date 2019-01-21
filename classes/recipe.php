<?php
//Class names should be AllCap in PHP
//Access Modifiers are public, private
class Recipe
{

  private $title;

  //Initilizing with an array makes it easier to read and tells
  private $ingredients = array();
  private $instructions = array();
  private $yield;
  private $tags = array();

  //Source of all Recipes is Me so I can set default
  private $source = "Nathaniel Gustafson";


  //We are setting a private array for the measurements to set acceptible
  //mesaurements... private so that they cannot be changed.

  private $measurements = array(
    "tsp",
    "tbsp",
    "cup",
    "oz",
    "lb",
    "fl oz",
    "pint",
    "quart",
    "gallon"
  );


  public function __construct($title = null)
  {
    $this->setTitle($title);
  }

  public function __toString()
  {
    $output = "You are calling a " . __CLASS__ . " object with the title \"";
    $output .= $this->getTitle() . "\"";
    $output .= "\nIt is stored in " . basename(__FILE__) . " at " . __DIR__ . ".";
    $output .= "\nThis display is from line " . __LINE__ . " in method " . __METHOD__;
    $output .="\nOther methods are listed as: \n";
    $output .= implode("\n", get_class_methods(__CLASS__));
    return $output;
  }

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

  public function getIngredients()
  {
    return $this->ingredients;
  }

  public function addInstruction($string)
  {
    $this->instructions[] = $string;
  }

  public function getInstructions()
  {
    return $this->instructions;
  }

  public function addTag($tag){
    $this->tags[] = strtolower($tag);
  }

  public function getTags()
  {
    return $this->tags;
  }

  public function setYield($yield)
  {
    $this->yield= $yield;
  }

  public function getYield()
  {
    return $this->yield;
  }

  public function setSource($source)
  {
    $this->source = ucwords($source);
  }

  public function getSource()
  {
    return $this->source;
  }


  //Create a setter method to format date before entering it to the object
  public function setTitle($title)
  {
    if(empty($title)){
      $this->title = null;
    }
    else
    {
    $this -> title = ucwords($title);
  }
  }

  public function getTitle()
  {
    return $this->title;
  }

}
