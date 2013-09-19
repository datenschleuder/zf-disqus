<?php

/**
* ZF-Disqus - Endpoint Threads_Update
*
* update thread information
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
* @see http://disqus.com/api/docs/threads/update/
* @license BSD
*/
final class ZendX_Disqus_Endpoints_Threads_Update implements 
        ZendX_Disqus_Interfaces_Endpoint
{

    private $_category = NULL;

    private $_forum = NULL;

    private $_title = NULL;

    private $_url = NULL;

    private $_date = NULL;

    private $_message = NULL;

    private $_identifier = NULL;

    private $_slug = NULL;

    /**
     * set category id
     *
     * @param string $id            
     * @return ZendX_Disqus_Endpoints_Threads_Update
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
     * @return ZendX_Disqus_Endpoints_Threads_Update
     */
    public function setForum ($forum)
    {
        $this->_forum = (string) $forum;
        return $this;
    }

    /**
     * set title
     *
     * @param string $title            
     * @return ZendX_Disqus_Endpoints_Threads_Update
     */
    public function setTitle ($title)
    {
        $this->_title = (string) $title;
        return $this;
    }

    /**
     * set Url
     *
     * @param string $url            
     * @return ZendX_Disqus_Endpoints_Threads_Update
     */
    public function setUrl ($url)
    {
        $this->_url = (string) $url;
        return $this;
    }

    /**
     * set timestamp
     *
     * @param string $timestamp            
     * @return ZendX_Disqus_Endpoints_Threads_Update
     */
    public function setTimestamp ($timestamp)
    {
        $this->_date = (string) $timestamp;
        return $this;
    }

    /**
     * set message
     *
     * @param string $message            
     * @return ZendX_Disqus_Endpoints_Threads_Update
     */
    public function setMessage ($message)
    {
        $this->_message = (string) $message;
        return $this;
    }

    /**
     * set identifier
     *
     * @param string $ident            
     * @return ZendX_Disqus_Endpoints_Threads_Update
     */
    public function setIdentifier ($ident)
    {
        $this->_identifier = (string) $ident;
        return $this;
    }

    /**
     * set slug
     *
     * @param string $slug            
     * @return ZendX_Disqus_Endpoints_Threads_Update
     */
    public function setSlug ($slug)
    {
        $this->_slug = (string) $slug;
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
                'title' => $this->_title,
                'forum' => $this->_forum,
                'category' => $this->_category,
                'url' => $this->_url,
                'date' => $this->_date,
                'message' => $this->_message,
                'identifier' => $this->_identifier,
                'slug' => $this->_slug
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
                'endpointurl' => 'https://disqus.com/api/3.0/threads/update.json',
                'method' => 'post'
        );
    }
}