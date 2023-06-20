<?php

namespace App\Controller;

use App\Entity\Bicycle;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Psr\Log\LoggerInterface;

class ShopController Extends AbstractController
{
    #[Route('/inventory', name: 'inventory')]
    public function getInventory(LoggerInterface $logger): Response
    {
        try {
            $inventory = $this->createInventory();
        } catch (\Exception $e) {
            $logger->error("Error retrieving Inventory: " . $e->getMessage());
            $inventory = null;
        }

        return $this->render('inventory.html.twig', [
            'inventory' => $inventory
        ]);
    }

    public function createInventory() : array
    {
        //instantiate class and create list of bicycles
        $bicycle1 = new Bicycle('1', 'Cruiser Bike', '1000', 'Aluminum', 'Tubeless', 'Disc', 'Flat', 'Comfortable', '11-speed');
        $bicycle2 = new Bicycle('2', 'Folding Bike', '1500', 'Carbon fiber', 'Tubeless', 'Disc', 'Drop', 'Sporty', '12-speed');
        $bicycle3 = new Bicycle('3', 'Hybrid Bike', '800', 'Steel', 'Tubed', 'Caliper', 'Upright', 'Wide', '7-speed');
        $bicycle4 = new Bicycle('4', 'Mountain Bike', '2000', 'Carbon fiber', 'Tubeless', 'Hydraulic disc', 'Riser', 'Suspension', '14-speed');
        $bicycle5 = new Bicycle('5', 'Road Bike', '2500', 'Carbon fiber', 'Clincher', 'Caliper', 'Drop', 'Performance', '19-speed');

        $inventory = [$bicycle1, $bicycle2, $bicycle3, $bicycle4, $bicycle5];

        return $inventory;
    }
}