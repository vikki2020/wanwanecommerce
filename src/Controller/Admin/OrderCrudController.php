<?php

namespace App\Controller\Admin;


use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use App\Entity\Order;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\MoneyField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class OrderCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Order::class;
    }
    public function configureActions(Actions $actions): Actions
    {


        return $actions

            ->add('index', 'detail');
    }
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            DateTimeField::new('createAt', 'Created at'),
            TextField::new('user.fullname', 'User'),
            TextEditorField::new('delivery', 'Address for delivery')->onlyOnDetail(),
            MoneyField::new('total', 'product subtotal')->setCurrency('EUR'),
            TextField::new('carrierName', 'carrier'),
            MoneyField::new('carrierPrice', 'carrier price')->setCurrency('EUR'),
            BooleanField::new('isPaid', 'Paid')

        ];
    }
}
