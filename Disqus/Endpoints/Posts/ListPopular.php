<?php

/**
* ZF-Disqus - Endpoint Posts_ListPopular
*
* returns a list of popular posts
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
* @see http://disqus.com/api/docs/posts/listPopular/
* @license BSD
*/
final class ZendX_Disqus_Endpoints_Posts_ListPopular implements 
        ZendX_Disqus_Interfaces_Endpoint
{

    private $_category = NULL;

    private $_thread = NULL;

    private $_forum = NULL;

    private $_interval = '7d';

    private $_related = NULL;

    private $_limit = 25;

    private $_query = NULL;

    private $_include = NULL;

    private $_order = 'popular';

    private $_offset = 0;

    /**
     * set offset
     *
     * @param int $offset            
     * @return ZendX_Disqus_Endpoints_Posts_ListPopular
     */
    public function setOffset ($offset)
    {
        $this->_offset = (int) $offset;
        return $this;
    }

    /**
     * set category id
     *
     * @param int $id            
     * @return ZendX_Disqus_Endpoints_Posts_ListPopular
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
     * @return ZendX_Disqus_Endpoints_Posts_ListPopular
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
     * @return ZendX_Disqus_Endpoints_Posts_ListPopular
     */
    public function setForum ($forum)
    {
        $this->_forum = (string) $forum;
        return $this;
    }

    /**
     * set interval, valid values are
     * 1h, 6h, 12h, 1d, 3d, 7d, 30d, 60d, 90d
     *
     * @param string $interval            
     * @return ZendX_Disqus_Endpoints_Posts_ListPopular
     */
    public function setInterval ($interval)
    {
        $this->_interval = (string) $interval;
        return $this;
    }

    /**
     * set related, valid values are
     * forum ,thread
     *
     * @param string $related            
     * @return ZendX_Disqus_Endpoints_Posts_ListPopular
     */
    public function setRelated ($related)
    {
        $this->_related = (string) $related;
        return $this;
    }

    /**
     * set limit
     *
     * @param int $limit            
     * @return ZendX_Disqus_Endpoints_Posts_ListPopular
     */
    public function setLimit ($limit)
    {
        $this->_limit = (int) $limit;
        return $this;
    }

    /**
     * set query
     *
     * @param string $query            
     * @return ZendX_Disqus_Endpoints_Posts_ListPopular
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
     * @return ZendX_Disqus_Endpoints_Posts_ListPopular
     */
    public function setInclude ($include)
    {
        $this->_include = (string) $include;
        return $this;
    }

    /**
     * set order, valid values are
     * popular, best
     *
     * @param string $order            
     * @return ZendX_Disqus_Endpoints_Posts_ListPopular
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
                'interval' => $this->_interval,
                'related' => $this->_related,
                'limit' => $this->_limit,
                'query' => $this->_query,
                'include' => $this->_include,
                'order' => $this->_order,
                'offset' => $this->_offset
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
                'endpointurl' => 'https://disqus.com/api/3.0/posts/listPopular.json',
                'method' => 'get'
        );
    }
}