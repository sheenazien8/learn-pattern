<?php

interface Builder
{
    public function installWindows(): Builder;

    public function installDoors(): Builder;

    public function installRoofTop(): Builder;

    public function installFence(): Builder;

    public function getHome(): string;
}

class Home
{
    protected $parts = [];

    public function listParts(): string
    {
        return "Home parts: " . implode(', ', $this->parts) . "\n\n";
    }

    public function setPart(string $parts): void
    {
        $this->parts[] = $parts;
    }
}

class HomeBuilder implements Builder
{
    protected $homes;

    public function __construct()
    {
        $this->reset();
    }

    public function reset(): void
    {
        $this->homes = new Home();
    }

    public function installWindows(): Builder
    {
        $this->homes->setPart('Windows');
        return $this;
    }

    public function installDoors(): Builder
    {
        $this->homes->setPart('Doors');
        return $this;
    }
    public function installRoofTop(): Builder
    {
        $this->homes->setPart('Roof Top');
        return $this;
    }

    public function installFence(): Builder
    {
        $this->homes->setPart('Fence');
        return $this;
    }

    public function getHome(): string
    {
        $result = $this->homes;
        $this->reset();

        return $result->listParts();
    }
}

class Carpenter
{
    public function setBuilder(Builder $builder): Builder
    {
        return $builder;
    }
}

function clientCode(Carpenter $carpenter): string
{
    $builder = new HomeBuilder();

    return $carpenter->setBuilder($builder)
                     ->installDoors()
                     ->installFence()
                     ->installRoofTop()
                     ->installWindows()
                     ->installWindows()
                     ->getHome();
}


echo clientCode(new Carpenter());
