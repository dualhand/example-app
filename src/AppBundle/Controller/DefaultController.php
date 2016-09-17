<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Book;
use AppBundle\Entity\Cart;
use AppBundle\Entity\CartLine;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Validator\ConstraintViolationInterface;
use Symfony\Component\Validator\ConstraintViolationListInterface;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     *
     * @param Request $request
     *
     * @return Response
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
        ]);
    }

    /**
     * @Route("/validate/book", name="validate_book")
     */
    public function validateBookAction()
    {
        $book = new Book();
        $book
            ->setSku(234234)
            ->setTitle('Symfony Book')
            ->setPrice(0)
            ->setAuthor('Fabien Potencier')
        ;

        $validator = $this->get('validator');

        /** @var ConstraintViolationListInterface $violations */
        $violations = $validator->validate($book);

        return $this->render(
            ':validate:entity.html.twig', [
            'entity' => $book,
            'errors' => $violations,
        ]);
    }

    /**
     * @Route("/validate/book/registration", name="validate_book_register_group")
     */
    public function validateRegisterGroupBookAction()
    {
        $book = new Book();
        $book
            ->setSku(234234)
            ->setTitle('Symfony Book')
            ->setPrice(0)
//            ->setAuthor('Fabien Potencier')
        ;

        $validator = $this->get('validator');

        /** @var ConstraintViolationListInterface $violations */
        $violations = $validator->validate($book, null, 'registration');

        return $this->render(
            ':validate:entity.html.twig', [
            'entity' => $book,
            'errors' => $violations,
        ]);
    }

    /**
     * @Route("/validate/book/default", name="validate_book_default_group")
     */
    public function validateDefaultGroupBookAction()
    {
        $book = new Book();
//        $book
//            ->setSku(234234)
//            ->setTitle('Symfony Book')
//            ->setPrice(0)
//            ->setAuthor('Fabien Potencier')
//        ;

        $validator = $this->get('validator');

        /** @var ConstraintViolationListInterface $violations */
        $violations = $validator->validate($book, null, 'Default');

        return $this->render(
            ':validate:entity.html.twig', [
            'entity' => $book,
            'errors' => $violations,
        ]);
    }

    /**
     * @Route("/validate/book/book", name="validate_book_book_group")
     */
    public function validateBookGroupBookAction()
    {
        $book = new Book();
//        $book
//            ->setSku(234234)
//            ->setTitle('Symfony Book')
//            ->setPrice(0)
//            ->setAuthor('Fabien Potencier')
//        ;

        $validator = $this->get('validator');

        /** @var ConstraintViolationListInterface $violations */
        $violations = $validator->validate($book, null, 'Book');

        return $this->render(
            ':validate:entity.html.twig', [
            'entity' => $book,
            'errors' => $violations,
        ]);
    }

    /**
     * @Route("/validate/book/purchasable", name="validate_book_purchasable_group")
     */
    public function validateBookGroupPurchasableAction()
    {
        $book = new Book();
//        $book
//            ->setSku(234234)
//            ->setTitle('Symfony Book')
//            ->setPrice(0)
//            ->setAuthor('Fabien Potencier')
//        ;

        $validator = $this->get('validator');

        /** @var ConstraintViolationListInterface $violations */
        $violations = $validator->validate($book, null, 'AbstractPurchasable');

        return $this->render(
            ':validate:entity.html.twig', [
            'entity' => $book,
            'errors' => $violations,
        ]);
    }

    /**
     * @Route("/validate/cart", name="validate_cart")
     */
    public function validateCartAction()
    {
        $cartLine = new CartLine();

        $cart = new Cart();
        $cart
            ->setQuantity(1)
            ->setAmount(0)
        ;
        $cart->addCartLine($cartLine);

        $validator = $this->get('validator');

        /** @var ConstraintViolationListInterface $violations */
        $violations = $validator->validate($cart);

        return $this->render(
            ':validate:entity.html.twig', [
            'entity' => $cart,
            'errors' => $violations,
        ]);
    }

    /**
     * @Route("/validate/cart/cart", name="validate_cart_group_cart")
     */
    public function validateCartGroupCartAction()
    {
        $cartLine = new CartLine();

        $cart = new Cart();
        $cart
            ->setQuantity(1)
            ->setAmount(0)
        ;
        $cart->addCartLine($cartLine);

        $validator = $this->get('validator');

        /** @var ConstraintViolationListInterface $violations */
        $violations = $validator->validate($cart, null, 'Cart');

        return $this->render(
            ':validate:entity.html.twig', [
            'entity' => $cart,
            'errors' => $violations,
        ]);
    }
}
