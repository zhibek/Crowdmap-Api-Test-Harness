<?php
require_once('./lib/Crowdmap.php');

abstract class CrowdmapApiTestCase extends PHPUnit_Framework_TestCase
{

    const FIXTURES_BASE = './fixtures/';

    protected $_crowdmap;

    public function setUp()
    {
        include('./config.php');

        $this->_crowdmap = new Crowdmap($applicationPublicKey, $applicationPrivateKey);
    }

    public function getProvider($requestFile = null, $responseFile = null, $replaceRequest = array(), $replaceResponse = array())
    {
        $requestData = null;
        $responseData = null;

        if ($requestFile) {
            $requestJson = file_get_contents(self::FIXTURES_BASE . $requestFile);
            $requestData = json_decode($requestJson, true);
            $requestData = array_merge($requestData, $replaceRequest);
        }

        if ($responseFile) {
            $responseJson = file_get_contents(self::FIXTURES_BASE . $responseFile);
            $responseData = json_decode($responseJson, true);
            $responseData = array_merge($responseData, $replaceResponse);
        }

        return array(array($requestData, $responseData));
    }

    public function verifyResponse($check, $result)
    {
        foreach ($check as $field => $value) {
            $this->assertObjectHasAttribute($field, $result);
            if (!is_null($value)) {
                $this->assertSame($value, $result->{$field}, $field);
            }
        }
    }

    public function verifyResponseCollection($check, $result, $key)
    {
        $this->assertObjectHasAttribute($key, $result, 'Data key check');

        $checkData = $check[$key];
        $resultData = $result->{$key};

        $this->assertTrue(is_array($resultData), 'Collection array check');
        $this->assertCount(count($checkData), $resultData, 'Collection array count');

        foreach ($checkData as $index => $checkItem) {
            $this->verifyResponse($checkItem, $resultData[$index]);
        }
    }

}   