<?php


class WhatsAppMensaje implements MensajeTwilioEnviable
{
    private $from;
    private $to;
    private $body;

    /**
     * WhatsAppMensaje constructor.
     * @param $from
     * @param $to
     * @param $body
     */
    public function __construct($from, $to, $body)
    {
        $this->from = $from;
        $this->to = $to;
        $this->body = $body;
    }

    /**
     * @return string
     */
    public function from()
    {
        return "whatsapp:".$this->from;
    }

    /**
     * @return string
     */
    public function to()
    {
        return "whatsapp:".$this->to;
    }

    /**
     * @return string
     */
    public function body()
    {
        return $this->body;
    }
}