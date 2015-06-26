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
     * @var string $firstName
     *
     * @Column(name="first_name", type="string", length=255, nullable=false)
     */
    private $firstName;

    /**
     * @var string $lastName
     *
     * @Column(name="last_name", type="string", length=255, nullable=false)
     */
    private $lastName;

    

    /**
     * @var string $website
     *
     * @Column(name="website", type="string", length=255, nullable=true)
     */
    private $website;

    /**
     * @var text $about
     *
     * @Column(name="about", type="text", nullable=false)
     */
    private $about;

    /**
     * @var string $address1
     *
     * @Column(name="address_1", type="string", length=100, nullable=false)
     */
    private $address1;

    /**
     * @var string $address2
     *
     * @Column(name="address_2", type="string", length=100, nullable=false)
     */
    private $address2;

    /**
     * @var string $zipCode
     *
     * @Column(name="zip_code", type="string", length=10, nullable=false)
     */
    private $zipCode;

    /**
     * @var string $phoneNumber
     *
     * @Column(name="phone_number", type="string", length=30, nullable=false)
     */
    private $phoneNumber;

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
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
        return $this;
    }

    /**
     * Get firstName
     *
     * @return string 
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     * @return DxChronicleComment
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
        return $this;
    }

    /**
     * Get lastName
     *
     * @return string 
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set website
     *
     * @param string $website
     * @return DxChronicleComment
     */
    public function setWebsite($website)
    {
        $this->website = $website;
        return $this;
    }

    /**
     * Get website
     *
     * @return string 
     */
    public function getWebsite()
    {
        return $this->website;
    }

    /**
     * Set about
     *
     * @param text $about
     * @return DxChronicleComment
     */
    public function setAbout($about)
    {
        $this->about = $about;
        return $this;
    }

    /**
     * Get about
     *
     * @return text 
     */
    public function getAbout()
    {
        return $this->about;
    }

    /**
     * Set address1
     *
     * @param string $address1
     * @return DxChronicleComment
     */
    public function setAddress1($address1)
    {
        $this->address1 = $address1;
        return $this;
    }

    /**
     * Get address1
     *
     * @return string 
     */
    public function getAddress1()
    {
        return $this->address1;
    }

    /**
     * Set address2
     *
     * @param string $address2
     * @return DxChronicleComment
     */
    public function setAddress2($address2)
    {
        $this->address2 = $address2;
        return $this;
    }

    /**
     * Get address2
     *
     * @return string 
     */
    public function getAddress2()
    {
        return $this->address2;
    }

    /**
     * Set zipCode
     *
     * @param string $zipCode
     * @return DxChronicleComment
     */
    public function setZipCode($zipCode)
    {
        $this->zipCode = $zipCode;
        return $this;
    }

    /**
     * Get zipCode
     *
     * @return string 
     */
    public function getZipCode()
    {
        return $this->zipCode;
    }

    /**
     * Set phoneNumber
     *
     * @param string $phoneNumber
     * @return DxChronicleComment
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
        return $this;
    }

    /**
     * Get phoneNumber
     *
     * @return string 
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
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
