<?php

/**
* ZF-Disqus - Endpoint User_ListActiveThreads
*
* return a list of threads 
* 
* CAUTION:
* This method has BETA state and is currently under development 
*
* https://github.com/datenschleuder/zf-disqus
*
*
* @author Jürgen Meier <support@mypasswordsafe.net>
* @copyright Jürgen Meier 2013
* @version 1.0
* @see http://disqus.com/api/docs/users/listActiveThreads/
* @license BSD
*/
final class ZendX_Disqus_Endpoints_Users_ListActiveThreads implements 
        ZendX_Disqus_Interfaces_Endpoint
{

    private $_user = NULL;

    private $_since = NULL;

    private $_cursor = NULL;

    private $_limit = 25;

    private $_order = 'desc';

    private $_forum = NULL;

    private $_include = NULL;

    private $_related = NULL;

    /**
     * set user id
     *
     * @param int $id            
     * @return ZendX_Disqus_Endpoints_Users_ListActiveThreads
     */
    public function setUserId ($id)
    {
        $this->_userid = (int) $id;
        return $this;
    }

    /**
     * set timestamp
     *
     * @param string $timestamp            
     * @return ZendX_Disqus_Endpoints_Users_ListActiveThreads
     */
    public function setSince ($timestamp)
    {
        $this->_sinceid = (string) $timestamp;
        return $this;
    }

    /**
     * set cursor
     *
     * @param string $cursor            
     * @return ZendX_Disqus_Endpoints_Users_ListActiveThreads
     */
    public function setCursor ($cursor)
    {
        $this->_cursor = (string) $cursor;
        return $this;
    }

    /**
     * set result limit
     *
     * @param int $limit            
     * @return ZendX_Disqus_Endpoints_Users_ListActiveThreads
     */
    public function setLimit ($limit)
    {
        $this->_limit = (int) $limit;
        return $this;
    }

    /**
     * set order
     *
     * @param string $order            
     * @return ZendX_Disqus_Endpoints_Users_ListActiveThreads
     */
    public function setOrder ($order)
    {
        $this->_order = (string) $order;
        return $this;
    }

    /**
     * set forum
     *
     * @param string $forum            
     * @return ZendX_Disqus_Endpoints_Users_ListActiveThreads
     */
    public function setForum ($forum)
    {
        $this->_forum = (string) $forum;
        return $this;
    }

    /**
     * set include valid values are
     * open, closed, killed
     *
     * @param string $include            
     * @return ZendX_Disqus_Endpoints_Users_ListActiveThreads
     */
    public function setInclude ($include)
    {
        $this->_include = (string) $include;
        return $this;
    }

    /**
     * specify relations to include valid values are
     * forum, author, category
     *
     * @param string $related            
     * @return ZendX_Disqus_Endpoints_Users_ListActiveForums
     */
    public function setRelated ($related)
    {
        $this->_related = (string) $related;
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
                'user' => $this->_user,
                'since' => $this->_since,
                'cursor' => $this->_cursor,
                'limit' => $this->_limit,
                'order' => $this->_order,
                'include' => $this->_include,
                'forum' => $this->_forum,
                'related' => $this->_related
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
                'endpointurl' => 'https://disqus.com/api/3.0/users/listActiveThreads.json',
                'method' => 'get'
        );
    }
}