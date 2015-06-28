<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * DxChronicleCountry
 *
 * @Table(name="dx_chronicle_country")
 * @Entity
 */
class DxChronicleCountry
{
    /**
     * @var integer $id
     *
     * @Column(name="id", type="integer", nullable=false)
     * @Id
     * @GeneratedValue(strategy="IDENTITY")
     */
    private $id;


    /**
     * @var string $name
     *
     * @Column(name="name", type="string", length=30, nullable=false)
     */
    private $name;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }


    /**
     * Set name
     *
     * @param string $name
     * @return DxChronicleCountry
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }
}
