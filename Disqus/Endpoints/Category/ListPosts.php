<?php

/**
* ZF-Disqus - Endpoint Category_ListPosts
*
* return a list of posts
*
* https://github.com/datenschleuder/zf-disqus
*
*
* @author Jürgen Meier <support@mypasswordsafe.net>
* @copyright Jürgen Meier 2013
* @version 1.0
* @see http://disqus.com/api/docs/category/listPosts/
* @license BSD
*/
final class ZendX_Disqus_Endpoints_Category_ListPosts implements 
        ZendX_Disqus_Interfaces_Endpoint
{

    private $_category = NULL;

    private $_since = NULL;

    private $_related = NULL;

    private $_query = NULL;

    private $_include = NULL;

    private $_cursor = NULL;

    private $_limit = 25;

    private $_order = 'asc';

    /**
     * set category id
     *
     * @param int $id            
     * @return ZendX_Disqus_Endpoints_Category_ListPosts
     */
    public function setForum ($id)
    {
        $this->_category = (int) $id;
        return $this;
    }

    /**
     * set since
     *
     * @param string $timestamp            
     * @return ZendX_Disqus_Endpoints_Category_ListPosts
     */
    public function setSinceId ($timestamp)
    {
        $this->_since = (string) $timestamp;
        return $this;
    }

    /**
     * set cursor
     *
     * @param string $cursor            
     * @return ZendX_Disqus_Endpoints_Category_ListPosts
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
     * @return ZendX_Disqus_Endpoints_Category_ListPosts
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
     * @return ZendX_Disqus_Endpoints_Category_ListPosts
     */
    public function setOrder ($order)
    {
        $this->_order = (string) $order;
        return $this;
    }

    /**
     * set related, valid values are
     * forum, thread
     *
     * @param string $related            
     * @return ZendX_Disqus_Endpoints_Category_ListPosts
     */
    public function setRelated ($related)
    {
        $this->_related = (string) $related;
        return $this;
    }

    /**
     * set query
     *
     * @param string $query            
     * @return ZendX_Disqus_Endpoints_Category_ListPosts
     */
    public function setQuery ($query)
    {
        $this->_query = (string) $query;
        return $this;
    }

    /**
     * set include, valid values are
     * unapproved, approved, spam, deleted, flagged
     *
     * @param string $include            
     * @return ZendX_Disqus_Endpoints_Category_ListPosts
     */
    public function setInclude ($include)
    {
        $this->_include = (string) $include;
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
                'since' => $this->_since,
                'category' => $this->_category,
                'cursor' => $this->_cursor,
                'limit' => $this->_limit,
                'order' => $this->_order,
                'related' => $this->_related,
                'query' => $this->_query,
                'include' => $this->_include
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
                'endpointurl' => 'https://disqus.com/api/3.0/categories/listPosts.json',
                'method' => 'get'
        );
    }
}