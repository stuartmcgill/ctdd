@twillBlockTitle('Text and image (2 columns)')
@twillBlockIcon('b-text-img')
@twillBlockGroup('app')

@twillBlockValidationRules([
'title' => 'required',
'flip_order' => 'required',
'text' => 'required',
'highlight' => 'required',
])

<x-twill::input
  name="title"
  label="Title"
/>

<x-twill::radios
  name="flip_order"
  label="Flip column order?"
  :options="[
    ['value' => 0, 'label' => 'No'],
    ['value' => 1, 'label' => 'Yes'],
  ]"
  default="0"
/>

<x-twill::wysiwyg
  name="text"
  label="Text"
  placeholder="Text"
  :toolbar-options="[
        ['header' => [2, 3, 4, true]],
        'bold',
        'italic',
        ['list' => 'bullet'],
        ['list' => 'ordered'],
        [ 'script' => 'super' ],
        [ 'script' => 'sub' ],
        'link',
        'clean',
        'blockquote',
    ]"
/>

<x-twill::medias
  name="highlight"
  label="Image"
/>

<x-twill::wysiwyg
  name="caption"
  label="Image caption"
  :toolbar-options="[
        'link',
        'clean'
    ]"
/>
