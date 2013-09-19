<?php

/**
* ZF-Disqus - Endpoint Posts_List
*
* returns a list of posts
*
* https://github.com/datenschleuder/zf-disqus
*
*
* @author Jürgen Meier <support@mypasswordsafe.net>
* @copyright Jürgen Meier 2013
* @version 1.0
* @see http://disqus.com/api/docs/posts/list/
* @license BSD
*/
final class ZendX_Disqus_Endpoints_Posts_List implements 
        ZendX_Disqus_Interfaces_Endpoint
{

    private $_category = NULL;

    private $_thread = NULL;

    private $_forum = NULL;

    private $_since = NULL;

    private $_related = NULL;

    private $_cursor = NULL;

    private $_limit = 25;

    private $_offset = 0;

    private $_query = NULL;

    private $_include = NULL;

    private $_order = 'desc';

    /**
     * set category id
     *
     * @param int $id            
     * @return ZendX_Disqus_Endpoints_Posts_List
     */
    public function setCategoryId ($id)
    {
        $this->_category = (int) $id;
        return $this;
    }

    /**
     * set thread id
     *
     * @param int $id            
     * @return ZendX_Disqus_Endpoints_Posts_List
     */
    public function setThreadId ($id)
    {
        $this->_thread = (int) $id;
        return $this;
    }

    /**
     * set forum short name
     *
     * @param string $forum            
     * @return ZendX_Disqus_Endpoints_Posts_List
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
     * @return ZendX_Disqus_Endpoints_Posts_List
     */
    public function setTimestamp ($timestamp)
    {
        $this->_since = (string) $timestamp;
        return $this;
    }

    /**
     * set related, valid values are
     * forum ,thread
     *
     * @param string $related            
     * @return ZendX_Disqus_Endpoints_Posts_List
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
     * @return ZendX_Disqus_Endpoints_Posts_List
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
     * @return ZendX_Disqus_Endpoints_Posts_List
     */
    public function setLimit ($limit)
    {
        $this->_limit = (int) $limit;
        return $this;
    }

    /**
     * set offset
     *
     * @param int $offset            
     * @return ZendX_Disqus_Endpoints_Posts_List
     */
    public function setOffset ($offset)
    {
        $this->_offset = (int) $offset;
        return $this;
    }

    /**
     * set query
     *
     * @param string $query            
     * @return ZendX_Disqus_Endpoints_Posts_List
     */
    public function setQuery ($query)
    {
        $this->_query = (string) $query;
        return $this;
    }

    /**
     * set include, valid values are
     * unapproved, approved, spam, deleted, flagged, highlighted
     *
     * @param string $include            
     * @return ZendX_Disqus_Endpoints_Posts_List
     */
    public function setInclude ($include)
    {
        $this->_include = (string) $include;
        return $this;
    }

    /**
     * set order
     *
     * @param string $order            
     * @return ZendX_Disqus_Endpoints_Posts_List
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
                'category' => $this->_category,
                'thread' => $this->_thread,
                'forum' => $this->_forum,
                'since' => $this->_since,
                'related' => $this->_related,
                'cursor' => $this->_cursor,
                'limit' => $this->_limit,
                'offset' => $this->_offset,
                'query' => $this->_query,
                'include' => $this->_include,
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
                'endpointurl' => 'https://disqus.com/api/3.0/posts/list.json',
                'method' => 'get'
        );
    }
}