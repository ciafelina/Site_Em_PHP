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

namespace Google\Service\Docs;

class SectionBreak extends \Google\Collection
{
  protected $collection_key = 'suggestedInsertionIds';
  /**
   * @var SectionStyle
   */
  public $sectionStyle;
  protected $sectionStyleType = SectionStyle::class;
  protected $sectionStyleDataType = '';
  /**
   * @var string[]
   */
  public $suggestedDeletionIds;
  /**
   * @var string[]
   */
  public $suggestedInsertionIds;

  /**
   * @param SectionStyle
   */
  public function setSectionStyle(SectionStyle $sectionStyle)
  {
    $this->sectionStyle = $sectionStyle;
  }
  /**
   * @return SectionStyle
   */
  public function getSectionStyle()
  {
    return $this->sectionStyle;
  }
  /**
   * @param string[]
   */
  public function setSuggestedDeletionIds($suggestedDeletionIds)
  {
    $this->suggestedDeletionIds = $suggestedDeletionIds;
  }
  /**
   * @return string[]
   */
  public function getSuggestedDeletionIds()
  {
    return $this->suggestedDeletionIds;
  }
  /**
   * @param string[]
   */
  public function setSuggestedInsertionIds($suggestedInsertionIds)
  {
    $this->suggestedInsertionIds = $suggestedInsertionIds;
  }
  /**
   * @return string[]
   */
  public function getSuggestedInsertionIds()
  {
    return $this->suggestedInsertionIds;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(SectionBreak::class, 'Google_Service_Docs_SectionBreak');
