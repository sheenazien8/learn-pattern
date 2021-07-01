<?php
require __DIR__ . '/Convection.php';

function convection_route(ConvectionFactory $convectionFactory)
{
    $gamis = $convectionFactory->createGamis();

    echo 'Has colors '. $gamis->hasColor() . PHP_EOL;
    echo 'Production at '. $gamis->wareHouse() . ' warehouse' . PHP_EOL;
}

echo 'Indonesian variant convection' . PHP_EOL;
convection_route(new IndonesiaConvectionFactory());

echo 'Malaysian variant convection' . PHP_EOL;
convection_route(new MalaysianConvectionFactory());

