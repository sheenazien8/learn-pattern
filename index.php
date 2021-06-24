<?php

require __DIR__ . '/factory-method/Resevation.php';


/**
 * @param ReservationFactory $reservationFactory 
 * @return void 
 */
function client_code(ReservationFactory $reservationFactory)
{
  echo $reservationFactory->otherAction() . PHP_EOL;
}

client_code(new WalkInReservation());

client_code(new QuickReservation());

client_code(new UsualReservation());
