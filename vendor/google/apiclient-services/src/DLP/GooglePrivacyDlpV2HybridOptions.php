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

namespace Google\Service\DLP;

class GooglePrivacyDlpV2HybridOptions extends \Google\Collection
{
  protected $collection_key = 'requiredFindingLabelKeys';
  /**
   * @var string
   */
  public $description;
  /**
   * @var string[]
   */
  public $labels;
  /**
   * @var string[]
   */
  public $requiredFindingLabelKeys;
  /**
   * @var GooglePrivacyDlpV2TableOptions
   */
  public $tableOptions;
  protected $tableOptionsType = GooglePrivacyDlpV2TableOptions::class;
  protected $tableOptionsDataType = '';

  /**
   * @param string
   */
  public function setDescription($description)
  {
    $this->description = $description;
  }
  /**
   * @return string
   */
  public function getDescription()
  {
    return $this->description;
  }
  /**
   * @param string[]
   */
  public function setLabels($labels)
  {
    $this->labels = $labels;
  }
  /**
   * @return string[]
   */
  public function getLabels()
  {
    return $this->labels;
  }
  /**
   * @param string[]
   */
  public function setRequiredFindingLabelKeys($requiredFindingLabelKeys)
  {
    $this->requiredFindingLabelKeys = $requiredFindingLabelKeys;
  }
  /**
   * @return string[]
   */
  public function getRequiredFindingLabelKeys()
  {
    return $this->requiredFindingLabelKeys;
  }
  /**
   * @param GooglePrivacyDlpV2TableOptions
   */
  public function setTableOptions(GooglePrivacyDlpV2TableOptions $tableOptions)
  {
    $this->tableOptions = $tableOptions;
  }
  /**
   * @return GooglePrivacyDlpV2TableOptions
   */
  public function getTableOptions()
  {
    return $this->tableOptions;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GooglePrivacyDlpV2HybridOptions::class, 'Google_Service_DLP_GooglePrivacyDlpV2HybridOptions');
