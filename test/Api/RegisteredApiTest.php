<?php
/**
 * RegisteredApiTest
 * PHP version 7.4
 *
 * @category Class
 * @package  WebnessStudio\MPL\Tracking
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * PULL Nyomkövetés 1 csomagra / PULL Tracking only for 1 item
 *
 * <div style='width: 100%;margin: 0px auto;'>  <div style='float: left; width:47%'>  <h1>PULL Nyomkövetés</h1>  <h2>- csomagonkénti nyomkövetés -</h2>  <div>&nbsp;</div>  <p>Csomagok egyesével történő lekérdezése szolgáló API. Célja, hogy a csomagok utolsó tranzakciójáról, vagy akár a teljes életútjáról szinkron módon információt adjon (PULL).</p>  <p>(Ha olyan nyomkövetést keres, aminél beküldhető, hogy pontosan mely csomagok legutolsó eseményeire kíváncsi, akkor arra egy másik API szolgáltatásunk alkalmas: Több csomagos pull nyomkövetés.)</p>  <p>(Ha olyan nyomkövetést keres, ami csomagazonosítók beküldése nélkül is alkalmas az információk fogadására, akkor arra egy másik API szolgáltatásunk alkalmas: Feliratkozás push nyomkövetésre.)</p>  <p>Erről az API-ról itt talál részletes leírást: <a href='https://devportal.posta.hu/sites/default/files/2020-11/MPLAPI_nyomkovetes_leiras_1.pdf'>MPLAPI_nyomkovetes_leiras_1.pdf</a></p>  <p>A végpontok működését leíró dokumentációt lentebb találja.</p>  </div>  <div style='float:right; width:47%'>  <h1>PULL TRACKING</h1>  <h2>- tracking only for 1 item -</h2>  <div>&nbsp;</div>  <p>An API enabling single tracking only for 1 parcel. Its purpose is to provide synchronous information about the last or all transactions of a given parcel (polling).</p>  <p>(If you're looking for a tracking service for large volumes of parcels, you can use our other API service, called “Pull Tracking up to 500 items”.)</p>  <p>(If you're looking for a tracking service which can be performed without submitting any tracking number, you can use our other API service, called “Push Tracking subscription”.)</p>  <p>Documentation, describing how this API work, can be found here: <a href='https://devportal.posta.hu/sites/default/files/2020-11/MPLAPI_tracking_technical_description_3.pdf'>MPLAPI_tracking_technical_description_3.pdf</a></p>  <p>Documentation describing how the endpoints work can be found below.</p>  </div>  </div>  <div style='clear: both;'>    ### Az API a következő URL-eken érhető el: / This API can be accessed at the following URLs: ###  <div><table><tr><td><b>Környezet / Environment</b></td><td><b>API URL</b></td><td><b>OAuth2 Token URL</b></td></tr><tr><td>Sandbox</td><td>https://sandbox.api.posta.hu/v2/nyomkovetes</td><td>https://sandbox.api.posta.hu/oauth2/token</td></tr><tr><td>Production</td><td>https://core.api.posta.hu/v2/nyomkovetes</td><td>https://core.api.posta.hu/oauth2/token</td></tr></table>  Az API ezen az oldalon a Sandbox környezetben tesztelhető. / You can test the API on this page in the Sandbox environment.
 *
 * The version of the OpenAPI document: v2
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.6.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Please update the test case below to test the endpoint.
 */

namespace WebnessStudio\MPL\Tracking\Test\Api;

use \WebnessStudio\MPL\Tracking\Configuration;
use \WebnessStudio\MPL\Tracking\ApiException;
use \WebnessStudio\MPL\Tracking\ObjectSerializer;
use PHPUnit\Framework\TestCase;

/**
 * RegisteredApiTest Class Doc Comment
 *
 * @category Class
 * @package  WebnessStudio\MPL\Tracking
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class RegisteredApiTest extends TestCase
{

    /**
     * Setup before running any test cases
     */
    public static function setUpBeforeClass(): void
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp(): void
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown(): void
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass(): void
    {
    }

    /**
     * Test case for registered
     *
     * Maximum 1 küldeményazonosító beküldése. A korábban beküldött küldeményazonosítót nem javasoljuk újra beküldeni négy órán belül. A beküldött paramétertől (last, all) függően az információ előállítása több másodpercet is igénybe vehet. A kapott adatban a legfontosabb mező a C9 (utolsó esemény), melyről a Dokumentáció menüben részletesen tájékozódhat. / Submit only 1 mail item IDs. We do not recommend resubmitting a previously submitted mail item ID within four hours. Depending on the parameter of request (last, all), it may take several seconds to response the information. The most important field in the received data is the C9 (last event), about which detailed explanations can be found in the Documentation menu..
     *
     */
    public function testRegistered()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }
}
