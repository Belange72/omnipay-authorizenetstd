<?php

namespace Omnipay\AuthorizeNetStd;

use Omnipay\AuthorizeNet\AIMGateway;

class AIMStdGateway extends \Omnipay\AuthorizeNet\AIMGateway {

  /**
   * @param array $parameters
   * @return AIMAuthorizeRequest
   */
  public function authorize(array $parameters = array())
  {
    return $this->createRequest('\Omnipay\AuthorizeNet\Message\AIMAuthorizeRequestStd', $parameters);
  }

  /**
   * @param array $parameters
   * @return AIMCaptureRequest
   */
  public function capture(array $parameters = array())
  {
    return $this->createRequest('\Omnipay\AuthorizeNet\Message\AIMCaptureRequestStd', $parameters);
  }

  /**
   * @param array $parameters
   * @return AIMPurchaseRequest
   */
  public function purchase(array $parameters = array())
  {
    return $this->createRequest('\Omnipay\AuthorizeNet\Message\AIMPurchaseRequestStd', $parameters);
  }
}
