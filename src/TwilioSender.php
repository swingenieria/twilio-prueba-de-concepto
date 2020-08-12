<?php
require __DIR__ .'/../vendors/twilio-php-main/src/Twilio/autoload.php';
require_once __DIR__ . '/config/constants.php';
require_once __DIR__.'/enviables/autoload.php';

use Twilio\Rest\Client;

class TwilioSender
{
    private $sid = TWILIO_TEST_MODE? TWILIO_TEST_SID : TWILIO_PROD_SID;
    private $token = TWILIO_TEST_MODE? TWILIO_TEST_TOKEN : TWILIO_PROD_TOKEN;
    private $client;


    /**
     * TwilioSender constructor.
     * @throws \Twilio\Exceptions\ConfigurationException
     */
    public function __construct()
    {
        $this->client = new Client($this->sid, $this->token);
    }

    /**
     * @param MensajeTwilioEnviable $msj
     * @return \Twilio\Rest\Api\V2010\Account\MessageInstance
     * @throws \Twilio\Exceptions\TwilioException
     */
    public function send($msj)
    {
        $msg = $this->client->messages->create(
            $msj->to(), // to
            [
                "from" => $msj->from(),
                "body" => $msj->body()
            ]);
        return $msg;
    }
}