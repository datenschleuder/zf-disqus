<?php

/**
* ZF-Disqus - Endpoint Imports_Details
*
* no description available
*
* https://github.com/datenschleuder/zf-disqus
*
*
* @author Jürgen Meier <support@mypasswordsafe.net>
* @copyright Jürgen Meier 2013
* @version 1.0
* @see http://disqus.com/api/docs/imports/details/
* @license BSD
*/
final class ZendX_Disqus_Endpoints_Imports_Details implements 
        ZendX_Disqus_Interfaces_Endpoint
{

    private $_group = NULL;

    private $_forum = NULL;

    /**
     * set group
     *
     * @param string $group            
     * @return ZendX_Disqus_Endpoints_Imports_Details
     */
    public function setGroup ($group)
    {
        $this->_group = (string) $group;
        return $this;
    }

    /**
     * set forum short name
     *
     * @param string $forum            
     * @return ZendX_Disqus_Endpoints_Imports_Details
     */
    public function setForum ($forum)
    {
        $this->_forum = (string) $forum;
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
                'group' => $this->_group,
                'forum' => $this->_forum
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
                'endpointurl' => 'https://disqus.com/api/3.0/imports/details.json',
                'method' => 'get'
        );
    }
}