<?php

interface Kemeja
{
    public function hasColor(): string;
    public function wareHouse(): string;
}

interface Gamis
{
    public function hasColor(): string;
    public function wareHouse(): string;
}

interface ConvectionFactory
{
    public function createGamis(): Gamis;
    public function createKemeja(): Kemeja;
}

class IndonesianGamis implements Gamis
{
    public function hasColor(): string
    {
        return 'biru';
    }

    public function wareHouse(): string
    {
        return 'Jepara';
    }
}

class MalaysianGamis implements Gamis
{

    public function hasColor(): string
    {
        return 'orange';
    }

    public function wareHouse(): string
    {
        return 'Kuala Lumpur';
    }
}

class IndonesianKemeja implements Kemeja
{

    public function hasColor(): string
    {
        return 'kuning';
    }

    public function wareHouse(): string
    {
        return 'Semarang';
    }
}

class MalaysianKemeja implements Kemeja
{

    public function hasColor(): string
    {
        return 'Hijau';
    }

    public function wareHouse(): string
    {
        return 'Sorong';
    }
}


class IndonesiaConvectionFactory implements ConvectionFactory
{
    public function createKemeja(): Kemeja
    {
        return new IndonesianKemeja();
    }

    public function createGamis(): Gamis
    {
        return new IndonesianGamis();
    }
}

class MalaysianConvectionFactory implements ConvectionFactory
{
    public function createKemeja(): Kemeja
    {
        return new MalaysianKemeja();
    }

    public function createGamis(): Gamis
    {
        return new MalaysianGamis();
    }
}
