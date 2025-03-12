<?php

class Person
{
    public function __construct(public string $name)
    {

    }

    public function job()
    {

    }

    public function favoriteTeam()
    {

    }

    public function thingsThatKeepUpAtNight()
    {
        return 'Nothing';
    }
}

$bob = new Person('Bob');

var_dump($bob->thingsThatKeepUpAtNight());