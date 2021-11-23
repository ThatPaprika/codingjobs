<?php

/*
    In this exercise, we will create classes to represent Characters of a game.

    An Adventurer represent an ally. Adventurers have those properties :
            - name
            - type (Like 'Elf', 'Orc', etc.)
            - description
            - health points
            - attack points
            - defense points

        Public method :
            - attack() : Hurt an enemy
            For now, this method will just echo 'Adventurer is attacking';

    A Monster represent an enemy. Monsters have those properties :
            - type (Like 'Mountain Elf', 'Cheezy Zombie', etc.)
            - description (such as 'Seems hungry and ready to do anything')
            - health points
            - attack points
        
        Public method :
            - attack() : Hurt an ally
            For now, this method will just echo 'Monster is attacking';


        When we create a monster, we have to specify at least :
            - Type
            - Health points


    - Step 1 : 
        Create the matching classes.
        Use inheritance and create an 'Actor' class, which will be the 'mother class' of Adventurer and Monster.

    
    Example of use:
 */

$player = new Adventurer('Simon', 'Orc', 100, 10, 5);

$anEnemy = new Monster('Cheezy Zombie', 140);

/* A monster attack */
$anEnemy->attack();

/* Player attacks */
$player->attack();
