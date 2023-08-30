<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\Models\Line
 *
 * @property int $id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property int $post_id
 * @property string $value
 * @method static Builder|Line newModelQuery()
 * @method static Builder|Line newQuery()
 * @method static Builder|Line query()
 * @method static Builder|Line whereCreatedAt($value)
 * @method static Builder|Line whereId($value)
 * @method static Builder|Line wherePostId($value)
 * @method static Builder|Line whereUpdatedAt($value)
 * @method static Builder|Line whereValue($value)
 * @mixin Eloquent
 */
class Line extends Model
{
    use HasFactory;

    private string $value;
}
