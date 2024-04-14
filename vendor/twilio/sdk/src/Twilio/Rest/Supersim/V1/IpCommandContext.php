<?php

/**
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Supersim
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */


namespace Twilio\Rest\Supersim\V1;

use Twilio\Exceptions\TwilioException;
use Twilio\Version;
use Twilio\InstanceContext;


class IpCommandContext extends InstanceContext
    {
    /**
     * Initialize the IpCommandContext
     *
     * @param Version $version Version that contains the resource
     * @param string $sid The SID of the IP Command resource to fetch.
     */
    public function __construct(
        Version $version,
        $sid
    ) {
        parent::__construct($version);

        // Path Solution
        $this->solution = [
        'sid' =>
            $sid,
        ];

        $this->uri = '/IpCommands/' . \rawurlencode($sid)
        .'';
    }

    /**
     * Fetch the IpCommandInstance
     *
     * @return IpCommandInstance Fetched IpCommandInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch(): IpCommandInstance
    {

        $payload = $this->version->fetch('GET', $this->uri, [], []);

        return new IpCommandInstance(
            $this->version,
            $payload,
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
        return '[Twilio.Supersim.V1.IpCommandContext ' . \implode(' ', $context) . ']';
    }
}