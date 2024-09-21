<?php

namespace Leticia\ProjetoEmPhp\domain\checkout\service;

use Leticia\ProjetoEmPhp\domain\checkout\entity\Order;
use Leticia\ProjetoEmPhp\domain\checkout\entity\OrderItem;
// importar lib uuid
use Leticia\ProjetoEmPhp\domain\customer\entity\Customer;

class OrderService
{
    public function placeOrder(Customer $customer, OrderItem $orderItems): Order 
    {
        // todo: verify if empty funcion will work
        if (empty($orderItem)) {
            throw new Exception("Id is required");
        }

        $order = new Order(/** colocar uuid */, $customerId->getId(), $orderItems);
        $customer->addRewardPoints($order->total() / 2);

        return $order;
    }
}