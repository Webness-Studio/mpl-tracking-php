<?php
/**
 * ModelInterface
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  WebnessStudio\MPL\Tracking\Model
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
 * Do not edit the class manually.
 */

namespace WebnessStudio\MPL\Tracking\Model;

/**
 * Interface abstracting model access.
 *
 * @package WebnessStudio\MPL\Tracking\Model
 * @author  OpenAPI Generator team
 */
interface ModelInterface
{
    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName();

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes();

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats();

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     *
     * @return array
     */
    public static function attributeMap();

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters();

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters();

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array
     */
    public function listInvalidProperties();

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool
     */
    public function valid();

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool;

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool;
}