<?php
require_once('./lib/CrowdmapApiTestCase.php');

class SessionTest extends CrowdmapApiTestCase
{

    public function providerPostSessionLoginValid()
    {
        include('./config.php');

        $replaceRequest = array(
            'username' => $sampleUsername,
            'password' => $samplePassword,
        );
        $replaceResponse = array(
            'user_id' => $sampleUserId,
        );

        return $this->getProvider('postSessionLoginRequest.json', 'postSessionLoginResponseValid.json', $replaceRequest, $replaceResponse);
    }

    /**
     * @dataProvider providerPostSessionLoginValid
     */
    public function testPostSessionLoginValid($requestData, $responseData)
    {
        $result = $this->_crowdmap->call('POST', '/session/login', $requestData);

        $this->verifyResponse($responseData, $result);
    }

    public function providerPostSessionLoginInvalid()
    {
        $replaceRequest = array(
            'username' => 'non-existent-user@example.org',
            'password' => 'non-existent-password',
        );
        $replaceResponse = array(
            'error' => 'That user does not exist.',
        );

        return $this->getProvider('postSessionLoginRequest.json', 'postSessionLoginResponseInvalid.json', $replaceRequest, $replaceResponse);
    }

    /**
     * @dataProvider providerPostSessionLoginInvalid
     */
    public function testPostSessionLoginInvalid($requestData, $responseData)
    {
        $result = $this->_crowdmap->call('POST', '/session/login', $requestData);

        $this->verifyResponse($responseData, $result);
    }

}