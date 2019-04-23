<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\BooksManager;

class BooksController extends Controller
{
    /**
     * @Route("/books", name="books")
     */
    public function index()
    {
        /** BooksManager $booksManager */
        $booksManager = $this->get('books_manager');
        $books = $booksManager->getBooksInCart();
        
        $totalItems = array_sum(array_values($books['cartitems']));

        $cartAmount = $booksManager->getCartAmount(count($books['cartitems']), $books['TotalItems']);
        $discountAmount = $booksManager->getDiscountAmount($totalItems, $cartAmount );
        
        return $this->render('books/index.html.twig', [
            'items' => $books['cartitems'],
            'cartAmount' => $cartAmount,
            'discountAmount' => $discountAmount
        ]);
    }
}
