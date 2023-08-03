<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Rule;
use Livewire\Form;

class PostForm extends Form
{
    public ?string $id = null;

    public function rules()
    {
        return [
            'imaginable_field' => 'rule_like_unique:table_name,column_name,'.$this->id
        ];
    }
    public function save()
    {
        /*
        When we call
        $this->validate()
        It will validate components rules when postForm wasn't filled with component mount
        But we can call postForm rules to ensure that id value is presented
        */

        dd([
            'component rules' => $this->getComponent()->getRules(),
            'postForm rules' => $this->rules(),

        ]);
    }

    public function fillFormWithDummyData(): void
    {
        $this->id = uuid_create();
    }
}
