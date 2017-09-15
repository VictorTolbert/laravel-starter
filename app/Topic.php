<?php

namespace App;

class Topic extends Model
{
    public function faqs()
    {
        return $this->hasMany(Faq::class);
    }

    public function addFaq($question, $answer)
    {
        $this->faqs()->create(compact('question', 'answer'));
    }
}
