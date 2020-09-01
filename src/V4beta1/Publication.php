<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/talent/v4beta1/profile.proto

namespace Google\Cloud\Talent\V4beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Resource that represents a publication resource of a candidate.
 *
 * Generated from protobuf message <code>google.cloud.talent.v4beta1.Publication</code>
 */
class Publication extends \Google\Protobuf\Internal\Message
{
    /**
     * A list of author names.
     * Number of characters allowed is 100.
     *
     * Generated from protobuf field <code>repeated string authors = 1;</code>
     */
    private $authors;
    /**
     * The title of the publication.
     * Number of characters allowed is 100.
     *
     * Generated from protobuf field <code>string title = 2;</code>
     */
    private $title = '';
    /**
     * The description of the publication.
     * Number of characters allowed is 100,000.
     *
     * Generated from protobuf field <code>string description = 3;</code>
     */
    private $description = '';
    /**
     * The journal name of the publication.
     * Number of characters allowed is 100.
     *
     * Generated from protobuf field <code>string journal = 4;</code>
     */
    private $journal = '';
    /**
     * Volume number.
     * Number of characters allowed is 100.
     *
     * Generated from protobuf field <code>string volume = 5;</code>
     */
    private $volume = '';
    /**
     * The publisher of the journal.
     * Number of characters allowed is 100.
     *
     * Generated from protobuf field <code>string publisher = 6;</code>
     */
    private $publisher = '';
    /**
     * The publication date.
     *
     * Generated from protobuf field <code>.google.type.Date publication_date = 7;</code>
     */
    private $publication_date = null;
    /**
     * The publication type.
     * Number of characters allowed is 100.
     *
     * Generated from protobuf field <code>string publication_type = 8;</code>
     */
    private $publication_type = '';
    /**
     * ISBN number.
     * Number of characters allowed is 100.
     *
     * Generated from protobuf field <code>string isbn = 9;</code>
     */
    private $isbn = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $authors
     *           A list of author names.
     *           Number of characters allowed is 100.
     *     @type string $title
     *           The title of the publication.
     *           Number of characters allowed is 100.
     *     @type string $description
     *           The description of the publication.
     *           Number of characters allowed is 100,000.
     *     @type string $journal
     *           The journal name of the publication.
     *           Number of characters allowed is 100.
     *     @type string $volume
     *           Volume number.
     *           Number of characters allowed is 100.
     *     @type string $publisher
     *           The publisher of the journal.
     *           Number of characters allowed is 100.
     *     @type \Google\Type\Date $publication_date
     *           The publication date.
     *     @type string $publication_type
     *           The publication type.
     *           Number of characters allowed is 100.
     *     @type string $isbn
     *           ISBN number.
     *           Number of characters allowed is 100.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Talent\V4Beta1\Profile::initOnce();
        parent::__construct($data);
    }

    /**
     * A list of author names.
     * Number of characters allowed is 100.
     *
     * Generated from protobuf field <code>repeated string authors = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAuthors()
    {
        return $this->authors;
    }

    /**
     * A list of author names.
     * Number of characters allowed is 100.
     *
     * Generated from protobuf field <code>repeated string authors = 1;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAuthors($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->authors = $arr;

        return $this;
    }

    /**
     * The title of the publication.
     * Number of characters allowed is 100.
     *
     * Generated from protobuf field <code>string title = 2;</code>
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * The title of the publication.
     * Number of characters allowed is 100.
     *
     * Generated from protobuf field <code>string title = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setTitle($var)
    {
        GPBUtil::checkString($var, True);
        $this->title = $var;

        return $this;
    }

    /**
     * The description of the publication.
     * Number of characters allowed is 100,000.
     *
     * Generated from protobuf field <code>string description = 3;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * The description of the publication.
     * Number of characters allowed is 100,000.
     *
     * Generated from protobuf field <code>string description = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * The journal name of the publication.
     * Number of characters allowed is 100.
     *
     * Generated from protobuf field <code>string journal = 4;</code>
     * @return string
     */
    public function getJournal()
    {
        return $this->journal;
    }

    /**
     * The journal name of the publication.
     * Number of characters allowed is 100.
     *
     * Generated from protobuf field <code>string journal = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setJournal($var)
    {
        GPBUtil::checkString($var, True);
        $this->journal = $var;

        return $this;
    }

    /**
     * Volume number.
     * Number of characters allowed is 100.
     *
     * Generated from protobuf field <code>string volume = 5;</code>
     * @return string
     */
    public function getVolume()
    {
        return $this->volume;
    }

    /**
     * Volume number.
     * Number of characters allowed is 100.
     *
     * Generated from protobuf field <code>string volume = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setVolume($var)
    {
        GPBUtil::checkString($var, True);
        $this->volume = $var;

        return $this;
    }

    /**
     * The publisher of the journal.
     * Number of characters allowed is 100.
     *
     * Generated from protobuf field <code>string publisher = 6;</code>
     * @return string
     */
    public function getPublisher()
    {
        return $this->publisher;
    }

    /**
     * The publisher of the journal.
     * Number of characters allowed is 100.
     *
     * Generated from protobuf field <code>string publisher = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setPublisher($var)
    {
        GPBUtil::checkString($var, True);
        $this->publisher = $var;

        return $this;
    }

    /**
     * The publication date.
     *
     * Generated from protobuf field <code>.google.type.Date publication_date = 7;</code>
     * @return \Google\Type\Date
     */
    public function getPublicationDate()
    {
        return isset($this->publication_date) ? $this->publication_date : null;
    }

    public function hasPublicationDate()
    {
        return isset($this->publication_date);
    }

    public function clearPublicationDate()
    {
        unset($this->publication_date);
    }

    /**
     * The publication date.
     *
     * Generated from protobuf field <code>.google.type.Date publication_date = 7;</code>
     * @param \Google\Type\Date $var
     * @return $this
     */
    public function setPublicationDate($var)
    {
        GPBUtil::checkMessage($var, \Google\Type\Date::class);
        $this->publication_date = $var;

        return $this;
    }

    /**
     * The publication type.
     * Number of characters allowed is 100.
     *
     * Generated from protobuf field <code>string publication_type = 8;</code>
     * @return string
     */
    public function getPublicationType()
    {
        return $this->publication_type;
    }

    /**
     * The publication type.
     * Number of characters allowed is 100.
     *
     * Generated from protobuf field <code>string publication_type = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setPublicationType($var)
    {
        GPBUtil::checkString($var, True);
        $this->publication_type = $var;

        return $this;
    }

    /**
     * ISBN number.
     * Number of characters allowed is 100.
     *
     * Generated from protobuf field <code>string isbn = 9;</code>
     * @return string
     */
    public function getIsbn()
    {
        return $this->isbn;
    }

    /**
     * ISBN number.
     * Number of characters allowed is 100.
     *
     * Generated from protobuf field <code>string isbn = 9;</code>
     * @param string $var
     * @return $this
     */
    public function setIsbn($var)
    {
        GPBUtil::checkString($var, True);
        $this->isbn = $var;

        return $this;
    }

}

