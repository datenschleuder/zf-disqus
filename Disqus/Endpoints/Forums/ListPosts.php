<?php

/**
* ZF-Disqus - Endpoint Forums_ListPosts
*
* returns a list of posts
*
* https://github.com/datenschleuder/zf-disqus
*
*
* @author Jürgen Meier <support@mypasswordsafe.net>
* @copyright Jürgen Meier 2013
* @version 1.0
* @see http://disqus.com/api/docs/forums/listPosts/
* @license BSD
*/
final class ZendX_Disqus_Endpoints_Forums_ListPosts implements 
        ZendX_Disqus_Interfaces_Endpoint
{

    private $_forum = NULL;

    private $_since = NULL;

    private $_cursor = NULL;

    private $_limit = 25;

    private $_order = 'desc';

    private $_query = NULL;

    private $_include = 'approved';

    private $_related = NULL;

    /**
     * set related, valid values are thread
     *
     * @param string $related            
     * @return ZendX_Disqus_Endpoints_Forums_ListPosts
     */
    public function setRelated ($related)
    {
        $this->_related = (string) $related;
        return $this;
    }

    /**
     * set since id
     *
     * @param string $id            
     * @return ZendX_Disqus_Endpoints_Forums_ListPosts
     *
     */
    public function setSince ($timestamp)
    {
        $this->_since = (string) $timestamp;
        return $this;
    }

    /**
     * set query string
     *
     * @param string $query            
     * @return ZendX_Disqus_Endpoints_Forums_ListPosts
     */
    public function setQuery ($query)
    {
        $this->_query = (string) $query;
        return $this;
    }

    /**
     * set include param, valid values are
     * unapproved, approved, spam, deleted, flagged
     *
     * @param string $include            
     * @return ZendX_Disqus_Endpoints_Forums_ListPosts
     */
    public function setInclude ($include)
    {
        $this->_include = (string) $include;
        return $this;
    }

    /**
     * set forum short name
     *
     * @param string $name            
     * @return ZendX_Disqus_Endpoints_Forums_ListPosts
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
     * @return ZendX_Disqus_Endpoints_Forums_ListPosts
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
     * @return ZendX_Disqus_Endpoints_Forums_ListPosts
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
     * @return ZendX_Disqus_Endpoints_Forums_ListPosts
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
                'cursor' => $this->_cursor,
                'limit' => $this->_limit,
                'order' => $this->_order,
                'related' => $this->_related,
                'include' => $this->_include,
                'query' => $this->_query
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
                'endpointurl' => 'https://disqus.com/api/3.0/forums/listPosts.json',
                'method' => 'get'
        );
    }
}