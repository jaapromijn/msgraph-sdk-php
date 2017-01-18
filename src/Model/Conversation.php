<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Conversation File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 0.1.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Model;

/**
* Conversation class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class Conversation extends Entity
{
    /**
    * Gets the property dictionary of the Conversation
    *
    * @return array The list of properties
    */
    public function getProperties()
    {
        return $this->_propDict;
    }

    /**
    * Gets the topic
    *
    * @return string The topic
    */
    public function getTopic()
    {
        if (array_key_exists("topic", $this->_propDict)) {
            return $this->_propDict["topic"];
        } else {
            return null;
        }
    }

    /**
    * Sets the topic
    *
    * @param string $val The topic
    *
    * @return Conversation
    */
    public function setTopic($val)
    {
        $this->_propDict["topic"] = $val;
        return $this;
    }

    /**
    * Gets the hasAttachments
    *
    * @return bool The hasAttachments
    */
    public function getHasAttachments()
    {
        if (array_key_exists("hasAttachments", $this->_propDict)) {
            return $this->_propDict["hasAttachments"];
        } else {
            return null;
        }
    }

    /**
    * Sets the hasAttachments
    *
    * @param bool $val The hasAttachments
    *
    * @return Conversation
    */
    public function setHasAttachments($val)
    {
        $this->_propDict["hasAttachments"] = boolval($val);
        return $this;
    }

    /**
    * Gets the lastDeliveredDateTime
    *
    * @return \DateTime The lastDeliveredDateTime
    */
    public function getLastDeliveredDateTime()
    {
        if (array_key_exists("lastDeliveredDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastDeliveredDateTime"], "\DateTime")) {
                return $this->_propDict["lastDeliveredDateTime"];
            } else {
                $this->_propDict["lastDeliveredDateTime"] = new \DateTime($this->_propDict["lastDeliveredDateTime"]);
                return $this->_propDict["lastDeliveredDateTime"];
            }
        }
        return null;
    }

    /**
    * Sets the lastDeliveredDateTime
    *
    * @param string $val The lastDeliveredDateTime
    *
    * @return Conversation
    */
    public function setLastDeliveredDateTime($val)
    {
        $this->_propDict["lastDeliveredDateTime"] = $val;
        return $this;
    }

    /**
    * Gets the uniqueSenders
    *
    * @return string The uniqueSenders
    */
    public function getUniqueSenders()
    {
        if (array_key_exists("uniqueSenders", $this->_propDict)) {
            return $this->_propDict["uniqueSenders"];
        } else {
            return null;
        }
    }

    /**
    * Sets the uniqueSenders
    *
    * @param string $val The uniqueSenders
    *
    * @return Conversation
    */
    public function setUniqueSenders($val)
    {
        $this->_propDict["uniqueSenders"] = $val;
        return $this;
    }

    /**
    * Gets the preview
    *
    * @return string The preview
    */
    public function getPreview()
    {
        if (array_key_exists("preview", $this->_propDict)) {
            return $this->_propDict["preview"];
        } else {
            return null;
        }
    }

    /**
    * Sets the preview
    *
    * @param string $val The preview
    *
    * @return Conversation
    */
    public function setPreview($val)
    {
        $this->_propDict["preview"] = $val;
        return $this;
    }

    /** 
    * Gets the threads
    *
    * @return array The threads
    */
    public function getThreads()
    {
        if (array_key_exists("threads", $this->_propDict)) {
           return $this->_propDict["threads"];
        } else {
            return null;
        }
    }
	
    /** 
    * Sets the threads
    *
    * @param string $val The threads
    *
    * @return Conversation
    */
    public function setThreads($val)
    {
		$this->_propDict["threads"] = $val;
        return $this;
    }

}