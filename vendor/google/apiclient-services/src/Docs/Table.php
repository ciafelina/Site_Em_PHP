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

class Table extends \Google\Collection
{
  protected $collection_key = 'tableRows';
  /**
   * @var int
   */
  public $columns;
  /**
   * @var int
   */
  public $rows;
  /**
   * @var string[]
   */
  public $suggestedDeletionIds;
  /**
   * @var string[]
   */
  public $suggestedInsertionIds;
  /**
   * @var TableRow[]
   */
  public $tableRows;
  protected $tableRowsType = TableRow::class;
  protected $tableRowsDataType = 'array';
  /**
   * @var TableStyle
   */
  public $tableStyle;
  protected $tableStyleType = TableStyle::class;
  protected $tableStyleDataType = '';

  /**
   * @param int
   */
  public function setColumns($columns)
  {
    $this->columns = $columns;
  }
  /**
   * @return int
   */
  public function getColumns()
  {
    return $this->columns;
  }
  /**
   * @param int
   */
  public function setRows($rows)
  {
    $this->rows = $rows;
  }
  /**
   * @return int
   */
  public function getRows()
  {
    return $this->rows;
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
  /**
   * @param TableRow[]
   */
  public function setTableRows($tableRows)
  {
    $this->tableRows = $tableRows;
  }
  /**
   * @return TableRow[]
   */
  public function getTableRows()
  {
    return $this->tableRows;
  }
  /**
   * @param TableStyle
   */
  public function setTableStyle(TableStyle $tableStyle)
  {
    $this->tableStyle = $tableStyle;
  }
  /**
   * @return TableStyle
   */
  public function getTableStyle()
  {
    return $this->tableStyle;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Table::class, 'Google_Service_Docs_Table');
