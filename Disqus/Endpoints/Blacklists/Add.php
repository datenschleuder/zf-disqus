<?php

/**
* ZF-Disqus - Endpoint Blacklists_Add
*
* adds entry to blacklist
*
* https://github.com/datenschleuder/zf-disqus
*
*
* @author Jürgen Meier <support@mypasswordsafe.net>
* @copyright Jürgen Meier 2013
* @version 1.0
* @see http://disqus.com/api/docs/blacklists/add/
* @license BSD
*/
final class ZendX_Disqus_Endpoints_Blacklists_Add implements 
        ZendX_Disqus_Interfaces_Endpoint
{

    private $_user = NULL;

    private $_forum = NULL;

    private $_word = NULL;

    private $_notes = '';

    private $_retroactive = 'false';

    private $_ip = NULL;

    private $_email = NULL;

    private $_domain = NULL;

    /**
     * set user id
     *
     * @param int $id            
     * @return ZendX_Disqus_Endpoints_Blacklists_Add
     */
    public function setUserId ($id)
    {
        $this->_userid = (int) $id;
        return $this;
    }

    /**
     * set forum name
     *
     * @param string $forum            
     * @return ZendX_Disqus_Endpoints_Blacklists_Add
     */
    public function setForum ($forum)
    {
        $this->_forum = (string) $forum;
        return $this;
    }

    /**
     * set domain
     *
     * @param string $domain            
     * @return ZendX_Disqus_Endpoints_Blacklists_Add
     */
    public function setDomain ($domain)
    {
        $this->_domain = (string) $domain;
        return $this;
    }

    /**
     * set word, max length 200 signs
     *
     * @param string $word            
     * @return ZendX_Disqus_Endpoints_Blacklists_Add
     */
    public function setWord ($word)
    {
        $this->_word = (string) $word;
        return $this;
    }

    /**
     * set retroactive
     *
     * @param string $state            
     * @return ZendX_Disqus_Endpoints_Blacklists_Add
     */
    public function setRetroactive ($state)
    {
        $this->_retroactive = (string) $state;
        return $this;
    }

    /**
     * set notes, max length 50 signs
     *
     * @param string $note            
     * @return ZendX_Disqus_Endpoints_Blacklists_Add
     */
    public function setNotes ($note)
    {
        $this->_notes = (string) $note;
        return $this;
    }

    /**
     * set IP address in CIDR notation
     *
     * @param string $ip            
     * @return ZendX_Disqus_Endpoints_Blacklists_Add
     */
    public function setIpAddress ($ip)
    {
        $this->_ip = (string) $ip;
        return $this;
    }

    /**
     * set email address defined by RFC 5322
     *
     * @param string $email            
     * @return ZendX_Disqus_Endpoints_Blacklists_Add
     */
    public function setEmailAddress ($email)
    {
        $this->_email = (string) $email;
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
                'user' => $this->_user,
                'forum' => $this->_forum,
                'word' => $this->_word,
                'retroactive' => $this->_retroactive,
                'ip' => $this->_ip,
                'domain' => $this->_domain,
                'email' => $this->_email,
                'notes' => $this->_notes
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
                'endpointurl' => 'https://disqus.com/api/3.0/blacklists/add.json',
                'method' => 'post'
        );
    }
}