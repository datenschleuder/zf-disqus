<?php

/**
* ZF-Disqus - Endpoint Whitelists_Add
*
* adds an entry to the whitelist
*
* https://github.com/datenschleuder/zf-disqus
*
*
* @author Jürgen Meier <support@mypasswordsafe.net>
* @copyright Jürgen Meier 2013
* @version 1.0
* @see http://disqus.com/api/docs/whitelists/add/
* @license BSD
*/
final class ZendX_Disqus_Endpoints_Whitelists_Add implements 
        ZendX_Disqus_Interfaces_Endpoint
{

    private $_forum = NULL;

    private $_notes = '';

    private $_email = NULL;

    private $_user = NULL;

    /**
     * set forum short name
     *
     * @param string $forum            
     * @return ZendX_Disqus_Endpoints_Whitelists_Add
     */
    public function setForum ($forum)
    {
        $this->_forum = (string) $forum;
        return $this;
    }

    /**
     * set note
     *
     * @param string $note            
     * @return ZendX_Disqus_Endpoints_Whitelists_Add
     */
    public function setNote ($note)
    {
        $this->_notes = (string) $note;
        return $this;
    }

    /**
     * set email address, defined by RFC 5322
     *
     * @param string $email            
     * @return ZendX_Disqus_Endpoints_Whitelists_Add
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
     * @return ZendX_Disqus_Endpoints_Whitelists_Add
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
                'notes' => $this->_notes,
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
                'endpointurl' => 'https://disqus.com/api/3.0/whitelists/add.json',
                'method' => 'post'
        );
    }
}