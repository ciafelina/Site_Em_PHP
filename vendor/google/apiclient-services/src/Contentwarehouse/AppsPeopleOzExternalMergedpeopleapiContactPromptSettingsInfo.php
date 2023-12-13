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

class AppsPeopleOzExternalMergedpeopleapiContactPromptSettingsInfo extends \Google\Model
{
  /**
   * @var SocialGraphApiProtoContactPromptSettings
   */
  public $contactPromptSettings;
  protected $contactPromptSettingsType = SocialGraphApiProtoContactPromptSettings::class;
  protected $contactPromptSettingsDataType = '';
  /**
   * @var AppsPeopleOzExternalMergedpeopleapiPersonFieldMetadata
   */
  public $metadata;
  protected $metadataType = AppsPeopleOzExternalMergedpeopleapiPersonFieldMetadata::class;
  protected $metadataDataType = '';

  /**
   * @param SocialGraphApiProtoContactPromptSettings
   */
  public function setContactPromptSettings(SocialGraphApiProtoContactPromptSettings $contactPromptSettings)
  {
    $this->contactPromptSettings = $contactPromptSettings;
  }
  /**
   * @return SocialGraphApiProtoContactPromptSettings
   */
  public function getContactPromptSettings()
  {
    return $this->contactPromptSettings;
  }
  /**
   * @param AppsPeopleOzExternalMergedpeopleapiPersonFieldMetadata
   */
  public function setMetadata(AppsPeopleOzExternalMergedpeopleapiPersonFieldMetadata $metadata)
  {
    $this->metadata = $metadata;
  }
  /**
   * @return AppsPeopleOzExternalMergedpeopleapiPersonFieldMetadata
   */
  public function getMetadata()
  {
    return $this->metadata;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AppsPeopleOzExternalMergedpeopleapiContactPromptSettingsInfo::class, 'Google_Service_Contentwarehouse_AppsPeopleOzExternalMergedpeopleapiContactPromptSettingsInfo');
