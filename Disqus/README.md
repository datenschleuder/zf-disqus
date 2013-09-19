zf-disqus
==========

ZF-Disqus - A simple Disqus Client for Zendframework, OAuth2 used for authentication and requires no Curl.




Installation:
=============

Copy the folder "Disqus" into the  directory "library/ZendX". 




Examples
========

return a list of categories:

<pre><code>
$httpclient = new Zend_Http_Client();
$endpoint = new ZendX_Disqus_Endpoints_Category_List();
$endpoint->setForum(YOUR_FORUMNAME);
		
$disqus = new ZendX_Disqus_Api();
$disqus->setApiSecret(YOUR_SECRETKEY)
	   ->setAccessToken(YOUR_ACCESSTOKEN)
	   ->setEndpoint($endpoint)
	   ->setHttpClient($client)
	   ->connect();
</code></pre>



export forum data as XML:

<pre><code>
$httpclient = new Zend_Http_Client();
$endpoint = new ZendX_Disqus_Endpoints_Exports_ExportForum();
$endpoint->setForum(YOUR_FORUM);
		
$disqus = new ZendX_Disqus_Api();
$disqus->setApiSecret(YOUR_SECRETKEY)
	   ->setAccessToken(YOUR_ACCESSTOKEN)
	   ->setEndpoint($endpoint)
	   ->setHttpClient($client)
	   ->connect();
</code></pre>