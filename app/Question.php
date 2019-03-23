<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Question
 *
 * @property int $id
 * @property string $title
 * @property string $slug
 * @property string $body
 * @property int $views
 * @property int $answers
 * @property int $votes
 * @property int|null $best_answer_id
 * @property int $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Question newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Question newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Question query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Question whereAnswers($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Question whereBestAnswerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Question whereBody($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Question whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Question whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Question whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Question whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Question whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Question whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Question whereViews($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Question whereVotes($value)
 * @mixin \Eloquent
 */
class Question extends Model
{
    protected $fillable = ['title', 'body'];


    public function user() {
        return $this->belongsTo(User::class);
    }

    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = $value;
        $this->attributes['slug'] = str_slug($value);
    }
}
