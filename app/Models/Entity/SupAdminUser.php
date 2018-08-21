<?php

namespace App\Models\Entity;

use Swoft\Db\Bean\Annotation\Column;
use Swoft\Db\Bean\Annotation\Entity;
use Swoft\Db\Bean\Annotation\Id;
use Swoft\Db\Bean\Annotation\Required;
use Swoft\Db\Bean\Annotation\Table;
use Swoft\Db\Model;

/**
 * 用户表实体
 *
 * @Entity()
 * @Table(name="sup_admin_user")
 * @uses      SupAdminUser
 */
class SupAdminUser extends Model
{
    /**
     * @var string $accessToken
     * @Column(name="access_token", type="string", length=255)
     * @Required()
     */
    private $accessToken;

    /**
     * @var string $authKey
     * @Column(name="auth_key", type="string", length=32)
     * @Required()
     */
    private $authKey;

    /**
     * @var int $createdAt
     * @Column(name="created_at", type="integer")
     * @Required()
     */
    private $createdAt;

    /**
     * @var string $email
     * @Column(name="email", type="string", length=255)
     * @Required()
     */
    private $email;

    /**
     * @var int $id
     * @Id()
     * @Column(name="id", type="integer")
     */
    private $id;

    /**
     * @var string $passwordHash
     * @Column(name="password_hash", type="string", length=255)
     * @Required()
     */
    private $passwordHash;

    /**
     * @var string $passwordResetToken
     * @Column(name="password_reset_token", type="string", length=255)
     */
    private $passwordResetToken;

    /**
     * @var string $realName
     * @Column(name="real_name", type="string", length=24, default="")
     */
    private $realName;

    /**
     * @var int $status
     * @Column(name="status", type="smallint", default=10)
     */
    private $status;

    /**
     * @var int $updatedAt
     * @Column(name="updated_at", type="integer")
     * @Required()
     */
    private $updatedAt;

    /**
     * @var string $username 用户名
     * @Column(name="username", type="string", length=32)
     * @Required()
     */
    private $username;

    /**
     * @param string $value
     * @return $this
     */
    public function setAccessToken(string $value): self
    {
        $this->accessToken = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setAuthKey(string $value): self
    {
        $this->authKey = $value;

        return $this;
    }

    /**
     * @param int $value
     * @return $this
     */
    public function setCreatedAt(int $value): self
    {
        $this->createdAt = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setEmail(string $value): self
    {
        $this->email = $value;

        return $this;
    }

    /**
     * @param int $value
     * @return $this
     */
    public function setId(int $value)
    {
        $this->id = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setPasswordHash(string $value): self
    {
        $this->passwordHash = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setPasswordResetToken(string $value): self
    {
        $this->passwordResetToken = $value;

        return $this;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setRealName(string $value): self
    {
        $this->realName = $value;

        return $this;
    }

    /**
     * @param int $value
     * @return $this
     */
    public function setStatus(int $value): self
    {
        $this->status = $value;

        return $this;
    }

    /**
     * @param int $value
     * @return $this
     */
    public function setUpdatedAt(int $value): self
    {
        $this->updatedAt = $value;

        return $this;
    }

    /**
     * 用户名
     *
     * @param string $value
     * @return $this
     */
    public function setUsername(string $value): self
    {
        $this->username = $value;

        return $this;
    }

    /**
     * @return string
     */
    public function getAccessToken()
    {
        return $this->accessToken;
    }

    /**
     * @return string
     */
    public function getAuthKey()
    {
        return $this->authKey;
    }

    /**
     * @return int
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getPasswordHash()
    {
        return $this->passwordHash;
    }

    /**
     * @return string
     */
    public function getPasswordResetToken()
    {
        return $this->passwordResetToken;
    }

    /**
     * @return string
     */
    public function getRealName()
    {
        return $this->realName;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @return int
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * 用户名
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }


}
