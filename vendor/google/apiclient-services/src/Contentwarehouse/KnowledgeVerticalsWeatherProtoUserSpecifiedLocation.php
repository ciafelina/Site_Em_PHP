<?php
/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

namespace Google\Service\Contentwarehouse;

class KnowledgeVerticalsWeatherProtoUserSpecifiedLocation extends \Google\Model
{
  /**
   * @var GeostoreFeatureIdProto
   */
  public $featureId;
  protected $featureIdType = GeostoreFeatureIdProto::class;
  protected $featureIdDataType = '';
  /**
   * @var GoogleTypeLatLng
   */
  public $latLng;
  protected $latLngType = GoogleTypeLatLng::class;
  protected $latLngDataType = '';
  /**
   * @var string
   */
  public $locationName;
  /**
   * @var string
   */
  public $mid;
  /**
   * @var string
   */
  public $timezone;

  /**
   * @param GeostoreFeatureIdProto
   */
  public function setFeatureId(GeostoreFeatureIdProto $featureId)
  {
    $this->featureId = $featureId;
  }
  /**
   * @return GeostoreFeatureIdProto
   */
  public function getFeatureId()
  {
    return $this->featureId;
  }
  /**
   * @param GoogleTypeLatLng
   */
  public function setLatLng(GoogleTypeLatLng $latLng)
  {
    $this->latLng = $latLng;
  }
  /**
   * @return GoogleTypeLatLng
   */
  public function getLatLng()
  {
    return $this->latLng;
  }
  /**
   * @param string
   */
  public function setLocationName($locationName)
  {
    $this->locationName = $locationName;
  }
  /**
   * @return string
   */
  public function getLocationName()
  {
    return $this->locationName;
  }
  /**
   * @param string
   */
  public function setMid($mid)
  {
    $this->mid = $mid;
  }
  /**
   * @return string
   */
  public function getMid()
  {
    return $this->mid;
  }
  /**
   * @param string
   */
  public function setTimezone($timezone)
  {
    $this->timezone = $timezone;
  }
  /**
   * @return string
   */
  public function getTimezone()
  {
    return $this->timezone;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(KnowledgeVerticalsWeatherProtoUserSpecifiedLocation::class, 'Google_Service_Contentwarehouse_KnowledgeVerticalsWeatherProtoUserSpecifiedLocation');
