<?php

/**
* ZF-Disqus - Endpoint Exports_ExportForum
*
* export forum data as XML
*
* https://github.com/datenschleuder/zf-disqus
*
*
* @author Jürgen Meier <support@mypasswordsafe.net>
* @copyright Jürgen Meier 2013
* @version 1.0
* @see http://disqus.com/api/docs/exports/exportForum/
* @license BSD
*/
final class ZendX_Disqus_Endpoints_Exports_ExportForum implements 
        ZendX_Disqus_Interfaces_Endpoint
{

    private $_forum = NULL;

    private $_format = 'xml';

    /**
     * set forum short name
     *
     * @param string $forum            
     * @return ZendX_Disqus_Endpoints_Exports_ExportForum
     *
     */
    public function setForum ($forum)
    {
        $this->_forum = (string) $forum;
        return $this;
    }

    /**
     * set export format
     *
     * @param string $format            
     * @return ZendX_Disqus_Endpoints_Exports_ExportForum
     */
    public function setFormat ($format)
    {
        $this->_format = (string) $format;
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
                'format' => $this->_format
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
                'endpointurl' => 'https://disqus.com/api/3.0/exports/exportForum.json',
                'method' => 'post'
        );
    }
}