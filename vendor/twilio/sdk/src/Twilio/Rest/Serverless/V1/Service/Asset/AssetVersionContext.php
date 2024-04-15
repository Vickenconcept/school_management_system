<?php

/**
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Serverless
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */


namespace Twilio\Rest\Serverless\V1\Service\Asset;

use Twilio\Exceptions\TwilioException;
use Twilio\Version;
use Twilio\InstanceContext;


class AssetVersionContext extends InstanceContext
    {
    /**
     * Initialize the AssetVersionContext
     *
     * @param Version $version Version that contains the resource
     * @param string $serviceSid The SID of the Service to fetch the Asset Version resource from.
     * @param string $assetSid The SID of the Asset resource that is the parent of the Asset Version resource to fetch.
     * @param string $sid The SID of the Asset Version resource to fetch.
     */
    public function __construct(
        Version $version,
        $serviceSid,
        $assetSid,
        $sid
    ) {
        parent::__construct($version);

        // Path Solution
        $this->solution = [
        'serviceSid' =>
            $serviceSid,
        'assetSid' =>
            $assetSid,
        'sid' =>
            $sid,
        ];

        $this->uri = '/Services/' . \rawurlencode($serviceSid)
        .'/../assets/' . \rawurlencode($assetSid)
        .'/Versions/' . \rawurlencode($sid)
        .'';
    }

    /**
     * Fetch the AssetVersionInstance
     *
     * @return AssetVersionInstance Fetched AssetVersionInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch(): AssetVersionInstance
    {

        $payload = $this->version->fetch('GET', $this->uri, [], []);

        return new AssetVersionInstance(
            $this->version,
            $payload,
            $this->solution['serviceSid'],
            $this->solution['assetSid'],
            $this->solution['sid']
        );
    }


    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string
    {
        $context = [];
        foreach ($this->solution as $key => $value) {
            $context[] = "$key=$value";
        }
        return '[Twilio.Serverless.V1.AssetVersionContext ' . \implode(' ', $context) . ']';
    }
}
