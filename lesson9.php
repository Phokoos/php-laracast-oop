<?php

interface Billing
{
    public function getCustomer();

    public function getSubscription();
}

class BillingPortal implements Billing
{
    public function getCustomer()
    {
    }

    public function getSubscription()
    {
    }
}

class Subscription
{
    public function __construct(
        protected BillingPortal $billingPortal
    ) {
    }

    public function create()
    {
        $this->billingPortal->getCustomer();
    }

    public function cancel()
    {

    }

    public function swap(string $newPlan)
    {

    }

    public function invoice()
    {

    }
}

$subscription = new Subscription(
    new BillingPortal()
);

$subscription->create();