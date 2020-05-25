<?php

namespace Tests\Api;

use common\fixtures\SecurityFixture;
use GuzzleHttp\RequestOptions;
use PhpLab\Core\Enums\Http\HttpHeaderEnum;
use PhpLab\Core\Enums\Http\HttpMethodEnum;
use PhpLab\Core\Enums\Http\HttpStatusCodeEnum;
use PhpLab\Test\Base\BaseRestApiTest;

class AuthTest extends BaseRestApiTest
{

    protected $basePath = 'v1';

    protected function fixtures(): array
    {
        return [
            SecurityFixture::class,
        ];
    }

    public function testUnauthorized()
    {
        $response = $this->getRestClient()->sendGet('auth');
        $this->getRestAssert($response)
            ->assertStatusCode(HttpStatusCodeEnum::UNAUTHORIZED);

    }

    public function testAuth()
    {
        $response = $this->getRestClient()->sendPost('auth', [
            'login' => 'admin',
            'password' => 'Wwwqqq111',
        ]);

        $assert = $this->getRestAssert($response);
        $assert
            ->assertStatusCode(HttpStatusCodeEnum::NO_CONTENT);

        // check
        $token = $response->getHeader(HttpHeaderEnum::AUTHORIZATION)[0];
        $this->checkAuth($token, 'admin');
    }

    private function checkAuth(string $token, string $login) {
        $client = $this->getRestClient();
        $options[RequestOptions::HEADERS][HttpHeaderEnum::AUTHORIZATION] = $token;
        $response = $client->sendRequest(HttpMethodEnum::GET, 'auth', $options);
        $expectedBody = [
            'login' => $login,
            'status' => 1,
        ];
        $this->getRestAssert($response)
            ->assertStatusCode(HttpStatusCodeEnum::OK)
            ->assertBody($expectedBody);
    }

    public function testAuthBadPassword()
    {
        $response = $this->getRestClient()->sendPost('auth', [
            'login' => 'admin',
            'password' => 'Wwwqqq11133333',
        ]);

        $this->getRestAssert($response)
            ->assertUnprocessableEntity(['password']);
    }

}
