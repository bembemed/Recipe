<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Ingredient;
use Faker\Factory;
use Faker\Generator;

class AppFixtures extends Fixture
{
    private Generator $faker ; 
    public function __construct(){
        $this->faker = Factory::create('fr_FR');
    }
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);
        
        for ($i=0; $i < 50; $i++) { 
            $ingredients = new Ingredient();
            $ingredients->setName($this->faker->word())->setPrice(random_int(0,100));
            
        $manager->persist($ingredients);
        }


        $manager->flush();
    }
}
