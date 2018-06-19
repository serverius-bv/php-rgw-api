<?php declare(strict_types=1);

namespace MyENA\RGW\Models;

use MyENA\RGW\AbstractModel;

/**
 * @SWG\Definition(
 *     definition="RGWBucketIndexHeaders",
 *     type="object",
 *     @SWG\Property(
 *          property="existing_header",
 *          type="object",
 *          ref="#/definitions/RGWBucketIndexUsage"
 *     ),
 *     @SWG\Property(
 *          property="calculated_header",
 *          type="object",
 *          ref="#/definitions/RGWBucketIndexUsage"
 *     )
 * )
 */

/**
 * Class BucketIndexHeaders
 * @package MyENA\RGW\Models
 */
class BucketIndexHeaders extends AbstractModel
{
    /** @var \MyENA\RGW\Models\BucketIndexUsage */
    protected $existingHeader = null;
    /** @var \MyENA\RGW\Models\BucketIndexUsage */
    protected $calculatedHeader = null;

    /**
     * BucketIndexHeaders constructor.
     * @param array $data
     */
    public function __construct(array $data = [])
    {
        parent::__construct($data);
        if (is_array($this->existingHeader)) {
            $this->existingHeader = new BucketIndexUsage($this->existingHeader);
        }
        if (is_array($this->calculatedHeader)) {
            $this->calculatedHeader = new BucketIndexUsage($this->calculatedHeader);
        }
    }

    /**
     * @return \MyENA\RGW\Models\BucketIndexUsage
     */
    public function getExistingHeader(): BucketIndexUsage
    {
        return $this->existingHeader;
    }

    /**
     * @return \MyENA\RGW\Models\BucketIndexUsage
     */
    public function getCalculatedHeader(): BucketIndexUsage
    {
        return $this->calculatedHeader;
    }
}