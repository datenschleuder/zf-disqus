<?php

/**
* ZF-Disqus - Endpoint Blacklists_Remove
*
* remove entry from blacklist
*
* https://github.com/datenschleuder/zf-disqus
*
*
* @author Jürgen Meier <support@mypasswordsafe.net>
* @copyright Jürgen Meier 2013
* @version 1.0
* @see http://disqus.com/api/docs/blacklists/remove/
* @license BSD
*/
final class ZendX_Disqus_Endpoints_Blacklists_Remove implements 
        ZendX_Disqus_Interfaces_Endpoint
{

    private $_user = NULL;

    private $_forum = NULL;

    private $_word = NULL;

    private $_ip = NULL;

    private $_email = NULL;

    private $_domain = NULL;

    /**
     * set user id
     *
     * @param int $id            
     * @return ZendX_Disqus_Endpoints_Blacklists_Remove
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
     * @return ZendX_Disqus_Endpoints_Blacklists_Remove
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
     * @return ZendX_Disqus_Endpoints_Blacklists_Remove
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
     * @return ZendX_Disqus_Endpoints_Blacklists_Remove
     */
    public function setWord ($word)
    {
        $this->_word = (string) $word;
        return $this;
    }

    /**
     * set IP address in CIDR notation
     *
     * @param string $ip            
     * @return ZendX_Disqus_Endpoints_Blacklists_Remove
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
     * @return ZendX_Disqus_Endpoints_Blacklists_Remove
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
                'ip' => $this->_ip,
                'domain' => $this->_domain,
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
                'endpointurl' => 'https://disqus.com/api/3.0/blacklists/remove.json',
                'method' => 'post'
        );
    }
}