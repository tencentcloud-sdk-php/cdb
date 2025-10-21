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
 * DescribeAccounts请求参数结构体
 *
 * @method string getInstanceId() 获取实例 ID，格式如：cdb-c1nl9rpv，与云数据库控制台页面中显示的实例 ID 相同。
 * @method void setInstanceId(string $InstanceId) 设置实例 ID，格式如：cdb-c1nl9rpv，与云数据库控制台页面中显示的实例 ID 相同。
 * @method integer getOffset() 获取记录偏移量，默认值为0。
 * @method void setOffset(integer $Offset) 设置记录偏移量，默认值为0。
 * @method integer getLimit() 获取单次请求返回的数量，默认值为20，最小值为1，最大值为100。
 * @method void setLimit(integer $Limit) 设置单次请求返回的数量，默认值为20，最小值为1，最大值为100。
 * @method string getAccountRegexp() 获取匹配账号名的正则表达式，规则同 MySQL 官网。
 * @method void setAccountRegexp(string $AccountRegexp) 设置匹配账号名的正则表达式，规则同 MySQL 官网。
 * @method string getSortBy() 获取默认无排序，支持：ASC、DESC、asc、desc
 * @method void setSortBy(string $SortBy) 设置默认无排序，支持：ASC、DESC、asc、desc
 * @method string getOrderBy() 获取待排序的时间字段，可选：CreateTime(账号创建时间)、ModifyTime(账号更新时间)、ModifyPasswordTime(密码修改时间)
 * @method void setOrderBy(string $OrderBy) 设置待排序的时间字段，可选：CreateTime(账号创建时间)、ModifyTime(账号更新时间)、ModifyPasswordTime(密码修改时间)
 */
class DescribeAccountsRequest extends AbstractModel
{
    /**
     * @var string 实例 ID，格式如：cdb-c1nl9rpv，与云数据库控制台页面中显示的实例 ID 相同。
     */
    public $InstanceId;

    /**
     * @var integer 记录偏移量，默认值为0。
     */
    public $Offset;

    /**
     * @var integer 单次请求返回的数量，默认值为20，最小值为1，最大值为100。
     */
    public $Limit;

    /**
     * @var string 匹配账号名的正则表达式，规则同 MySQL 官网。
     */
    public $AccountRegexp;

    /**
     * @var string 默认无排序，支持：ASC、DESC、asc、desc
     */
    public $SortBy;

    /**
     * @var string 待排序的时间字段，可选：CreateTime(账号创建时间)、ModifyTime(账号更新时间)、ModifyPasswordTime(密码修改时间)
     */
    public $OrderBy;

    /**
     * @param string $InstanceId 实例 ID，格式如：cdb-c1nl9rpv，与云数据库控制台页面中显示的实例 ID 相同。
     * @param integer $Offset 记录偏移量，默认值为0。
     * @param integer $Limit 单次请求返回的数量，默认值为20，最小值为1，最大值为100。
     * @param string $AccountRegexp 匹配账号名的正则表达式，规则同 MySQL 官网。
     * @param string $SortBy 默认无排序，支持：ASC、DESC、asc、desc
     * @param string $OrderBy 待排序的时间字段，可选：CreateTime(账号创建时间)、ModifyTime(账号更新时间)、ModifyPasswordTime(密码修改时间)
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

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("AccountRegexp",$param) and $param["AccountRegexp"] !== null) {
            $this->AccountRegexp = $param["AccountRegexp"];
        }

        if (array_key_exists("SortBy",$param) and $param["SortBy"] !== null) {
            $this->SortBy = $param["SortBy"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }
    }
}
