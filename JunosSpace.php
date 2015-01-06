<?php namespace Lamoni\JunosSpace;

use Lamoni\RESTLyte\RESTLyte;

class JunosSpace
{
    protected $server;

    protected $username;

    protected $restlyte;

    protected $apiReference = null;

    public function __construct($server, $username, $password, $responseType='XML')
    {

        $this->setServer($server);

        $this->setUsername($username);

        $this->setRestlyte(
            new RESTLyte($this->getServer(), $username, $password, false, [], $responseType)
        );

    }

    /**
     * @return mixed
     */
    public function getRestlyte()
    {

        return $this->restlyte;

    }

    /**
     * @param mixed $restlyte
     */
    public function setRestlyte($restlyte)
    {

        $this->restlyte = $restlyte;

    }

    /**
     * @return mixed
     */
    public function getServer()
    {

        return $this->server;

    }

    /**
     * @param mixed $server
     */
    public function setServer($server)
    {

        $this->server = 'https://'.$server;

    }

    /**
     * @return mixed
     */
    public function getUsername()
    {

        return $this->username;

    }

    /**
     * @param mixed $username
     */
    public function setUsername($username)
    {

        $this->username = $username;

    }

    public function get($path, $accepts='')
    {
        return $this->request('get', $path, $accepts);

    }

    public function post($path, $postData, $accepts='')
    {
        return $this->request('post', $path, $accepts, $postData);
    }

    public function put($path, $postData, $accepts='')
    {
        return $this->request('put', $path, $accepts, $postData);

    }

    public function patch($path, $postData, $accepts='')
    {
        return $this->request('patch', $path, $accepts, $postData);

    }
    public function delete($path, $postData, $accepts='')
    {

        return $this->request('delete', $path, $accepts, $postData);

    }

    public function request($verb, $path, $accepts='',  $postData='')
    {

        try {

            if ($postData !== '') {

                $response = $this->getRestlyte()->$verb(
                    $path,
                    $postData,
                    $accepts
                );

            }
            else {

                $response = $this->getRestlyte()->$verb(
                    $path,
                    $accepts
                );

            }
        }
        catch (\Exception $e) {

            $this->whatIsResponseError($e);


        }

        return $response;

    }

    public function getDevices()
    {

        return $this->get(
            '/api/space/device-management/devices'
        );

    }

    /**
     * Search by property through a devices list returned from the call /api/space/device-management/devices
     *
     * @param $propertyName
     * @param $propertyValue
     * @return array
     */
    public function getDevicesByProperty($propertyName, $propertyValue, $caseSensitive=true)
    {

        if ($caseSensitive) {
            $caseSensitive = "";
        }
        else {
            $caseSensitive = "i";
        }

        $devices = $this->getDevices();

        $matchedDevices = [];

        foreach ($devices->device as $device) {

            if (preg_match("/{$propertyValue}/{$caseSensitive}", $device->{$propertyName})) {

                $matchedDevices[] = $device;

            }

        }

        return $matchedDevices;

    }

    public function getDevicesByNameRegex($nameRegex)
    {

        return $this->getDevicesByProperty('name', $nameRegex);

    }

    public function getDeviceByID($deviceID)
    {

        return $this->get(
            "/api/space/device-management/devices/{$deviceID}"
        );

    }

    public function whatIsResponseError(\Exception $e)
    {
        
        $errors = [
            'User not authenticated' => 'Authentication to Junos Space failed: invalid credentials',
            'User password expired'  => 'Authentication to Junos Space failed: expired credentials'
        ];

        foreach ($errors as $errorFind=>$errorMessage) {

            if (strpos($e->getMessage(), $errorFind) !== false) {

                throw new \Exception($errorMessage, 1);

            }

        }

        throw $e;

    }

}