<?php
require_once('./lib/CrowdmapApiTestCase.php');

class UsersTest extends CrowdmapApiTestCase
{

    public function providerGetUsersSingleResponse()
    {
        /*include('./config.php');

        $replaceRequest = array(
            'username' => $sampleUsername,
            'password' => $samplePassword,
        );
        $replaceResponse = array(
            'user_id' => $sampleUserId,
        );*/

        return $this->getProvider(null, 'users/getUsersSingleResponse.json');
    }

    /**
     * @dataProvider providerGetUsersSingleResponse
     */
    public function testGetUsersSingle($requestData, $responseData)
    {
        include('./config.php');

        $result = $this->_crowdmap->call('GET', sprintf('/users/%d', $sampleUserId));

        $this->verifyResponseCollection($responseData, $result, 'users');
    }

    public function testPutUsersSingle()
    {
        $this->markTestSkipped('Need a sandbox to testing modifying data');

        include('./config.php');

        $result = $this->_crowdmap->call('PUT', sprintf('/users/%d', $sampleUserId), array());
    }

    public function testGetUsersPosts()
    {
        $this->markTestIncomplete();

        include('./config.php');

        $result = $this->_crowdmap->call('GET', sprintf('/users/%d/posts', $sampleUserId));
    }

}