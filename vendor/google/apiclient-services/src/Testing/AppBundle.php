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

namespace Google\Service\Testing;

class AppBundle extends \Google\Model
{
  /**
   * @var FileReference
   */
  public $bundleLocation;
  protected $bundleLocationType = FileReference::class;
  protected $bundleLocationDataType = '';

  /**
   * @param FileReference
   */
  public function setBundleLocation(FileReference $bundleLocation)
  {
    $this->bundleLocation = $bundleLocation;
  }
  /**
   * @return FileReference
   */
  public function getBundleLocation()
  {
    return $this->bundleLocation;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AppBundle::class, 'Google_Service_Testing_AppBundle');
