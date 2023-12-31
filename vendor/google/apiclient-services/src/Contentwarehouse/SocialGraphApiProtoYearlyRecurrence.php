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

class SocialGraphApiProtoYearlyRecurrence extends \Google\Collection
{
  protected $collection_key = 'months';
  /**
   * @var SocialGraphApiProtoMonthlyRecurrence
   */
  public $monthlyPattern;
  protected $monthlyPatternType = SocialGraphApiProtoMonthlyRecurrence::class;
  protected $monthlyPatternDataType = '';
  /**
   * @var string[]
   */
  public $months;

  /**
   * @param SocialGraphApiProtoMonthlyRecurrence
   */
  public function setMonthlyPattern(SocialGraphApiProtoMonthlyRecurrence $monthlyPattern)
  {
    $this->monthlyPattern = $monthlyPattern;
  }
  /**
   * @return SocialGraphApiProtoMonthlyRecurrence
   */
  public function getMonthlyPattern()
  {
    return $this->monthlyPattern;
  }
  /**
   * @param string[]
   */
  public function setMonths($months)
  {
    $this->months = $months;
  }
  /**
   * @return string[]
   */
  public function getMonths()
  {
    return $this->months;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(SocialGraphApiProtoYearlyRecurrence::class, 'Google_Service_Contentwarehouse_SocialGraphApiProtoYearlyRecurrence');
