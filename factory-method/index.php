<?php

require __DIR__ . '/Reservation.php';


/**
 * @param ReservationFactory $reservationFactory
 * @return void
 */
function reservation_route(ReservationFactory $reservationFactory)
{
    echo $reservationFactory->otherAction() . PHP_EOL;
}

reservation_route(new WalkInReservation());

reservation_route(new QuickReservation());

reservation_route(new UsualReservation());

require __DIR__ . '/Payment.php';


/**
 * payment_route
 *
 * @param PaymentFactory $paymentFactory
 * @access public
 * @return void
 */
function payment_route(PaymentFactory $paymentFactory)
{
    $paymentFactory->callPayAction();
}

payment_route(new OvoPayment());

payment_route(new CashPayment());

payment_route(new CreditCardPayment());
