<?php

/**
* ZF-Disqus - Endpoint Whitelists_List
*
* return all whitelists
*
* https://github.com/datenschleuder/zf-disqus
*
*
* @author Jürgen Meier <support@mypasswordsafe.net>
* @copyright Jürgen Meier 2013
* @version 1.0
* @see http://disqus.com/api/docs/whitelists/list/
* @license BSD
*/
final class ZendX_Disqus_Endpoints_Whitelists_List implements 
        ZendX_Disqus_Interfaces_Endpoint
{

    private $_forum = NULL;

    private $_since = NULL;

    private $_related = NULL;

    private $_cursor = NULL;

    private $_limit = 25;

    private $_sinceid = NULL;

    private $_query = NULL;

    private $_type = NULL;

    private $_order = 'asc';

    /**
     * set forum short name
     *
     * @param string $forum            
     * @return ZendX_Disqus_Endpoints_Whitelists_List
     */
    public function setForum ($forum)
    {
        $this->_forum = (string) $forum;
        return $this;
    }

    /**
     * set since
     *
     * @param string $timestamp            
     * @return ZendX_Disqus_Endpoints_Whitelists_List
     */
    public function setTimestamp ($timestamp)
    {
        $this->_since = (string) $timestamp;
        return $this;
    }

    /**
     * set related, valid values are
     * forum
     *
     * @param string $related            
     * @return ZendX_Disqus_Endpoints_Whitelists_List
     */
    public function setRelated ($related)
    {
        $this->_related = (string) $related;
        return $this;
    }

    /**
     * set cursor
     *
     * @param string $cursor            
     * @return ZendX_Disqus_Endpoints_Whitelists_List
     */
    public function setCursor ($cursor)
    {
        $this->_cursor = (string) $cursor;
        return $this;
    }

    /**
     * set limit
     *
     * @param int $limit            
     * @return ZendX_Disqus_Endpoints_Whitelists_List
     */
    public function setLimit ($limit)
    {
        $this->_limit = (int) $limit;
        return $this;
    }

    /**
     * set since id
     *
     * @param string $id            
     * @return ZendX_Disqus_Endpoints_Whitelists_List
     */
    public function setSinceId ($id)
    {
        $this->_sinceid = (string) $id;
        return $this;
    }

    /**
     * set query
     *
     * @param string $query            
     * @return ZendX_Disqus_Endpoints_Whitelists_List
     */
    public function setQuery ($query)
    {
        $this->_query = (string) $query;
        return $this;
    }

    /**
     * set type, valid values are
     * email, user
     *
     * @param string $type            
     * @return ZendX_Disqus_Endpoints_Whitelists_List
     */
    public function setType ($type)
    {
        $this->_type = (string) $type;
        return $this;
    }

    /**
     * set order
     *
     * @param string $order            
     * @return ZendX_Disqus_Endpoints_Whitelists_List
     */
    public function setOrder ($order)
    {
        $this->_order = (string) $order;
        return $this;
    }

    /**
     * return GET-Parameter
     *
     * (non-PHPdoc)
     * 
     * @see ZendX_Disqus_Interfaces_Endpoint::getData()
     * @return array
     *
     */
    public function getData ()
    {
        return array(
                'forum' => $this->_forum,
                'since' => $this->_since,
                'related' => $this->_related,
                'cursor' => $this->_cursor,
                'limit' => $this->_limit,
                'since_id' => $this->_sinceid,
                'query' => $this->_query,
                'type' => $this->_type,
                'order' => $this->_order
        );
    }

    /**
     * return url params
     *
     * (non-PHPdoc)
     * 
     * @see ZendX_Disqus_Interfaces_Endpoint::getUrl()
     * @return array
     *
     */
    public function getUrl ()
    {
        return array(
                'endpointurl' => 'https://disqus.com/api/3.0/whitelists/list.json',
                'method' => 'get'
        );
    }
}