<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Coupon
 *
 * @ORM\Table(name="coupon")
 * @ORM\Entity
 */
class Coupon
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="numero", type="string", length=300, nullable=false)
     */
    private $numero;

    /**
     * @var integer
     *
     * @ORM\Column(name="taux", type="integer", nullable=false)
     */
    private $taux;


}

