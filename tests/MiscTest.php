<?php
require_once('./lib/CrowdmapApiTestCase.php');

class MiscTest extends CrowdmapApiTestCase
{

    public function providerGetHeartbeat()
    {
        return $this->getProvider(null, 'getHeartbeatResponse.json');
    }

    /**
     * @dataProvider providerGetHeartbeat
     */
    public function testGetHeartbeat($requestData, $responseData)
    {
        $result = $this->_crowdmap->call('GET', '/heartbeat');

        $this->verifyResponse($responseData, $result);
    }

    public function providerGetAbout()
    {
        return $this->getProvider(null, 'getAboutResponse.json');
    }

    /**
     * @dataProvider providerGetAbout
     */
    public function testGetAbout($requestData, $responseData)
    {
        $result = $this->_crowdmap->call('GET', '/about');

        $this->verifyResponse($responseData, $result);
    }

}