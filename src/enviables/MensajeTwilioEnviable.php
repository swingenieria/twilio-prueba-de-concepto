<?php


interface MensajeTwilioEnviable
{
    /**
     * @return string
     */
    public function from();

    /**
     * @return string
     */
    public function to();

    /**
     * @return string
     */
    public function body();
}