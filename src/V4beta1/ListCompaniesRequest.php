<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/talent/v4beta1/company_service.proto

namespace Google\Cloud\Talent\V4beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Input only.
 * List companies for which the client has ACL visibility.
 *
 * Generated from protobuf message <code>google.cloud.talent.v4beta1.ListCompaniesRequest</code>
 */
class ListCompaniesRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required.
     * Resource name of the project under which the company is created.
     * The format is "projects/{project_id}", for example,
     * "projects/api-test-project".
     *
     * Generated from protobuf field <code>string parent = 1;</code>
     */
    private $parent = '';
    /**
     * Optional.
     * The starting indicator from which to return results.
     *
     * Generated from protobuf field <code>string page_token = 2;</code>
     */
    private $page_token = '';
    /**
     * Optional.
     * The maximum number of companies to be returned, at most 100.
     * Default is 100 if a non-positive number is provided.
     *
     * Generated from protobuf field <code>int32 page_size = 3;</code>
     */
    private $page_size = 0;
    /**
     * Optional.
     * Set to true if the companies requested must have open jobs.
     * Defaults to false.
     * If true, at most [page_size][google.cloud.talent.v4beta1.ListCompaniesRequest.page_size] of companies are fetched, among which
     * only those with open jobs are returned.
     *
     * Generated from protobuf field <code>bool require_open_jobs = 4;</code>
     */
    private $require_open_jobs = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required.
     *           Resource name of the project under which the company is created.
     *           The format is "projects/{project_id}", for example,
     *           "projects/api-test-project".
     *     @type string $page_token
     *           Optional.
     *           The starting indicator from which to return results.
     *     @type int $page_size
     *           Optional.
     *           The maximum number of companies to be returned, at most 100.
     *           Default is 100 if a non-positive number is provided.
     *     @type bool $require_open_jobs
     *           Optional.
     *           Set to true if the companies requested must have open jobs.
     *           Defaults to false.
     *           If true, at most [page_size][google.cloud.talent.v4beta1.ListCompaniesRequest.page_size] of companies are fetched, among which
     *           only those with open jobs are returned.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Talent\V4Beta1\CompanyService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required.
     * Resource name of the project under which the company is created.
     * The format is "projects/{project_id}", for example,
     * "projects/api-test-project".
     *
     * Generated from protobuf field <code>string parent = 1;</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required.
     * Resource name of the project under which the company is created.
     * The format is "projects/{project_id}", for example,
     * "projects/api-test-project".
     *
     * Generated from protobuf field <code>string parent = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Optional.
     * The starting indicator from which to return results.
     *
     * Generated from protobuf field <code>string page_token = 2;</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * Optional.
     * The starting indicator from which to return results.
     *
     * Generated from protobuf field <code>string page_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

    /**
     * Optional.
     * The maximum number of companies to be returned, at most 100.
     * Default is 100 if a non-positive number is provided.
     *
     * Generated from protobuf field <code>int32 page_size = 3;</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * Optional.
     * The maximum number of companies to be returned, at most 100.
     * Default is 100 if a non-positive number is provided.
     *
     * Generated from protobuf field <code>int32 page_size = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

    /**
     * Optional.
     * Set to true if the companies requested must have open jobs.
     * Defaults to false.
     * If true, at most [page_size][google.cloud.talent.v4beta1.ListCompaniesRequest.page_size] of companies are fetched, among which
     * only those with open jobs are returned.
     *
     * Generated from protobuf field <code>bool require_open_jobs = 4;</code>
     * @return bool
     */
    public function getRequireOpenJobs()
    {
        return $this->require_open_jobs;
    }

    /**
     * Optional.
     * Set to true if the companies requested must have open jobs.
     * Defaults to false.
     * If true, at most [page_size][google.cloud.talent.v4beta1.ListCompaniesRequest.page_size] of companies are fetched, among which
     * only those with open jobs are returned.
     *
     * Generated from protobuf field <code>bool require_open_jobs = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setRequireOpenJobs($var)
    {
        GPBUtil::checkBool($var);
        $this->require_open_jobs = $var;

        return $this;
    }

}

