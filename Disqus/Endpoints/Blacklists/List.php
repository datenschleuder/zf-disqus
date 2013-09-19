<?php

/**
* ZF-Disqus - Endpoint Blacklists_List
*
* return all blacklists
*
* https://github.com/datenschleuder/zf-disqus
*
*
* @author Jürgen Meier <support@mypasswordsafe.net>
* @copyright Jürgen Meier 2013
* @version 1.0
* @see http://disqus.com/api/docs/blacklists/list/
* @license BSD
*/
final class ZendX_Disqus_Endpoints_Blacklists_List implements 
        ZendX_Disqus_Interfaces_Endpoint
{

    private $_since = NULL;

    private $_forum = NULL;

    private $_related = NULL;

    private $_cursor = '';

    private $_limit = 25;

    private $_sinceid = NULL;

    private $_query = NULL;

    private $_type = NULL;

    private $_order = 'asc';

    /**
     * set forum short name
     *
     * @param string $forum            
     * @return ZendX_Disqus_Endpoints_Blacklists_List
     */
    public function setForum ($forum)
    {
        $this->_forum = (string) $forum;
        return $this;
    }

    /**
     * set timstamp using Unix timestamp
     * (or ISO datetime standard)
     *
     * @param string $timestamp            
     * @return ZendX_Disqus_Endpoints_Blacklists_List
     */
    public function setSince ($timestamp)
    {
        $this->_since = (string) $timestamp;
        return $this;
    }

    /**
     * set related, specify relations to include
     * with your response, valid values are forum
     *
     * @param string $related            
     * @return ZendX_Disqus_Endpoints_Blacklists_List
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
     * @return ZendX_Disqus_Endpoints_Blacklists_List
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
     * @return ZendX_Disqus_Endpoints_Blacklists_List
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
     * @return ZendX_Disqus_Endpoints_Blacklists_List
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
     * @return ZendX_Disqus_Endpoints_Blacklists_List
     */
    public function setQuery ($query)
    {
        $this->_query = (string) $query;
        return $this;
    }

    /**
     * set type valid values are
     * domain, word, ip, user, thread_slug, email
     *
     * @param string $types            
     * @return ZendX_Disqus_Endpoints_Blacklists_List
     */
    public function setType ($types)
    {
        $this->_type = (string) $types;
        return $this;
    }

    /**
     * set order
     *
     * @param string $order            
     * @return ZendX_Disqus_Endpoints_Blacklists_List
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
                'since' => $this->_since,
                'forum' => $this->_forum,
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
                'endpointurl' => 'https://disqus.com/api/3.0/blacklists/list.json',
                'method' => 'get'
        );
    }
}