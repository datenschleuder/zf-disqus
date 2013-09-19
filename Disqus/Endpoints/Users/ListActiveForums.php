<?php

/**
* ZF-Disqus - Endpoint User_ListActiveForums
*
* return a forum list by user
*
* https://github.com/datenschleuder/zf-disqus
*
*
* @author Jürgen Meier <support@mypasswordsafe.net>
* @copyright Jürgen Meier 2013
* @version 1.0
* @see http://disqus.com/api/docs/users/listActiveForums/
* @license BSD
*/
final class ZendX_Disqus_Endpoints_Users_ListActiveForums implements 
        ZendX_Disqus_Interfaces_Endpoint
{

    private $_userid = NULL;

    private $_sinceid = NULL;

    private $_cursor = NULL;

    private $_limit = 25;

    private $_order = 'asc';

    /**
     * set user id
     *
     * @param int $id            
     * @return ZendX_Disqus_Endpoints_Users_ListActiveForums
     */
    public function setUserId ($id)
    {
        $this->_userid = (int) $id;
        return $this;
    }

    /**
     * set since id
     *
     * @param int $id            
     * @return ZendX_Disqus_Endpoints_Users_ListActiveForums
     */
    public function setSinceId ($id)
    {
        $this->_sinceid = (int) $id;
        return $this;
    }

    /**
     * set cursor
     *
     * @param string $cursor            
     * @return ZendX_Disqus_Endpoints_Users_ListActiveForums
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
     * @return ZendX_Disqus_Endpoints_Users_ListActiveForums
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
     * @return ZendX_Disqus_Endpoints_Users_ListActiveForums
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
                'user' => $this->_userid,
                'since_id' => $this->_sinceid,
                'cursor' => $this->_cursor,
                'limit' => $this->_limit,
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
                'endpointurl' => 'https://disqus.com/api/3.0/users/listActiveForums.json',
                'method' => 'get'
        );
    }
}