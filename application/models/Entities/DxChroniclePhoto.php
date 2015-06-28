<?php

use Doctrine\ORM\Mapping as ORM;

/**
 * DxChroniclePhoto
 *
 * @Table(name="dx_chronicle_photo")
 * @Entity
 */
class DxChroniclePhoto
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
     * @var string $caption
     *
     * @Column(name="caption", type="string", length=255, nullable=false)
     */
    private $caption;

    /**
     * @var string $imagePath
     *
     * @Column(name="image_path", type="string", length=255, nullable=true)
     */
    private $imagePath;

    /**
     * @var DxChronicles
     *
     * @OneToOne(targetEntity="DxChronicles", inversedBy="chroniclePhoto")
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
     * Set caption
     *
     * @param string $caption
     * @return DxChroniclePhoto
     */
    public function setCaption($caption)
    {
        $this->caption = $caption;
        return $this;
    }

    /**
     * Get caption
     *
     * @return string 
     */
    public function getCaption()
    {
        return $this->caption;
    }

    /**
     * Set imagePath
     *
     * @param string $imagePath
     * @return DxChroniclePhoto
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
     * @return DxChroniclePhoto
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
