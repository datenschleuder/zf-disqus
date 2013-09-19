<?php

/**
* ZF-Disqus - Endpoint Whitelists_Remove
*
* remove entry from the whitelist
*
* https://github.com/datenschleuder/zf-disqus
*
*
* @author Jürgen Meier <support@mypasswordsafe.net>
* @copyright Jürgen Meier 2013
* @version 1.0
* @see http://disqus.com/api/docs/whitelists/remove/
* @license BSD
*/
final class ZendX_Disqus_Endpoints_Whitelists_Remove implements 
        ZendX_Disqus_Interfaces_Endpoint
{

    private $_forum = NULL;

    private $_email = NULL;

    private $_user = NULL;

    /**
     * set forum short name
     *
     * @param string $forum            
     * @return ZendX_Disqus_Endpoints_Whitelists_Remove
     */
    public function setForum ($forum)
    {
        $this->_forum = (string) $forum;
        return $this;
    }

    /**
     * set email address, defined by RFC 5322
     *
     * @param string $email            
     * @return ZendX_Disqus_Endpoints_Whitelists_Remove
     */
    public function setEmailAddress ($email)
    {
        $this->_email = (string) $email;
        return $this;
    }

    /**
     * set user
     *
     * @param string $user            
     * @return ZendX_Disqus_Endpoints_Whitelists_Remove
     */
    public function setUser ($user)
    {
        $this->_user = (string) $user;
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
                'email' => $this->_email,
                'user' => $this->_user
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
                'endpointurl' => 'https://disqus.com/api/3.0/whitelists/remove.json',
                'method' => 'post'
        );
    }
}