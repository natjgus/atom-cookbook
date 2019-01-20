<?php

include "classes/recipe.php";
include "classes/render.php";

$recipe1 = new Recipe("Lasagna");
//Once we create and object we can access it's properties
//Property name does not start with $ only object name!
$recipe1->setSource("Grandma Natali");
$recipe1->addIngredient("egg", 1);
$recipe1->addIngredient("flour", 2, "cup");



$recipe2 = new Recipe("scones");
// $recipe2->source = "Janali";



$recipe1->addInstruction("This is my first instruction");
$recipe1->addInstruction("This is my second instruction");


$recipe1->addTag("dinner");
$recipe1->addTag("healthy");


$recipe1->setYield("5 servings");

echo $recipe1;
// echo Render::displayRecipe($recipe1);

echo new Render;
