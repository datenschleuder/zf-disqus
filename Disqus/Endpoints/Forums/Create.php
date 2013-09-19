<?php

/**
* ZF-Disqus - Endpoint Forums_Create
*
* create a new forum on disqus
*
* https://github.com/datenschleuder/zf-disqus
*
*
* @author Jürgen Meier <support@mypasswordsafe.net>
* @copyright Jürgen Meier 2013
* @version 1.0
* @see http://disqus.com/api/docs/forums/create/
* @license BSD
*/
final class ZendX_Disqus_Endpoints_Forums_Create implements 
        ZendX_Disqus_Interfaces_Endpoint
{

    private $_website = NULL;

    private $_name = NULL;

    private $_shortname = NULL;

    /**
     * set forum short name
     *
     * @param string $shortname            
     * @return ZendX_Disqus_Endpoints_Forums_Create
     *
     */
    public function setShortName ($shortname)
    {
        $this->_shortname = (string) $shortname;
        return $this;
    }

    /**
     * set forum name
     *
     * @param string $name            
     * @return ZendX_Disqus_Endpoints_Forums_Create
     */
    public function setName ($name)
    {
        $this->_name = (string) $name;
        return $this;
    }

    /**
     * set a url (defined by RFC 3986)
     *
     * @param string $url            
     * @return ZendX_Disqus_Endpoints_Forums_Create
     */
    public function setWebsite ($url)
    {
        $this->_website = (string) $url;
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
                'short_name' => $this->_shortname,
                'name' => $this->_name,
                'website' => $this->_website
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
                'endpointurl' => 'https://disqus.com/api/3.0/forums/create.json',
                'method' => 'post'
        );
    }
}