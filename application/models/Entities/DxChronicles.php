<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * DxChronicles
 *
 * @Table(name="dx_chronicles")
 * @Entity
 */
class DxChronicles
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
     * @var string $description
     *
     * @Column(name="description", type="string", length=3000, nullable=false)
     */
    private $description;

    /**
     * @var boolean $banned
     *
     * @Column(name="banned", type="boolean", nullable=false)
     */
    private $banned;

    /**
     * @var string $banReason
     *
     * @Column(name="ban_reason", type="string", length=255, nullable=true)
     */
    private $banReason;

    /**
     * @var datetime $created
     *
     * @Column(name="created", type="datetime", nullable=false)
     */
    private $created;

    /**
     * @var datetime $modified
     *
     * @Column(name="modified", type="datetime", nullable=false)
     */
    private $modified;

    
    /**
     * @var DxChronicleCategory
     *
     * @ManyToOne(targetEntity="DxChronicleCategory")
     * @JoinColumns({
     *   @JoinColumn(name="chronicle_category_id", referencedColumnName="id", onDelete="CASCADE")
     * })
     */
    private $chronicleCategory;
    
    /**
     * @var DxChronicleComment
     * 
     * @OneToOne(targetEntity="DxChronicleComment", mappedBy="chronicle") 
     */
    private $chronicleComment;

    /**
     * @var DxChronicleCountry
     * 
     * @OneToOne(targetEntity="DxChronicleCountry", mappedBy="country") 
     */
    private $chronicleCountry;

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
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }
    /**
     * Set description
     *
     * @param string $name
     * @return DxChronicles
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Set banned
     *
     * @param boolean $banned
     * @return DxChronicles
     */
    public function setBanned($banned){
        $this->banned = $banned;
        return $this;
    }

    /**
     * Get banned
     *
     * @return boolean 
     */
    public function getBanned()
    {
        return $this->banned;
    }

    /**
     * Set banReason
     *
     * @param string $banReason
     * @return DxChronicles
     */
    public function setBanReason($banReason)
    {
        $this->banReason = $banReason;
        return $this;
    }

    /**
     * Get banReason
     *
     * @return string 
     */
    public function getBanReason()
    {
        return $this->banReason;
    }


    /**
     * Set created
     *
     * @param datetime $created
     * @return DxChronicles
     */
    public function setCreated($created)
    {
        $this->created = $created;
        return $this;
    }

    /**
     * Get created
     *
     * @return datetime 
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Get modified
     *
     * @return datetime 
     */
    public function getModified(){
        return $this->modified;
    }
    /**
     * Set modified
     *
     * @param datetime $modified
     * @return DxChronicles
     */
    public function setModified($modified)
    {
        $this->modified = $modified;
        return $this;
    }

    /**
     * Get chronicleCategory
     *
     * @return DxChronicleCategory 
     */
    public function getChronicleCategory()
    {
        return $this->chronicleCategory;
    }
        
    /**
     * Set chronicleCategory
     *
     * @param DxChronicleCategory $chronicleCategory
     * @return DxChronicles
     */
    public function setChronicleCategory(\DxChronicleCategory $chronicleCategory = null)
    {
        $this->chronicleCategory = $chronicleCategory;
        return $this;
    }
    
    /**
     * Get chronicleComment
     *
     * @return DxChronicleComment 
     */
    public function getChronicleComment()
    {
        return $this->chronicleComment;
    }

    /**
     * Set userProfile
     *
     * @param DxChroniclePhoto $chroniclePhoto
     * @return PdMessage
     */
    public function setChroniclePhoto(\DxChroniclePhoto $chroniclePhoto = null){
        $this->chroniclePhoto = $chroniclePhoto;
        return $this;
    }
    
    /**
     * Get chroniclePhoto
     *
     * @return DxChroniclePhoto 
     */
    public function getChroniclePhoto()
    {
        return $this->chroniclePhoto;
    }

    /**
     * Set userProfile
     *
     * @param DxUserProfile $userProfile
     * @return PdMessage
     */
    public function setUserProfile(\DxUserProfile $userProfile = null){
        $this->userProfile = $userProfile;
        return $this;
    }
    
    /**
     * Get userProfile
     *
     * @return DxUserProfile 
     */
    public function getUserProfile()
    {
        return $this->userProfile;
    }

    /**
     * Set chronicleCountry
     *
     * @param DxChronicleCountry $chronicleCountry
     * @return PdMessage
     */
    public function setChronicleCountry(\DxChronicleCountry $chronicleCountry = null){
        $this->chronicleCountry = $chronicleCountry;
        return $this;
    }
    
    /**
     * Get chronicleCountry
     *
     * @return DxChronicleCountry 
     */
    public function getChronicleCountry()
    {
        return $this->chronicleCountry;
    }
}
