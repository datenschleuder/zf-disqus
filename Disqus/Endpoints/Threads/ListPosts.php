<?php

/**
* ZF-Disqus - Endpoint Threads_ListPosts
*
* return a list of posts within a thread
*
* https://github.com/datenschleuder/zf-disqus
*
*
* @author Jürgen Meier <support@mypasswordsafe.net>
* @copyright Jürgen Meier 2013
* @version 1.0
* @see http://disqus.com/api/docs/threads/listPosts/
* @license BSD
*/
final class ZendX_Disqus_Endpoints_Threads_ListPosts implements 
        ZendX_Disqus_Interfaces_Endpoint
{

    private $_query = NULL;

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
     * set query
     *
     * @param string $query            
     * @return ZendX_Disqus_Endpoints_Threads_ListPosts
     */
    public function setQuery ($query)
    {
        $this->_category = (string) $query;
        return $this;
    }

    /**
     * set forum short name
     *
     * @param string $forum            
     * @return ZendX_Disqus_Endpoints_Threads_ListPosts
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
     * @return ZendX_Disqus_Endpoints_Threads_ListPosts
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
     * @return ZendX_Disqus_Endpoints_Threads_ListPosts
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
     * @return ZendX_Disqus_Endpoints_Threads_ListPosts
     */
    public function setTimestamp ($timestamp)
    {
        $this->_since = (string) $timestamp;
        return $this;
    }

    /**
     * set related, valid values are
     * forum, thread
     *
     * @param string $related            
     * @return ZendX_Disqus_Endpoints_Threads_ListPosts
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
     * @return ZendX_Disqus_Endpoints_Threads_ListPosts
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
     * @return ZendX_Disqus_Endpoints_Threads_ListPosts
     */
    public function setLimit ($limit)
    {
        $this->_limit = (int) $limit;
        return $this;
    }

    /**
     * set include, valid values are
     * unapproved, approved, spam, deleted, flagged
     *
     * @param string $include            
     * @return ZendX_Disqus_Endpoints_Threads_ListPosts
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
     * @return ZendX_Disqus_Endpoints_Threads_ListPosts
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
                'query' => $this->_query,
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
                'endpointurl' => 'https://disqus.com/api/3.0/threads/listPosts.json',
                'method' => 'get'
        );
    }
}
