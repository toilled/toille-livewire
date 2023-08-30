<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\Models\Title
 *
 * @property int $id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string $type
 * @property string $value
 * @method static Builder|Title newModelQuery()
 * @method static Builder|Title newQuery()
 * @method static Builder|Title query()
 * @method static Builder|Title whereCreatedAt($value)
 * @method static Builder|Title whereId($value)
 * @method static Builder|Title whereType($value)
 * @method static Builder|Title whereUpdatedAt($value)
 * @method static Builder|Title whereValue($value)
 * @mixin Eloquent
 */
class Title extends Model
{
    use HasFactory;

    private string $type;
    private string $value;
}
