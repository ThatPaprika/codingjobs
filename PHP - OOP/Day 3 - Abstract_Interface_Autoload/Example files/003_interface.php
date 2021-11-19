<?php

/*

Interfaces

An interface looks like a class but has only static properties or abstract methods.

We use interface to implement multiple inheritance.

Interfaces are used to implements/share roles.

An interface allow to specify one part of the code must be implemented.

Best practice : 
    - Name should start with a capital I
    - Name of the file should be the same as the interface name
*/

interface IExample
{
    public function sit();
}

class Dog extends Animal implements IExample
{
    // I HAVE TO IMPLEMENT THIS METHOD : Mandatory
    public function sit()
    {
        echo 'Dog is sitting';
    }
}

class Human implements IExample
{
    // I HAVE TO IMPLEMENT THIS METHOD : Mandatory
    public function sit()
    {
        echo 'Human is sitting';
    }
}

/* 
  Abstract class :
  1. When a model/template must be set for a group
  of subclasses, use an abstract class.
  2. An abstract class can contain concrete methods
  3. Abstract classes provide default actions for
  subclasses
  4. Used to provide a template for potential future
  inherited classes.

  Interface :
  1. Use an interface when a role must be defined
  for other classes as well, regardless of the 
  inheritance of these classes.
  2. You can't instantiate an interface 
  and create an object
  3. Interface can't contain concrete methods
  4. A class can implement multiple interfaces
  (5. An interface can inherit from a class)


