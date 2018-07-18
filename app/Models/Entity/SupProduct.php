<?php

namespace App\Models\Entity;

use Swoft\Db\Bean\Annotation\Column;
use Swoft\Db\Bean\Annotation\Entity;
use Swoft\Db\Bean\Annotation\Id;
use Swoft\Db\Bean\Annotation\Required;
use Swoft\Db\Bean\Annotation\Table;
use Swoft\Db\Model;

/**
 * 货品信息
 * @Entity()
 * @Table(name="sup_product")
 *
 * @uses      SupProduct
 */
class SupProduct extends Model
{
    /**
     * @var int $agentPrice 代理价格/分
     * @Column(name="agent_price", type="integer", default=0)
     */
    private $agentPrice;

    /**
     * @var string $applyCrowd 针对人群
     * @Column(name="apply_crowd", type="string", length=255, default="")
     */
    private $applyCrowd;

    /**
     * @var string $barcode 条码
     * @Column(name="barcode", type="string", length=64, default="")
     */
    private $barcode;

    /**
     * @var string $brand 品牌
     * @Column(name="brand", type="string", length=64)
     */
    private $brand;

    /**
     * @var string $caseNo 备案号/批文
     * @Column(name="case_no", type="string", length=255, default="")
     */
    private $caseNo;

    /**
     * @var string $category 所有类目
     * @Column(name="category", type="string", length=48, default="")
     */
    private $category;

    /**
     * @var int $categoryId 类目ID
     * @Column(name="category_id", type="integer", default=0)
     */
    private $categoryId;

    /**
     * @var int $counterPrice 专框价格
     * @Column(name="counter_price", type="integer", default=0)
     */
    private $counterPrice;

    /**
     * @var int $createdAt 创建时间
     * @Column(name="created_at", type="integer")
     * @Required()
     */
    private $createdAt;

    /**
     * @var string $createdBy 创建人
     * @Column(name="created_by", type="string", length=12)
     * @Required()
     */
    private $createdBy;

    /**
     * @var int $createdId 创建人ID
     * @Column(name="created_id", type="integer", default=0)
     */
    private $createdId;

    /**
     * @var int $deptId 部门ID
     * @Column(name="dept_id", type="integer", default=0)
     */
    private $deptId;

    /**
     * @var int $expired 保质期
     * @Column(name="expired", type="integer", default=0)
     */
    private $expired;

    /**
     * @var string $features 产品功能
     * @Column(name="features", type="string", length=255, default="")
     */
    private $features;

    /**
     * @var int $id
     * @Id()
     * @Column(name="id", type="integer")
     */
    private $id;

    /**
     * @var string $ingredient 主要成分
     * @Column(name="ingredient", type="string", length=255, default="")
     */
    private $ingredient;

    /**
     * @var int $isDelete 删除(0/否,1/是)
     * @Column(name="is_delete", type="tinyint", default=0)
     */
    private $isDelete;

    /**
     * @var int $isPart 套盒附属品(0/否,1/是)
     * @Column(name="is_part", type="tinyint", default=0)
     */
    private $isPart;

    /**
     * @var string $itemNo 货号
     * @Column(name="item_no", type="string", length=24, default="")
     */
    private $itemNo;

    /**
     * @var string $licence 厂家&许可证
     * @Column(name="licence", type="string", length=255, default="")
     */
    private $licence;

    /**
     * @var int $listing 上市日期
     * @Column(name="listing", type="integer", default=0)
     */
    private $listing;

    /**
     * @var string $mark 标识
     * @Column(name="mark", type="string", length=64, default="")
     */
    private $mark;

    /**
     * @var string $mkCode 慕可代码
     * @Column(name="mk_code", type="string", length=24, default="")
     */
    private $mkCode;

    /**
     * @var string $name 品名
     * @Column(name="name", type="string", length=128)
     * @Required()
     */
    private $name;

    /**
     * @var string $netUnit 净含量单位
     * @Column(name="net_unit", type="string", length=12, default="")
     */
    private $netUnit;

    /**
     * @var int $netWeight 净含量(前端输入的100倍)
     * @Column(name="net_weight", type="integer", default=0)
     */
    private $netWeight;

    /**
     * @var int $price 价格/分
     * @Column(name="price", type="integer", default=0)
     */
    private $price;

    /**
     * @var string $process 工序
     * @Column(name="process", type="string", length=255, default="")
     */
    private $process;

    /**
     * @var string $property 属性
     * @Column(name="property", type="string", length=128, default="")
     */
    private $property;

    /**
     * @var string $shop 渠道/店铺
     * @Column(name="shop", type="string", length=64, default="")
     */
    private $shop;

    /**
     * @var string $unit 单位
     * @Column(name="unit", type="string", length=12, default="")
     */
    private $unit;

    /**
     * @var int $updatedAt 更新时间
     * @Column(name="updated_at", type="integer", default=0)
     */
    private $updatedAt;

    /**
     * @var string $updatedBy 修改人
     * @Column(name="updated_by", type="string", length=12)
     * @Required()
     */
    private $updatedBy;

    /**
     * @var int $updatedId 修改人ID
     * @Column(name="updated_id", type="integer", default=0)
     */
    private $updatedId;

    /**
     * 代理价格/分
     *
     * @param int $value
     * @return $this
     */
    public function setAgentPrice(int $value): self
    {
        $this->agentPrice = $value;

        return $this;
    }

    /**
     * 针对人群
     *
     * @param string $value
     * @return $this
     */
    public function setApplyCrowd(string $value): self
    {
        $this->applyCrowd = $value;

        return $this;
    }

    /**
     * 条码
     *
     * @param string $value
     * @return $this
     */
    public function setBarcode(string $value): self
    {
        $this->barcode = $value;

        return $this;
    }

    /**
     * 品牌
     *
     * @param string $value
     * @return $this
     */
    public function setBrand(string $value): self
    {
        $this->brand = $value;

        return $this;
    }

    /**
     * 备案号/批文
     *
     * @param string $value
     * @return $this
     */
    public function setCaseNo(string $value): self
    {
        $this->caseNo = $value;

        return $this;
    }

    /**
     * 所有类目
     *
     * @param string $value
     * @return $this
     */
    public function setCategory(string $value): self
    {
        $this->category = $value;

        return $this;
    }

    /**
     * 类目ID
     *
     * @param int $value
     * @return $this
     */
    public function setCategoryId(int $value): self
    {
        $this->categoryId = $value;

        return $this;
    }

    /**
     * 专框价格
     *
     * @param int $value
     * @return $this
     */
    public function setCounterPrice(int $value): self
    {
        $this->counterPrice = $value;

        return $this;
    }

    /**
     * 创建时间
     *
     * @param int $value
     * @return $this
     */
    public function setCreatedAt(int $value): self
    {
        $this->createdAt = $value;

        return $this;
    }

    /**
     * 创建人
     *
     * @param string $value
     * @return $this
     */
    public function setCreatedBy(string $value): self
    {
        $this->createdBy = $value;

        return $this;
    }

    /**
     * 创建人ID
     *
     * @param int $value
     * @return $this
     */
    public function setCreatedId(int $value): self
    {
        $this->createdId = $value;

        return $this;
    }

    /**
     * 部门ID
     *
     * @param int $value
     * @return $this
     */
    public function setDeptId(int $value): self
    {
        $this->deptId = $value;

        return $this;
    }

    /**
     * 保质期
     *
     * @param int $value
     * @return $this
     */
    public function setExpired(int $value): self
    {
        $this->expired = $value;

        return $this;
    }

    /**
     * 产品功能
     *
     * @param string $value
     * @return $this
     */
    public function setFeatures(string $value): self
    {
        $this->features = $value;

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
     * 主要成分
     *
     * @param string $value
     * @return $this
     */
    public function setIngredient(string $value): self
    {
        $this->ingredient = $value;

        return $this;
    }

    /**
     * 删除(0/否,1/是)
     *
     * @param int $value
     * @return $this
     */
    public function setIsDelete(int $value): self
    {
        $this->isDelete = $value;

        return $this;
    }

    /**
     * 套盒附属品(0/否,1/是)
     *
     * @param int $value
     * @return $this
     */
    public function setIsPart(int $value): self
    {
        $this->isPart = $value;

        return $this;
    }

    /**
     * 货号
     *
     * @param string $value
     * @return $this
     */
    public function setItemNo(string $value): self
    {
        $this->itemNo = $value;

        return $this;
    }

    /**
     * 厂家&许可证
     *
     * @param string $value
     * @return $this
     */
    public function setLicence(string $value): self
    {
        $this->licence = $value;

        return $this;
    }

    /**
     * 上市日期
     *
     * @param int $value
     * @return $this
     */
    public function setListing(int $value): self
    {
        $this->listing = $value;

        return $this;
    }

    /**
     * 标识
     *
     * @param string $value
     * @return $this
     */
    public function setMark(string $value): self
    {
        $this->mark = $value;

        return $this;
    }

    /**
     * 慕可代码
     *
     * @param string $value
     * @return $this
     */
    public function setMkCode(string $value): self
    {
        $this->mkCode = $value;

        return $this;
    }

    /**
     * 品名
     *
     * @param string $value
     * @return $this
     */
    public function setName(string $value): self
    {
        $this->name = $value;

        return $this;
    }

    /**
     * 净含量单位
     *
     * @param string $value
     * @return $this
     */
    public function setNetUnit(string $value): self
    {
        $this->netUnit = $value;

        return $this;
    }

    /**
     * 净含量(前端输入的100倍)
     *
     * @param int $value
     * @return $this
     */
    public function setNetWeight(int $value): self
    {
        $this->netWeight = $value;

        return $this;
    }

    /**
     * 价格/分
     *
     * @param int $value
     * @return $this
     */
    public function setPrice(int $value): self
    {
        $this->price = $value;

        return $this;
    }

    /**
     * 工序
     *
     * @param string $value
     * @return $this
     */
    public function setProcess(string $value): self
    {
        $this->process = $value;

        return $this;
    }

    /**
     * 属性
     *
     * @param string $value
     * @return $this
     */
    public function setProperty(string $value): self
    {
        $this->property = $value;

        return $this;
    }

    /**
     * 渠道/店铺
     *
     * @param string $value
     * @return $this
     */
    public function setShop(string $value): self
    {
        $this->shop = $value;

        return $this;
    }

    /**
     * 单位
     *
     * @param string $value
     * @return $this
     */
    public function setUnit(string $value): self
    {
        $this->unit = $value;

        return $this;
    }

    /**
     * 更新时间
     *
     * @param int $value
     * @return $this
     */
    public function setUpdatedAt(int $value): self
    {
        $this->updatedAt = $value;

        return $this;
    }

    /**
     * 修改人
     *
     * @param string $value
     * @return $this
     */
    public function setUpdatedBy(string $value): self
    {
        $this->updatedBy = $value;

        return $this;
    }

    /**
     * 修改人ID
     *
     * @param int $value
     * @return $this
     */
    public function setUpdatedId(int $value): self
    {
        $this->updatedId = $value;

        return $this;
    }

    /**
     * 代理价格/分
     *
     * @return int
     */
    public function getAgentPrice()
    {
        return $this->agentPrice;
    }

    /**
     * 针对人群
     *
     * @return string
     */
    public function getApplyCrowd()
    {
        return $this->applyCrowd;
    }

    /**
     * 条码
     *
     * @return string
     */
    public function getBarcode()
    {
        return $this->barcode;
    }

    /**
     * 品牌
     *
     * @return string
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * 备案号/批文
     *
     * @return string
     */
    public function getCaseNo()
    {
        return $this->caseNo;
    }

    /**
     * 所有类目
     *
     * @return string
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * 类目ID
     *
     * @return int
     */
    public function getCategoryId()
    {
        return $this->categoryId;
    }

    /**
     * 专框价格
     *
     * @return int
     */
    public function getCounterPrice()
    {
        return $this->counterPrice;
    }

    /**
     * 创建时间
     *
     * @return int
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * 创建人
     *
     * @return string
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }

    /**
     * 创建人ID
     *
     * @return int
     */
    public function getCreatedId()
    {
        return $this->createdId;
    }

    /**
     * 部门ID
     *
     * @return int
     */
    public function getDeptId()
    {
        return $this->deptId;
    }

    /**
     * 保质期
     *
     * @return int
     */
    public function getExpired()
    {
        return $this->expired;
    }

    /**
     * 产品功能
     *
     * @return string
     */
    public function getFeatures()
    {
        return $this->features;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * 主要成分
     *
     * @return string
     */
    public function getIngredient()
    {
        return $this->ingredient;
    }

    /**
     * 删除(0/否,1/是)
     *
     * @return int
     */
    public function getIsDelete()
    {
        return $this->isDelete;
    }

    /**
     * 套盒附属品(0/否,1/是)
     *
     * @return int
     */
    public function getIsPart()
    {
        return $this->isPart;
    }

    /**
     * 货号
     *
     * @return string
     */
    public function getItemNo()
    {
        return $this->itemNo;
    }

    /**
     * 厂家&许可证
     *
     * @return string
     */
    public function getLicence()
    {
        return $this->licence;
    }

    /**
     * 上市日期
     *
     * @return int
     */
    public function getListing()
    {
        return $this->listing;
    }

    /**
     * 标识
     *
     * @return string
     */
    public function getMark()
    {
        return $this->mark;
    }

    /**
     * 慕可代码
     *
     * @return string
     */
    public function getMkCode()
    {
        return $this->mkCode;
    }

    /**
     * 品名
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * 净含量单位
     *
     * @return string
     */
    public function getNetUnit()
    {
        return $this->netUnit;
    }

    /**
     * 净含量(前端输入的100倍)
     *
     * @return int
     */
    public function getNetWeight()
    {
        return $this->netWeight;
    }

    /**
     * 价格/分
     *
     * @return int
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * 工序
     *
     * @return string
     */
    public function getProcess()
    {
        return $this->process;
    }

    /**
     * 属性
     *
     * @return string
     */
    public function getProperty()
    {
        return $this->property;
    }

    /**
     * 渠道/店铺
     *
     * @return string
     */
    public function getShop()
    {
        return $this->shop;
    }

    /**
     * 单位
     *
     * @return string
     */
    public function getUnit()
    {
        return $this->unit;
    }

    /**
     * 更新时间
     *
     * @return int
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * 修改人
     *
     * @return string
     */
    public function getUpdatedBy()
    {
        return $this->updatedBy;
    }

    /**
     * 修改人ID
     *
     * @return int
     */
    public function getUpdatedId()
    {
        return $this->updatedId;
    }

}
