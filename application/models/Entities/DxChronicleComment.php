<?php

use Doctrine\ORM\Mapping as ORM;

/**
 * DxChronicleComment
 *
 * @Table(name="dx_chronicle_comment")
 * @Entity
 */
class DxChronicleComment
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
     * @var string $commentDescription
     *
     * @Column(name="description", type="string", length=255, nullable=false)
     */
    private $description;

    /**
     * @var string $imagePath
     *
     * @Column(name="image_path", type="string", length=255, nullable=true)
     */
    private $imagePath;

    /**
     * @var DxChronicles
     *
     * @OneToOne(targetEntity="DxChronicles", inversedBy="chronicleComment")
     * @JoinColumns({
     *   @JoinColumn(name="chronicle_id", referencedColumnName="id", onDelete="CASCADE")
     * })
     */
    private $chronicle;
    
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
     * Set firstName
     *
     * @param string $firstName
     * @return DxChronicleComment
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set imagePath
     *
     * @param string $imagePath
     * @return DxChronicleComment
     */
    public function setImagePath($imagePath)
    {
        $this->imagePath = $imagePath;
        return $this;
    }

    /**
     * Get imagePath
     *
     * @return string 
     */
    public function getImagePath()
    {
        return $this->imagePath;
    }

    /**
     * Set chronicle
     *
     * @param DxChronicles $chronicle
     * @return DxChronicleComment
     */
    public function setChronicle(\DxChronicles $chronicle = null)
    {
        $this->chronicle = $chronicle;
        return $this;
    }

    /**
     * Get chronicle
     *
     * @return DxChronicles 
     */
    public function getChronicle()
    {
        return $this->chronicle;
    }
    
     /**
     * Get messages
     *
     * @return PdMessage 
     */
    public function getMessages()
    {
        return $this->messages;
    }
}
