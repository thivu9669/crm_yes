<?php

/**
 * Created by Reliese Model.
 * Date: Fri, 25 May 2018 16:05:59 +0700.
 */

namespace App\Models\Base;

use App\Models\BaseModel as Eloquent;

/**
 * App\Models\Base\Event
 *
 * @property int $id
 * @property string $title
 * @property string|null $description
 * @property \Illuminate\Support\Carbon $start_at
 * @property \Illuminate\Support\Carbon|null $end_at
 * @property bool $all_day
 * @property string $color
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Activity[] $activity
 * @property-read \App\Models\ActivityLog $createdBy
 * @property-read \App\Models\ActivityLog $deletedBy
 * @property-read \App\Models\ActivityLog $updatedBy
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BaseModel andFilterWhere($conditions)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BaseModel dateBetween($dates, $column = 'created_at', $format = 'd-m-Y', $boolean = 'and', $not = false)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BaseModel filters($filterDatas, $boolean = 'and', $filterConfigs = null)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\BaseModel orFilterWhere($conditions)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Event whereAllDay($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Event whereColor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Event whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Event whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Event whereEndAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Event whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Event whereStartAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Event whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Base\Event whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Event extends Eloquent
{
    use \Spatie\Activitylog\Traits\LogsActivity;

    protected $casts = [
        'all_day' => 'bool'
    ];

    protected $dates = [
        'start_at',
        'end_at'
    ];
}
