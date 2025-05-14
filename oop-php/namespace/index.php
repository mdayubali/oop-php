<?php
    /*** using 'use' key have to use the namespace defined name; */
    /** use any keyword for namespace naming.
     * Try to use as file name for namespace naming   */
    use Animal\Dog as AnimalDog;
    use Pet\Dog as PetDog;
    /** use alias namespace name for the same class name and create a object
     *  as alias name to access the class methods and properties. */
    use Mew\Mycat;

    include 'Animal.php';
    include 'Pet.php';
    include 'Cat.php';

    $animalDog = new AnimalDog(); 
    /** created object as namespace aliasname */
    $petDog = new PetDog();
    $cat = new Mycat();
    $cat->ownMethod();
    echo $petDog->bark();
    $animalDog->bark(); 

?>
 