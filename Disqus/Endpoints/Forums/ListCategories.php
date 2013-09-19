<?php

/**
* ZF-Disqus - Endpoint Forums_ListCategories
*
* return categories within a forum
*
* https://github.com/datenschleuder/zf-disqus
*
*
* @author Jürgen Meier <support@mypasswordsafe.net>
* @copyright Jürgen Meier 2013
* @version 1.0
* @see http://disqus.com/api/docs/forums/listCategories/
* @license BSD
*/
final class ZendX_Disqus_Endpoints_Forums_ListCategories implements 
        ZendX_Disqus_Interfaces_Endpoint
{

    private $_forum = NULL;

    private $_sinceid = NULL;

    private $_cursor = NULL;

    private $_limit = 25;

    private $_order = 'asc';

    /**
     * set since id
     *
     * @param string $id            
     * @return ZendX_Disqus_Endpoints_Forums_ListCategories
     *
     */
    public function setSinceId ($id)
    {
        $this->_sinceid = (string) $id;
        return $this;
    }

    /**
     * set forum short name
     *
     * @param string $name            
     * @return ZendX_Disqus_Endpoints_Forums_ListCategories
     */
    public function setForum ($name)
    {
        $this->_forum = (string) $name;
        return $this;
    }

    /**
     * set cursor
     *
     * @param string $cursor            
     * @return ZendX_Disqus_Endpoints_Forums_ListCategories
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
     * @return ZendX_Disqus_Endpoints_Forums_ListCategories
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
     * @return ZendX_Disqus_Endpoints_Forums_ListCategories
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
                'endpointurl' => 'https://disqus.com/api/3.0/forums/listCategories.json',
                'method' => 'get'
        );
    }
}