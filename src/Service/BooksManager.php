<?PHP
namespace App\Service;

use App\Entity\Books;
use Doctrine\ORM\EntityManager;
use Symfony\Component\Config\Definition\Exception\Exception;

/**
 * Class BooksManager
 *
 * @package App\Service
 */

class BooksManager {

    /**
     * @var EntityManager
     */
    public $entityManager;

    /**
     * BoatsManager constructor.
     *
     * @param EntityManager $entityManager
     */
    public function __construct(EntityManager $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    /**
     *
     * @return array
     */
    public function getBooksInCart(): array
    {
        $em = $this->entityManager;
        $max = $em->createQuery('SELECT MAX(b.id) FROM App:Books b')->getSingleScalarResult();
        $randomBooks = $em->createQuery('SELECT b.id, b.title FROM App:Books b WHERE b.id >= :rand ORDER BY b.id ASC')
            ->setParameter('rand',rand(0,$max))
            ->setMaxResults($max)
            ->getResult();
            
        $cartItems;
        foreach ($randomBooks as $key => $val) {
            $rndm = rand(0,count($randomBooks)-1);
            $cartItems[] = $randomBooks[$rndm]['title'];
        }
        return ['TotalItems' => count($cartItems), 'cartitems' => array_count_values($cartItems) ];
        
    }

    /**
     * @param int $uniqueTitles
     * @param int $totalItmes
     * @return float
     */
    public function getCartAmount($uniqueTitles, $totalItmes): float
    {
        $costuniqueTitles = 8.0;
        $perBook = 8.0;

        switch ($uniqueTitles)
        {
            case 2:
                $costuniqueTitles = (2*$perBook) - ( (5/100) * (2*$perBook));
                break;
            case 3:
                $costuniqueTitles = (3*$perBook) - ( (10/100) * (3*$perBook));
                break;
            case 4:
                $costuniqueTitles = (4*$perBook) - ((20/100) * (4*$perBook));
                break;
            case 5:
                $costuniqueTitles = (5*$perBook) - (25/100) * (5*$perBook);
                break;
            default: 
                if ( $uniqueTitles != 1) {
                    $costuniqueTitles = (5*$perBook) - (25/100) * (5*$perBook);
                }
        }

        $sameTitled = $totalItmes-$uniqueTitles;

        if ( $sameTitled>0) {
            $costuniqueTitles = $costuniqueTitles + ($sameTitled * $perBook);
        }        
        return $costuniqueTitles;

    }

    /**
     * @param float $toalcartItems
     * @param float $totalpayingAmout
     * @return string
     */
    public function getDiscountAmount($toalcartItems, $totalpayingAmout): string
    {
        return $toalcartItems*8.0 - $totalpayingAmout;
    }
}
