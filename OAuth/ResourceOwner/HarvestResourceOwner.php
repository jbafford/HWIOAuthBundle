<?php

/*
 * This file is part of the HWIOAuthBundle package.
 *
 * (c) Hardware.Info <opensource@hardware.info>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace HWI\Bundle\OAuthBundle\OAuth\ResourceOwner;

/**
 * GitHubResourceOwner
 *
 * @author John Bafford <john@bafford.com>
 */
class HarvestResourceOwner extends GenericOAuth2ResourceOwner
{
    /**
     * {@inheritDoc}
     */
    protected $options = array(
        'scope'               => '',
        'user_response_class' => '\HWI\Bundle\OAuthBundle\OAuth\Response\AdvancedPathUserResponse',
    );

    /**
     * {@inheritDoc}
     */
    protected $paths = array(
        'identifier'     => 'user.id',
        'nickname'       => 'user.email',
        'realname'       => 'user.email',
        'email'          => 'user.email',
    );
    
    public function httpRequest($url, $content = null, $headers = array(), $method = null)
    {
        $headers['Accept'] = 'application/json';
        
        return parent::httpRequest($url, $content, $headers, $method);
    }
}

//            extra_parameters:
//                state: optional-csrf-token


    /**
     * {@inheritDoc}
     */
/*
public function getAccessToken(Request $request, array $extraParameters = array())
    {
        $parameters = array_merge($extraParameters, array(
            'code'          => $request->get('code'),
            'grant_type'    => 'authorization_code',
            'client_id'     => $this->getOption('client_id'),
            'client_secret' => $this->getOption('secret'),
            'redirect_uri'  => $this->getRedirectUri($request),
        ));

        $url = $this->getOption('access_token_url');
        $content = http_build_query($parameters);

        $response = $this->httpRequest($url, $content);
        $response = json_decode($response);
        
        if (isset($response->error)) {
            throw new AuthenticationException(sprintf('OAuth error: "%s"', $response->error));
        }

        return $response->access_token;
    }
*/
