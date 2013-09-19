<?php

/**
* ZF-Disqus - Endpoint Threads_List
*
* return a list of threads
*
* https://github.com/datenschleuder/zf-disqus
*
*
* @author Jürgen Meier <support@mypasswordsafe.net>
* @copyright Jürgen Meier 2013
* @version 1.0
* @see http://disqus.com/api/docs/threads/list/
* @license BSD
*/
final class ZendX_Disqus_Endpoints_Threads_List implements 
        ZendX_Disqus_Interfaces_Endpoint
{

    private $_category = NULL;

    private $_forum = NULL;

    private $_thread = NULL;

    private $_author = NULL;

    private $_since = NULL;

    private $_related = NULL;

    private $_cursor = NULL;

    private $_limit = 25;

    private $_include = NULL;

    private $_order = 'desc';

    /**
     * set category id
     *
     * @param int $id            
     * @return ZendX_Disqus_Endpoints_Threads_List
     */
    public function setCategoryId ($id)
    {
        $this->_category = (int) $id;
        return $this;
    }

    /**
     * set forum short name
     *
     * @param string $forum            
     * @return ZendX_Disqus_Endpoints_Threads_List
     */
    public function setForum ($forum)
    {
        $this->_forum = (string) $forum;
        return $this;
    }

    /**
     * set thread id
     *
     * @param int $id            
     * @return ZendX_Disqus_Endpoints_Threads_List
     */
    public function setThreadId ($id)
    {
        $this->_thread = (int) $id;
        return $this;
    }

    /**
     * set author
     *
     * @param string $author            
     * @return ZendX_Disqus_Endpoints_Threads_List
     */
    public function setAuthor ($author)
    {
        $this->_author = (string) $author;
        return $this;
    }

    /**
     * set timestamp
     *
     * @param string $timestamp            
     * @return ZendX_Disqus_Endpoints_Threads_List
     */
    public function setTimestamp ($timestamp)
    {
        $this->_since = (string) $timestamp;
        return $this;
    }

    /**
     * set related, valid values are
     * forum, author, category
     *
     * @param string $related            
     * @return ZendX_Disqus_Endpoints_Threads_List
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
     * @return ZendX_Disqus_Endpoints_Threads_List
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
     * @return ZendX_Disqus_Endpoints_Threads_List
     */
    public function setLimit ($limit)
    {
        $this->_limit = (int) $limit;
        return $this;
    }

    /**
     * set include, valid values are
     * open, closed, killed
     *
     * @param string $include            
     * @return ZendX_Disqus_Endpoints_Threads_List
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
     * @return ZendX_Disqus_Endpoints_Threads_List
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
                'thread' => $this->_thread,
                'forum' => $this->_forum,
                'category' => $this->_category,
                'author' => $this->_author,
                'since' => $this->_since,
                'related' => $this->_related,
                'cursor' => $this->_cursor,
                'limit' => $this->_limit,
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
                'endpointurl' => 'https://disqus.com/api/3.0/threads/list.json',
                'method' => 'get'
        );
    }
}
