<?php

declare(strict_types=1);

namespace App\Controller;

use App\Entity\Order;
use FOS\RestBundle\Controller\AbstractFOSRestController;
use Symfony\Component\HttpFoundation\Response;

class OrderController extends AbstractFOSRestController
{
    public function showAction(): Response
    {
        $orders = $this->getDoctrine()->getRepository(Order::class)->findAll();

        $order = reset($orders);

        return $this->handleView($this->view($order));
    }
}
