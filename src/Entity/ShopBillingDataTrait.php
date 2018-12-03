<?php

declare(strict_types=1);

namespace Sylius\InvoicingPlugin\Entity;

use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\ORM\Mapping\OneToOne;

trait ShopBillingDataTrait
{
    /**
     * @OneToOne(targetEntity="Sylius\InvoicingPlugin\Entity\ShopBillingData", cascade={"persist"})
     * @JoinColumn(name="billing_data_id", referencedColumnName="id")
     *
     * @var ShopBillingDataInterface
     */
    protected $billingData;

    public function getBillingData(): ?ShopBillingDataInterface
    {
        return $this->billingData;
    }

    public function setBillingData(?ShopBillingDataInterface $billingData): void
    {
        $this->billingData = $billingData;
    }
}
