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

class RepositoryAnnotationsRdfaRdfaRichSnippetsApplicationLocalizedTrustedGenome extends \Google\Model
{
  /**
   * @var string
   */
  public $language;
  /**
   * @var VendingConsumerProtoTrustedGenomeAnnotation
   */
  public $localizedTg;
  protected $localizedTgType = VendingConsumerProtoTrustedGenomeAnnotation::class;
  protected $localizedTgDataType = '';

  /**
   * @param string
   */
  public function setLanguage($language)
  {
    $this->language = $language;
  }
  /**
   * @return string
   */
  public function getLanguage()
  {
    return $this->language;
  }
  /**
   * @param VendingConsumerProtoTrustedGenomeAnnotation
   */
  public function setLocalizedTg(VendingConsumerProtoTrustedGenomeAnnotation $localizedTg)
  {
    $this->localizedTg = $localizedTg;
  }
  /**
   * @return VendingConsumerProtoTrustedGenomeAnnotation
   */
  public function getLocalizedTg()
  {
    return $this->localizedTg;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(RepositoryAnnotationsRdfaRdfaRichSnippetsApplicationLocalizedTrustedGenome::class, 'Google_Service_Contentwarehouse_RepositoryAnnotationsRdfaRdfaRichSnippetsApplicationLocalizedTrustedGenome');
