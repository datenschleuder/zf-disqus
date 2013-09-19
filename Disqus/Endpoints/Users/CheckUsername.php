<?php

/**
* ZF-Disqus - Endpoint User_CheckUsername
*
* Updates username for the user
*
* https://github.com/datenschleuder/zf-disqus
*
*
* @author Jürgen Meier <support@mypasswordsafe.net>
* @copyright Jürgen Meier 2013
* @version 1.0
* @see http://disqus.com/api/docs/users/checkUsername/
* @license BSD
*/
final class ZendX_Disqus_Endpoints_Users_CheckUsername implements 
        ZendX_Disqus_Interfaces_Endpoint
{

    private $_username = NULL;

    /**
     * set username
     *
     * @param string $name            
     * @return ZendX_Disqus_Endpoints_Users_CheckUsername
     */
    public function setUsername ($name)
    {
        $this->_username = (string) $name;
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
                'username' => $this->_username
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
                'endpointurl' => 'https://disqus.com/api/3.0/users/checkUsername.json',
                'method' => 'post'
        );
    }
}