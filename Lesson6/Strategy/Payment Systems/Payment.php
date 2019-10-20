<?php


abstract class Payment
{
    protected $phone;
    protected $amount;
    protected $requestStrategy;
    protected $responseStrategy;

    abstract public function pay($amount);

    /**
     * @return mixed
     */
    public function getRequestStrategy(IRequestPayment $requestStrategy)
    {
        echo "Делаем запрос платежной системе: ";
        return $this->requestStrategy = $requestStrategy->request();
    }

    /**
     * @return mixed
     */
    public function getResponseStrategy(IResponsePayment $responseStrategy)
    {
        echo "Получаем ответ от платежной системы: ";
        return $this->responseStrategy = $responseStrategy->response();
    }

//    public function performRequest(IRequestPayment $strategy) {
//        echo "Делаем запрос платежной системе: ";
//        return $strategy->request();
//    }
//
//    public function performResponse(IResponsePayment $strategy) {
//        echo "Получаем ответ от платежной системы: ";
//        return $strategy->response();
//    }
}