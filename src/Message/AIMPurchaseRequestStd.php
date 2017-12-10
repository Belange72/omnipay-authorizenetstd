<?php

namespace Omnipay\AuthorizeNet\Message;

/**
 * Authorize.Net AIM Purchase Request
 */
class AIMPurchaseRequestStd extends AIMAuthorizeRequestStd
{
    protected $action = 'authCaptureTransaction';
}
