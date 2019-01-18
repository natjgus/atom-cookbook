<?php
//Class names should be AllCap in PHP
//Access Modifiers are public, private
class Recipe
{

  public $title;

  //Initilizing with an array makes it easier to read and tells
  public $ingredients = array();
  public $instructions = array();
  public $yield;
  public $tag = array();
  //Source of all Recipes is Me so I can set dedault
  public $source = "Nathaniel Gustafson";

}

$recipe1 = new Recipe();
//Once we create and object we can access it's properties
//Property name does not start with $ only object name!
echo $recipe1->source;
$recipe1->source = "Grandma Natali";


$recipe2 = new Recipe();
$recipe2->source = "Janali";

echo $recipe1->source;
echo $recipe2->source;
