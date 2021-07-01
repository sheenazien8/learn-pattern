<?php

/** @package  */
interface Reservation
{
    /** @return string  */
    public function reservation(): string;
}

/** @package  */
abstract class ReservationFactory
{
    /** @return Reservation  */
    abstract public function actionReservation(): Reservation;

    /** @return string  */
    public function otherAction(): string
    {
        $reservation = $this->actionReservation();

        return 'Call actionReservation with this class ' . $reservation->reservation();
    }
}

/** @package  */
class ReservationModels implements Reservation
{
    private $resevation_type;

    /**
     * @param string $resevation_type
     */
    public function __construct(string $resevation_type)
    {
        $this->resevation_type = $resevation_type;
    }

    /** @return string  */
    public function reservation(): string
    {
        // you can do anithin in here
        return $this->resevation_type;
    }
}


/** @package  */
class WalkInReservation extends ReservationFactory
{
    /** @return Reservation  */
    public function actionReservation(): Reservation
    {
        /* whatever you want for the walkinreservation */
        return new ReservationModels('Walk In Reservation');
    }
}

/** @package  */
class UsualReservation extends ReservationFactory
{
    /** @return Reservation  */
    public function actionReservation(): Reservation
    {
        /* whatever you want for the usualreservation */
        return new ReservationModels('Usual Reservation');
    }
}

/** @package  */
class QuickReservation extends ReservationFactory
{
    /** @return Reservation  */
    public function actionReservation(): Reservation
    {
        /* whatever you want for the quickReservation */
        return new ReservationModels('Quick Reservation');
    }
}
