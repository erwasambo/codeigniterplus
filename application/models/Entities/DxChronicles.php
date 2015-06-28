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
     * @var datetime $newpassTime
     *
     * @Column(name="newpass_time", type="datetime", nullable=true)
     */
    private $newpassTime;

    /**
     * @var string $lastIp
     *
     * @Column(name="last_ip", type="string", length=40, nullable=false)
     */
    private $lastIp;

    /**
     * @var datetime $lastLogin
     *
     * @Column(name="last_login", type="datetime", nullable=false)
     */
    private $lastLogin;

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
     * @var string $fbSession
     *
     * @Column(name="fb_session", type="string", length=1000, nullable=true)
     */
    private $fbSession;
    
    /**
     * @var string $fbId
     *
     * @Column(name="fb_id", type="bigint", nullable=true)
     */
    private $fbId;
    
    /**
     * @var string $twitterSession
     *
     * @Column(name="twitter_session", type="string", length=1000, nullable=true)
     */
    private $twitterSession;
    
    /**
     * @var string $twitterId
     *
     * @Column(name="twitter_id", type="bigint", nullable=true)
     */
    private $twitterId;
    
    /**
     * @var DxChronicleCategory
     *
     * @ManyToOne(targetEntity="DxChronicleCategory")
     * @JoinColumns({
     *   @JoinColumn(name="chronicleCategory_id", referencedColumnName="id")
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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set username
     *
     * @param string $username
     * @return DxChronicles
     */
    public function setUsername($username)
    {
        $this->username = $username;
        return $this;
    }

    /**
     * Get username
     *
     * @return string 
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return DxChronicles
     */
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return DxChronicles
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set banned
     *
     * @param boolean $banned
     * @return DxChronicles
     */
    public function setBanned($banned)
    {
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
     * Set newpass
     *
     * @param string $newpass
     * @return DxChronicles
     */
    public function setNewpass($newpass)
    {
        $this->newpass = $newpass;
        return $this;
    }

    /**
     * Get newpass
     *
     * @return string 
     */
    public function getNewpass()
    {
        return $this->newpass;
    }

    /**
     * Set newpassKey
     *
     * @param string $newpassKey
     * @return DxChronicles
     */
    public function setNewpassKey($newpassKey)
    {
        $this->newpassKey = $newpassKey;
        return $this;
    }

    /**
     * Get newpassKey
     *
     * @return string 
     */
    public function getNewpassKey()
    {
        return $this->newpassKey;
    }

    /**
     * Set newpassTime
     *
     * @param datetime $newpassTime
     * @return DxChronicles
     */
    public function setNewpassTime($newpassTime)
    {
        $this->newpassTime = $newpassTime;
        return $this;
    }

    /**
     * Get newpassTime
     *
     * @return datetime 
     */
    public function getNewpassTime()
    {
        return $this->newpassTime;
    }

    /**
     * Set lastIp
     *
     * @param string $lastIp
     * @return DxChronicles
     */
    public function setLastIp($lastIp)
    {
        $this->lastIp = $lastIp;
        return $this;
    }

    /**
     * Get lastIp
     *
     * @return string 
     */
    public function getLastIp()
    {
        return $this->lastIp;
    }

    /**
     * Set lastLogin
     *
     * @param datetime $lastLogin
     * @return DxChronicles
     */
    public function setLastLogin($lastLogin)
    {
        $this->lastLogin = $lastLogin;
        return $this;
    }

    /**
     * Get lastLogin
     *
     * @return datetime 
     */
    public function getLastLogin()
    {
        return $this->lastLogin;
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
     * Get modified
     *
     * @return datetime 
     */
    public function getModified()
    {
        return $this->modified;
    }

    /**
     * Set fbSession
     *
     * @param string $fbSession
     * @return DxChronicles
     */
    public function setFbSession($fbSession)
    {
        $this->fbSession = $fbSession;
        return $this;
    }

    /**
     * Get fbSession
     *
     * @return string 
     */
    public function getFbSession()
    {
        return $this->fbSession;
    }
    
    /**
     * Set fbId
     *
     * @param integer $fbId
     * @return DxChronicles
     */
    public function setFbId($fbId)
    {
        $this->fbId = $fbId;
        return $this;
    }

    /**
     * Get fbId
     *
     * @return integer 
     */
    public function getFbId()
    {
        return $this->fbId;
    }
    
    /**
     * Set twitterSession
     *
     * @param string $twitterSession
     * @return DxChronicles
     */
    public function setTwitterSession($twitterSession)
    {
        $this->twitterSession = $twitterSession;
        return $this;
    }

    /**
     * Get twitterSession
     *
     * @return string 
     */
    public function getTwitterSession()
    {
        return $this->twitterSession;
    }
    
    /**
     * Set twitterId
     *
     * @param integer $twitterId
     * @return DxChronicles
     */
    public function setTwitterId($twitterId)
    {
        $this->twitterId = $twitterId;
        return $this;
    }

    /**
     * Get twitterId
     *
     * @return integer 
     */
    public function getTwitterId()
    {
        return $this->twitterId;
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
     * Get chronicleCategory
     *
     * @return DxChronicleCategory 
     */
    public function getChronicleCategory()
    {
        return $this->chronicleCategory;
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
     * @param DxUserProfile $userProfile
     * @return PdMessage
     */
    public function setUserProfile(\DxUserProfile $userProfile = null)
    {
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
}
