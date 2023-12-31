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

class NlpSciencelitDataset extends \Google\Model
{
  /**
   * @var string
   */
  public $association;
  /**
   * @var ResearchScienceSearchReconciledMetadata
   */
  public $datasetMetadata;
  protected $datasetMetadataType = ResearchScienceSearchReconciledMetadata::class;
  protected $datasetMetadataDataType = '';

  /**
   * @param string
   */
  public function setAssociation($association)
  {
    $this->association = $association;
  }
  /**
   * @return string
   */
  public function getAssociation()
  {
    return $this->association;
  }
  /**
   * @param ResearchScienceSearchReconciledMetadata
   */
  public function setDatasetMetadata(ResearchScienceSearchReconciledMetadata $datasetMetadata)
  {
    $this->datasetMetadata = $datasetMetadata;
  }
  /**
   * @return ResearchScienceSearchReconciledMetadata
   */
  public function getDatasetMetadata()
  {
    return $this->datasetMetadata;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(NlpSciencelitDataset::class, 'Google_Service_Contentwarehouse_NlpSciencelitDataset');
