<?php

/**
* ZF-Disqus - Endpoint Threads_Subscribe
*
* description not available
*
* https://github.com/datenschleuder/zf-disqus
*
*
* @author Jürgen Meier <support@mypasswordsafe.net>
* @copyright Jürgen Meier 2013
* @version 1.0
* @see http://disqus.com/api/docs/threads/subscribe/
* @license BSD
*/
final class ZendX_Disqus_Endpoints_Threads_Subscribe implements 
        ZendX_Disqus_Interfaces_Endpoint
{

    private $_email = NULL;

    private $_thread = NULL;

    /**
     * set email address, defined by RFC 5322
     *
     * @param string $email            
     * @return ZendX_Disqus_Endpoints_Threads_Subscribe
     */
    public function setEmailAddress ($email)
    {
        $this->_forum = (string) $email;
        return $this;
    }

    /**
     * set thread id
     *
     * @param int $id            
     * @return ZendX_Disqus_Endpoints_Threads_Subscribe
     */
    public function setThreadId ($id)
    {
        $this->_thread = (int) $id;
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
                'email' => $this->_email
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
                'endpointurl' => 'https://disqus.com/api/3.0/threads/subscribe.json',
                'method' => 'post'
        );
    }
}