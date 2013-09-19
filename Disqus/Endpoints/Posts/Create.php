<?php

/**
 * ZF-Disqus - Endpoint Posts_Create
 *
 * approve a post
 *
 * https://github.com/datenschleuder/zf-disqus
 *
 *
 * @author Jürgen Meier <support@mypasswordsafe.net>
 * @copyright Jürgen Meier 2013
 * @version 1.0
 * @see http://disqus.com/api/docs/posts/create/
 * @license BSD
 */
final class ZendX_Disqus_Endpoints_Posts_Create implements 
        ZendX_Interfaces_Disqus_Endpoint
{

    private $_message = NULL;

    private $_parent = NULL;

    private $_thread = NULL;

    private $_authoremail = NULL;

    private $_authorname = NULL;

    private $_state = NULL;

    private $_authorurl = NULL;

    private $_date = NULL;

    private $_ipaddress = NULL;

    /**
     * set comment message
     *
     * @param string $message            
     * @return ZendX_Disqus_Endpoints_Posts_Create
     */
    public function setMessage ($message)
    {
        $this->_message = (string) $message;
        return $this;
    }

    /**
     * set parent id
     *
     * @param int $parent            
     * @return ZendX_Disqus_Endpoints_Posts_Create
     */
    public function setParent ($parent)
    {
        $this->_parent = (int) $parent;
        return $this;
    }

    /**
     * set thread id
     *
     * @param int $thread            
     * @return ZendX_Disqus_Endpoints_Posts_Create
     */
    public function setThread ($thread)
    {
        $this->_thread = (int) $thread;
        return $this;
    }

    /**
     * set emailaddress
     *
     * @param string $emailaddress            
     * @return ZendX_Disqus_Endpoints_Posts_Create
     */
    public function setAuthorEmail ($emailaddress)
    {
        $this->_authoremail = (string) $emailaddress;
        return $this;
    }

    /**
     * set author name
     *
     * @param string $authorname            
     * @return ZendX_Disqus_Endpoints_Posts_Create
     */
    public function setAuthorName ($authorname)
    {
        $this->_authorname = (string) $authorname;
        return $this;
    }

    /**
     * set state
     *
     * @param string $state            
     * @return ZendX_Disqus_Endpoints_Posts_Create
     */
    public function setState ($state)
    {
        $this->_state = (string) $state;
        return $this;
    }

    /**
     * set author url
     *
     * @param string $authorurl            
     * @return ZendX_Disqus_Endpoints_Posts_Create
     */
    public function setAuthorUrl ($authorurl)
    {
        $this->_authorurl = (string) $authorurl;
        return $this;
    }

    /**
     * set date
     *
     * @param string $date            
     * @return ZendX_Disqus_Endpoints_Posts_Create
     */
    public function setDate ($date)
    {
        $this->_date = (string) $date;
        return $this;
    }

    /**
     * set ip address
     *
     * @param string $ip            
     * @return ZendX_Disqus_Endpoints_Posts_Create
     */
    public function setIPAddress ($ip)
    {
        $this->_ipaddress = (string) $ip;
        return $this;
    }

    public function getData ()
    {
        return array(
                'message' => $this->_message,
                'parent' => $this->_parent,
                'thread' => $this->_thread,
                'author_email' => $this->_authoremail,
                'author_name' => $this->_authorname,
                'state' => $this->_state,
                'author_url' => $this->_authorurl,
                'date' => $this->_date,
                'ip_address' => $this->_ipaddress
        );
    }

    public function getUrl ()
    {
        return array(
                'endpointurl' => 'https://disqus.com/api/3.0/posts/create.json',
                'method' => 'post'
        );
    }
}