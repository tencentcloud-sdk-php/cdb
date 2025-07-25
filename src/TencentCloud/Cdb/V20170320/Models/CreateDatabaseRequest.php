<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateDatabase请求参数结构体
 *
 * @method string getInstanceId() 获取实例 ID，格式如：cdb-c1nl9rpv，与云数据库控制台页面中显示的实例 ID 相同。
 * @method void setInstanceId(string $InstanceId) 设置实例 ID，格式如：cdb-c1nl9rpv，与云数据库控制台页面中显示的实例 ID 相同。
 * @method string getDBName() 获取数据库名称，长度不超过64。
 * @method void setDBName(string $DBName) 设置数据库名称，长度不超过64。
 * @method string getCharacterSetName() 获取字符集，可选值：utf8，gbk，latin1，utf8mb4。
 * @method void setCharacterSetName(string $CharacterSetName) 设置字符集，可选值：utf8，gbk，latin1，utf8mb4。
 */
class CreateDatabaseRequest extends AbstractModel
{
    /**
     * @var string 实例 ID，格式如：cdb-c1nl9rpv，与云数据库控制台页面中显示的实例 ID 相同。
     */
    public $InstanceId;

    /**
     * @var string 数据库名称，长度不超过64。
     */
    public $DBName;

    /**
     * @var string 字符集，可选值：utf8，gbk，latin1，utf8mb4。
     */
    public $CharacterSetName;

    /**
     * @param string $InstanceId 实例 ID，格式如：cdb-c1nl9rpv，与云数据库控制台页面中显示的实例 ID 相同。
     * @param string $DBName 数据库名称，长度不超过64。
     * @param string $CharacterSetName 字符集，可选值：utf8，gbk，latin1，utf8mb4。
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("DBName",$param) and $param["DBName"] !== null) {
            $this->DBName = $param["DBName"];
        }

        if (array_key_exists("CharacterSetName",$param) and $param["CharacterSetName"] !== null) {
            $this->CharacterSetName = $param["CharacterSetName"];
        }
    }
}
